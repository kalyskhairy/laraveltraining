@extends('layouts.app', ['title' => 'Create Pokemon'])


@section('content')

<div class="container">

    <form action="/pokemon/create" method="POST">
        {{-- CORS --}}
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image">
            <small id="imageHelp" class="form-text text-muted">Copy image URL of Pokemon</small>
        </div>
        <div class="form-group">

            <label for="type">Type</label>
                <select class="form-control" id="type" name="type">
                    <option disabled selected> Type </option>
                    <option value="Fire" {{ "Fire" ? 'selected' : '' }}>Fire</option>
                    <option value="Water" {{ "Water" ? 'selected' : '' }}>Water</option>
                    <option value="Grass" {{ "Grass" ? 'selected' : '' }}>Grass</option>
                    <option value="Physic" {{ "Physic" ? 'selected' : '' }}>Physic</option>
                    <option value="Electric" {{ "Electric" ? 'selected' : '' }}>Electric</option>
            </select>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection
