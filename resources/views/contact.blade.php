@extends('layouts.app')
@section('content')
<div class="all-title-box" style="background: url('images/ainet-logo-fb.png');background-size: contain;
    background-repeat: no-repeat;
    background-position: center;">
    <div class="container text-center">
    </div>
</div>
<div style="margin:0 auto;width:50%;text-align:left">
	<div style="margin:0 auto;width:50%;text-align:left">
<h1 text-align="center;">Contact Us</h1>
		</div>
<form action="//submit.form" id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
if (frm.Comments.value == "") { alert('Please enter comments or questions.'); frm.Comments.focus(); return false; }
return true; }
</script>
<table style="width:550px;border:0;" cellpadding="8" cellspacing="0">
<tr> <td>
<label for="Name">Name*:</label>
</td> <td>
<input name="Name" type="text" maxlength="60" style="width:250px;" />
</td> </tr> <tr> <td>
<label for="PhoneNumber">Phone number:</label>
</td> <td>
<input name="PhoneNumber" type="text" maxlength="43" style="width:250px;" />
</td> </tr> <tr> <td>
<label for="FromEmailAddress">Email address*:</label>
</td> <td>
<input name="FromEmailAddress" type="text" maxlength="90" style="width:250px;" />
</td> </tr> <tr> <td>
<label for="Comments">Comments*:</label>
</td> <td>
<textarea name="Comments" rows="7" cols="40" style="width:350px;"></textarea>
</td> </tr> <tr> <td>

</td> <td>
<div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email"></a></div>
<input name="skip_Submit" type="submit" value="Submit" />
<script src="https://www.100forms.com/js/FORMKEY:WCDBM8GDPJPN" type="text/javascript"></script>
</td> </tr>
</table>
</form>
</div>

   <div style="margin:0 auto;width:600%;text-align:left">

	   <img src="images/slider/sl5-min.jpg"  display="block"
  margin-left= "auto"
  margin-right= "auto"
  width="17%">
	   </div>



			
@endsection
