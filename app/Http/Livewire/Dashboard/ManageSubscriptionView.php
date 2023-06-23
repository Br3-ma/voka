<?php

namespace App\Http\Livewire\Dashboard;

use App\Traits\SubscriptionTrait;
use Livewire\Component;

class ManageSubscriptionView extends Component
{
    use SubscriptionTrait;
    public $selectedItems = [];
    public function render()
    {
        $subscriptions = $this->get_all_subs();
        return view('livewire.dashboard.manage-subscription-view',[
            'subscriptions' => $subscriptions
        ]);
    }
    
    public function delete($id){
        $this->delete_subscription($id);
    }

    public function deleteBulk( ){
        // Permanent delete business and its reviews
        $data = $this->deleteSubscriptions($this->selectedItems);
        if($data){
            $this->selectedItems = [];
            session()->flash('success', 'Subscriptions have been deleted successfully.');
        }else{
            session()->flash('error', 'Failed to delete.');
        }
    }
}
