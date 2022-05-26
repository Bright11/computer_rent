@extends('backend.admininclude.adminmaster')
@section('adminbody')
<div class="container-fluid admincontainer">
    <!--messagebox-->
    @include('backend.admininclude.messagebox')
<div class="row adminrow">

    <div class="col-md-2 adminsidebarcol">
        @include('backend.admininclude.siderbar')

    </div>
    <!---the end of sidebar-->
    <div class="col-md-10">
        <div class="row admincontentrow">
            <div class="col-md-3 mt-4">
               <div class="admincontentflex">
               <h6>{{ $countuser }} <br>Number of user</h6>
                <i class="bi bi-archive-fill adminmaincontenticon"></i>
               </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="admincontentflex">
                 <h6>{{ $studentnumber }}<br>
                  Number of student</h6>
                     <i class="bi bi-archive-fill adminmaincontenticon"></i>

                    </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="admincontentflex">
                    <h6>{{ $nustaff }}<br>
                        Number of Staff</h6>
                     <i class="bi bi-archive-fill adminmaincontenticon"></i>
                    </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="admincontentflex">
                    <h6>{{ $cus }} <br>Number of Costumer </h6>
                     <i class="bi bi-archive-fill adminmaincontenticon"></i>
                    </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="admincontentflex">
                    <h6>{{ $nupro }} <br>Number of Product </h6>
                     <i class="bi bi-archive-fill adminmaincontenticon"></i>
                    </div>
            </div>

        </div>
    </div>

</div>
</div>

@endsection
