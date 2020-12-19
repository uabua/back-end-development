@extends('layouts.app')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<h1>Employees at {{ $company->name }} <a href="{{ route('companies.employees.create', [$company]) }}">Create an
        Employee</a></h1>

@section('content')
    <table>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Position</th>
            <th scope="col">Phone</th>
            <th scope="col">Hired</th>
            <th scope="col">Edit</th>
            <th scope="col">JSON</th>
            <th scope="col">DESTROY</th>
        </tr>
        @foreach($employees as $employee)
            <tr id="employee">
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->job_title }}</td>
                <td>{{ $employee->phone_number }}</td>
                <td>@if($employee->is_hired) Yes @else No @endif</td>
                <td><a href="{{ route('companies.employees.edit', [$company, $employee])}}">EDIT</a></td>
                <td><a href="{{ route('companies.employees.show', [$company, $employee])}}">SHOW</a></td>
                <td><a id="destroy" url="{{ route('companies.employees.destroy', [$company, $employee]) }}">DESTROY</a></td>
            </tr>
        @endforeach
    </table>
@endsection

<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '#destroy', function (event) {
            event.preventDefault();

            const $this = $(this);

            $.ajax({
                type: 'DELETE',
                url: $this.attr('url'),
                success: function(){
                    $this.closest('#employee').remove();
                }
            })
        })
    });
</script>
