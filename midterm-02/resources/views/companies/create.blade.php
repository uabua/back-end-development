@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('companies.store') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h3>Create Company</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
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
