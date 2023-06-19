<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Traits\BusinessTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $biz = Business::where('id', $request->toArray()['biz_id'])->first();
            $biz->name = $request->toArray()['name'];
            $biz->category_id = $request->toArray()['category_id'];
            $biz->user_id = $request->toArray()['user_id'];
            $biz->description = $request->toArray()['description'];
            $biz->save();

            if ($request->file('image_path')) {
                $cover_image = Storage::put('business', $request->file('image_path'));
            }
            $biz->cover = isset($cover_image) ? $cover_image : '';
            $biz->save();
            return redirect()->route('manage-business');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
