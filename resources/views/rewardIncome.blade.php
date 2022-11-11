<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>RapidNetwork - Home</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('ezpay/img/favicon.ico')}}">
  <link rel="stylesheet" href="{{asset('ezpay/css/css-animate.css')}}">
  <link rel="stylesheet" href="{{asset('ezpay/css/css-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('ezpay/css/css-font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('ezpay/css/css-ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('ezpay/css/css-stylef9e3.css?v=1.1')}}">
  <link rel="stylesheet" href="{{asset('ezpay/css/swc.css')}}">
  <link rel="stylesheet" href="{{asset('ezpay/css/materialize.min.css')}}">
  <link rel="stylesheet" href="{{asset('ezpay/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('ezpay/css/css-responsive.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body data-spy="scroll" data-offset="110">
  <div class='wrap'></div>
  <div class="maintext">
    <header class="header_wrap">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand page-scroll" href="index.html"> 
          <img class="logo_light" src="{{asset('ezpay/img/logo.png')}}" alt="logo"> 
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active">
                <a class="nav-link" href="package.html">Package</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="withdraw.html">Withdraw</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rebirth.html">Rebirth</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="direct.html">Direct</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="matrix.html">Matrix</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="club.html">Club</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reward.html">Reward</a>
              </li>
            </ul>
          </div>
          <div>
            <ul class="navbar-nav nav_btn align-items-center">
              <li>
                <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
              </li>
              <li>
                <div class="lng_dropdown">
                  <span class=""  id="google_translate_element"></span>                               
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
   

    <div class="income-table-main more-padding">
      <div class="container">
        <div class="income-table-outer">
          <div class="income-heading">
            <h4>Reward Report</h4>
          </div>
          <div class="income-table">
            <table class="w-100">
              <tr>
                  <th>Reward</th>
                  <th>Status</th>
                  <th>Income</th>
                  <th>Date</th>
              </tr>
               @if(!empty($todayRewardsIncome))
                    @foreach( $todayRewardsIncome as $key => $todayRewards )
                    <tr>
                      <td>Reward {{$key+1}}</td>
                      <td>Success</td>
                      <td>${{$todayRewards->amount}}</td>
                      <td>${{$todayRewards->created_at}}</td>
                    </tr>
                    @endforeach
                  @endif
            </table>
          </div>
          <!-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav> -->
        </div>
      </div>
    </div>

    <footer class="section_gradiant3 footer-outer" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/roadmap_bg4.html">
      <div class="bottom-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="footer_bottom">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h5>Beware of Fake resources. RapidNetwork Community has only one site RapidNetwork.io</h5>
                    <p class="copyright">Copyright © 2022 All Rights Reserved.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- invest-popup -->
  <div class="modal fade invest-popup" id="invest-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="heading-outer text-center">
            <h5>make new contribution</h5>
          </div>
          <div class="contribution-outer">
            <p>Specify deposit TRX amount here:</p>
            <div class="contribution-form">
              <form>
                <div class="form-group">
                  <input type="number" name="" placeholder="1000" class="form-control"/>
                </div>
                <div class="contribution-btn-outer">
                  <button type="button" id="contribution" class="btn btn-primary">contribution</button>
                </div>
              </form>
            </div>
            <div class="partner-wallet">
              <p>upline partner wallet:</p>
              <a href="javascript:void(0)">No upline</a>
            </div>
          </div>
          <div class="contribution-point">
            <ul>
              <li class="notice">IMPORTANT! Do not forget about blockchain feel You should have <b>40-60 TRX</b> more on your wallet, or your transaction will get *out of energy* status!</li>
              <li>Minimum contibution amount <b>100 TRX</b></li>
              <li>We are working only with: <b>TRON(TRX) cryptocurrency</b></li>
              <li>Your contribution will be activated after 1 confirmation in blockchain</li>
              <li>Withdrawable rewards come instantly to your secure wallet balance, which is accessible only to You</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href="#" class="scrollup btn-default"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
  <script src="{{asset('ezpay/js/js-jquery-1.12.4.min.js')}}"></script> 
  <script src="{{asset('ezpay/js/js-bootstrap.min.js')}}"></script> 
  <script src="{{asset('ezpay/js/js-owl.carousel.min.js')}}"></script> 
  <script src="{{asset('ezpay/js/js-magnific-popup.min.js')}}"></script> 
  <script src="{{asset('ezpay/js/js-waypoints.min.js')}}"></script>      
  <script src="{{asset('ezpay/js/js-jquery.dd.min.js')}}"></script>
  <script src="{{asset('ezpay/js/js-scripts.js')}}"></script>
  <script src="{{asset('ezpay/js/jquery.toaster.js')}}"></script>
  <script src="{{asset('ezpay/js/custom.js')}}"></script>
  <script src="{{asset('ezpay/js/ezpay.js')}}?{{time()}}"></script>
  <script src="{{asset('ezpay/js/tronMark.js?{{time()')}}"></script>
  <script type="text/javascript">
    !function(a){var b="object"==typeof self&&self.self===self&&self||"object"==typeof global&&global.global===global&&global;"function"==typeof define&&define.amd?define(["exports"],function(c){b.ParticleNetwork=a(b,c)}):"object"==typeof module&&module.exports?module.exports=a(b,{}):b.ParticleNetwork=a(b,{})}(function(a,b){var c=function(a){this.canvas=a.canvas,this.g=a.g,this.particleColor=a.options.particleColor,this.x=Math.random()*this.canvas.width,this.y=Math.random()*this.canvas.height,this.velocity={x:(Math.random()-.5)*a.options.velocity,y:(Math.random()-.5)*a.options.velocity}};return c.prototype.update=function(){(this.x>this.canvas.width+20||this.x<-20)&&(this.velocity.x=-this.velocity.x),(this.y>this.canvas.height+20||this.y<-20)&&(this.velocity.y=-this.velocity.y),this.x+=this.velocity.x,this.y+=this.velocity.y},c.prototype.h=function(){this.g.beginPath(),this.g.fillStyle=this.particleColor,this.g.globalAlpha=.7,this.g.arc(this.x,this.y,1.5,0,2*Math.PI),this.g.fill()},b=function(a,b){this.i=a,this.i.size={width:this.i.offsetWidth,height:this.i.offsetHeight},b=void 0!==b?b:{},this.options={particleColor:void 0!==b.particleColor?b.particleColor:"#fff",background:void 0!==b.background?b.background:"#1a252f",interactive:void 0!==b.interactive?b.interactive:!0,velocity:this.setVelocity(b.speed),density:this.j(b.density)},this.init()},b.prototype.init=function(){if(this.k=document.createElement("div"),this.i.appendChild(this.k),this.l(this.k,{position:"absolute",top:0,left:0,bottom:0,right:0,"z-index":1}),/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.background))this.l(this.k,{background:this.options.background});else{if(!/\.(gif|jpg|jpeg|tiff|png)$/i.test(this.options.background))return console.error("Please specify a valid background image or hexadecimal color"),!1;this.l(this.k,{background:'url("'+this.options.background+'") no-repeat center',"background-size":"cover"})}if(!/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.particleColor))return console.error("Please specify a valid particleColor hexadecimal color"),!1;this.canvas=document.createElement("canvas"),this.i.appendChild(this.canvas),this.g=this.canvas.getContext("2d"),this.canvas.width=this.i.size.width,this.canvas.height=this.i.size.height,this.l(this.i,{position:"relative"}),this.l(this.canvas,{"z-index":"20",position:"relative"}),window.addEventListener("resize",function(){return this.i.offsetWidth===this.i.size.width&&this.i.offsetHeight===this.i.size.height?!1:(this.canvas.width=this.i.size.width=this.i.offsetWidth,this.canvas.height=this.i.size.height=this.i.offsetHeight,clearTimeout(this.m),void(this.m=setTimeout(function(){this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&this.o.push(this.p),requestAnimationFrame(this.update.bind(this))}.bind(this),500)))}.bind(this)),this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&(this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p),this.canvas.addEventListener("mousemove",function(a){this.p.x=a.clientX-this.canvas.offsetLeft,this.p.y=a.clientY-this.canvas.offsetTop}.bind(this)),this.canvas.addEventListener("mouseup",function(a){this.p.velocity={x:(Math.random()-.5)*this.options.velocity,y:(Math.random()-.5)*this.options.velocity},this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p)}.bind(this))),requestAnimationFrame(this.update.bind(this))},b.prototype.update=function(){this.g.clearRect(0,0,this.canvas.width,this.canvas.height),this.g.globalAlpha=1;for(var a=0;a<this.o.length;a++){this.o[a].update(),this.o[a].h();for(var b=this.o.length-1;b>a;b--){var c=Math.sqrt(Math.pow(this.o[a].x-this.o[b].x,2)+Math.pow(this.o[a].y-this.o[b].y,2));c>120||(this.g.beginPath(),this.g.strokeStyle=this.options.particleColor,this.g.globalAlpha=(120-c)/120,this.g.lineWidth=.7,this.g.moveTo(this.o[a].x,this.o[a].y),this.g.lineTo(this.o[b].x,this.o[b].y),this.g.stroke())}}0!==this.options.velocity&&requestAnimationFrame(this.update.bind(this))},b.prototype.setVelocity=function(a){return"fast"===a?1:"slow"===a?.33:"none"===a?0:.66},b.prototype.j=function(a){return"high"===a?5e3:"low"===a?2e4:isNaN(parseInt(a,10))?1e4:a},b.prototype.l=function(a,b){for(var c in b)a.style[c]=b[c]},b});

// Initialisation

var canvasDiv = document.getElementById('particle-canvas');
var options = {
  particleColor: '#f1f1f1',
  background:'#32527b',
  interactive: true,
  speed: 'slow',
  density: 'medium'
};
var particleCanvas = new ParticleNetwork(canvasDiv, options);

checkAllowance();   

function deposit_new(valPara){
    var amt   = valPara;
    //var limit = $("#limit_"+valPara).val();
    depositTRX(amt);
}

@if( isset($registerId ) && $registerId > 0)
  $("#signup-popup").modal("show");
@endif

  </script>
</body>
</html>