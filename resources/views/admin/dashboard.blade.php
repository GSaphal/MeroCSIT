@extends('admin.master.adminmaster')
@section('title')
MeroCSIT | Admin Dashboard |Home
@endsection
@section('active1')
"active"
@endsection
@section('container')
<div class="container-fluid">
@include('admin.admin_partials.admin_sidenav')
<div class="user-dashboard">
      <h1>HELLO THIS IS MY DASHBOARD</h1>
</div>

</div>
@endsection
