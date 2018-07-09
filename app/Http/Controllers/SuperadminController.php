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
        ->get();
    return view('superadmin/dashboard', compact('images'));
    
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
         if($request->hasfile('filename'))
         {
            // $file = $request->file('filename');
            // $name=time().$file->getClientOriginalName();
            // $file->move(public_path().'/images/', $name);
         }
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
    public function edit($type_ID)
    {
        $img = Image::find($type_ID);
        return view('edit', compact('img', 'type_ID'));
        // $images = Type::find($type_ID)->image;  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type_ID)
    {
        $img = Image::find($type_ID);
        $img->type_ID = $request->get('type_ID');
        $img->image = $request->get('image');
        $img->save();
        return view('superadmin')->with('success', 'Information has been added'); //link
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
