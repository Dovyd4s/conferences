@extends('layouts.app')
@section('title', 'Create new Conference')
@section('content')
    <h2>Create new Conference!</h2>
    <form action="{{route('conferences.store')}}" method="POST">
        @csrf
        <div>
            <label for="title-input" >Title</label>
            <input id="title-input" type="text" name="title" value="{{old('title')}}">
        </div>
        <div>
            <label for="description-input">Description</label>
            <textarea id="description-input" name="description">{{old('description')}}</textarea>
        </div>
        <div>
            <label for="date-input">Date of Conference</label>
            <input id="date-input" type="date" name="date" value="{{old('date')}}">
        </div>
        <div>
            <label for="address-input">Address</label>
            <input id="address-input" type="text" name="address" value="{{old('address')}}">
        </div>
        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li style="color: red">{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
        <div>
            <input type="submit" value="Create">
        </div>

    </form>
@endsection
