@extends('layouts.sidebar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Bulusan Park</title>
    
    <link rel="stylesheet" href="{{ url('css/treehouse/add.css') }}">
</head>
<body>
@if(Session::has('treehouse_add'))
<div class="alert alert-succes"> 
    {{Session::get('treehouse_add')}}
</div>

 @endif

<form class="form-style-9" action="{{route('update.inventorytresshouse')}}" method="post" enctype="multipart/form-data">
@csrf
<h3>Reserve for Tree House <a href='/inventorytreehouse'>Back to List</a> </h3>

<ul>
<li>
     @if(Session::has('cottages_update'))
                 <div class="alert alert-success" role="alert">
                 {{ Session::get('cottages_update') }}
                  <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> -->
                <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
            <?php Session::forget('cottages_update'); ?>
        @endif
        @if(Session::has('cottages_delete'))
                 <div class="alert alert-danger" role="alert">
                 {{ Session::get('cottages_delete') }}
                <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> -->
                <span aria-hidden="true">&times;</span>
                 </button>
                 </div>
            <?php Session::forget('cottages_delete'); ?>
        @endif  

                        <input type="hidden" name="id" value="{{$reserves->id}}"> 
                       
    <input type="text" name="name" readonly=""  value="{{$reserves->treehouse->name}}" class="field-style field-split align-left" placeholder="Name" />
    <input type="text" name="price" readonly=""  value="Php. {{$reserves->treehouse->price}}" class="field-style field-split align-right" placeholder="Price" />

</li>
<br>
<li>
  <!--   <input type="file" name="treehouse_image" class="field-style field-split align-left" placeholder="" /> -->
     <img src="{{asset('uploads/treehouses/'.$reserves->treehouse->treehouse_image)}}" width="160px" height="100px" alt="Image">
        <input type="text" name="price" readonly=""  value="{{$reserves->treehouse->status}}" class="field-style field-split align-right" placeholder="Price" />
        <strong><label style="position: relative; left:  20rem; top: 2rem">
             
        Update Status: {{$reserves->status}}</label></strong>

    <select id="status" name="status" value=" ">
                            <option id="status" name="status"  value= "{{$reserves->status}}">{{$reserves->status}}</option>
                            <option id="status" name="status"  value="Accept">Accept</option>
                            <option id="status" name="status"  value="New">New</option>
                            <option id="status" name="status"  value="Cancelled">Cancelled</option>     
                            <option id="status" name="status"  value="Not Available">Not Available</option>     
                            <option id="status" name="status"  value="Paid">Paid</option>     
                    </select>

</li>
<li>
<br>
<br>
 <strong><label style="position: relative;">
             
        Description:</label></strong>

<textarea readonly name="description" class="field-style"  value="{{$reserves->treehouse->description}}" placeholder="Description...">{{$reserves->treehouse->description}}</textarea>
</li>
<li>
    <b>User Name: </b><label class="align-left">{{$reserves->user->name}}</label><br>
<input type="submit" value="Save" />

   <b> Reservation Date: </b> <label class="align-left">{{$reserves->reserve_date}}</label><br>
   <b> Date Created:</b> <label class="align-left">{{$reserves->created_at}}</label>
    <!-- <input type="text" name="name" readonly=""  value="{{$reserves->user->name}}" class="field-style field-split align-left" placeholder="Name" />  -->
</li>
</ul>
</form>
</body>
</html>
@endsection