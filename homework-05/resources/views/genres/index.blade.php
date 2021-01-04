@extends('layouts.main')

@section('content')
    <div class="card col-md-6 mx-auto">
        <div class="card-header">
            <h3>Genres</h3>
            <a href="{{ route('genre.create') }}" class="btn btn-primary">Create New Record</a>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>

                @foreach($genres as $genre)
                    <tr id="genre">
                        <td>{{ $genre->id }}</td>
                        <td>{{ $genre->name }}</td>
                        <td><a href="{{ route('genre.edit', ['genre' => $genre->id]) }}" class="btn btn-sm btn-success">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('genre.destroy', ['genre' => $genre->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE"/>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
