@extends('layouts.app')

@section('content')
<style>
.card-body1 {
  height: 50px;
}
</style>
<br>
<br>
<br>
<br>
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8" id=#div1>
            <div class="card" id=#div1>
                <div class="card-header" style="text-align: center" >Dashboard</div>

                <div class="card-body1">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<br>
                    <p style="text-align: center">You are logged in!</p>
                </div>
				<hr>
				 <div class="card-body1" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<a href={{route('user.index',Auth::user()->id)}}><p style="text-align: center">Profile</p></a>
                </div>
				<hr>
				 <div class="card-body1" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<a href="/inbox"><p style="text-align: center">Inbox</p></a>
					 
                </div>
				 <div class="card-body1" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
				 <div class="card-body1" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
					<hr>
				 <div class="card-body1" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<a><p style="text-align: center">Submit delegate registration form for AINET Conferences.</p></a>
                </div>
					<hr>
				 <div class="card-body1" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<a><p style="text-align: center">Submit presentation proposal for AINET Conferences.</p></a>
                </div>
					<hr>
				 <div class="card-body1" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<a  target="_blank"><p style="text-align: center">Apply for scholarships.</p></a>
                </div>
					<hr>
				 <div class="card-body1" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<a><p style="text-align: center">See your membership form information.</p></a>
                </div>
					<hr>
				 <div class="card-body1" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<a><p style="text-align: center">View your membership history.</p></a>
                </div>
						<hr>
				 <div class="card-body1" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<a href="https://www.iatefl.org/iatefl-associates/wider-membership-scheme  " target="_blank"><p style="text-align: center">Check your IATEFL membership status.</p></a>
                </div>
				
						<hr>
				 <div class="card-body1" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<a href="about" target="_blank"><p style="text-align: center">Contact AINET.</p></a>
                </div>

            </div>
			
        </div>
    </div>
</div>
<br>

@endsection
