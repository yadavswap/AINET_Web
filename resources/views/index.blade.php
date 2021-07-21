@extends('layouts.app1')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>


<script language='javascript' type='text/javascript'>
    function show_hide(id2hide, id2show) {
        document.getElementById(id2hide).style.visibility = 'hidden';
        document.getElementById(id2show).style.visibility = 'visible';
    }

</script>

<style>
    #myP {
        display: none;
    }
    .nav-link{
        color: #DF068C;
    }
    
    
</style>

<!-- ***** Welcome Area Start ***** -->
<section class="welcome-area" style="margin-top:-100px;">
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="./img/core-img/curve-1.png" alt="">
                </div>

                
                <!-- Welcome Content -->
                
                <div class="welcome-content h-100" >
                      
                    
                    <div class="container h-100">
                        
                        <div class="row h-100 align-items-center"  >
                             <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="/logo.gif" alt="" data-animation="slideInTop" data-delay="100ms" >
                                
                                </div>
                            </div>
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                        <h1 style="color:#9900FF;">A vibrant community of english language education professionals or stakeholders
                                            </h1><br>
                                    
                                            <h1 style="color:#0000FF;">Develop. Together.
                                                </h1>
                                        {{-- <h2 >Uza makes your <br> biz <span>greater</span></h2>
                                        <h5 >We love to create "cool" things on Digital Platforms</h5> --}}
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                           
                        </div>
                    </div>
                </div>
            </div>
            

           
        </div>
</section>


