
<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from html.dreamitsolution.net/cryptobit/crypto/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 09:10:59 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Kaizen Fintech</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" type="text/css" media="all" />

	<!-- Jquery UI Tab css -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.min.css') }}" type="text/css" media="all" >
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" type="text/css" media="all" />
	<!-- nivo-slider CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/nivo-slider.css') }}" type="text/css" media="all" />
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}" type="text/css" media="all" />
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/animated-text.css') }}" type="text/css" media="all" />
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}" type="text/css" media="all" />
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}" type="text/css" media="all" />
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/theme-default.css') }}" type="text/css" media="all" />
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet"  href="{{ asset('frontend/style.css') }}" type="text/css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/venobox/venobox.css') }}" type="text/css" media="all" />
	<!-- widget CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/widget.css') }}" type="text/css" media="all" />
	<!-- Swiper Slider -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/animated-text.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" type="text/css" media="all" />
    <meta name="csrf-token" content="@php echo csrf_token(); @endphp">
 <style>
	 .token-thumb img{
		 max-width: 64px;
	 }
	 .token-text{
		 margin-top: 18px;
	 }

 </style>
</head>
<body>
	<!--==================================================-->
	<!--Start Header Section-->
	<!--===================================================-->
	<div class="header-area" id="sticky-header">
		<div class="container">
			<div class="row align-items-center d-flex">
				<div class="col-lg-3">
					<div class="header-logo">
						<a class="main-logo" href="index.html"><img src="{{asset('frontend/assets/images/other.png')}}" alt=""></a>
						<a class="stiky-logo" href="index.html"><img src="{{asset('frontend/assets/images/one.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-lg-9">
					<nav class="cryptozen_menu">
						<div class="header-menu">
							<ul class="nav_scroll">
								<li><a href="index.html">Home </a>
									<!--  -->
								</li>
								<li><a href="about.html">About Us</a>
								</li>
								<li><a href="#">Plan </a>
								</li>
								<li><a href="#">FAQ</a>
								</li>

							</ul>
							{{-- <div class="header-btn">
								<a href="#">Register</a>
							</div>
							<div class="header-btn">
								<a href="#">Login</a>
							</div> --}}

                            <div class="header-btn">
                                <a class="" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#register-popup"><i class="far fa-user"></i> Register Up </a>
                                <a class="" onclick="login();" href="javascript:void(0);"><i class="far fa-user"></i> Login In</a>
                            </div>
							<!-- <div class="sidebar">
								<div class="header-src-btn">
									<div class="search-box-btn search-box-outer"><i class="fas fa-search"></i></div>
								</div>
								<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>
							</div> -->
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- mobile menu seection -->
	<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
		<div class="mobile-menu">
			<nav class="itsoft_menu">
				<ul class="nav_scroll">
					<li><a href="index.html">Home</a>
					</li>
					<li><a href="about.html">about</a>
					</li>
					<li><a href="#">pages</a>
					</li>
					<li><a href="road-map.html">road map</a>
					</li>
					<li><a href="team.html">team</a>
					</li>
					<li><a href="contact.html">contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- mobile menu seection -->
	<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
		<div class="mobile-menu">
			<nav class="itsoft_menu">
				<ul class="nav_scroll">
					<li><a href="#">demo</a>
						<div class="sub-menu">
							<ul>
								<li><a href="index.html">homepage one</a></li>
								<li><a href="index-2.html">homepage two </a></li>
								<li><a href="index-3.html">homepage three </a></li>
								<li><a href="index-4.html">homepage four</a></li>
								<li><a href="index-9.html">homepage five New</a></li>
								<li><a href="index-6.html">animation page</a></li>
								<li><a href="index-5.html">Landing Page 01</a></li>
								<li><a href="index-7.html">Landing Page 02</a></li>
								<li><a href="index-8.html">Home Video</a></li>
								<li><a href="index-10.html">Home Particles</a></li>
							</ul>
						</div>
					</li>
					<li><a href="about.html">about</a>
					</li>
					<li><a href="#">pages</a>
						<div class="sub-menu">
							<ul>
								<li><a href="about.html">about us </a></li>
								<li><a href="team.html">our team</a></li>
								<li><a href="token.html">token</a></li>
								<li><a href="road-map.html">road</a></li>
								<li><a href="contact.html">contact</a></li>
								<li><a href="choose.html">choose</a></li>
								<li><a href="faq.html">faq</a></li>
								<li><a href="blog-details.html">blog details</a></li>
								<li><a href="blog-grid.html">blog grid</a></li>
							</ul>
						</div>
					</li>
					<li><a href="road-map.html">road map</a>
					</li>
					<li><a href="team.html">team</a>
					</li>
					<li><a href="contact.html">contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!--==================================================-->
	<!--Start Carousel Slider Section-->
	<!--===================================================-->
