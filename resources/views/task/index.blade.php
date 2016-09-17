@include('header')
@extends('layouts.app')
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
    .subbtn {
        margin-bottom: -14px;
    }
    .col-md-10 {
      display:none !important;
    }

</style>

      <!-- Create Modal -->
      <div class="example-modal">
        <div class="modal" id="createModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add a Class</h4>
              </div>
              <div class="modal-body">
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
                        
              </div>
              <div class="modal-footer">
                        <div class="form-group">
                            {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary','id'=>'subbtn']) !!} 
                        </div>

                    {!! Form::close() !!}
              </div>
            </div>
           <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>  
         <!-- /.modal -->
      </div> 
      <!-- /.example-modal --> <!-- End create modal --> 

      <!-- Edit Modal -->
      <div class="example-modal">
        <div class="modal" id="editModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add a Class</h4>
              </div>
              <div class="modal-body">

                <div class="panel-body">
                    @foreach($tasks as $task)
                       <div class="taskid-{{$task->id}}" style="display:none;">
                    {!! Form::model($task,array('route'=>['task.update',$task->id],'method'=>'PUT')) !!}
                     
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
                    
              <div class="modal-footer">
                <div class="form-group">
                    {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!} 
                </div>
              </div>
                    {!! Form::close() !!}
                     </div>
                    @endforeach
              </div>
            </div>
           <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>  
         <!-- /.modal -->
      </div> 
      <!-- /.example-modal --> <!-- End edit modal --> 


    <div class="row">
        <div class="col-xs-11">

          @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
          @endif  

          @if($errors->has())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          @endif

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add or Drop a Class</h3>
              <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#createModal">Add New Class</button>
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

                            <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#editModal" data-taskid="{{$task->id}}">Edit</button>
                            <!-- {{ link_to_route('task.edit','Edit',[$task->id],['class'=>'btn btn-primary']) }} -->
                            
                            |
                            
                            {!! Form::button('Delete',['class'=>'btn btn-secondary','type'=>'submit','id'=>'deletebtn']) !!}
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
          <!-- {{ link_to_route('task.create','Add New Class',null,['class'=>'btn btn-success', 'data-toggle'=>'modal','data-target'=>'#modal']) }} -->

        </div>

    </div>

<script>
   
    $(".editbtn").on('click', function () {
      var taskId = $(this).attr('data-taskid')
        $(".taskid-"+taskId).show();
    });

</script>
@endsection


