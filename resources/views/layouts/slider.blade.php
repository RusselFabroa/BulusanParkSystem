<html>
<head>
    <link rel="stylesheet" href="css/dashmain-style.css">

</head>
<body>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >

    <div class="carousel-inner">

        @php $i = 1; @endphp
        @foreach($sliders as $slider)
        <div class="carousel-item {{$i=='1' ? 'active':''}}">
            @php $i++; @endphp

            <img src="{{ asset('uploads/slider/'.$slider->image)}}" id="slidersss" class="d-block w-100 img-responsive" style="max-height: 500px; border: 2px orange"  alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3><b>{{$slider->heading}}</b></h3>
                <p class="text-center">{{$slider->description}}</p>
                <!--<a class="btn btn-primary" href="{{$slider->link}}">{{$slider->link_name}}</a> -->
            </div>
        </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" style="z-index: 1000" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" style="z-index: 1000" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>
</body>
</html>
