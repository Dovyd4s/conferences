@extends('layouts.app')
@section('title', 'Create new Conference')
@section('content')
    <h2>Create new Conference!</h2>
    <form action="{{route('conferences.store')}}" method="POST">
        @csrf
        @include('conference.partials.form')
        <br>
        <div>
            <input type="submit" value="Create">
        </div>

    </form>
@endsection
