@include ('header')

<style>
  .main-header {
    border-bottom:2px solid #000059;
  }
  .navbar {
    background-color:#fff !important;
  }
  #nav-container {
    background-color:#fff !important;
  }
  #nav-links {
    color:#000059 !important;
    background-color: #fff !important
  }
  #nav-links:hover {
    color:#d3d3d3 !important;
    background-color: #000059 !important;
  }
  #nav-drops {
    color:#000059;
  }
  .navbar-brand {
    background-color: #fff;
    margin-top: -7px;
  }

</style>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="nav-container" id="nav-container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand"><img src= {{ asset ("/images/logo.jpg")}} style= "width:200px"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/schedule" id="nav-links">Class Schedule</a></li>
            <li><a href="/instructors" id="nav-links">Instructors</a></li>
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/signin') }}" id="nav-links">Sign-In</a></li>
                <li><a href="{{ url('/signup') }}" id="nav-links">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="nav-links" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/profile') }}" id="nav-drops">Profile</a></li>
                        <li><a href="{{ url('/logout') }}" id="nav-drops">Logout</a></li>
                    </ul>
                </li>
            @endif
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>