<div class="container" >
    <div class="row justify-content-center" >
        <div class="col-md-8">
          
            <div class="card w3-border-orange" >
                <div class="card-header w3-orange w3-border-orange" >{{ __('') }}</div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link"  href="/membership">Become A Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#renew">Member Login</a>
                    </li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content pt-3">
                    <div class="tab-pane container fade" id="new">
                        <!-- Nav tabs -->
                        {{-- <ul class="nav nav-tabs">
                            <li class="nav-item" id="indiaTab">
                                <a class="nav-link" data-toggle="tab" href="#india">India</a>
                            </li>
                            <li class="nav-item" id="overTab">
                                <a class="nav-link" data-toggle="tab" href="#over">Overseas</a>
                            </li>
                        </ul> --}}
                        <p> AINET offers  number of membership privileges with different membership types.
                            <a href='/membership'>more details</a>
                        </p>

                        <!-- Tab panes -->
                        <div class="tab-content pt-3">
                            <div class="tab-pane container" id="india">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#india_indi">Individual</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#india_inst">Institition</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane container fade" id="india_indi">
                                    
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="renew">
                            <div class="container">
                                    <div class="row justify-content-center mt-5 mb-5">
                                        <div class="col-md-8">
                                            <div class="card w3-border-orange">
                                                <div class="card-header w3-orange w3-border-orange">{{ __('Login') }}</div>
                                
                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                
                                                        <div class="form-group row">
                                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                
                                                            <div class="col-md-6">
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-group row">
                                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                
                                                            <div class="col-md-6">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-group row">
                                                            <div class="col-md-6 offset-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                
                                                                    <label class="form-check-label" for="remember">
                                                                        {{ __('Remember Me') }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-8 offset-md-4">
                                                                <button type="submit" class="btn w3-orange" style="background-color:#DF068C;padding:0px 10px 10px 10px;color:white;">
                                                                    {{ __('Login') }}
                                                                </button>
                                
                                                                @if (Route::has('password.request'))
                                                                    <a class="btn w3-text-orange" href="{{ route('password.request') }}">                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <script>
        $(document).ready(function(){
            $('.nav-tabs a[href="#india"]').click(function(){
                // alert('on');
                $("#overTab").css('display','none');
                $(this).tab("show")
            });

            $('.nav-tabs a[href="#over"]').click(function(){
                $("#indiaTab").css('display','none');
                $(this).tab("show")
            });
        });
    </script>

                  {{-- Tabs Stop --}}
                  <br><br><br><br>
                  <div class="clients-feedback-area mt-80 section-padding-80 clearfix" style="margin-top:-130px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                    <h2 style="text-align:center"> Testimonials</h2>
                                    <br>
                                <!-- Testimonial Slides -->
                                    <div class="testimonial-slides owl-carousel">
                
                                    <!-- Single Testimonial Slide -->
                                        <div class="single-testimonial-slide d-flex align-items-center">
                                        <!-- Testimonial Thumbnail -->
                                            <div class="testimonial-thumbnail">
                                                <img src="./img/bg-img/T1.JPG" alt="">
                                            </div>
                                                <!-- Testimonial Content -->
                                                <div class="testimonial-content">
                                                    <h4>"AINET has always provided a huge platform for the professional development of hard working teachers. It has constantly supported all its associated teachers to grow to greater heights. For me, it is the first and the best organization to to boost my research skills. It has done everything for me that parents do for the bright future of a child!"</h4>
                                                    <!-- Ratings -->
                                                    <div class="ratings">
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                    </div>
                                                    <!-- Author Info -->
                                                    <div class="author-info">
                                                        <h5>Darshana Bapat, Ratnagiri <span>- </span></h5>
                                                    </div>
                                                    <!-- Quote Icon -->
                                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                                </div>
                                            </div>
                
                                            <!-- Single Testimonial Slide -->
                                            <div class="single-testimonial-slide d-flex align-items-center">
                                                <!-- Testimonial Thumbnail -->
                                                <div class="testimonial-thumbnail">
                                                    <img src="./img/bg-img/T2.JPG" alt="">
                                                </div>
                                                <!-- Testimonial Content -->
                                                <div class="testimonial-content">
                                                    <h4>“My association with AINET has been an utter joy. As an illustration I have gone from being a teacher to becoming a teacher researcher and a mentor in no more than a year. AINET's work is very structured, clear, logical and effective when it comes to organising any workshop or conference. AINET has played a major role in my CPD.”</h4>
                                                    <!-- Ratings -->
                                                    <div class="ratings">
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                    </div>
                                                    <!-- Author Info -->
                                                    <div class="author-info">
                                                        <h5>Renu Dhotre, Mumbai <span></span></h5>
                                                    </div>
                                                    <!-- Quote Icon -->
                                                <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                            </div>
                                        </div>
                                            <!-- Single Testimonial Slide -->
                                            <div class="single-testimonial-slide d-flex align-items-center">
                                                    <!-- Testimonial Thumbnail -->
                                                    <div class="testimonial-thumbnail">
                                                        <img src="./img/bg-img/T3.JPG" alt="">
                                                    </div>
                                                    <!-- Testimonial Content -->
                                                    <div class="testimonial-content">
                                                        <h4>“The support AINET gave me and the knwoledge they provided me with really transformed the way in which I run my teacher club in Latur and ensure that I have time to devote to what matters most. AINET conferences helped me improve my strategic planning and project management skills. Truly life changing!”</h4>
                                                        <!-- Ratings -->
                                                        <div class="ratings">
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                        </div>
                                                        <!-- Author Info -->
                                                        <div class="author-info">
                                                            <h5>Prashant Mugale, Latur <span></span></h5>
                                                        </div>
                                                        <!-- Quote Icon -->
                                                        <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                                    </div>
                                                </div>
                                                <!-- Single Testimonial Slide -->
                                            <div class="single-testimonial-slide d-flex align-items-center">
                                                    <!-- Testimonial Thumbnail -->
                                                    <div class="testimonial-thumbnail">
                                                        <img src="./img/bg-img/T4.JPG" alt="">
                                                    </div>
                                                    <!-- Testimonial Content -->
                                                    <div class="testimonial-content">
                                                        <h4>“AINET's management system and AINET Team's work with our teacher leaders to customize these systems to their own personal styles has significantly improved the quality of teachers in my ATM teachers' group. Teachers feel more organized and more productive, using practices learned from AINET projects.”</h4>
                                                        <!-- Ratings -->
                                                        <div class="ratings">
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                        </div>
                                                        <!-- Author Info -->
                                                        <div class="author-info">
                                                            <h5>Vikram Adsul, Ahmednagar <span></span></h5>
                                                        </div>
                                                        <!-- Quote Icon -->
                                                        <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                                    </div>
                                                </div>
                                                <!-- Single Testimonial Slide -->
                                            <div class="single-testimonial-slide d-flex align-items-center">
                                                    <!-- Testimonial Thumbnail -->
                                                    <div class="testimonial-thumbnail">
                                                        <img src="./img/bg-img/T5.JPG" alt="">
                                                    </div>
                                                    <!-- Testimonial Content -->
                                                    <div class="testimonial-content">
                                                        <h4>“AINET's Teacher Research Initiative armed me with practical tools and strategies that have made an immediate impact on the overall effectiveness of my thinking and teaching. Working with AINET engaged me in a process of learning-unlearning and relearning and rediscover myself. It was not only highly effective but also highly enjoyable!”</h4>
                                                        <!-- Ratings -->
                                                        <div class="ratings">
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                        </div>
                                                        <!-- Author Info -->
                                                        <div class="author-info">
                                                            <h5>Rohini Deshmukh Sankpal, Kolhapur <span></span></h5>
                                                        </div>
                                                        <!-- Quote Icon -->
                                                        <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                                    </div>
                                                </div>
                
                                            <!-- Single Testimonial Slide -->
                                            <div class="single-testimonial-slide d-flex align-items-center">
                                                <!-- Testimonial Thumbnail -->
                                                <div class="testimonial-thumbnail">
                                                    <img src="./img/bg-img/T6.JPG" alt="">
                                                </div>
                                                <!-- Testimonial Content -->
                                                <div class="testimonial-content">
                                                    <h4>“I honestly can’t explain how thankful I am. This really opened my eyes to actually being able to become a reflective practitioner..”</h4>
                                                    <!-- Ratings -->
                                                    <div class="ratings">
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                    </div>
                                                    <!-- Author Info -->
                                                    <div class="author-info">
                                                        <h5>Dr. Bhavna Rai, Bhandara <span></span></h5>
                                                    </div>
                                                    <!-- Quote Icon -->
                                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                                </div>
                                            </div>
                
                                     
                                        </div>
                                    
                                    </div>
                                
                            </div>
                        </div>    
                        <br><br>
            <div class="container">
                <div class="col-12">
                    <div class="single-footer-widget mb-80">
                            <h2 style="text-align:center">Follow us</h2>

                        <!-- Widget Title -->
                                <div class="section-heading text-center">
                                    <br>
                        <div class="footer-social-info">
                        
                      <a href="https://www.facebook.com/ainetindia/" target="_blank" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook" ><i class="fa fa-facebook"></i></a>fb.com/ainetindia&nbsp;&nbsp;
                            <a href="https://twitter.com/ainetindia" target="_blank" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a> @ainetindia&nbsp;&nbsp;
                              <a href="https://www.instagram.com/ainetindia" target="_blank" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>ainetindia&nbsp;&nbsp;
                       
                        
                            <a href=" https://www.youtube.com/AINETIndia " target="_blank" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>AINET India&nbsp;&nbsp;
                            {{-- <i class="fa fa-telegram" style="font-size:36px;color:DodgerBlue"></i>@ainet&nbsp;&nbsp; --}}

                            <a href="https://in.pinterest.com/theainet/ " target="_blank" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a> AINET &nbsp;
                            {{-- <a href="https://in.pinterest.com/theainet/ " target="_blank" class="telegram" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-telegram"></i></a> AINET&nbsp;&nbsp; --}}
                            <a href="https://in.pinterest.com/theainet/ " target="_blank" class="tel" data-toggle="tooltip"  title="telegram" style="background-color: #44a4d4"> <i class="fa fa-telegram" style="color:white" ></i></a> @theainet 

                           
                             {{-- <a href="/telegram"><img src="images/tele.png"/></a>@theainet&nbsp;&nbsp; --}}

                        
           

                        </div>
                    </div>
                </div>
            </div>    
    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <!-- About Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail mb-80">
                        {{-- <img src="images/POSTER 3.png" alt=""> --}}
                        <!-- Video Area -->
                        {{-- <div class="uza-video-area hi-icon-effect-8">
                            <a href="#" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div> --}}
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-80">
                        <h2>
                                {{-- 5th AINET International Conference , Hyderabad</h2> --}}
                        {{-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna
                            liquyam erat.</p> --}}
                        {{-- <a href="#" class="btn uza-btn btn-2 mt-4" style="font-size: 20px"><b>Start Exploring</b></a> --}}

                    </div>
                </div>
            </div>
        </div>

   
    <!-- ***** Services Area End ***** --> 

    <!-- ***** Portfolio Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80" style="margin-top:-170px;" >
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                        <h2 style="text-align:center">AINET Initiatives</h2>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/CONNET.JPG" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                           <a  href="/connect"> <h4>AINET CONNECT</h4></a>
                        <a  href="/connect"><p>Stronger Networking for Stronger Association</p></a>
      
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="/connect"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/TRI.JPG" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                              <a  href="/ainet_in1"><h4>AINET TRI</h4></a>
                                <a  href="/ainet_in1"> <p>Exploring Classrooms, Empowering Teachers</p></a>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="/ainet_in1"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                   
                    


                </div>
            </div>
        </div>
{{-- Announcement start --}}
<section class="text-gray-700 body-font overflow-hidden" style="margin-top:-100px;">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h2 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Announcements</h2>
    
    
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 xl:w-1/2 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium"></h2>
            <h1 class="text-2xl text-gray-900-center pb-4 mb-4 border-b border-gray-200 leading-none" style="text-align:center">Announcements</h1>
              <p>1. AINET MEMBERSHIP LAUNCHED</p>
             <p>2. RELO, India has announced Online Professional English Network (OPEN) the professional development programs for English teachers/coordinators. RELO has offered some scholarships exclusively for AINET members.<br>
Limited seats are available. Become an AINET member and apply. <a target="_blank" href="RELO_OPEN_Announcement_Website.pdf    ">Click here for detailed announcement</a> </p>

            <p >
           
              3. AINET Connect Twitter Chat on 20th July 2020, Monday from 8 PM to 9 PM IST on AINET Twitter Handle <a href="https://www.facebook.com/ainetindia/">@ainetindia</a>

            </p>
            <br>
            <p >
            4. AINET FB Live August 2020 event to be announced soon. Live streaming on <a href="https://twitter.com/ainetindia">www.facebook.com/ainetindia</a>

            </p>
            <br>
            <p class="flex items-center text-600 mb-6">
             5. AINET Webinar event to be announced soon.
            </p>
            <br>
            
          </div>
        </div>
        
        
        <div class="p-4 xl:w-1/2 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium"></h2>
              <h1 class="text-2xl text-gray-900-center pb-4 mb-4 border-b border-gray-200 leading-none" style="text-align:center">Featured Events</h1>
            <p >
              Event 1- FB Live <br>
              Organiser- RELO, US Embassy, India <br>
              Topic- Delivering Course Content- Reading <br>
              Speaker- Toni McLaughlan, UAE <br>
              Date- 14 July 2020, Time 5 PM to 6 PM <br>
                To register, <a target="_blank" href="https://www.facebook.com/Relo-India-102846701334269">click here</a>

            </p>
         <br>
         
        
            <p >
                    Event 2- Webinar <br>
                    Orgaiser- The United States India Education Foundation (USIEF) & Department of ELT, Gauhati University <br>
                    Topic- Fulbright-Nehru Academic and Professional Excellence (FNAPE)<br>
                    Speaker- Dr. Padmini Boruah, Professor & Head, Department of ELT, Gauhati University, Assam <br>
                    Date- 14 July 2020, Time- 4 PM - 5 PM IST <br>
                To register, <a target="_blank" href="https://attendee.gotowebinar.com/register/30736155976660495">click here</a>

                </p>
            {{-- <button class="flex items-center mt-auto text-white bg-gray-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-600 rounded">Button
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button> --}}
            {{-- <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p> --}}
          </div>
        </div>
      </div>
    </div>
  </section>



{{-- Announcement end --}}


<!-- Client Feedback Area Start -->
    
    </div>
</div>
        
    

     
    

    

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    
    .newsletter {
padding: 80px 0;
background: #19beda;
}

.newsletter .content {
max-width: 650px;
margin: 0 auto;
text-align: center;
position: relative;
z-index: 2; }
.newsletter .content h2 {
color: #243c4f;
margin-bottom: 40px; }
.newsletter .content .form-control {
height: 50px;
border-color: #ffffff;
border-radius:0;
}
.newsletter .content.form-control:focus {
box-shadow: none;
border: 2px solid #243c4f;
}
.newsletter .content .btn {
min-height: 50px; 
border-radius:0;
background: #243c4f;
color: #fff;
font-weight:600;
}
</style>
<section class="newsletter" style="margin-top:-130px;">
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="content">
        <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
        <form class="input-group" action = "/membership" method = "post">
        @csrf
         <input type="email" class="form-control" placeholder="Enter your email" name ="email"><br>
          <input type="name" class="form-control" placeholder="Enter your Name" name="name">

         <span class="input-group-btn">
         <button class="btn" type="submit">Subscribe Now</button>
         </span>
        </form>
    </div>
</div>
</div>
</div>
</section>

@endsection


