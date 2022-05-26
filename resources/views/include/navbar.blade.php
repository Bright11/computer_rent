@if (Request::path() == '/')
@elseif (Request::path()=='registration')
@else
<div id="header">
    <div class="container">

    <!-- Navbar ================================================== -->
    <div id="logoArea" class="navbar">
        <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
      <div class="navbar-inner">
        <a class="brand" href="{{ route('index') }}" style="color: white;">UTAS Computer Rental Services</a>
            <form class="form-inline navbar-search" method="GET" action="{{ route('newsearch') }}" >
                <input name="search" class="srchTxt" type="text" />

              <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
        </form>
        <ul id="topMenu" class="nav pull-right">
            <li class=""><a href="{{ route('index') }}">Rental Page</a></li>
         @if (Session::has('user'))
         <li class=""><a href="{{ route('userprofil') }}">My Profile</a></li>
         <li class="">
            <button type="submit" class="btn btn-success"><a href="{{ route('logout') }}">Logout</a> </button>
        </li>

         @endif

        </ul>
      </div>
    </div>
    </div>
    </div>
    @if (Session::has('status'))
        <p class="btn btn-danger" style="text-align: center;">{{ session('status') }}</p>
    @endif
@endif
