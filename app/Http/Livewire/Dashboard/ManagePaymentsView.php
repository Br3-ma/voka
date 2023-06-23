<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class ManagePaymentsView extends Component
{
    public $selectedItems = [];
    public function render()
    {
        return view('livewire.dashboard.manage-payments-view');
    }

    public function delete($id){

    }

    public function deleteBulk( ){
        // Permanent delete business and its reviews
        $data = $this->deleteMany($this->selectedItems);
        if($data){
            $this->selectedItems = [];
            session()->flash('success', 'Payments have been deleted successfully.');
        }else{
            session()->flash('error', 'Failed to delete.');
        }
    }
}
