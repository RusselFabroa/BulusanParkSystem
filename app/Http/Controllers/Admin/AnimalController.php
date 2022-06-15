<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AnimalController extends Controller
{
    public function listanimals(Request $request){

        $animals= DB::table('animals')->get();
        return view('adminsection.animals-list', compact('animals'));
    }

    public function addanimals(){
        return view ('adminsection.animals-add');
    }

    public function saveanimals(Request $request){
        //pag-save ng image sa local storage
        $file = $request->file('animals_image');
        $extension=$file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/animals/',$filename);

        DB::table('animals')->insert([
            'name'=>$request->name,
            'description'=>$request->description,
            'animals_image'=>$filename

        ]);

        return back()->with('success','Animals Added Successfully!');
    }

    public function editanimals($id, Request $request){
        $animals = DB::table('animals')
            ->where('id', '=', $id)
            ->first();
        return view ('adminsection.animals-edit', compact('animals'));
    }


public function updateanimals($id, Request $request){

    $animals = Animals::find($id);
    $animals->name = $request->input('name');
    $animals->description = $request->input('description');

    $destination='uploads/animals/'.$animals->animals_image;
    //delete same pic
    if(File::exists($destination))
    {
        File::delete($destination);
    }

    //pag-save ng image sa local storage
    $file = $request->file('animals_image');
    $extension=$file->getClientOriginalExtension();
    $filename = time().'.'.$extension;
    $file->move('uploads/animals/',$filename);
    $animals->animals_image = $filename;


    $animals->update();
    return back()->with('success','Data Updated Successfully!');
}

    public function deleteanimals($id){
        DB::table('animals')->where('id', $id)->delete();
        return back()->with('success','Data Deleted Succesfully');
    }
}