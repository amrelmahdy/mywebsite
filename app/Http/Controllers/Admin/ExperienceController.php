<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Http\Requests\ExperienceRequest;
use Flashy;

class ExperienceController extends Controller
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
        $experience = Experience::orderBy('created_at', 'desc')->get();
        return view('admin.experiences.index')->withExperiences($experience); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExperienceRequest $request)
    {
        $experience = Experience::create($request->all());
        if($request->current){
            $experiences = Experience::where('id', '<>', $experience->id)->get();
            foreach ($experiences as $experience) {
                $experience->current = false;
                $experience->update();
            }
        }
        Flashy::message('Experience Added Successfully', route('experiences.index'));
        return redirect()->route('experiences.index');
    }

   
    public function edit($id)
    {
        $experience = Experience::find($id);
        return view('admin.experiences.edit')->withExperience($experience);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExperienceRequest $request, $id)
    {
        $experience = Experience::find($id);
        $experience->update($request->all());
        if(! $request->current){
            $experience->current = false;
            $experience->update();
        } else {
            $experiences = Experience::where('id', '<>', $experience->id)->get();
            foreach ($experiences as $experience) {
                $experience->current = false;
                $experience->update();
            }
        }
        Flashy::message('Experience updated Successfully', route('experiences.index'));
        return redirect()->route('experiences.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::find($id);
        if(! $experience){
            Flashy::error('experience Doesn\'t Exist');
            return redirect()->back();
        }
        $experience->delete();
        Flashy::message('Experience Deleted Successfully', route('experiences.index'));
        return redirect()->route('experiences.index');
    }
}
