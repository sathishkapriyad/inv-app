@extends('admin.layouts.app')

@section('nav_title','Invoice Create')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Invoice Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item">Invoice</li>
              <li class="breadcrumb-item active">Create</li>
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
<!-- Main content -->

<div class="container">
    <form action="{{route('admin.invoice.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Reference No</label>
                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="contact_no" placeholder="Mobile" name="mobile" value="" required autofocus>
                    <input type="hidden" name="user_id" id="user_id"><br>
                    <button class="btn btn-primary btn-sm" type="button" onclick="getUser();">Get</button>
                </div>
                <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="user_name" placeholder="Customer Name" name="name" value="" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="user_address" placeholder="Address" name="address" autocomplete="false">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Quotation No</label>
                    <input type="text" class="form-control @error('quotation_no') is-invalid @enderror" placeholder="Quotation No" name="quotation_no" value="{{App\Models\Invoice::max('quotation_no') == null ? 1500 : App\Models\Invoice::max('quotation_no') + 1}}" required autofocus>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Toilet</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Toilet Fulljob</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Waste Water</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Waste Water Fulljob</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                    <div class="col-12 table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                00. For How Many Peoples
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="toilet[0][quantity]" value="" placeholder="For how many peoples">
                                <input style="width: 40px" type="hidden" name="toilet[0][length]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet[0][width]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet[0][height]" value="0">
                                <input style="width: 40px" type="hidden" name="toilet[0][unit_price]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet[0][total]" value="0">
                                <input type="hidden" name="toilet[0][extra_item]">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped">
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>01</td>
                            <td>Size of Parawewa <br>
                                <div class="row">
                                    <input id="toilet1l" oninput="reCalculateItem()" style="width: 40px"  type="text" name="toilet[1][length]" value="15"> &nbsp;X &nbsp;
                                    <input id="toilet1w" oninput="reCalculateItem()" style="width: 40px"  type="text" name="toilet[1][width]" value="10"> &nbsp;X&nbsp; 
                                    <input id="toilet1h" oninput="reCalculateItem()" style="width: 40px"  type="text" name="toilet[1][height]" value="25">
                                </div>
                            </td>
                            <td><input id="toilet1q" oninput="reCalculateItem()"  type="text" name="toilet[1][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet1u" oninput="reCalculateItem()"  type="text" name="toilet[1][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet1t" type="text" name="toilet[1][total]" placeholder="Total"></td>
                            <input type="hidden" name="toilet[1][extra_item]">
                          </tr>
                          <tr>
                            <td>02</td>
                            <td>Transport Cost</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet[2][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[2][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[2][height]" value="">
                            </div>
                            <td><input id="toilet2q" oninput="reCalculateItem()" type="text" name="toilet[2][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet2u" oninput="reCalculateItem()" type="text" name="toilet[2][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet2t" type="text" name="toilet[2][total]" placeholder="Total"></td>
                            <input type="hidden" name="toilet[2][extra_item]">
                          </tr>
                          <tr>
                            <td>03</td>
                            <td><input type="text" name="toilet[3][extra_item]" placeholder="Add extra items"></td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet[3][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[3][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[3][height]" value="">
                            </div>
                            <td><input id="toilet3q" oninput="reCalculateItem()" type="text" name="toilet[3][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet3u" oninput="reCalculateItem()" type="text" name="toilet[3][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet3t" type="text" name="toilet[3][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>04</td>
                            <td><input type="text" name="toilet[4][extra_item]" placeholder="Add extra items"></td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet[4][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[4][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[4][height]" value="">
                            </div>
                            <td><input id="toilet4q" oninput="reCalculateItem()" type="text" name="toilet[4][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet4u" oninput="reCalculateItem()" type="text" name="toilet[4][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet4t" type="text" name="toilet[4][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                              <td colspan="4"></td>
                              <td><div id="toilet_total">0/-</div></td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                    <div class="col-12 table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                00. For How Many Peoples
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="toilet_fulljob[0][quantity]" value="" placeholder="For how many peoples">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[0][length]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[0][width]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[0][height]" value="0">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[0][unit_price]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[0][total]" value="0">
                                <input type="hidden" name="toilet_fulljob[0][extra_item]">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped">
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>01</td>
                            <td>Capacity of the squre <br>
                                <div class="row">
                                    <input id="toilet_fulljob1l" oninput="reCalculateItem()" style="width: 40px" type="text" name="toilet_fulljob[1][length]" value="15"> &nbsp;X &nbsp;
                                    <input id="toilet_fulljob1w" oninput="reCalculateItem()" style="width: 40px" type="text" name="toilet_fulljob[1][width]" value="10"> &nbsp;X&nbsp; 
                                    <input id="toilet_fulljob1h" oninput="reCalculateItem()" style="width: 40px" type="text" name="toilet_fulljob[1][height]" value="25">
                                </div>
                            </td>
                            <td><input id="toilet_fulljob1q" oninput="reCalculateItem()" type="text" name="toilet_fulljob[1][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet_fulljob1u" oninput="reCalculateItem()" type="text" name="toilet_fulljob[1][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet_fulljob1t" type="text" name="toilet_fulljob[1][total]" placeholder="Total"></td>
                            <input type="hidden" name="toilet_fulljob[1][extra_item]">
                          </tr>
                          <tr>
                            <td>02</td>
                            <td>Soil transport</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[2][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[2][width]" value="">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[2][height]" value="">
                            </div>
                            <td><input id="toilet_fulljob2q" oninput="reCalculateItem()" type="text" name="toilet_fulljob[2][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet_fulljob2u" oninput="reCalculateItem()" type="text" name="toilet_fulljob[2][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet_fulljob2t" type="text" name="toilet_fulljob[2][total]" placeholder="Total"></td>
                            <input type="hidden" name="toilet_fulljob[2][extra_item]">
                          </tr>
                          <tr>
                            <td>03</td>
                            <td>Size of parawewa <br>
                                <div class="row">
                                    <input id="toilet_fulljob3l" oninput="reCalculateItem()" style="width: 40px" type="text" name="toilet_fulljob[3][length]" value="15"> &nbsp;X &nbsp;
                                    <input id="toilet_fulljob3w" oninput="reCalculateItem()" style="width: 40px" type="text" name="toilet_fulljob[3][width]" value="10"> &nbsp;X&nbsp; 
                                    <input id="toilet_fulljob3h" oninput="reCalculateItem()" style="width: 40px" type="text" name="toilet_fulljob[3][height]" value="25">
                                </div>
                            </td>
                            <td><input id="toilet_fulljob3q" oninput="reCalculateItem()" type="text" name="toilet_fulljob[3][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet_fulljob3u" oninput="reCalculateItem()" type="text" name="toilet_fulljob[3][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet_fulljob3t" type="text" name="toilet_fulljob[3][total]" placeholder="Total"></td>
                            <input type="hidden" name="toilet_fulljob[3][extra_item]">
                          </tr>
                          <tr>
                            <td>04</td>
                            <td>4" PVC pipe</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[4][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[4][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[4][height]" value="">
                            </div>
                            <td><input id="toilet_fulljob4q" oninput="reCalculateItem()" type="text" name="toilet_fulljob[4][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet_fulljob4u" oninput="reCalculateItem()" type="text" name="toilet_fulljob[4][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet_fulljob4t" type="text" name="toilet_fulljob[4][total]" placeholder="Total"></td>
                            <input type="hidden" name="toilet_fulljob[4][extra_item]">
                          </tr>
                          <tr>
                            <td>05</td>
                            <td>1.5" PVC vent piple</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[5][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[5][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[5][height]" value="">
                            </div>
                            <td><input id="toilet_fulljob5q" oninput="reCalculateItem()" type="text" name="toilet_fulljob[5][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet_fulljob5u" oninput="reCalculateItem()" type="text" name="toilet_fulljob[5][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet_fulljob5t" type="text" name="toilet_fulljob[5][total]" placeholder="Total"></td>
                            <input type="hidden" name="toilet_fulljob[5][extra_item]">
                          </tr>
                          <tr>
                            <td>06</td>
                            <td>2 * 2 Man hole</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[6][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[6][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[6][height]" value="">
                            </div>
                            <td><input id="toilet_fulljob6q" oninput="reCalculateItem()" type="text" name="toilet_fulljob[6][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet_fulljob6u" oninput="reCalculateItem()" type="text" name="toilet_fulljob[6][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet_fulljob6t" type="text" name="toilet_fulljob[6][total]" placeholder="Total"></td>
                            <input type="hidden" name="toilet_fulljob[6][extra_item]">
                          </tr>
                          <tr>
                            <td>07</td>
                            <td>6" C/C Concretewith 10mm steel</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[7][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[7][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[7][height]" value="">
                            </div>
                            <td><input id="toilet_fulljob7q" oninput="reCalculateItem()" type="text" name="toilet_fulljob[7][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet_fulljob7u" oninput="reCalculateItem()" type="text" name="toilet_fulljob[7][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet_fulljob7t" type="text" name="toilet_fulljob[7][total]" placeholder="Total"></td>
                            <input type="hidden" name="toilet_fulljob[7][extra_item]">
                          </tr>
                          <tr>
                            <td>08</td>
                            <td>Transportation Cost</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[8][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[8][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[8][height]" value="">
                            </div>
                            <td><input id="toilet_fulljob8q" oninput="reCalculateItem()" type="text" name="toilet_fulljob[8][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet_fulljob8u" oninput="reCalculateItem()" type="text" name="toilet_fulljob[8][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet_fulljob8t" type="text" name="toilet_fulljob[8][total]" placeholder="Total"></td>
                            <input type="hidden" name="toilet_fulljob[8][extra_item]">
                          </tr>
                          <tr>
                            <td>09</td>
                            <td><input type="text" name="toilet_fulljob[9][extra_item]" placeholder="Add extra items"></td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[9][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[9][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[9][height]" value="">
                            </div>
                            <td><input id="toilet_fulljob9q" oninput="reCalculateItem()" type="text" name="toilet_fulljob[9][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet_fulljob9u" oninput="reCalculateItem()" type="text" name="toilet_fulljob[9][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet_fulljob9t" type="text" name="toilet_fulljob[9][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td><input type="text" name="toilet_fulljob[10][extra_item]" placeholder="Add extra items"></td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[10][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[10][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[10][height]" value="">
                            </div>
                            <td><input id="toilet_fulljob10q" oninput="reCalculateItem()" type="text" name="toilet_fulljob[10][quantity]" placeholder="Quantity"></td>
                            <td><input id="toilet_fulljob10u" oninput="reCalculateItem()" type="text" name="toilet_fulljob[10][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="toilet_fulljob10t" type="text" name="toilet_fulljob[10][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                              <td colspan="4"></td>
                              <td><div id="toilet_fulljob_total">0/-</div></td>
                          </tr>
                          </tbody>
                        </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                    <div class="col-12 table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                00. For How Many Peoples
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="waste_water[0][quantity]" value="" placeholder="For how many peoples">
                                <input style="width: 40px" type="hidden" name="waste_water[0][length]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water[0][width]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water[0][height]" value="0">
                                <input style="width: 40px" type="hidden" name="waste_water[0][unit_price]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water[0][total]" value="0">
                                <input type="hidden" name="waste_water[0][extra_item]">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped">
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>01</td>
                            <td>Size of grees tap <br>
                                <div class="row">
                                    <input id="waste_water1l" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water[1][length]" value="15"> &nbsp;X &nbsp;
                                    <input id="waste_water1w" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water[1][width]" value="10"> &nbsp;X&nbsp; 
                                    <input id="waste_water1h" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water[1][height]" value="25">
                                </div>
                            </td>
                            <td><input id="waste_water1q" oninput="reCalculateItem()" type="text" name="waste_water[1][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water1u" oninput="reCalculateItem()" type="text" name="waste_water[1][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water1t" type="text" name="waste_water[1][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water[1][extra_item]">
                          </tr>
                          <tr>
                            <td>02</td>
                            <td>Sand filter</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water[2][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water[2][width]" value="">  
                                <input style="width: 40px" type="hidden" name="waste_water[2][height]" value="">
                            </div>
                            <td><input id="waste_water2q" oninput="reCalculateItem()" type="text" name="waste_water[2][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water2u" oninput="reCalculateItem()" type="text" name="waste_water[2][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water2t" type="text" name="waste_water[2][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water[2][extra_item]">
                          </tr>
                          <tr>
                            <td>03</td>
                            <td>Size of Parawewa <br>
                                <div class="row">
                                    <input id="waste_water3l" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water[3][length]" value="15"> &nbsp;X &nbsp;
                                    <input id="waste_water3w" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water[3][width]" value="10"> &nbsp;X&nbsp; 
                                    <input id="waste_water3h" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water[3][height]" value="25">
                                </div>
                            </td>
                            <td><input id="waste_water3q" oninput="reCalculateItem()" type="text" name="waste_water[3][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water3u" oninput="reCalculateItem()" type="text" name="waste_water[3][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water3t" type="text" name="waste_water[3][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water[3][extra_item]">
                          </tr>
                          <tr>
                            <td>04</td>
                            <td>Transport Cost</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water[4][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water[4][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water[4][height]" value="">
                            </div>
                            <td><input id="waste_water4q" oninput="reCalculateItem()" type="text" name="waste_water[4][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water4u" oninput="reCalculateItem()" type="text" name="waste_water[4][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water4t" type="text" name="waste_water[4][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water[4][extra_item]">
                          </tr>
                          <tr>
                            <td>05</td>
                            <td><input type="text" name="waste_water[5][extra_item]" placeholder="Add extra items"></td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water[5][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water[5][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water[5][height]" value="">
                            </div>
                            <td><input id="waste_water5q" oninput="reCalculateItem()" type="text" name="waste_water[5][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water5u" oninput="reCalculateItem()" type="text" name="waste_water[5][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water5t" type="text" name="waste_water[5][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>06</td>
                            <td><input type="text" name="waste_water[6][extra_item]" placeholder="Add extra items"></td>
                            <div class="row">
                                <input style="width: 60px" type="hidden" name="waste_water[6][length]" value=""> 
                                <input style="width: 60px" type="hidden" name="waste_water[6][width]" value=""> 
                                <input style="width: 60px" type="hidden" name="waste_water[6][height]" value="">
                            </div>
                            <td><input id="waste_water6q" oninput="reCalculateItem()" type="text" name="waste_water[6][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water6u" oninput="reCalculateItem()" type="text" name="waste_water[6][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water6t" type="text" name="waste_water[6][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                              <td colspan="4"></td>
                              <td><div id="waste_water_total">0/-</div></td>
                          </tr>
                          </tbody>
                        </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                    <div class="col-12 table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                00. For How Many Peoples
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="waste_water_fulljob[0][quantity]" value="" placeholder="For how many peoples">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[0][length]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[0][width]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[0][height]" value="0">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[0][unit_price]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[0][total]" value="0">
                                <input type="hidden" name="waste_water_fulljob[0][extra_item]">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped">
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                          </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>01</td>
                                <td>Capacity of the squre <br>
                                    <div class="row">
                                        <input id="waste_water_fulljob1l" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water_fulljob[1][length]" value="15"> &nbsp;X &nbsp;
                                        <input id="waste_water_fulljob1w" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water_fulljob[1][width]" value="10"> &nbsp;X&nbsp; 
                                        <input id="waste_water_fulljob1h" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water_fulljob[1][height]" value="25">
                                    </div>
                                </td>
                                <td><input id="waste_water_fulljob1q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[1][quantity]" placeholder="Quantity"></td>
                                <td><input id="waste_water_fulljob1u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[1][unit_price]" placeholder="Unit Price"></td>
                                <td><input id="waste_water_fulljob1t" type="text" name="waste_water_fulljob[1][total]" placeholder="Total"></td>
                                <input type="hidden" name="waste_water_fulljob[1][extra_item]">
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Size of grees tap <br>
                                    <div class="row">
                                        <input id="waste_water_fulljob2l" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water_fulljob[2][length]" value="15"> &nbsp;X &nbsp;
                                        <input id="waste_water_fulljob2w" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water_fulljob[2][width]" value="10"> &nbsp;X&nbsp; 
                                        <input id="waste_water_fulljob2h" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water_fulljob[2][height]" value="25">
                                    </div>
                                </td>
                                <td><input id="waste_water_fulljob2q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[2][quantity]" placeholder="Quantity"></td>
                                <td><input id="waste_water_fulljob2u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[2][unit_price]" placeholder="Unit Price"></td>
                                <td><input id="waste_water_fulljob2t" type="text" name="waste_water_fulljob[2][total]" placeholder="Total"></td>
                                <input type="hidden" name="waste_water_fulljob[2][extra_item]">
                            </tr>
                            <tr>
                            <td>03</td>
                            <td>Size of Parawewa & Sand filter<br>
                                <div class="row">
                                    <input id="waste_water_fulljob3l" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water_fulljob[3][length]" value="15"> &nbsp;X &nbsp;
                                    <input id="waste_water_fulljob3w" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water_fulljob[3][width]" value="10"> &nbsp;X&nbsp; 
                                    <input id="waste_water_fulljob3h" oninput="reCalculateItem()" style="width: 40px" type="text" name="waste_water_fulljob[3][height]" value="25">
                                </div>
                            </td>
                            <td><input id="waste_water_fulljob3q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[3][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water_fulljob3u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[3][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water_fulljob3t" type="text" name="waste_water_fulljob[3][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water_fulljob[3][extra_item]">
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Sand filter for waste water</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[4][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[4][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[4][height]" value="">
                            </div>
                            <td><input id="waste_water_fulljob4q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[4][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water_fulljob4u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[4][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water_fulljob4t" type="text" name="waste_water_fulljob[4][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water_fulljob[4][extra_item]">
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Parawewa for waste water</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[5][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[5][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[5][height]" value="">
                            </div>
                            <td><input id="waste_water_fulljob5q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[5][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water_fulljob5u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[5][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water_fulljob5t" type="text" name="waste_water_fulljob[5][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water_fulljob[5][extra_item]">
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Soil transpotation</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[6][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[6][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[6][height]" value="">
                            </div>
                            <td><input id="waste_water_fulljob6q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[6][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water_fulljob6u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[6][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water_fulljob6t" type="text" name="waste_water_fulljob[6][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water_fulljob[6][extra_item]">
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>2" PVC piple</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[7][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[7][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[7][height]" value="">
                            </div>
                            <td><input id="waste_water_fulljob7q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[7][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water_fulljob7u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[7][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water_fulljob7t" type="text" name="waste_water_fulljob[7][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water_fulljob[7][extra_item]">
                          </tr>
                          <tr>
                            <td>8</td>
                            <td>2' * 2" Man hole</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[8][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[8][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[8][height]" value="">
                            </div>
                            <td><input id="waste_water_fulljob8q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[8][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water_fulljob8u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[8][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water_fulljob8t" type="text" name="waste_water_fulljob[8][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water_fulljob[8][extra_item]">
                          </tr>
                          <tr>
                            <td>9</td>
                            <td>1.6' * 1.6' Meal Cover Seal</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[9][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[9][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[9][height]" value="">
                            </div>
                            <td><input id="waste_water_fulljob9q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[9][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water_fulljob9u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[9][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water_fulljob9t" type="text" name="waste_water_fulljob[9][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water_fulljob[9][extra_item]">
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>Sand Filter Metal Cover</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[10][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[10][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[10][height]" value="">
                            </div>
                            <td><input id="waste_water_fulljob10q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[10][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water_fulljob10u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[10][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water_fulljob10t" type="text" name="waste_water_fulljob[10][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water_fulljob[10][extra_item]">
                          </tr>
                          <tr>
                            <td>11</td>
                            <td>Transport Cost</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[11][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[11][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[11][height]" value="">
                            </div>
                            <td><input id="waste_water_fulljob11q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[11][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water_fulljob11u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[11][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water_fulljob11t" type="text" name="waste_water_fulljob[11][total]" placeholder="Total"></td>
                            <input type="hidden" name="waste_water_fulljob[11][extra_item]">
                          </tr>
                          <tr>
                            <td>12</td>
                            <td><input type="text" name="waste_water_fulljob[12][extra_item]" placeholder="Add extra items"></td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[12][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[12][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[12][height]" value="">
                            </div>
                            <td><input id="waste_water_fulljob12q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[12][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water_fulljob12u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[12][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water_fulljob12t" type="text" name="waste_water_fulljob[12][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>13</td>
                            <td><input type="text" name="waste_water_fulljob[13][extra_item]" placeholder="Add extra items"></td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[13][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[13][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[13][height]" value="">
                            </div>
                            <td><input id="waste_water_fulljob13q" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[13][quantity]" placeholder="Quantity"></td>
                            <td><input id="waste_water_fulljob13u" oninput="reCalculateItem()" type="text" name="waste_water_fulljob[13][unit_price]" placeholder="Unit Price"></td>
                            <td><input id="waste_water_fulljob13t" type="text" name="waste_water_fulljob[13][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                              <td colspan="4"></td>
                              <td><div id="waste_water_fulljob_total">0/-</div></td>
                          </tr>
                          </tbody>
                        </table>
                  </div>
                </div>
              </div>
              <!-- /.card -->
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
        @if(session()->has('invoice_id'))
          $( document ).ready(function() {
            window.open("{{route('admin.viewPDF',session()->get('invoice_id'))}}", "_blank");
          });
        @endif
        
        function reCalculateItem(){
          // document.getElementById('toilet1q').value=document.getElementById('toilet1l').value * document.getElementById('toilet1w').value * document.getElementById('toilet1h').value; 
          document.getElementById('toilet1t').value=document.getElementById('toilet1q').value*document.getElementById('toilet1u').value;
          document.getElementById('toilet2t').value=document.getElementById('toilet2q').value*document.getElementById('toilet2u').value;
          document.getElementById('toilet3t').value=document.getElementById('toilet3q').value*document.getElementById('toilet3u').value;
          document.getElementById('toilet4t').value=document.getElementById('toilet4q').value*document.getElementById('toilet4u').value;

          // document.getElementById('toilet_fulljob1q').value=document.getElementById('toilet_fulljob1l').value * document.getElementById('toilet_fulljob1w').value * document.getElementById('toilet_fulljob1h').value; 
          document.getElementById('toilet_fulljob1t').value=document.getElementById('toilet_fulljob1q').value*document.getElementById('toilet_fulljob1u').value;
          document.getElementById('toilet_fulljob2t').value=document.getElementById('toilet_fulljob2q').value*document.getElementById('toilet_fulljob2u').value;
          // document.getElementById('toilet_fulljob3q').value=document.getElementById('toilet_fulljob3l').value * document.getElementById('toilet_fulljob3w').value * document.getElementById('toilet_fulljob3h').value; 
          document.getElementById('toilet_fulljob3t').value=document.getElementById('toilet_fulljob3q').value*document.getElementById('toilet_fulljob3u').value;
          document.getElementById('toilet_fulljob4t').value=document.getElementById('toilet_fulljob4q').value*document.getElementById('toilet_fulljob4u').value;
          document.getElementById('toilet_fulljob5t').value=document.getElementById('toilet_fulljob5q').value*document.getElementById('toilet_fulljob5u').value;
          document.getElementById('toilet_fulljob6t').value=document.getElementById('toilet_fulljob6q').value*document.getElementById('toilet_fulljob6u').value;
          document.getElementById('toilet_fulljob7t').value=document.getElementById('toilet_fulljob7q').value*document.getElementById('toilet_fulljob7u').value;
          document.getElementById('toilet_fulljob8t').value=document.getElementById('toilet_fulljob8q').value*document.getElementById('toilet_fulljob8u').value;
          document.getElementById('toilet_fulljob9t').value=document.getElementById('toilet_fulljob9q').value*document.getElementById('toilet_fulljob9u').value;
          document.getElementById('toilet_fulljob10t').value=document.getElementById('toilet_fulljob10q').value*document.getElementById('toilet_fulljob10u').value;

          // document.getElementById('waste_water1q').value=document.getElementById('waste_water1l').value * document.getElementById('waste_water1w').value * document.getElementById('waste_water1h').value; 
          document.getElementById('waste_water1t').value=document.getElementById('waste_water1q').value*document.getElementById('waste_water1u').value;
          document.getElementById('waste_water2t').value=document.getElementById('waste_water2q').value*document.getElementById('waste_water2u').value;
          // document.getElementById('waste_water3q').value=document.getElementById('waste_water3l').value * document.getElementById('waste_water3w').value * document.getElementById('waste_water3h').value; 
          document.getElementById('waste_water3t').value=document.getElementById('waste_water3q').value*document.getElementById('waste_water3u').value;
          document.getElementById('waste_water4t').value=document.getElementById('waste_water4q').value*document.getElementById('waste_water4u').value;
          document.getElementById('waste_water5t').value=document.getElementById('waste_water5q').value*document.getElementById('waste_water5u').value;
          document.getElementById('waste_water6t').value=document.getElementById('waste_water6q').value*document.getElementById('waste_water6u').value;
        
          // document.getElementById('waste_water_fulljob1q').value=document.getElementById('waste_water_fulljob1l').value * document.getElementById('waste_water_fulljob1w').value * document.getElementById('waste_water_fulljob1h').value; 
          document.getElementById('waste_water_fulljob1t').value=document.getElementById('waste_water_fulljob1q').value*document.getElementById('waste_water_fulljob1u').value;
          // document.getElementById('waste_water_fulljob2q').value=document.getElementById('waste_water_fulljob2l').value * document.getElementById('waste_water_fulljob2w').value * document.getElementById('waste_water_fulljob2h').value; 
          document.getElementById('waste_water_fulljob2t').value=document.getElementById('waste_water_fulljob2q').value*document.getElementById('waste_water_fulljob2u').value;
          // document.getElementById('waste_water_fulljob3q').value=document.getElementById('waste_water_fulljob3l').value * document.getElementById('waste_water_fulljob3w').value * document.getElementById('waste_water_fulljob3h').value; 
          document.getElementById('waste_water_fulljob3t').value=document.getElementById('waste_water_fulljob3q').value*document.getElementById('waste_water_fulljob3u').value;
          document.getElementById('waste_water_fulljob4t').value=document.getElementById('waste_water_fulljob4q').value*document.getElementById('waste_water_fulljob4u').value;
          document.getElementById('waste_water_fulljob5t').value=document.getElementById('waste_water_fulljob5q').value*document.getElementById('waste_water_fulljob5u').value;
          document.getElementById('waste_water_fulljob6t').value=document.getElementById('waste_water_fulljob6q').value*document.getElementById('waste_water_fulljob6u').value;
          document.getElementById('waste_water_fulljob7t').value=document.getElementById('waste_water_fulljob7q').value*document.getElementById('waste_water_fulljob7u').value;
          document.getElementById('waste_water_fulljob8t').value=document.getElementById('waste_water_fulljob8q').value*document.getElementById('waste_water_fulljob8u').value;
          document.getElementById('waste_water_fulljob9t').value=document.getElementById('waste_water_fulljob9q').value*document.getElementById('waste_water_fulljob9u').value;
          document.getElementById('waste_water_fulljob10t').value=document.getElementById('waste_water_fulljob10q').value*document.getElementById('waste_water_fulljob10u').value;
          document.getElementById('waste_water_fulljob11t').value=document.getElementById('waste_water_fulljob11q').value*document.getElementById('waste_water_fulljob11u').value;
          document.getElementById('waste_water_fulljob12t').value=document.getElementById('waste_water_fulljob12q').value*document.getElementById('waste_water_fulljob12u').value;
          document.getElementById('waste_water_fulljob13t').value=document.getElementById('waste_water_fulljob13q').value*document.getElementById('waste_water_fulljob13u').value;

          var total=parseFloat(document.getElementById('toilet1t').value) +
                    parseFloat(document.getElementById('toilet2t').value) +
                    parseFloat(document.getElementById('toilet3t').value) +
                    parseFloat(document.getElementById('toilet4t').value);

            var toilet_fulljob_total=parseFloat(document.getElementById('toilet_fulljob1t').value) +
                    parseFloat(document.getElementById('toilet_fulljob2t').value) +
                    parseFloat(document.getElementById('toilet_fulljob3t').value) +
                    parseFloat(document.getElementById('toilet_fulljob4t').value) +
                    parseFloat(document.getElementById('toilet_fulljob5t').value) +
                    parseFloat(document.getElementById('toilet_fulljob6t').value) +
                    parseFloat(document.getElementById('toilet_fulljob7t').value) +
                    parseFloat(document.getElementById('toilet_fulljob8t').value) +
                    parseFloat(document.getElementById('toilet_fulljob9t').value) +
                    parseFloat(document.getElementById('toilet_fulljob10t').value);

            var waste_water_total=parseFloat(document.getElementById('waste_water1t').value) +
                    parseFloat(document.getElementById('waste_water2t').value) +
                    parseFloat(document.getElementById('waste_water3t').value) +
                    parseFloat(document.getElementById('waste_water4t').value) +
                    parseFloat(document.getElementById('waste_water5t').value) +
                    parseFloat(document.getElementById('waste_water6t').value);
 
            var waste_water_fulljob_total=parseFloat(document.getElementById('waste_water_fulljob1t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob2t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob3t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob4t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob5t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob6t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob7t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob8t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob9t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob10t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob11t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob12t').value) +
                    parseFloat(document.getElementById('waste_water_fulljob13t').value);

          document.getElementById('toilet_total').innerHTML=total+'/-';
          document.getElementById('toilet_fulljob_total').innerHTML=toilet_fulljob_total+'/-';
          document.getElementById('waste_water_total').innerHTML=waste_water_total+'/-';
          document.getElementById('waste_water_fulljob_total').innerHTML=waste_water_fulljob_total+'/-';
        }
        function getUser(){
         var mobile=document.getElementById('contact_no').value;
                  $.ajax({  
                     url:"/admin/getCustomerFromContact",  
                     method:"GET",  
                     data:{mobile:mobile},   
                     success:function(data){ 
                       console.log(data)
                      document.getElementById('user_name').value=data.user.first_name ; 
                      document.getElementById('user_id').value=data.user.id ; 
                      document.getElementById('user_address').value=data.user.user_address ; 
                     },
                     error:function(data){
                        console.log(data);
                     }
                });
        }
    </script>
@endsection
