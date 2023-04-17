@extends('layouts.app')
@section('title', 'Conferencez')
@section('content')
    <div class="container p-5 my-5 border">
        @auth
            <a href="{{route('conferences.create')}}"><button class="btn btn-outline-success" type="button">Create New Conference!</button> </a>
        @endauth

        @foreach($conferences as $conference)
                <div class="container p-5 my-5 border">
                    <a href="{{route('conferences.show', ['conference' => $conference['id']])}}">
                        <h2>{{$conference['title']}} ({{$conference['dateOfConference']}})</h2>
                    </a>
                    <p>{{$conference['description']}}</p>

                    @auth
                        <a href="{{route('conferences.edit', ['conference'=>$conference['id']])}}">
                            <button class="btn btn-outline-dark" type="button">Edit!</button>
                        </a>
                        <form action="{{route('conferences.destroy', ['conference' => $conference['id']])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger" type="submit">Delete</button>
                        </form>
                    @endauth
                    <br>
                </div>

        @endforeach
    </div>

@endsection
