@extends('components.parent')

@section('content')
    <div class="card p-4">
        <div class="card p4">

            <form action="{{ route('vehicle.update', $vehicle->id) }}" method="post">
                @csrf
                @method('PUT')

                <label for="">Name</label>
                <input type="text" value="{{ $vehicle->name }}" class="form-control" name="name">

                <label for="">Color</label>
                <input type="text" value="{{ $vehicle->color }}" class="form-control" name="color">

                <label for="">Wheel</label>
                <input type="number" value="{{ $vehicle->tire_wheel }}" class="form-control" name="tire_wheel">

                <label for="">Machine</label>
                <input type="text" value="{{ $vehicle->machine }}" class="form-control" name="machine">

                <label for="">Price</label>
                <input type="number" value="{{ $vehicle->price }}" class="form-control" name="price">

                <label for="">Id</label>
                <input type="text" value="{{ $vehicle->id }}" class="form-control" disabled>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>

        <a href="{{ route('vehicle.index') }}" class="btn btn-success">Back To Index</a>
    </div>
@endsection
