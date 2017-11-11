@extends('layouts.app')

@section('content')
    {{$user->email}}
    <div id="mymap">
         {!! Mapper::render() !!}
    </div>

@endsection
