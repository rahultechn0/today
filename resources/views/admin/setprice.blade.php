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
                            <h5 class="mb-0">Set Price</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                    </div>
                    <hr /> 
                    <form action="{{ url('admin/update-price') }}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <label for="tokenValue">Price</label>
                                <input type="text" class="form-control" name="tokenValue" value="@php echo $prices['tokenValue'];@endphp" id="tokenValue">
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