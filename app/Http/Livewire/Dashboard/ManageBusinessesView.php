<?php

namespace App\Http\Livewire\Dashboard;

use App\Traits\BusinessTrait;
use Livewire\Component;

class ManageBusinessesView extends Component
{
    use BusinessTrait;
    public $selectedItems = [];
    public function render()
    {
        $all_businesses = $this->get_all_businesses();
        return view('livewire.dashboard.manage-businesses-view',[
            'all_businesses'=> $all_businesses
        ]);
    }


    public function delete($id){
        $this->delete_biz($id);
    }

    public function deleteBulk( ){
        // Permanent delete business and its reviews
        $data = $this->deleteMany($this->selectedItems);
        if($data){
            $this->selectedItems = [];
            session()->flash('success', 'Business & reviews have been deleted successfully.');
        }else{
            session()->flash('error', 'Failed to delete.');
        }
    }
}