<div class="slider-area style-five d-flex align-items-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6">
				<div class="slider-content">
					<h4 class="wow fadeInUp" data-wow-delay=".2s"> <span class="other">$</span>Secure & Safe Crypto Currency</h4>
					<h1 class="wow fadeInUp" data-wow-delay=".4s">Automated crypto <span>Investing While</span> You Explore</h1>
					<p class="wow fadeInUp" data-wow-delay=".6s">Connect Stoic Al Strategy To Your Exchange Account Earn More than The Average Crypto Trader </p>
					<div class="slider-button wow fadeInUp" data-wow-delay=".8s">
						<a href="#"> <i class="flaticon-play-arrow"> </i>Register</a>

					</div>
					<div class="slider-btn wow fadeInUp" data-wow-delay=".9s">
						<a href="#"> <i class="flaticon-file"> </i>Presentation</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="slider-thumb">
					<img src="{{ asset('frontend/assets/images/banner/one.png')}}" alt="">
					<div class="hero-shape rotatemeTwo">
						<img src="{{ asset('frontend/assets/images/banner/five.png')}}" alt="">
					</div>
					<div class="hero-shape3 rotateme">
						<img src="{{ asset('frontend/assets/images/banner/two.png')}}" alt="">
					</div>
					<div class="hero-shape4">
						<img src="{{ asset('frontend/assets/images/new/two.png')}}" alt="">
					</div>
					<div class="hero-shape5">
						<img src="{{ asset('frontend/assets/images/new/three.png')}}" alt="">
					</div>
					<!-- <div class="hero-shape7 bounce-animate2">
						<img src="assets/images/new/four.png" alt="">
					</div> -->
					<!-- <div class="hero-shape8">
						<img src="assets/images/new/nine.png" alt="">
					</div> -->

				</div>
			</div>
		</div>
		<div class="shape-one bounce-animate3">
			<img src="{{ asset('frontend/assets/images/banner/four.png')}}" alt="">
		</div>
	</div>
</div>
<!-- feature section -->
<!--  -->
<!-- about section -->
<div class="about-section style-three pt-100 pb-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="dreamit-section-title two text-center pb-20">
					<div class="dreamit-section-sub-title">
						<h5> <img src="{{ asset('frontend/assets/images/new/title-img.png')}}" alt="">  About ICO</h5>
					</div>
					<div class="dreamit-section-main-title">
						<h1>Trade Smarter With Kaizen Fintech</h1>
					</div>
					<!-- <div class="dreamit-section-content-text">
						<p>Monotonectally productivate virtual benefits vis-a-vis clicks
						ship. Seamlessly generate user friendly</p>
					</div> -->
				</div>
			</div>
		</div>
		<div class="row pt-30 align-items-center">
			<div class="col-lg-6 col-md-6">
				<div class="about-box">
					<div class="about-thumb">
						<img src="{{ asset('frontend/assets/images/new/about.png')}}" alt="">
						<div class="about-shape">
							<img src="{{ asset('frontend/assets/images/new/about-shape.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="about-single-icon-box d-flex">
					<div class="about-icon-thumb">
						<img src="{{ asset('frontend/assets/images/new/icon.png')}}" alt="">
					</div>
					<div class="about-content">
						<h2>Unified Experience Upgrade</h2>
						<p>Trade on all top tier exchanges from one, fast and intuitive interface featuring various order types for every trader.</p>
					</div>
				</div>
				<div class="about-single-icon-box d-flex">
					<div class="about-icon-thumb">
						<img src="{{ asset('frontend/assets/images/new/icon2.png')}}" alt="">
					</div>
					<div class="about-content">
						<h2>Premium Bot Powers</h2>
						<p>Sophisticated trading made simple, choose from pre-built popular strategies, customize, and go live in minutes.</p>
					</div>
				</div>
				<div class="about-single-icon-box d-flex">
					<div class="about-icon-thumb">
						<img src="{{ asset('frontend/assets/images/new/icon3.png')}}" alt="">
					</div>
					<div class="about-content">
						<h2>Boosted Portfolio Analytics</h2>
						<p>Monitor all of your assets from exchanges and even offline wallets to track your performance over time.</p>
					</div>
				</div>
				<!--  -->
				<div class="about-single-icon-box d-flex">
					<div class="about-icon-thumb">
						<img src="{{ asset('frontend/assets/images/new/icon3.png')}}" alt="">
					</div>
					<div class="about-content">
						<h2>More Valuable Charts</h2>
						<p>Go beyond market cap rankings with integrated market screener and charts coupled with high quality streaming data.</p>
					</div>
				</div>
				<div class="about-single-icon-box d-flex">
					<div class="about-icon-thumb">
						<img src="{{ asset('frontend/assets/images/new/icon3.png')}}" alt="">
					</div>
					<div class="about-content">
						<h2>Functional Asset Research</h2>
						<p>Skip the noise of social media and ad-blanketed news sites with market insights from respected industry insiders.</p>
					</div>
				</div>
				<div class="about-single-icon-box d-flex">
					<div class="about-icon-thumb">
						<img src="{{ asset('frontend/assets/images/new/icon3.png')}}" alt="">
					</div>
					<div class="about-content">
						<h2>Personalized for You</h2>
						<p>View prices & portfolio values in your preferred currency, save charts, and customize your trading interface layout.</p>
					</div>
				</div>
				<!--  -->

			</div>
		</div>
		<div class="about-shape-one bounce-animate2">
			<img src="{{ asset('frontend/assets/images/new/round.png')}}" alt="">
		</div>
	</div>
