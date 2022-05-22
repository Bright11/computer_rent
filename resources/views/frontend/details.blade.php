@extends('include.master')
<!---hearder-->
<!--navbar-->

<!-- Header End====================================================================== -->
@section('content')

<div class="detailsflex">
    <div class="ditems">
        <img src="{{ asset('product/'.$detail->image) }}" alt="" class="detailsing">
    </div>
    <div class="ditems">

        <!--inforflex-->
        <h5>Product name : {{ $detail->product_name }}</h5>
        <hr>
        <h5>Price:${{ $detail->price }} <span>Per hour</span> </h5>
        <hr>
        <div class="nameandcart">

        <div class="hours">
            <p>Choose hours to use</p>
            <form action="/rentnow/{{ $detail->id }}" method="post">
                @csrf
            <select name="hours_rented">
                <option value="1">1 Hour</option>
                <option value="2">2 Hours</option>
                <option value="3">3 Hours</option>
            </select>
        </div>
        <div class="rentnow">
        <button class="rentbtn">Rent Now</button>
        </div>
    </form>
        </div>
        <!--end-->
    </div>

</div>
<div class=""style="overflow-x:auto;">
<table class="table" border="1">
    <h5>Computer infornation</h5>
    <thead>
      <tr>
        <th scope="col">Siz</th>
        <th scope="col">Computer Ram</th>
        <th scope="col">Opreting system</th>
        <th scope="col">Display Size</th>
        <th scope="col">Port Number</th>
        <th scope="col">Hdmi Port</th>
      </tr>
    </thead>
    <tbody>

        <tr>
            <th scope="row">{{ $detail->computer_size }}</th>
            <th scope="row">{{ $detail->computer_ram }}</th>
            <th scope="row">{{ $detail->operating_system }}</th>
            <th scope="row">{{ $detail->display_size }}</th>
            <th scope="row">{{ $detail->port_number }}</th>
            <th scope="row">{{ $detail->hdmi_port }}</th>

        </tr>

    </tbody>
</table>
<center><p>{{ $detail->description }}</p></center>
</div>

@endsection
