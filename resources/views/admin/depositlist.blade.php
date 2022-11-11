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
                            <h5 class="mb-0">Deposit History</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                    </div>
                    <hr />
                    <div class="table-responsive">
                        <table class="table align-middle mb-0" id="example2">
                            <thead class="table-light">
                                <tr> 
                                    <th>S No</th>
                                    <th>RegisterId</th>  
                                    <th>Wallet Address</th>  
                                    <th>Deposit Amt</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach( $depositlist as $key => $deposit )
                                <tr>
                                    <td>@php echo $key+1; @endphp</td> 
                                    <td>@php echo $deposit->userData->registerId; @endphp</td> 
                                    <td>@php echo $deposit->userData->wallet_address; @endphp</td> 
                                    <td>$ @php echo $deposit['amount']; @endphp</td> 
                                    <td>$ @php echo $deposit['created_at']; @endphp</td> 
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