@extends('admin.master.adminmaster')
@section('title')
MeroCSIT | Admin | Profile
@endsection
@section('active2')
"active"
@endsection
@section('container')
<div class="container-fluid">
@include('admin.admin_partials.admin_sidenav')
<div class="user-dashboard ">
  <div class="container">
          <div class="col-md-10 toppad" >


            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title" style="font-size:25px;">YOUR PROFILE</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class=" col-md-12 col-lg-12">
                    <table class="table table-user-information" style="font-size:18px;">
                      <tbody>
                        <tr>
                        <td><b>Admin ID:</b></td>
                        <td>{{$myprofile->id}}</td>
                      </tr>
                        <tr>
                          <td><b>Name</b></td>
                          <td>{{$myprofile->name}}</td>
                        </tr>
                        <tr>
                          <td><b>Address:</b></td>
                          <td>{{$myprofile->address}}</td>
                        </tr>
                        <tr>
                          <td><b>College Name:</b></td>
                          <td>{{$myprofile->college_name}}</td>
                        </tr>

                           <tr>
                               <tr>
                          <td><b>Gender</b></td>
                          <td>  @if($myprofile->gender==1)
        <span>Male</span>
        @else
        <span>Female</span>
        @endif</td>
                        </tr>

                        <tr>
                          <td><b>Email</b></td>
                          <td>{{$myprofile->email}}</td>
                        </tr>
                      </tbody>
                    </table>
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
