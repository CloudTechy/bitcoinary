<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title id="title">Bitcoinary Mint</title>
    <meta name="theme-color" content="#cca354"/>
    <meta name="description" content="Bitcoinary Mint is a community of dedicated investors that wants to make a steady extra income. we deal extensively on bitcoin">
    <meta name="keywords" content=" Bitcoinary Mint, Shares, Finance, Bitcoin, Investment">
    <meta name="author" content=" Bitcoinary Mint ICT Team">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Fonts -->
<!--   <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->
  <!-- Styles -->

  <link href="{{ asset('css/app.css') }}" rel="stylesheet"><!-- 
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}"> -->
  <link rel="shortcut icon" href="{{asset('image/favicon.jpg')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="{{asset('css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/animate.min.css')}}">
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{asset('css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/dots.css')}}">
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/themefisher-fonts.css') }}"> -->

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6003289aa9a34e36b96d215a/1es65d7sq';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>
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
    <index></index>
  </div>
  <script src="{{ asset('js/jquery.js') }}"></script>
  <!-- <script src="{{ asset('js/fancybox.js') }}" defer></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
  <script src="{{ asset('js/clipboard.min.js') }}" defer></script> -->
      <!-- page-wrapper end -->
    <!-- jQuery library -->
 <!--    <script src="asset/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="asset/js/vendor/bootstrap.bundle.min.js"></script> -->
    <!-- slick slider js -->

    
    <script src="{{asset('js/jquery-3.5.1.min.js.download')}}" defer></script>
      <script src="{{asset('js/bootstrap.bundle.js.download')}}" defer></script>
    <script src="{{asset('js/slick.min.js.download')}}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
  
    
    <script src="{{asset('js/wow.min.js.download')}}" defer></script>
    <script src="{{asset('js/contact.js.download')}}" defer></script>
    <script src="{{ asset('js/k.js') }}" defer></script>

    <!-- <script src="{{asset('js/dashboard.js.download')}}" defer></script> -->

  
  <!-- <script src="{{ asset('js/objectdata.js') }}" defer></script> -->
  <script>
    if('serviceWorker' in navigator) {
      navigator.serviceWorker
        .register('/sw.js')
        .then(function() { console.log("Service Worker Registered"); });
    }

    $(window).load(function(){
      console.log('window loaded')
      $(".preloader").delay(20).animate({
       "opacity" : "0"
       }, 300, function() {
       $(".preloader").css("display","none");
      });
    })
</script>
</body>
</html>
