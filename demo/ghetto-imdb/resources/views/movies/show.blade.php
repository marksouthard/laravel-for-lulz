@extends('layout')

@section('content')

    {{ $movie->title or 'Unknown' }}

@endsection