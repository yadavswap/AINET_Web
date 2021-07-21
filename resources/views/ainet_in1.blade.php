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
                        <h4 >Teacher Research Initiative
                        </h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">TRI
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

<br>
<br>
<section class="uza-services-area section-padding-80-0" style="margin-top:-100px;">
        <div class="container">
            <div class="row">
    
                <!-- Single Service Area -->
                <div class="col-12">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        {{-- <div class="service-icon">
                            <i class="icon_cone_alt"></i>
                        </div> --}}
                        <h4>About TRI
                        </h4> 
                        <p align=" justify">
                                AINET is committed to working for teacher development by creating opportunities for teachers for their Continuing Professional Development. The Teacher Research Initiative (TRI) is one such opportunity which offers a chance to the teachers to study and understand exploratory action research in ELE. We are happy to mention that this initiative was supported by ReSIG of IATEFL and by the British Council, India in the initial stage. The AINET is now carrying this initiative on its own in the third cohort (TRI3-2019-20). 
                                The super mentor is Dr. Amol Padwad, Professor and Director, Centre for English Language Education, Ambedkar University Delhi.  The mentors are Dr. Krishna Dixit, Professor,  Centre for English Language Education, Ambedkar University Delhi, Dr. Vivek V Joshi, Assistant Professor at PGTD (English), Gondwana University, Gadchiroli and Milind Mane working in SJGS Mahavidyalaya, Pipri (Wardha) Maharashtra. The uniqueness of the cohort-3 also has peer mentors- the teacher researches having some experience of research conducted in first two rounds of the TRI, who are the helping hands for and co-learners with all the researcher teachers in their studies.
                        </p>
    
                    </div>
                </div>
    
    
            </div>
        </div>
    </section>
    
    <div class="container">
            <h4>You too can join the next cohort of AINET Teacher Research Initiative. How? Read further.<br>
                    You're expected to... </h4><br>
    
            <ol >
                    <li ><p>1. Identify a puzzle, an issue or a question related to assessment you would like to study more about.</p></li>
                    <li ><p>2. Spend a few months in systematically studying and exploring this puzzle/ issue/ question.</p></li>
                    <li ><p>3. Collect and analyze detailed information and draw useful ideas and findings from it.</p></li>
                    <li ><p>4. Share your experience and findings with others (perhaps at some public forum).</p></li>
                    <li ><p>5. And possibly write about and publish your entire experience (for which we will help)!</p></li>
            </ol>
    </div>
    <br>
    <br>
    <div class="container">
            <h4>AINET will help you... </h4><br>
    
            <ol >
                    <li ><p>1. You will work in small teams and individually with us and we will support you at every stage of your work.</p></li>
                    <li ><p>2. We will provide reading materials, training in research, expert advice, regular support and great teams of fellow-teachers to work with!</p></li>
                    <li ><p>3. All those who complete their studies will get a chance to present them at the AINET 2018 International Conference as special presenters!</p></li>
                    <li ><p>4. And, of course, a certificate to add to your CV.</p>
                        </li>
            </ol>
    </div>
    <br>
    <br>
    
    <div class="container">
            <h4>So, if you want to be on the TRI Team, you need to...</h4><br>
    
            <ol >
                    <li ><p>1. Commit to attend the face to face workshops (three workshops in a year).</p></li>
                    <li ><p>2. Commit to present paper at the AINET International Conferences and Teacher Research  events.</p></li>
                    <li ><p>3. Complete all the activities and tasks that we will plan together from time to time.</p></li>
                    <li ><p>4. Watch this space and follow all social media channels of AINET to get updates about TRI.</p>
                        </li>
            </ol>
    </div>
    <br>
    <br>
    

        <div class="conatainer">
            <h4 style="text-align:center">Read More About TRIs</h4>
        </div>
        <br>
        <br>
        <div class="container">
                <a href="/tr" target="_blank" style="text-align:center"><p style="color:blue">AINET Teacher Research Initiative 2019-20</p></a>

        </div>
        <div class="container">
                <a href="/tr2" target="_blank" style="text-align:center"><p style="color:blue">AINET Teacher Research Initiative 2017-18</p></a>

        </div>
        <div class="container">
                <a href="/tr3" target="_blank" style="text-align:center"><p style="color:blue">AINET Teacher Research Project 2015-16</p></a>

        </div>
        <div class="container">
                <a href="/tr" target="_blank" style="text-align:center"><p style="color:blue">TRI Support</p></a>

        </div>

        
    @endsection
