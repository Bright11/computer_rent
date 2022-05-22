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
            <h5 class="text-center">Promot user</h5>
            <div class="myform">
                <form action="/promotusertodb/{{ $checuid->id }}" method="post">
                    @method('put')
                    @csrf
                    <label for="">User position</label>
                    <select name="user_role"  class="form-control">
                        <option value="{{ $checuid->user_role }}" class="form-control">
                            @if ($checuid->user_role==1)
                                Admin
                                @elseif ($checuid->user_role==2)
                                Staff
                                @elseif ($checuid->user_role==3)
                                Student
                                @else
                                Costumer
                            @endif
                        </option>
                        <option value="1" class="form-control">Admin</option>
                        <option value="2" class="form-control">Staff</option>
                        <option value="3" class="form-control">Studen</option>
                    </select>
                    <input type="submit" class="form-control submitadmin">
                </form>
            </div>
        </div>

    </div>

</div>
</div>

@endsection
