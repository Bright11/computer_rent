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
                    <th scope="col">User name</th>
                    <th scope="col">User email</th>
                    <th scope="col">User status</th>
                    <th scope="col">User Role</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($alluser as $u)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>
                            @if (!$u->status=='Band')
                            <button class="btn btn-success">Active</button>
                            @else
                            <button class="btn btn-danger">{{ $u->status }}</button>
                            @endif
                        </td>
                        <td>
                            @if ($u->user_role==1)
                                <button class="btn btn-success">Admin</button>
                                @elseif ($u->user_role==2)
                                <button class="btn btn-success">Staff</button>
                                @elseif ($u->user_role==3)
                                <button class="btn btn-success">Student</button>
                                @else
                                <button class="btn btn-success">Custimer</button>
                            @endif

                        </td>
                        <th>
                            @if ($u->status=='Band')
                            <a href="/unband_user/{{ $u->id }}" class="btn btn-danger">Unband user</a>
                            @else
                            <a href="/suspend_user/{{ $u->id }}" class="btn btn-warning">Suspend user</a>
                            @endif
                            <a href="/promot_user/{{ $u->id }}" class="btn btn-warning">Promote</a>
                            <a href="{{ $u->id }}"><i class="bi bi-calendar-x-fill deleteicon mb-2"></i></a>

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
