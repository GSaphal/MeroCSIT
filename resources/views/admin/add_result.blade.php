@extends('admin.master.adminmaster')
@section('title')
MeroCSIT | Admin | Result
@endsection
@section('active5')
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
      <li class="active"><a href="#tab1" data-toggle="tab">Add Result</a></li>
      <li><a href="#tab2" data-toggle="tab">View Result</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab1">
        <div class="container">
        	<div class="row">
            <h3 style="margin-top:-20px;margin-left:18px;">Enter the Result Info</h3>
            <hr>
            <form method="POST" action="{{route('result_add_submit')}}" enctype="multipart/form-data">
              {{csrf_field()}}
        		<div class="form-card">
                    <div class='form-group'>
                      <div class='col-xs-12 form-group'>
                        <label for="symbol_no">Symbol Number</label>
                        <input class="form-control" type="text" name="symbol_no" placeholder="Enter symbol number">
                      </div>
                    </div>
                    <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                            <label class="control-label locked" for="email-input-field">College Name</label>
                            <input name="college_name" class="form-control" type="text" placeholder="Enter college name">
                        </div>
                    </div>
                    <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                            <label class="control-label locked" for="email-input-field">Date of Birth</label>
                            <input name="date_of_birth" class="form-control" type="date"  placeholder="enter date of birth">
                        </div>
                    </div>
                    <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                            <label class="control-label locked" for="email-input-field">Result File</label>
                            <input name="result_file" class="form-control" type="file">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-primary" style="font-size:16px;margin-left:18px;">Submit</button>
                      </form>
                </div>


        	</div>
        </div>
      </div>

      <!--Section 2 to view result-->
      <div class="tab-pane" id="tab2">
        <div class="container">
            <div class="col-sm-12 no-gutter">

                @foreach($available_result as $displayresult)
            	<div class="panel panel-default">
        			<div class="panel-heading">
        				<h3 class="panel-title"><strong>Symbol no:&nbsp</strong>{{$displayresult->symbol_no}}<div class=" small pull-right text-right">{{ $displayresult->created_at->format('H-i a')}}<br>{{ $displayresult->created_at->format('Y-m-d')}}</div></h3>


        			</div>
        			<div class="panel-body">
                <h5><b>College Name:</b>&nbsp{{$displayresult->college_name}}</h5><hr>
        				<h5><b>Date of Birth:</b>&nbsp{{$displayresult->date_of_birth}}</h5><hr>
              <h5><a href="{{asset('result_file/'.$displayresult->result_file)}} ">Result file</a></h5><hr>

        			<div class="col-xs-1 panel-footer  things">
        						<a class="delete" del="{{route('result_delete',$displayresult->result_id)}}" style="text-decoration:none;color:blue;"><i class="fa fa-trash"></i></a>
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
