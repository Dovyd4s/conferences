@extends('layouts.app')
@section('title', 'Create new Conference')
@section('content')
    <h2>Create new Conference!</h2>
    <form action="{{route('conferences.update', ['conference' => $conference->id])}}" method="POST">
        @csrf
        @method('PUT')
        @include('conference.partials.form')
        <br>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
@endsection
