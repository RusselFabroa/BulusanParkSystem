<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//HomePage Routes
Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/main',[\App\Http\Controllers\HomeController::class,'index']);
Route::view('/email', 'email-template');
Route::view('/admin2', 'adminsection.admin-dashboard2');
Route::view('/facility', 'adminsection.facilities-list');
Route::view('/admin3', 'adminsection.admin-dashboard2');


Auth::routes();

/*UserRoutes Prefix*/
Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web','PreventBackHistory'])->group(function (){
        Route::view('/register-customer', 'register-customer')->name('register');
        Route::view('/login-customer', 'login-customer')->name('login');
//      Route::get('/check',[App\Http\Controllers\Auth\LoginController::class, 'check'])->name('check');
//      Route::get('/verify',[App\Http\Controllers\Auth\RegisterController::class, 'verifyUser'])->name('verify.user');
        Route::post('register-user',[App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('registeruser');
///new Login
        Route::get('/login-user',[App\Http\Controllers\Auth\LoginController::class, 'loginCustomer'])->name('loginuser');
        Route::post('/create', [\App\Http\Controllers\User\UserController::class, 'create'])->name('create.user');
        Route::get('/verify', [\App\Http\Controllers\User\UserController::class, 'verify'])->name('verify');
        Route::get('/check', [\App\Http\Controllers\User\UserController::class,'check'])->name('check');

    });
    Route::middleware(['auth:web','is_user_verify_email','PreventBackHistory'])->group(function (){
        Route::get('/user-dashboard', [App\Http\Controllers\User\IndexController::class, 'dashboard'])->name('home');
        Route::get('/logout',[\App\Http\Controllers\User\IndexController::class, 'userlogout'])->name('logout');
        Route::get('/historyreserve', [App\Http\Controllers\User\IndexController::class, 'historyreserve'])->name('historyreserve.list');
        Route::get('historyreserve/{id}', [App\Http\Controllers\User\IndexController::class, 'orderDetails']);

Route::get('/historyreservetreehouse', [App\Http\Controllers\User\IndexController::class, 'historyreservetreehouse'])->name('historyreservetreehouse.list');
        Route::get('historyreservetreehouse/{id}', [App\Http\Controllers\User\IndexController::class, 'orderDetailsTreehouse']);




        Route::get('/historyreservefunctionhall', [App\Http\Controllers\User\IndexController::class, 'historyreservefunctionhall'])->name('historyreservefunctionhall.list');
        Route::get('historyreservefunctionhall/{id}', [App\Http\Controllers\User\IndexController::class, 'orderDetailsFunctionhall']);

Route::get('/historyreservepavillionhall', [App\Http\Controllers\User\IndexController::class, 'historyreservepavillionhall'])->name('historyreservepavillionhall.list');
        Route::get('historyreservepavillionhall/{id}', [App\Http\Controllers\User\IndexController::class, 'orderDetailsPavillionhall']);


//history
Route::get('/historyreserve', [App\Http\Controllers\User\IndexController::class, 'historyreserve'])->name('historyreserve.list');
        Route::get('historyreserve/{id}', [App\Http\Controllers\User\IndexController::class, 'orderDetails']);
Route::get('/historyreservetreehouse', [App\Http\Controllers\User\IndexController::class, 'historyreservetreehouse'])->name('historyreservetreehouse.list');
        Route::get('historyreservetreehouse/{id}', [App\Http\Controllers\User\IndexController::class, 'orderDetailsTreehouse']);
Route::get('/historyreservefunctionhall', [App\Http\Controllers\User\IndexController::class, 'historyreservefunctionhall'])->name('historyreservefunctionhall.list');
        Route::get('historyreservefunctionhall/{id}', [App\Http\Controllers\User\IndexController::class, 'orderDetailsFunctionhall']);
Route::get('/historyreservepavillionhall', [App\Http\Controllers\User\IndexController::class, 'historyreservepavillionhall'])->name('historyreservepavillionhall.list');
        Route::get('historyreservepavillionhall/{id}', [App\Http\Controllers\User\IndexController::class, 'orderDetailsPavillionhall']);
Route::get('/historyreport',[\App\Http\Controllers\User\IndexController::class,'historyreport'])->name('historyreport.list');

//listallfacilities
Route::get('/cottage', [App\Http\Controllers\User\IndexController::class, 'cottage'])->name('cottage.list');
Route::get('/treehouse', [App\Http\Controllers\User\IndexController::class, 'treehouse'])->name('treehouse.list');
Route::get('/functionhall', [App\Http\Controllers\User\IndexController::class, 'functionhall'])->name('functionhall.list');
Route::get('/pavilionhall', [App\Http\Controllers\User\IndexController::class, 'pavilionhall'])->name('pavilionhall.list');





        Route::get('/reservetreehouse/{id}', [App\Http\Controllers\User\ReserveTreehouseController::class, 'index'])->name('reservetreehouse.index');;
        Route::post('/reservetreehouse', [App\Http\Controllers\User\ReserveTreehouseController::class, 'saveTreehousesReserve'])->name('save.TreehousesReserve');

        Route::get('/reservecottage/{id}', [App\Http\Controllers\User\ReserveCottageController::class, 'index'])->name('reservecottage.index');;
        Route::post('/reservecottage', [App\Http\Controllers\User\ReserveCottageController::class, 'saveCottagesReserve'])->name('save.CottagesReserve');

//functionhall

        Route::get('/reservefunctionhall/{id}', [App\Http\Controllers\User\ReserveFunctionHallController::class, 'index'])->name('reservefunctionhall.index');;
        Route::post('/reservefunctionhall', [App\Http\Controllers\User\ReserveFunctionHallController::class, 'saveFunctionHallReserve'])->name('save.FunctionHallReserve');
//pavillion
        Route::get('/reservepavillion/{id}', [App\Http\Controllers\User\ReservePavillionController::class, 'index'])->name('reservepavillion.index');;
        Route::post('/reservepavillion', [App\Http\Controllers\User\ReservePavillionController::class, 'savePavillion'])->name('save.Pavillion');


//ProblemRoutes
        Route::post('/saveproblem',[\App\Http\Controllers\User\ProblemController::class,'saveProblem'])->name('save.problem');

//Book Route
        Route::post('/savebook',[\App\Http\Controllers\User\BookController::class,'savebook'])->name('save.book');
        Route::put('/updatebook/{id}',[\App\Http\Controllers\User\BookController::class,'updatebook'])->name('update.book');

//ReviewRoutes
        Route::post('/savereview',[\App\Http\Controllers\User\ReviewController::class,'saveReview'])->name('save.review');
        Route::post('/updatereview',[\App\Http\Controllers\User\ReviewController::class,'updateReview'])->name('update.review');

//PrintInvoice
        Route::get('/print-invoice/{id}',[\App\Http\Controllers\User\IndexController::class, 'printinvoice']);



    });
});









