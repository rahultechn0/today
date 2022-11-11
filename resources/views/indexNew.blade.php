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
      <meta name="csrf-token" content="@php echo csrf_token(); @endphp">
  </head>
  <body id="home">
  <div id="sticky-header" class="cryptobit_nav_manu style-two">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-2 col-4">
            <div class="logo">
              <a class="logo_img" href="{{ url('users')}}" title="cryptobit">
                <img src="{{asset('zerocoin/assets/images/logo.png')}}" alt="" class="img-fluid" />
              </a>
              <a class="main_sticky" href="{{ url('users')}}" title="cryptobit">
                <img src="{{asset('zerocoin/assets/images/logo.png')}}" alt="astute" />
              </a>
            </div>
          </div>
          <div class="col-md-10 col-8 text-end">
            <nav class="navbar navbar-expand-lg cryptobit_menu">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav_scroll">
                  <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#token-info">Token Info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                  <li class="nav-item"><a class="nav-link" href="#roadmap">Roadmap</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tokenomics">Tokenomics</a></li>
                  <li class="nav-item"><a class="nav-link" href="#technology">Technology</a></li>
                  <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                </ul>
                <div class="header-button">
                    <a class="" onclick="login();" href="javascript:void(0);"><i class="far fa-user"></i> Sign In</a>
                    <a class="" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#register-popup"><i class="far fa-user"></i> Register Up </a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix" style="clear: both;"></div>
    <div class="hero-section style-three d-flex align-items-center">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="hero-content wow fadeInLeft" data-wow-delay=".3">
              <div class="hero-title">
                <h1>Collect Next Generation ZRC Today</h1>
              </div>
              <div class="hero-text">
                <p>Cryptography, encryption process of transforming information <br> referred to as plaintext) using done.</p>
              </div>
              <div class="hero-button">
                <a href="{{ url('ido')}}">Buy Token</a>
                <a href="javascript:void(0)">White paper</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="dreamit-hero-thumb wow fadeInDown" data-wow-delay=".4">
              <div class="hero-main-thumb2">
                <img src="{{asset('zerocoin/assets/images/slider/Banner-img.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix" style="clear: both;"></div>
    <div class="ico-ranking-area pt-80" id="token-info">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="dreamit-section-title text-center style-three pb-5">
              <h4>Token Information</h4>
              <h1>Tokens</h1>
              <div class="em_bar_bg"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="ico_list owl-carousel">
            <div class="col-lg-12">
              <div class="ico-ranking-single-box wow fadeInLeft" data-wow-delay=".3">
                <div class="ico-tanking-icon">
                  <img src="{{asset('zerocoin/assets/images/resource/ico1.png')}}" alt="">
                </div>
                <div class="ico-rnaking-title">
                  <h5 class="counter">Name</h5>
                  <p>ZRC Token</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="ico-ranking-single-box wow fadeInLeft" data-wow-delay=".4">
                <div class="ico-tanking-icon">
                  <img src="{{asset('zerocoin/assets/images/resource/ico1.png')}}" alt="">
                </div>
                <div class="ico-rnaking-title">
                  <h5 class="counter">Total Supply</h5>
                  <p>6,00,00,000</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="ico-ranking-single-box wow fadeInLeft" data-wow-delay=".5">
                <div class="ico-tanking-icon">
                  <img src="{{asset('zerocoin/assets/images/resource/ico2.png')}}" alt="">
                </div>
                <div class="ico-rnaking-title">
                  <h5 class="counter">Technology</h5>
                  <p>BEP - 20</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="ico-ranking-single-box wow fadeInLeft" data-wow-delay=".6">
                <div class="ico-tanking-icon">
                  <img src="{{asset('zerocoin/assets/images/resource/ico1.png')}}" alt="">
                </div>
                <div class="ico-rnaking-title">
                  <h5 class="counter">Blockchaine</h5>
                  <p>BSC SMART CHAIN</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="ico-ranking-single-box wow fadeInLeft" data-wow-delay=".7">
                <div class="ico-tanking-icon">
                  <img src="{{asset('zerocoin/assets/images/resource/ico4.png')}}" alt="">
                </div>
                <div class="ico-rnaking-title">
                  <h5 class="counter">Smart Contract</h5>
                  <p>dasv2sd6v6sv5wsv</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="process-area style-two pt-80 pb-70" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="dreamit-section-title text-center style-three pb-5">
              <h4 class="p-0">About Us</h4>
              <div class="em_bar_bg"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="process-single-thumb-box wow fadeInLeft" data-wow-delay=".3">
              <div class="process-thumb">
                <img src="{{asset('zerocoin/assets/images/resource/process-main.png')}}" alt="">
              </div>
              <div class="process-thumb-inner bounce-animate3">
                <img src="{{asset('zerocoin/assets/images/resource/process-man.png')}}" alt="">
              </div>
              <div class="process-thumb-inner1 bounce-animate5">
                <img src="{{asset('zerocoin/assets/images/resource/cross.png')}}" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="process-single-icon-box wow fadeInRight" data-wow-delay=".4">
              <div class="process-top-title">
                <h3>About ZRC</h3>
                <p>Blockchain Gaming is transforming and more games are being developed under the hood. ZRC is a team of Blockchain developers who are positive about the growing gaming Industry. Our metaverse gaming platforms and NFT will emerge as one the prominent and most preferred blockchain gaming. ZRC token will powerup the whole process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="roadmap-main-outer" id="roadmap">
      <div class="container">
        <div class="dreamit-section-title style-three text-center pb-55 wow fadeInLeft animated" data-wow-delay=".3" style="visibility: visible; animation-name: fadeInLeft;">
          <h1>Roadmap</h1>
          <div class="em_bar_bg"></div>
        </div>
      </div>
      <div class="roadmap-outer">
        <img src="{{asset('zerocoin/assets/images/resource/zrc-roadmap-img.png')}}" alt="" class="img-fluid"/>
      </div>
    </div>
    <section class="tf-section team tokenomic-main-outer" id="tokenomics">
      <div class="container">
        <div class="block-text text-center">
          <h5 class="sub-title mb-10">Tokenomics</h5>
          <h3 class="title mb-28">Tokenomics</h3>
        </div>
        <div class="tokenomic-outer">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <ul class="tokenomics_list">
                <li class="bg1"><span>5%</span> I.C.O </li>
                <li class="bg2"><span>5%</span>Airdrop</li>
                <li class="bg3"><span>30%</span>Founder coin</li>
                <li class="bg4"><span>15%</span>Marketing</li>
                <li class="bg5"><span>40%</span>Exchange</li>
                <li class="bg6"><span>5%</span>Gaming</li>
              </ul>
            </div>
            <div class="col-lg-6 text-center">
              <img src="{{asset('zerocoin/assets/images/resource/tokenomics.png')}}" alt="ZIRO" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="tf-section technology-main-outer" id="technology">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="block-text text-center">
              <h5 class="sub-title mb-10 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">Technology</h5>
              <h3 class="title mb-28 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">ZCR Unique Technology</h3>
            </div>
          </div>
        </div>
        <div class="technology-outer">
          <div class="row">
            <div class="col-xl-6 col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="icon-box bg-2 aos-init" data-aos="fade-up">
                    <div class="icon">
                      <img src="{{asset('zerocoin/assets/images/icon/database.png')}}" alt="ZIRO">
                    </div>
                    <div class="content">
                      <a href="#" class="h5">Instant Payment</a>
                      <p class="fs-16">Offering you with the facility of instant payment to get your funds settled and transferred instantly in the Your account.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="icon-box bg-2 aos-init" data-aos="fade-up">
                    <div class="icon">
                      <img src="{{asset('zerocoin/assets/images/icon/lock.png')}}" alt="ZIRO">
                    </div>
                    <div class="content">
                      <a href="#" class="h5">Crypto Technology</a>
                      <p class="fs-16">Providing you with a digital platform possessed with the blockchain technology where you can do, record or secure every transaction related to cryptocurrencies.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="icon-box bg-2 aos-init" data-aos="fade-up">
                    <div class="icon">
                      <img src="{{asset('zerocoin/assets/images/icon/paymentt.png')}}" alt="ZIRO">
                    </div>
                   <div class="content">
                      <a href="#" class="h5">Currency Wallet</a>
                      <p class="fs-16">Providing you with the feature of a currency wallet where you can store your digital currencies in a secured manner.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="icon-box bg-2 aos-init" data-aos="fade-up">
                    <div class="icon">
                      <img src="{{asset('zerocoin/assets/images/icon/timestaps.png')}}" alt="ZIRO">
                    </div>
                   <div class="content">
                      <a href="#" class="h5">AI Matching</a>
                      <p class="fs-16">Usage of artificial intelligence helping to predict the uncertainty over the cryptocurrencies.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-12">
              <div class="group-image">
                <img src="{{asset('zerocoin/assets/images/items/technology.png')}}" alt="ZIRO">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="faq-area style-three pb-70" id="faq">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="dreamit-section-title style-three text-center pb-55 wow fadeInLeft" data-wow-delay=".3">
              <h4>QUESTIONS</h4>
              <h1>Frequently Asked Question</h1>
              <div class="em_bar_bg"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="accordion-menu wow fadeInLeft" data-wow-delay=".4">
              <ul class="accordion">
                <li>
                  <a>What is ZRC (Ziro Coin)?</a>
                  <p>ZCR is a decentralized cryptocurrency token based on BEP20 protocol of Binance Smart Chain.</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="accordion-menu wow fadeInLeft" data-wow-delay=".5">
              <ul class="accordion">
                <li>
                  <a>What is Blockchain?</a>
                  <p>Blockchain networks can differ in who can participate and who has access to the data. Networks are typically labeled as either public or private, which describes who is allowed to participate, and permissioned or permission less, which describes how participants gain access to the network.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-middle style-three pt-80 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="widgets-company-info  pt-3 wow fadeInLeft" data-wow-delay=".4s">
              <div class="cryptobit-logo">
                <a class="logo_img" href="{{ url('users')}}" title="cryptobit">
                <img src="{{asset('zerocoin/assets/images/logo3.png')}}" alt="" />
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
                  <li><a href="#token-info">Token Info</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#roadmap">Roadmap</a></li>
                  <li><a href="#tokenomics">Tokenomics</a></li>
                  <li><a href="#technology">Technology</a></li>
                  <li><a href="#faq">FAQ</a></li>
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

    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
    <script src="{{asset('zerocoin/js/idoTest.js')}}?</php echo time(); ?>"></script>
    <script src="{{asset('zerocoin/js/jquery.toaster.js')}}"></script>
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
</html>
