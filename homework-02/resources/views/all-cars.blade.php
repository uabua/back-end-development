@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Cars</h3>

            <a href="{{ route('cars.addCarInfo') }}" class="btn btn-primary">Add Car Info</a>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>License Number</th>
                    <th>Weight</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>

                @foreach($cars as $car)
                    <tr>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->make }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->license_number }}</td>
                        <td>{{ $car->weight }}</td>
                        <td>{{ $car->registration_year ? now()->year - $car->registration_year : 0 }}</td>
                        <td>

                            <form action="{{ route('cars.delete') }}" method="post">
                                @csrf
                                <input type="hidden" name="car_id" value="{{ $car->id }}" />
                                <button class="btn btn-danger">Delete</button>
                            </form>

                            <a href="{{ route('cars.edit', ['id' => $car->id]) }}" class="btn btn-primary">Edit</a>

                        </td>
                    </tr>
                @endforeach
{{--                <form action="/car/add" method="POST">--}}
{{--                    <tr>--}}
{{--                        <td><input class="form-control" type="text" name="name" placeholder="Enter Car Name"></td>--}}
{{--                        <td><input class="form-control" type="text" name="make"--}}
{{--                                   placeholder="Enter Car Make"></td>--}}
{{--                        <td><input class="form-control" type="text" name="model"--}}
{{--                                   placeholder="Enter Car Model"></td>--}}
{{--                        <td><input class="form-control" type="text" name="license_number"--}}
{{--                                   placeholder="Enter Car License Number"></td>--}}
{{--                        <td><input class="form-control" type="number" step="any" name="weight"--}}
{{--                                   placeholder="Enter Car Weight">--}}
{{--                        <td><input class="form-control" type="text" name="registration_year"--}}
{{--                                   placeholder="Enter Car Registration Year"></td>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <button class="btn btn-success" type="submit">Add</button>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                </form>--}}

            </table>
        </div>
    </div>
@endsection