</div>
<!-- token -section -->
<div class="token-section style-four pt-50 pb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="dreamit-section-title two text-center pb-20">
					<div class="dreamit-section-sub-title">
						<h5> <img src="{{ asset('frontend/assets/images/new/title-img.png')}}" alt="">  Kaizen Flntech</h5>
					</div>
					<div class="dreamit-section-main-title">
						<h1>Staking Plan</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-10">
			<div class="col-lg-3 col-md-6">
				<div class="single-token-box">
					<div class="token-thumb">
						<div class="token-img">
						<img src="{{ asset('frontend/assets/images/new/token-three.png')}}" alt="">
				      	</div>
						  <div class="token-text">
						 <h3>Gold</h3>
						 <h6>$-400$ </h6>
						<h6>48 Months</h6>
						<h6>2% Monthly</h6>
					</div>
					</div>
					<div class="token-content">
						<div class="token-btn">
							<a href="#"><i class="flaticon-checked"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-token-box">
					<div class="token-thumb">
						<div class="token-img">
							<img src="{{ asset('frontend/assets/images/new/Platinum.png')}}" alt="">
							  </div>
							  <div class="token-text">
							 <h3>Platinum </h3>
							 <h6>600$-2000$</h6>
							<h6>48 Months</h6>
							<h6>3% Monthly</h6>
						</div>
					</div>
					<div class="token-content">
						<div class="token-btn">
							<a href="#"><i class="flaticon-checked"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-token-box">
					<div class="token-thumb">
						<div class="token-img">
							<img src="{{ asset('frontend/assets/images/new/Diamond.png')}}" alt="">
							  </div>
							  <div class="token-text">
							 <h3>Diamond </h3>
							 <h6>3000$-8000$ </h6>
							<h6>48 Months</h6>
							<h6>4% Monthly</h6>
						</div>
					</div>
					<div class="token-content">
						<div class="token-btn">
							<a href="#"><i class="flaticon-checked"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-token-box">
					<div class="token-thumb">
						<div class="token-img">
							<img src="{{ asset('frontend/assets/images/new/Crown.png')}}" alt="">
							  </div>
							  <div class="token-text">
							 <h3>Crown </h3>
							 <h6>10000$-15000$</h6>
							<h6>48 Months</h6>
							<h6>5% Monthly</h6>
						</div>
					</div>
					<div class="token-content">
						<div class="token-btn">
							<a href="#"><i class="flaticon-checked"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- service section -->
<div class="choose-section style-two pt-90 pb-70">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="dreamit-section-title two pb-20">
					<div class="dreamit-section-sub-title">
						<h5> <img src="{{ asset('frontend/assets/images/new/title-img.png')}}" alt=""> Trading Platform</h5>
					</div>
					<div class="dreamit-section-main-title">
						<h1>Want to dabble into cryptocurrency? <br> Facing dread of losing & risk?</h1>
					</div>
					<div class="dreamit-section-content-text">
						<p>Join us and start trading smartly, risk -free to draw growing profit. Invest your currency with us and we trade for you while offering multiple bonuses and profits. For beginners crypto trading little strenuous and they can be cranky while facing loses & risks. If you are a novice investor then Kaizen Fintech  is perfect ground for you. Kaizen Fintech, Trade for you and gather dynamic benefits on your investments. No need to face risks, no fear to lose money or digital currency; simply invest your desired currency  with us and we trade smartly with experts and you will get bonus and profits for sure on invested amount. Our team of experts adopts out-of- box strategies to scale up your profits and analysis the market fluctuations and set a streamlined target to execute extravaganza strategies.</p>
					</div>
					<div class="dreamit-content-text-inner">
						<p><b> Most Significant Strategic plan to work</b>
						Seamlessly redefine ethical materials through ours high-payoff growth strategie
							appChoose the best coins which are more predictable than other small coins and lead to generate more profit for you.
							Pick Out Top Traded Coins
							Research on previous fluctuations and buy more coins what will more likely go up
							acknowledge the daily market while trading
							Sell coins that might go down.</P>
					</div>
					<!-- <div class="choose-btn">
						<a href="#"><i class="flaticon-plus"></i> Read More</a>
					</div> -->
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="choose-thumb">
					<img src="{{ asset('frontend/assets/images/new/single.png')}}" alt="">
				</div>

			</div>
		</div>

	</div>
