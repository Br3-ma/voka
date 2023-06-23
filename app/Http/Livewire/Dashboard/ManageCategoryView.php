<?php

namespace App\Http\Livewire\Dashboard;

use App\Traits\CatTrait;
use Livewire\Component;

class ManageCategoryView extends Component
{
    use CatTrait;
    public $selectedItems = [];
    public function render()
    {
        $all_categories = $this->get_categories();
        return view('livewire.dashboard.manage-category-view',[
            'all_categories'=>$all_categories
        ]);
    }

    
    public function delete($id){
        $this->delete_cat($id);
    }

    public function deleteBulk( ){
        // Permanent delete business and its reviews
        $data = $this->deleteCategories($this->selectedItems);
        if($data){
            $this->selectedItems = [];
            session()->flash('success', 'Categories have been deleted successfully.');
        }else{
            session()->flash('error', 'Failed to delete.');
        }
    }
}
