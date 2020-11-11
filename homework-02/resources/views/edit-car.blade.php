@extends('layouts.main')

@section('content')
    <form action="{{ route('cars.update', ['id' => $car->id]) }}" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3>Edit Car Info</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $car->name }}">
                </div>
                <div class="form-group">
                    <label for="name">Make</label>
                    <input type="text" class="form-control" name="make" id="make" value="{{ $car->make }}">
                </div>
                <div class="form-group">
                    <label for="name">Model</label>
                    <input type="text" class="form-control" name="model" id="model" value="{{ $car->model }}">
                </div>
                <div class="form-group">
                    <label for="name">License Number</label>
                    <input type="text" class="form-control" name="license_number" id="license_number"
                           value="{{ $car->license_number }}">
                </div>
                <div class="form-group">
                    <label for="name">weight</label>
                    <input type="number" class="form-control" name="weight" id="weight" value="{{ $car->weight }}">
                </div>
                <div class="form-group">
                    <label for="name">Registration Year</label>
                    <input type="text" class="date form-control" name="registration_year" id="registration_year"
                           value="{{ $car->registration_year }}">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" onclick="window.location='{{ route('cars.all') }}'">Cancel</button>
            </div>
        </div>

        <script type="text/javascript">

            $('.date').datepicker({
                minViewMode: 2,
                format: 'yyyy'
            });
        </script>
    </form>
@endsection
