@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('companies.update', ['company' => $company->id]) }}">
                    @method('PATCH')
                    @csrf
                    <div>
                        <div>
                            <label for="name">Enter company's name: </label>
                            <input type="text" name="name" id="name" value="{{old('name', $company->name)}}" required>

                            @error('name')
                            <p>{{ $errors->first('name') }}</p>
                            @enderror
                        </div>

                        <button type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
