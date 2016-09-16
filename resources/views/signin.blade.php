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
            <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
            <form role="form">
              <div class="box-body">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">E-Mail Address</label>

                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter E-Mail">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>

                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    
                </div>
              	
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                      <i class="fa fa-btn fa-sign-in"></i> Login
                  </button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
    </div>

