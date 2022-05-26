@extends('include.master')

@section('content')


<div id="mainBody">
	<div class="container">
	<div class="row">

		<div class="span9">
			<div class="well well-small">
                <h5>Company confirmed information</h5>
                <div style="overflow-x:auto;">
                   <div class="balanceuser">
                    <a href="{{ route('userprofil') }}" class="btn btn-success">My profile</a>
                   </div>

                    <table>
                    <tr>
                        <th>Computer name</th>
                        <th>Price</th>
                        <th>Total paid</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Admin info</th>
                      </tr>
                      @forelse ($userinfo as $uinfo)
                      <tr>
                        <td>{{ $uinfo->Product->product_name }}</td>
                        <td>{{ number_format($uinfo->Product->price) }}</td>
                        <td>{{ number_format($uinfo->price_paid) }}</td>
                        <td><img src="{{ asset('product/'.$uinfo->Product->image) }}" alt="" class="myimg" style="height: 200px;"></td>
                        <td>
                            <a href="#" @disabled(true) class="btn btn-success">{{ $uinfo->status }}</a>
                           </td>
                        <td>
                        <a href="#" @disabled(true) class="btn btn-success">{{ $uinfo->admin_recieved }}</a>
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
