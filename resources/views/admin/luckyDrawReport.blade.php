@include("admin.adminCommon.head")

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<!--navigation-->
				@include("admin.adminCommon.sidebar")
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		@include("admin.adminCommon.header")
		<!--end header -->
        <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
  
  
  
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">Lucky Draw Report</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                    </div>
                    <hr />
                    <div class="table-responsive">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead class="table-light">
                                <tr> 
                                    <th>S No</th>
                                    <th>RegisterId</th>
                                    <th>Wallet Address</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach( $roiList as $key => $roi )
                                <tr>
                                    <td>@php echo $key+1; @endphp</td> 
                                    <td>@php echo $roi->userData->registerId; @endphp</td> 
                                    <td>@php echo $roi->userData->wallet_address; @endphp</td> 
                                    <td>$ @php echo $roi['amount']; @endphp</td> 
                                    <td>@php echo $roi['created_at']; @endphp</td> 
                                </tr>
								@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


			</div>
		</div>
		

	@include("admin.adminCommon.footer")