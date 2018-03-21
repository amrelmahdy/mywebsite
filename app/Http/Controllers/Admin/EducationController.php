<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Http\Requests\EducationRequest;
use Flashy;

class EducationController extends Controller
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
        $eductions = Education::orderBy('created_at', 'desc')->get();
        return view('admin.educations.index')->withEducations($eductions); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EducationRequest $request)
    {
        Education::create($request->all());
        Flashy::message('Education Added Successfully', route('educations.index'));
        return redirect()->route('educations.index');
    }

   
    public function edit($id)
    {
        $education = Education::find($id);
        return view('admin.educations.edit')->withEducation($education);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EducationRequest $request, $id)
    {
        $education = Education::find($id);
        $education->update($request->all());
        Flashy::message('Education Updated Successfully', route('educations.index'));
        return redirect()->route('educations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        if(! $education){
            Flashy::error('Education Doesn\'t Exist');
            return redirect()->back();
        }
        $education->delete();
        Flashy::message('Education Deleted Successfully', route('educations.index'));
        return redirect()->route('educations.index');
    }
}
