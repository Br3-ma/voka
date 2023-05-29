<?php

namespace App\Traits;

use App\Models\User;
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
                    'email' => $input['username'],
                    'password' => Hash::make($input['password']),
                    'terms' => 'accepted'
                ]);
                // $user->assignRole('user');
                return $user;
        }else{
            return $check;
        }
        
    }

    
}

