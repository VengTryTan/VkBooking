<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Image;
use App\Type;
use Carbon\Carbon;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Image::all();
        return view('image.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $types = Type::all();
         return view('image.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/image'))
            {
                mkdir('uploads/image',0777,true);
            }
            $image->move('uploads/image', $imagename);
        }else{
            $imagename = "default.png";
        }
         $items = new Image();
         $items ->type_ID = $request->type_ID;
         $items ->image = $imagename;
         $items ->save();
        return redirect()->route('image.index');
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
    public function edit($id)
    {
        //
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
        //
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

    public function index1()
    {
        $items = DB::table('types')
        ->select('types.id', 'types.name','rates.price', 'images.image', 'types.description', DB::raw('count(images.image) as total'))
        ->join('images', 'types.id', '=', 'images.type_ID')
        ->join('rates', 'images.type_ID', '=', 'rates.type_ID')
        ->groupBy('rates.type_ID')
        ->get();
    return view('welcome', compact('items'));
    }


    public function index2()
    {
        $items = DB::table('types')
        ->select('types.id', 'types.name','rates.price', 'images.image', 'types.description', DB::raw('count(images.image) as total'))
        ->join('images', 'types.id', '=', 'images.type_ID')
        ->join('rates', 'images.type_ID', '=', 'rates.type_ID')
        ->groupBy('rates.type_ID')
        ->get();
    return view('testing', compact('items'));
    }
}
