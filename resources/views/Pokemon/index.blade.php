@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row justify-content-between">
        <div>
            <H1>Pokemon</H1>
        </div>
        <hr>
        <div>
            <a href="/pokemon/create" class="btn btn-primary"> New Post </a>
        </div>
    </div>

    <div class="row">
        @forelse ($pokemon as $poke)
            <div class="col-md-3">

                <div class="card" style="width: 18rem;">
                    <img src={{ $poke->image }} class="card-img-top" alt="...">
                    <div class="card-body mb-2">
                    <h5 class="card-title">{{$poke->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$poke->type}}</h6>
                    {{-- How to limit text --}}
                    <p class="card-text">{{Str::limit($poke->description, 40)}}</p>
                    {{-- Full Text --}}
                    {{-- <p class="card-text">{{$poke->description}}</p> --}}
                    <a href="/pokemon/{{ $poke->name }}" class="btn btn-primary">Go somewhere</a>
                    <div class="card-footer mt-2">
                        <p>Created on : {{ $poke->created_at->format('d M Y') }}</p>
                    </div>
                    </div>
                </div>

            </div>

        @empty
            <div class="col-md-6">
                <div class="alert alert-info">
                    There's no Pokemon
                </div>
            </div>

        @endforelse
        <div>
            {{ $pokemon->links() }}
        </div>

    </div>

</div>

@endsection
