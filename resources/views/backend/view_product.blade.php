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
            <h5 class="text-center">Products</h5>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">product name</th>
                    <th scope="col">product price</th>
                    <th scope="col">product status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($pro as $p)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $p->product_name }}</td>
                        <td>{{ $p->price }}</td>
                        <td>{{ $p->status }}</td>
                        <th>
                            <a href="/edite_product/{{ $p->id }}" class="btn btn-warning">Edite</a>
                            <a href="/deletepro/{{ $p->id }}"><i class="bi bi-calendar-x-fill deleteicon mb-2"></i></a>

                        </th>
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
