@extends('admin.master.adminmaster')
@section('title')
MeroCSIT | Admin | Events
@endsection
@section('active7')
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
            <li class="active"><a href="#tab1" data-toggle="tab">Add Event</a></li>
            <li><a href="#tab2" data-toggle="tab">View Events</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab1">
              <div class="container">
                <div class="row">
                  <h3 style="margin-top:-20px;margin-left:18px;">Enter the Course Info</h3>
                  <hr>
                  <form method="POST" action="{{route('event_add_submit')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-card">
                      <div class='form-group'>
                        <div class='col-xs-12 form-group'>
                          <label for="event_name">Event Name</label>
                          <input class="form-control" type="text" name="event_name" placeholder="Event Name">
                        </div>
                      </div>
                      <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                          <label class="control-label locked" for="email-input-field">Event location</label>
                          <input name="event_location" class="form-control" type="text" placeholder="Event location">
                        </div>
                      </div>

                      <div class="form-group locked">
                        <div class='col-xs-12 form-group'>
                          <label class="control-label locked" for="desc-input-field">Event Description</label>
                          <textarea name="event_description" id="editor" class="form-control locked" placeholder="Event Description"></textarea>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-default btn-primary" style="font-size:16px;margin-left:18px;">Submit</button>
                    </form>
                  </div>


                </div>
              </div>
            </div>

            <!--Section 2 to view course-->
            <div class="tab-pane" id="tab2">
              <div class="container">
                <div class="col-sm-12 no-gutter">
                  @foreach($available_event as $displayevent)
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title"><strong>Subject: &nbsp</strong> {{$displayevent->event_name}}<div class=" small pull-right text-right">{{ $displayevent->created_at->format('H-i a')}}<br>{{ $displayevent->created_at->format('Y-m-d')}}</div></h3>


                    </div>
                    <div class="panel-body">

                      <h5><b>Description:</b></h5>
                      {!! $displayevent->event_description !!}<hr>
                      <h5><b>Event location:</b> &nbsp{{$displayevent->event_location}}</h5><hr>


                      <div class="col-xs-1 panel-footer  things">
                        <a class="delete" del="{{route('event_delete',$displayevent->event_id)}}"><i class="fa fa-trash"></i></a>
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
