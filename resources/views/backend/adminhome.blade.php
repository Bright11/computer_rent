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
               <h6>number of goods</h6>
                <i class="bi bi-archive-fill adminmaincontenticon"></i>
               </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="admincontentflex">
                   @if(Session::has('user'))
                     <i class="bi bi-archive-fill adminmaincontenticon"></i>
                     @endif
                    </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="admincontentflex">
                    <h6>{{ date('h:i:s A') }}</h6>
                     <i class="bi bi-archive-fill adminmaincontenticon"></i>
                    </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="admincontentflex">
                    <h6></h6>
                     <i class="bi bi-archive-fill adminmaincontenticon"></i>
                    </div>
            </div>

        </div>
    </div>

</div>
</div>

@endsection
