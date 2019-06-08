@extends('layouts.app')

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


<link rel="apple-touch-icon" sizes="57x57" href="../images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
<link rel="manifest" href="../images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    <title>Insert Spare Part</title>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
   @if(Auth::user()->type=='2')
    <a href="{{ url('/') }}">
<img src="../images/android-icon-192x192_1.png" class="rounded mx-auto d-block" >
</a>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font">{{ __('Insert Spare Part') }}</div>

<div class="flex-center position-ref full-height">
<form method="post" action="{{url('insert/sparepart')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

<input type="hidden" name="user_id" value="{{Auth::user()->id}}">

<div class="form-group row">
<label for="sparepart" class="col-md-4 col-form-label text-md-right">{{ __('Sparepart') }}</label>
<div class="col-md-6">
<input id="sparepart" type="text" class="form-control" name="sparepart" required autofocus>
</div>
</div>
<div class="form-group row">
<label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
<div class="col-md-6">
<input id="price" type="text" name="price" class="form-control" required autofocus >
</div>
</div>

<div class="form-group row">
<label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
<div class="col-md-6">
<input id="description" type="text" name="description" class="form-control" required autofocus >
</div>
</div>

<div class="form-group row">
<label for="storename" class="col-md-4 col-form-label text-md-right">{{ __('Store name') }}</label>
<div class="col-md-6">
<input id="storename" type="text" name="storename" class="form-control" required autofocus >
</div>
</div>
    
<div class="form-group row">
<label for="Owner" class="col-md-4 col-form-label text-md-right">{{__('Image')}}</label>
<div class="col-md-6">   
<input  type="file" class="form-control" name="sparepart_Picture" required autofocus>
</div>
</div>

 <div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
<button type="submit" value="insert" class="btn btn-warning"><i class="fas fa-plus-circle"></i>{{__(' ADD')}}</button>
</form>

</div>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@else
<p>You must be Owner </p>
@endif

</body>
</html>