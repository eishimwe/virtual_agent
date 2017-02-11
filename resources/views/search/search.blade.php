@extends('master')

@section('content')

<div class="container">



    <!--price-->
    <div class="price">
        <div class="price-grid">
            <div class="col-sm-4 price-top">

                {!! Form::select('suburb',$suburbs,0,['class' => 'in-drop' ,'id' => 'suburb']) !!}

            </div>
            <div class="col-sm-6 price-top1">
                <h4>Price Range</h4>




            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="price-grid">
            <div class="col-sm-4 price-top">
                <h4>No of Bedrooms</h4>

                {!! Form::selectRange('no_bedroom', 1, 10,null,['class' => 'in-drop'])  !!}

            </div>

        </div>
    </div>

</div>
<!---->

<div class="project">
    <div class="container">
        <h3>Property for --  Sale -- in -- suburb --</h3>
        <div class="project-top">

            @foreach ($properties as $property)
                <div class="col-md-3 project-grid">
                    <div class="project-grid-top">
                        <a href="single.html" class="mask"><img src="images/ga.jpg" class="img-responsive zoom-img" alt=""/></a>
                        <div class="col-md1">
                            <div class="col-md2">
                                <div class="col-md3">
                                    <span class="star"> 4.5</span>
                                </div>
                                <div class="col-md4">
                                    <strong>Venice</strong>
                                    <small>50 Reviews</small>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <p>{{ $property->title }}</p>
                            <p class="cost">R {{ $property->price }}</p>
                            <a href="single.html" class="hvr-sweep-to-right more">See Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="clearfix"> </div>
        </div>
    </div>
</div>


@endsection

