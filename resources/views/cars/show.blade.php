@extends('layouts.base')
@section('content')
    {{-- @yield('content') --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-info text-center">Videogame Details</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="card m-3" style="width: 50rem;">
                    <h5 class="card-title m-2">{{ $videogame->name }}</h5>
                    <h6 class="card-subtitle m-2 text-muted">{{ $videogame->genre }}</h6>
                    <p class="card-text m-2">{{ $videogame->relase_date }}</p>
                    <p class="card-text m-2">{{ $videogame->description }}</p>
                    <p class="card-text m-2">{{ $videogame->rating }}</p>
                    <p class="card-text m-2">{{ $videogame->price }}</p>
                    <p class="card-text m-2">{{ $videogame->is_multiplayer }}</p>
                    <p class="card-text m-2">{{ $videogame->platform }}</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('videogames.edit', $videogame) }}" class="m-2 btn btn-success" style="width: 5rem;">Edit</a>
                        <form action="{{ route('videogames.destroy', $videogame) }}" method="POST"
                            onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="m-2 btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('videogames.index') }}" class="m-2 btn btn-primary" style="width: 5rem;">Back</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
