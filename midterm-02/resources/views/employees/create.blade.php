@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('companies.employees.store', [$company, $company]) }}">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Employee</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="first-name">Enter employee's first name: </label>
                                <input type="text" name="first-name" id="first-name" required>
                            </div>

                            <div class="form-group">
                                    <label for="last-name">Enter employee's last name: </label>
                                    <input type="text" name="last-name" id="last-name" required>
                            </div>

                            <div class="form-group">
                                <label for="job-title">Enter employee's job title: </label>
                                <input type="text" name="job-title" id="job-title" required>
                            </div>

                            <div class="form-group">
                                <label for="phone-number">Enter employee's phone number: </label>
                                <input type="text" name="phone-number" id="phone-number" required>
                            </div>


                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Add</button>
                            <button type="button" class="btn btn-danger"
                                    onclick="window.location='{{ route('companies.index') }}'">
                                Cancel
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

