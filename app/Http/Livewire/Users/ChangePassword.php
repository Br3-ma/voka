<?php

namespace App\Http\Livewire\Users;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ChangePassword extends Component
{
    public $old_pass, $new_pass, $confirm_pass;

    public function render()
    {
        return view('livewire.users.change-password')->layout('layouts.app-plain');
    }

    public function update(){
        // Check if old password is correct
        // Compare the value with the current password
        if (Hash::check($this->old_pass, auth()->user()->password)) {
            if($this->new_pass == $this->confirm_pass){
                // Hash the new password
                $hashedPassword = Hash::make($this->new_pass);
                $user = Auth::user();
                // Update the user's password
                $user->update([
                    'password' => $hashedPassword,
                ]);
                Auth::login($user);
                Session::flash('success', "Your password has been successfully changed.");
            }else{
                Session::flash('error', "New password and Confirm Password does not match.");
            }
        } else {
            // The value does not match the current password
            Session::flash('error', "Incorrect current password.");
        }
    }
}
