<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Image;
use DB;

class SuperadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = DB::table('images')
        ->select('images.id', 'images.type_ID', 'images.image', 'types.id', 'types.name', 'types.description')
        ->join('types', 'types.id', '=', 'images.type_ID')
        ->groupBy('types.id')
        ->get();
    return view('superadmin/dashboard', compact('images', 'type_ID'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // if($request->hasfile('filename'))
         // {
         //    $file = $request->file('filename');
         //    $name=time().$file->getClientOriginalName();
         //    $file->move(public_path().'/images/', $name);
         // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        
        $img = DB::table('images')
        ->select('images.id', 'images.image', 'images.type_ID', 'types.id', 'types.name', 'types.description')
        ->join('types', 'types.id', '=', 'images.type_ID')
        ->where('images.type_ID', '=', $id)
        ->first();

        return view('edit', compact('img')); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $img = DB::table('images')
        ->select('images.id', 'images.image', 'images.type_ID', 'types.id', 'types.name', 'types.description')
        ->join('types', 'types.id', '=', 'images.type_ID')
        ->where('images.type_ID', '=', $id)
        ->first();
        $img->image = $request->get('image');
        $img->description = $request->get('description');
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/image', $image_new_name);
            $img->image = 'uploads/image/'.$image_new_name;
        }
        // $img->save();
    return redirect('superadmin')->with('success', 'Information has been added'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
