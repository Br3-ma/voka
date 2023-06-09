<?php

namespace App\Http\Livewire\Dashboard;

use App\Traits\ReviewTrait;
use Livewire\Component;

class ManageReviewsView extends Component
{
    use ReviewTrait;

    public function render()
    {   $all_reviews = $this->all_reviews();
        return view('livewire.dashboard.manage-reviews-view',[
            'all_reviews'=>$all_reviews
        ]);
    }
}
