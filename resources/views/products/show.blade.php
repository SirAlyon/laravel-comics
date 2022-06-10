@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/comics.css')}}">
@endsection

@section('content')
<div class="main_content">
    <div class="container">
        <div class="row">
           
            <div class="col-3">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="serie-title mt-2">{{$comic['title']}}</div>
                <div class="price">{{$comic['price']}}</div>
                <div>{{$comic['description']}}</div>
            </div>

        </div>
    </div>
</div>
@endsection