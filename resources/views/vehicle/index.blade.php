@extends('components.parent')

@section('content')
    <div class="card p-4">
        <h1>Category Index</h1>

        <hr>

        <div class="container d-flex justify-content-end">
            <a href="{{ route('vehicle.create') }}" class="btn btn-success">Create Vehicle</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-5">
            <thead>
                <tr class="text-center">
                    <td>No</td>
                    <td>Vehicle</td>
                    <td>Color</td>
                    <td>Wheel</td>
                    <td>Machine</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicle as $v)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->color }}</td>
                        <td>{{ $v->tire_wheel }}</td>
                        <td>{{ $v->machine }}</td>
                        <td>${{ $v->price }}</td>
                        <td>
                            <a href="{{ route('vehicle.show', $v->id) }}" class="btn btn-info">Show Detail</a>
                            <a href="{{ route('vehicle.edit', $v->id) }}" class="btn btn-warning">Edit Vehicle</a>
                            <form action="{{ route('vehicle.destroy', $v->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete Vehicle</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
