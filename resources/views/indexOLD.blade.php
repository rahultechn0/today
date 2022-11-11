
<!DOCTYPE html>
<html>
<head>
<title>BtcWorld - Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('btcworld/css/slick-theme.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('btcworld/css/slick.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('btcworld/css/style.css')}}">
<meta name="csrf-token" content="@php echo csrf_token(); @endphp">
</head>
<body>
<!--Navbar-->
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
              <label>Select Side</label>
              <select class="form-control" name="position" id="position">
                <option @php if(isset($position) && !empty($position) && $position=='left') { echo 'selected'; } @endphp value="Left">Left</option>
                <option @php if(isset($position) && !empty($position) && $position=='right') { echo 'selected'; } @endphp value="Right">Right</option>
              </select>
            </div>
            <div class="register-btn-outer text-center">
              <a href="javascript:void(0)" onclick="registeration();" class="btn btn-primary">Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('btcworld/img/logo.png')}}" alt="" class="img-fluid"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Blog
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary" href="javascript:void(0)" data-toggle="modal" data-target="#register-popup">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary" onclick="login();" href="javascript:void(0);">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Main-Banner-->
<div class="main-banner-outer position-relative">
  <div class="banner-outer d-flex flex-wrap align-items-center">
    <div class="container">
      <div class="banner-left">
        <p class="sub-heading"><b>easy way to make profit</b></p>
        <h1>many ways, one solution</h1>
        <p>BTC World provides you the best way to maximize your income with just little 50$.</p>
        <div class="start-invest-btn">
          <a href="javascript:void(0)" class="btn btn-primary">start invest now !</a>
        </div>
      </div>
    </div>
    <div class="banner-right">
      <img src="img/banner-right-img1.png" alt="" class="img-fluid"/>
    </div>
  </div>
</div>
<!--AboutUs-->
<div class="aboutus-outer">
  <div class="container">
    <div class="about-detail">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-12 border-right">
          <div class="about-inner d-flex flex-wrap align-items-center justify-content-center">
            <div class="img-outer">
              <img src="{{asset('btcworld/img/about-icon1.png')}}" alt="" class="img-fluid"/>
            </div>
            <div class="content-outer">
              <h3>$961 k</h3>
              <span>Invested In Pitches</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 border-right">
          <div class="about-inner d-flex flex-wrap align-items-center justify-content-center">
            <div class="img-outer">
              <img src="{{asset('btcworld/img/about-icon2.png')}}" alt="" class="img-fluid"/>
            </div>
            <div class="content-outer">
              <h3>634 k</h3>
              <span>Registered Members</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="about-inner d-flex flex-wrap align-items-center justify-content-center">
            <div class="img-outer">
              <img src="{{asset('btcworld/img/about-icon3.png')}}" alt="" class="img-fluid"/>
            </div>
            <div class="content-outer">
              <h3>$14 k</h3>
              <span>Average Investment</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Our-Features-->
<div class="our-feature-outer">
  <div class="container">
    <div class="feature-top text-center">
      <p class="sub-heading"><b>our amazing features</b></p>
      <h2>investing for everyone</h2>
      <p>We are worldwide investment company who are committed to the principle of revenue maximization and reduction of the financial risks at investing.</p>
    </div>
    <div class="our-feature position-relative">
      <div class="feature-inner feature-one text-center">
        <div class="img-outer">
          <img src="{{asset('btcworld/img/feature-img1.png')}}" alt="" class="img-fluid"/>
        </div>
        <div class="content-outer">
          <h6>feature one</h6>
        </div>
      </div>
      <div class="feature-inner feature-two text-center position-absolute">
        <div class="img-outer">
          <img src="{{asset('btcworld/img/feature-img2.png')}}" alt="" class="img-fluid"/>
        </div>
        <div class="content-outer">
          <h6>feature two</h6>
        </div>
      </div>
      <div class="feature-inner feature-three text-center position-absolute">
        <div class="img-outer">
          <img src="{{asset('btcworld/img/feature-img3.png')}}" alt="" class="img-fluid"/>
        </div>
        <div class="content-outer">
          <h6>feature three</h6>
        </div>
      </div>
      <div class="feature-inner feature-four text-center position-absolute">
        <div class="img-outer">
          <img src="{{asset('btcworld/img/feature-img4.png')}}" alt="" class="img-fluid"/>
        </div>
        <div class="content-outer">
          <h6>security</h6>
        </div>
      </div>
      <div class="feature-inner feature-five text-center position-absolute">
        <div class="img-outer">
          <img src="{{asset('btcworld/img/feature-img5.png')}}" alt="" class="img-fluid"/>
        </div>
        <div class="content-outer">
          <h6>compliant</h6>
        </div>
      </div>
    </div>
  </div>
