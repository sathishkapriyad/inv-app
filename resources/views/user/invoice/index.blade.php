@extends('user.layouts.app')

@section('nav_title','Invoice Create')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Invoices</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Invoices</li>
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
  <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-10">
                <h3 class="card-title">Invoices</strong></h3>
            </div>
            <div class="col-md-2">
                <a href="{{route('user.invoice.create')}}" class="btn btn-primary btn-sm">Create Invoice</a>
            </div>
      </div>
    </div>
    <div class="card-body">
        <table id="invoiceTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Quotation No</th>
                    <th>Reference No</th>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Actions</th>
                </thead>
                
                <tfoot>
                {{-- <tr>
                  <th>Quotation No</th>
                  <th>Customer Name</th>
                  <th>Address</th>
                  <th>Actions</th>
                </tr>
                </tfoot> --}}
        </table>
    </div>
</div>
</div>
</div>
@endsection


@section('extra_js')
    <script>
      $('#invoiceTable').DataTable({
            processing: true,
            serverSide: true,
            paging: false,
            // scrollY: 425,
            ajax:{
                url: "{{ route('user.invoice.index') }}",
            },
            columns:[
                {
                    data: 'quotation_no',
                    name: 'quotation_no'
                },
                {
                    data: 'reference_no',
                    name: 'reference_no'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'actions',
                    name: 'actions'
                }
            ]
        });
    </script>
@endsection
