@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Update Task</div>

                <div class="panel-body">
                    
                    {!! Form::model($event,array('route'=>['events.update',$event->id],'method'=>'PUT')) !!}
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
                            {!! Form::text('eventDescription',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!} 
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

<!-- Edit Modal -->
      <div class="example-modal">
        <div class="modal" id="editModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Event</h4>
              </div>
              <div class="modal-body">

                <div class="panel-body">
                    
                       
                    {!! Form::model($event,array('route'=>['events.update',$event->id],'method'=>'PUT')) !!}
                     
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
                            {!! Form::text('eventDescription',null,['class'=>'form-control']) !!}
                        </div>
                        
                </div>
              <div class="modal-footer">
                        <div class="form-group">
                            {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!} 
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
      <!-- /.example-modal --> <!-- End edit modal --> 
@endsection
