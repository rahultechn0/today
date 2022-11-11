<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ziro Coin</title>
    <link rel="stylesheet" href="{{asset('backend/assets/app/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/app/dist/app.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/font/font-awesome.css')}}">
    <link href="{{asset('backend/assets/app/dist/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/assets/app/dist/swiper-bundle.min.css')}}" />
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}">
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="@php echo csrf_token(); @endphp">
  </head>
  <body>
    <!-- Preloading -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- end Preloading -->
  <div id="main-wrapper">
    <!-- Scroll Top -->
    <!-- <div class="progress-wrap active-progress">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
      </svg>
    </div> -->
    <!-- end Scroll Top -->

    <div class="nav-header">
            <a href="{{ url('users')}}" class="brand-logo">
                <img src="{{asset('backend/assets/images/logo.png')}}" alt="" class="img-fluid"/>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
    <!-- Header -->
    <div class="header">
        <div class="header-content">
          <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-end">
              <div class="header-left">
                <div class="input-group search-area right d-lg-inline-flex d-none">
                  <input type="text" class="form-control" placeholder="Search here...">
                  <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                </div>
              </div>
              <ul class="navbar-nav header-right main-notification">
                <li class="nav-item dropdown notification_dropdown">
                  <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
    </div>

    <div class="deznav">
      <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
        <li class="nav-label first">Main Menu</li>
        <li><a class="active" href="{{ url('users') }}">
          <i class="flaticon-144-layout"></i>
          <span class="nav-text"> Dashboard</span>
          </a>
        </li>
        <li><a class="" href="{{ url('roi-report') }}">
          <img src="{{asset('backend/assets/images/package-icon.png')}}" alt="" class="img-fluid"/>
          <span class="nav-text">ROI Report</span>
          </a>
        </li>

        {{-- <li><a class="" href="{{ url('level-report') }}">
          <img src="{{asset('backend/assets/images/report-icon.png')}}" alt="" class="img-fluid"/>
          <span class="nav-text">Level Report</span>
          </a>
        </li> --}}
        <li><a class="" href="{{ url('referral-report') }}">
          <img src="{{asset('backend/assets/images/report-icon.png')}}" alt="" class="img-fluid"/>
          <span class="nav-text">Referral Report</span>
          </a>
        </li>

        <li><a class="" href="{{ url('withdrawal-report') }}">
          <img src="{{asset('backend/assets/images/network-icon.png')}}" alt="" class="img-fluid"/>
          <span class="nav-text">Withdrawal Report</span>
          </a>
        </li>

        <li><a class="" href="{{ url('network') }}">
          <img src="{{asset('backend/assets/images/network-icon.png')}}" alt="" class="img-fluid"/>
          <span class="nav-text">My Team</span>
          </a>
        </li>
        <li><a class="" href="{{ url('logout') }}">
          <img src="{{asset('backend/assets/images/network-icon.png')}}" alt="" class="img-fluid"/>
          <span class="nav-text">Logout</span>
          </a>
        </li>
      </ul>
      </div>
    </div>
