<html>
<head>

</head>
<body>
@if ($message = Session::get('success'))
<div class="alert alert-primary" role="alert">
    {{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('verify-success'))
    <div class="alert alert-dark" role="alert">
{{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-dark" role="alert">
        {{ $message }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-warning" role="alert">

    Please check the form below for errors
</div>
@endif
</body>
</html>
