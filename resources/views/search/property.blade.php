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
                        <p><span class="bath">Bed </span>: <span class="two">{{ $property->no_bedrooms }}</span></p>
                        <p><span class="bath5">Price </span>:<span class="two">R {{ $property->price }}</span></p>
                        <div class="   right-side">
                            <a href="contact.html" class="hvr-sweep-to-right more" >Contact Agent</a>
                        </div>
                    </div>
                    <div class="col-sm-7 buy-sin">
                        <h4>Description</h4>
                        <p>{{ $property->description }}</p>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="map-buy-single">
                    <h4>Neighborhood Info</h4>
                    <div class="map-buy-single1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>

                    </div>
                </div>
                <div class="video-pre">
                    <h4>Video Presentation</h4>
                    <iframe src="https://player.vimeo.com/video/63931426"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                </div>
            </div>




            <div class="col-md-3">
                <div class="single-box-right right-immediate">
                    <h4>Featured Communities</h4>
                    <div class="single-box-img ">
                        <div class="box-img">
                            <a href="single.html"><img class="img-responsive" src="images/sl.jpg" alt=""></a>
                        </div>
                        <div class="box-text">
                            <p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
                            <a href="single.html" class="in-box">More Info</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="single-box-img">
                        <div class="box-img">
                            <a href="single.html"><img class="img-responsive" src="images/sl1.jpg" alt=""></a>
                        </div>
                        <div class="box-text">
                            <p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
                            <a href="single.html" class="in-box">More Info</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="single-box-img">
                        <div class="box-img">
                            <a href="single.html"><img class="img-responsive" src="images/sl2.jpg" alt=""></a>
                        </div>
                        <div class="box-text">
                            <p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
                            <a href="single.html" class="in-box">More Info</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="single-box-img">
                        <div class="box-img">
                            <a href="single.html"><img class="img-responsive" src="images/sl3.jpg" alt=""></a>
                        </div>
                        <div class="box-text">
                            <p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
                            <a href="single.html" class="in-box">More Info</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="single-box-img">
                        <div class="box-img">
                            <a href="single.html"><img class="img-responsive" src="images/sl4.jpg" alt=""></a>
                        </div>
                        <div class="box-text">
                            <p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
                            <a href="single.html" class="in-box">More Info</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection