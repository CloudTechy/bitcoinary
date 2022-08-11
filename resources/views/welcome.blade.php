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

<!-- frontend css -->
  <!-- <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/line-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor/slick.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor/dots.css')}}"> -->
  

    <!-- backend css -->
  <!-- <link rel="stylesheet" href="{{asset('pixinvest/css/css2.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/vendors.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/bootstrap-extended.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/colors.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/components.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/themes/dark-layout.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/themes/bordered-layout.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/themes/semi-dark-layout.min.css')}}">
  <link rel="stylesheet" href="{{asset('pixinvest/app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('pixinvest/app-assets/css/pages/app-invoice-list.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('pixinvest/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('pixinvest/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('pixinvest/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('css/main.css')}}"> -->
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

  <!-- <script src="{{ asset('pixinvest/app-assets/vendors/js/vendors.min.js') }}" defer></script>
  <script src="{{ asset('pixinvest/app-assets/js/core/app-menu.min.js')}}" defer></script>
  <script src="{{ asset('pixinvest/app-assets/js/core/app.min.js')}}" defer></script> -->


   <!--  <script src="{{ asset('pixinvest/app-assets/js/tables/datatable/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('pixinvest/app-assets/js/tables/datatable/dataTables.bootstrap5.min.js') }}" defer></script>
    <script src="{{ asset('pixinvest/app-assets/js/tables/datatable/dataTables.responsive.min.js') }}" defer></script>
    <script src="{{ asset('pixinvest/app-assets/js/tables/datatable/responsive.bootstrap4.min.js') }}" defer></script>
    <script src="{{ asset('pixinvest/app-assets/js/tables/datatable/datatables.buttons.min.js') }}" defer></script>
    <script src="{{ asset('pixinvest/app-assets/js/tables/datatable/dataTables.bootstrap5.min.js') }}" defer></script>
    <script src="{{ asset('pixinvest/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}" defer></script>   -->
    <!-- <script src="{{ asset('pixinvest/app-assets/js/scripts/pages/app-user-list.min.js') }}" defer></script>   -->

    
  <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
  <!-- <script src="./assets/js/jquery.bgscroll.js" defer></script> -->
    <!-- <script src="{{ asset('pixinvest/app-assets/js/customizer.min.js') }}" ></script> -->
    <!-- <script src="{{asset('js/jquery-3.5.1.min.js.download')}}" defer></script> -->
      <!-- <script src="{{asset('js/bootstrap.bundle.js.download')}}" defer></script> -->
    <!-- <script src="{{asset('js/slick.min.js.download')}}" defer></script> -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- <script src="{{asset('js/wow.min.js.download')}}" defer></script>
    <script src="{{asset('js/contact.js.download')}}" defer></script>
    <script src="{{ asset('js/k.js') }}" defer></script> -->
     

    <!-- <script src="{{asset('js/dashboard.js.download')}}" defer></script> -->
   
  <!--   <script src="{{ asset('pixinvest/app-assets/vendors/js/charts/apexcharts.min.js')}}"  defer></script>
    <script src="{{ asset('pixinvest/app-assets/vendors/js/extensions/toastr.min.js')}}"  defer></script>
    <script src="{{ asset('pixinvest/app-assets/js/scripts/pages/dashboard-analytics.min.js')}}"  defer></script>
    <script src="{{ asset('pixinvest/app-assets/js/scripts/pages/card-analytics.min.js')}}"  defer></script>
 -->
  
  <script src="{{ asset('js/objectdata.js') }}" defer></script>
   <script
      type="text/javascript"
      src="//s3.tradingview.com/tv.js"
      async
    ></script>
    <script src="//cdn.amcharts.com/lib/4/core.js"></script>
    <script src="//cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="//cdn.amcharts.com/lib/4/themes/dark.js"></script>
    <script src="//cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="{{ asset('assets/js/jquery.bgscroll.js') }} " defer></script>
    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }} " defer></script>
    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }} " defer></script>
   
    <script>
      jQuery(window).load(() => {
       if (jQuery( "#chartdiv" ).length) {
     am4core.ready(function () {
          // Themes begin
          am4core.useTheme(am4themes_dark);
          am4core.useTheme(am4themes_animated);
          // Themes end

          var chart = am4core.create("chartdiv", am4charts.XYChart);
          chart.paddingRight = 20;

          chart.dateFormatter.inputDateFormat = "yyyy-MM-dd";

          var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
          dateAxis.renderer.grid.template.location = 0;

          var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
          valueAxis.tooltip.disabled = true;

          var series = chart.series.push(new am4charts.CandlestickSeries());
          series.dataFields.dateX = "date";
          series.dataFields.valueY = "close";
          series.dataFields.openValueY = "open";
          series.dataFields.lowValueY = "low";
          series.dataFields.highValueY = "high";
          series.tooltipText =
            "Open:${openValueY.value}\nLow:${lowValueY.value}\nHigh:${highValueY.value}\nClose:${valueY.value}";

          // important!
          // candlestick series colors are set in states.
          // series.riseFromOpenState.properties.fill = am4core.color("#00ff00");
          // series.dropFromOpenState.properties.fill = am4core.color("#FF0000");
          // series.riseFromOpenState.properties.stroke = am4core.color("#00ff00");
          // series.dropFromOpenState.properties.stroke = am4core.color("#FF0000");

          series.riseFromPreviousState.properties.fillOpacity = 1;
          series.dropFromPreviousState.properties.fillOpacity = 0;

          chart.cursor = new am4charts.XYCursor();

          // a separate series for scrollbar
          var lineSeries = chart.series.push(new am4charts.LineSeries());
          lineSeries.dataFields.dateX = "date";
          lineSeries.dataFields.valueY = "close";
          // need to set on default state, as initially series is "show"
          lineSeries.defaultState.properties.visible = false;

          // hide from legend too (in case there is one)
          lineSeries.hiddenInLegend = true;
          lineSeries.fillOpacity = 0.5;
          lineSeries.strokeOpacity = 0.5;

          var scrollbarX = new am4charts.XYChartScrollbar();
          scrollbarX.series.push(lineSeries);
          chart.scrollbarX = scrollbarX;

          chart.data = [
            {
              date: "2011-08-01",
              open: "136.65",
              high: "136.96",
              low: "134.15",
              close: "136.49",
            },
            {
              date: "2011-08-02",
              open: "135.26",
              high: "135.95",
              low: "131.50",
              close: "131.85",
            },
            {
              date: "2011-08-05",
              open: "132.90",
              high: "135.27",
              low: "128.30",
              close: "135.25",
            },
            {
              date: "2011-08-06",
              open: "134.94",
              high: "137.24",
              low: "132.63",
              close: "135.03",
            },
            {
              date: "2011-08-07",
              open: "136.76",
              high: "136.86",
              low: "132.00",
              close: "134.01",
            },
            {
              date: "2011-08-08",
              open: "131.11",
              high: "133.00",
              low: "125.09",
              close: "126.39",
            },
            {
              date: "2011-08-09",
              open: "123.12",
              high: "127.75",
              low: "120.30",
              close: "125.00",
            },
            {
              date: "2011-08-12",
              open: "128.32",
              high: "129.35",
              low: "126.50",
              close: "127.79",
            },
            {
              date: "2011-08-13",
              open: "128.29",
              high: "128.30",
              low: "123.71",
              close: "124.03",
            },
            {
              date: "2011-08-14",
              open: "122.74",
              high: "124.86",
              low: "119.65",
              close: "119.90",
            },
            {
              date: "2011-08-15",
              open: "117.01",
              high: "118.50",
              low: "111.62",
              close: "117.05",
            },
            {
              date: "2011-08-16",
              open: "122.01",
              high: "123.50",
              low: "119.82",
              close: "122.06",
            },
            {
              date: "2011-08-19",
              open: "123.96",
              high: "124.50",
              low: "120.50",
              close: "122.22",
            },
            {
              date: "2011-08-20",
              open: "122.21",
              high: "128.96",
              low: "121.00",
              close: "127.57",
            },
            {
              date: "2011-08-21",
              open: "131.22",
              high: "132.75",
              low: "130.33",
              close: "132.51",
            },
            {
              date: "2011-08-22",
              open: "133.09",
              high: "133.34",
              low: "129.76",
              close: "131.07",
            },
            {
              date: "2011-08-23",
              open: "130.53",
              high: "135.37",
              low: "129.81",
              close: "135.30",
            },
            {
              date: "2011-08-26",
              open: "133.39",
              high: "134.66",
              low: "132.10",
              close: "132.25",
            },
            {
              date: "2011-08-27",
              open: "130.99",
              high: "132.41",
              low: "126.63",
              close: "126.82",
            },
            {
              date: "2011-08-28",
              open: "129.88",
              high: "134.18",
              low: "129.54",
              close: "134.08",
            },
            {
              date: "2011-08-29",
              open: "132.67",
              high: "138.25",
              low: "132.30",
              close: "136.25",
            },
            {
              date: "2011-08-30",
              open: "139.49",
              high: "139.65",
              low: "137.41",
              close: "138.48",
            },
            {
              date: "2011-09-03",
              open: "139.94",
              high: "145.73",
              low: "139.84",
              close: "144.16",
            },
            {
              date: "2011-09-04",
              open: "144.97",
              high: "145.84",
              low: "136.10",
              close: "136.76",
            },
            {
              date: "2011-09-05",
              open: "135.56",
              high: "137.57",
              low: "132.71",
              close: "135.01",
            },
            {
              date: "2011-09-06",
              open: "132.01",
              high: "132.30",
              low: "130.00",
              close: "131.77",
            },
            {
              date: "2011-09-09",
              open: "136.99",
              high: "138.04",
              low: "133.95",
              close: "136.71",
            },
            {
              date: "2011-09-10",
              open: "137.90",
              high: "138.30",
              low: "133.75",
              close: "135.49",
            },
            {
              date: "2011-09-11",
              open: "135.99",
              high: "139.40",
              low: "135.75",
              close: "136.85",
            },
            {
              date: "2011-09-12",
              open: "138.83",
              high: "139.00",
              low: "136.65",
              close: "137.20",
            },
            {
              date: "2011-09-13",
              open: "136.57",
              high: "138.98",
              low: "136.20",
              close: "138.81",
            },
            {
              date: "2011-09-16",
              open: "138.99",
              high: "140.59",
              low: "137.60",
              close: "138.41",
            },
            {
              date: "2011-09-17",
              open: "139.06",
              high: "142.85",
              low: "137.83",
              close: "140.92",
            },
            {
              date: "2011-09-18",
              open: "143.02",
              high: "143.16",
              low: "139.40",
              close: "140.77",
            },
            {
              date: "2011-09-19",
              open: "140.15",
              high: "141.79",
              low: "139.32",
              close: "140.31",
            },
            {
              date: "2011-09-20",
              open: "141.14",
              high: "144.65",
              low: "140.31",
              close: "144.15",
            },
            {
              date: "2011-09-23",
              open: "146.73",
              high: "149.85",
              low: "146.65",
              close: "148.28",
            },
            {
              date: "2011-09-24",
              open: "146.84",
              high: "153.22",
              low: "146.82",
              close: "153.18",
            },
            {
              date: "2011-09-25",
              open: "154.47",
              high: "155.00",
              low: "151.25",
              close: "152.77",
            },
            {
              date: "2011-09-26",
              open: "153.77",
              high: "154.52",
              low: "152.32",
              close: "154.50",
            },
            {
              date: "2011-09-27",
              open: "153.44",
              high: "154.60",
              low: "152.75",
              close: "153.47",
            },
            {
              date: "2011-09-30",
              open: "154.63",
              high: "157.41",
              low: "152.93",
              close: "156.34",
            },
            {
              date: "2011-10-01",
              open: "156.55",
              high: "158.59",
              low: "155.89",
              close: "158.45",
            },
            {
              date: "2011-10-02",
              open: "157.78",
              high: "159.18",
              low: "157.01",
              close: "157.92",
            },
            {
              date: "2011-10-03",
              open: "158.00",
              high: "158.08",
              low: "153.50",
              close: "156.24",
            },
            {
              date: "2011-10-04",
              open: "158.37",
              high: "161.58",
              low: "157.70",
              close: "161.45",
            },
            {
              date: "2011-10-07",
              open: "163.49",
              high: "167.91",
              low: "162.97",
              close: "167.91",
            },
            {
              date: "2011-10-08",
              open: "170.20",
              high: "171.11",
              low: "166.68",
              close: "167.86",
            },
            {
              date: "2011-10-09",
              open: "167.55",
              high: "167.88",
              low: "165.60",
              close: "166.79",
            },
            {
              date: "2011-10-10",
              open: "169.49",
              high: "171.88",
              low: "153.21",
              close: "162.23",
            },
            {
              date: "2011-10-11",
              open: "163.01",
              high: "167.28",
              low: "161.80",
              close: "167.25",
            },
            {
              date: "2011-10-14",
              open: "167.98",
              high: "169.57",
              low: "163.50",
              close: "166.98",
            },
            {
              date: "2011-10-15",
              open: "165.54",
              high: "170.18",
              low: "165.15",
              close: "169.58",
            },
            {
              date: "2011-10-16",
              open: "172.69",
              high: "173.04",
              low: "169.18",
              close: "172.75",
            },
          ];
        });
      
}
      });
    </script>
  <!-- <script src="{{ asset('pixinvest/app-assets/js/scripts/customizer.min.js') }}" defer></script> -->
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
      .goog-te-gadget .goog-te-combo {
        margin: 4px 0;
        padding: 9px 12px;
      }
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
