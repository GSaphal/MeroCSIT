@extends('user.master.master')
@section('title')
MeroCSIT | Course Info
@endsection
@section('active6')
"active"
@endsection
@include('user.user_partials.header')
@section('container')
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
            <br>
              <h3 style="margin-top:-20px;margin-left:18px;">Enter the Event Info</h3>
              <hr>
              <form method="POST" action="" enctype="multipart/form-data">
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

        <!--Section 2 to view event-->
        <div class="tab-pane" id="tab2">



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



@include('user.user_partials.footer')
@endsection
