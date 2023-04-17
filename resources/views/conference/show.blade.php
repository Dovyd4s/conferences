@extends('layouts.app')
@section('title')
    Conference: {{$conference['title']}}
@endsection
@section('content')
    <h1>{{$conference['title']}}</h1>
    <div>Conference date: {{$conference['dateOfConference']}}</div>
    <div>Conference address: {{$conference['address']}}</div>
    <p>{{$conference['description']}}</p>
@endsection
