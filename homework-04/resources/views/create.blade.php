<div class="card">
    <div class="card-header">Add new Programming Language into database</div>

    <div class="card-body">
        <form method="POST" onsubmit="createProgrammingLanguageRecord(event)"
              action="{{ route('programming-language.store') }}">
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right" for="name">Name</label>

                <div class="col-md-6">

                    <input type="text" id="programming-language-name-input"
                           class="form-control" name="name" value="{{ old('name') }}"
                           required autofocus>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Add Programming Language
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function createProgrammingLanguageRecord(e) {
        e.preventDefault();
        const data = $(e.target).serialize();
        $.ajax({
            url: "{{ route('programming-language.store') }}?" + data,
            type: 'POST',
            success: function (data) {
                refreshProgrammingLanguages();
            },
            error: function () {
                console.error('error occurred!');
            }
        })
    }
</script>
