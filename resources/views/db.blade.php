@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/comics.css')}}">
@endsection
@section('content')

<div class="main_content">
    <div class="container">
        <div class="row">
            @if($comics)
            @foreach($comics as $comic)
            <div class="col-2">
                <div class="serie-logo">
                    <img src="{{$comic['thumb']}}">
                    <div class="price">{{$comic['price']}}</div>
                </div>
                <div class="serie-title mt-2">{{$comic['title']}}</div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="btn btn_load">LOAD MORE</div>

        <div class="btn btn_current">CURRENT SERIES</div>
    </div>
</div>

@endsection
