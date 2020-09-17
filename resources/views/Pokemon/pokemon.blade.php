@extends('layouts.app')

@section('title', $pokemon->name)
@section('content')

    <div class="container">
        <h1>{{ $pokemon->name }}</h1>
        <h3>{{ $pokemon->type }}</h3>
        <p> {{ $pokemon->description }} </p>
        <img src={{ $pokemon->image }} alt="">
    </div>

@endsection
