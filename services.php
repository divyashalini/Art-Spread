<html>
    <head>
        <title>Art Gallery</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon1.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed1.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed1.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed1.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed1.png">

    </head>

    <body>
        <!-- Top menu -->
<?php
		error_reporting(0);
		include("assets/header.php");
		include("assets/connect.php");
?>

        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-tasks"></i>
                        <h1>Services /</h1>
                        <p>Here are the services we offer</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Full Width Text -->
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3 style="color:#00CCFF;">And here the Services</h3>
	                    <p>
<!-- 	                    	Services we provide are in multiple format for example <span style="color:#00CCFF;">Cash On Delivery(COD)</span>, <span style="color:#00CCFF;">Master Card</span>, <span style="color:#00CCFF;">Credit Card</span>, <span style="color:#00CCFF;">Debit Card</span>, etc,. -->
	                	</p>
	                </div>
	            </div>
	        </div>
        </div>

<div style="padding:0px; margin:0px; background-color:#fff;font-family:Arial, sans-serif">

    <!-- #region Jssor Slider Begin -->

    <!-- Generated by Jssor Slider Maker. -->
    <!-- This demo works without jquery library. -->

    <script type="text/javascript" src="assets/js/jssor.slider.min.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 5,
                $SpacingX: 1,
                $SpacingY: 1,
                $Align: 0,
                $NoDrag: true
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        /* jssor slider thumbnail navigator skin 14 css *//*.jssort14 .p            (normal).jssort14 .p:hover      (normal mouseover).jssort14 .pav          (active).jssort14 .pav:hover    (active mouseover).jssort14 .pdn          (mousedown)*/.jssort14 .p {    position: absolute;    width: 100px;    height: 27px;    top: 0;    left: 0;    padding: 0px;    background: #fff;}.jssort14 .w {    cursor: pointer;    position: absolute;    WIDTH: 100%;    HEIGHT: 100%;    background-color: #c2b38f;}.jssort14 .pdn .w, .jssort14 .pav .w, .jssort14 .p:hover .w {    background-color: #422e2c;}.jssort14 .c {    width: 100%;    height: 23px;    position: absolute;    top: 0;    left: 0;    line-height: 23px;    text-align: center;    color: #000;    font-size: 12.5px;    background-color: #e6e0c8;    transition: background-color .6s;    -moz-transition: background-color .6s;    -webkit-transition: background-color .6s;    -o-transition: background-color .6s;}.jssort14 .p:hover .c, .jssort14 .pav:hover .c, .jssort14 .pav .c {    transition: none;    -moz-transition: none;    -webkit-transition: none;    -o-transition: none;}.jssort14 .pav .c {    background-color: #ffab57;}.jssort14 .p:hover .c, .jssort14 .pav:hover .c {    background-color: #fc9835;}
        
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 327px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 27px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="assets/img/work1.jpg" />
                <div u="thumb">Seminar</div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="assets/img/work2.jpg" />
                <div u="thumb">Image Gallery</div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="assets/img/work3.jpg" />
                <div u="thumb">Conferences</div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="assets/img/work6.jpg" />
                <div u="thumb">Free Training</div>
            </div>
<!--             <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/05.jpg" />
                <div u="thumb">Carousel</div>
            </div> -->
            <a data-u="ad" href="http://www.jssor.com" style="display:none">Bootstrap Slider</a>
        
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort14" style="position:absolute;left:0px;top:0px;width:504px;height:27px;">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="c"></div>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
    </div>
    <script>
        jssor_1_slider_init();
    </script>

    <!-- #endregion Jssor Slider End -->
</div>

        <!-- Services Half Width Text -->
        <!--div class="services-half-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-6 services-half-width-text wow fadeInLeft">
	                    <h3>Cash On Delivery</h3>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> 
	                    	nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, 
	                    	sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
	                    	suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
	                    	sed do <strong>eiusmod tempor</strong> incididunt.
	                    </p>
	                </div>
	                <div class="col-sm-6 services-half-width-text wow fadeInUp">
	                    <h3>Dolor Sit Amet</h3>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> 
	                    	nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, 
	                    	sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
	                    	suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
	                    	sed do <strong>eiusmod tempor</strong> incididunt.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div-->

        <!-- Call To Action -->
        <div class="call-to-action-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action-text wow fadeInLeftBig">
	                    <p>
	                    	We have <span class="violet">Some New</span>, Just Check It Out.
	                    </p>
	                    <div class="call-to-action-button">
	                        <a class="big-link-3" href="#">Try It Now!</a>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Footer -->
<?php  include("assets/Footer.php");  ?>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>