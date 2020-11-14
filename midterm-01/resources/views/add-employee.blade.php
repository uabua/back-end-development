@extends('layouts.main')

@section('title', 'Add Employee')

@section('content')
    <form action="{{ route('employees.add') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3>Add New Employee</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="name">Lastname</label>
                    <input type="text" class="form-control" name="lastname" id="lastname">
                </div>
                <div class="form-group">
                    <label for="name">Birthdate</label>
                    <input type="text" class="date form-control" name="birthdate" id="birthdate">
                </div>
                <div class="form-group">
                    <label for="name">Personal ID</label>
                    <input type="text" class="form-control" name="personal_id" id="personal_id">
                </div>
                <div class="form-group">
                    <label for="name">Salary</label>
                    <input type="number" step="any" class="form-control" name="salary" id="salary">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Add</button>
                <button type="button" class="btn btn-danger" onclick="window.location='{{ route('employees.all') }}'">
                    Cancel
                </button>
            </div>
        </div>

        <script type="text/javascript">
            $('.date').datepicker({
                format: 'yyyy-mm-dd'
            });
        </script>
    </form>
@endsection
