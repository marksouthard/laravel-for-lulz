@extends('layout')

@section('content')

    <h1>{{ $actor->name }}</h1>

    <img src="{!! asset('images/' . $actor->image) !!}">

@endsection