    <!--=== Header ===-->
    <div class="header">
        <div class="container" style="margin-bottom:0px;">
            <div class="logo text-center">
            <!-- Logo -->
            <a class="" href="{{ URL::Route('home') }}" style="text-decoration:none;">
                <img src="{{ URL::asset('images/ccbr_logo_rect.jpg') }}" alt="CCBR Logo" style="margin:8px; height: 100px;">
                <span style="text-decoration:none; font-size:22px;">
                <strong>Center for Computational Brain Research</strong>
                </span>
            </a>
            <a class="" href="https://www.iitm.ac.in/" target="_alt">
                <img src="{{ URL::asset('assets/img/IIT_Madras_Logo_128.png') }}" alt="CCBR Logo" style="margin:8px; height: 100px;">
            </a>
            <!-- End Logo -->
            </div>

         

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="{{ URL::route('workshops') }}">Workshops</a>
                    </li>
                    
                     <li>
                        <a href="{{ URL::route('course-details') }}">ID7123 - Course Details</a>
                    </li>
                    
                    <li>
                        <a href="{{ URL::route('people') }}">People</a>
                    </li>
                    <li>
                        <a href="{{ URL::route('funding') }}">Funding</a>
                    </li>
                        <li>
                        <a href="{{ URL::route('publications') }}">Publications</a>
                    </li>
                    
                    <li>
                        <a href="{{ URL::route('news') }}">News</a>
                    </li>
                     <li>
                        <a href="{{ URL::route('project') }}">Projects</a>
                    </li>
                    <li>
                        <a href="{{ URL::route('home') }}">Home</a>
                    </li>

                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="Search (Under Construction)">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Go</button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->
