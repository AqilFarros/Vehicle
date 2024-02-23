@extends('components.parent')

@section('content')
    <div class="card p-4">
        <div class="card p4">

            <label for="">Name</label>
            <input type="text" value="{{ $vehicle->name }}" class="form-control" disabled>

            <label for="">Color</label>
            <input type="text" value="{{ $vehicle->color }}" class="form-control" disabled>

            <label for="">Wheel</label>
            <input type="text" value="{{ $vehicle->tire_wheel }}" class="form-control" disabled>

            <label for="">Machine</label>
            <input type="text" value="{{ $vehicle->machine }}" class="form-control" disabled>

            <label for="">Price</label>
            <input type="number" value="{{ $vehicle->price }}" class="form-control" disabled>

            <label for="">Id</label>
            <input type="text" value="{{ $vehicle->id }}" class="form-control" disabled>

        </div> 

        <a href="{{ route('vehicle.index') }}" class="btn btn-success">Back To Index</a>
    </div>
@endsection
