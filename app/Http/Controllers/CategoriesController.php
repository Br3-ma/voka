<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Traits\BusinessTrait;
use App\Traits\CatTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Livewire\WithPagination;

class CategoriesController extends Controller
{
    use BusinessTrait, CatTrait, WithPagination;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $categories = Category::get();
        if ($request->has('category')) {
            // Retrieve selected checkboxes categories
            $selectedCategories = $request->input('category', []);
            
            // Retrieve tag selected
            // dd($selectedCategories);

            // Retrieve the Businesses and filter the results based on the selected checkboxes
            if(is_array($selectedCategories) && !empty($selectedCategories)){
                
                $query = '';
                $search = array_map('intval', $selectedCategories);

                if (!empty($search)) {
                    $biz = Business::whereHas('bizcategories', function ($query) use ($search) {
                        $query->whereIn('categories_id', $search);
                    })->get();
                }else{
                    $biz = [];
                }

            }elseif($selectedCategories !== null){
                $query = $selectedCategories;
                $search = [];
                $results = Category::where('name', 'LIKE', '%' . $selectedCategories . '%')
                ->orWhere('desc', 'LIKE', '%' . $selectedCategories . '%')
                ->get();
                // dd($results);
                foreach ($results as $item) {
                    $search[] = $item->id; // Push each value to the array
                }
                // dd($search);
                
                $selectedCategories = $search;
                if (!empty($search)) {
                    $biz = Business::whereHas('bizcategories', function ($query) use ($search) {
                        $query->where('categories_id', $search[0]);
                    })->get();
                }else{
                    $biz = [];
                }
                
            }else{
                $query = '';
                $biz = $this->all_businesses();
            }
        }else{
            $query = '';
            $biz = $this->all_businesses();
            $selectedCategories = [];
        }
        
        return view('livewire.categories', [
            'biz' => $biz,
            'categories' => $categories,
            'selectedCategories' => $selectedCategories,
            'query' => $query
        ]);
    }

    public function search(Request $request)
    { 
        $categories = Category::get();
        $query = $request->input('query');
        $selectedCategories = [];                
        $search = [];
        $results = Category::where('name', 'LIKE', '%' . $query . '%')
        ->orWhere('desc', 'LIKE', '%' . $query . '%')
        ->get();

        foreach ($results as $item) {
            $search[] = $item->id; // Push each value to the array
        }
        // $convertedArray = array_map('intval', $search);
        
        if (!empty($search)) {
            $biz = Business::whereHas('bizcategories', function ($query) use ($search) {
                $query->whereIn('categories_id', $search);
            })
            ->orWhere('name', 'LIKE', '%'.$query.'%')
            ->orWhere('name', 'LIKE', $query.'%')
            ->orWhere('name', 'LIKE', '%'.$query)
            ->orWhere('description', 'LIKE', '%'.$query.'%')->get();
        }else{
            $biz = Business::orWhere('name', 'LIKE', '%'.$query.'%')
            ->orWhere('name', 'LIKE', $query.'%')
            ->orWhere('name', 'LIKE', '%'.$query)
            ->orWhere('description', 'LIKE', '%'.$query.'%')->get();
        }
        return view('livewire.categories', [
            'biz' => $biz,
            'categories' => $categories,
            'selectedCategories' => $selectedCategories,
            'query' => $query
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
