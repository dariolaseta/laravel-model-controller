@extends('layouts.app')

@section('title', 'Hello World')

@section('main-content')
    @foreach ($movies as $movie)
        <div class="card">
            <h1>{{"Title: " . $movie["title"]}}</h1>
            <h2>{{"Original title: " . $movie["original_title"]}}</h2>
            <p>{{"Nationality: " . $movie["nationality"]}}</p>
            <p>{{"Date: " . $movie["date"]}}</p>
            <p>{{"Vote: " . $movie["vote"]}}</p>
        </div>
    @endforeach
@endsection