</div>
<!-- service section -->
<div class="service-section style-three pt-50 pb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="dreamit-section-title two text-center pb-20">
					<div class="dreamit-section-sub-title">
						<h5> <img src="{{ asset('frontend/assets/images/new/title-img.png')}}" alt="">  Token Rating</h5>
					</div>
					<div class="dreamit-section-main-title">
						<h1>Most Significant</h1>
					</div>
					<div class="dreamit-section-content-text">
						<p>Monotonectally productivate virtual benefits vis-a-vis clicks
						ship. Seamlessly generate user friendly</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-40">
			<div class="col-lg-6 col-md-6">
				<div class="single-service-box d-flex">
					<div class="service-thumb">
						<img src="{{ asset('frontend/assets/images/new/dolar.png')}}" alt="">
					</div>
					<div class="service-content">
						<h3>Secure Payment</h3>
						<p>Competently embrace sticky models whereas  is
							leadership. Energistically coordinate unique meth
							without sclient-centereds netwo embrace stickys
						leadership energistically done.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-service-box d-flex">
					<div class="service-thumb">
						<img src="{{ asset('frontend/assets/images/new/dolar2.png')}}" alt="">
					</div>
					<div class="service-content">
						<h3>Universal Access</h3>
						<p>Competently embrace sticky models whereas  is
							leadership. Energistically coordinate unique meth
							without sclient-centereds netwo embrace stickys
						leadership energistically done.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-service-box d-flex">
					<div class="service-thumb">
						<img src="{{ asset('frontend/assets/images/new/dolar3.png')}}" alt="">
					</div>
					<div class="service-content">
						<h3>Early Bonus Paid</h3>
						<p>Competently embrace sticky models whereas  is
							leadership. Energistically coordinate unique meth
							without sclient-centereds netwo embrace stickyassets/images/new/dolar3.pngs
						leadership energistically done.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-service-box d-flex">
					<div class="service-thumb">
						<img src="{{ asset('frontend/assets/images/new/dolar4.png')}}" alt="">
					</div>
					<div class="service-content">
						<h3>Several Profit Token</h3>
						<p>Competently embrace sticky models whereas  is
							leadership. Energistically coordinate unique meth
							without sclient-centereds netwo embrace stickys
						leadership energistically done.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- table -->
<div class="table-section pt-80 pb-80">
	<div class="container">
		<div class="row">
			<div class="table-reponsive box">
				<div class="table-responsive-content">
					<h2>Matching Rewards</h2>
					<!-- <span>+0.36%</span>
					<p>Market up in the last 24 hours</p> -->
				</div>
				<table id="example" class="table table-striped table-bordered">
					<thead>
						<tr>

							<th id="avaiable">Rank</th>
							<th id="gainers">Matching Business</th>
							<th id=losers>Conditon</th>
							<th id=date>Reward </th>

						</tr>
					</thead>
					<tbody>
						<tr class="single">

							<td><img src="{{ asset('frontend/assets/images/new/0.png')}}" alt="">Rank 10</td>
							<td>$5,000</td>
							<td></td>
							<td>100</td>
						</tr>
						<tr class="one">

							<td><img src="{{ asset('frontend/assets/images/new/3.png')}}" alt=""> Rank 09</td>
							<td>$10000</td>
							<td>2 user of rank 10</td>
							<td>200</td>
						</tr>
						<tr class="double">

							<td><img src="{{ asset('frontend/assets/images/new/0.png')}}" alt="">Rank 08</td>
							<td>$50000</td>
							<td>2 user of rank 9</td>
							<td>200</td>
						</tr>
						<tr class="one">

							<td><img src="{{ asset('frontend/assets/images/new/3.png')}}" alt=""> Rank 07</td>
							<td>$100000</td>
							<td> 2 user of rank 8</td>
							<td>1000</td>
						</tr>
						<tr class="triple">

							<td><img src="{{ asset('frontend/assets/images/new/0.png')}}" alt="">Rank 06</td>
							<td>$200000</td>
							<td>2 user of rank 7</td>
							<td>2000</td>
						</tr>
						<tr class="one">

							<td><img src="{{ asset('frontend/assets/images/new/3.png')}}" alt="">Rank 05</td>
							<td>$400000</td>
							<td>2 user of rank 6</td>
							<td>4000</td>
						</tr>
						<tr class="triple">

							<td><img src="{{ asset('frontend/assets/images/new/0.png')}}" alt="">Rank 04</td>
							<td>$500000</td>
							<td>2 user of rank 5</td>
							<td>5000</td>
						</tr>
						<tr class="one">

							<td><img src="{{ asset('frontend/assets/images/new/3.png')}}" alt="">Rank 03</td>
							<td>$700000</td>
							<td>2 user of rank 4</td>
							<td>7000</td>
						</tr>
						<tr class="two">

							<td><img src="{{ asset('frontend/assets/images/new/0.png')}}" alt=""> Rank 02</td>
							<td>$800000</td>
							<td>2 user of rank 3</td>
							<td>8500</td>
						</tr>
						<tr class="two">

							<td><img src="{{ asset('frontend/assets/images/new/0.png')}}" alt=""> Rank 01</td>
							<td>$1000000</td>
							<td>2 user of rank 2</td>
							<td>10000</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- faq section -->
