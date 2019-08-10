@extends('admin.master.adminmaster')
@section('title')
MeroCSIT | Admin | News
@endsection
@section('active9')
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
      <li class="active"><a href="#tab1" data-toggle="tab">Add News</a></li>
      <li><a href="#tab2" data-toggle="tab">View News</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab1">
        <div class="container">
        	<div class="row">
            <h3 style="margin-top:-20px;margin-left:18px;">Add Recent News</h3>
            <hr>
            <form method="POST" action="{{route('news_add_submit')}}" enctype="multipart/form-data">
              {{csrf_field()}}
        		<div class="form-card">
                    <div class='form-group'>
                      <div class='col-xs-12 form-group'>
                        <label for="college_name">News Title</label>
                        <input class="form-control" type="text" name="news_title" placeholder="Enter the News Title">
                      </div>
                    </div>
                    <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                            <label class="control-label locked" for="email-input-field">News Link</label>
                            <input name="news_link" class="form-control" type="website" placeholder="Enter the News Website">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-primary" style="font-size:16px;margin-left:18px;">Submit</button>
                      </form>
                </div>


        	</div>
        </div>
      </div>

      <!--Section 2 to view news-->
      <div class="tab-pane" id="tab2">
        <div class="container">
            <div class="col-sm-12 no-gutter">
                @foreach($available_news as $displaynews)
              <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><strong>{{$displaynews->news_id}}</strong><div class=" small pull-right text-right">{{ $displaynews->created_at->format('H-ia')}}<br>{{ $displaynews->created_at->format('Y-m-d')}}</div></h3>


              </div>
              <div class="panel-body">
                <h5><b>News Title:</b>&nbsp{{$displaynews->news_title}}</h5><hr>
                <h5><b>News Link:</b>&nbsp{{$displaynews->news_link}}</h5><hr>

              <div class="col-xs-1 panel-footer  things">
              <a class="delete" del="{{route('news_delete',$displaynews->news_id)}}" style="text-decoration:none;color:blue;""><i class="fa fa-trash"></i></a>
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
