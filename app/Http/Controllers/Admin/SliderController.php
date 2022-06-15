<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index(Request $request){
        $slider = DB::table('sliders')->get();
        return view('adminsection.slider-list', compact('slider'));
    }

    public function addslider(){
        return view('adminsection.slider-add');
    }
    public function saveslider(Request $request){


        $request->validate([
            'heading' => 'required|string|max:255',
            'link' => 'required|string',
            'description' => 'required',
            'link_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $slider = new slider();
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/slider/',$filename);
            $slider->image = $filename;
        }

        $slider->status = $request->input('status') == true ? '1': '0';
        $slider->save();

        return redirect()->back()->with('success','Slider Added Successfully');
    }

    public function editslider(Request $request, $id){
        $slider = slider::find($id);
        return view('adminsection.slider-edit', compact('slider'));
    }

    public function updateslider(Request $request, $id){

        $request->validate([
            'heading' => 'required|string|max:255',
            'link' => 'required|string',
            'description' => 'required',
            'link_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $slider = slider::find($id);
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');

        if($request->hasFile('image'))
        {
            $destination = 'uploads/slider/'.$slider->image;
            if(File::exists($destination)){
                    File::delete($destination);
            }
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/slider/',$filename);
            $slider->image = $filename;
        }

        $slider->status = $request->input('status') == true ? '1': '0';
        $slider->update();

        return redirect()->back()->with('success','Slider Updated Successfully');
    }

    public function deleteslider(Request $request, $id){
        DB::table('sliders')->where('id', $id)->delete();
        return back()->with('success','Data Deleted Succesfully');
    }
}
