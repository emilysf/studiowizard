@include ('nav-admin')
@include ('header')

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
    margin-top: 10%;
  }
  td, th {
    padding-left: 20px !important;
  }
</style>

	<div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Instructors</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Instructor Name</th>
                  <th>Instructor Age</th>
                  <th>Instructor Status</th>
                </tr>
             	<tr>
                  <td>Mary Ann</td>
                  <td>27</td>
                  <td>Full Time/Studio Director</td>
                </tr>
                <tr>
                  <td>Meredith Grey</td>
                  <td>23</td>
                  <td>Part Time</td>
                </tr>
                <tr>
                  <td>Ryan Kane</td>
                  <td>25</td>
                  <td>Full Time</td>
                </tr>
                <tr>
                  <td>Sarah Johnson</td>
                  <td>20</td>
                  <td>Part Time</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Students</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              @if (Auth::guest())

              @else
              	@foreach {{ $users as $user }}
                <tr>
                  <th>Student Name</th>
                  <th>Student Age</th>
                  <th>Student Number</th>
                  <th>Student Email</th>
                </tr>
             	<tr>
             	  <td>{{ Auth::user()->name }}</td>
                  <td>{{ Auth::user()->age }}</td>
                  <td>{{ Auth::user()->phonenumber }}</td>
                  <td>{{ Auth::user()->email }}</td>
                </tr>
				@endforeach
			@endif
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>


