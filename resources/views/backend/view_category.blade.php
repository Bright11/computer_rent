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
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($viewcart as $cart)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $cart->name }}</td>
                        <th><a href=""><i class="bi bi-calendar-x-fill deleteicon mb-2"></i></a></th>
                      </tr>
                    @empty
                        <th>No category</th>
                    @endforelse

                </tbody>
            </table>

        </div>

    </div>

</div>
</div>

@endsection
