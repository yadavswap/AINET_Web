@extends('layouts.app1')
@section('content')

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Announcement</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Announcement</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ****** Gallery Area Start ****** -->
    <section class="uza-portfolio-area section-padding-80">

        <!-- Portfolio Menu -->
        <!-- <div class="portfolio-menu text-center mb-80">
            <button class="btn active" data-filter="*">All Portfolio</button>
            <button class="btn" data-filter=".ux-ui-design">UX/UI Design</button>
            <button class="btn" data-filter=".market-analytics">Market Analytics</button>
            <button class="btn" data-filter=".marketing-social">Marketing Social</button>
        </div> -->

        <div class="container-fluid">
            <div class="row uza-portfolio">

            

             

               

               

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/ann1.JPG" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                   
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marketing-social">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/ann2.JPG" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
         
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marketing-social">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/ann3.JPG" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                       
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12 text-center mt-30">
                    <a href="images/AINET 2020 Announcement.pdf" class="btn uza-btn btn-3">Download PDF copy of Announcement</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Gallery Area End ****** ->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Newsletter Content -->
                {{-- <div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-80">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-80">
                        <form action="#" method="post">
                            <input type="email" name="nl-email" value="" placeholder="Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div> --}}
            </div>
            <!-- Border Bottom -->
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->

    @endsection