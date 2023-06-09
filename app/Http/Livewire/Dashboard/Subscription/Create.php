<?php

namespace App\Http\Livewire\Dashboard\Subscription;

use App\Traits\SubscriptionTrait;
use Livewire\Component;

class Create extends Component
{
    use SubscriptionTrait;
    public $name, $price, $desc;
    public $feat = [];

    public function render()
    {
        return view('livewire.dashboard.subscription.create');
    }

    public function store(){
        try {
            dd($this->feat);


        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function removeInput($index)
    {
        unset($this->feat[$index]);
    }
}
