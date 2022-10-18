<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animals;
use App\Models\animals_species;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{
    public function listanimals(Request $request){
//        $adminname = Auth::guard('admin')->name();

        $animals= DB::table('animals')->get();
        return view('adminsection.animals-list', compact('animals'));
    }

    public function addanimals(){
        $father = DB::table('animals')->where('gender','male')
            ->orderBy('species')
            ->get();
        $mother = Animals::where('gender','female')
            ->orderBy('name')
            ->get();
        $species = animals_species::all();

        return view ('adminsection.animals-add', compact('father','mother','species'));
    }

    public function saveanimals(Request $request){
        //pag-save ng image sa local storage

        $file = $request->file('animals_image');
        $extension=$file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/animals/',$filename);

        $father = $request->input('father');
        $mother = $request->input('mother');

        DB::table('animals')->insert([
            'name'=>$request->name,
            'description'=>$request->description,
            'animals_image'=>$filename,
            'gender' => $request->gender,
            'species' =>$request->species,
            'parents'=> "$father & $mother"

        ]);

        return back()->with('success','Animals Added Successfully!');
    }

    public function editanimals($id, Request $request){
        $animals = DB::table('animals')
            ->where('id', '=', $id)
            ->first();
        $father = DB::table('animals')->where('gender','male')
            ->orderBy('species')
            ->get();
        $mother = Animals::where('gender','female')
            ->orderBy('name')
            ->get();
        $species = animals_species::all();
        return view ('adminsection.animals-edit', compact('animals','father','mother','species'));
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
