<div class="myadmintopnave">
    <h5>UTAS Computer Rental Services dashboard</h5>
    @if (Session::has('status'))
    <p style="color: white; text-align:center">{{ session('status') }}</p>
    @elseif (($errors->any()))
    @foreach ($errors->all() as $error)
    <p style="color: white; text-align:center">{{ $error }}</p>
@endforeach

    @endif

    <style>
        .myadmintopnave h5{
            position: relative;
            top: 20px;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</div>