<div class="faq-section style-four pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="dreamit-section-title two text-center pb-20">
					<div class="dreamit-section-sub-title">
						<h5> <img src="{{ asset('frontend/assets/images/new/title-img.png')}}" alt="">  FAQS</h5>
					</div>
					<div class="dreamit-section-main-title">
						<h1>Frequently asked Question</h1>
					</div>
					<div class="dreamit-section-content-text">
						<p>Monotonectally productivate virtual benefits vis-a-vis clicks
						ship. Seamlessly generate user friendly</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-25">
			<div class="col-lg-12">
				<div class="tab-content text-center">
					<!-- <ul class="tabs">
						<li class="active" rel="tab1">General </li>
						<li rel="tab2"> Token  </li>
						<li rel="tab3">  Client </li>
						<li rel="tab4"> Pre ICO</li>
						<li rel="tab5"> Legal</li>
					</ul> -->
				</div>
			</div>
		</div>
		<div class="row align-items-center pt-20">
			<div class="col-lg-6 col-md-12">
				<div class="tab_container">
					<h3 class="d_active tab_drawer_heading" rel="tab1">Tab 1</h3>
					<div id="tab1" class="tab_content">
						<ul class="accordion">
							<li>
								<a>What is ICO</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
							<li>
								<a>How can I participate in the ICO Token sale?</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
							<li>
								<a>What cryptocurrencies can I use to purchase?</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime</p>
							</li>
							<li>
								<a>What cryptocurrencies can I use to purchase?</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled </p>
							</li>
						</ul>
					</div>
					<!-- #tab1 -->
					<h3 class="tab_drawer_heading" rel="tab2"> Token  </h3>
					<div id="tab2" class="tab_content">
						<ul class="accordion">
							<li>
								<a>What cryptocurrencies can I use to purchase?</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
							<li>
								<a>How can I participate in the ICO Token sale?</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
							<li>
								<a>Dolor sit Amet</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled </p>
							</li>
							<li>
								<a>Dolor sit Amet</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
						</ul>
					</div>
					<!-- #tab2 -->
					<h3 class="tab_drawer_heading" rel="tab3">  Client </h3>
					<div id="tab3" class="tab_content">

						<ul class="accordion">
							<li>
								<a>What is ICO</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
							<li>
								<a>Repellat Odit Aliquid</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled </p>
							</li>
							<li>
								<a>Dolor sit Amet</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled </p>
							</li>
							<li>
								<a>Dolor sit Amet</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
						</ul>
					</div>
					<!-- #tab3 -->
					<h3 class="tab_drawer_heading" rel="tab4"> Pre ICO</h3>
					<div id="tab4" class="tab_content">

						<ul class="accordion">
							<li>

								<a>What is ICO</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
							<li>
								<a>Repellat Odit Aliquid</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
							<li>
								<a>Dolor sit Amet</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
							<li>
								<a>Dolor sit Amet</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
						</ul>
					</div>
					<!-- #tab3 -->
					<h3 class="tab_drawer_heading" rel="tab5"> Legal</h3>
					<div id="tab5" class="tab_content">
						<ul class="accordion">
							<li>
								<a>What is ICO</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
							<li>
								<a>Repellat Odit Aliquid</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
							<li>
								<a>Dolor sit Amet</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
							<li>
								<a>Dolor sit Amet</a>
								<p>Holisticly coordinate highes standards in communities rather than cute
									ures. Distinctivelys supply highly efficients networks for integrated fors
								vize adaptive value through enabled</p>
							</li>
						</ul>
					</div>
					<!-- #tab4 -->
				</div>
				<!-- .tab_container -->
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="faq-thumb">
					<img src="{{ asset('frontend/assets/images/faq.png')}}" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- start blog section -->
