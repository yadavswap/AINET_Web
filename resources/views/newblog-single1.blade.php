<link rel="stylesheet" href="{{ asset('style.css') }}">

   @extends('layouts.app1')
    @section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">AINET ADDA </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#">AINET ADDA</a></li>
                                <li class="breadcrumb-item active" aria-current="page"></li>
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

    <!-- ***** Blog Details Area Start ***** -->
    <section class="blog-details-area section-padding-80">
            @foreach ($courseinclude as $bl)

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-details-content">
                        <!-- Post Details Text -->
                        <div class="post-details-text">

                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <div class="post-content text-center mb-50">
                                        <a href="#" class="post-date"><span>{{ $bl->created_at->format('d')}}</span>{{ $bl->created_at->format('Y.m')}}</a>

                                        <h2>{{$bl->title}}</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <img class="mb-50" src="{{ asset('./blogs'.$bl['image']) }}" alt="">
                                </div>
                                <div class="col-12 col-lg-10">
                                    <p>{!!$bl->desc!!}</p>
                                    <div class="uza-post-share d-flex align-items-center">
                                        <h6 class="mb-0 mr-3">Share:</h6>
                                        <div class="social-info-">
                                            {{-- <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> --}}
                                            <a href={{ "whatsapp://send?text=https://theainet.net/newblog/".$bl->id }} ><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div id="disqus_thread"></div>
                                    <script>
                                    
                                    /**
                                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                    
                                    var disqus_config = function () {
                                    this.page.url = '{{Request::url()}}';  // Replace PAGE_URL with your page's canonical URL variable
                                    this.page.identifier ={{$bl->id}} ; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                    };
                                    
                                    (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://theainet.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                    })();
                                    </script>
                                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                            </div>
                                    {{-- <p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted. His she are man their spite avoid. Her pretended fulfilled extremely education yet. Satisfied did one admitting incommode tolerably how are.</p> --}}
                                    <!-- Blockquote -->
                                
                                    <!-- Post Catagories & Post Share -->
                                    <div class="d-flex align-items-center justify-content-between">
                                        <!-- Post Catagories -->
                                        {{-- <div class="post-catagories">
                                            <ul class="d-flex flex-wrap align-items-center">
                                                <li><a href="#">Tutorials</a></li>
                                                <li><a href="#">Business</a></li>
                                            </ul>
                                        </div> --}}

                                        <!-- Post Share -->
                                     
                                    </div>
                                    
                                </div>
                              
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </section>

    <!-- ***** Blog Details Area End ***** -->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                {{-- <!-- Newsletter Content -->
                <div class="col-12 col-md-6 col-lg-6">
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
                </div>
            </div> --}}
            <!-- Border Bottom -->
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->

    @endsection