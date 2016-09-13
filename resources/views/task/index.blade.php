@extends('layouts.app')
@include('header')
@include('nav-admin')
@section('content')

<style>
    .col-xs-11 {
        margin-left: 4%;
        margin-top: 3%;
    }
    form{
        border-radius:25px;
    }
    .box {
        border:2px solid #000059 !important;
    }
</style>

    <div class="row">
        <div class="col-xs-11">

          @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
          @endif  

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add or Drop a Class</h3>

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
                  <th>Class Instructor</th>
                  <th>Class Time</th>
                  <th>Class Weekday</th>
                  <th>Class Level</th>
                  <th>Edit/Delete</th>
                </tr>
                @foreach($tasks as $task)
                    <tr>
                      <td>{{ $task->className }}</td>
                      <td>{{ $task->classInstructor }}</td>
                      <td>{{ $task->classTime }}</td>
                      <td>{{ $task->classDay }}</td>
                      <td>{{ $task->classLevel }}</td>
                      <td>

                        {!! Form::open(array('route'=>['task.destroy',$task->id],'method'=>'DELETE')) !!}
                            {{ link_to_route('task.edit','Edit',[$task->id],['class'=>'btn btn-primary']) }}
                            
                            |
                        
                            {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}

                       </td>
                    </tr>
                @endforeach
                  
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <br>
          {{ link_to_route('task.create','Add new task',null,['class'=>'btn btn-success']) }}

        </div>

    </div>
@endsection
