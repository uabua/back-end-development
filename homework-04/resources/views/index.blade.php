@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            @include('create')
        </div>

        <div class="col-md-6">
            @include('table', ['programming_languages' => $programming_languages])
        </div>
    </div>
@endsection
