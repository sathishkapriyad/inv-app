@extends('admin.layouts.app')

@section('nav_title','Client Registration')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Client Registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item">Client</li>
              <li class="breadcrumb-item active">Registration</li>
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
    @if(session()->has('danger'))
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Error!</h5>
                {{ session()->get('danger') }}
              </div>
        </div>
    </div>
    @endif
    @error('site_visit_fee')
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Error!</h5>
                {{ $message }}
              </div>
        </div>
    </div>
    @enderror
<!-- Main content -->

<div class="container">
    <form action="{{route('admin.visiting.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Reference No</label>
                    <input type="text" class="form-control @error('reference_no') is-invalid @enderror" id="reference_no" placeholder="Reference No" name="reference_no" value="{{App\Models\Visiting::max('reference_no') == null ? 4000 : App\Models\Visiting::max('reference_no') + 1}}" required>
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="First Name" name="first_name" value="" required>
                </div>
                <div class="form-group">
                    <label>Contact No</label>
                    <input type="text" class="form-control @error('contact_no') is-invalid @enderror" id="contact_no" placeholder="Contact No" name="contact_no" value="" required autofocus>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control @error('user_address') is-invalid @enderror" id="user_address" placeholder="Address" name="user_address" autocomplete="false">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" name="last_name" value="" required autofocus>
                </div>
                <div class="form-group">
                    <label>Contact Home</label>
                    <input type="text" class="form-control @error('contact_home') is-invalid @enderror" id="contact_home" placeholder="Contact No Home" name="contact_home" value="" required autofocus>
                </div>
                <div class="form-group">
                    <label>Near City</label>
                    <input type="text" class="form-control @error('near_city') is-invalid @enderror" id="near_city" placeholder="Near City" name="near_city" value="" required autofocus>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email Address" name="email" autocomplete="false">
                </div>
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Service Category</label>
                    <select class="form-control" name="service_category">
                        <option value="toilet_single_job">Toilet Single Job</option>
                        <option value="toilet_full_job">Toilet Full Job</option>
                        <option value="waste_water_single_job">Waste Water Single Job</option>
                        <option value="waste_water_full_job">Waste Water Full Job</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Water Level</label>
                    <input type="text" class="form-control @error('water_level') is-invalid @enderror" id="water_level" placeholder="Water Level" name="water_level" value="" required autofocus>
                </div>
                <div class="form-group">
                    <label>Site Visit</label>
                    <select class="form-control" name="site_visit" id="site_visit" onchange="visibility()">
                        <option value="yes">Yes</option>
                        <option value="no" selected>No</option>
                    </select>
                </div>
                <div class="form-group" style="display: none" id="site_visit_date_id">
                    <label>Site Visit Date</label>
                    <input type="date" class="form-control @error('site_visit_date') is-invalid @enderror" id="site_visit_date" placeholder="Email Address" name="site_visit_date" autocomplete="false">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group" style="display: none" id="site_visit_fee">
                    <label>Site Visit Fee</label>
                    <input type="text" class="form-control @error('site_visit_fee') is-invalid @enderror" id="site_visit_fee" placeholder="Site visiting fee" name="site_visit_fee" autocomplete="false">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for=""></label>
            <button type="submit" class="form-control btn-primary">Save & Print</button>
        </div>
    </form>
</div>
</div>
@endsection
@section('extra_js')
    <script>
        function visibility(){
            if (document.getElementById("site_visit").value === 'yes') {
                document.getElementById("site_visit_date_id").style.display = "block";
                document.getElementById("site_visit_fee").style.display = "block";
            }else{
                document.getElementById("site_visit_date_id").style.display = "none";
                document.getElementById("site_visit_fee").style.display = "none";
            }
        }
    </script>
@endsection
