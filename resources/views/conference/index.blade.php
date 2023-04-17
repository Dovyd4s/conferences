@extends('layouts.app')
@section('title', 'Conferencez')
@section('content')
    @auth
        <a href="{{route('conferences.create')}}"><button type="button">Create New Conference!</button> </a>
    @endauth

    @foreach($conferences as $conference)
        <a href="{{route('conferences.show', ['conference' => $conference['id']])}}">
            <h2>{{$conference['title']}} ({{$conference['dateOfConference']}})</h2>
        </a>
        <p>{{$conference['description']}}</p>

        @auth
            <a href="{{route('conferences.edit', ['conference'=>$conference['id']])}}"><button type="button">Edit!</button> </a>
            <form action="{{route('conferences.destroy', ['conference' => $conference['id']])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endauth
        <br>
    @endforeach
@endsection
