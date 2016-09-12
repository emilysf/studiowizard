@include ('header')
@include ('nav')

<style>
	.col-md-6 {
		margin-top: 10%;
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
              <h3 class="box-title">Sign-In</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Email</label>
                  <input type="text" name="signinEmail" class="form-control" id="signinEmail" placeholder="Enter Email">
                </div>
              	<div class="form-group">
                  <label for="age">Password</label>
                  <input type="password" name="signinPassword" class="form-control" id="signinPassword" placeholder="Enter Password">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="/admin"><input type="submit" class="btn btn-primary"></a>
              </div>
            </form>
          </div>
          <!-- /.box -->
    </div>

