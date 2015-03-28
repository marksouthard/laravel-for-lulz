@extends('layout')

@section('content')

    <h1>Actors</h1>
    <ul>
    @foreach($actors as $actor)
        <li>
            <h2>{!! link_to_route('actor.show', $actor->name, $actor->id) !!}</h2>
            <img src="{!! asset('images/' . $actor->image) !!}">
        </li>
    @endforeach
    </ul>

@endsection