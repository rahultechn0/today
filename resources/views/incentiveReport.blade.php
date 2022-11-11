<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Join Now</title>
    <link rel="stylesheet" href="{{asset('zerocoin/app/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('zerocoin/app/dist/app.css')}}">
    <link rel="stylesheet" href="{{asset('zerocoin/assets/font/font-awesome.css')}}">
    <link href="{{asset('zerocoin/app/dist/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('zerocoin/app/dist/swiper-bundle.min.css')}}" />
    <link rel="shortcut icon" href="{{asset('zerocoin/assets/images/favicon.png')}}">
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
  </head>
  <body class="home-3 header-fixed">
    <!-- Preloading -->
    <div class="preloader">
      <div class="icon"></div>
    </div>
    <!-- end Preloading -->
    <!-- Scroll Top -->
    <div class="progress-wrap active-progress">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
      </svg>
    </div>
    <!-- end Scroll Top -->
    <!-- Header -->
    <header id="header_main" class="header position-sticky">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header__body d-flex justify-content-between">
              <div class="header__logo">
                <a href="{{ url('users') }}">
                <img id="site-logo" src="{{asset('zerocoin/assets/images/logo.png')}}"
                  alt="MGR" 
                  data-retina="{{asset('zerocoin/assets/images/logo@2x.png')}}" data-width="217"
                  data-height="50">
                </a>
                <button class="toggle-navbar" type="button" data-toggle="collapse">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="header__right header__right2">
                <!-- /#main-nav -->
                <div class="button">
                  <a class="btn-action" href="{{ url('logout') }}">
                  Logout
                  </a>
                </div>
                <div class="mobile-button"><span></span></div>
                <!-- /.mobile-button -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>





    <div class="sidebar-nav-outer position-fixed">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('users') }}">dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('roi-report') }}">ROI Report</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ url('level-report') }}">Level Report</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ url('referral-report') }}">Referral Report</a>
          </li>
         
          <li class="nav-item">
          <a class="nav-link active" href="{{ url('incentive-report') }}">Incentive Report</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ url('withdrawal-report') }}">Withdrawal Report</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ url('network') }}">My Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('logout') }}">Logout</a>
          </li>
        </ul>
      </div>

    <div class="join-main-outer">
      <div class="container">
        
        <div class="mb-md-5">
          <h4 class="title">Incentive Report</h4>
          <div class="active-package-outer">
              <div class="table-responsive">
              <table class="">
                  <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Type</th>
                        <th>RegisterId</th>
                        <th>Amount</th>
                        <th>Date & Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($transactions as $key => $trans )
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>@php echo $trans['type']; @endphp</td>
                            <td>@php echo $trans->referralUser->registerId; @endphp</td>
                            <td>$@php echo $trans['amount']; @endphp</td>
                            <td>@php echo $trans['created_at']; @endphp</td>
                        </tr> 
                    @endforeach
                  </tbody>
              </table>
          </div>
          </div>
        </div>
        
      </div>
    </div>
    <footer class="footer style-2" id="footer">
      <div class="container">
        <div class="row">
          <div class="footer__body">
            <div class="col-xl-3 col-md-6 col-12">
              <div class="info">
                <img src="{{asset('zerocoin/assets/images/logo.png')}}" alt="MGR">
               <p class="desc fs-18">
                               Metaverse games are based on the Play to earn concept that allows players to win digital currency gaming items and sell them to earn real world money. Players can invite their social media friends in track with other players inside the metaverse and collaborate enjoy the games together 
                            </p>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6">
              <div class="link s1">
                <h5 class="title">Quick links</h5>
                <ul>
                  <li><a href="#">MGR Trading</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">Advertisement</a></li>

                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6">
              <div class="link s2">
                <h5 class="title">Help</h5>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Team Members</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Refund Policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
              <div class="newsletter">
                <h5 class="title">Social</h5>
                <ul class="social">
                 
                  <li><a target="_blank" href="https://www.twitter.com/mgrcoinofficial"><i class="fab fa-twitter"></i></a></li>
                  <li><a target="_blank" href="https://t.me/mgrnftprogram"><i class="fab fa-telegram"></i></a></li>
                  <li><a target="_blank" href="https://www.instagram.com/mgrcoin_official"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer_bottom">
            <p class="fs-16">Copyright © 2022, MetawersGamingRewards</p>
            <ul>
              <li><a href="#">Terms & Condition</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Cookie Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- end Footer -->
    <script src="{{asset('zerocoin/app/js/jquery.min.js')}}"></script>
    <script src="{{asset('zerocoin/app/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('zerocoin/app/js/swiper.js')}}"></script>
    <script src="{{asset('zerocoin/app/js/aos.js')}}"></script>
    <script type="text/javascript" src="{{asset('zerocoin/app/js/vanilla-tilt.js')}}"></script>
    <script src="{{asset('zerocoin/js/jquery.toaster.js')}}"></script>
    <script src="{{asset('zerocoin/js/zerocoin.js')}}"></script>
    <script type="text/javascript">
      $('.toggle-navbar').click(function(){
        $('.sidebar-nav-outer, .toggle-navbar').toggleClass('active');
      });
    </script>
    <script type="text/javascript">

      checkAllowance();    

      function deposit_new(valPara){
          var amt   = $("#amt_"+valPara).val();
          var limit = $("#limit_"+valPara).val();
          deposit(amt,limit);
      }

      setTimeout(() => {
        checkuser();
      }, 2000);

      function copyElementText(id) {
        var dummyLink = $("#"+id).html();
        var dummy = $('<input>').val(dummyLink).appendTo('body').select();
        dummy.focus();
        document.execCommand('copy');
        $.toaster({ priority : 'success', title : 'Copy Alert !', message :  "Copied" });             
      } 

      VanillaTilt.init(document.querySelector(".box-item"), {
          max: 25,
          speed: 400
      });
      
      //It also supports NodeList
      VanillaTilt.init(document.querySelectorAll(".box-item"));
    </script>
    <script>
      AOS.init();
    </script>
    <script src="{{asset('zerocoin/app/js/app.js')}}"></script>
  </body>
  <!-- Mirrored from surielementor.com/MGRhtml/OnePage.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2022 10:36:30 GMT -->
</html>