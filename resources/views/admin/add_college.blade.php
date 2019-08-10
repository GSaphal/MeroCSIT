@extends('admin.master.adminmaster')
@section('title')
MeroCSIT | Admin | Colleges
@endsection
@section('active8')
"active"
@endsection
@section('container')
<div class="container-fluid">
@include('admin.admin_partials.admin_sidenav')
<div class="user-dashboard ">

  <div class="container-fluid">
  	<div class="row">

  <div class="tabbable">
    <ul class="nav nav-tabs" style="font-size:16px;">
      <li class="active"><a href="#tab1" data-toggle="tab">Add Colleges</a></li>
      <li><a href="#tab2" data-toggle="tab">View Colleges</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab1">
        <div class="container">
        	<div class="row">
            <h3 style="margin-top:-20px;margin-left:18px;">Enter the College Info</h3>
            <hr>
            <form method="POST" action="{{route('college_add_submit')}}" enctype="multipart/form-data">
              {{csrf_field()}}
        		<div class="form-card">
                    <div class='form-group'>
                      <div class='col-xs-12 form-group'>
                        <label for="college_name">College Name</label>
                        <input class="form-control" type="text" name="college_name" placeholder="Enter the college name">
                      </div>
                    </div>
                    <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                            <label class="control-label locked" for="email-input-field">College Website</label>
                            <input name="college_website" class="form-control" type="text" placeholder="Enter the College's Website">
                        </div>
                    </div>
                    <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                            <label class="control-label locked" for="email-input-field">College Seats</label>
                            <input name="college_seats" class="form-control" type="number" min="1" max="600"   placeholder="No. of seats available">
                        </div>
                    </div>
                    <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                            <label class="control-label locked" for="email-input-field">College Location</label>
                            <input name="college_location" class="form-control" type="text" placeholder="Enter the College's Location">
                        </div>
                    </div>
                    <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                            <label class="control-label locked" for="email-input-field">Picture</label>
                            <input name="college_image" class="form-control" type="file">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-primary" style="font-size:16px;margin-left:18px;">Submit</button>
                      </form>
                </div>


        	</div>
        </div>
      </div>

      <!--Section 2 to view college-->
      <div class="tab-pane" id="tab2">

<div class="container">
    <div class="col-sm-12 no-gutter">
        @foreach($available_college as $displaycollege)
    	<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><strong>College:&nbsp</strong>{{$displaycollege->college_name}}<div class=" small pull-right text-right">{{ $displaycollege->created_at->format('H-i a')}}<br>{{ $displaycollege->created_at->format('Y-m-d')}}</div></h3>


			</div>
			<div class="panel-body">
        <h5><b>Total Seats:</b>&nbsp{{$displaycollege->college_seats}}</h5><hr>
          <h5><b>College location:</b>&nbsp{{$displaycollege->college_location}}</h5><hr>
				<h5><b>College Website:</b>&nbsp{{$displaycollege->college_website}}</h5><hr>

      <h5><a href="{{asset('college_image/'.$displaycollege->college_image)}} ">College Image</a></h5><hr>

			<div class="col-xs-1 panel-footer  things">
					<a class="delete" del="{{route('college_delete',$displaycollege->college_id)}}" style="text-decoration:none;color:blue;"><i class="fa fa-trash"></i></a>
			</div>
      <br/>




		</div>

	</div>
    @endforeach
</div>
      </div>
    </div>
  </div>
  </div>

  @if(session('message'))
    <div class="alert alert-success" style="margin-top:20px;">  {{session('message')}}</div>
  @endif
  @if(count($errors)>0)
      <div class="alert alert-info" style="margin-top:20px;">
        @foreach($errors->all() as $er)
       {{$er}}
        @endforeach
      </div>
      @endif

</div>
@endsection
