<!doctype html>
<html><head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<title>Mero CSIT |Register</title>
</head>
<body>

<div class="container-fluid">
	<div class="col-md-5">
    <img src="img/LOGO.PNG" style="margin-top:80px;margin-left:200px;height:700px;width:700px;border-right:3px solid black">
    </div>
    <div class="col-md-7" style="margin-top:200px;">
    <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form method="POST" action="{{route('register_store')}}">
			<h2>Register to MeroCSIT</h2>
			<hr class="colorgraph">
			<div class="row">

			<div class="form-group">
				<input type="text" name="name" class="form-control input-lg" placeholder="Enter Your Full Name" tabindex="3">
			</div>

      <div class="form-group">
        <input type="text" name="address"  class="form-control input-lg" placeholder="Enter Your Address" tabindex="3">
      </div>
			<div class="form-group">
				<input type="text" name="college_name"  class="form-control input-lg" placeholder="Enter Your College Name" tabindex="4">
			</div>
      <div class="form-group" style="font-size:20px;">
          <label>Gender</label><br>
          <input type="radio"  value="1" name="gender"> Male
          <input type="radio"  value="0" name="gender"> Female
        </div>
      <div class="form-group">
  				<input type="email" name="email"  class="form-control input-lg" placeholder="Enter Your Email" tabindex="4">
  			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password1" class="form-control input-lg" placeholder="Enter Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password2" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
{{csrf_field()}}
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6"><a href="{{route('display_login')}}" class="btn btn-success btn-block btn-lg">Sign In</a></div>
			</div>
		</form>
	</div>
</div>
</div>
    </div>
 </div>
 @if(count($errors)>0)
     <div class="alert alert-danger">
       @foreach($errors->all() as $er)
      {{$er}}
       @endforeach
     </div>
     @endif
   </div>

</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
