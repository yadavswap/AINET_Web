@extends('layouts.app1')
@section('content')
<style>
     a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: blue;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}

</style>
    
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h4 >Apply for scholarships.
                        </h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Apply for scholarships.
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="conatainer">
            <h4 style="text-align:center">Apply for scholarships.</h4>
        </div>
        <br>
        <br>
        <div class="container">
                <a href="RELO_OPEN_Announcement_Website.pdf" target="_blank" style="text-align:center"><p style="color:blue">RELO Scholarship for AINET member: Announcement</p></a>

        </div>
        <div class="container">
                <a href="Fall 2020 OPEN Participant Flyer.pdf" target="_blank" style="text-align:center"><p style="color:blue">Fall 2020 OPEN Participant Flyer</p></a>

        </div>
        <div class="container">
                <a href="Fall 2020 Course descriptions.pdf" target="_blank" style="text-align:center"><p style="color:blue">Fall 2020 Course Descriptions</p></a>

        </div>
		  <div class="container">
                <a href="Fall 2020 OPEN Application form.docx" target="_blank" style="text-align:center"><p style="color:blue">Fall 2020 OPEN Application Form</p></a>

        </div>
      

        
    @endsection
