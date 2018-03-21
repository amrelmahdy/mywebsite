<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sample;
use App\Http\Requests\SampleRequest;
use Flashy;
use File;
use Super;

class SampleController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $samples = Sample::orderBy('created_at', 'desc')->get();
        return view('admin.samples.index')->withSamples($samples);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.samples.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SampleRequest $request)
    {
       // upload image
        $image  = $request->file('image');
        $imageName = Super::uploadImage($image, 'images/portfolio', 1000);
        $sample = Sample::create($request->all());
        $sample->image = $imageName;
        $sample->update();
        Flashy::message('Sample added successfully');
        return redirect()->route('samples.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sample = Sample::find($id);
        return view('admin.samples.edit', compact('sample'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SampleRequest $request, $id)
    {
        $sample = Sample::find($id);
        $sample->update($request->all());
        if($request->file('image')) {
            // Deleted old image
            File::delete(getcwd() . '/images/portfolio/' . $sample->image);
            // upload image
            $image = $request->file('image');
            $imageName = Super::uploadImage($image, 'images/portfolio', 1000);
            $sample->image = $imageName;
            $sample->update();
        }
        Flashy::message('Sample updated successfully');
        return redirect()->route('samples.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sample = Sample::find($id);
        if(!$sample){
            Flashy::error('Sample Not Found');
            return redirect()->back();
        }
        $sample->delete();
        Flashy::message('Sample deleted successfully');
        return redirect()->back();
    }
}
