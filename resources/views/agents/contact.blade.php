@extends('master')

@section('content')
<!--contact-->
<div class="contact">
    <div class="container">
        <h3>Contat</h3>
        <div class="contact-top">

            <div class="col-md-6 contact-right">

                {!! Form::open(array('url' => 'contact_agent', 'method' => 'post')) !!}

                    {!! Form::text('first_name',NULL,['placeholder' => 'First Name','id' => 'first_name']) !!}
                    {!! Form::text('last_name',NULL,['placeholder' => 'Last Name','id' => 'last_name']) !!}
                    {!! Form::text('subject',NULL,['placeholder' => 'Subject','id' => 'subject']) !!}
                    {!! Form::text('email',NULL,['placeholder' => 'Email Address','id' => 'email']) !!}
                    {!! Form::textarea('description', null, ['placeholder' => 'Message','id' => 'description','size' => '30x5']) !!}

                    <label class="hvr-sweep-to-right">
                        <input type="submit" value="Submit">
                    </label>
                {!! Form::close() !!}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</div>
<!--//contact-->
@endsection