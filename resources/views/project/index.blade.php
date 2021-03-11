@extends('welcome')

@section('title', '| Project')

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <div class="loader-overlay" style="display: none">
        <div class="loader"></div>
        <span class="text" v-html="text"></span>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="box box-primary">
                <div class="box-body">

                    <table class="table table-bordered data-grid for-icons" data-route="{!! route('datatables.projects') !!}"
                           id="project-table" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>email</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>email</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        $(function () {
            $(document).ready(function () {

                let route = $('.data-grid').data('route');

                $('.data-grid').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    pageLength: 50,
                    ajax      : {
                        url : route,
                        type: 'get'
                    },
                    columns   : [
                        {data: 'id', name: 'id'},
                        {
                            data: 'name',
                            name: 'name',
                        },
                        {
                            data: 'email',
                            name: 'email',
                        },
                    ]
                });

            });
        });
    </script>
@endsection
