<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pavillionhall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PavillionHallController extends Controller
{
    public function listpavillionhall(){
        $pavillionhalls = DB::table('pavillionhalls')
            ->orderBy('status')
            ->get();


        return view('adminsection.pavillionhall-list', compact('pavillionhalls'));
    }

    public function addpavillionhall(){
        return view('adminsection.pavillionhall-add');
    }

    public function savepavillionhall(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'description' => 'required',
            'status' => 'required',
            'pavillionhall_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //pag-save ng image sa local storage
        $file = $request->file('pavillionhall_image');
        $extension=$file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/pavillionhalls/',$filename);

        DB::table('pavillionhalls')->insert([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'status'=>$request->status,
            'pavillionhall_image'=>$filename

        ]);

        return back()->with('success','Pavillion Hall Added Successfully!');
    }

    public function editpavillionhall($id)
    {
        $pavillionhall = DB::table('pavillionhalls')
            ->where('id', '=', $id)
            ->first();
        return view('adminsection.pavillionhall-edit', compact('pavillionhall'));
    }

    public function updatepavillionhall($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'description' => 'required',
            'status' => 'required',
            'pavillionhall_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pavillionhall = pavillionhall::find($id);
        $pavillionhall->name = $request->input('name');
        $pavillionhall->price = $request->input('price');
        $pavillionhall->description = $request->input('description');
        $pavillionhall->status = $request->input('status');


        $destination='uploads/pavillionhalls/'.$pavillionhall->pavillionhall_image;
        //delete same pic
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        //pag-save ng image sa local storage
        $file = $request->file('pavillionhall_image');
        $extension=$file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/pavillionhalls/',$filename);
        $pavillionhall->pavillionhall_image = $filename;

        $pavillionhall->update();
        return back()->with('success','Pavillion Hall Updated Successfully!');

    }

    public function deletepavillionhall($id){
        DB::table('pavillionhalls')->where('id', $id)->delete();
        return back()->with('success','Data Deleted Succesfully');
    }



    public function updatepavillionhallstatus($id, Request $request)
    {
        $request->validate([
            'status' => 'required',

        ]);

        $pavillionhall = pavillionhall::find($id);
        $pavillionhall->status = $request->input('status');
        $pavillionhall->update();
        return back()->with('success','Pavillion Hall Updated Successfully!');

    }
    public function editpavillionhallstatus($id)
    {
        $pavillionhall = DB::table('pavillionhalls')
            ->where('id', '=', $id)
            ->first();
        return view('adminsection.pavillionhallstatus-edit', compact('pavillionhall'));
    }

}
