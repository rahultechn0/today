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
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ url('admin/userlist') }}" class="btn btn-primary">Reset Tree</a>
                            <div class="tree-outer position-relative level-one text-center">
                            <div class="tree-inner position-relative">
                                <div class="img-outer">
                                <img src="{{asset('btcworld/img/logo-icon.png')}}" alt="" class="img-fluid"/>
                                </div>
                                <div class="content-outer">
                                <h4 id="self_registerId">Id Here</h4>
                                <p>Left : <span id="leftCount"></span> and Right : <span id="rightCount"></span></p>
                                </div>
                                <div class="tree-detail-outer">
                                <ul>
                                    <li>Wallet Addr</li>
                                    <li id="self_walletAddr"></li>
                                    <li>Left Amount</li>
                                    <li id="self_left_bussiness"></li>
                                    <li>Right Amount</li>
                                    <li id="self_right_bussiness"></li>
                                    <li>Total Business</li>
                                    <li id="self_total_bussiness"></li>
                                    <li>Date</li>
                                    <li id="self_created_at"></li>
                                    <li>Package Amt</li>
                                    <li id="self_amount"></li>
                                </ul>
                                </div>
                                <a href="javascript:void(0)" id="self_user" class="full-card-link position-absolute userClickTree"></a>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 border-outer border-top-right">
                            <div class="tree-outer level-two-left text-center">
                            <div class="tree-inner position-relative">
                                <div class="img-outer">
                                <img src="{{asset('btcworld/img/logo-icon.png')}}" alt="" class="img-fluid"/>
                                </div>
                                <div class="content-outer">
                                <h4 id="left_registerId">Id Here</h4>
                                </div>
                                <div class="tree-detail-outer">
                                <ul>
                                    <li>Wallet Addr</li>
                                    <li id="left_walletAddr"></li>
                                    <li>Left Amount</li>
                                    <li id="left_left_bussiness"></li>
                                    <li>Right Amount</li>
                                    <li id="left_right_bussiness"></li>
                                    <li>Total Business</li>
                                    <li id="left_total_bussiness"></li>
                                    <li>Date</li>
                                    <li id="left_created_at"></li>
                                    <li>Package Amt</li>
                                    <li id="left_amount"></li>
                                </ul>
                                </div>
                                <a href="javascript:void(0)" id="left_user" class="full-card-link position-absolute userClickTree"></a>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 border-outer border-top-left">
                            <div class="tree-outer level-two-right text-center">
                            <div class="tree-inner position-relative">
                                <div class="img-outer">
                                <img src="{{asset('btcworld/img/logo-icon.png')}}" alt="" class="img-fluid"/>
                                </div>
                                <div class="content-outer">
                                <h4 id="right_registerId">Id Here</h4>
                                </div>
                                <div class="tree-detail-outer">
                                <ul>
                                    <li>Wallet Addr</li>
                                    <li id="right_walletAddr"></li>
                                    <li>Left Amount</li>
                                    <li id="right_left_bussiness"></li>
                                    <li>Right Amount</li>
                                    <li id="right_right_bussiness"></li>
                                    <li>Total Business</li>
                                    <li id="right_total_bussiness"></li>
                                    <li>Date</li>
                                    <li id="right_created_at"></li>
                                    <li>Package Amt</li>
                                    <li id="right_amount"></li>
                                </ul>
                                </div>
                                <a href="javascript:void(0)" id="right_user" class="full-card-link position-absolute userClickTree"></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                    <div class="col-6">
                        <div class="row">
                        <div class="col-6 border-outer border-top-right">
                            <div class="tree-outer level-three-left text-center">
                            <div class="tree-inner position-relative">
                                <div class="img-outer">
                                <img src="{{asset('btcworld/img/logo-icon.png')}}" alt="" class="img-fluid"/>
                                </div>
                                <div class="content-outer">
                                <h4 id="left_1_registerId">Id Here</h4>
                                </div>
                                <div class="tree-detail-outer">
                                <ul>
                                    <li>Wallet Addr</li>
                                    <li id="left_1_walletAddr"></li>
                                    <li>Left Amount</li>
                                    <li id="left_1_left_bussiness"></li>
                                    <li>Right Amount</li>
                                    <li id="left_1_right_bussiness"></li>
                                    <li>Total Business</li>
                                    <li id="left_1_total_bussiness"></li>
                                    <li>Date</li>
                                    <li id="left_1_created_at"></li>
                                    <li>Package Amt</li>
                                    <li id="left_1_amount"></li>
                                </ul>
                                </div>
                                <a href="javascript:void(0)" id="left_1_user" class="full-card-link position-absolute userClickTree"></a>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 border-outer border-top-left">
                            <div class="tree-outer level-three-left text-center">
                            <div class="tree-inner position-relative">
                                <div class="img-outer">
                                <img src="{{asset('btcworld/img/logo-icon.png')}}" alt="" class="img-fluid"/>
                                </div>
                                <div class="content-outer">
                                <h4 id="left_2_registerId">Id Here</h4>
                                </div>
                                <div class="tree-detail-outer">
                                <ul>
                                    <li>Wallet Addr</li>
                                    <li id="left_2_walletAddr"></li>
                                    <li>Left Amount</li>
                                    <li id="left_2_left_bussiness"></li>
                                    <li>Right Amount</li>
                                    <li id="left_2_right_bussiness"></li>
                                    <li>Total Business</li>
                                    <li id="left_2_total_bussiness"></li>
                                    <li>Date</li>
                                    <li id="left_2_created_at"></li>
                                    <li>Package Amt</li>
                                    <li id="left_2_amount"></li>
                                </ul>
                                </div>
                                <a href="javascript:void(0)" id="left_2_user" class="full-card-link position-absolute userClickTree"></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                        <div class="col-6 border-outer border-top-right">
                            <div class="tree-outer level-three-right text-center">
                            <div class="tree-inner position-relative">
                                <div class="img-outer">
                                <img src="{{asset('btcworld/img/logo-icon.png')}}" alt="" class="img-fluid"/>
                                </div>
                                <div class="content-outer">
                                <h4 id="right_1_registerId">Id Here</h4>
                                </div>
                                <div class="tree-detail-outer">
                                <ul>
                                    <li>Wallet Addr</li>
                                    <li id="right_1_walletAddr"></li>
                                    <li>Left Amount</li>
                                    <li id="right_1_left_bussiness"></li>
                                    <li>Right Amount</li>
                                    <li id="right_1_right_bussiness"></li>
                                    <li>Total Business</li>
                                    <li id="right_1_total_bussiness"></li>
                                    <li>Date</li>
                                    <li id="right_1_created_at"></li>
                                    <li>Package Amt</li>
                                    <li id="right_1_amount"></li>
                                </ul>
                                </div>
                                <a href="javascript:void(0)" id="right_1_user" class="full-card-link position-absolute userClickTree"></a>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 border-outer border-top-left">
                            <div class="tree-outer level-three-right text-center">
                            <div class="tree-inner position-relative">
                                <div class="img-outer">
                                <img src="{{asset('btcworld/img/logo-icon.png')}}" alt="" class="img-fluid"/>
                                </div>
                                <div class="content-outer">
                                <h4 id="right_2_registerId">Id Here</h4>
                                </div>
                                <div class="tree-detail-outer right-auto">
                                <ul>
                                    <li>Wallet Addr</li>
                                    <li id="right_2_walletAddr"></li>
                                    <li>Left Amount</li>
                                    <li id="right_2_left_bussiness"></li>
                                    <li>Right Amount</li>
                                    <li id="right_2_right_bussiness"></li>
                                    <li>Total Business</li>
                                    <li id="right_2_total_bussiness"></li>
                                    <li>Date</li>
                                    <li id="right_2_created_at"></li>
                                    <li>Package Amt</li>
                                    <li id="right_2_amount"></li>
                                </ul>
                                </div>
                                <a href="javascript:void(0)" id="right_2_user" class="full-card-link position-absolute userClickTree"></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
		</div>
	</div>
	@include("admin.adminCommon.footer")