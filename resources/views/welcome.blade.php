<!doctype html>
<html id="html" class="loaded" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title id="title">{{config('app.name')}}</title>
    <!-- <meta name="theme-color" content="#cca354"/> -->
    <meta name="description" content="{{config('app.name')}} has shown commendably successful and consistent performance and trading history. Currently, it is regarded as one of the best, most beneficial, brilliantly successful companies in the industry of forex trading and investing.">
    <meta name="keywords" content=" {{config('app.name')}}, Shares, Finance, Bitcoin, Investment">
    <meta name="author" content=" {{config('app.name')}} ICT Team">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{asset('images/favicontp.png')}}" type="image/x-icon">

<!--Start of Tawk.to Script-->
<script type="text/javascript">

</script>
</head>
<body id="body">
   <div>
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
    </div>
  <div id="app" >
    <noscript>
        <strong>We're sorry but {{config('app.name')}} doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <index></index>
  </div>

  

    
  <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/objectdata.js') }}" defer></script>
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
      jQuery(window).load(() => {
      
    });
    </script>
      <!-- <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                    {
                      "symbol": "COINBASE:BTCUSD",
                      "width": "100%",
                      "height": 400,
                      "locale": "en",
                      "dateRange": "1D",
                      "colorTheme": "dark",
                      "trendLineColor": "rgba(255, 255, 0, 1)",
                      "underLineColor": "rgba(255, 0, 0, 0.1)",
                      "underLineBottomColor": "rgba(255, 0, 0, 0)",
                      "isTransparent": true,
                      "autosize": false,
                      "largeChartUrl": ""
                    }
                  </script> -->
  <script>
    // if('serviceWorker' in navigator) {
    //   navigator.serviceWorker
    //     .register('/sw.js')
    //     .then(function() { console.log("Service Worker Registered"); });
    // }
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
</style>
</body>
</html>
