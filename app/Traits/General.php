<?php

namespace App\Traits;
use App\Models\Category;
use Image;

trait General
{
    function shortenText($string, $wordsreturned)
    {
        // Strip Html Tags First
        $string = strip_tags($string);
        $retval = $string;
        $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
        $string = str_replace("\n", " ", $string);
        $array = explode(" ", $string);
        if (count($array) <= $wordsreturned)
        {
            $retval = $string;
        }
        else
        {
            array_splice($array, $wordsreturned);
            $retval = implode(" ", $array) . " ...";
        }
        return $retval;
    }



    public function uploadImage($file, $stringPath, $resizeWidth, $width = NULL, $height = NULL)
    {
        ini_set('upload_max_filesize', '10M');

        $image = $file;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imageLocation = getcwd() . '/' . $stringPath . '/' . $imageName;
        if($width != NULL && $height != NULL) {
            // Upload Image
            Image::make($image)->resize($resizeWidth, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop($width, $height)->save($imageLocation);
        } else {
            Image::make($image)->resize($resizeWidth, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($imageLocation);
        }
        return $imageName;
    }

    public function getCategoriesIds(){
        $categories = Category::all();
        $cats = [];
        foreach ($categories as $category){
            $cats[$category->id] = $category->category;
        }
        return $cats;
    }

    


}