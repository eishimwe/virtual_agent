@extends('master')

@section('content')

    <div class="container">

        <div class="buy-single-single">

            <div class="col-md-9 single-box">

                <div class=" buying-top">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ url('images/ss.jpg') }}">
                                <img src="{{ url('images/ss.jpg') }}" />
                            </li>
                            <li data-thumb="{{ url('images/ss1.jpg') }}">
                                <img src="{{ url('images/ss1.jpg') }}" />
                            </li>
                            <li data-thumb="{{ url('images/ss2.jpg') }}">
                                <img src="{{ url('images/ss2.jpg') }}" />
                            </li>
                            <li data-thumb="{{ url('images/ss3.jpg') }}">
                                <img src="{{ url('images/ss3.jpg') }}" />
                            </li>
                        </ul>
                    </div>
                    <!-- FlexSlider -->
                    <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
                    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />

                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function() {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>
                </div>
                <div class="buy-sin-single">
                    <div class="col-sm-5 middle-side immediate">
                        <h4>Possession: Immediate</h4>
                        <p>{{ $property->title }}</p>
                        <p><span class="bath5">Ref </span>: <span class="two">{{ $property->ref_number }}</span></p>
                        <p><span class="bath">Bed </span>: <span class="two">{{ $property->no_bedrooms }}</span></p>
                        <p><span class="bath5">Price </span>:<span class="two">R {{ $property->price }}</span></p>
                        <div class="   right-side">
                            <a href="{{ url('contact/'.$property->id.'/'.$property->agent_id) }}" class="hvr-sweep-to-right more" >Contact Agent</a>
                        </div>
                    </div>
                    <div class="col-sm-7 buy-sin">
                        <h4>Description</h4>
                        <p>{{ $property->description }}</p>

                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>




            <div class="col-md-3">


            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection