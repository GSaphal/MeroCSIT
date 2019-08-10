@extends('admin.master.adminmaster')
@section('title')
MeroCSIT | Admin | Question
@endsection
@section('active6')
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
      <li class="active"><a href="#tab1" data-toggle="tab">Add Questions</a></li>
      <li><a href="#tab2" data-toggle="tab">View Questions</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab1">
        <div class="container">
        	<div class="row">
            <h3 style="margin-top:-20px;margin-left:18px;">Add Old Questions Info</h3>
            <hr>
            <form method="POST" action="{{route('question_add_submit')}}" enctype="multipart/form-data">
              {{csrf_field()}}
        		<div class="form-card">
                    <div class='form-group'>
                      <div class='col-xs-12 form-group'>
                        <label for="subject">Subject</label>
                        <input class="form-control" type="text" name="subject" placeholder="Subject">
                      </div>
                    </div>
                    <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                            <label class="control-label locked" for="email-input-field">Semester</label>
                            <input name="semester" class="form-control" type="number" min="1" max="8" placeholder="Enter the semsester">
                        </div>
                    </div>
                    <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                            <label class="control-label locked" for="desc-input-field">Question Description</label>
                            <textarea name="question_description" id="editor" class="form-control locked" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                            <label class="control-label locked" for="email-input-field">File</label>
                            <input name="question_file" class="form-control" type="file">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-primary" style="font-size:16px;margin-left:18px;">Submit</button>
                      </form>
                </div>


        	</div>
        </div>
      </div>

      <!--Section 2 to view question-->
      <div class="tab-pane" id="tab2">

        <div class="container">
            <div class="col-sm-12 no-gutter">
                @foreach($available_question as $displayquestion)
              <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><strong>{{$displayquestion->subject}}</strong><div class=" small pull-right text-right">{{ $displayquestion->created_at->format('H-i a')}}<br>{{ $displayquestion->created_at->format('Y-m-d')}}</div></h3>


              </div>
              <div class="panel-body">
                <h5><b>Semester:</b>&nbsp{{$displayquestion->semester}}</h5><hr>

                  <h5><b>Description</b></h5>
             {!! $displayquestion->question_description !!}<hr>
              <h5><a href="{{asset('question_file/'.$displayquestion->question_file)}} "><b>Question File</b></a></h5><hr>

              <div class="col-xs-1 panel-footer  things">
              <a class="delete" del="{{route('question_delete',$displayquestion->question_id)}} style="text-decoration:none;color:blue;""><i class="fa fa-trash"></i></a>
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
