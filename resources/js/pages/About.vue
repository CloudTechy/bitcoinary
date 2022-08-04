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
// import { onMounted, onBeforeMount, reactive } from "vue";
// import HomeFooter from "../components/HomeFooter.vue";
// import HomeHeader from "../components/HomeHeader.vue";
// import AboutUs from "../components/AboutUs.vue";
// import WhyChooseUs from "../components/WhyChooseUs.vue";
// const state = reactive({
//   domain: import.meta.env.VITE_APP_DOMAIN,
//   company: import.meta.env.VITE_COMPANY_NAME,
// });

// function increment() {
//   count++
// }
</script>
<template>
    <div class="m-0 p-0">
        <div class="page-wraper">
            <HomeHeader :domain="domain"></HomeHeader>
            <div class="page-content">
                <div
                    class="wt-bnr-inr overlay-wraper"
                    style="
                        background-image: url('assets/images/banner/about-banner.jpg');
                    "
                >
                    <div class="overlay-main bg-black opacity-07"></div>
                    <div class="container">
                        <div class="wt-bnr-inr-entry">
                            <h1 class="text-white">ABOUT {{ company }}</h1>
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
                                style="
                                    box-sizing: border-box;
                                    height: 44px;
                                    width: 100%;
                                "
                            ></iframe>
                            <div class="tradingview-widget-copyright">
                                <a href="#" rel="noopener" target="_blank"
                                    ><span class="blue-text"
                                        >Ticker Tape</span
                                    ></a
                                >
                                by {{ company }}
                            </div>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
                <div class="bg-gray-light p-tb20">
                    <div class="container">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li>
                                <a href="/"> <i class="fa fa-home"></i> Home</a>
                            </li>
                            <li>About US</li>
                        </ul>
                    </div>
                </div>
                <div class="section-full p-tb20">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="section-head text-left">
                                    <span
                                        class="wt-title-subline text-gray-dark font-16 m-b15"
                                    ></span>
                                    <h2 class="text-uppercase">ABOUT US</h2>
                                    <div class="wt-separator-outer">
                                        <div
                                            class="wt-separator bg-primary"
                                        ></div>
                                    </div>
                                    <p>
                                        <!--<strong>-->
                                        {{ company }} is one of the most
                                        efficient and reliable financial
                                        investment service provider in the
                                        world. Our fundamental mission is to
                                        help clients and customers achieve their
                                        financial objectives. {{ company }} have
                                        staffs with over 20 years’ experience in
                                        combining financial development and
                                        trades. We are committed to pushing the
                                        boundaries of what constitutes the
                                        highest standards in trades and asset
                                        management.
                                        <br />
                                        <br />
                                        With over $5.3 Trillion traded daily in
                                        the market, we are dedicated to giving
                                        our clients their own share of the
                                        profit daily. As a leading global market
                                        maker,
                                        {{ company }} has one of the World’s
                                        Largest Independent traders and fund
                                        managers with clients from different
                                        parts of the World. Today, as a
                                        successful trade investment and asset
                                        management company, we are trusted by
                                        thousands of clients. Our sterling
                                        reputation, dedication to meeting our
                                        clients’ needs and innovative approach
                                        to business development are some driving
                                        forces behind our success.
                                        <!--</strong>-->
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="wt-media">
                                    <img
                                        src="/assets/images/rocket.png"
                                        alt=""
                                        class="img-responsive"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <AboutUs :company="company"></AboutUs>
                <WhyChooseUs :company="company"></WhyChooseUs>
                <HomeFooter :company="company" :domain="domain"></HomeFooter>
            </div>
            <button class="scroltop">
                <span class="iconmoon-house relative" id="btn-vibrate"></span
                >Top
            </button>
            <div class="mgm" style="display: none; opacity: 1"></div>
        </div>
    </div>
</template>

<style scoped>


@import "../assets/ebuka.css";
@import "../assets/css/style37913791.css";
@import "../assets/css/skin/skin-25b275b27.css";
@import "../assets/plugins/pace/pace.css";
@import "../assets/plugins/revolution/revolution/css/settings.css";
@import "../assets/plugins/revolution/revolution/css/navigation.css";

.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 45%;
    right: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, 0.3);
}
</style>
