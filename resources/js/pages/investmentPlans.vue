<script>
export default {
    data() {
        return {
            company: this.$root.appName,
            domain: this.$root.appDomain,
        };
    },
    created() {
        let jquery = document.querySelector('script[src$="pace.js"]');
        if (jquery == null) {
            var js = document.createElement("script");
            js.setAttribute("src", "assets/plugins/pace/pace.js");
            document.head.appendChild(js);
        }
    },

    mounted() {
        let magnific = document.querySelector(
            'script[src$="magnific-popup.min.js"]'
        );
        if (magnific == null) {
            var js = document.createElement("script");
            js.setAttribute("src", "assets/js/jquery-1.12.4.min.js");
            js.setAttribute("async", true);
            document.body.appendChild(js);
            var js = document.createElement("script");
            js.setAttribute("src", "assets/js/bootstrap.min.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/bootstrap-select.min.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute(
                "src",
                "assets/js/jquery.bootstrap-touchspin.min.js"
            );
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/magnific-popup.min.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/waypoints.min.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/counterup.min.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/owl.carousel.min.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/waypoints-sticky.min.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/isotope.pkgd.min.js");
            document.body.appendChild(js);

            js = document.createElement("script");
            js.setAttribute("src", "assets/js/stellar.min.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/scrolla.min.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/custom.js");
            js.setAttribute("defer", "");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/shortcode.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/jquery.bgscroll.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/tickerNews.min.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/ebuka.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute(
                "src",
                "assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"
            );
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute(
                "src",
                "assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"
            );
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute(
                "src",
                "assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js"
            );
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/rev-script-1.js");
            document.body.appendChild(js);
            js = document.createElement("script");
            js.setAttribute("src", "assets/js/iziToast.min.js");
            document.body.appendChild(js);
        }
    },
};
</script>
<template>
  <div class="m-0 p-0">
    <div class="page-wraper">
      <HomeHeader :domain=" domain"></HomeHeader>
      <div class="page-content">
        <div
          class="wt-bnr-inr overlay-wraper"
          style="background-image: url('assets/images/banner/banner2.jpg')"
        >
          <div class="overlay-main bg-black opacity-07"></div>
          <div class="container">
            <div class="wt-bnr-inr-entry">
              <h1 class="text-white">Our Investment Plans</h1>
            </div>
          </div>
        </div>
        <div class="bg-white marquee">
          <div class="TickerNews" id="T1">
            <!-- TradingView Widget BEGIN -->
            <div
              class="tradingview-widget-container"
              style="width: 100%; height: 76px"
            >
              <iframe
                scrolling="no"
                allowtransparency="true"
                frameborder="0"
                src="//s.tradingview.com/embed-widget/ticker-tape/?locale=en&amp;page-uri=https%3A%2F%2Feurogg.com%2Fabout#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%2C%7B%22description%22%3A%22DOGE%2FUSDT%22%2C%22proName%22%3A%22BINGBON%3ADOGEUSDT%22%7D%2C%7B%22description%22%3A%22XRP%2FUSDT%22%2C%22proName%22%3A%22BINANCE%3AXRPUSDT%22%7D%2C%7B%22description%22%3A%22BCH%2FUSDT%22%2C%22proName%22%3A%22KRAKEN%3ABCHUSDT%22%7D%2C%7B%22description%22%3A%22KISHU%2FUSDT%22%2C%22proName%22%3A%22OKEX%3AKISHUUSDT%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Atrue%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A76%2C%22utm_source%22%3A%22fxtradingmax.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22ticker-tape%22%7D"
                style="box-sizing: border-box; height: 44px; width: 100%"
              ></iframe>
              <div class="tradingview-widget-copyright">
                <a href="#" rel="noopener" target="_blank"
                  ><span class="blue-text">Ticker Tape</span></a
                >
                by {{  company }}
              </div>
            </div>
            <!-- TradingView Widget END -->
          </div>
        </div>
       <InvestmentPlan></InvestmentPlan>
       <HowItWorks></HowItWorks>
        <AboutUs :company=" company"></AboutUs>
        <WhyChooseUs :company=" company"></WhyChooseUs>
        <HomeFooter
          :company=" company"
          :domain=" domain"
        ></HomeFooter>
      </div>
      <button class="scroltop">
        <span class="iconmoon-house relative" id="btn-vibrate"></span>Top
      </button>
      <div class="mgm" style="display: none; opacity: 1"></div>
    </div>
  </div>
</template>

<style scoped>

</style>
