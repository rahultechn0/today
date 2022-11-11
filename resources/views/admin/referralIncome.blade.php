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
                            <h5 class="mb-0">Direct Income Report</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                    </div>
                    <hr />
                    <div class="table-responsive">
                        <table class="table align-middle mb-0" id="example">
                            <thead class="table-light">
                                <tr> 
                                    <th>S No</th>
                                    <th>Sponsor Id</th>
                                    <th>RegisterId</th>  
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach( $referralList as $key => $user )
                                <tr>
                                    <td>@php echo $key+1; @endphp</td> 
                                    <td>@php echo $user->userData->registerId; @endphp</td> 
                                    <td>@php echo $user->referralUser->registerId; @endphp</td> 
                                    <td>$ @php echo $user['amount']; @endphp</td> 
                                    <td>@php echo $user['created_at']; @endphp</td> 
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