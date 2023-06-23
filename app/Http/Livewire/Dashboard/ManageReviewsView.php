<?php

namespace App\Http\Livewire\Dashboard;

use App\Traits\ReviewTrait;
use Livewire\Component;

class ManageReviewsView extends Component
{
    use ReviewTrait;
    public $selectedItems = [];

    public function render()
    {   $all_reviews = $this->all_reviews();
        return view('livewire.dashboard.manage-reviews-view',[
            'all_reviews'=>$all_reviews
        ]);
    }
    
    public function delete($id){
        $this->delete_review($id);
    }

    public function deleteBulk( ){
        // Permanent delete business and its reviews
        $data = $this->deleteReviews($this->selectedItems);
        if($data){
            $this->selectedItems = [];
            session()->flash('success', 'Reviews have been deleted successfully.');
        }else{
            session()->flash('error', 'Failed to delete.');
        }
    }
}
