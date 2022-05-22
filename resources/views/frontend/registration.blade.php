@extends('include.master')
<!---hearder-->
<!--navbar-->

<!-- Header End====================================================================== -->
@section('content')
<!--slider-->

<div id="mainBody">
	<div class="container">
<!--register-->

<div class="span9">

	<div class="well">
        @if (Session::has('status'))
        <p style="color: red; text-align:center">{{ session('status') }}</p>
        @elseif (($errors->any()))
        @foreach ($errors->all() as $error)
        <p style="color: red; text-align:center">{{ $error }}</p>
    @endforeach

        @endif

	<form class="form-horizontal registerform" action="{{ route('registernow') }}" method="post">
        @csrf
		<h4> Registration:/Your personal information</h4>

		<div class="control-group">
			<label class="control-label" for="inputFname1">Full name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="name" placeholder="Full name Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Email address <sup>*</sup></label>
			<div class="controls">
			  <input type="email" name="email" placeholder="email@domain.com">
			</div>
		 </div>
         <div class="control-group">
			<label class="control-label" for="inputLnam">Phone Number <sup>*</sup></label>
			<div class="controls">
			  <input type="number" name="phone_number" placeholder="Number">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="password" placeholder="password">
		</div>
	  </div>
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Confirm Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="confirm_p" id="inputPassword1" placeholder="Confirm Password">
		</div>
	  </div>
      <div class="control-group">

        <div class="controls">
          <input type="submit" value="Register">
        </div>
     </div>
     <div class="control-group">
        <div class="controls">
            <p>I have an account</p>
          <a href="{{ route('login') }}" type="submit">Login</a>
        </div>
     </div>

<!--end of register-->
	</div>
</div>
    </div>
</div>
@endsection
<!-- Footer ================================================================== -->
