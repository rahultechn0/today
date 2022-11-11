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
                            <h5 class="mb-0">User Summary</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                    </div>
                    <hr />
                    <form action="{{ url('admin/userlist') }}">
                        <div class="row">
                            
                            <div class="col-md-3 form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">
                                <option value="">Select Status</option>
                                <option @if(isset($status)&& $status=='Active') selected @endif value="Active">Active</option>
                                <option @if(isset($status)&& $status=='Inactive') selected @endif value="Inactive">Inactive</option>
                                </select>                  
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="button">&nbsp;</label>
                                <button type="submit" class="nav-link btn btn-primary">Search</button>                                 
                            </div>
                            
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table align-middle mb-0" id="example2">
                            <thead class="table-light">
                                <tr> 
                                    <th>S No</th>
                                    <th>RegisterId</th>
                                    <th>Sponsor Id</th>
                                    <th>Wallet Address</th>
                                    <th>Total Deposit</th>
                                    <th>Register Date</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach( $userlist as $key => $user )
                                <tr>
                                    <td>@php echo $key+1; @endphp</td> 
                                    <td>@php echo $user['registerId']; @endphp</td> 
                                    <td>@php echo $user->userRecord->registerId; @endphp</td> 
                                    <td>@php echo $user['wallet_address']; @endphp</td> 
                                    <td>$ @php echo $user['packageAmt']; @endphp</td> 
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