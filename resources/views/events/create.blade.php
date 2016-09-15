@extends('layouts.app')

@section('content')

               
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Events</div>

                <div class="panel-body">
                    
                    {!! Form::open(array('route'=>'events.store')) !!}
                        <div class="form-group">
                            {!! Form::label('eventTitle','Enter Event Title') !!}
                            {!! Form::text('eventTitle',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('eventDate','Enter Event Date (mm/dd/yyyy)') !!}
                            {!! Form::text('eventDate',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('eventTime','Enter Event Time') !!}
                            {!! Form::text('eventTime',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('eventDescription','Enter Event Description') !!}
                            {!! Form::textarea('eventDescription',null,['class'=>'form-control']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!} 
                        </div>
                    {!! Form::close() !!}

                </div>

            </div>

            @if($errors->has())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        </div>
    </div>
</div>
@endsection