<!-- <div class="blog-section style-two pt-95 pb-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="dreamit-section-title two text-center pb-20">
					<div class="dreamit-section-sub-title">
						<h5> <img src="assets/images/new/title-img.png" alt="">  Latest News</h5>
					</div>
					<div class="dreamit-section-main-title">
						<h1>Recent Blog Post</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-30">
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="blog-thumb">
						<img src="assets/images/new/blog3.png" alt="">
					</div>
					<div class="blog-content">
						<div class="meta-box">
							<div class="meta-icon">
								<i class="fas fa-calculator"></i>
							</div>
							<div class="meta-date">
								<p>10 jan 2022</p>
							</div>
						</div>
						<div class="blog-title">
							<a href="blog-details.html"><h2>Cryptocash is a clean & modern coin</h2></a>
						</div>
						<div class="blog-content-text">
							<p>Monotonectally fabricate extensible in the
								after of ours business experiences</p>
						</div>
						<div class="blog-btn">
							<a href="#">Read More <i class="fas fa-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="blog-thumb">
						<img src="assets/images/new/blog2.jpg" alt="">
					</div>
					<div class="blog-content">
						<div class="meta-box">
							<div class="meta-icon">
								<i class="fas fa-calculator"></i>
							</div>
							<div class="meta-date">
								<p>10 Feb 2022</p>
							</div>
						</div>
						<div class="blog-title">
							<a href="blog-details.html"><h2>How & Where To Market Your ICO</h2></a>
						</div>
						<div class="blog-content-text">
							<p>Monotonectally fabricate extensible in the
								after of ours business experiences</p>
						</div>
						<div class="blog-btn">
							<a href="#">Read More <i class="fas fa-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="blog-thumb">
						<img src="assets/images/new/blog.png" alt="">
					</div>
					<div class="blog-content">
						<div class="meta-box">
							<div class="meta-icon">
								<i class="fas fa-calculator"></i>
							</div>
							<div class="meta-date">
								<p>10 Mar 2022</p>
							</div>
						</div>
						<div class="blog-title">
							<a href="blog-details.html"><h2>Pros & Cons of Premined Crypto</h2></a>
						</div>
						<div class="blog-content-text">
							<p>Monotonectally fabricate extensible in the
								after of ours business experiences</p>
						</div>
						<div class="blog-btn">
							<a href="#">Read More <i class="fas fa-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- contact section -->
