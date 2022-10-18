<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\events;
use App\Models\functionhall;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FunctionHallController extends Controller
{
    public function listfunctionhall(Request $request)
    {
        $functionhalls = DB::table('functionhalls')->get();

        return view ('adminsection.functionhall-list', compact('functionhalls'));
    }//

    public function addfunctionhall(){
        return view('adminsection.functionhall-add');
    }

    public function savefunctionhall(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4000',
            'description' => 'required',
            'status' => 'required',
            'functionhall_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4000',
        ]);

        //pag-save ng image sa local storage
        $file = $request->file('functionhall_image');
        $extension=$file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/functionhalls/',$filename);

        DB::table('functionhalls')->insert([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'status'=>$request->status,
            'functionhall_image'=>$filename

        ]);

        return back()->with('success','Function Hall Added Successfully!');
    }

public function editfunctionhall($id, Request $request)
{
    $functionhall = DB::table('functionhalls')
        ->where('id', '=', $id)
        ->first();

    if($request->ajax())
    {
        $data = events::whereDate('start', '>=', $request->start)
            ->whereDate('end',   '<=', $request->end)
            ->get(['id', 'title', 'start', 'end']);
        return response()->json($data);
    }



    return view('adminsection.functionhall-edit', compact('functionhall'));
}
public function updatefunctionhall($id, Request $request){
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|integer',
        'description' => 'required',
        'status' => 'required',
        'functionhall_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4000',
    ]);

    $functionhall = functionhall::find($id);
    $functionhall->name = $request->input('name');
    $functionhall->price = $request->input('price');
    $functionhall->description = $request->input('description');
    $functionhall->status = $request->input('status');


    $destination='uploads/functionhalls/'.$functionhall->functionhall_image;
    //delete same pic
    if(File::exists($destination))
    {
        File::delete($destination);
    }
    //pag-save ng image sa local storage
    $file = $request->file('functionhall_image');
    $extension=$file->getClientOriginalExtension();
    $filename = time().'.'.$extension;
    $file->move('uploads/functionhalls/',$filename);
    $functionhall->functionhall_image = $filename;

    $functionhall->update();
    return back()->with('success','Function Hall Updated Successfully!');
}
 public function deletefunctionhall($id){
     DB::table('functionhalls')->where('id', $id)->delete();
     return back()->with('success','Data Deleted Succesfully');
 }

    public function editfunctionhallstatus($id)
    {
        $functionhall = DB::table('functionhalls')
            ->where('id', '=', $id)
            ->first();
        return view('adminsection.functionhallstatus-edit', compact('functionhall'));
    }
    public function updatefunctionhallstatus($id, Request $request)
    {
        $request->validate([
            'status' => 'required',

        ]);

        $functionhall = functionhall::find($id);
        $functionhall->status = $request->input('status');

        $functionhall->update();
        return back()->with('success', 'Function Hall Updated Successfully!');
    }

}
