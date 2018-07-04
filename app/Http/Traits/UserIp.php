<?php

namespace App\Http\Traits;

use App\User;
use App\UserIpList;
use App\UserIpActivation;
use Config;
use App\Http\Traits\Mailer as Mail;

trait UserIp
{
    use Mail;

    protected static function getToken()
    {
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }

    protected static function issetActivation($user, $ip)
    {
        return UserIpActivation::where('user_id', $user->id)->where('visitor', $ip)->exists();
    }

    protected static function updateActivation($user, $ip, $token){
        return UserIpActivation::where('user_id', $user->id)->where('visitor', $ip)->update(['token' => $token]);
    }

    protected static function createActivation($user, $token, $ip){
        $new_activation = new UserIpActivation();
        return $new_activation->fill(['user_id'=>$user->id, 'token'=>$token, 'visitor'=>$ip])->save();
    }

    public static function sendActivationMail($user, $token){
        return Mail::sendMail('emails.activate_user',
            ['link'=>route('user.ip.activate', $token)], $user->email, 'User ip activation letter');
    }

    public static function addIp($user, $ip){
        $user_ip = new UserIpList();
        return $user_ip->fill(['user_id'=>$user->id, 'visitor'=>$ip])->save();
    }

    public static function checkUserIp($user, $ip){
        return UserIpList::where('user_id', $user->id)->where('visitor', $ip)->exists();
    }

    public static function createIpActivation($user, $ip){
        $token = self::getToken();
        //if activation exists
        if( self::issetActivation($user, $ip) ){
            self::updateActivation($user, $ip, $token);
            return $token;
        }
        if(self::createActivation($user, $token, $ip))
            return $token;
        else return false;
    }

    public static function activateUserIpFromToken($token){
        //when !exists token in db
        if ( !UserIpActivation::where('token',$token)->exists() ) {
            return false;
        }
        $activation = UserIpActivation::where('token',$token)->first();
        $user = User::where('id', $activation->user_id)->first();
        //add white ip
        if( self::addIp($user, $activation->visitor) ){
            UserIpActivation::where('token',$token)->delete();
            return $activation->visitor;
        } else return false;
    }

}
