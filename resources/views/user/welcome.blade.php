@extends('user.master.master')
@section('title')
MeroCSIT | Home
@endsection
@section('active1')
"active"
@endsection
@include('user.user_partials.header')
@section('container')
  <div class="container-fluid cont5">
<div class="row r2">
	<div class="col-md-3 col2 text-center img-circle"><a href="{{route('course_display')}}"><i class="fas fa-book"></i><h5>Course Info</h5><h6>Updated CSIT Course Structure</h6></a></div>

    <div class="col-md-3 col2 text-center img-circle"><a href="#"><i class="fas fa-users"></i><h5>Discussion</h5><h6>Forum for Question/Answers</h6></a></div>
    <div class="col-md-3 col2 text-center img-circle"><a href="#"><i class="far fa-file"></i><h5>Result</h5><h6>Recent Results</h6></a></div>
    <div class="col-md-3 col2 text-center img-circle"><a href="#"><i class="fas fa-map"></i><h5>Old Question</h5><h6>Past Question Papers</h6></a></div>
</div>
<div class="row r2">
	<div class="col-md-3 col2 text-center img-circle"><a href="#"><i class="fas fa-calendar-alt"></i><h5>Events</h5><h6>Recent Events</h6></a></div>
    <div class="col-md-3 col2 text-center img-circle"><a href="#"><i class="fas fa-school"></i><h5>College</h5><h6>All College Details</h6></a></div>
    <div class="col-md-3 col2 text-center img-circle"><a href="#"><i class="fas fa-newspaper"></i><h5>News</h5><h6>Latest News</h6></a></div>
    <div class="col-md-3 col2 text-center img-circle"><a href="#"><i class="fas fa-rss"></i><h5>Blog</h5><h6>Student Blogs</h6></a></div>
</div>
</div>
<div class="container-fluid cont3">
    <div class="row">

        <div class="col-md-12">
           <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-12">
                    <h3 class="panel-title">recent posts</h3>
                  </div>
                  </div>

            <div class="panel panel-default panel-table">
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th >ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                          <tr>
                            <td align="center">
                            </td>
                            <td >1</td>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                          </tr>
                        </tbody>
                </table>

              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-6">Page 1 of 5
                  </div>
                  <div class="col col-xs-6">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>	</div>


@include('user.user_partials.footer')
@endsection
