<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BusinessDetail extends Component
{
    public $biz;
    public function mount($id){

    }
    public function render()
    {
        return view('livewire.business-detail');
    }
}
