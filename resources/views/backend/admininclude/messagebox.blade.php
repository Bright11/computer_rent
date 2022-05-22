<div class="myadmintopnave">
    @if (Session::has('status'))
    <p style="color: white; text-align:center">{{ session('status') }}</p>
    @elseif (($errors->any()))
    @foreach ($errors->all() as $error)
    <p style="color: white; text-align:center">{{ $error }}</p>
@endforeach

    @endif
</div>


