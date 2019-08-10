@extends('user.master.master')
@section('title')
MeroCSIT | Course Info
@endsection
@section('active2')
"active"
@endsection
@include('user.user_partials.header')
@section('container')
<div class="container" style="margin-bottom:150px;margin-top:50px;height:auto;">
  <button type="button" class="btn btn-info ribbon" style="font-size:25px;">FIRST SEMESTER</button>
  <button type="button" class="btn btn-info ribbon" style="font-size:25px;">SECOND SEMESTER</button>
  <button type="button" class="btn btn-info ribbon" style="font-size:25px;">THIRD SEMESTER</button>
  <button type="button" class="btn btn-info ribbon" style="font-size:25px;">FOURTH SEMESTER</button>
  <button type="button" class="btn btn-info ribbon" style="font-size:25px;">FIFTH SEMESTER</button>
  <button type="button" class="btn btn-info ribbon" style="font-size:25px;">SIXTH SEMESTER</button>
  <button type="button" class="btn btn-info ribbon" style="font-size:25px;">SEVENTH SEMESTER</button>
  <button type="button" class="btn btn-info ribbon" style="font-size:25px;">EIGHT SEMESTER</button>

  @foreach($available_course as $displaycourse)
    <div class="row">

    <div class="col-md-12" style="font-size:22px;">

          @if($displaycourse->semester==1)
      <table class="table table-striped custab" style="margin-top:30px;">
    <thead>
        <tr>
            <th><h5 style="font-size:18px;"><b>Subject Name</b></h5></th><td><span style="font-size:18px">{{$displaycourse->subject}}<span></td>


        </tr>
    </thead>
            <tr>
    <th><h5 style="font-size:18px;"><b>Credit Hours</b></h5></th>
                <td><span style="font-size:18px">{{$displaycourse->credit_hours}}<span></td>
                </tr>
                <tr>
                  <th><h5 style="font-size:18px;"><b>Course Description</b></h5></th>
                  <td><span style="font-size:18px">{!!$displaycourse->course_description!!}<span></td>
                  </tr>
                  <tr>
                    <th><h5 style="font-size:18px;"><b>Course File</b></h5></th>

                    <td><span style="font-size:18px">{{$displaycourse->file}}<span></td>
                    </tr>

    </table>



      @endif
