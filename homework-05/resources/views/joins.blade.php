@extends('layouts.main')

@section('content')
    <div class="card col-md-6 mx-auto">
        <div class="card-header">
            <h3>Inner Join</h3>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th scope="col">Album Name</th>
                    <th scope="col">Musician Name</th>
                    <th scope="col">Genre Name</th>
                </tr>

                @foreach($albums as $album)
                    <tr id="inner-join">
                        <td>{{ $album->name }}</td>
                        <td>{{ $album->musician_name }}</td>
                        <td>{{ $album->genre_name }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

    <div class="card col-md-6 mx-auto">
        <div class="card-header">
            <h3>Left Join</h3>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th scope="col">Genre Name</th>
                    <th scope="col">Album Name</th>
                </tr>

                @foreach($genres as $genre)
                    <tr id="left-join">
                        <td>{{ $genre->name }}</td>
                        <td>{{ $genre->album_name }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

    <div class="card col-md-6 mx-auto">
        <div class="card-header">
            <h3>Right Join</h3>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th scope="col">Musician Name</th>
                    <th scope="col">Album Name</th>
                </tr>

                @foreach($musicians as $musician)
                    <tr id="right-join">
                        <td>{{ $musician->album_name }}</td>
                        <td>{{ $musician->name }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
