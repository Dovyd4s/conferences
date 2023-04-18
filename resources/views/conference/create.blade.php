@extends('layouts.app')

@section('title')
    {{__('all.create new conference')}}
@endsection

@section('content')
    <h2>{{__('all.create new conference')}}</h2>
    <form action="{{route('conferences.store')}}" method="POST">
        @csrf
        @include('conference.partials.form')
        <br>
        <div>
            <button class="btn btn-warning" type="submit" value="Create">{{__('all.create')}}</button>
        </div>

    </form>
@endsection
