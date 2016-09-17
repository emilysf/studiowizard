@include ('header')

<style>
  #logo {
    background-color: #fff;
    width: 108px;
    height: 48px;
    margin-top: -14px;
    margin-left: 10%;
  }
  .main-header {
    background-color: #fff;
    border-bottom: 2px solid #000059;
  }
  #nav-links {
    color:#000059 !important;
    background-color: #fff !important;
    padding-right:40px;
    padding-left: 40px;
  }
  #name-links {
    color:#000059 !important;
    background-color: #fff !important;
    padding-right:20px;
    padding-left: 20px;
    margin-left: 10px;
  }
  #name-links:hover {
    background-color: #000059 !important;
    color:#d3d3d3 !important;
  }
  #nav-links:hover {
    background-color: #000059 !important;
    color:#d3d3d3 !important;
  }
  #nav-links:active {
    background-color: #000059 !important;
    color:#d3d3d3 !important;
  }
  #admin-image {
    width:30px;
    height:30px;
    margin-top: 10px;
    margin-left: 97px;
  }
  #admin-name {
    margin-left: 15px;
    margin-top: 15px;
  }
</style>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="nav-container">
        <div class="navbar-header">
          <a href= "/" class="navbar-brand"><img src= {{ asset("/images/logo3.png")}} id="logo"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/students-instructors" id="nav-links" style="margin-left:76px">Students/Instructors</a></li>
            <li><a href="/news" id="nav-links">Add News</a></li>
            <li><a href="/events" id="nav-links">Add Events</a></li>
            <li><a href="/task" id="nav-links">Add Class</a></li>
            <li><a href="/email" id="nav-links">Send Email</a></li>
            <!-- User Account: style can be found in dropdown.less -->
            <li><img src= {{ asset("/images/admin.jpg")}} class="user-image" alt="Admin Image" id="admin-image"></li>
            @if (Auth::guest())
                <li><a href="{{ url('/signin') }}" id="nav-links">Sign-In</a></li>
                <li><a href="{{ url('/signup') }}" id="nav-links">Register</a></li>
            @elseif (Auth::user()->type !='B')
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="name-links" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/admin') }}" id="nav-drops">Admin</a></li>
                        <li><a href="{{ url('/logout') }}" id="nav-drops">Logout</a></li>

                    </ul>
                </li>
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
    </nav>
  </header>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

