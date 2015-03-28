@extends('layout')

@section('content')

    <h1>Movies</h1>

    <ul>
    @foreach($movies as $movie)
        <li><strong><a href="/movie/{{ $movie->id }}/edit">{{ $movie->title or 'Working Title' }}</a></strong> — {{ $movie->release_year }}</li>
        <ul>
            @foreach($movie->actors as $actor)
                <li>{!! link_to_route('actor.show', $actor->name, $actor->id) !!}</li>
            @endforeach
        </ul>
    @endforeach
    </ul>

@endsection