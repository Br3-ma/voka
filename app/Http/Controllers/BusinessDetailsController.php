<?php

namespace App\Http\Controllers;

use App\Traits\BusinessTrait;
use App\Traits\ReviewTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BusinessDetailsController extends Controller
{
    use BusinessTrait, ReviewTrait;
    /**
     * Display a listing of the resource.
     */
    public function index($id, $rev = null)
    {
        $user_review = $this->get_review($rev);
        $biz = $this->getBusiness($id);
        return view('livewire.business-detail',[
            'biz' => $biz,
            'review' => $user_review
        ]);
    }
    // public function index($id, $rev = null)
    // {
    //     $user_review = Cache::remember('review_detail', 60 * 60, function() use ($rev){
    //         return $this->get_review($rev);
    //     });
    //     $biz = Cache::remember('biz_info', 60 * 60, function() use ($id){
    //         return $this->getBusiness($id);
    //     });
    //     return view('livewire.business-detail',[
    //         'biz' => $biz,
    //         'review' => $user_review
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
