@extends('layouts.app')
@section('title', 'Conferencez')
@section('content')
    @foreach($conferences as $conference)
        <h1>{{$conference['title']}}</h1>
        <p>{{$conference['description']}}</p>
        <br>
    @endforeach
@endsection
