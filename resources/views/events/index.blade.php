@include('header')
@include('nav-admin')

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
    #subbtn {
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
                <h4 class="modal-title">Add Event</h4>
              </div>
              <div class="modal-body">
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
                       
              </div>
              <div class="modal-footer">
                        <div class="form-group">
                            {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!} 
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
              <h3 class="box-title">Add Event</h3>
              <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#createModal">Add Event</button>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Event Title</th>
                  <th>Event Date</th>
                  <th>Event Time</th>
                  <th>Event Description</th>
                  <th>Edit/Delete</th>
                </tr>
                    @foreach($events as $events)
                    <tr>
                      <td>{{ $events->eventTitle }}</td>
                      <td>{{ $events->eventDate }}</td>
                      <td>{{ $events->eventTime }}</td>
                      <td>{{ $events->eventDescription }}</td>
                      <td>
                     

                        {!! Form::open(array('route'=>['events.destroy',$events->id],'method'=>'DELETE')) !!}

                        <!-- <button type="button" id="editbtn" class="btn btn-primary" data-toggle="modal" data-target="#editModal" value="{{$events->id}}">Edit</button> -->
                            {{ link_to_route('events.edit','Edit',[$events->id],['class'=>'btn btn-primary']) }}

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
          <!-- {{ link_to_route('news.create','Add News',null,['class'=>'btn btn-success',]) }} -->

           

        </div>

    </div>