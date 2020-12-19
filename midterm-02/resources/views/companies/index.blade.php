@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Companies</div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">EDIT</th>
                                <th scope="col">DELETE</th>
                            </tr>

                            @foreach($companies as $company)
                                <tr id="company">
                                    <td>{{ $company->id }}</td>
                                    <td><a href="{{ route('companies.employees.index', [$company]) }}">{{ $company->name }}</a></td>
                                    <td><a href="{{ route('companies.edit', [$company]) }}">EDIT</a></td>
                                    <td><a id="destroy" url="{{ route('companies.destroy', [$company]) }}">DESTROY</a></td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '#destroy', function (event) {
                event.preventDefault();

                const $this = $(this);

                $.ajax({
                    type: 'DELETE',
                    url: $this.attr('url'),
                    success: function(){
                        $this.closest('#company').remove();
                    }
                })
            })
        });
    </script>
@endsection