</div>


    </div>
    <div class="row">

    <div class="col-md-12" style="font-size:22px;">

          @if($displaycourse->semester==2)
      <table class="table table-striped custab" style="margin-top:30px;">
    <thead>
        <tr>
            <th><h5 style="font-size:18px;"><b>Subject Name</b></h5></th><td><span style="font-size:18px">{{$displaycourse->subject}}<span></td>


        </tr>
    </thead>
            <tr>
    <th><h5 style="font-size:18px;"><b>Credit Hours</b></h5></th>
                <td><span style="font-size:18px">{{$displaycourse->credit_hours}}<span></td>
                </tr>
                <tr>
                  <th><h5 style="font-size:18px;"><b>Course Description</b></h5></th>
                  <td><span style="font-size:18px">{!!$displaycourse->course_description!!}<span></td>
                  </tr>
                  <tr>
                    <th><h5 style="font-size:18px;"><b>Course File</b></h5></th>

                    <td><span style="font-size:18px">{{$displaycourse->file}}<span></td>
                    </tr>

    </table>
    <div class="row">

    <div class="col-md-12" style="font-size:22px;">

          @if($displaycourse->semester==3)
      <table class="table table-striped custab" style="margin-top:30px;">
    <thead>
        <tr>
            <th><h5 style="font-size:18px;"><b>Subject Name</b></h5></th><td><span style="font-size:18px">{{$displaycourse->subject}}<span></td>


        </tr>
    </thead>
            <tr>
    <th><h5 style="font-size:18px;"><b>Credit Hours</b></h5></th>
                <td><span style="font-size:18px">{{$displaycourse->credit_hours}}<span></td>
                </tr>
                <tr>
                  <th><h5 style="font-size:18px;"><b>Course Description</b></h5></th>
                  <td><span style="font-size:18px">{!!$displaycourse->course_description!!}<span></td>
                  </tr>
                  <tr>
                    <th><h5 style="font-size:18px;"><b>Course File</b></h5></th>

                    <td><span style="font-size:18px">{{$displaycourse->file}}<span></td>
                    </tr>

    </table>
    <div class="row">

    <div class="col-md-12" style="font-size:22px;">

          @if($displaycourse->semester==4)
      <table class="table table-striped custab" style="margin-top:30px;">
    <thead>
        <tr>
            <th><h5 style="font-size:18px;"><b>Subject Name</b></h5></th><td><span style="font-size:18px">{{$displaycourse->subject}}<span></td>


        </tr>
    </thead>
            <tr>
    <th><h5 style="font-size:18px;"><b>Credit Hours</b></h5></th>
                <td><span style="font-size:18px">{{$displaycourse->credit_hours}}<span></td>
                </tr>
                <tr>
                  <th><h5 style="font-size:18px;"><b>Course Description</b></h5></th>
                  <td><span style="font-size:18px">{!!$displaycourse->course_description!!}<span></td>
                  </tr>
                  <tr>
                    <th><h5 style="font-size:18px;"><b>Course File</b></h5></th>

                    <td><span style="font-size:18px">{{$displaycourse->file}}<span></td>
                    </tr>

    </table>
    <div class="row">

    <div class="col-md-12" style="font-size:22px;">

          @if($displaycourse->semester==5)
      <table class="table table-striped custab" style="margin-top:30px;">
    <thead>
        <tr>
            <th><h5 style="font-size:18px;"><b>Subject Name</b></h5></th><td><span style="font-size:18px">{{$displaycourse->subject}}<span></td>


        </tr>
    </thead>
            <tr>
    <th><h5 style="font-size:18px;"><b>Credit Hours</b></h5></th>
                <td><span style="font-size:18px">{{$displaycourse->credit_hours}}<span></td>
                </tr>
                <tr>
                  <th><h5 style="font-size:18px;"><b>Course Description</b></h5></th>
                  <td><span style="font-size:18px">{!!$displaycourse->course_description!!}<span></td>
                  </tr>
                  <tr>
                    <th><h5 style="font-size:18px;"><b>Course File</b></h5></th>

                    <td><span style="font-size:18px">{{$displaycourse->file}}<span></td>
                    </tr>

    </table>


    <div class="row">

    <div class="col-md-12" style="font-size:22px;">

          @if($displaycourse->semester==6)
      <table class="table table-striped custab" style="margin-top:30px;">
    <thead>
        <tr>
            <th><h5 style="font-size:18px;"><b>Subject Name</b></h5></th><td><span style="font-size:18px">{{$displaycourse->subject}}<span></td>


        </tr>
    </thead>
            <tr>
    <th><h5 style="font-size:18px;"><b>Credit Hours</b></h5></th>
                <td><span style="font-size:18px">{{$displaycourse->credit_hours}}<span></td>
                </tr>
                <tr>
                  <th><h5 style="font-size:18px;"><b>Course Description</b></h5></th>
                  <td><span style="font-size:18px">{!!$displaycourse->course_description!!}<span></td>
                  </tr>
                  <tr>
                    <th><h5 style="font-size:18px;"><b>Course File</b></h5></th>

                    <td><span style="font-size:18px">{{$displaycourse->file}}<span></td>
                    </tr>

    </table>


    <div class="row">

    <div class="col-md-12" style="font-size:22px;">

          @if($displaycourse->semester==7)
      <table class="table table-striped custab" style="margin-top:30px;">
    <thead>
        <tr>
            <th><h5 style="font-size:18px;"><b>Subject Name</b></h5></th><td><span style="font-size:18px">{{$displaycourse->subject}}<span></td>


        </tr>
    </thead>
            <tr>
    <th><h5 style="font-size:18px;"><b>Credit Hours</b></h5></th>
                <td><span style="font-size:18px">{{$displaycourse->credit_hours}}<span></td>
                </tr>
                <tr>
                  <th><h5 style="font-size:18px;"><b>Course Description</b></h5></th>
                  <td><span style="font-size:18px">{!!$displaycourse->course_description!!}<span></td>
                  </tr>
                  <tr>
                    <th><h5 style="font-size:18px;"><b>Course File</b></h5></th>

                    <td><span style="font-size:18px">{{$displaycourse->file}}<span></td>
                    </tr>

    </table>
    <div class="row">

    <div class="col-md-12" style="font-size:22px;">

          @if($displaycourse->semester==8)
      <table class="table table-striped custab" style="margin-top:30px;">
    <thead>
        <tr>
            <th><h5 style="font-size:18px;"><b>Subject Name</b></h5></th><td><span style="font-size:18px">{{$displaycourse->subject}}<span></td>


        </tr>
    </thead>
            <tr>
    <th><h5 style="font-size:18px;"><b>Credit Hours</b></h5></th>
                <td><span style="font-size:18px">{{$displaycourse->credit_hours}}<span></td>
                </tr>
                <tr>
                  <th><h5 style="font-size:18px;"><b>Course Description</b></h5></th>
                  <td><span style="font-size:18px">{!!$displaycourse->course_description!!}<span></td>
                  </tr>
                  <tr>
                    <th><h5 style="font-size:18px;"><b>Course File</b></h5></th>

                    <td><span style="font-size:18px">{{$displaycourse->file}}<span></td>
                    </tr>

    </table>



      @endif
</div>


    </div>



      @endif
    </div>


    </div>
      @endif
    </div>


    </div>
      @endif
    </div>


    </div>


      @endif
</div>


    </div>



      @endif
</div>


    </div>



      @endif
</div>


    </div>
    @endforeach
</div>

@include('user.user_partials.footer')
@endsection
