@extends('master')

@section('content')
<!--contact-->
<div class="contact">
    <div class="container">
        <h3>Contat</h3>
        <div class="contact-top">

            <div class="col-md-6 contact-right">

                {!! Form::open(array('url' => 'save_lead', 'method' => 'post')) !!}
                    {!! Form::hidden('agent_id',$agent_id,['id' => 'agent_id']) !!}
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