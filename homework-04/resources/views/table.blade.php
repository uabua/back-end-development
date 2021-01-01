<div class="card">
    <div class="card-header">Programming Languages</div>

    <div class="card-body">
        <table class="table" id="programming-languages-table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach ($programming_languages as $programming_language)
                <tr>
                    <td>{{ $programming_language->id }}</td>
                    <td>{{ $programming_language->name }}</td>
                    <td>
                        <a href="{{ route('programming-language.edit', ['programming_language' => $programming_language->id]) }}"
                           class="btn btn-sm btn-success">Edit</a>
                    </td>
                    <td>
                        <button onclick="deleteProgrammingLanguageRecord(event)"
                                data-deleteurl="{{ route('programming-language.destroy', ['programming_language' => $programming_language->id]) }}"
                                class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

<script>
    function refreshProgrammingLanguages() {
        $('#programming-languages-table').load(location.href + " #programming-languages-table > *");
    }

    function deleteProgrammingLanguageRecord(e) {
        const url = $(e.target).data('deleteurl')
        $.ajax({
            url: url,
            type: 'DELETE',
            success:function(data) {
                refreshProgrammingLanguages();
                window.location = '{{ route('programming-language.index') }}';
            },
            error: function() {
                console.error('error occurred!');
            }
        })
    }
</script>
