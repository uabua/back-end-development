@extends('layouts.main')

@section('title', 'Companies')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Companies</h3>

            <a href="{{ route('companies.create') }}" class="btn btn-primary">Create New Record</a>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                </tr>

                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->code }}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->city }}</td>
                        <td>{{ $company->country }}</td>
                        <td>

                            <form action="{{ route('companies.delete') }}" method="post">
                                @csrf
                                <input type="hidden" name="company_id" value="{{ $company->id }}"/>
                                <button class="btn btn-danger">Delete</button>
                            </form>

                            <a href="{{ route('companies.edit', ['id' => $company->id]) }}" class="btn btn-primary">Edit</a>

                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
