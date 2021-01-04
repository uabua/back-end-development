@extends('layouts.main')

@section('content')
    <div class="card col-md-6 mx-auto">
        <div class="card-header">
            <h3>Musicians</h3>
            <a href="{{ route('musician.create') }}" class="btn btn-primary">Create New Record</a>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>

                @foreach($musicians as $musician)
                    <tr id="musician">
                        <td>{{ $musician->id }}</td>
                        <td>{{ $musician->name }}</td>
                        <td><a href="{{ route('musician.edit', ['musician' => $musician->id]) }}" class="btn btn-sm btn-success">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('musician.destroy', ['musician' => $musician->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
