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
                            <h5 class="mb-0">Setting Data</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                    </div>
                    <hr /> 
                    <form action="{{ url('admin/profile') }}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <label for="TOTAL_INVEST">Total Invest</label>
                                <input type="text" class="form-control" name="TOTAL_INVEST" value="@php echo $settings['TOTAL_INVEST'];@endphp" id="TOTAL_INVEST">
                            </div>
                            <div class="col-md-3">
                                <label for="REGISTER_MEMBER">Registered Member</label>
                                <input type="text" class="form-control" name="REGISTER_MEMBER" value="@php echo $settings['REGISTER_MEMBER'];@endphp" id="REGISTER_MEMBER">
                            </div>
                            <div class="col-md-3">
                                <label for="TOTAL_WITH">Total Withdrawal</label>
                                <input type="text" class="form-control" name="TOTAL_WITH" value="@php echo $settings['TOTAL_WITH'];@endphp" id="TOTAL_WITH">
                            </div>
                            <div class="col-md-3">
                                <label for="update">&nbsp;</label>
                                <button type="text" class="btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


			</div>
		</div>
		@include("admin.adminCommon.footer")