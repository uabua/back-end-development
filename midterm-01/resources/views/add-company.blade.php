@extends('layouts.main')

@section('title', 'Add Company')

@section('content')
    <form action="{{ route('companies.add') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3>Add New Company</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="name">Code</label>
                    <input type="text" class="form-control" name="code" id="code">
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>
                <div class="form-group">
                    <label for="name">City</label>
                    <input type="text" class="form-control" name="city" id="city">
                </div>
                <div class="form-group">
                    <label for="name">Country</label>
                    <input type="text" class="form-control" name="country" id="country">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Add</button>
                <button type="button" class="btn btn-danger" onclick="window.location='{{ route('companies.all') }}'">
                    Cancel
                </button>
            </div>
        </div>
    </form>
@endsection
