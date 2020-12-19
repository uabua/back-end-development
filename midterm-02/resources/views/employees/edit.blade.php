@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('companies.employees.update', [$company, $employee->id]) }}">
    @method('PATCH')
    @csrf
    <div>
        <div>
            <label for="first-name">Enter employee's first name: </label>
            <input type="text" name="first-name" id="first-name" value="{{old('first-name', $employee->first_name)}}" required>
        </div>

        <div>
            <label for="last-name">Enter employee's last name: </label>
            <input type="text" name="last-name" id="last-name" value="{{old('first-name', $employee->last_name)}}" required>
        </div>

        <div>
            <label for="job-title">Enter employee's job title: </label>
            <input type="text" name="job-title" id="job-title" value="{{old('job-title', $employee->job_title)}}" required>
        </div>

        <div>
            <label for="phone-number">Enter employee's phone number: </label>
            <input type="text" name="phone-number" id="phone-number" value="{{old('phone-number', $employee->phone_number)}}" required>
        </div>

        <button type="submit">Update</button>
    </div>
</form>
@endsection
