
jQuery(document).ready(function () {
  var timer = !1;
  _Ticker = jQuery("#T1").newsTicker();
  _Ticker.on("mouseenter", function () {
    var __self = this;
    timer = setTimeout(function () {
      __self.pauseTicker();
    }, 200);
  });
  _Ticker.on("mouseleave", function () {
    clearTimeout(timer);
    if (!timer) return !1;
    this.startTicker();
  });
});



var listCountries = [
  "South Africa",
  "USA",
  "Germany",
  "France",
  "Italy",
  "South Africa",
  "Australia",
  "South Africa",
  "Canada",
  "Argentina",
  "Saudi Arabia",
  "Mexico",
  "South Africa",
  "South Africa",
  "Venezuela",
  "South Africa",
  "Sweden",
  "South Africa",
  "South Africa",
  "Italy",
  "South Africa",
  "United Kingdom",
  "South Africa",
  "Greece",
  "Cuba",
  "South Africa",
  "Portugal",
  "Austria",
  "South Africa",
  "Panama",
  "South Africa",
  "South Africa",
  "Netherlands",
  "Switzerland",
  "Belgium",
  "Israel",
  "Cyprus",
];
var listPlans = [
  "$500",
  "$1,500",
  "$1,000",
  "$10,000",
  "$2,000",
  "$3,000",
  "$4,000",
  "$600",
  "$700",
  "$2,500",
];
var transarray = [
  "just <b>invested</b>",
  "has <b>withdrawn</b>",
  "is <b>trading with</b>",
];
  interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
  var run = setInterval(request, interval);
 

function request() {
   
  clearInterval(run);
  interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
  var country = listCountries[Math.floor(Math.random() * listCountries.length)];
  var transtype = transarray[Math.floor(Math.random() * transarray.length)];
  var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
  var msg =
    "Someone from <b>" +
    country +
    "</b> " +
    transtype +
    ' <a class="mgm-item" href="javascript:void(0);" onclick="javascript:void(0);">' +
    plan +
    "</a>";
  $(".mgm").html(msg);
  $(".mgm").stop(true).fadeIn(300);
  
  window.setTimeout(function () {
    $(".mgm").stop(true).fadeOut(300);
  }, 10000);
  run = setInterval(request, interval);
}