<!-- <div class="contact-section style-four pt-110 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="dreamit-section-title two text-center pb-20">
					<div class="dreamit-section-sub-title">
						<h5> <img src="assets/images/new/title-img.png" alt="">  Contacts</h5>
					</div>
					<div class="dreamit-section-main-title">
						<h1>Stay Update With Us</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-20">
			<div class="col-lg-4 col-md-6">
				<div class="single-contact-icon-box d-flex align-items-center">
					<div class="contact-icon">
						<i class="flaticon-message"></i>
					</div>
					<div class="contact-content-text">
						<p>example@ gmail.Com</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-contact-icon-box d-flex align-items-center">
					<div class="contact-icon">
						<i class="flaticon-call"></i>
					</div>
					<div class="contact-content-text">
						<p>+ 00 234 (9606)170</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-contact-icon-box d-flex align-items-center">
					<div class="contact-icon">
						<i class="flaticon-paper-plane"></i>
					</div>
					<div class="contact-content-text">
						<p>Join Us on Telegram</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row upper12 align-items-center pt-60">
			<div class="col-lg-2"></div>
			<div class="col-lg-8 col-md-12 p-0">
				<div class="contact_from upper10">
					<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
						<div class="row">
							<div class="col-lg-6">
								<div class="form_box mb-2">
									<input class="form-control" type="text" name="name" placeholder="Name">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form_box mb-2">
									<input  class="form-control" type="text" name="email" placeholder="Email">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form_box mb-1">
									<input  class="form-control" type="text" name="phone" placeholder="Phone">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form_box mb-1">
									<input  class="form-control" type="text" name="Web" placeholder="Website">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form_box">
									<textarea  class="form-control" name="message" id="message" cols="10" rows="5" placeholder=" message"></textarea>
								</div>
							</div>
							<div class="quote_btn text_center mt-15">
								<button class="btn" type="submit"> SUBMIT MESSAGE </button>
							</div>
						</div>
					</form>
					<div id="status"></div>
				</div>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div> -->
	<!--==================================================-->
	<!--START FOOTER SECTION-->
	<!--===================================================-->
	<div class="footer pt-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="footer-location-box">
						<div class="footer-logo">
							<img src="{{ asset('frontend/assets/images/one.png')}}" alt="Footer-logo">
						</div>
						<div class="footer-content">
							<p>Connect Stoic Al Strategy To Your Exchange Account Earn More than The Average Crypto Trader </p>
						</div>
					</div>

				</div>
				<div class="col-lg-4 col-md-6">
					<div class="widget">
						<div class="footer-quick-link">
							<div class="footer-widget-title">
								<h3>Social Media</h3>
							</div>
							<div class="footer-quick-link-list ">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
									<li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
									<li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
									<li><a href="#"><i class="fab fa-telegram-plane"></i> Telegram</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="widget">
						<div class="footer-quick-link-list">
							<div class="footer-widget-title">
								<h3>Quick Links</h3>
							</div>
							<div class="footer-quick-link-list">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Plan</a></li>
									<li><a href="#">FAQ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="widget">
						<!-- <div class="footer-popular-post ">
							<div class="footer-widget-title two">
								<h3>Newsletter</h3>
							</div>
							<div class="footer-content-text">
								<p>Sent Us a Newsletter And Get Update</p>
							</div>
							<form>
								<div class="subscribe-area">
									<input class="subscribe-mail-box" type="email"  placeholder="Enter Your Email...." required="">
									<button class="subscribe-button" type="submit">Subscribe</button>
								</div>
							</form>

						</div> -->
					</div>

				</div>
			</div>
			<div class="row upper11 mt-50 align-items-center">
				<div class="col-lg-10 col-md-10">
					<div class="footer-copyright-text">
						<p class="text-white">Copyright © Kaizen Fintech all rights reserved. </p>
					</div>
				</div>
				<!-- <div class="col-lg-6 col-md-6">
					<div class="footer-copyright-content">
						<div class="footer-sicial-address-link">
							<ul>
								<li><a href="#">Terms Condition</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- Start Search Popup Area -->
	<!--==================================================-->
	<div class="search-popup">
		<button class="close-search style-two"><i class="fas fa-times"></i></button>
		<button class="close-search"><i class="fas fa-arrow-up"></i></button>
		<form method="post" action="#">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button type="submit"><i class="fas fa-search"></i></button>
			</div>
		</form>
	</div>
	<!--==================================================-->
	<!--start sidebar  SECTION-->
	<!--===================================================-->

		<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="dt-overlay bt-black"></div>
		<div class="dt-sidebar-widget">
			<div class="sidebar-container">
				<div class="widget-top">
					<a href="#" class="close">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">

					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="index.html"><img src="{{ asset('frontend/assets/images/one.png')}}" alt="" /></a>
							</div>
							<div class="content-text">
								<p class="text-white">The argument in placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas etiusto odio data center.</p>

							</div>
							<div class="contact-info">
								<div class="location-content d-flex">
									<div class="location-icon">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="location-content-text">
										<p>13/A Tropical center Rs <br>london WC1B 4EA </p>
									</div>
								</div>
							</div>
							<div class="footer-location-box">
								<div class="location-content d-flex">
									<div class="location-icon">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="location-content-text">
										<p>+8 91230 456 788</p>
									</div>
								</div>
							</div>
							<div class="footer-location-box">
								<div class="location-content">
									<div class="location-title">
										<h2>Open Hours</h2>
									</div>
									<div class="location-content-text">
										<p>Mon-Sat: 8 am-5 pm <br>Sunday Closed</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Social Box -->
						<div class="social-icon pt-40">
							<ul>
								<li>
									<a href="#"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-pinterest"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-linkedin-in"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!--start fTo Top-->
	<!--===================================================-->
	<div class="scroll-area">
		<div class="top-wrap">
			<div class="go-top-btn-wraper">
				<div class="go-top go-top-button">
					<i class="fas fa-arrow-up"></i>
					<i class="fas fa-arrow-up"></i>
				</div>
			</div>
		</div>
	</div>

   	<!-- jquery js -->
	<script src="{{ asset('frontend/assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
	<!-- bootstrap js -->
	<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
	<!-- carousel js -->
	<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
	<!-- counterup js -->
	<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
	<!-- waypoints js -->
	<script src=" {{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
	<!-- appear js -->
	<script src="{{ asset('frontend/assets/js/jquery.appear.js') }}"></script>
	<!-- wow js -->
	<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
	<!-- imagesloaded js -->
	<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- venobox js -->
	<script src="{{ asset('frontend/venobox/venobox.js') }}"></script>
	<!-- ajax mail js -->
	<script src="{{ asset('frontend/assets/js/ajax-mail.js') }}"></script>
	<!--  animated-text js -->
	<script src="{{ asset('frontend/assets/js/animated-text.js') }}"></script>
	<!-- venobox min js -->
	<script src="{{ asset('frontend/venobox/venobox.min.js') }}"></script>
	<!-- isotope js -->
	<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
	<!-- jquery nivo slider pack js -->
	<script src="{{ asset('frontend/assets/js/jquery.nivo.slider.pack.js') }}"></script>
	<!-- jquery meanmenu js -->

	<script src="{{ asset('frontend/assets/js/jquery.meanmenu.js') }}"></script>
	<!-- jquery scrollup js -->
	<script src="{{ asset('frontend/assets/js/jquery.scrollUp.js') }}"></script>
	<!-- Jquery UI Tab JS -->
	<script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
	<!--Swiper Slider-->
	<script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
	<!--theme js-->
	<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/theme.js') }}"></script>
	<!--jquery js-->
	<script>
		 $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });

    $('.go-top').on('click', function () {
        $("html, body").animate({
            scrollTop: "0"
        }, 1200);
    });
	</script>

	<script>
		"use strict";
		jQuery,
		jQuery(document).ready(function (o) {
			0 < o(".offset-side-bar").length &&
			o(".offset-side-bar").on("click", function (e) {
				e.preventDefault(), e.stopPropagation(), o(".cart-group").addClass("isActive");
			}),
			0 < o(".close").length &&
			o(".close").on("click", function (e) {
				e.preventDefault(), o(".cart-group").removeClass("isActive");
			}),
			0 < o(".navSidebar-button").length &&
			o(".navSidebar-button").on("click", function (e) {
				e.preventDefault(), e.stopPropagation(), o(".info-group").addClass("isActive");
			}),
			0 < o(".close").length &&
			o(".close").on("click", function (e) {
				e.preventDefault(), o(".info-group").removeClass("isActive");
			}),
			o("body").on("click", function (e) {
				o(".info-group").removeClass("isActive"), o(".cart-group").removeClass("isActive");
			}),
			o(".dt-sidebar-widget").on("click", function (e) {
				e.stopPropagation();
			}),
			0 < o(".xs-modal-popup").length &&
			o(".xs-modal-popup").magnificPopup({
				type: "inline",
				fixedContentPos: !1,
				fixedBgPos: !0,
				overflowX: "auto",
				closeBtnInside: !1,
				callbacks: {
					beforeOpen: function () {
						this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
					},
				},
			});
		});

	</script>
	<script>

