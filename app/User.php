<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\PasswordReset as Reset;
use App\Http\Traits\FileSystem;

class User extends Authenticatable
{
    use Notifiable;
    use FileSystem;

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new Reset($token));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activated',
        'name',
        'last_name',
        'phone',
        'passport',
        'wallet',
        'date_of_birth',
        'address',
        'city',
        'country',
        'gender',
        'avatar',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function userIp()
    {
        return $this->hasMany('App\UserIpList');
    }

    public static function updateProfile($data){
        $user = auth()->user();
        $data = array_filter($data, function($value) { return $value !== ''; });
        //save avatar
        if(isset($data['avatar'])) {
            $avatar_path = FileSystem::updateImage($data['avatar'], 'images.users', $user->avatar);
            $data['avatar'] = $avatar_path;
        }
        return $user->update($data);
    }

}
