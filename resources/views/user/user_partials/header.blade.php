<div class="container-fluid">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="fas fa-ellipsis-h but"></span>
          </button>
      <a class="navbar-brand" href="#"><img src="../img/logo2.jpg"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
               <li><a href="#"><i class="fab fa-instagram"></i></a></li>
 <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<div class="container-fluid">
<div class="row r1">

<ul class="nav nav-tabs">
  <li role="presentation" class=@yield('active1')><a href="{{route('home_display')}}">Home</a></li>
  <li role="presentation" class=@yield('active2')><a href="{{route('course_display')}}">Course Info</a></li>
  <li role="presentation"><a href="#">Discussion</a></li>
  <li role="presentation"><a href="#">Result</a></li>
  <li role="presentation"><a href="#">Old Questions</a></li>
  <li role="presentation" class=@yield('active1')><a href="{{route('event_display')}}">Events</a></li>
  <li role="presentation"><a href="#">College</a></li>
  <li role="presentation"><a href="#">News</a></li>
  <li role="presentation"><a href="#">Blogs</a></li>
  <li role="presentation"><a href="#">Contact Us</a></li>
    <li role="presentation"><a href="#">Logout</a></li>
</ul>
</div>
</div>
