<?php

namespace App\Http\Livewire;

use App\Traits\BusinessTrait;
use App\Traits\ReviewTrait;
use Livewire\Component;

class BusinessDetail extends Component
{
    use ReviewTrait, BusinessTrait;
    public $biz, $av_rating;
    public function mount($id){
        $this->av_rating = $this->avg_rating($id);
        $this->biz = $this->getBusiness($id);
    }
    public function render()
    {
        return view('livewire.business-detail');
    }
}
