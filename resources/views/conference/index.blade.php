@extends('layouts.app')
@section('title', 'Conferencez')
@section('content')
    <a href="{{route('conferences.create')}}"><button type="button">Create New Conference!</button> </a>
    @foreach($conferences as $conference)
        <a href="{{route('conferences.show', ['conference' => $conference['id']])}}">
            <h2>{{$conference['title']}} ({{$conference['dateOfConference']}})</h2>
        </a>
        <p>{{$conference['description']}}</p>
        <a href="{{route('conferences.edit', ['conference'=>$conference['id']])}}"><button type="button">Edit!</button> </a>
        <br>
    @endforeach
@endsection
