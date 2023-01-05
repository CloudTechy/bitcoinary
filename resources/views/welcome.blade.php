<!doctype html>
<html id="html" class="loaded" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title id="title">{{config('app.name')}}</title>
    <meta name="theme-color" content="#377dff"/>
    <meta name="description" content="{{config('app.name')}} has shown commendably successful and consistent performance and trading history. Currently, it is regarded as one of the best, most beneficial, brilliantly successful companies in the industry of forex trading and investing.">
    <meta name="keywords" content=" {{config('app.name')}}, Shares, Finance, Bitcoin, Investment">
    <meta name="author" content=" {{config('app.name')}} ICT Team">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/line-awesome.min.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{asset('assets/images/home/favicon.png')}}" type="image/x-icon">

</head>
<body id="body">
   
    
  <style>
    @-webkit-keyframes preloader-inside-white {
    0% {
        -webkit-transform: scale(0, 0);
        -ms-transform: scale(0, 0);
        transform: scale(0, 0);
    }

    100% {
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        transform: scale(1, 1);
    }
      }

      @-moz-keyframes preloader-inside-white {
          0% {
              -webkit-transform: scale(0, 0);
              -ms-transform: scale(0, 0);
              transform: scale(0, 0);
          }

          100% {
              -webkit-transform: scale(1, 1);
              -ms-transform: scale(1, 1);
              transform: scale(1, 1);
          }
      }

      @-ms-keyframes preloader-inside-white {
          0% {
              -webkit-transform: scale(0, 0);
              -ms-transform: scale(0, 0);
              transform: scale(0, 0);
          }

          100% {
              -webkit-transform: scale(1, 1);
              -ms-transform: scale(1, 1);
              transform: scale(1, 1);
          }
      }

      @keyframes preloader-inside-white {
          0% {
              -webkit-transform: scale(0, 0);
              -ms-transform: scale(0, 0);
              transform: scale(0, 0);
          }

          100% {
              -webkit-transform: scale(1, 1);
              -ms-transform: scale(1, 1);
              transform: scale(1, 1);
          }
      }

      @-webkit-keyframes preloader-inside-red {
          0% {
              -webkit-transform: scale(0, 0);
              -ms-transform: scale(0, 0);
              transform: scale(0, 0);
          }

          30% {
              -webkit-transform: scale(0, 0);
              -ms-transform: scale(0, 0);
              transform: scale(0, 0);
          }

          100% {
              -webkit-transform: scale(1, 1);
              -ms-transform: scale(1, 1);
              transform: scale(1, 1);
          }
      }

      @-moz-keyframes preloader-inside-red {
          0% {
              -webkit-transform: scale(0, 0);
              -ms-transform: scale(0, 0);
              transform: scale(0, 0);
          }

          30% {
              -webkit-transform: scale(0, 0);
              -ms-transform: scale(0, 0);
              transform: scale(0, 0);
          }

          100% {
              -webkit-transform: scale(1, 1);
              -ms-transform: scale(1, 1);
              transform: scale(1, 1);
          }
      }

      @-ms-keyframes preloader-inside-red {
          0% {
              -webkit-transform: scale(0, 0);
              -ms-transform: scale(0, 0);
              transform: scale(0, 0);
          }

          30% {
              -webkit-transform: scale(0, 0);
              -ms-transform: scale(0, 0);
              transform: scale(0, 0);
          }

          100% {
              -webkit-transform: scale(1, 1);
              -ms-transform: scale(1, 1);
              transform: scale(1, 1);
          }
      }

      @keyframes preloader-inside-red {
          0% {
              -webkit-transform: scale(0, 0);
              -ms-transform: scale(0, 0);
              transform: scale(0, 0);
          }

          30% {
              -webkit-transform: scale(0, 0);
              -ms-transform: scale(0, 0);
              transform: scale(0, 0);
          }

          100% {
              -webkit-transform: scale(1, 1);
              -ms-transform: scale(1, 1);
              transform: scale(1, 1);
          }
      }

      .preloader {
          display: flex;
          flex-wrap: wrap;
          align-items: center;
          justify-content: center;
          width: 100vw;
          height: 100vh;
          position: fixed;
          top: 0;
          left: 0;
          z-index: 99999999;
          background: white;
          text-align: center;
      }

    .preloader .preloader-container {
        display: inline-block;
        width: 100px;
        height: 100px;
        position: relative;
    }

    .preloader .animated-preloader {
        display: inline-block;
        width: 100px;
        height: 100px;
        position: absolute;
        top: 0;
        left: 0;
        background: var(--secondary_color);
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
    }

    .preloader .animated-preloader::after {
        content: '';
        display: inline-block;
        width: 100px;
        height: 100px;
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        background: var(--primary_color);
        -webkit-animation: preloader-inside-white 1s ease-in-out infinite;
        -ms-animation: preloader-inside-white 1s ease-in-out infinite;
        animation: preloader-inside-white 1s ease-in-out infinite;
    }

    .preloader .animated-preloader::before {
        content: '';
        display: inline-block;
        width: 100px;
        height: 100px;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 10;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        background: var(--secondary_color);
        -webkit-animation: preloader-inside-red 1s ease-in-out infinite;
        -ms-animation: preloader-inside-red 1s ease-in-out infinite;
        animation: preloader-inside-red 1s ease-in-out infinite;
    }

  </style>
   <div>
    <!--Big blue-->


        <div class="preloader">
            <div class="preloader-container">
                <span class="animated-preloader"></span>
            </div>
        </div>
        <!-- scroll-to-top start -->
        <!-- <div class="scroll-to-top">
            <span class="scroll-icon">
                <i class="fa fa-rocket" aria-hidden="true"></i>
            </span>
        </div> -->
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
    </div><div id="app" >
    <noscript>
        <strong>We're sorry but {{config('app.name')}} doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <index></index>
  </div>
  
     <!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div style = "display:none" class="elfsight-app-e60b7d46-97bc-46b1-a3e3-7c5c033e5780"></div> -->

    
  <script  src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}" ></script>
  <script src="{{ asset('js/objectdata.js') }}" ></script>
        <script  src="{{ asset('assets/js/home/jquery.min.js') }}"></script>
      <script   src="{{ asset('assets/js/home/bootstrap.min.js') }}"></script>
      <script   src="{{ asset('assets/js/home/wow.min.js') }}"></script>
      <script   src="{{ asset('assets/js/home/jquery.isotope.min.js') }}"></script>
      <!--<script  src="{{ asset('assets/js/home/easing.js') }}"></script>-->
      <script src="{{ asset('assets/js/home/owl.carousel.js') }}"></script>
      <script src="{{ asset('assets/js/home/validation.js') }}"></script>
      <script src="{{ asset('assets/js/home/jquery.magnific-popup.min.js') }}"></script>
      <script  src="{{ asset('assets/js/home/enquire.min.js') }}"></script>
      <script  src="{{ asset('assets/js/home/jquery.stellar.min.js') }}"></script>
      <script  src="{{ asset('assets/js/home/jquery.plugin.js') }}"></script>
      <script  src="{{ asset('assets/js/home/typed.js') }}"></script>

      
      <!-- <script src="{{ asset('assets/js/home/jquery.countTo.js') }}"></script>
      <script src="{{ asset('assets/js/home/jquery.countdown.js') }}"></script> -->
      <!-- <script src="{{ asset('assets/js/home/typed.js') }}"></script> -->
      <!--<script src="{{ asset('assets/js/home/designesia.js') }}"></script>-->
      <!-- <script src="{{ asset('assets/js/home/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('assets/js/home/jquery.plugin.js') }}"></script>
          <script src="{{ asset('assets/js/home/jquery.countTo.js') }}"></script>
            <script src="{{ asset('assets/js/home/jquery.countdown.js') }}"></script> -->

   <!-- <script
      type="text/javascript"
      src="//s3.tradingview.com/tv.js"
      async
    ></script> -->
    <!-- <script src="//cdn.amcharts.com/lib/4/core.js"></script>
    <script src="//cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="//cdn.amcharts.com/lib/4/themes/dark.js"></script>
    <script src="//cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="{{ asset('assets/js/jquery.bgscroll.js') }} " defer></script>
    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }} " defer></script>
    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }} " defer></script>
    -->
    <script>
     
  
   
    if('serviceWorker' in navigator) {
      navigator.serviceWorker
        .register('/sw.js')
        .then(function() { console.log("Service Worker Registered"); });
    }
      function googleTranslateElementInit() {
        new google.translate.TranslateElement(
          { pageLanguage: "en" },
          "google_translate_element"
        );
    
          jQuery(".goog-logo-link").empty();
          jQuery(".goog-te-gadget").html(jQuery(".goog-te-gadget").children());
   
      }
  $(window).load(function(){
      // if (feather) {
      //     feather.replace({ width: 14, height: 14 });
      //   }
      $(".preloader").delay(300).animate({
       "opacity" : "0"
       }, 300, function() {
       $(".preloader").css("display","none");
      });
    })
</script>


<style>
   .goog-te-banner-frame.skiptranslate {
        display: none !important;
      }
      /* .goog-te-gadget .goog-te-combo {
        margin: 4px 0;
        padding: 9px 12px;
      } */
      .mgm a {
        font-weight: 700;
        display: block;
        color: #ff5722;
      }

      .mgm a:active {
        transition: all 0.2s ease;
        color: #ff5722;
      }
      .vue-loading-button {
        font-size: revert !important;
}
</style>
 <script src="//code.tidio.co/nq87i7bid1gk0n6uqa2dpbhos2ivh4nd.js"></script>
 

</body>
</html>
