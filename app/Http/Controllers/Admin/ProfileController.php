<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Http\Requests\InfoRequest;
use Image;
use Flashy;
use File;

class ProfileController extends Controller
{
    public function index(){
        $info = Info::find(1);
    	return view('admin.profile.index')->withInfo($info);
    }

    public function edit(){
        $info = Info::find(1);
    	return view('admin.profile.edit')->withInfo($info);
    }


    public function update(InfoRequest $request){
        $info = Info::find(1);
        
        $info->update($request->all());

        // upload image
        if($request->file('image')){
    		$image = $request->file('image');
    		$fileName = time() . '.' .$image->getClientOriginalExtension();
    		$fileLocation = getcwd() . '/images/profile/' . $fileName;
    		// Upload File
    		Image::make($image)->resize(400, null, function($constraint){
    			$constraint->aspectRatio();
    		})->crop(390, 390)->save($fileLocation);
    	    // Delete old file
    	    File::delete('documents/resume/' . $info->image);
    	    $info->image = $fileName;
    	    $info->update();
    	}

        // upload resume
    	if($request->file('resume')){
    		$resume = $request->file('resume');
    		$fileName = time() . '.' . $resume->getClientOriginalExtension();
    		$fileLocation = getcwd() . '/documents/resume';

    		// Upload File
    		$resume->move($fileLocation, $fileName);
    	    // Delete old file
    	    File::delete(getcwd() . '/documents/resume/' . $info->resume);
    	    $info->resume = $fileName;
    	    $info->update();
    	}

    	Flashy::message('Profile Updated Successfully', route('profile'));
    	return redirect()->route('profile');
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
