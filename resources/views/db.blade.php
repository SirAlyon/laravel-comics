@extends('layouts.app')

@section('content')
caadssd
@if($comics)
@foreach($comics as $comic)
<span>{{$comic['title']}}</span>
@endforeach
@else
<span>non worka</span>
@endif
@endsection