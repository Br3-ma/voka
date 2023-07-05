<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

trait UserTrait{

    public function registerUser($req){
        $input = $req->toArray();
        // $password = 'vokamba-'.now();
        $check = User::where('email', $input['email'])->first();
        if($check == null){
                $user = User::create([
                    'fname' => $input['fname'],
                    'lname' => $input['lname'],
                    'type' => 'user',
                    'email' => $input['username'],
                    'password' => Hash::make($input['password']),
                    'terms' => 'accepted'
                ]);
                Auth::login($user);
                return $user;
        }else{
            return $check;
        }
        
    }
    public function registerOwner($req){
        $input = $req->toArray();
        // $password = 'vokamba-'.now();
        $check = User::where('email', $input['email'])->first();
        if($check == null){
                $user = User::create([
                    'fname' => $input['fname'],
                    'lname' => $input['lname'],
                    'type' => 'owner',
                    'email' => $input['username'],
                    'password' => Hash::make($input['password']),
                    'terms' => 'accepted'
                ]);
                Auth::login($user);
                return $user;
        }else{
            return $check;
        }
        
    }
    
}

