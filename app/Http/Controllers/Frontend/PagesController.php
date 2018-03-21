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
use App\Mail\ContatMailer;
use Mail;
use Flashy;
use App\Http\Requests\ContactRequest;



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
	   	$samples      = Sample::orderBy('created_at', 'desc')->get();
	   	$social_media = Social::all();
	   	
	   	return view('frontend.index', compact('info',
                                                        'emails',
                                                           'skills',
                                                           'experiences',
                                                           'educations',
                                                           'categories',
                                                           'samples',
                                                            'social_media'));
   }


  /* public function downloadResume($name){
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
*/
    public function postQoute(ContactRequest $request){
       $data = [];
       $data['name'] = $request->name;
       $data['email'] = $request->email;
       $data['type'] = $request->type;
       $data['project'] = $request->project;

       Mail::to('amrelmhdy@hotmail.com')->send(new ContatMailer($data));
       Flashy::message('Thanks For Your message, you will be contacted ASAP');
       return redirect()->back();
    }
}
