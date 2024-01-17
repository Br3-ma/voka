<?php

namespace App\Http\Livewire\Users;

use App\Traits\ReviewTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class MyProfile extends Component
{
    use ReviewTrait, WithFileUploads;

    public $pic, $my_reviews, $my_followers, $following, $user;

    public function mount(){
        $this->user = auth()->user();
        $this->my_reviews = $this->my_reviews();
        // $this->my_followers = ;
        // $this->following = ;
    }

    public function render()
    {
        return view('livewire.users.my-profile')->layout('layouts.app-plain');
    } 

    public function updatedPic()
    {
        try {
            $input = ['pic' => $this->pic];
            Validator::make($input, [
                'pic' => 'image|max:1024', // Example validation rules
            ]);
    
            // Move the uploaded file to the public storage directory
            $path = $this->pic->store('profile-photos');
    
            // Save the file path in the database
            Auth::user()->update([
                'pic' => $path,
                'profile_photo_path' => $path
            ]);
    
            // Optionally, display a success message to the user
            session()->flash('success', 'Picture uploaded successfully.');
        } catch (\Throwable $th) {
            dd($th);
            
            session()->flash('error', 'Failed.');
        }
    }
}
