@extends('layout')

@section('content')

    {!! Form::model($movie, ['route' => ['movie.update', $movie->id], 'method' => 'PUT']) !!}

        <div class="form-group">
            <label for="title">Title</label>
            {!! Form::text('title', null, ['tabindex' => '1']) !!}
            {!! $errors->first('title', '<span class="error">:message</span>') !!}
        </div>

        <div class="form-group">
            <label for="release_year">Release Year</label>
            {!! Form::text('release_year', null, ['tabindex' => '2']) !!}
            {!! $errors->first('release_year', '<span class="error">:message</span>') !!}
        </div>

        {!! Form::submit('Update') !!}

    {!! Form::close() !!}

@endsection