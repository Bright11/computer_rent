@extends('include.master')

@section('content')


<div id="mainBody">
	<div class="container">
	<div class="row">

		<div class="span9">
			<div class="well well-small">
                <h5>My rented information</h5>
                <div style="overflow-x:auto;">
                   <div class="balanceuser">
                    <a href="{{ route('credit_account') }}" class="btn btn-success">Credit Account</a>
                    <button class="btn btn-success">My balance $ {{ number_format($mybalance) }}</button>
                   </div>

                    <table>
                    <tr>
                        <th>Computer name</th>
                        <th>Price</th>
                        <th>Rented time</th>
                        <th>Returning time</th>
                        <th>Hours rented</th>
                        <th>Price paid</th>
                        <th>Status</th>
                        <th>Received</th>
                      </tr>
                      @forelse ($userinfo as $uinfo)
                      <tr>
                        <td>{{ $uinfo->Product->product_name }}</td>
                        <td>{{ number_format($uinfo->Product->price) }}</td>
                        <td>{{ $uinfo->time_rented }}</td>
                        @if ($h>$uinfo->returning_time)
                        <td><a href=""class="btn btn-danger">{{ $uinfo->returning_time }}</a></td>
                        @else
                            <td><a href=""class="btn btn-success">{{ $uinfo->returning_time }}</a></td>

                        @endif
                        @if ($uinfo->hours_rented==1)
                        <td>{{ $uinfo->hours_rented }} Hour</td>
                        @else
                        <td>{{ $uinfo->hours_rented }} Hours</td>
                        @endif
                        <td>{{ number_format($uinfo->price_paid) }}</td>
                        <td>
                            @if ($uinfo->status==1)
                            <a href="#" @disabled(true) class="btn btn-danger">Returned</a>
                            @else
                            <a href="#" @disabled(true) class="btn btn-success">{{ $uinfo->status }}</a>

                            @endif
                           </td>
                        <td>
                        @if ($uinfo->admin_recieved=='Received')
                        <a href="#" @disabled(true) class="btn btn-success">Received</a>
                        @else

                        <a href="#" @disabled(true) class="btn btn-warning">Not Received</a>

                        @endif
                    </td>

                      </tr>
                      @empty
                      <td>No information for now!</td>
                      @endforelse


                    </table>
                  </div>

                    </div>


		</div>
		</div>
	</div>
</div>
@endsection
<!-- Footer ================================================================== -->
