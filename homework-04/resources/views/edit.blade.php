@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit programming Language Record</div>

                <div class="card-body">
                    <form method="POST" onsubmit="editProgrammingLanguageRecord(event)">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input type="text" id="programming-language-name-input"
                                       class="form-control" name="name"
                                       value="{{ $programming_language->name }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit Programming Language
                                </button>
                                <a href="{{ route('programming-language.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            @include('table', ['programming_languages' => $programming_languages])
        </div>
    </div>
@endsection

<script>
    function editProgrammingLanguageRecord(e) {
        e.preventDefault();
        const data = $(e.target).serialize();
        $.ajax({
            url: "{{ route('programming-language.update', ['programming_language' => $programming_language->id]) }}?" + data,
            type: 'PUT',
            success: function (data) {
                refreshProgrammingLanguages()
            },
            error: function () {
                console.error('error occurred!');
            }
        })
    }
</script>
