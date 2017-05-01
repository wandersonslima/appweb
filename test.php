<html>
    <?php include "header.php"; ?>

    <!-- Add this css File in head tag-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">


    <!--
           If you want to change #bootstrap-touch-slider id then you have to change Carousel-indicators and Carousel-Control  #bootstrap-touch-slider slide as well
           Slide effect: slide, fade
           Text Align: slide_style_center, slide_style_left, slide_style_right
           Add Text Animation: https://daneden.github.io/animate.css/
           -->


    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- Third Slide -->
            <div class="item active">

                <!-- Slide Background -->
                <img src="https://images.pexels.com/photos/48726/pexels-photo-48726.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>

                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_left">
                            <h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>
                            <p data-animation="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>
                            <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>
                            <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">

                <!-- Slide Background -->
                <img src="https://images.pexels.com/photos/207990/pexels-photo-207990.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <h1 data-animation="animated flipInX">Bootstrap touch slider</h1>
                    <p data-animation="animated lightSpeedIn">Make Bootstrap Better together.</p>
                    <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">select one</a>
                    <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">select two</a>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="item">

                <!-- Slide Background -->
                <img src="https://images.pexels.com/photos/144345/pexels-photo-144345.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_right">
                    <h1 data-animation="animated zoomInLeft">Beautiful Animations</h1>
                    <p data-animation="animated fadeInRight">Lots of css3 Animations to make slide beautiful .</p>
                    <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>
                    <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
                </div>
            </div>
            <!-- End of Slide -->


        </div><!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div> <!-- End  bootstrap-touch-slider Slider -->




    <div style="text-align: center;margin-top: 150px; margin-bottom:100px"><h3>Check this in <a href="http://bootstrapthemes.co/demo/resource/BootstrapCarouselTouchSlider/"target="_blank"> Full Screen Preview </a> And Drag the Slider ;)</h3> / Slide Carousel Also <a href="http://bootsnipp.com/snippets/Padax"target="_blank">  Available here </a></div>
    <div style="text-align: center;margin-top: 150px; margin-bottom:100px"> | <a href="http://bootstrapthemes.co/item/bootstrap-carousel-touch-slider-with-text-animation/"target="_blank"> Snippet By Bootstrapthemes.co </a> |</div>



</html>