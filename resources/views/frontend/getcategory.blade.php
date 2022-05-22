@extends('include.master')
<!---hearder-->
<!--navbar-->

<!-- Header End====================================================================== -->
@section('content')
<!--slider-->
@include('include.slider')
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ==================================================-->
@include('include.sidebar')

<!-- Sidebar end=============================================== -->
		<div class="span9">

			<!--featured product is here
            //('include.featuredproduct')
            -->
		<h4>Searching by categories </h4>
			  <ul class="thumbnails">
				@forelse ($getcart as $p)
                <li class="span3">
                    <div class="thumbnail">
                      <a  href="/details/{{ $p->id }}"><img src="{{ asset('product/'.$p->image) }}" alt=""/ style="height: 150px;"></a>
                      <div class="caption">
                        <h5>{{ $p->product_name }}</h5>
                        <p>
                          Lorem Ipsum is simply dummy text.
                        </p>

                        <h4 style="text-align:center"><a class="btn" href="/details/{{ $p->id }}">Rent now</a> <!--<a class="btn" href="#">Rent now <i class="icon-shopping-cart"></i></a>--> <a class="btn btn-primary" href="/details/{{ $p->id }}">Per hour:${{ $p->price }}</a></h4>
                      </div>
                    </div>
                  </li>

                @empty

                @endforelse

			  </ul>

		</div>
		</div>
	</div>
</div>
@endsection
<!-- Footer ================================================================== -->
