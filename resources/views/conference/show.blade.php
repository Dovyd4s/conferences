@extends('layouts.app')
@section('title')
    Conference: {{$conference['title']}}
@endsection
@section('content')
    <h1>{{$conference['title']}}</h1>
    <p>{{$conference['description']}}</p>
@endsection
