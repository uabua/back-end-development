@extends('layouts.main')

@section('title', 'Employees')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Employees</h3>

            <a href="{{ route('employees.create') }}" class="btn btn-primary">Create New Record</a>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Birthdate</th>
                    <th>Personal ID</th>
                    <th>Salary</th>
                </tr>

                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->lastname }}</td>
                        <td>{{ $employee->birthdate }}</td>
                        <td>{{ $employee->personal_id }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>

                            <form action="{{ route('employees.delete') }}" method="post">
                                @csrf
                                <input type="hidden" name="employee_id" value="{{ $employee->id }}"/>
                                <button class="btn btn-danger">Delete</button>
                            </form>

                            <a href="{{ route('employees.edit', ['id' => $employee->id]) }}" class="btn btn-primary">Edit</a>

                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
