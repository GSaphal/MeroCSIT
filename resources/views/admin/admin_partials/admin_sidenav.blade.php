<section class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="navi">
                    <ul>
                        <li class=@yield('active1')><a href="{{route('admin_dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
                          <li class=@yield('active2')><a href="{{route('adminprofile_add')}}"><i class="fas fa-newspaper" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
                          <li class=@yield('active3')><a href="{{route('admin_add')}}"><i class="fas fa-newspaper" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Create New Admin</span></a></li>
                        <li class=@yield('active4')><a href="{{route('course_add')}}"><i class="fas fa-book" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Course Info</span></a></li>
                        <li class=@yield('active5')><a href="{{route('result_add')}}"><i class="fas fa-map" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Result</span></a></li>
                          <li class=@yield('active6')><a href="{{route('question_add')}}"><i class="fas fa-file" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Old Question</span></a></li>
                      <li class=@yield('active6')><a href="{{route('event_add')}}"><i class="fas fa-calendar-alt" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Event</span></a></li>
                          <li class=@yield('active8')><a href="{{route('college_add')}}"><i class="fas fa-school" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add College</span></a></li>
                         <li class=@yield('active9')><a href="{{route('news_add')}}"><i class="fas fa-newspaper" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add News</span></a></li>

                          <li><a href="#"><i class="fas fa-newspaper" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Contact Us Details</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                            <div class="row">
                    <header>
                        <div class="col-md-7"> </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>{{$myprofile->name}}</span>
                                                    <p class="text-muted small">
                                                        {{$myprofile->email}}
                                                    </p>

                                                    <div class="divider">
                                                    </div>
                                                    <a href="{{route('logout')}}" class="view btn-sm active">Logout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
