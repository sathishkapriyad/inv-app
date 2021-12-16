@extends('admin.layouts.app')

@section('nav_title','Admin Profile')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if(session()->has('success'))
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Success!</h5>
                {{ session()->get('success') }}
              </div>
        </div>
    </div>
    @endif
<!-- Main content -->

<div class="container">
    <form action="{{route('admin.profile.store')}}" method="POST" id="purchase_form">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{auth()->user()->name}}" required autofocus>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{auth()->user()->email}}" required>
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" placeholder="Mobile" name="mobile" value="{{auth()->user()->mobile}}" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" autocomplete="false">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" autocomplete="false">
                </div>
                
                <div class="form-group">
                    <label for=""></label>
                    <button type="submit" class="form-control btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
