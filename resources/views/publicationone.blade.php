@extends('layouts.app1')
@section('content')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<style>
.btn1{
    text-align: center;
}
p {text-align: center;}

    </style>

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">PUBLICATION
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">PUBLICATION
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

<br>
<br>
        <section class="text-gray-700 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto">
              <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-medium lg:h-auto h-50 object-cover object-center rounded"  src="/2014.JPG">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                  {{-- <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2> --}}
                  <h4 class="text-gray-900 text-3xl title-font font-medium mb-1">Research in English Language Education in Indian Universities - A Directory

                </h4>
                <br>
                <p style="font-size:180%;" >By Dr. Amol Padwad</p> <br>
                <p>LULU Publications, 2014</p>
                <p>INR 400</p>

                 <div class="flex mb-4">
                    <span class="flex items-center">
                      <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                      </svg>
                      <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                      </svg>
                      <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                      </svg>
                      <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                      </svg>
                      <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                      </svg>
                    </span>
                   
                  </div>
                  <p class="leading-relaxed">ELE research in India is still underdeveloped. ELE research forms a tiny fraction of overall research in English in Indian universities. We have a long way to go in developing ‘a popular taste’ for ELE research in India. This directory serves as a small initiative in this direction. It helps us see what kind of ELE research has been going on in our universities (and draw tentative inferences about the quality/ quantity/ range/ preferences in ELE research), it may also enable us to identify gaps and priorities in ELE research, besides offering a gateway to the available research base.
                    This directory contains research studies undertaken in Indian universities on any themes or issues related to the teaching and learning of English language and literature. This directory serves as a valuable resource for researchers, academicians, practicing teachers, policy makers and education planners in general.</p><br>
                    <P style="font-size:180%;" >Buy On</P><br>

                    <div class="container">
                   
                            <a href="https://www.lulu.com/en/gb/shop/amol-padwad/research-in-english-language-education-in-indian-universities-a-directory/paperback/product-162ewkgn.html" class="btn uza-btn btn-3">LULU</a>&nbsp;&nbsp;&nbsp;
                    
                   
                            <a href="https://store.pothi.com/book/amol-padwad-research-english-language-education-indian-universities-directory" class="btn uza-btn btn-3" id="brn1">POTHI</a>&nbsp;&nbsp;&nbsp;&nbsp;
                     </div>
                     <br>

                     <div class="container">
                   
                            <a href="https://www.amazon.in/Research-English-Language-Education-Universities/dp/9351964566/ref=sr_1_1?dchild=1&keywords=9789351964568+Research+in+English+Language+Education+in+Indian+Universities+-+A+Directory&qid=1592816720&s=books&sr=1-1" class="btn uza-btn btn-3">AMAZON</a>&nbsp;&nbsp;&nbsp;
                  
                    
                   
                            <a href="https://www.flipkart.com/search?q=9789351964568%20research%20in%20english%20language%20education%20in%20indian%20universities%20-%20a%20directory" class="btn uza-btn btn-3">FLIPKART</a>&nbsp;&nbsp;&nbsp;
                     </div>
                     <br>

                </div>
              </div>
            </div>
          </section>
    @endsection
