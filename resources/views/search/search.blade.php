@extends('master')

@section('content')

<div class="container">


 {!! Form::open(array('url' => 'search', 'method' => 'post')) !!}
    <!--price-->
    <div class="price">
        <div class="price-grid">
            <div class="col-sm-4 price-top">
                <h4>Suburb</h4>
                {!! Form::select('suburb',$suburbs,0,['class' => 'in-drop' ,'id' => 'suburb']) !!}

            </div>
            <div class="col-sm-6 price-top1">
                <h4>Price Range</h4>

                <div id="priceSlider"></div>
                {!! Form::label('R', 'R') !!}
                {!! Form::text('minPrice', '',['class' => 'in-drop','id' =>'minPrice','readonly']) !!}
                {!! Form::label('R', 'R') !!}
                {!! Form::text('maxPrice', '',['class' => 'in-drop','id' =>'maxPrice','readonly']) !!}

            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="price-grid">
            <div class="col-sm-4 price-top">
                <h4>No of Bedrooms</h4>

                {!! Form::select('no_bedroom',["0" => "Any","1" => "1+",'2' => "2+","3" => "3+","4" => "4+","5" => "5+"],0,['class' => 'in-drop' ,'id' => 'no_bedroom']) !!}

            </div>
        </div>
        {!! Form::submit('Search',['class' => 'btn btn-primary']) !!}
    </div>

     {!! Form::close() !!}
</div>
<!---->

<div class="project">
    <div class="container">
        <h3>Wendy properties</h3>
        <div class="project-top">

            @foreach ($properties as $property)
                <div class="col-md-3 project-grid">
                    <div class="project-grid-top">
                        <a href="single.html" class="mask"><img src="{{ $property->photo_url }}" class="img-responsive zoom-img" alt=""/></a>
                        <div class="col-md1">
                            <div class="col-md2">
                                <div class="col-md3">

                                </div>
                                <div class="col-md4">
                                    <strong>{{ $property->title }}</strong>
                                    <small>{{ $property->no_bedrooms }} Bedroom</small>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <p>{{ $property->title }}</p>
                            <p class="cost">R {{ $property->price }}</p>
                            <a href="{{ url('viewDetail/'.$property->id.'/'.$property->agent_id) }}" class="hvr-sweep-to-right more">See Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="clearfix"> </div>
        </div>
    </div>
</div>


@endsection

