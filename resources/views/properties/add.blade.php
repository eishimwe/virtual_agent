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
                            <h2>Add Property</h2>
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
                            {!! Form::open(array('url' => 'save_property', 'method' => 'post','class' => 'form-horizontal form-label-left','files' => TRUE)) !!}

                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail form-control"></div>

                                <div>
                                            <span class="btn btn-file btn-alt btn-sm">
                                                <span class="fileupload-new">Select image</span>
                                                <span class="fileupload-exists">Change</span>
                                                {!! Form::file('property_file') !!}
                                            </span>
                                    <a href="#" class="btn fileupload-exists btn-sm" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>

                            <div class="form-group @if ($errors->has('title')) bad @endif">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text ('title',NULL,['class' => 'form-control col-md-7 col-xs-12','id' => 'title']) !!}

                                </div>
                            </div>

                            <div class="form-group @if ($errors->has('description')) bad @endif">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::textarea('description', null, ['class' => 'form-control','id' => 'description','size' => '30x5']) !!}

                                </div>
                            </div>


                            <div class="form-group @if ($errors->has('price')) bad @endif">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Price <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text ('price',NULL,['class' => 'form-control col-md-7 col-xs-12','id' => 'price']) !!}

                                </div>
                            </div>
                            <div class="form-group @if ($errors->has('no_bedrooms')) bad @endif">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Number of Bedrooms <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('no_bedrooms',NULL,['class' => 'form-control col-md-7 col-xs-12','id' => 'no_bedrooms']) !!}

                                </div>
                            </div>

                            <div class="form-group @if ($errors->has('ref_number')) bad @endif">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Owner Reference Number <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('ref_number',NULL,['class' => 'form-control col-md-7 col-xs-12','id' => 'ref_number']) !!}

                                </div>
                            </div>


                            <div class="form-group @if ($errors->has('suburb')) bad @endif">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Suburb <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::select('suburb',$suburbs,0,['class' => 'form-control' ,'id' => 'suburb']) !!}

                                </div>
                            </div>

                            <div class="form-group @if ($errors->has('agent')) bad @endif">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Agent <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::select('agent',$agents,0,['class' => 'form-control' ,'id' => 'agent']) !!}

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
