@extends('layouts.main')

@section('content')
    <form action="{{ route('album.store') }}" method="post">
        @csrf
        <div class="card col-md-4 mx-auto">
            <div class="card-header">
                <h3>Add New Album</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="musician_id">Musician</label>
                    <select class="form-control" id="musician_id" name="musician_id" required>
                        <option></option>

                        @foreach ($musicians as $musician)
                            <option value="{{ $musician->id }}">
                                {{ $musician->name }}
                            </option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="genre_id">Genre</label>
                    <select class="form-control" id="genre_id" name="genre_id" required>
                        <option></option>

                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">
                                {{ $genre->name }}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Add</button>
                <a href="{{ route('album.index') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
@endsection
