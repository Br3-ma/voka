<?php

namespace App\Http\Livewire\Dashboard;

use App\Traits\CatTrait;
use Livewire\Component;

class ManageCategoryView extends Component
{
    use CatTrait;
    public function render()
    {
        $all_categories = $this->get_categories();
        return view('livewire.dashboard.manage-category-view',[
            'all_categories'=>$all_categories
        ]);
    }
}
