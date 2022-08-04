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
          style="background-image: url('assets/images/banner/banner2.jpg')"
        >
          <div class="overlay-main bg-black opacity-07"></div>
          <div class="container">
            <div class="wt-bnr-inr-entry">
              <h1 class="text-white">Contact Us</h1>
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
              <li>Contact Us</li>
            </ul>
          </div>
        </div>
        <div
          style="
            background-image: url('assets/images/background/footer-bg.jpg');
          "
          class="section-full p-tb20"
        >
          <div style="margin-bottom: 20px" class="section-head text-center">
            <h2 class="text-uppercase text-gray">CONTACT US</h2>
            <div class="wt-separator-outer">
              <div class="wt-separator bg-primary"></div>
            </div>
          </div>
          <div class="container">
            <div class="fcf-body">
              <div id="fcf-form">
                <h3 class="fcf-h3">Contact us</h3>
                <form
                  id="fcf-form-id"
                  class="fcf-form-class bg-dark"
                  method="post"
                  action=""
                >
                  <input
                    type="hidden"
                    name="_token"
                    value="Rmj1WpOrKetkFYc4cP6etkTqp3jr6Fub86OzfaEc"
                  />
                  <div class="fcf-form-group">
                    <label for="Name" class="fcf-label">Your name</label>
                    <div class="fcf-input-group">
                      <input
                        type="text"
                        id="Name"
                        name="name"
                        class="fcf-form-control"
                        required=""
                      />
                    </div>
                  </div>

                  <div class="fcf-form-group">
                    <label for="Email" class="fcf-label"
                      >Your email address</label
                    >
                    <div class="fcf-input-group">
                      <input
                        type="email"
                        id="Email"
                        name="email"
                        class="fcf-form-control"
                        required=""
                      />
                    </div>
                  </div>

                  <div class="fcf-form-group">
                    <label for="Name" class="fcf-label">Subject</label>
                    <div class="fcf-input-group">
                      <input
                        type="text"
                        id="subject"
                        name="subject"
                        class="fcf-form-control"
                        required=""
                      />
                    </div>
                  </div>

                  <div class="fcf-form-group">
                    <label for="Message" class="fcf-label">Your message</label>
                    <div class="fcf-input-group">
                      <textarea
                        id="Message"
                        name="message"
                        class="fcf-form-control"
                        rows="6"
                        maxlength="3000"
                        required=""
                      ></textarea>
                    </div>
                  </div>

                  <div class="fcf-form-group">
                    <button
                      type="submit"
                      id="fcf-button"
                      class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block"
                    >
                      Send Message
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <HomeFooter
          :company="company"
          :domain="domain"
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

#fcf-form {
  display: block;
}

.fcf-body {
  margin: 0;
  font-family: -apple-system, Arial, sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
  padding: 30px;
  padding-bottom: 10px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  max-width: 100%;
}

.fcf-form-group {
  margin-bottom: 1rem;
}

.fcf-input-group {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%;
}

.fcf-form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  outline: none;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.fcf-form-control:focus {
  border: 1px solid #313131;
}

select.fcf-form-control[size],
select.fcf-form-control[multiple] {
  height: auto;
}

textarea.fcf-form-control {
  font-family: -apple-system, Arial, sans-serif;
  height: auto;
}

label.fcf-label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

.fcf-credit {
  padding-top: 10px;
  font-size: 0.9rem;
  color: #545b62;
}

.fcf-credit a {
  color: #545b62;
  text-decoration: underline;
}

.fcf-credit a:hover {
  color: #0056b3;
  text-decoration: underline;
}

.fcf-btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
    border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .fcf-btn {
    transition: none;
  }
}

.fcf-btn:hover {
  color: #212529;
  text-decoration: none;
}

.fcf-btn:focus,
.fcf-btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.fcf-btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.fcf-btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.fcf-btn-primary:focus,
.fcf-btn-primary.focus {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.fcf-btn-lg,
.fcf-btn-group-lg > .fcf-btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.fcf-btn-block {
  display: block;
  width: 100%;
}

.fcf-btn-block + .fcf-btn-block {
  margin-top: 0.5rem;
}

input[type="submit"].fcf-btn-block,
input[type="reset"].fcf-btn-block,
input[type="button"].fcf-btn-block {
  width: 100%;
}
</style>
