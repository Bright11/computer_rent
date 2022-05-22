@extends('include.master')
<!---hearder-->
<!--navbar-->

<!-- Header End====================================================================== -->
@section('content')
<!--slider-->

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->

<!-- Sidebar end=============================================== -->
		<div class="span9">
			<div class="well well-small">
                <h4 class="text-center">To up account</h4>
                <form action="{{ route('topup') }}" class="topupaccount" method="post">
                    @method('put')
                    @csrf
                    <input type="number" name="topuo_amount" class="form-control" placeholder="enter amount">
                    <input type="submit" class="btn btn-success" value="Submit">
                </form>

                    </div>
		</div>
		</div>
	</div>
</div>
@endsection
<!-- Footer ================================================================== -->
