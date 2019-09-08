@extends('layout')


@section('content')
    <h1>Welcome from Proof</h1>

    <ul>
        @foreach($tasks as $task)
        <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection

