<?php

namespace App\Http\Livewire\Dashboard\Subscription;

use App\Traits\SubscriptionTrait;
use Livewire\Component;

class Create extends Component
{
    use SubscriptionTrait;
    public $business_id, $user_id, $sub_package_id, $payment_status, $is_active, $status;

    public function render()
    {
        return view('livewire.dashboard.subscription.create');
    }

    public function store(){
        try {
            $req = $this->all();
            $this->create_subscription($req);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
