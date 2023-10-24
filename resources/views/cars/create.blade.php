@extends('layouts.base')
@section('content') {{-- @yield('content') --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-primary text-center">Create new car</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('cars.store') }}" method="post" class="row">
                    @csrf
                    <div class="col-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                            value="{{ old('name') }}" @error('name') is-invalid @enderror>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="also_called" class="form-label">Also called</label>
                        <input type="text" class="form-control" id="also_called" name="also_called"
                            placeholder="Also called" value="{{ old('also_called') }}"
                            @error('also_called') is-invalid @enderror>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="manufacturer" class="form-label">Manufacturer</label>
                        <input type="text" class="form-control" id="manufacturer" name="manufacturer"
                            placeholder="Manufacturer" value="{{ old('manufacturer') }}"
                            @error('manufacturer') is-invalid @enderror>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" class="form-control" id="color" name="color" placeholder="Color"
                            value="{{ old('color') }}" @error('color') is-invalid @enderror>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="engine" class="form-label">Engine</label>
                        <input type="number" class="form-control" id="engine" name="engine" placeholder="Engine"
                            value="{{ old('engine') }}" @error('engine') is-invalid @enderror>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="release_date" class="form-label">Release Date</label>
                        <input type="date" class="form-control" id="release_date" name="release_date"
                            placeholder="Release Date" value="{{ old('release_date') }}"
                            @error('release_date') is-invalid @enderror>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Description"
                            @error('description') is-invalid @enderror>{{ old('description') }}
                    </textarea>
                    </div>
                    <div class="col mb-2">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Price"
                            value="{{ old('price') }}" @error('price') is-invalid @enderror>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger col-12 mt-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="col-12 my-4">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 mb-4">
                <div class="d-grid gap-2">
                    <a href="{{ route('cars.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
