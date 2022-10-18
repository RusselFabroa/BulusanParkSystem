<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\treehouse;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TreeHouseController extends Controller
{

    public function addtreehouse(){
        return view ('adminsection.treehouse-add');
    }

    public function savetreehouse(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'description' => 'required',
            'status' => 'required',
            'treehouse_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4000',
        ]);

        //pag-save ng image sa local storage
        $file = $request->file('treehouse_image');
        $extension=$file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/treehouses/',$filename);

    DB::table('treehouse')->insert([
        'name'=>$request->name,
        'description'=>$request->description,
        'price'=>$request->price,
        'status'=>$request->status,
        'treehouse_image'=>$filename

    ]);

    return back()->with('success','TreeHouse Added Successfully!');
   }

   public function listtreehouse(Request $request){
       $treehouses = DB::table('treehouse')
           ->orderBy('status')
           ->get();
       return view('adminsection.treehouse-list', compact('treehouses'));
   }
   public function deletetreehouse($id){
    DB::table('treehouse')->where('id', $id)->delete();
    return back()->with('success','Data Deleted Succesfully');
}

public function edittreehouse($id)
{
    $treehouse= treehouse::find($id);
    return view('adminsection.treehouse-edit', compact('treehouse'));
}
public function updatetreehouse(Request $request, $id){
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|integer',
        'description' => 'required',
        'status' => 'required',
        'treehouse_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4000',
    ]);

    $treehouse = treehouse::find($id);
    $treehouse->name = $request->input('name');
    $treehouse->price = $request->input('price');
    $treehouse->description = $request->input('description');
    $treehouse->status = $request->input('status');


     $destination='uploads/treehouses/'.$treehouse->treehouse_image;
     //delete same pic
     if(File::exists($destination))
     {
         File::delete($destination);
     }
    //pag-save ng image sa local storage
     $file = $request->file('treehouse_image');
     $extension=$file->getClientOriginalExtension();
     $filename = time().'.'.$extension;
     $file->move('uploads/treehouses/',$filename);
     $treehouse->treehouse_image = $filename;

    $treehouse->update();
 return back()->with('success','TreeHouse Updated Successfully!');
}

    public function edittreehousestatus($id)
    {
        $treehouse= treehouse::find($id);
        return view('adminsection.treehousestatus-edit', compact('treehouse'));
    }

    public function updatetreehousestatus(Request $request, $id)
    {
        $request->validate([

            'status' => 'required',

        ]);

        $treehouse = treehouse::find($id);
        $treehouse->status = $request->input('status');


        $treehouse->update();
        return back()->with('success', 'TreeHouse Updated Successfully!');
    }

}