</div>
<!--why-choose-->
<div class="why-choose-outer">
  <div class="container-fluid">
    <div class="choose-top text-center mx-auto">
      <p class="sub-heading"><b>boost your money</b></p>
      <h3 class="title">why should choose us</h3>
      <p>Our service gives you better result and savings, as per your requirement and you can manage your investments form anywhere either from home or work place, anytime.</p>
    </div>
    <div class="choose-outer d-flex flex-wrap justify-content-between align-items-center">
      <div class="choose-left">
        <img src="{{asset('btcworld/img/choose-left-img.png')}}" alt="" class="img-fluid"/>
      </div>
      <div class="choose-right">
        <div class="why-choose-slider">
          <div class="ProductBlock">
            <div class="content-main">
              <div class="img-outer">
                <img src="{{asset('btcworld/img/choose-right-img1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h6>fast profit</h6>
                <p>We are talking about ways you can make money fast invest money and get reward bonus and profit.</p>
              </div>
            </div>
          </div>
          <div class="ProductBlock">
            <div class="content-main">
              <div class="img-outer">
                <img src="{{asset('btcworld/img/choose-right-img2.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h6>instant withdraw</h6>
                <p>We are extremely excited to launch instant withdrawals you can deposit and withdraw funds in just a few click.</p>
              </div>
            </div>
          </div>
          <div class="ProductBlock">
            <div class="content-main">
              <div class="img-outer">
                <img src="{{asset('btcworld/img/choose-right-img3.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h6>Dedicated server</h6>
                <p>Dedicated server hosting with 100% guarantee network up time. There is no change of CPU time Ram and bandwidth.</p>
              </div>
            </div>
          </div>
          <div class="ProductBlock">
            <div class="content-main">
              <div class="img-outer">
                <img src="{{asset('btcworld/img/choose-right-img2.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h6>instant withdraw</h6>
                <p>We are extremely excited to launch instant withdrawals you can deposit and withdraw funds in just a few click.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--latest-transaction-->
<div class="latest-transaction">
  <div class="container">
    <div class="section-top text-center mx-auto">
      <p class="sub-heading"><b>latest transaction</b></p>
      <h3 class="title">withdrawals</h3>
      <p>Make sound investment decision with the help of our resources and analytic acids them minimum deposit is $5 and the maximum is 100000 we pay 7 days per week you make additional deposit and anytime all our payments are instant payments</p>
    </div>
    <div class="transaction-outer">
      <table class="table-responsive w-100">
        <thead>
          <tr>
            <th>S No</th>
            <th>RegisterId</th>
            <th>Wallet Address</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Tx_ID</th>
          </tr>
        </thead>
        <tbody>
          @foreach($last_ten_records as $key => $record )
          <tr>
            <td>{{ $key+1 }}</td>
            <td>@php echo $record->user->registerId; @endphp</td>
            <td><a target="_blank" href="@php echo $settings['WALLET_LINK'].$record->user->wallet_address; @endphp">@php echo substr($record->user->wallet_address,0,7); @endphp.......@php echo substr($record->user->wallet_address,-7); @endphp </a></td>
            <td>$@php echo number_format($record->amount,2); @endphp</td>
            <td>@php echo date("d M Y",strtotime($record->created_at)); @endphp</td>
            <td><a target="_blank" href="@php echo $settings['TRANS_LINK'].$record->trans_id; @endphp">@php echo substr($record->trans_id,0,7); @endphp.......@php echo substr($record->trans_id,-7); @endphp </a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--our-mission-->
