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
            <h5 class="text-center">Rented Products</h5>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">product name</th>
                    <th scope="col">Rented user</th>
                    <th scope="col">Rented time</th>
                    <th scope="col">Returning time</th>
                    <th scope="col">Hours</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($onrent as $r)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $r->Product->product_name }}</td>
                        <td>{{ $r->User->name }}</td>
                        <td>{{ $r->time_rented }}</td>
                        <td>{{ $r->returning_time }}</td>
                        <td>
                            @if ($r->hours_rented==1)
                            {{ $r->hours_rented }} Hour
                            @else
                            {{ $r->hours_rented }} Hours
                            @endif
                        </td>
                        <td>
                            @if ($r->status=='waiting')
                            <a href="/admin_confirm/{{ $r->id }}/pro_id/{{ $r->Product->id }}/user_id/{{ $r->user_id }}" class="returned btn btn-warning">Confirem</a>

                            @else
                            <button class="btn btn-success">Item returned</button>
                        @endif
                        </td>
                        <th>
                            <a href="/edite_product/{{ $r->id }}" class="btn btn-warning">Edite</a>
                            <a href="/deletepro/{{ $r->id }}"><i class="bi bi-calendar-x-fill deleteicon mb-2"></i></a>

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
