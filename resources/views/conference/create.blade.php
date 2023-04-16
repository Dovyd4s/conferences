@extends('layouts.app')
@section('title', 'Create new Conference')
@section('content')
    <h2>Create new Conference!</h2>
    <form action="{{route('conferences.store')}}" method="POST">
        @csrf
        <div>
            <label for="title-input">Title</label>
            <input id="title-input" type="text" name="title">
        </div>
        <div>
            <label for="description-input">Description</label>
            <textarea id="description-input" name="description"></textarea>
        </div>
        <div>
            <label for="date-input">Date</label>
            <input id="date-input" type="date" name="date">
        </div>
        <div>
            <label for="address-input">Address</label>
            <input id="address-input" type="text" name="address">
        </div>
        <br>
        <div>
            <input type="submit" value="Create">
        </div>

    </form>
@endsection
