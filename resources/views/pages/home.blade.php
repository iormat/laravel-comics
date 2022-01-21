@extends('layouts.main-layout')

@section('content')
    <main>
        <h2>
            Hello World from Home
        </h2>
        <a href="{{route('test')}}">GO TO TEST PAGE</a>
    </main>
@endsection