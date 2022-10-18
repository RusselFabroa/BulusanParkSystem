<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animals;
use App\Models\cottages;
use App\Models\events;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CottagesController extends Controller
{
   public function addCottage(){
       return view ('adminsection.addcottage');
   }

   public function saveCottages(Request $request){

       $request->validate([
           'name' => 'required|string|max:255',
           'price' => 'required|integer',
           'description' => 'required',
           'availability' => 'required',
           'cottage_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
       ]);

    //pag-save ng image sa local storage
        $file = $request->file('cottage_image');
        $extension=$file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/cottages/',$filename);

    DB::table('cottages')->insert([
        'name'=>$request->name,
        'description'=>$request->description,
        'price'=>$request->price,
        'availability'=>$request->availability,
        'cottage_image'=>$filename

    ]);

    return back()->with('success','Cottages Added Successfully!');
   }



   public function cottagesList(){

       $cottages = DB::table('cottages')
           ->orderBy('availability')
           ->get();
       return view('adminsection.listcottages', compact('cottages'));
   }

   public function cottagesShow(){

    $cottages = DB::table('cottages')->get();
    return view('adminsection.listcottages', compact('cottages'));
}

    public function editCottages($id){
            $cottages = DB::table('cottages')->where('id', $id)->first();

            return view('adminsection.editcottages', compact('cottages'));
    }

    public function updatecottages($id, Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'description' => 'required',
            'availability' => 'required',
            'cottage_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
        ]);

        $cottage = cottages::find($id);
        $cottage->name = $request->input('name');
        $cottage->description = $request->input('description');
        $cottage->price = $request->input('price');

        $destination='uploads/cottages/'.$cottage->cottage_image;
        //delete same pic
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        //pag-save ng image sa local storage


     $file = $request->file('cottage_image');
         $extension = $file->getClientOriginalExtension();
         $filename = time() . '.' . $extension;
         $file->move('uploads/cottages/', $filename);
         $cottage->cottage_image = $filename;


        $cottage->update();
        return back()->with('success','Data Updated Successfully!');
    }

    public function deleteCottages($id){
        DB::table('cottages')->where('id', $id)->delete();
        return back()->with('success','Cottages Deleted Succesfully');
    }



//New Crud
public function createCottages(){
   return view('adminsection.addcottage2');
}

public function storeCottages($id, Request $request){


    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|integer',
        'description' => 'required',
        'availability' => 'required',
        'cottage_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
    ]);
    $cottages = new cottages;
    $cottages->name =$request->input('name');
    $cottages->price =$request->input('price');
    $cottages->description =$request->input('description');
    $cottages->availability =$request->input('availability');

    if($request->hasfile('cottage_image'))
    {
        $file = $request->file('cottage_image');
        $extension=$file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/cottages/', $filename);
        $cottages->cottage_image = $filename;
    }
    $cottages->update();

    return back()->with('success','Cottage Updated Succesfully');

 }

public function searchcottages(Request $request){
    $search = $request->get('searchcottages');
    $posts = DB::table('cottages')->where('name','like','%'.$search. '%' );
    return view('adminsection.listcottages',['posts'=>$posts]);
}

    public function editCottagesstatus($id, Request $request){
        $cottages = DB::table('cottages')->where('id', $id)->first();

        return view('adminsection.editcottagesstatus', compact('cottages'));
    }

    public function updatecottagesstatus($id, Request $request){
        $request->validate([
            'availability' => 'required',
        ]);

        $cottage = cottages::find($id);
        $cottage->availability = $request->input('availability');

        $cottage->update();
        return back()->with('success','Data Updated Successfully!');
    }
}
