@if (Session::has('user'))
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
        <a class="brand" href="{{ route('index') }}" style="color: white;">Bright c web</a>
            <form class="form-inline navbar-search" method="GET" action="{{ route('newsearch') }}" >
                <input name="search" class="srchTxt" type="text" />

              <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
        </form>
        <ul id="topMenu" class="nav pull-right">
         <li class=""><a href="{{ route('userprofil') }}">My profile</a></li>
         <li class=""><a href="">Delivery</a></li>
         <li class=""><a href="">Contact</a></li>
         @if (Session::has('user'))
         <li class="">
            <button type="submit" class="btn btn-success"><a href="{{ route('logout') }}">Logout</a> </button>
        </li>
         @endif
        </ul>
      </div>
    </div>
    </div>
    </div>


@endif
