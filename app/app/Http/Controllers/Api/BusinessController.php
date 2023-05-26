<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\BusinessTrait;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    use BusinessTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $req)
    {
        
        $data = $this->create_business($req);
        if($data){
            return response()->json([
                'title' => 'Great!',
                'message' => 'Business created successfully.',
                'code' => 'success'
            ]);
        }else{
            return response()->json([
                'title' => 'Oops ..',
                'message' => 'Failed to create Business, check your entries and try again.',
                'code' => 'success'
            ]);
        }
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
