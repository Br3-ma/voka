<?php

namespace App\Http\Livewire;

use App\Models\BusinessReview;
use App\Traits\BusinessTrait;
use App\Traits\ReviewTrait;
use Livewire\Component;

class WriteReview extends Component
{
    use ReviewTrait, BusinessTrait;
    public $biz, $review, $recent_reviews;
    public $rating = 0;
    public function mount($id){
       $this->biz = $this->getBusiness($id);
    }
    public function render()
    {
        $this->recent_reviews = $this->get_biz_reviews($this->biz->id);
        return view('livewire.write-review');
    }

    public function rate($value){
        $this->rating = $value;
    }

    public function publish(){
        $data = [
            'business_id' => $this->biz->id,
            'user_id' => auth()->user()->id,
            'rating' => $this->rating ?? 0,
            'review' => $this->review,
            'max_rating' => 5.0,
            'status' => 1
        ];
        $this->create_review($data);
    }
}
