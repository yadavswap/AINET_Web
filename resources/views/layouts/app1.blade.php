<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AINET Association Of English Teachers">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>AINET Association Of English Teachers</title>

    <!-- Favicon -->
    <link rel="icon" href="/images/ainet1.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}
    </style>
    <style>
        .dropbtn {
          background-color:lightblue;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
        }
        
        .dropdown {
          position: relative;
          display: inline-block;
        }
        
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        
        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }
        
        .dropdown-content a:hover {background-color: #f1f1f1}
        
        .dropdown:hover .dropdown-content {
          display: block;
        }
        
        .dropdown:hover .dropbtn {
          background-color: #3e8e41;
        }
        </style>
    

</head>

<body>
    <!-- Preloader -->
        {{-- <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div> --}}
    </div>

    <!-- ***** Top Search Area End ***** --> 

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/"><img src="https://swapda.blob.core.windows.net/demo/ainet_logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">    
                                 
                          
                                <li ><a href="/">Home</a></li>
                                <li><a href="/about">About Us</a></li>

                                <li><a href="#">AINET Initiatives</a>
                                    <ul class="dropdown">
                                        <a class="dropdown-item" href="/tri">Teacher Research</a>
                                        <a class="dropdown-item" href="/connect">AINET Connect</a>
                                        <a class="dropdown-item" href="/prelim">AINET PRELIM
                                        </a>


                                    </ul>
                                </li>
                                   <li><a href="/newpublicationone">Publications</a>
                               
                                </li>
                                <li><a href="#">More</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Events</a></li>

                                        <li><a href="#">Affiliates </a></li>
                                        <li><a href="#">Resources  </a></li>
                                        <li><a href="#">Gallery</a></li>
                                        
                                        <li><a href="#">Archives</a></li>
                                        

                                    </ul>
                                </li>
                            


                                <li><a href="/newblog">Blog</a>
                                   
                                </li> 
                                {{-- <li><a href="#">Member Area</a>
                                    <ul class="dropdown">
                                        <li><a href="/membership">Become a member</a></li>
                                        <li><a href="/login">Member Login</a></li>
                                    </ul>
                                </li> --}}
                                <div class="dropdown">
                                    <button class="dropbtn" style="color:black">Member Area</button>
                                    <div class="dropdown-content">
                                    <a href="/membership">Become a Member</a>
                                    <a href="/login">Member Login</a>
                                    </div>
                                  </div>
                                {{-- <li><a href="/newcontact">Contact</a></li> --}}
                            </ul>

                            
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </header>
  

   {{-- @yield('content') --}}
   @yield('content')
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h1 class="text-center mt-5 w3-text-orange"><b>Get Networked, Follow AINET</b></h1><br>
           </div>
           <div class="col-md-4 w3-card-2 w3-margin">
               <a class="twitter-timeline" data-height="600"
                   href="https://twitter.com/ainetindia?ref_src=twsrc%5Etfw">Tweets by ainetindia</a>
               <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
           </div>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <div class="col-md-4 w3-padding w3-card-2 w3-margin">
               <iframe
                   src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fainetindia%2F&tabs=timeline&width=340&height=600&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                   width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                   allowTransparency="true" allow="encrypted-media"></iframe>
           </div>
          
  

       </div>
   </div>

    <!-- ***** Footer Area Start ***** -->
   
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- All js -->
    <script src="{{ asset('js/uza.bundle.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/default-assets/active.js') }}"></script>

    @hasSection ('js')
        @yield('js')
    @endif

</body>

