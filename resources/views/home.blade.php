@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/comics.css')}}">
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <img src="{{URL::asset('/img/jumbotron.jpg')}}" alt="">
    </div>
@endsection

@section('content')

<div class="main_content">
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-3">TOP RATED COMICS</h1>
            <div class="serie-logo">
            </div>
        </div>
    </div>
</div>

@endsection
