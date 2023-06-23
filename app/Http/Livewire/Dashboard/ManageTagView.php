<?php

namespace App\Http\Livewire\Dashboard;

use App\Traits\CatTrait;
use Livewire\Component;

class ManageTagView extends Component
{
    use CatTrait;
    public $selectedItems = [];
    public function render()
    {
        $all_tags = $this->get_tags();
        return view('livewire.dashboard.manage-tag-view',[
            'all_tags'=>$all_tags
        ]);
    }
    
    
    public function delete($id){
        $this->delete_tag($id);
    }

    public function deleteBulk( ){
        // Permanent delete business and its reviews
        $data = $this->deleteTags($this->selectedItems);
        if($data){
            $this->selectedItems = [];
            session()->flash('success', 'Tags have been deleted successfully.');
        }else{
            session()->flash('error', 'Failed to delete.');
        }
    }
}
