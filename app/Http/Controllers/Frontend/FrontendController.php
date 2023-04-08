<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Directory;
use App\Models\Slider;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $slider = Slider::where('status','0')->get();

      return view('frontend.index',compact('slider'));
    }

    public function directories()
    {
        $directories = Directory::where('status','0')->get();
        return view('frontend.collections.directory.index',compact('directories'));
    }


    public function department($directory_name)
    {
        $directory = Directory::where('name', $directory_name)->first();
            
        if ($directory){
            $department = $directory->department()->get();
            return view('frontend.collections.department.index',compact('department'));
        } else {
            return redirect()->back();
        }
    }
    
}