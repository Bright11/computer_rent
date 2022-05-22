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

	<form class="form-horizontal registerform" action="{{ route('loginnow') }}" method="post">
        @csrf
		<h4> Login:/Your personal information</h4>


		 <div class="control-group">
			<label class="control-label" for="inputLnam">Email address <sup>*</sup></label>
			<div class="controls">
			  <input type="email" name="email" placeholder="email@domain.com">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="password" placeholder="password">
		</div>
	  </div>
      <div class="control-group">
        <div class="controls">
          <input type="submit" value="Login">
        </div>
     </div>
     <div class="control-group">
        <div class="controls">
            <p>I dont have an account</p>
          <a href="{{ route('registration') }}" type="submit">Register</a>
        </div>
     </div>

<!--end of register-->
	</div>
</div>
    </div>
</div>
@endsection
<!-- Footer ================================================================== -->
