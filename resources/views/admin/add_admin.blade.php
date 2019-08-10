@extends('admin.master.adminmaster')
@section('title')
MeroCSIT | Admin | Add Admin
@endsection
@section('active3')
"active"
@endsection
@section('container')
<div class="container-fluid">
@include('admin.admin_partials.admin_sidenav')
<div class="user-dashboard ">
  <div class="container">
    <div class="row">
      <h3 style="margin-left:18px;">Enter the Admin Details</h3>
      <hr>
      <form method="POST" action="{{route('admin_add_submit')}}">
        {{csrf_field()}}
      <div class="form-card">
              <div class='form-group'>
                <div class='col-xs-12 form-group'>
                  <label for="name">Full Name</label>
                  <input class="form-control" type="text"  name="name"  placeholder="Enter Your Full Name">
                </div>
              </div>
              <div class="form-group locked">
                  <div class='col-xs-12 form-group'>
                      <label class="control-label locked" for="email-input-field">Address</label>
                      <input class="form-control" type="text"  name="address" placeholder="Enter Address">
                  </div>
              </div>
              <div class="form-group locked">
                  <div class='col-xs-12 form-group'>
                      <label class="control-label locked" for="email-input-field">College Name</label>
                      <input class="form-control" type="text" name="college_name"  placeholder="Enter College Name">
                  </div>
              </div>
              <div class="form-group locked" style="font-size:14px;">
                    <div class='col-xs-12 form-group'>
                  <label>Gender</label><br>
                  <input type="radio"  value="1" name="gender"> Male
                  <input type="radio"  value="0" name="gender"> Female
                </div>
            </div>
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label locked" for="email-input-field">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Enter Email Address">
                </div>
            </div>
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label locked" for="email-input-field">Password</label>
                    <input class="form-control" type="password" name="password1" placeholder="Enter Password">
                </div>
            </div>
            <div class="form-group locked">
                  <div class='col-xs-12 form-group'>
                      <label class="control-label locked" for="email-input-field">Re-Enter Password</label>
                      <input class="form-control" type="password" name="password2" placeholder="Re-Enter Password">
                  </div>
              </div>
              <button type="submit" class="btn btn-default btn-primary" style="font-size:16px;margin-left:18px;">Submit</button>
                </form>
          </div>


    </div>
  </div>
</div>

  @if(session('message'))
    <div class="alert alert-success" style="margin-top:20px;">{{session('message')}}</div>
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
