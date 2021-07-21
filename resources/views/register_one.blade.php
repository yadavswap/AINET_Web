@extends('layouts.app1')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>

    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    /* Float four columns side by side */
    .column {
        float: left;
        width: 25%;
        padding: 0 10px;
    }

    /* Remove extra left and right margins, due to padding */
    .row {
        margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        text-align: center;
        background-color: #E51284;
        color: aliceblue;

    }

    .card-one {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        text-align: center;
        background-color: #E51284;
        color: #9400d3;

    }

    h3 {
        color: aliceblue;
    }

    .inv {
        color: #004798;

    }

    .wh {
        color: #FFFFFF;
    }

    .wh1 {
        color: #e7f2fd;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 70%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
      background-color:#ecfcff;

    }
    
    th{
        background-color: #3e64ff;
        text-align: center


    }
    tr:nth-child(even) {
      background-color: #e7f2fd;
    }
    .one{
        background-color: #5edfff;
        text-align: center



    }
    .two{
        background-color: #b2fcff;
        text-align: center

    }
    .three{
        background-color: #ecfcff;
        text-align: center

    }
	#customers th {
		  color: white;

	}


</style>

<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h4 >Membership</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Membership Area</li>
							<li class="breadcrumb-item active" aria-current="page">Become A Member</li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h4>Membership privileges:</h4><br>
    <h5>As an AINET member, you will</h5><br>
    <ul>
        <li><h6 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Become part of a large and vibrant ELE community in India and globally.</h6>
			</li><br>
             <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Get regular information about AINET events, activities and offerings.</h4>
			</li><br>

            <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Get membership discounts and benefits at AINET events and other collaborative
                events.</h4>
			</li><br>
             <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Receive AINET publications, newsletters and other products free or at discounted
                prices.</h4>
			</li><br>
               <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Have access to the Member's Area with special services and resources available
                for members only.</h4>
			</li><br>
           <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Be eligible to join IATEFL at heavily discounted rate under the Wider Membership
                Scheme.</h4>
			</li><br>
             <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Be eligible to apply for various AINET scholarships, travel grants and other
                kinds of support.</h4>
			</li><br>
      
     
    </ul>
    
</div>
<br>
<div class="container">
    <h5>Member Rights:</h5><br>
    <ul>
        <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Right to vote in various elections of AINET bodies and committees (not applicable to overseas members).</h4>
			</li><br>
             <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Right to contest elections of AINET bodies and committees (not applicable to overseas members).</h4>
			</li><br>

    </ul>
</div>
<br>

<div class="container">
    <h5>Members’ Responsibilities:</h5><br>
    <ul>
        <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Not do anything detrimental to the interest, goodwill and image of AINET.</h4>
			</li><br>
             <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> To actively support AINET activities and mission.</h4>
			</li><br>
             <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> To keep the AINET office informed about any changes in personal and professional details, especially address and contact details.</h4>
			</li><br>
     
    </ul>
</div>
<br>
<div class="container">
    <h5>Membership Terms</h5><br>
    <ul>
        <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Email as a user ID is valid for lifetime.</h4>
			</li><br>
             <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Unique membership number valid for lifetime.</h4>
			</li><br>
             <li><h4 class='fa fa-angle-double-right' style='font-size:24px;color:#222831;'> Membership renewable using email ID and unique membership number.</h4>
			</li><br>
           
     
    </ul>
</div>
<br>

    <div class="container">
<h5>Membership Type : Individual</h5><br>

<table id="customers">
  <tr>
    <th >Category</th>
    <th>Duration</th>
    <th>Fees</th>
  </tr>
  <tr>
    <td class="one">Annual</td>
    <td class="one">1 Year</td>
    <td class="one">INR 500</td>
  </tr>
  <tr>
    <td class="two">Long Term</td>
    <td class="two">3 Years</td>
    <td class="two">INR 1200</td>
  </tr>
  <tr>
    <td class="three">Overseas</td>
    <td class="three">1 Year</td>
    <td class="three">USD 20 (INR 1500)</td>
  </tr>
 
</table>
     </div>
<br>
    <br>
    <div class="container">
      
<h5>Membership Type : Institutional</h5><br>

<table id="customers">
  <tr>
    <th >Category</th>
    <th >Duration</th>
    <th >Fees</th>
  </tr>
  <tr>
    <td class="one">Annual</td>
    <td class="one">1 Year</td>
    <td class="one">INR 1000</td>
  </tr>
  <tr>
    <td class="two">Long Term</td>
    <td class="two">3 Years</td>
    <td class="two">INR 2500</td>
  </tr>
  <tr>
    <td class="three">Overseas</td>
    <td class="three">1 Year</td>
    <td class="three">USD 30 (INR 2500)</td>
  </tr>
 
</table>
    </div>
    
<br>
<br>


 <div class="container">
                   
        <a href="/register" class="btn uza-btn btn-3">CLICK HERE to join
            AINET today!</a>
 </div>


@endsection
