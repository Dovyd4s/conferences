@extends('layouts.app')
@section('title')
    {{__('all.page title')}}: {{$conference['title']}}
@endsection
@section('content')
    <h1>{{$conference['title']}}</h1>
    <div>{{__('all.date')}}: {{$conference['dateOfConference']}}</div>
    <div>{{__('all.address')}}: {{$conference['country']}}, {{$conference['city']}}, {{$conference['address']}}</div>
    <p>{{__('all.description')}}: {{$conference['description']}}</p>
@endsection
