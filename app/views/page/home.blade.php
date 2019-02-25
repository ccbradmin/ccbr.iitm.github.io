@extends('layout.main')

@section('content')

<!--=== Slider ===-->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/sliders/1a.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption revolution-ch1 sft start"
                        data-x="center"
                        data-hoffset="0"
                        data-y="100"
                        data-speed="1500"
                        data-start="500"
                        data-easing="Back.easeInOut"
                        data-endeasing="Power1.easeIn"
                        data-endspeed="300">
                        Center for Computational Brain Research
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption revolution-ch2 sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="190"
                        data-speed="1400"
                        data-start="2000"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        Explore the interface between <br>
                        Neuroscience and Engineering disciplines
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="310"
                        data-speed="1600"
                        data-start="2800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        <div style="text-align: center; color: #fff;"> <h2  style="color: #fff;">Machine Intelligence and Brain Research<BR>
                                Winter Course/Workshop on Computational Brain Research at IIT Madras</h2><BR>
                         <a href="{{ URL::route('workshops') }}" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>                       
                        </div>
                      
                        
                       
                    </div>
                    
                </li>
                <!-- END SLIDE -->

                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/sliders/2a.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption revolution-ch1 sft start"
                        data-x="center"
                        data-hoffset="0"
                        data-y="100"
                        data-speed="1500"
                        data-start="500"
                        data-easing="Back.easeInOut"
                        data-endeasing="Power1.easeIn"
                        data-endspeed="300">
                        CCBR areas of activity
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption revolution-ch2 sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="190"
                        data-speed="1400"
                        data-start="2000"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        Analysis of the structure and <br>
                        activity of neural circuits
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="310"
                        data-speed="1600"
                        data-start="2800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        <div style="text-align: center; color: #fff;"> <h2  style="color: #fff;">Machine Intelligence and Brain Research<BR>
                                Winter Course/Workshop on Computational Brain Research at IIT Madras</h2><BR>
                         <a href="{{ URL::route('workshops') }}" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>                       
                        </div>
                      
                    </div>
                </li>
                <!-- END SLIDE -->

                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 3">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/sliders/3a.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption revolution-ch1 sft start"
                        data-x="center"
                        data-hoffset="0"
                        data-y="100"
                        data-speed="1500"
                        data-start="500"
                        data-easing="Back.easeInOut"
                        data-endeasing="Power1.easeIn"
                        data-endspeed="300">
                        CCBR areas of activity
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption revolution-ch2 sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="190"
                        data-speed="1400"
                        data-start="2000"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        Brain-inspired hardware and software architectures
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="310"
                        data-speed="1600"
                        data-start="2800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                         <div style="text-align: center; color: #fff;"> <h2  style="color: #fff;">Machine Intelligence and Brain Research<BR>
                                Winter Course/Workshop on Computational Brain Research at IIT Madras</h2><BR>
                         <a href="{{ URL::route('workshops') }}" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>                       
                        </div>
                      
                    </div>
                </li>
                <!-- END SLIDE -->
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!--=== End Slider ===-->

 

    <!--=== Content Part ===-->

    <div class="container content">
        <!-- Service Blocks -->
        <div class="headline"><h2>Our Vision</h2></div>
        <h5>
        The impending saturation of exponential improvements in computer hardware and the rapid growth of machine intelligence to cope with big data have led to a renewed engineering and technological interest in understanding how brains work. At the same time, technological advances have led to new tools for studying brains.
        </h5>
        <h5> 
        The goal of the Center for Computational Brain Research (CCBR) at IIT Madras is to explore the interface between Neuroscience and Engineering disciplines. A two-way interaction is envisaged, where an understanding of the brain can help drive significant technological advances, and in turn engineering tools can help analyze and probe neural circuits. Within this overall vision, CCBR will pursue two broad areas of activity: 
        </h5>
        <div class="row margin-bottom-30">
            <div class="col-md-6">
                <div class="service">
                    <i class="fa fa-compress service-icon"></i>
                    <div class="desc">
                        <h4>Analysis of the structure and activity of neural circuits:</h4>
                        <p>This includes the analysis of big data sets related to whole brain measurements of neuronal connectivity and activity, the development of new technologies for data acquisition, and the theoretical understanding of these data to derive underlying principles.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service">
                    <i class="fa fa-cogs service-icon"></i>
                    <div class="desc">
                        <h4>Brain-inspired hardware and software architectures:</h4>
                        <p>This includes research into improving hardware efficiency (speed and energy consumption) based on insights from studying neural circuits, developing next generation algorithms, software and hardware for machine intelligence, and improving the robustness and programmability of software systems. </p>
                    </div>
                </div>
            </div>
           
        </div>
        <!-- End Service Blokcs -->

        <!-- Recent Works -->
        <!--
        <div class="headline"><h2>Recent Works</h2></div>
        <div class="row margin-bottom-20">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/main/img2.jpg" alt="" />
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project One</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/main/img3.jpg" alt="" />
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Two</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/main/img9.jpg" alt="" />
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Three</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/main/img10.jpg" alt="" />
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Four</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- End Recent Works -->

        
      
    </div><!--/container-->
    <!-- End Content Part -->

    

	
@stop

@section('jscontent')
	
@stop