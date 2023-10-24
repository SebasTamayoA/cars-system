@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row mb-4 d-flex justify-content-center">
            <div class="col-12" style="width: 20%">
                <form action="{{ route('cars.index') }}" method="GET" class="form-inline">
                    <div class="form-group mr-2 mb-2">
                        <label for="filterColumn" class="mr-2">Filter By:</label>
                        <select class="form-control" id="filterColumn" name="filterColumn">
                            <option value="name">Name</option>
                            <option value="manufacturer">Manufacturer</option>
                            <option value="color">Color</option>
                            <option value="engine">Engine</option>
                            <option value="release_date">Release Date</option>
                            <option value="description">Description</option>
                            <option value="price">Price</option>
                        </select>
                    </div>
                    <div class="form-group mr-2 mb-2">
                        <label for="filterValue" class="mr-2">Filter Value:</label>
                        <input type="text" class="form-control" id="filterValue" name="filterValue">
                    </div>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </form>
            </div>
        </div>
        <div class="row">
            @foreach ($cars as $car)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $car->manufacturer }}</h6>
                            <p class="card-text">
                                <strong>ID:</strong> {{ $car->id }}<br>
                                <strong>Also called:</strong> {{ $car->also_called }}<br>
                                <strong>Color:</strong> {{ $car->color }}<br>
                                <strong>Engine:</strong> {{ $car->engine }} cc<br>
                                <strong>Release date:</strong> {{ $car->release_date }}<br>
                                <strong>Description:</strong> {{ $car->description }}<br>
                                <strong>Price:</strong> USD {{ number_format($car->price, 0, ',', '.') }}
                            </p>
                            <a href="{{ route('cars.edit', $car) }}" class="btn btn-info mr-2">Edit</a>
                            <form action="{{ route('cars.destroy', $car) }}" method="POST"
                                onsubmit="return confirm('Are you sure?')" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-12 mt-4 mb-5">
                <a href="/cars/create" class="btn btn-success">Add car</a>
            </div>
        </div>
    </div>
@endsection
