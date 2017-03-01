<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Category;
use App\Models\Sample;
use App\Models\Social;



class PagesController extends Controller
{
    public function index(){
	   	// Return view Home
	   	$info = Info::find(1);
	   	$emails       = explode('/', $info->email);
	   	$skills       = Skill::all();
	   	$experiences  = Experience::orderBy('id', 'desc')->get();
	   	$educations   = Education::all();
	   	$categories   = Category::all();
	   	$samples      = Sample::all(); 
	   	$social_media = Social::all();
	   	
	   	return view('frontend.index')->with(['info' => $info,
	   		                                 'emails'       => $emails,
	   	                                     'skills'       => $skills,
	   	                                     'experiences'  => $experiences,
	   	                                     'educations'   => $educations,
	   	                                     'categories'   => $categories,
	   	                                     'samples'      => $samples,
	   	                                     'social_media' => $social_media ]);
   }


   public function downloadResume($name){
    	$fileLocation = getcwd() . '/documents/resume/' . $name;
    	if(file_exists($fileLocation)){
    		return response()->download($fileLocation, $name, [
    			'Content-Length : ' . filesize($fileLocation),
    		]);
    	} else {
    		 // Error
             exit('Requested file does not exist on our server!');
    	} 
    }
}
