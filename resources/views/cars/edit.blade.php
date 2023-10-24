@extends('layouts.base')
@section('content') {{-- @yield('content') --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-primary text-center">Edit car {{ $car->name }}</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('cars.update', $car) }}" method="post" class="row">
                    @csrf
                    @method('PUT')
                    <div class="col-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $car->name) }}" placeholder="Name">
                    </div>
                    <div class="col-6 mb-2">
                        <label for="also_called" class="form-label">Also called</label>
                        <input type="text" class="form-control" id="also_called" name="also_called"
                            value="{{ old('also_called', $car->also_called) }}" placeholder="Also called">
                    </div>
                    <div class="col-6 mb-2">
                        <label for="manufacturer" class="form-label">Manufacturer</label>
                        <input type="text" class="form-control" id="manufacturer" name="manufacturer"
                            value="{{ old('manufacturer', $car->manufacturer) }}" placeholder="Manufacturer">
                    </div>
                    <div class="col-6 mb-2">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" class="form-control" id="color" name="color"
                            value="{{ old('color', $car->color) }}" placeholder="Color">
                    </div>
                    <div class="col-6 mb-2">
                        <label for="engine" class="form-label">Engine</label>
                        <input type="number" class="form-control" id="engine" name="engine"
                            value="{{ old('engine', $car->engine) }}" placeholder="Engine">
                    </div>
                    <div class="col-6 mb-2">
                        <label for="release_date" class="form-label">Release Date</label>
                        <input type="date" class="form-control" id="relase_date" name="release_date"
                            value="{{ old('release_date', $car->release_date) }}" placeholder="Release Date">
                    </div>
                    <div class="col-6 mb-2">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description"
                            placeholder="Description">{{ old('description', $car->description) }}</textarea>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price"
                            value="{{ old('price', $car->price) }}" placeholder="Price">
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
                            <button type="submit" class="btn btn-primary">Edit</button>
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
