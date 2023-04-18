@extends('layouts.app')
@section('title')
    {{__('all.edit conference')}}
@endsection
@section('content')
    <h2>{{__('all.edit conference')}}</h2>
    <form action="{{route('conferences.update', ['conference' => $conference->id])}}" method="POST">
        @csrf
        @method('PUT')
        @include('conference.partials.form')
        <br>
        <div>
            <input type="submit" value={{__('all.update')}}>
        </div>
    </form>
@endsection