// Set the date we're counting down to
var countDownDate = new Date("November 30, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"

  //document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  document.getElementById("days").innerHTML = days ;
  document.getElementById("hours").innerHTML = hours ;
  document.getElementById("minutes").innerHTML = minutes ;
  document.getElementById("seconds").innerHTML = seconds ;

  // If the count down is over, write some text
  if (distance < 0) {
  	clearInterval(x);
  	document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

</script>
<script>

  /* Extra class "tab_last"
     to add border to right side
     of last tab */
     $('ul.tabs li').last().addClass("tab_last");

     $(document).ready(function() {
     	$('#example').DataTable();

     	$('#avaiable').on('click',function(){
     		$('.single').show();
     		$('.double').hide();
     		$('.one').hide();
     		$('triple').hide();
     	});

     	$('#gainers').on('click',function(){
     		$('triple').show();
     		$('.single').hide();
     		$('.double').hide();
     	});

     	$('#losers').on('click',function(){
     		$('triple').hide();
     		$('.single').hide();
     		$('.double').hide();
     		$('.one').show();
     	});

     	$('#date').on('click',function(){
     		$('triple').hide();
     		$('.single').hide();
     		$('.double').hide();
     		$('.one').hide();
     		$('.two').show();
     	});
     	$('#all_token').on('click',function(){
     		$('triple').show();
     		$('.single').show();
     		$('.double').show();
     		$('.two').show();
     		$('.one').show();
     	});

     } );
 </script>
 <script>

 	var xValues = ["Contingency", "France", "Spain", "USA", "Argentina"];
 	var yValues = [40, 49, 44, 24, 15];
 	var barColors = [
 	"#AA3BC5",
 	"#09B1F2",
 	"#1FD5A4",
 	"#FEB81A",
 	"#F97431"
 	];
 	new Chart("myChart", {
 		type: "polarArea",
 		data: {
 			labels: xValues,
 			datasets: [{
 				label: 'Dataset 1',
 				backgroundColor: barColors,
 				data: yValues
 			}]
 		},
 		options: {
 			title: {
 				display: true,
 				text: "World Wide Wine Production 2018"
 			},
 		}
 	});

    // Style Two
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = [
    "#4DB866",
    "#EDB019",
    "#E36D23",
    "#F08A1E",
    "#39A2D1"
    ];

    new Chart("yourChart", {
    	type: "doughnut",
    	data: {
    		labels: xValues,
    		datasets: [{
    			backgroundColor: barColors,
    			data: yValues
    		}]
    	},
    	options: {
    		title: {
    			display: true,
    			text: "World Wide Wine Production 2018"
    		},
    	}
    });


</script>

<script src="{{asset('backend/assets/js/jquery-3.6.0.min.js')}}" ></script>
<script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
<script src="{{asset('backend/assets/js/idoTest.js')}}?</php echo time(); ?>"></script>
<script src="{{asset('backend/assets/js/jquery.toaster.js')}}"></script>
    <script type="text/javascript">
        checkAllowance();

        function deposit_new(valPara){
            var amt   = $("#amt_"+valPara).val();
            // var limit = $("#limit_"+valPara).val();
            deposit(amt);
        }

        // setTimeout(() => {
        //     checkuser();
        // }, 2000);

      function copyElementText(id) {
        var dummyLink = $("#"+id).html();
        var dummy = $('<input>').val(dummyLink).appendTo('body').select();
        dummy.focus();
        document.execCommand('copy');
        $.toaster({ priority : 'success', title : 'Copy Alert !', message :  "Copied" });
      }

     // AOS.init();
    </script>

<div class="register-popup modal fade" id="register-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button> -->
            <div class="modal-body">
                <div class="form-group">
                    <label>Refferal Code</label>
                    <input type="text" value="@php if(isset($registerId) && !empty($registerId)) { echo $registerId; } else { echo '100000'; } @endphp" name="registerId" id="registerId" placeholder="Refferal Code" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="position">Position</label>
                    <select class="form-control" id="position">
                      <option value="1">Left</option>
                      <option value="2">Right</option>
                    </select>
                </div>

                <div class="register-btn-outer text-center">
                    <a href="javascript:void(0)" onclick="registeration();" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<!-- Mirrored from html.dreamitsolution.net/cryptobit/crypto/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 09:11:18 GMT -->
</html>
