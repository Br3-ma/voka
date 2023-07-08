<?php

namespace App\Http\Livewire\Users;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditProfile extends Component
{
    public $fname, $lname, $email, $about, $address, $ilove, $nickname, $dob, $gender;

    public function mount(){
        $this->fname = auth()->user()->fname;
        $this->lname = auth()->user()->lname;
        $this->email = auth()->user()->email;
        $this->about = auth()->user()->about;
        $this->gender = auth()->user()->gender;
        $this->dob = auth()->user()->dob;
        $this->address = auth()->user()->address;
        $this->ilove = auth()->user()->ilove;
        $this->nickname = auth()->user()->nickname;
    }

    public function render()
    {
        return view('livewire.users.edit-profile')->layout('layouts.app-plain');
    }

    public function update(){

        try {
            $user = Auth::user();
            $input = ['email' => $this->email];
            Validator::make($input, [
                'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            ]);
            // Update the user's password
            $user->update([
                'fname' => $this->fname,
                'lname' => $this->lname,
                'email' => $this->email,
                'about' => $this->about,
                'gender' => $this->gender,
                'dob' => $this->dob,
                'address' => $this->address,
                'ilove' => $this->ilove,
                'nickname' => $this->nickname,
            ]);
            Session::flash('success', "Profile updated successfully.");
        } catch (\Throwable $th) {
            dd($th);
            Session::flash('error', "Incorrect current password.");
        }
    }
}
