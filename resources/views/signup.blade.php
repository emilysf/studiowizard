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

            <form role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

            
              <div class="box-body">

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">Name</label>
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                </div>

              	<div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                    <label for="name">Age</label>
                      <input id="age" type="text" class="form-control" name="age" value="{{ old('age') }}">

                      @if ($errors->has('age'))
                          <span class="help-block">
                              <strong>{{ $errors->first('age') }}</strong>
                          </span>
                      @endif
                </div>

                <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                    <label for="phonenumber">Phonenumber</label>
                      <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}">

                      @if ($errors->has('phonenumber'))
                          <span class="help-block">
                              <strong>{{ $errors->first('phonenumber') }}</strong>
                          </span>
                      @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">E-Mail Address</label>
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm">Confirm Password</label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                      @if ($errors->has('password_confirmation'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password_confirmation') }}</strong>
                          </span>
                      @endif
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"></i> Register
                    </button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
