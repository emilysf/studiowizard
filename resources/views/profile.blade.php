@include('header')
@include('nav')

<style>
	.profile {
		margin-top: 3%; 
		margin-bottom: 10%;
		color:#000059;
	}
	#propic {
		border:2px solid #000059;
	}
	.csupbtn {
		margin-top: 3%;
	}
	.col-xs-6 {
		margin-left: 4%;
		margin-top: 3%;
	}
	form{
        border-radius:25px;
  	}
  	.box {
    	border:2px solid #000059 !important;
  	}
  	td, th {
    	padding-left: 20px !important;
  	}
</style>

<div class="container profile">
	<div class="row">
		<div class="col-md-4 image">
		@if (Auth::guest())

		@else
			<img src="http://placehold.it/250x350" id="propic">
			<h2>{{ Auth::user()->name }}</h2>
		@endif

		<button class="btn btn-primary csupbtn">Class Sign Up</button>

		<!-- @if(Session::has('success'))
          <div class="alert alert-success">
          {!! Session::get('success') !!}
          </div>
        @endif
        <div class="secure">Upload form</div>
        {!! Form::open(array('url'=>'profile/upload','method'=>'POST', 'files'=>true)) !!}
         <div class="control-group">
          <div class="controls">
          {!! Form::file('image') !!}
		  <p class="errors">{!!$errors->first('image')!!}</p>
		@if(Session::has('error'))
		<p class="errors">{!! Session::get('error') !!}</p>
		@endif
        </div>
        </div>
        <div id="success"> </div>
      {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
      {!! Form::close() !!} -->
		</div>
		<div class="col-xs-6">
			@if (Auth::guest())

		@else
			
			<h4>Age: {{ Auth::user()->age }}</h4>
			<h4>Phone Number: {{ Auth::user()->phonenumber }}</h4>
			<h4>Email: {{ Auth::user()->email }}</h4>
			
		@endif
		<br>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Class Schedule</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Class Name</th>
                  <th>Instructor</th>
                  <th>Day of the Week</th>
                  <th>Time</th>
                  <th>Level</th>
                </tr>
                @foreach ($tasks as $task) {
				   {{$task->name}}
				@endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
	</div>
</div>

@include('footer')
