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
                <h4 class="modal-title">Add News</h4>
              </div>
              <div class="modal-body">
                  {!! Form::open(array('route'=>'news.store')) !!}
                        <div class="form-group">
                            {!! Form::label('newsTitle','Enter News Title') !!}
                            {!! Form::text('newsTitle',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('newsDescription','Enter News Description') !!}
                            {!! Form::textarea('newsDescription',null,['class'=>'form-control']) !!}
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
              <h3 class="box-title">Add News</h3>
              <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#createModal">Add News</button>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>News Title</th>
                  <th>News Description</th>
                </tr>
                @foreach($news as $news)
                    <tr>
                      <td>{{ $news->newsTitle }}</td>
                      <td>{{ $news->newsDescription }}</td>
                      <td>
                     

                        {!! Form::open(array('route'=>['news.destroy',$news->id],'method'=>'DELETE')) !!}

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