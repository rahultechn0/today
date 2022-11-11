<!DOCTYPE HTML>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Zirochain</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->

    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('zerocoin/assets/images/fav-icon/icon.png')}}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('zerocoin/app/dist/owl.carousel.min.css')}}" type="text/css" media="all" />
    <!-- theme default CSS -->  
    <link rel="stylesheet" href="{{asset('zerocoin/app/dist/owl.theme.default.min.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('zerocoin/app/dist/animate.css')}}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.1/css/all.css">

    <link rel="stylesheet" href="{{asset('zerocoin/app/dist/animated-text.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('zerocoin/app/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('zerocoin/app/dist/theme-default.css')}}" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet"  href="{{asset('zerocoin/app/dist/style.css')}}" type="text/css" media="all" />
 
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{asset('zerocoin/app/dist/responsive.css')}}" type="text/css" media="all" />
    <style>
      h4{
        color:#fff;
      }
      </style>
  </head>
  <body>
    <div id="sticky-header" class="cryptobit_nav_manu style-two">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4">
            <div class="logo">
              <a class="logo_img" href="{{ url('users')}}" title="cryptobit">
                <img src="{{asset('zerocoin/assets/images/logo.png')}}" alt="" class="img-fluid" />
              </a>
              <a class="main_sticky" href="{{ url('users')}}" title="cryptobit">
                <img src="{{asset('zerocoin/assets/images/logo.png')}}" alt="astute" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix" style="clear: both;"></div>
    
    <section class="ido-section hero-slider">
      <div class="container">
        <div class="row">
          <div class="col-xl-2 col-md-12 col-12"></div>
          <div class="col-xl-8 ">
            <div class="ido_box">
              <div class="nav justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Buy With BNB</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Buy With BUSD</button>
              </div>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <h4>Buy With BNB</h4>
                  <div class="ido-form-outer">
                    <div class="row ">
                      <div class="form-group col-md-6 text-white">
                        <label class="d-block">BNB Balance : <span id="bnb_balance" >0</span></label>
                        <input type="number" id="bnbAmt" class="control_new" onkeyup="price()" placeholder="Amount">
                      </div>
                      <div class="form-group col-md-6 text-white">
                        <label class="d-block">TOKEN Balance : <span class="token_balance">0</span></label>
                        <input type="number" class="control_new" onkeyup="revercePrice()" id="tokenAmt" placeholder="Token">
                      </div>
                    </div>
                  </div>
                  <div class="buy-now-btn">
                    <a href="javascript:void(0)" class="btn btn-primary busdBuy" onclick="buyWithBNB()">Buy Now</a>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <h4>Buy With BUSD</h4>
                  <div class="ido-form-outer">
                    <div class="row ">
                      <div class="form-group col-md-6 text-white">
                        <label>BUSD Balance : <span id="busd_balance">0</span></label>
                        <input type="number" id="busdAmtIdo" class="control_new" onkeyup="busdPrice()" placeholder="Amount">
                      </div>
                      <div class="form-group col-md-6 text-white">
                        <label>TOKEN Balance : <span class="token_balance">0</span></label>
                        <input type="number" class="control_new" onkeyup="reverceBusdPrice()" id="tokenAmtIdo2" placeholder="Amount">
                      </div>
                    </div>
                  </div>
                  <div class="buy-now-btn">
                    <a href="javascript:void(0)" class="btn btn-primary busdIdoBuy" onclick="buyTokenWithBUSD()">Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="footer-middle style-three pt-80 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="widgets-company-info  pt-3 wow fadeInLeft" data-wow-delay=".4s">
              <div class="cryptobit-logo">
                <a class="logo_img" href="index.html" title="cryptobit">
                <img src="{{asset('zerocoin/assets/images/logo.png')}}" alt="" />
                </a>
              </div>
              <div class="company-info-desc">
                <p>Cryptocurrencies are used prim outside existing banking govern institutions  hanged</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12 text-center">
            <div class="footer-menu widget-nav-menu wow fadeInLeft" data-wow-delay=".5s">
              <h4 class="widget-title">Quick Links</h4>
              <div class="menu-quick-link-content">
                <ul class="menu">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="index.html">Token Info</a></li>
                  <li><a href="index.html">About Us</a></li>
                  <li><a href="index.html">Roadmap</a></li>
                  <li><a href="index.html">Tokenomics</a></li>
                  <li><a href="index.html">Technology</a></li>
                  <li><a href="index.html">FAQ</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="widget-nav-menu upper1 wow fadeInLeft" data-wow-delay=".7s">
              <h4 class="widget-title">Social Media</h4>
              <div class="company_icon">
                <ul class="footer-social">
                  <li>
                    <span>Facebook</span>
                    <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <span>Twitter</span>
                    <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <span>Linkedin</span>
                    <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                  <li>
                    <span>Pinterest</span>
                    <a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row footer-bottom mt-65 wow fadeInLeft" data-wow-delay=".8s">
          <div class="col-12">
            <div class="footer-bottom-content">
              <div class="footer-bottom-content-copy">
                <p>© Cryptobit all Rights Reserved. By: <span>ZIROCHAIN</span></p>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-4 col-md-6">
            <div class="footer-bottom-content">
              <div class="footer-bottom-menu">
                <ul>
                  <li>Privacy Policy</li>
                  <li>Terms & Condition</li>
                </ul>
              </div>
            </div>
            </div> -->
        </div>
      </div>
    </div>
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
    <script src="{{asset('zerocoin/js/jquery-3.6.0.min.js')}}" ></script>
    <script src="{{asset('zerocoin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('zerocoin/js/main.js')}}"></script>
    <script src="{{asset('zerocoin/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('zerocoin/js/waypoints.min.js')}}"></script>
    <script src="{{asset('zerocoin/js/wow.js')}}"></script>
    <script src="{{asset('zerocoin/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('zerocoin/js/ajax-mail.js')}}"></script>
    <script src="{{asset('zerocoin/js/animated-text.js')}}"></script>
    <script src="{{asset('zerocoin/js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('zerocoin/js/jquery.scrollUp.js')}}"></script>
    <script src="{{asset('zerocoin/js/theme.js')}}"></script>
    <script src="{{asset('zerocoin/js/range.js')}}"></script>
    <script src="{{asset('zerocoin/js/jquery.barfiller.js')}}"></script>
    <script src="{{asset('zerocoin/js/jquery.toaster.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
    <script src="{{asset('zerocoin/js/ido.js')}}?</php echo time(); ?>"></script>
    

  </body>
</html>