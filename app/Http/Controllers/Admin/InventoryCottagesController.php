<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB; 
use App\Models\cottages;
use App\Models\User;
use App\Models\Reserve;
use App\Models\ReserveTreehouse;
use App\Models\ReserveFunctionHall;
use App\Models\ReservePavillion;

class InventoryCottagesController extends Controller
{
    //
       public function inventorycottage(){
        $reserves = Reserve::with(['user', 'cottage'])->get();
       return view('adminsection.inventory.inventorycottage', compact('reserves'));
            }

    public function deleteCottagesReserve($id){
        DB::table('reserves')->where('id', $id)->delete();
        return back()->with('cottages_update','Reserve for Cottage Deleted Succesfully');
    }
 public function editinventorycottage($id){
            // $reserves = DB::table('reserves')->where('id', $id)->first();
        $reserves = Reserve::with(['user', 'cottage'])->where('id', $id)->first();

            return view('adminsection.inventory.UpdateStatusCottageReserve', compact('reserves'));
    }

  public function updateinventorycottage(Request $request){
        DB::table('reserves')->where('id', $request->id)->update([
            // 'name'=>$request->name,
            // 'description'=>$request->description,
            // 'price'=>$request->price,
            'status'=>$request->status
        ]);

        return back()->with('cottages_update','Status Updated Succesfully');
    }

 public function inventorytreehouse(){
        $reserves = ReserveTreehouse::with(['user', 'treehouse'])->get();
       return view('adminsection.inventory.inventorytreehouse', compact('reserves'));
        }

 public function editinventorytresshouse($id){
        $reserves = ReserveTreehouse::with(['user', 'treehouse'])->where('id', $id)->first();
        // $reserves = Reserve::with(['user', 'cottage'])->where('id', $id)->first();

            return view('adminsection.inventory.UpdateStatusTreehouseReserve', compact('reserves'));
    }

  public function updateinventorytresshouse(Request $request){
        DB::table('reservetreehouses')->where('id', $request->id)->update([
            // 'name'=>$request->name,
            // 'description'=>$request->description,
            // 'price'=>$request->price,
            'status'=>$request->status
        ]);

        return back()->with('cottages_update','Status Updated Succesfully');
    }


 public function inventoryfunctionhall(){
        $reserves = ReserveFunctionHall::with(['user', 'functionhall'])->get();
       return view('adminsection.inventory.inventoryfunctionhall', compact('reserves'));
        }


 public function editinventoryfunctionhall($id){
        $reserves = ReserveFunctionHall::with(['user', 'functionhall'])->where('id', $id)->first();
        // $reserves = Reserve::with(['user', 'cottage'])->where('id', $id)->first();

            return view('adminsection.inventory.UpdateStatusFunctionhall', compact('reserves'));
    }
 public function updateinventoryfunctionhall(Request $request){
        DB::table('reservefunctionhall')->where('id', $request->id)->update([
            // 'name'=>$request->name,
            // 'description'=>$request->description,
            // 'price'=>$request->price,
            'status'=>$request->status
        ]);

        return back()->with('cottages_update','Status Updated Succesfully');
    }



 public function inventorypavillion(){
        $reserves = ReservePavillion::with(['user', 'pavillionhall'])->get();
       return view('adminsection.inventory.inventorypavillion', compact('reserves'));
        }


 public function editinventorypavillion($id){
        $reserves = ReservePavillion::with(['user', 'pavillionhall'])->where('id', $id)->first();
        // $reserves = Reserve::with(['user', 'cottage'])->where('id', $id)->first();

            return view('adminsection.inventory.UpdateStatusPavillion', compact('reserves'));
    }
 public function updateinventorypavillion(Request $request){
        DB::table('ReservePavillion')->where('id', $request->id)->update([
            // 'name'=>$request->name,
            // 'description'=>$request->description,
            // 'price'=>$request->price,
            'status'=>$request->status
        ]);

        return back()->with('cottages_update','Status Updated Succesfully');
    }



public function searchcottages(Request $request){
    $search = $request->get('searchcottages');
    $posts = DB::table('reserves')->where('name','like','%'.$search. '%' )
            ->orwhere('status','like','%'.$search. '%' );
    return view('adminsection.inventory.inventorycottage',['posts'=>$posts]);
}


}
