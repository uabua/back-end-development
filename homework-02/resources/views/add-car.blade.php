@extends('layouts.main')

@section('content')
    <form action="{{ route('cars.add') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3>Add Car Info</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="name">Make</label>
                    <input type="text" class="form-control" name="make" id="make">
                </div>
                <div class="form-group">
                    <label for="name">Model</label>
                    <input type="text" class="form-control" name="model" id="model">
                </div>
                <div class="form-group">
                    <label for="name">License Number</label>
                    <input type="text" class="form-control" name="license_number" id="license_number">
                </div>
                <div class="form-group">
                    <label for="name">weight</label>
                    <input type="number" class="form-control" name="weight" id="weight">
                </div>
                <div class="form-group">
                    <label for="name">Registration Year</label>
                    <input type="text" class="date form-control" name="registration_year" id="registration_year">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Add</button>
                <button type="button" class="btn btn-danger" onclick="window.location='{{ route('cars.all') }}'">
                    Cancel
                </button>
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
