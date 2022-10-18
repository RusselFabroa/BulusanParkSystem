<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\MailNotify;
use App\Models\AboutUs;
use App\Models\events;
use Illuminate\Http\Request;
use DB;
use App\Models\cottages;
use App\Models\User;
use App\Models\Reserve;
use App\Models\ReserveTreehouse;
use App\Models\ReserveFunctionHall;
use App\Models\ReservePavillion;
use Illuminate\Support\Facades\Mail;

class InventoryCottagesController extends Controller
{


    public function inventorycottage(){
        $reserves = Reserve::with(['user', 'cottage'])
            ->where('status','=','New')
            ->get();
        return view('adminsection.inventory.inventorycottage', compact('reserves'));
       }
    public function inventorycottagepaid(){
        $reserves = Reserve::with(['user', 'cottage'])
            ->where('status','=','Paid')
            ->get();
        return view('adminsection.inventory.inventorycottage-paid', compact('reserves'));
    }
    public function inventorycottageaccepted(){
        $reserves = Reserve::with(['user', 'cottage'])
            ->where('status','=','Accepted')
            ->get();
        return view('adminsection.inventory.inventorycottage-accepted', compact('reserves'));
    }

    public function deleteCottagesReserve($id){
        DB::table('reserves')->where('id', $id)->delete();
        return back()->with('cottages_update','Reserve for Cottage Deleted Succesfully');
    }
 public function editinventorycottage($id, Request $request){
            // $reserves = DB::table('reserves')->where('id', $id)->first();
        $reserves = Reserve::with(['user', 'cottage'])->where('id', $id)->first();

                    if($request->ajax())
                 {
                     $data = events::whereDate('start', '>=', $request->start)
                         ->whereDate('end',   '<=', $request->end)
                         ->get(['id', 'title', 'start', 'end']);
                     return response()->json($data);
                 }
            return view('adminsection.inventory.UpdateStatusCottageReserve', compact('reserves'));
    }

  public function updateinventorycottage(Request $request){
       //UpdateStatus
        DB::table('reserves')->where('id', $request->id)->update([
            'status'=>$request->status
        ]);
        if ($request->status == 'Accepted'){
            DB::table('events')->insert([
                'title'=>$request->title,
                'start'=>$request->start,
                'end'=>$request->end
            ]);
        //SendMail
            $useremail = $request->email;
            $info = AboutUs::all();
            $data = [
                'subject'=>'Calapan Nature Park Reservation Notice',
                'body'=>'Hello, This is Calapan Nature Park. We have received your request reservation and we like to notice you that the '.$request->facility.' is available.
                    And we accepted your reservation ',

            ];
            try {
                Mail::to($useremail)->send( new MailNotify($data));
            }
            catch (Exception $th){
                return response()->json(['Sorry something went wrong!']);
            }

        //SendSMS






            return back()->with('info','Status Updated Succesfully');
        }
        else{
            return back()->with('success','No changes');
        }


    }

 public function inventorytreehouse(){
        $reserves = ReserveTreehouse::with(['user', 'treehouse'])
            ->where('status','=','New')->get();
       return view('adminsection.inventory.inventorytreehouse', compact('reserves'));
        }
    public function inventorytreehouseaccepted(){
        $reserves = ReserveTreehouse::with(['user', 'treehouse'])
            ->where('status','=','Accepted')->get();
        return view('adminsection.inventory.inventorytreehouse-accepted', compact('reserves'));
    }
    public function inventorytreehousepaid(){
        $reserves = ReserveTreehouse::with(['user', 'treehouse'])
            ->where('status','=','Paid')->get();
        return view('adminsection.inventory.inventorytreehouse-paid', compact('reserves'));
    }

 public function editinventorytresshouse($id, Request $request){
        $reserves = ReserveTreehouse::with(['user', 'treehouse'])->where('id', $id)->first();
        // $reserves = Reserve::with(['user', 'cottage'])->where('id', $id)->first();
     if($request->ajax())
     {
         $data = events::whereDate('start', '>=', $request->start)
             ->whereDate('end',   '<=', $request->end)
             ->get(['id', 'title', 'start', 'end']);
         return response()->json($data);
     }

            return view('adminsection.inventory.UpdateStatusTreehouseReserve', compact('reserves'));
    }

  public function updateinventorytresshouse(Request $request){
        DB::table('reservetreehouses')->where('id', $request->id)->update([

            'status'=>$request->status
        ]);

      if ($request->status == 'Accepted'){
          DB::table('events')->insert([
              'title'=>$request->title,
              'start'=>$request->start,
              'end'=>$request->end,
          ]);

          $useremail = $request->email;
          $info = AboutUs::all();
          $data = [
              'subject'=>'Calapan Nature Park Reservation Notice',
              'body'=>'Hello, This is Calapan Nature Park. We have received your request reservation and we like to notice you that the '.$request->facility.' is available.
                    And we accepted your reservation ',

          ];
          try {
              Mail::to($useremail)->send( new MailNotify($data));
          }
          catch (Exception $th){
              return Redirect::back()->withErrors(['Error' => 'Successfully Accepted but not sending email due to some errors!']);
          }



          return back()->with('info','Status Updated Succesfully');
      }
      else{
          return back()->with('success','No changes');
      }
    }


