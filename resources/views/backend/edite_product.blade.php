@extends('backend.admininclude.adminmaster')
@section('adminbody')
<div class="container-fluid admincontainer">

    @include('backend.admininclude.messagebox')

<div class="row adminrow">

    <div class="col-md-2 adminsidebarcol" style="height: 100%;">
        <!--sidebar-->
        @include('backend.admininclude.siderbar')
    </div>
    <!---the end of sidebar-->
    <div class="col-md-10 admincontent">
        <div class="admincontentrow">
            <h5 class="text-center">Computr</h5>
            <form class="adminformp" action="/editproducttodb/{{ $editpro->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf

            <label class="addprolabel" for="">computer name</label>
            <input type="text" name="product_name" class="form-control" value="{{ $editpro->product_name }}">
            <label class="addprolabel" for="">computer rented price</label>
            <input type="text" name="price" class="form-control" value="{{ $editpro->price }}"/>

            <label class="addprolabel" for="">Computer size</label>
            <input type="text" name="computer_size" class="form-control" value="{{ $editpro->computer_size }}">

            <label class="addprolabel">Keywords</label>
            <textarea name="keywords" cols="30" rows="5" class="form-control">{{ $editpro->keywords }}</textarea>
            <label class="addprolabel" for="">product image</label>
            <input type="file" name="image" class="form-control" placeholder="product image">
            <img src="{{ asset('product/'.$editpro->image) }}" alt="" class="editeimg" style="width: 70px; height:70px;">


            <label class="addprolabel" for="">Computer Ram</label>
            <input type="text" name="computer_ram" class="form-control" value="{{ $editpro->computer_ram }}">
            <label class="addprolabel" for="">Operating system</label>
            <input type="text" name="operating_system" class="form-control" value="{{ $editpro->operating_system }}">
            <label class="addprolabel" for="">Display size</label>
            <input type="text" name="display_size" class="form-control" value="{{ $editpro->display_size }}">
            <label class="addprolabel" for="">Ports</label>
            <input type="text" name="port_number" class="form-control" value="{{ $editpro->port_number }}">
            <label class="addprolabel" for="">HDMI Port</label>
            <input type="text" name="hdmi_port" class="form-control" value="{{ $editpro->hdmi_port }}">
            <label class="addprolabel">Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control">{{  $editpro->description  }}</textarea>

            <input type="submit" class="submitadmin" value="Send">
            </form>
                </div>

    </div>
<style>

    .addprolabel{
        background-color: #000000;
        width: 100%;
        color: white;
    }

</style>
@endsection
