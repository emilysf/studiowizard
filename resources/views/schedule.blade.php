@include ('header')
@include ('nav')

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
  td, th {
    padding-left: 20px !important;
  }
</style>

<div class="row">
        <div class="col-xs-11">
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
                @foreach($tasks as $task)
                    <tr>
                      <td>{{ $task->className }}</td>
                      <td>{{ $task->classInstructor }}</td>
                      <td>{{ $task->classTime }}</td>
                      <td>{{ $task->classDay }}</td>
                      <td>{{ $task->classLevel }}</td>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