 public function inventoryfunctionhall(){
        $reserves = ReserveFunctionHall::with(['user', 'functionhall'])
            ->where('status','=','New')->get();
       return view('adminsection.inventory.inventoryfunctionhall', compact('reserves'));
        }
    public function inventoryfunctionhallaccepted(){
        $reserves = ReserveFunctionHall::with(['user', 'functionhall'])
            ->where('status','=','Accepted')->get();
        return view('adminsection.inventory.inventoryfunctionhall-accepted', compact('reserves'));
    }
    public function inventoryfunctionhallpaid(){
        $reserves = ReserveFunctionHall::with(['user', 'functionhall'])
            ->where('status','=','Paid')->get();
        return view('adminsection.inventory.inventoryfunctionhall-paid', compact('reserves'));
    }


 public function editinventoryfunctionhall($id){
        $reserves = ReserveFunctionHall::with(['user', 'functionhall'])->where('id', $id)->first();
        // $reserves = Reserve::with(['user', 'cottage'])->where('id', $id)->first();

            return view('adminsection.inventory.UpdateStatusFunctionhall', compact('reserves'));
    }
 public function updateinventoryfunctionhall(Request $request){
        DB::table('reservefunctionhall')->where('id', $request->id)->update([
            'status'=>$request->status
        ]);

     if ($request->status == 'Accepted'){
         DB::table('events')->insert([
             'title'=>$request->title,
             'start'=>$request->start,
             'end'=>$request->end,
         ]);

         $useremail = $request->email;
         $info = AboutUs::all();
         $data = [
             'subject'=>'Calapan Nature Park Reservation Notice',
             'body'=>'Hello, This is Calapan Nature Park. We have received your request reservation and we like to notice you that the '.$request->facility.' is available.
                    And we accepted your reservation ',

         ];
         try {
             Mail::to($useremail)->send( new MailNotify($data));
         }
         catch (Exception $th){
             return Redirect::back()->withErrors(['Error' => 'Successfully Accepted but not sending email due to some errors!']);
         }

         return back()->with('info','Status Updated Succesfully');
     }
     else{
         return back()->with('success','No changes');
     }
    }



 public function inventorypavillion(){
        $reserves = ReservePavillion::with(['user', 'pavillionhall'])
            ->where('status','=','New')->get();
       return view('adminsection.inventory.inventorypavillion', compact('reserves'));
        }
    public function inventorypavillionaccepted(){
        $reserves = ReservePavillion::with(['user', 'pavillionhall'])
            ->where('status','=','Accepted')->get();
        return view('adminsection.inventory.inventorypavillion-accepted', compact('reserves'));
    }
    public function inventorypavillionpaid(){
        $reserves = ReservePavillion::with(['user', 'pavillionhall'])
            ->where('status','=','Paid')->get();
        return view('adminsection.inventory.inventorypavillion-paid', compact('reserves'));
    }


 public function editinventorypavillion($id){
        $reserves = ReservePavillion::with(['user', 'pavillionhall'])->where('id', $id)->first();
        // $reserves = Reserve::with(['user', 'cottage'])->where('id', $id)->first();

            return view('adminsection.inventory.UpdateStatusPavillion', compact('reserves'));
    }
 public function updateinventorypavillion(Request $request){
        DB::table('ReservePavillion')->where('id', $request->id)->update([
            'status'=>$request->status
        ]);

     if ($request->status == 'Accepted'){
         DB::table('events')->insert([
             'title'=>$request->title,
             'start'=>$request->start,
             'end'=>$request->end,
         ]);

         $useremail = $request->email;
         $info = AboutUs::all();
         $data = [
             'subject'=>'Calapan Nature Park Reservation Notice',
             'body'=>'Hello, This is Calapan Nature Park. We have received your request reservation and we like to notice you that the '.$request->facility.' is available.
                    And we accepted your reservation ',

         ];
         try {
             Mail::to($useremail)->send( new MailNotify($data));
         }
         catch (Exception $th){
             return Redirect::back()->withErrors(['Error' => 'Successfully Accepted but not sending email due to some errors!']);
         }


         return back()->with('info','Status Updated Succesfully');
     }
     else{
         return back()->with('success','No changes');
     }
    }



public function searchcottages(Request $request){
    $search = $request->get('searchcottages');
    $posts = DB::table('reserves')->where('name','like','%'.$search. '%' )
            ->orwhere('status','like','%'.$search. '%' );
    return view('adminsection.inventory.inventorycottage',['posts'=>$posts]);
}


}
