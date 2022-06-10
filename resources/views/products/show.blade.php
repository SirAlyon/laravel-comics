@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/comics.css')}}">
<link rel="stylesheet" href="{{asset('css/single_comic.css')}}">
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <img src="{{URL::asset('/img/jumbotron.jpg')}}" alt="">
    </div>
@endsection

@section('content')
<div class="main_content">
    <div class="content-head"></div>
    <div class="container">
        <div class="row"> 
            <div class="col-7">
                <div class="single-comic">
                    <div class="thumb">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="serie-title">{{$comic['title']}}</div>
                    <div class="comic_price">
                        <span>
                            U.S. Price: 
                            <span class="text-white">{{$comic['price']}}</span>
                        </span>
                        <div class="in_stock h-100 d-flex align-items-center">
                            AVAIABLE
                            <span class="check d-flex align-items-center">
                                Check Avaibility
                            </span>
                        </div>
                    </div>
                    <div class="mt-3 text-start">{{$comic['description']}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection