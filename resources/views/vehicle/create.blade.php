@extends('components.parent')

@section('content')

<div class="card p-4">
    <h1>Create Vehicle</h1>

    <form action="{{ route('vehicle.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-floating mb-3">
            <div class="row my-3">
                <label for="vehicleName">Vehicle Name</label>
                <input type="text" class="form-control" id="vehicleName" placeholder="Vehicle Name" name="name">
            </div>

            <div class="row my-3">
                <label for="color">Vehicle Color</label>
                <input type="text" class="form-control" id="color" placeholder="Vehicle Color" name="color">
            </div>

            <div class="row my-3">
                <label for="wheel">Vehicle Wheel</label>
                <input type="number" class="form-control" id="wheel" placeholder="Vehicle Wheel" name="tire_wheel">
            </div>

            <div class="row my-3">
                <label for="machine">Vehicle Machine</label>
                <input type="text" class="form-control" id="machine" placeholder="Vehicle Machine" name="machine">
            </div>

            <div class="row my-3">
                <label for="price">Vehicle Price</label>
                <input type="number" class="form-control" id="price" placeholder="Vehicle Price" name="price">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>

    </form>

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>

@endsection