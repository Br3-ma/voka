<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Artisan;
use App\Traits\BusinessTrait;
use App\Traits\ReviewTrait;
use Livewire\Component;

class BusinessDetail extends Component
{
    use ReviewTrait, BusinessTrait;
    public $biz, $av_rating, $recent_reviews;
    public function mount($id){
        $this->av_rating = $this->avg_rating($id);
        $this->biz = $this->getBusiness($id);
        
        $this->recent_reviews = $this->get_biz_reviews($id);
    }
    public function render()
    {
        Artisan::call('optimize:clear');
        return view('livewire.business-detail');
    }
}
