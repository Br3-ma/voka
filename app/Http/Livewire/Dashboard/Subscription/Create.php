<?php

namespace App\Http\Livewire\Dashboard\Subscription;

use App\Traits\SubscriptionTrait;
use Livewire\Component;

class Create extends Component
{
    use SubscriptionTrait;
    public $name, $price, $desc, $user_id;
    public $feat = [];
    public $feat_price = [];

    public function render()
    {
        $this->user_id = auth()->user()->id;
        return view('livewire.dashboard.subscription.create');
    }

    public function store(){
        $data = $this->create_subscription($this->all());
        if ($data) {
            session()->flash('success', 'Ok, '.$this->name.' has been added to subscriptions!');
            $this->reset();
            return redirect()->route('create-subscription');
        } else {
            session()->flash('error', 'Failed, '.$this->name.' Unable to add subscriptions!');
            return redirect()->route('create-subscription');
        }
    }

    public function addInput()
    {
        $this->feat[] = '';
    }

    public function removeInput($index)
    {
        unset($this->feat[$index]);
    }
}
