<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateProfile;
use App\Http\Traits\RequestCleaner;
use App\User;

class ProfileController extends Controller
{
    use RequestCleaner;

    private $requestFields = [
        'name',
        'last_name'
    ];

    public function show(){
        return view('dashboard.profile.show')->with(['user'=>auth()->user()]);
    }

    public function updateProfile(UserUpdateProfile $request){
        $cleanRequest = RequestCleaner::cleanRequest($request, $this->requestFields);
        if($request->file('avatar')){
            $cleanRequest['avatar'] = $request->file('avatar');
        }
        $status = User::updateProfile($cleanRequest);
        if($status) return redirect()->back()->with(['status'=>'Update success!']);
        else abort('404');
    }
}
