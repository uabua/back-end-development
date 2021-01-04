@extends('layouts.main')

@section('content')
    <div class="card col-md-6 mx-auto">
        <div class="card-header">
            <h3>Albums</h3>
            <a href="{{ route('album.create') }}" class="btn btn-primary">Create New Record</a>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Musician</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>

                @foreach($albums as $album)
                    <tr id="album">
                        <td>{{ $album->id }}</td>
                        <td>{{ $album->name }}</td>
                        <td>{{ $album->musician->name }}</td>
                        <td>{{ $album->genre->name }}</td>
                        <td><a href="{{ route('album.edit', ['album' => $album->id]) }}" class="btn btn-sm btn-success">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('album.destroy', ['album' => $album->id]) }}" method="post">
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