/*AdminRoutes Prefix*/
Route::prefix('admin')->name('admin.')->group(function() {

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function () {
        Route::view('/loginadmin', 'login-admin')->name('login');
        Route::get('/check',[App\Http\Controllers\Admin\AdminController::class, 'check'])->name('check');
        Route::post('register-admins',[App\Http\Controllers\Auth\RegisterController::class, 'registerAdmins'])->name('registeradmin');
        Route::get('/verify-admins',[App\Http\Controllers\Auth\RegisterController::class, 'verifyAdmins'])->name('verifyadmin');
        Route::get('/loginadmins',[App\Http\Controllers\Admin\AdminController::class, 'loginAdmins'])->name('loginadmin');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function (){

        Route::get('/add-admin', [\App\Http\Controllers\Admin\AdminController::class, 'addadmin'])->name('addadmin');

        Route::get('/admindash', [\App\Http\Controllers\Admin\AdminController::class, 'countRecord'])->name('home');
        Route::get('/logout',[\App\Http\Controllers\Admin\AdminController::class, 'adminlogout'])->name('logout');

//COTTAGES ROUTES
        Route::get('/addcottages', [\App\Http\Controllers\Admin\CottagesController::class, 'addCottage'])->name('cottages.add');
        Route::post('/addcottages', [\App\Http\Controllers\Admin\CottagesController::class, 'saveCottages'])->name('save.cottages');
        Route::get('/listcottages', [\App\Http\Controllers\Admin\CottagesController::class, 'cottagesList'])->name('cottageslist');
        Route::get('/editcottages/{id}', [\App\Http\Controllers\Admin\CottagesController::class, 'editCottages'])->name('cottages.edit');
        Route::get('/deletecottages/{id}', [\App\Http\Controllers\Admin\CottagesController::class, 'deleteCottages'])->name('cottages.delete');
        Route::put('/updatecottages/{id}', [\App\Http\Controllers\Admin\CottagesController::class, 'updatecottages'])->name('update.cottages');
        Route::get('/searchcottages',[\App\Http\Controllers\Admin\CottagesController::class, 'searchcottages'] );
        Route::get('/editcottagesstatus/{id}',[\App\Http\Controllers\Admin\CottagesController::class, 'editCottagesstatus'] );
        Route::put('/updatecottagesstatus/{id}', [\App\Http\Controllers\Admin\CottagesController::class, 'updatecottagesstatus'])->name('update.cottagesstatus');



//TREE HOUSE ROUTES
        Route::get('/treehouselist',[\App\Http\Controllers\Admin\TreeHouseController::class, 'listtreehouse'])->name('list.treehouse');
        Route::get('/treehouse-add', [\App\Http\Controllers\Admin\TreeHouseController::class, 'addtreehouse'])->name('add.treehouse');
        Route::post('/treehouse-add', [\App\Http\Controllers\Admin\TreeHouseController::class, 'savetreehouse'])->name('save.treehouse');
        Route::get('/treehouse-delete/{id}', [\App\Http\Controllers\Admin\TreeHouseController::class, 'deletetreehouse'])->name('delete.treehouse');
        Route::get('/treehouse-edit/{id}',[\App\Http\Controllers\Admin\TreeHouseController::class, 'edittreehouse'])->name('edit.treehouse');
        Route::put('/treehouse-update/{id}',[\App\Http\Controllers\Admin\TreeHouseController::class, 'updatetreehouse'])->name('update.treehouse');
        Route::get('/treehousestatus-edit/{id}',[\App\Http\Controllers\Admin\TreeHouseController::class, 'edittreehousestatus'])->name('edit.status');
        Route::put('/treehousestatus-update/{id}',[\App\Http\Controllers\Admin\TreeHouseController::class, 'updatetreehousestatus'])->name('update.treehousestatus');

        //Function Hall routes
        Route::get('/functionhall-list',[\App\Http\Controllers\Admin\FunctionHallController::class, 'listfunctionhall'])->name('list.functionhall');
        Route::get('/functionhall-add',[\App\Http\Controllers\Admin\FunctionHallController::class, 'addfunctionhall'])->name('add.functionhall');
        Route::post('functionhall-save', [\App\Http\Controllers\Admin\FunctionHallController:: class, 'savefunctionhall'])->name('save.functionhall');
        Route::get('/functionhall-edit/{id}',[\App\Http\Controllers\Admin\FunctionHallController::class,'editfunctionhall'])->name('edit.functionhall');
        Route::put('/functionhall-update/{id}',[\App\Http\Controllers\Admin\FunctionHallController::class, 'updatefunctionhall'])->name('update.functionhall');
        Route::get('/functionhall-delete/{id}',[\App\Http\Controllers\Admin\FunctionHallController::class,'deletefunctionhall'])->name('delete.functionhall');
        Route::get('/functionhallstatus-edit/{id}',[\App\Http\Controllers\Admin\FunctionHallController::class,'editfunctionhallstatus'])->name('edit.functionhallstatus');
        Route::put('/functionhallstatus-update/{id}',[\App\Http\Controllers\Admin\FunctionHallController::class, 'updatefunctionhallstatus'])->name('update.functionhallstatus');



        // Pavillion Routes
        Route::get('/pavillionhall-list',[\App\Http\Controllers\Admin\PavillionHallController::class, 'listpavillionhall'])->name('list.pavilionhall');
        Route::get('/pavillionhall-add',[\App\Http\Controllers\Admin\PavillionHallController::class, 'addpavillionhall'])->name('add.pavillionhall');
        Route::post('pavillionhall-save', [\App\Http\Controllers\Admin\PavillionHallController:: class, 'savepavillionhall'])->name('save.pavillionhall');
        Route::get('/pavillionhall-edit/{id}',[\App\Http\Controllers\Admin\PavillionHallController::class,'editpavillionhall'])->name('edit.pavillionhall');
        Route::put('/pavillionhall-update/{id}',[\App\Http\Controllers\Admin\PavillionHallController::class, 'updatepavillionhall'])->name('update.pavillionhall');
        Route::get('/pavillionhall-delete/{id}',[\App\Http\Controllers\Admin\PavillionHallController::class,'deletepavillionhall'])->name('delete.pavillionhall');
        Route::get('/pavillionhallstatus-edit/{id}',[\App\Http\Controllers\Admin\PavillionHallController::class,'editpavillionhallstatus'])->name('edit.pavillionhallstatus');
        Route::put('/pavillionhallstatus-update/{id}',[\App\Http\Controllers\Admin\PavillionHallController::class, 'updatepavillionhallstatus'])->name('update.pavillionhallstatus');


        //Animals Routes
        Route::get('animals-list',[\App\Http\Controllers\Admin\AnimalController::class, 'listanimals'])->name('list.animals');
        Route::get('/animals-add',[\App\Http\Controllers\Admin\AnimalController::class,'addanimals'])->name('add.animals');
        Route::post('animals_save',[\App\Http\Controllers\Admin\AnimalController::class,'saveanimals'])->name('save.animals');
        Route::get('/animals-edit/{id}',[\App\Http\Controllers\Admin\AnimalController::class, 'editanimals'])->name('edit.animals');
        Route::put('/animals-update/{id}', [\App\Http\Controllers\Admin\AnimalController::class, 'updateanimals'])->name('update.animals');
        Route::get('animals-delete/{id}', [\App\Http\Controllers\Admin\AnimalController::class, 'deleteanimals'])->name('delete.animals');
//Events Routes
        Route::get('/events-list', [\App\Http\Controllers\Admin\FullCalendarController::class, 'index']);
        Route::post('/events-list/action', [\App\Http\Controllers\Admin\FullCalendarController::class, 'action']);



        //Slider Routes
        Route::get('slider-list',[\App\Http\Controllers\Admin\SliderController::class, 'index']);
        Route::get('slider-add',[\App\Http\Controllers\Admin\SliderController::class, 'addslider']);
        Route::post('slider-save',[\App\Http\Controllers\Admin\SliderController::class, 'saveslider']);
        Route::get('slider-edit/{id}',[\App\Http\Controllers\Admin\SliderController::class,'editslider']);
        Route::put('slider-update/{id}', [\App\Http\Controllers\Admin\SliderController::class, 'updateslider']);
        Route::get('slider-delete/{id}',[\App\Http\Controllers\Admin\SliderController::class, 'deleteslider']);

        //inventory
        Route::get('/inventorycottage', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorycottage']);
        Route::get('/inventorycottage-paid', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorycottagepaid']);
        Route::get('/inventorycottage-accepted', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorycottageaccepted']);
//inventory cottage
        Route::get('/editinventorycottage/{id}', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'editinventorycottage'])->name('inventorycottage.edit');
        Route::post('/updateinventorycottage', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'updateinventorycottage'])->name('update.inventorycottage');
//inventory tree house
        Route::get('/editinventorytresshouse/{id}', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'editinventorytresshouse'])->name('inventorytresshouse.edit');
        Route::post('/updateinventorytresshouse', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'updateinventorytresshouse'])->name('update.inventorytresshouse');
        Route::post('/updateinventorypavillion', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'updateinventorypavillion'])->name('update.updateinventorypavillion');
        Route::get('/editinventorypavillion/{id}', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'editinventorypavillion'])->name('inventorypavillion.edit');

Route::get('/inventorytreehouse', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorytreehouse']);
Route::get('/inventorytreehouse-accepted', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorytreehouseaccepted']);
Route::get('/inventorytreehouse-paid', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorytreehousepaid']);


        Route::get('/inventoryfunctionhall', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventoryfunctionhall']);
        Route::get('/inventoryfunctionhall-accepted', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventoryfunctionhallaccepted']);
        Route::get('/inventoryfunctionhall-paid', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventoryfunctionhallpaid']);



        Route::get('/editinventoryfunctionhall/{id}', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'editinventoryfunctionhall'])->name('inventoryfunctionhall.edit');
        Route::post('/updateinventoryfunctionhall', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'updateinventoryfunctionhall'])->name('update.updateinventoryfunctionhall');

        Route::get('/inventorypavillion', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorypavillion']);
        Route::get('/inventorypavillion-accepted', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorypavillionaccepted']);
        Route::get('/inventorypavillion-paid', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorypavillionpaid']);


//sales
        //Annual
        Route::get('/salesanually', [App\Http\Controllers\Admin\SalesController::class, 'salesanually']);
        Route::get('/printanually', [App\Http\Controllers\Admin\SalesController::class, 'printanually']);
        Route::get('/generatepdf-anually', [App\Http\Controllers\Admin\SalesController::class, 'generatepdfanually'])->name('anualreport.pdf');
        //monthly
        Route::get('/salesfacilities', [App\Http\Controllers\Admin\SalesController::class, 'salesfacilities']);
        Route::get('/printmonthly', [App\Http\Controllers\Admin\SalesController::class, 'printmonthly']);
        Route::get('/generatepdf-monthly', [App\Http\Controllers\Admin\SalesController::class, 'generatepdfmonthly'])->name('monthlyreport.pdf');



        Route::get('/salestickets', [App\Http\Controllers\Admin\SalesController::class, 'salestickets']);

        Route::get('/inventorytreehouse', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorytreehouse']);
        Route::get('/searchcottages',[App\Http\Controllers\Admin\InventoryCottagesController::class, 'searchcottages'] );
        Route::get('/inventorycottage/{id}', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'deleteCottagesReserve']);



        //problemroutes
        Route::get('/listproblem',[\App\Http\Controllers\Admin\ProblemsController::class, 'listproblem'])->name('list.problem');
        Route::put('/updateproblem/{id}',[\App\Http\Controllers\Admin\ProblemsController::class, 'updateproblem'])->name('update.problem');
        Route::get('/listresolved',[\App\Http\Controllers\Admin\ProblemsController::class, 'listresolved'])->name('list.resolved');
        Route::get('/deleteproblem/{id}',[\App\Http\Controllers\Admin\ProblemsController::class, 'deleteproblem'])->name('delete.problem');
        Route::get('/problem-edit/{id}', [\App\Http\Controllers\Admin\ProblemsController::class, 'editproblem']);

//ManageUser
        Route::get('/manageuser-list',[AdminController::class, 'listmanageuser'])->name('list.manageuser');
        Route::get('/manageuser-userlist',[AdminController::class, 'listuser'])->name('list.user');

//Activities
        Route::get('/activity-list', [AdminController::class,'listactivity'])->name('list.activity');
        Route::get('activity-add',[AdminController::class, 'addactivity']);
        Route::post('activity-save',[AdminController::class, 'saveactivity'])->name('save.activity');
        Route::get('activity-edit/{id}',[AdminController::class,'editactivity']);
        Route::put('activity-update/{id}', [AdminController::class, 'updateactivity']);
        Route::get('activity-delete/{id}',[AdminController::class, 'deleteactivity']);

//Book
        Route::get('book-list', [AdminController::class, 'listbook'])->name('list.book');
        Route::get('paidbook-list', [AdminController::class, 'listpaidbook'])->name('list.paidbook');
        Route::get('/changebookstatus',[AdminController::class, 'changebookstatus']);
        Route::put('/book-update/{id}/{user_id}',[AdminController::class,'updatebook']);
        Route::get('/print-payment/{id}',[AdminController::class, 'printpayment']);
        Route::get('/updatepayment/{id}',[AdminController::class, 'updatebookstatus']);

   //Settings
        Route::get('/settings',[AdminController::class,'settings']);
        Route::put('/tickets-update/{id}',[AdminController::class,'updatetickets']);

        //AboutUS
        Route::get('/aboutus-list',[AdminController::class, 'listaboutus'])->name('list.aboutus');
        Route::get('/aboutus-edit/{id}',[AdminController::class, 'editaboutus'])->name('edit.aboutus');
        Route::put('/aboutus-update/{id}',[AdminController::class, 'updateaboutus'])->name('update.aboutus');

//SendMail
        Route::get('/send',[\App\Http\Controllers\Admin\MailController::class,'index']);
//SendSMS
        Route::get('/sendsms',[\App\Http\Controllers\Admin\TwilioSMSController::class,'index']);

//ShowCalendar
        Route::get('/showCalendar',[AdminController::class, 'showCalendar']);


    });
});
















//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//inventory
//    Route::get('/inventorycottage', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorycottage']);
//inventory cottage
//    Route::get('/editinventorycottage/{id}', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'editinventorycottage'])->name('inventorycottage.edit');
//    Route::post('/updateinventorycottage', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'updateinventorycottage'])->name('update.inventorycottage');
////inventory tree house
//    Route::get('/editinventorytresshouse/{id}', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'editinventorytresshouse'])->name('inventorytresshouse.edit');
//    Route::post('/updateinventorytresshouse', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'updateinventorytresshouse'])->name('update.inventorytresshouse');
//       Route::post('/updateinventorypavillion', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'updateinventorypavillion'])->name('update.updateinventorypavillion');
//Route::get('/editinventorypavillion/{id}', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'editinventorypavillion'])->name('inventorypavillion.edit');
////sales
//    Route::get('/salesCottage', [App\Http\Controllers\Admin\SalesController::class, 'salesCottage']);
//    Route::get('/salesTreehouse', [App\Http\Controllers\Admin\SalesController::class, 'salesTreehouse']);
//
//    Route::get('/inventorytreehouse', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'inventorytreehouse']);
//    Route::get('/searchcottages',[App\Http\Controllers\Admin\InventoryCottagesController::class, 'searchcottages'] );
//    Route::get('/inventorycottage/{id}', [App\Http\Controllers\Admin\InventoryCottagesController::class, 'deleteCottagesReserve']);


//ManageUsers



//mail-admin with login

    /*End of Admin Routes*/






//USER SECTIONS
//Route::view('/logincustomer', 'login-customer')->name('logincustomer');
//
//Route::get('/reservecottage/{id}', [App\Http\Controllers\User\ReserveCottageController::class, 'index'])->name('reservecottage.index');;
//Route::post('/reservecottage', [App\Http\Controllers\User\ReserveCottageController::class, 'saveCottagesReserve'])->name('save.CottagesReserve');
//
//Route::get('/reservefunctionhall/{id}', [App\Http\Controllers\User\ReserveFunctionHallController::class, 'index'])->name('reservefunctionhall.index');;
//Route::post('/reservefunctionhall', [App\Http\Controllers\User\ReserveFunctionHallController::class, 'saveFunctionHallReserve'])->name('save.FunctionHallReserve');
//
//Route::get('/reservepavillion/{id}', [App\Http\Controllers\User\ReservePavillionController::class, 'index'])->name('reservepavillion.index');;
//Route::post('/reservepavillion', [App\Http\Controllers\User\ReservePavillionController::class, 'savePavillion'])->name('save.Pavillion');
//Route::get('/reservetreehouse/{id}', [App\Http\Controllers\User\ReserveTreehouseController::class, 'index'])->name('reservetreehouse.index');;
//Route::post('/reservetreehouse', [App\Http\Controllers\User\ReserveTreehouseController::class, 'saveTreehousesReserve'])->name('save.TreehousesReserve');
//



