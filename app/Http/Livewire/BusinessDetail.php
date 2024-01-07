<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Artisan;
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
        Artisan::call('optimize:clear');
    }
    public function render()
    {
        
        return view('livewire.business-detail');
    }
}
