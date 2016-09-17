@include('header')
@include('nav')

<style>
	.profile {
		 
	}
</style>

<div class="container profile">
	<div class="row">
		<div class="col-md-4 image">
		@if (Auth::guest())

		@else
			<h2>{{ Auth::user()->name }}</h2>
			<img src="http://placehold.it/250x350">
			
		@endif

		@if(Session::has('success'))
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
      {!! Form::close() !!}
		</div>

	</div>
</div>
