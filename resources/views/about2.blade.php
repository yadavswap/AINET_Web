@extends('layouts.app1')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript">
  function ValidateForm(frm) {
  if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
  if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
  if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
  if (frm.Comments.value == "") { alert('Please enter comments or questions.'); frm.Comments.focus(); return false; }
  return true; }
  </script>
<style>
    div.a {
  text-align: center;
}
  html {
    box-sizing: border-box;
  }
  h6 {text-align: center;}
  p {text-align: center;}

  *, *:before, *:after {
    box-sizing: inherit;
  }
  
  .column {
    float: left;
    width: 100%;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  
  @media screen and (max-width: 650px) {
    .column {
      width: 100%;
      display: block;
    }
  }
  
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }
  
  .container {
    padding: 0 16px;
  }
  
  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .title {
    color: grey;
  }
  
  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }
  
  .button:hover {
    background-color: #555;
  }
  </style>
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h4 >About
                        </h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        {{-- <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div> --}}
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Services Area Start ***** -->
    <section class="uza-services-area section-padding-80-0">
        <div class="container">
            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        {{-- <div class="service-icon">
                            <i class="icon_cone_alt"></i>
                        </div> --}}
                        <h4>About AINET
                        </h4>
                        <p style="text-align: justify">
                          AINET Association of English Teachers (in short, AINET), an affiliate of IATEFL – UK, is a registered English language teacher association in India.    It is an affiliate of IATEFL, UK.  The primary focus of the association is to create opportunities of professional learning for teachers and thereby strive towards quality English language education for students. It is community of people of interest in teaching and learning of English in India – teachers (working in public and private sectors), teacher trainers, teacher educators, publishers, policy makers, educational administrators, researchers, students, and freelancers. AINET welcomes anyone working to promote the growth of teachers and learning of English&nbsp; <a href="/new_about" class="read-more-btn"></a>
                        </p>
                        <h6>
                          
                        </h6>

                    </div>
                </div>


            </div>
        </div>
    </section>
  
<div class="container">
    
    <h4 align="center">The AINET Team</h4>
    <br>
    
   
    <img src="/images/Team.png" alt="Jane" >
   
      
    </div>
  <br>
  <br>  
{{-- start ainet news --}}
<div class="container">
    <h4 align="center"> AINET in News</h4>
  <br>
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -mx-4 -mb-10 text-center">
            <div class="sm:w-1/2 mb-10 px-4">
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="thumb1.jpg">
              </div>
              {{-- <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Buy YouTube Videos</h2> --}}
              {{-- <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p> --}}
              <a href ="/news" class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded " class="a">Read More</a>            </div>
            <div class="sm:w-1/2 mb-10 px-4">
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="/Thumbnail Tehelka News24.png">
              </div>
              {{-- <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">The Catalyzer</h2> --}}
              {{-- <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p> --}}
              <a href ="/Tehelka News24 4th AINET.mp4"class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded" target="_blank">Watch More</a>            </div>
          </div>
        </div>
      </section>
</div>

<br>
<br>
<div class="container">

    <h4 align="center"> Contact Us</h4>

    <div class="w-full max-w-xs-center">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="//submit.form"  id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Name">
              Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Name" type="text" placeholder="Enter Name">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="PhoneNumber">
              Phone Number
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="PhoneNumber" type="text" placeholder="Enter Phone Number">
          </div>
          <div class="mb-6">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="FromEmailAddress">
                Email Address
              </label>
              <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="FromEmailAddress" type="text" placeholder="Enter Email Address">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Comments">
                  Comments
                </label>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  name="Comments"  type="text" placeholder="Enter Comments">
              </div>
          <div class="flex items-center justify-between">
            <button name="skip_Submit" type="submit" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
              Sign In
            </button>
            <script src="https://www.100forms.com/js/FORMKEY:2ES2PGYYDLA9/SEND:theainet@gmail.com" type="text/javascript"></script>

           
          </div>
        </form>
       
      </div>
    </div>
{{-- end ainet news --}}
  
    
    
       
    
            
    @endsection

   