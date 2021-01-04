@extends('layouts.main')

@section('content')
    <form action="{{ route('genre.update', ['genre' => $genre->id]) }}" method="post">
        @csrf
        <div class="card col-md-4 mx-auto">
            <div class="card-header">
                <h3>Edit Genre</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="hidden" name="_method" value="PUT" />

                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name"
                    value="{{ $genre->name }}" required>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Edit</button>
                <a href="{{ route('genre.index') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
@endsection
