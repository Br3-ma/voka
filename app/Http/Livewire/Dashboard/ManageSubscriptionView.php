<?php

namespace App\Http\Livewire\Dashboard;

use App\Traits\SubscriptionTrait;
use Livewire\Component;

class ManageSubscriptionView extends Component
{
    use SubscriptionTrait;
    public function render()
    {
        $subscriptions = $this->get_all_subs();
        return view('livewire.dashboard.manage-subscription-view',[
            'subscriptions' => $subscriptions
        ]);
    }
}
