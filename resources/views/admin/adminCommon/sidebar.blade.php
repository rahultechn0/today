	<div class="sidebar-header">
		<div>
			<h4 class="logo-text">{{ env("APP_NAME") }}</h4>
		</div>
		<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
		</div>
	</div>
				<!--navigation-->
	<ul class="metismenu" id="menu">
		<li>
			<a href="{{ url('admin/dashboard') }}">
				<div class="parent-icon"><i class="bx bx-home-circle"></i>
				</div>
				<div class="menu-title">Dashboard</div>
			</a>
		</li>  
		<li>
			<a href="{{ url('admin/userlist') }}">
				<div class="parent-icon"><i class="bx bx-user"></i>
				</div>
				<div class="menu-title">User List</div>
			</a>
		</li> 
		<li>
			<a href="{{ url('admin/deposit-list') }}">
				<div class="parent-icon"><i class="bx bx-dollar"></i>
				</div>
				<div class="menu-title">Deposit List</div>
			</a>
		</li> 
		   
		<li>
			<a href="{{ url('admin/roi-report') }}">
				<div class="parent-icon"><i class="bx bx-book"></i>
				</div>
				<div class="menu-title">Roi Report</div>
			</a>
		</li>
		<li>
			<a href="{{ url('admin/level-report') }}">
				<div class="parent-icon"><i class="bx bx-book"></i>
				</div>
				<div class="menu-title">Leval Report</div>
			</a>
		</li>
		<li>
			<a href="{{ url('admin/referral-report') }}">
				<div class="parent-icon"><i class="bx bx-book"></i>
				</div>
				<div class="menu-title">Referral Report</div>
			</a>
		</li> 
		<li>
			<a href="{{ url('admin/incentive-report') }}">
				<div class="parent-icon"><i class="bx bx-book"></i>
				</div>
				<div class="menu-title">Incentive Report</div>
			</a>
		</li>   
		<!-- <li>
			<a href="{{ url('admin/matching-report') }}">
				<div class="parent-icon"><i class="bx bx-book"></i>
				</div>
				<div class="menu-title">Matching Report</div>
			</a>
		</li>
		<li>
			<a href="{{ url('admin/royal-report') }}">
				<div class="parent-icon"><i class="bx bx-book"></i>
				</div>
				<div class="menu-title">Royal House Report</div>
			</a>
		</li> 
		<li>
			<a href="{{ url('admin/lucky-draw-report') }}">
				<div class="parent-icon"><i class="bx bx-book"></i>
				</div>
				<div class="menu-title">Lucky Draw Report</div>
			</a>
		</li>  -->  
		<li>
			<a href="{{ url('admin/withdrawal-report') }}">
				<div class="parent-icon"><i class="bx bx-dollar"></i>
				</div>
				<div class="menu-title">Withdrawal Report</div>
			</a>
		</li>

		<li>
			<a href="{{ url('admin/set-price') }}">
				<div class="parent-icon"><i class="bx bx-dollar"></i>
				</div>
				<div class="menu-title">Set Price</div>
			</a>
		</li>

	</ul>
	<!--end navigation-->
	