@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tasks</div>

                <div class="panel-body">
                    
                    {!! Form::open(array('route'=>'task.store')) !!}
                        <div class="form-group">
                            {!! Form::label('className','Enter Class Name') !!}
                            {!! Form::text('className',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('classInstructor','Enter Class Instructor') !!}
                            {!! Form::text('classInstructor',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('classTime','Enter Class Time') !!}
                            {!! Form::text('classTime',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('classDay','Enter Class Weekday') !!}
                            {!! Form::text('classDay',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('classLevel','Enter Class Level') !!}
                            {!! Form::text('classLevel',null,['class'=>'form-control']) !!}
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
