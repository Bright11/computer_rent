@extends('include.master')

@section('content')


<div id="mainBody">
	<div class="container">
	<div class="row">

		<div class="span9" style="width: 100%; text-align:center;">
			<div class="well well-small">
                <h5>My rented information</h5>
                <div style="overflow-x:auto;">
                   <div class="balanceuser">
                    <a href="{{ route('userprofil') }}" class="btn btn-success">My profile</a>

                   </div>
<style>

</style>
                    <table class="cf">
                    <tr>
                        <th>Computer name</th>
                        <th>Price</th>
                        <th>Rented time</th>
                        <th>item</th>
                        <th>Hours rented</th>
                        <th>paid amount</th>
                        <th>Status</th>

                      </tr>
                      @forelse ($unreturn as $unreturn)
                      <tr>
                        <td>{{ $unreturn->Product->product_name }}</td>
                        <td>$:{{ number_format($unreturn->Product->price) }}</td>
                        <td>{{ $unreturn->time_rented }}</td>
                        <td><img src="{{ asset('product/'.$unreturn->Product->image) }}" alt="" class="iyitemr" style="height: 200px;"></td>
                        @if ($unreturn->hours_rented==1)
                        <td>{{ $unreturn->hours_rented }} Hour</td>
                        @else
                        <td>{{ $unreturn->hours_rented }} Hours</td>
                        @endif
                        <td>$:{{ number_format($unreturn->price_paid) }}</td>
                        <td>

                            <a href="/user_retureditem/{{ $unreturn->id }}" class="btn btn-danger">Return</a>
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
