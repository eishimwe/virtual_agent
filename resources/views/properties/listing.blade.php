@extends('backend')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Properties</h3>
                </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">

                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <a class="btn btn-primary" href="{{ url('add_property') }}" type="button">Add Property</a>
                            <p class="text-muted font-13 m-b-30">

                            </p>

                            <table id="propertiesTable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Cellphone</th>
                                    <th>Email</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>

                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection

@section('custom_js')

    <script>
        $(document).ready(function(){

            var oTable     = $('#propertiesTable').DataTable({
                "processing": true,
                "serverSide": false,
                "dom": 'T<"clear">lfrtip',
                "order" :[[0,"desc"]],
                "ajax": "{!! url('properties-list-data')!!}",
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'description', name: 'description'},
                    {data: 'title', name: 'title'},
                    {data: 'price', name: 'price'},
                    {data: 'actions',  name: 'actions'},
                ],

                "aoColumnDefs": [
                    { "bSearchable": false, "aTargets": [ 1] },
                    { "bSortable": false, "aTargets": [ 1 ] }
                ]

            });

        })


    </script>


@endsection