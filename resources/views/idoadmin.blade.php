<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mgrcoins</title>
    <link rel="stylesheet" href="{{asset('zerocoin/app/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('zerocoin/app/dist/app.css')}}">
    <link rel="stylesheet" href="{{asset('zerocoin/assets/font/font-awesome.css')}}">
    <link href="{{asset('zerocoin/app/dist/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('zerocoin/app/dist/swiper-bundle.min.css')}}" />
    <link rel="shortcut icon" href="{{asset('zerocoin/assets/images/favicon.png')}}">
	
    <meta name="csrf-token" content="@php echo csrf_token(); @endphp">
</head>
<body class="home-3 header-fixed">
  <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
    </svg>
    </div>
    <!-- Preloading -->
    <div class="preloader">
        <div class="icon"></div>
    </div>


    <!-- Header -->
    <header id="header_main" class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7">
                    <div class="header__body justify-content-between">
                        <div class="header__logo">
                            <a href="/">
                                <img id="site-logo" src="{{asset('zerocoin/assets/images/logo.png')}}"
                                alt="MGR" 
                                data-retina="{{asset('zerocoin/assets/images/logo@2x.png')}}" data-width="217"
                                data-height="50">
                            </a>
                        </div>
                        </div>
                        </div>
                        <div class="col-5">
                        <div class="header__right">
                           
                          
                            <div class="button">
                                <a class="btn-action" href="{{ url('/') }}">Home</a>
                            </div>
                            <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                        </div>
                    </div>
                
            </div>
        </div>
    </header>
   
       <section class="tf-section hero-slider">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-12 col-12"></div>
                <div class="col-xl-8 ">
                    <div class="ido_box">
                <nav>
 
</nav>
<div class="tab-content" id="nav-tabContent">
     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <h4>MGRSTACKING</h4>
            <div class="row ">
              <div class="form-group col-md-12 mb-4">
              Address : <span id="bnb_balances" >0xe5EB24BEB1fD489a43e65c11Fe75817c9775dE51</span>
              </div>
			  </div>
              <div class="row ">
              <div class="form-group col-md-6 mb-4">
                <input type="text" id="stacking_new_owner" class="control_new"  placeholder="New Owner">
              </div>
              <div class="form-group col-md-6 mb-4">
                 <button class="btn thm-btn yellow-bg" onclick="stackingNewOwnerFunc()"> Submit</button>
              </div>
            </div>
            
           
  </div>
<hr/>
  <div class="tab-content" id="nav-tabContent">
     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <h4>MGRIDO</h4>
            <div class="row ">
              <div class="form-group col-md-12 mb-4">
              Address : <span id="bnb_balances" >0x9917B8a86D37BE7F04247B35463AA104A1E9F300</span>
              </div>
			  </div>
              <div class="row ">
              <div class="form-group col-md-6 mb-4">
                <input type="text" id="mgrido_new_owner" class="control_new"  placeholder="New Owner">
              </div>
              <div class="form-group col-md-6 mb-4">
                 <button class="btn thm-btn yellow-bg" onclick="mgridoNewOwnerFunc()"> Submit</button>
              </div>
            </div>
            
           
  </div>
  <hr/>
  <div class="tab-content" id="nav-tabContent">
     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <h4>MGR Token</h4>
            <div class="row ">
              <div class="form-group col-md-12 mb-4">
              Address : <span id="bnb_balances" >0xd323CB6D95CA5E93c623F2733941790b543c5DE2</span>
              </div>
			  </div>
              <div class="row ">
              <div class="form-group col-md-6 mb-4">
                <input type="text" id="mgrtoken_new_owner" class="control_new"  placeholder="New Owner">
              </div>
              <div class="form-group col-md-6 mb-4">
                 <button class="btn thm-btn yellow-bg" onclick="mgrtokenNewOwnerFunc()"> Submit</button>
              </div>
            </div>
            
           
  </div>
 


  </div>
 
</div>            
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    
   

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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="{{asset('zerocoin/app/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('zerocoin/app/js/swiper.js')}}"></script>
    
    <script src="{{asset('zerocoin/app/js/aos.js')}}"></script>
    <script type="text/javascript" src="{{asset('zerocoin/app/js/vanilla-tilt.js')}}"></script>
    <script type="text/javascript">
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
    <script src="{{asset('zerocoin/js/jquery.toaster.js')}}"></script>
  <!--  <script src="{{asset('zerocoin/js/zerocoin.js')}}"></script>-->
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
    <script src="{{asset('zerocoin/js/ido.js')}}?<?php echo time()?>"></script>
    <div class="register-popup modal fade" id="register-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button> -->
          <div class="modal-body">
            <div class="form-group">
              <label>Refferal Code</label>
              <input type="text" value="@php if(isset($registerId) && !empty($registerId)) { echo $registerId; } else { echo '100000'; } @endphp" name="registerId" id="registerId" placeholder="Refferal Code" class="form-control"/>
            </div>
           
            <div class="register-btn-outer text-center">
              <a href="javascript:void(0)" onclick="registeration();" class="btn btn-primary">Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>



<!-- Mirrored from surielementor.com/MGRhtml/OnePage.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2022 10:36:30 GMT -->
</html>