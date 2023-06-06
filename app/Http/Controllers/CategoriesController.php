<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Traits\BusinessTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoriesController extends Controller
{
    use BusinessTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $biz = $this->get_all_businesses();
        return view('livewire.categories', [
            'biz' => $biz
        ]);
    }

    public function search(Request $request)
    {    
        $query = $request->input('query');

        $biz = Cache::remember('biz_search', 60 * 60, function() use ($query){
            Business::query()
            ->where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();
        });

        dd($biz);
        return view('livewire.categories', [
            'biz' => $biz
        ]);
    }

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