<div class="our-mission-outer">
  <div class="container">
    <div class="mission-outer mx-auto">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="mission-left">
            <div class="mission-left-inner left-top d-flex flex-wrap">
              <div class="img-outer">
                <img src="{{asset('btcworld/img/mission-icon1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h6>smart deposit</h6>
                <p>Best way to put your idle money to work.</p>
              </div>
            </div>
            <div class="mission-left-inner left-middle d-flex flex-wrap">
              <div class="img-outer">
                <img src="{{asset('btcworld/img/mission-icon2.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h6>one - tap invest</h6>
                <p>Invest without net baning/debit card.</p>
              </div>
            </div>
            <div class="mission-left-inner left-bottom d-flex flex-wrap">
              <div class="img-outer">
                <img src="{{asset('btcworld/img/mission-icon3.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h6>invest & saving</h6>
                <p>Grow your saving by investing as little as $5</p>
              </div>
            </div>


          </div>
        </div>
        <div class="col-md-6">
          <div class="mission-right">
            <p class="sub-heading"><b>our mission is to help our user</b></p>
            <h3 class="title">to maximize money</h3>
            <p>Whether you are new to investing or a season Pro Bihu does what is right for you and your money on average hour investing principles can increase return by 15% when compared to the typical investor</p>
            <p>Very different to how it looks today and we offer qualify investor the two opportunity to invest in the companies and product that are building the future of finance</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--you-earn-->
<div class="earn-main-outer">
  <div class="container">
    <div class="section-top text-center mx-auto text-white">
      <p class="sub-heading"><b>calculate the amazing profits</b></p>
      <h3 class="title text-white">you can earn</h3>
      <p>Find out what the returns on your current investment will be valued at, in future. All our issuers have obligation to pay dividends for first year regardless their financial situation that your investments are 100% secured. Calculate your profit from a share using our calculator:</p>
    </div>
    <div class="earn-outer text-center">
      <img src="{{asset('btcworld/img/plan-image.png')}}" alt="" class="img-fluid"/>
    </div>
  </div>
</div>
<!--deposit-outer-->
<div class="deposit-main-outer">
  <div class="container">
    <div class="section-top text-center mx-auto">
      <p class="sub-heading"><b>convenient money</b></p>
      <h3 class="title">deposit & withdrawal</h3>
      <p>Depositing or withdrawing money is simple. We support several payment methods, which depend on what country your payment account is located in.</p>
    </div>
    <div class="deposit-outer">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-3">
          <div class="deposit-left">
            <img src="{{asset('btcworld/img/deposit-left-img.png')}}" alt="" class="img-fluid"/>
          </div>
        </div>
        <div class="col-md-9">
          <div class="deposit-right">
            <div class="right-inner d-flex flex-wrap align-items-center">
              <div class="img-outer">
                <img src="{{asset('btcworld/img/deposit-right-img1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h6>no limits</h6>
                <p>Unlimited maximum withdrawal amount</p>
              </div>
            </div>
            <div class="right-inner d-flex flex-wrap align-items-center">
              <div class="img-outer">
                <img src="{{asset('btcworld/img/deposit-right-img2.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h6>withdrawal in 24/7</h6>
                <p>Deposit - instantaneous</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--affiliate-program-->
