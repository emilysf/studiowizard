@include ('header')

<style>
  #logo {
    width:200px;
    height:auto;
    margin-top: -6px;
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
    margin-left: 15px;
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
          <a href= "/" class="navbar-brand"><img src= {{ asset("/images/logo.jpg")}} id="logo"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/students-instructors" id="nav-links">Students/Instructors</a></li>
            <li><a href="/news" id="nav-links">Add News</a></li>
            <li><a href="/events" id="nav-links">Add Events</a></li>
            <li><a href="/task" id="nav-links">Add Class</a></li>
            <li><a href="/email" id="nav-links">Send Email</a></li>
            <!-- User Account: style can be found in dropdown.less -->
            <li><img src= {{ asset("/images/admin.jpg")}} class="user-image" alt="Admin Image" id="admin-image"></li>
            <li id="admin-name"><span class="hidden-xs">Administrator</span></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>
