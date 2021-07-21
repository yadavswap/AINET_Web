@extends('layouts.app1')
@section('content')
@php
$cor = App\Blog::all();
@endphp
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


    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="blog-details-content">

                    <!-- Post Details Text -->
                    <div class="post-details-text">


                        <div class="row justify-content-center">

                          
                            <div class="col-12 col-lg-10">

                                    <h2 class="mb-4">Recent Articles</h2>

                                <div class="d-flex align-items-center justify-content-between">

                                    
                                </div>
                                <!-- Related News Area -->
                                @foreach ($blogs as $blog )

                                <div class="related-news-area">

                                    <div class="row">
                                        <!-- Single Blog Post -->
                                        <div class="col-12 col-lg-6">
                                            <div class="single-blog-post bg-img mb-50" style="background-image: url(./img/bg-img/8.jpg);" href="{{url('show/coursecontent',$blog->id)}}">
                                                <!-- Post Content -->

                                                <div class="post-content">

                                                    <span class="post-date"><span>{{ $blog->created_at->format('d')}}</span>{{ $blog->created_at->format('Y.m')}}</span>
                                                    <a href="{{url('show/coursecontent',$blog->id)}}" class="post-title">{{$blog->title}}</a>
                                                    <p>{!! Str::words($blog->desc, 10,'....')  !!}</p>

                                                  

                                                 
                                                    {{-- @foreach($cor as $c) --}}


                                                       <a href="#" class="read-more-btn"> </a>

                                                </div>


                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->

                                    </div>

                                    @endforeach

                                </div>

                                {{-- @endforeach --}}

                                <!-- Comments Area -->

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



