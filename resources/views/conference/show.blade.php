@extends('layouts.app')

@section('content')
    <h1>{{$conference['title']}}</h1>
    <p>{{$conference['description']}}</p>
@endsection
