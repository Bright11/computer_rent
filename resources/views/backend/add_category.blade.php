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
    <div class="col-md-10">
        <div class="admincontentrow">
            <h5 class="text-center">Categories</h5>
            <div class="myform">
                <form action="{{ route('addcategorytodb') }}" method="post">
                    @csrf
                    <label for="">Category name</label>
                    <input type="text" name="name" class="form-control" placeholder="Category name">
                    <input type="submit" class="form-control submitadmin">
                </form>
            </div>
        </div>

    </div>

</div>
</div>

@endsection
