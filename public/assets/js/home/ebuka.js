// new script goes here
$(function () {
    // jquery typed plugin
    $(".typed").typed({
        stringsElement: $(".typed-strings"),
        typeSpeed: 100,
        backDelay: 1500,
        loop: true,
        contentType: "html", // or text
        // defaults to false for infinite loop
        loopCount: false,
        callback: function () {
            null;
        },
        resetCallback: function () {
            newTyped();
        },
    });
});

function multiply() {
  amount = Number(document.calculator.amount.value);
  percent = Number(document.calculator.percent.value);
    
  function thousands_separators(num) {
    var num_parts = num.toString().split(".");
    num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return num_parts.join(".");
  };
    
  document.getElementById("profit").innerHTML = thousands_separators((amount * percent) + amount);
  document.getElementById("netProfit").innerHTML = thousands_separators(amount * percent);

}

  // (function () {
  //     var options = {
  //         telegram: "admin",
  //         order: "telegram",
  //         call_to_action: "We're online",
  //         button_color: "#2d1582",
  //         position: "right",
  //         pre_filled_message: "Hello, West Exchange,",
  //     };
  //     var proto = document.location.protocol,
  //         host = "west-exchange.com",
  //         url = proto + "//" + host;
  //     var s = document.createElement("script");
  //     s.type = "text/javascript";
  //     s.async = true;
  //     s.src =
  //         "https://west-exchange.com/account/assets/javascript/getbutton.js";
  //     s.onload = function () {
  //         WhWidgetSendButton.init(host, proto, options);
  //     };
  //     var x = document.getElementsByTagName("script")[0];
  //     x.parentNode.insertBefore(s, x);
  // })();





// old script starts here
// jQuery(document).ready(function () {
//   var timer = !1;
//   _Ticker = jQuery("#T1").newsTicker();
//   _Ticker.on("mouseenter", function () {
//     var __self = this;
//     timer = setTimeout(function () {
//       __self.pauseTicker();
//     }, 200);
//   });
//   _Ticker.on("mouseleave", function () {
//     clearTimeout(timer);
//     if (!timer) return !1;
//     this.startTicker();
//   });
// });



// var listCountries = [
//   "South Africa",
//   "USA",
//   "Germany",
//   "France",
//   "Italy",
//   "South Africa",
//   "Australia",
//   "South Africa",
//   "Canada",
//   "Argentina",
//   "Saudi Arabia",
//   "Mexico",
//   "South Africa",
//   "South Africa",
//   "Venezuela",
//   "South Africa",
//   "Sweden",
//   "South Africa",
//   "South Africa",
//   "Italy",
//   "South Africa",
//   "United Kingdom",
//   "South Africa",
//   "Greece",
//   "Cuba",
//   "South Africa",
//   "Portugal",
//   "Austria",
//   "South Africa",
//   "Panama",
//   "South Africa",
//   "South Africa",
//   "Netherlands",
//   "Switzerland",
//   "Belgium",
//   "Israel",
//   "Cyprus",
// ];
// var listPlans = [
//   "$500",
//   "$1,500",
//   "$1,000",
//   "$10,000",
//   "$2,000",
//   "$3,000",
//   "$4,000",
//   "$600",
//   "$700",
//   "$2,500",
// ];
// var transarray = [
//   "just <b>invested</b>",
//   "has <b>withdrawn</b>",
//   "is <b>trading with</b>",
// ];
//   interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
//   var run = setInterval(request, interval);
 

// function request() {
   
//   clearInterval(run);
//   interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
//   var country = listCountries[Math.floor(Math.random() * listCountries.length)];
//   var transtype = transarray[Math.floor(Math.random() * transarray.length)];
//   var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
//   var msg =
//     "Someone from <b>" +
//     country +
//     "</b> " +
//     transtype +
//     ' <a class="mgm-item" href="javascript:void(0);" onclick="javascript:void(0);">' +
//     plan +
//     "</a>";
//   $(".mgm").html(msg);
//   $(".mgm").stop(true).fadeIn(300);
  
//   window.setTimeout(function () {
//     $(".mgm").stop(true).fadeOut(300);
//   }, 10000);
//   run = setInterval(request, interval);
// }