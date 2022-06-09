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
           
            @forelse($comics as $comic)
            
                @include('partials.comic')
                @empty
                <h2>Nothing to show here...</h2>

            @endforelse

        </div>
        <div class="btn btn_load">LOAD MORE</div>

        <div class="btn btn_current">CURRENT SERIES</div>
    </div>
</div>
@endsection
