@extends('layouts.main')

@section('content')
    <form action="{{ route('genre.store') }}" method="post">
        @csrf
        <div class="card col-md-4 mx-auto">
            <div class="card-header">
                <h3>Add New Genre</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Add</button>
                <a href="{{ route('genre.index') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
@endsection
