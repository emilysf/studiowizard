@include ('header')
@include ('nav')

<style>
  .col-md-6 {
    margin-top: 5%;
    margin-left: 25%;
  }
  * {
    background-color: #d3d3d3;
  }
  .box-body, .box-header, .box-title, .form-group, label{
    background-color: #fff;
  }
  form{
    border-radius:25px;
  }
  .box {
    border:2px solid #000059 !important;
  }
  .btn-primary {
    background-color: #000059 !important;
    color:#fff;
  }
</style>


<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Register</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/signup" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Full Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name">
                </div>
              	<div class="form-group">
                  <label for="age">Age</label>
                  <input type="text" name="age" class="form-control" id="age" placeholder="Enter age">
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="userpassword">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="/signin"><input type="submit" class="btn btn-primary"></a>
              </div>
            </form>
          </div>
          <!-- /.box -->
