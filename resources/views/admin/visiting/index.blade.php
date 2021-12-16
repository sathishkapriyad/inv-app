@extends('admin.layouts.app')

@section('nav_title','Clients')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Clients</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">All Clients</li>
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
            <div class="col-md-8">
                <h3 class="card-title">All Clients</strong></h3>
            </div>
            <div class="col-md-4">
                <form action="{{ route('admin.visiting.index') }}" method="GET">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="col-md-6">
                            <input class="btn btn-info" type="submit" value="Go">
                        </div>
                    </div>
                </form>
            </div>
      </div>
    </div>
    <div class="card-body" id="card_body">
        <form id="handlePrint">
            @csrf
            <table id="invoiceTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Ref. No</th>
                        <th>Visiting Date</th>
                        <th>Customer Name</th>
                        <th>Contact No</th>
                        <th>Address</th>
                        <th>Near City</th>
                        <th>Status</th>
                        <th>Additional Info</th>
                        <th>Actions</th>
                    </thead>
            </table>
            <input type="submit" class="btn btn-info" id="printBtn" value="print" />
        </form>
        <div id="invoiceTablePrint" style="display: none"></div>
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
                url: "{{ route('admin.visiting.index') }}",
            },
            columns:[
                {
                    data: 'select',
                    name: 'select'
                },
                {
                    data: 'reference_no',
                    name: 'reference_no'
                },
                {
                    data: 'visiting_date',
                    name: 'visiting_date'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'contact_no',
                    name: 'contact_no'
                },
                {
                    data: 'user_address',
                    name: 'user_address'
                },
                {
                    data: 'near_city',
                    name: 'near_city'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'addtional_info',
                    name: 'addtional_info'
                },
                {
                    data: 'actions',
                    name: 'actions'
                }
            ]
        });
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.getElementById('card_body').innerHTML;

            document.getElementById("printBtn").style.display = "none";
            document.getElementById('card_body').innerHTML = printContents;

            window.print();

            document.getElementById('card_body').innerHTML = originalContents;
        }
        $('#handlePrint').on("submit", function(event){  
           event.preventDefault(); 
           $.ajax({  
                     url:"{{url('admin/visitPrint')}}",  
                     method:"POST",  
                     data:$('#handlePrint').serialize(),  
                     beforeSend:function(){  
                          $('#printBtn').val("Printing");  
                     },  
                     success:function(data){ 
                          $('#handlePrint')[0].reset();  
                         document.getElementById('invoiceTablePrint').innerHTML=data.data;
                         printDiv('invoiceTablePrint');
                          $('#printBtn').val("Print");  
                     },
                     error:function(data){
                        console.log(data);
                     }
                });
      });
    </script>
@endsection
