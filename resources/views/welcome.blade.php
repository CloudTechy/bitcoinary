<!doctype html>
<html class="dark-layout loaded" data-layout="dark-layout" data-textdirection="ltr" style="--vh:6.38px; " lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title id="title">{{config('app.name')}}</title>
    <meta name="theme-color" content="#cca354"/>
    <meta name="description" content="{{config('app.name')}} is a community of dedicated investors that wants to make a steady extra income. we deal extensively on bitcoin">
    <meta name="keywords" content=" {{config('app.name')}}, Shares, Finance, Bitcoin, Investment">
    <meta name="author" content=" {{config('app.name')}} ICT Team">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{asset('images/favicontp.png')}}" type="image/x-icon">

<!-- frontend css -->
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/line-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor/slick.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor/dots.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- backend css -->
  <link rel="stylesheet" href="{{asset('pixinvest/css2.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/vendors.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/bootstrap-extended.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/colors.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/components.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/themes/dark-layout.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/themes/bordered-layout.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/themes/semi-dark-layout.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">


<!--Start of Tawk.to Script-->
<script type="text/javascript">
// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// (function(){
// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// s1.async=true;
// s1.src='https://embed.tawk.to/60bf7da0dd60a20abbe54044/1f7m05fok';
// s1.charset='UTF-8';
// s1.setAttribute('crossorigin','*');
// s0.parentNode.insertBefore(s1,s0);
// })();
</script>
<!--End of Tawk.to Script-->
</head>
<body id="body">
   <div>
        <div class="preloader">
            <div class="preloader-container">
                <span class="animated-preloader"></span>
            </div>
        </div>
        <!-- scroll-to-top start -->
        <div class="scroll-to-top">
            <span class="scroll-icon">
                <i class="fa fa-rocket" aria-hidden="true"></i>
            </span>
        </div>
        <!-- scroll-to-top end -->
        <div class="full-wh">
            <!-- STAR ANIMATION -->
            <div class="bg-animation">
                <div id='stars'></div>
                <div id='stars2'></div>
                <div id='stars3'></div>
                <div id='stars4'></div>
            </div>
            <!-- / STAR ANIMATION -->
        </div>
    </div>
  <div id="app" >
    <noscript>
        <strong>We're sorry but {{config('app.name')}} doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <index></index>
  </div>
  <script src="{{ asset('pixinvest/app-assets/vendors/js/vendors.min.js') }}" defer></script>

  <script src="{{ asset('pixinvest/app-assets/js/core/app-menu.min.js') }}" defer></script>
    <script src="{{ asset('pixinvest/app-assets/js/core/app.min.js') }}" defer></script>
    
  <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- <script src="{{ asset('pixinvest/app-assets/js/customizer.min.js') }}" ></script> -->
    <!-- <script src="{{asset('js/jquery-3.5.1.min.js.download')}}" defer></script> -->
      <!-- <script src="{{asset('js/bootstrap.bundle.js.download')}}" defer></script> -->
    <script src="{{asset('js/slick.min.js.download')}}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/wow.min.js.download')}}" defer></script>
    <script src="{{asset('js/contact.js.download')}}" defer></script>
    <script src="{{ asset('js/k.js') }}" defer></script>

    <!-- <script src="{{asset('js/dashboard.js.download')}}" defer></script> -->
   
  <!--   <script src="{{ asset('pixinvest/app-assets/vendors/js/charts/apexcharts.min.js')}}"  defer></script>
    <script src="{{ asset('pixinvest/app-assets/vendors/js/extensions/toastr.min.js')}}"  defer></script>
    <script src="{{ asset('pixinvest/app-assets/js/scripts/pages/dashboard-analytics.min.js')}}"  defer></script>
    <script src="{{ asset('pixinvest/app-assets/js/scripts/pages/card-analytics.min.js')}}"  defer></script>
 -->
  
  <script src="{{ asset('js/objectdata.js') }}" defer></script>
  <script src="{{ asset('pixinvest/app-assets/js/scripts/customizer.min.js') }}" defer></script>
  <script>
    if('serviceWorker' in navigator) {
      navigator.serviceWorker
        .register('/sw.js')
        .then(function() { console.log("Service Worker Registered"); });
    }

    $(window).load(function(){
      if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      $(".preloader").delay(300).animate({
       "opacity" : "0"
       }, 300, function() {
       $(".preloader").css("display","none");
      });
    })
</script>
</body>
</html>