<div class="affiliate-program-outer">
  <div class="container">
    <div class="program-outer">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="program-left">
            <ul>
              <li class="text-center">
                <div class="img-outer">
                  <img src="{{asset('btcworld/img/program-left-icon1.png')}}" alt="" class="img-fluid"/>
                </div>
                <div class="content-outer">
                  <p class="sub-heading"><b>enjoy unlimited</b></p>
                  <h3>commissions</h3>
                </div>
              </li>
              <li class="text-center">
                <div class="img-outer">
                  <img src="{{asset('btcworld/img/program-left-icon2.png')}}" alt="" class="img-fluid"/>
                </div>
                <div class="content-outer">
                  <p class="sub-heading"><b>enjoy unlimited</b></p>
                  <h3>commissions</h3>
                </div>
              </li>
              <li class="text-center">
                <div class="img-outer">
                  <img src="{{asset('btcworld/img/program-left-icon3.png')}}" alt="" class="img-fluid"/>
                </div>
                <div class="content-outer">
                  <p class="sub-heading"><b>enjoy unlimited</b></p>
                  <h3>commissions</h3>
                </div>
              </li>
              <li class="text-center">
                <div class="img-outer">
                  <img src="{{asset('btcworld/img/program-left-icon4.png')}}" alt="" class="img-fluid"/>
                </div>
                <div class="content-outer">
                  <p class="sub-heading"><b>enjoy unlimited</b></p>
                  <h3>commissions</h3>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="program-right">
            <p class="sub-heading"><b>earn the big money</b></p>
            <h3 class="title">affiliate program</h3>
            <p>Our affiliate program can increase your income by receiving percentage from the purchases made by your referrals into.</p>
            <p>Invite other users (for example, your friend, co-workers, etc.) to join the project. After registration they will be your referrals; and if they purchase any item on our web site you receive 24% reward.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--footer-->
<footer class="footer-main-outer">
  <div class="container">
    <div class="footer-top text-center">
      <a href="{{url('/') }}" class="footer-logo"><img src="{{asset('btcworld/img/logo.png')}}" alt="" class="img-fluid"/></a>
    </div>
    <div class="footer-links">
      <div class="useful-links">
        <ul>
          <li><a href="javascript:void(0)">home</a></li>
          <li><a href="javascript:void(0)">about</a></li>
          <li><a href="javascript:void(0)">blog</a></li>
          <li><a href="javascript:void(0)">contact</a></li>
        </ul>
      </div>
      <div class="social-media">
        <ul>
          <li><a href="@php echo $settings['FB_LINK']; @endphp"><img src="{{asset('btcworld/img/social-icon1.png')}}" alt="" class="img-fluid"/></a></li>
          <li><a href="@php echo $settings['TW_LINK']; @endphp"><img src="{{asset('btcworld/img/social-icon2.png')}}" alt="" class="img-fluid"/></a></li>
          <li><a href="@php echo $settings['INSTA_LINK']; @endphp"><img src="{{asset('btcworld/img/social-icon3.png')}}" alt="" class="img-fluid"/></a></li>
          <li><a href="@php echo $settings['LINKED_LINK']; @endphp"><img src="{{asset('btcworld/img/social-icon4.png')}}" alt="" class="img-fluid"/></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<div class="copyright-outer text-center">
  <div class="container">
    <p>Copyright @php echo date("Y");@endphp. All Rights Reserved By BtcWorld</p>
  </div>
</div>
<!--Scripts-->
<script src="{{asset('btcworld/js/jquery.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('btcworld/js/jquery.toaster.js')}}"></script>
    <script src="{{asset('btcworld/js/btacworld.js')}}"></script>

    @if(isset($registerId) && !empty($registerId))
    <script>
        $("#register-popup").modal('show');
    </script>
    @endif
<script type="text/javascript">
  $('.why-choose-slider').slick({
    infinite: true,
    autoplay: true,
    centerMode: true,
    centerPadding: '0px',
    slidesToShow:3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    responsive: [
      {
      breakpoint:767,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        }
      },
      {
      breakpoint: 575,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        }
      }
    ]
  });
</script>
</body>
</html>