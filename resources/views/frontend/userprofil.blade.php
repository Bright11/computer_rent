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
<div id="sidebar" class="span3">
<style>
    .userproli{
        margin-bottom: 5px;
    }
</style>
    <ul id="sideManu" class="nav nav-tabs nav-stacked">
        <li class="subMenu open"><a> Computers</a>
            <ul>

               <li class="subMenu userproli"> <a href="{{ route('credit_account') }}" >Credit Account</a></li>
                <li class="subMenu userproli"><a href="{{ route('cus_returning_item') }}" >Return</a></li>
              <li class="subMenu userproli">  <a href="{{ route('userconfirmedreturn') }}" >Complete process</a></li>



            </ul>
        </li>

    </ul>
    <br/>



</div>

<!-- Sidebar end=============================================== -->
		<div class="span9">
			<div class="well well-small">
			<!--featured product is here-->
<style>
    .userptostyle{
        font-size: 20px;
    }
</style>
		<h4>My Dashboard</h4>
			  <ul class="thumbnails">

                <li class="span3">
                    <div class="thumbnail userptostyle">
                      <a  href="#"></a>
                      <div class="caption">
                        <h5>Total rented items</h5><br>
                        <p>{{ $usertotaiitem }}</p>
                      </div>
                    </div>
                  </li>


                  <li class="span3">
                    <div class="thumbnail userptostyle">
                      <a  href="#"></a>
                      <div class="caption">
                        <h5>Unreturned items</h5><br>
                        <p>{{ $unreturnitems }}</p>
                      </div>
                    </div>
                  </li>

                  <li class="span3">
                    <div class="thumbnail userptostyle">
                      <a  href="#"></a>
                      <div class="caption">
                        <h5>Number of confirmed returns</h5><br>
                        <p>{{ $totalconfirmitem }}</p>

                      </div>
                    </div>
                  </li>
                  <li class="span3">
                    <div class="thumbnail userptostyle">
                      <a  href="#"></a>
                      <div class="caption">
                        <h5>My Insurance</h5><br>
                        <p>$:{{ $insur }}</p>

                      </div>
                    </div>
                  </li>


			  </ul>
<h6 class="btn btn-success">My balance $ {{ number_format($mybalance) }}</h6>
		</div>
		</div>
	</div>
</div>
@endsection
<!-- Footer ================================================================== -->
