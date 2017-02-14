<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>The Virtual Agent - Wendy Properties</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Custom Theme files -->
    <!--menu-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!--//menu-->

    <!-- nouislider -->
    <script src="{{ asset('js/nouislider.js') }}"></script>
    <link href="{{ asset('css/nouislider.css') }}" rel="stylesheet">

    <!--//nouislider-->



    <!--theme-style-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- slide -->
    <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>


</head>
<body >
<!--header-->
<div class="navigation">
    <div class="container-fluid">
        <nav class="pull">
            <ul>
                <li><a  href="index.html">Home</a></li>
                <li><a  href="about.html">About Us</a></li>
                <li><a  href="blog.html">Blog</a></li>
                <li><a  href="terms.html">Terms</a></li>
                <li><a  href="privacy.html">Privacy</a></li>
                <li><a  href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="header">
    <div class="container">
        <!--logo-->
        <div class="logo">
            <h1><a href="{{ url('/') }}">Wendy Properties</a></h1>
        </div>
        <!--//logo-->
        <div class="top-nav">
            <ul class="right-icons">
                <li><span ><i class="glyphicon glyphicon-phone"> </i>+27829699114</span></li>
                <li><a  href="{{ url('login') }}"><i class="glyphicon glyphicon-user"> </i>Login</a></li>
                <li><a class="play-icon popup-with-zoom-anim" href="{{ url('search') }}"><i class="glyphicon glyphicon-search"> </i> </a></li>

            </ul>
            <div class="nav-icon">
                <div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
                    <a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
                </div>
                <!---
                <a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
            --->
            </div>
            <div class="clearfix"> </div>
            <!---pop-up-box---->

            <link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all"/>
            <script src="{{ asset('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
            <!---//pop-up-box---->
            <div id="small-dialog" class="mfp-hide">
                <!----- tabs-box ---->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>All Homes</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>For Sale</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>For Rent</span></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                <div class="facts">
                                    <div class="login">
                                        <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
                                        <input type="submit" value="">
                                    </div>
                                </div>
                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="facts">
                                    <div class="login">
                                        <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
                                        <input type="submit" value="">
                                    </div>
                                </div>
                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="facts">
                                    <div class="login">
                                        <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
                                        <input type="submit" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="{{ asset('js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#horizontalTab').easyResponsiveTabs({
                                type: 'default', //Types: default, vertical, accordion
                                width: 'auto', //auto or any width like 600px
                                fit: true   // 100% fit in a container
                            });
                        });
                    </script>
                </div>
            </div>
            <script>
                $(document).ready(function() {

                    var priceSlider = document.getElementById('priceSlider');

                    noUiSlider.create(priceSlider, {
                        connect: true,
                        behaviour: 'tap',
                        start: [ 500, 4000 ],
                        range: {
                            // Starting at 500, step the value by 500,
                            // until 4000 is reached. From there, step by 1000.
                            'min': [ 0 ],
                            '10%': [ 0, 500 ],
                            'max': [ 50000 ]
                        }
                    });

                    var nodes = [
                        document.getElementById('minPrice'), // 0
                        document.getElementById('maxPrice')  // 1
                    ];


                    priceSlider.noUiSlider.on('update', function ( values, handle, unencoded, isTap, positions ) {
                        nodes[handle].value = values[handle];
                    });

                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                });
            </script>


        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--//-->
<div class=" header-right">
    <div class=" banner">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <div class="banner1">
                            <div class="caption">

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner2">
                            <div class="caption">

                            </div>
                        </div>
                    </li>
                    <li>


                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--header-bottom-->
<div class="banner-bottom-top">
    <div class="container">
        <div class="bottom-header">
            <div class="header-bottom">

                <div class=" bottom-head">
                    <a href="{{ url('search') }}">
                        <div class="buy-media">
                            <i class="rent"> </i>
                            <h6>Rent</h6>
                        </div>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--//-->

<!--//header-bottom-->
<!--//header-->
<!--content-->
<div class="content">
 @yield('content')
</div>

</body>
</html>