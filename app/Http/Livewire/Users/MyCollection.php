<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class MyCollection extends Component
{
    public function render()
    {
        return view('livewire.users.my-collection')->layout('layouts.app-plain');
    }
}
