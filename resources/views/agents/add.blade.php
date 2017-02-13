@extends('backend')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Agent</h2>
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
                        <br />
                        {!! Form::open(array('url' => 'save_agent', 'method' => 'post','class' => 'form-horizontal form-label-left','files' => TRUE)) !!}

                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail form-control"></div>

                                <div>
                                            <span class="btn btn-file btn-alt btn-sm">
                                                <span class="fileupload-new">Select image</span>
                                                <span class="fileupload-exists">Change</span>
                                                {!! Form::file('agent_profile_file') !!}
                                            </span>
                                    <a href="#" class="btn fileupload-exists btn-sm" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>

                            <div class="form-group @if ($errors->has('first_name')) bad @endif">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text ('first_name',NULL,['class' => 'form-control col-md-7 col-xs-12','id' => 'first_name']) !!}

                                </div>
                            </div>
                            <div class="form-group @if ($errors->has('last_name')) bad @endif">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('last_name',NULL,['class' => 'form-control col-md-7 col-xs-12','id' => 'last_name']) !!}

                                </div>
                            </div>
                            <div class="form-group @if ($errors->has('cellphone')) bad @endif">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Cellphone <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('cellphone',NULL,['class' => 'form-control col-md-7 col-xs-12','id' => 'cellphone']) !!}

                                </div>
                            </div>

                            <div class="form-group @if ($errors->has('email')) bad @endif">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('email',NULL,['class' => 'form-control col-md-7 col-xs-12','id' => 'email']) !!}

                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /page content -->
@endsection
