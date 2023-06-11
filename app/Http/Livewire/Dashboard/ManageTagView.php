<?php

namespace App\Http\Livewire\Dashboard;

use App\Traits\CatTrait;
use Livewire\Component;

class ManageTagView extends Component
{
    use CatTrait;
    public function render()
    {
        $all_tags = $this->get_tags();
        return view('livewire.dashboard.manage-tag-view',[
            'all_tags'=>$all_tags
        ]);
    }
}
