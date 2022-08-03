<script>
export default {
  props:['company','domain']
}
</script>
<template>
<footer
        class="site-footer bg-no-repeat bg-full-height bg-center"
        style="background-image: url('assets/images/background/footer-bg.jpg')"
      >
        <div class="footer-top overlay-wraper">
          <div class="overlay-main bg-black opacity-05"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="widget widget_about">
                  <div class="logo-footer clearfix p-b15">
                    <a href="/"
                      ><img
                        src="assets/images/logo2.png"
                        width="230"
                        height="67"
                        alt=""
                    /></a>
                  </div>
                  <p>
                    Since its establishment, we have shown commendably
                    successful and consistent performance and trading history.
                    Currently, it is regarded as one of the best, most
                    beneficial, brilliantly successful companies in the industry
                    of forex trading and investing.
                  </p>
                  <div
                    class="wt-icon-box-wraper left bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix"
                  >
                    <div class="icon-md text-primary">
                      <span class="fa fa-bitcoin fa-5x"></span>
                    </div>
                    <div class="icon-content text-white">
                      <p>All Crypto Currencies</p>
                      <h5 class="wt-tilte text-uppercase m-b0">
                        BITCOIN | ETHEREUM | LITECOIN
                      </h5>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="widget widget_services">
                  <h4 class="widget-title text-white">Quick links</h4>
                  <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/terms">Terms</a></li>
                    <li><a href="/plan">Plan</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="widget widget_services">
                  <h4 class="widget-title text-white">Contact Information</h4>
                  <ul>
                    <div
                      class="wt-icon-box-wraper left bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix"
                    >
                      <div class="icon-md text-primary">
                        <span class="iconmoon-email"></span>
                      </div>
                      <div class="icon-content text-white">
                        <h5 class="wt-tilte text-uppercase m-b0">Email</h5>
                        <p class="m-b0">
                          <a
                            style="font-weight: 500; font-size: 16px"
                            class="text-white"
                            :href="'mailto:support@' + domain + '.com'"
                          >
                            <span class="text-white"
                              >{{'support@'+domain}}</span
                            >
                          </a>
                        </p>
                      </div>
                    </div>
                    <br />
                    <div
                      class="wt-icon-box-wraper left bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix"
                    >
                      <div class="icon-md text-primary">
                        <span class="fa fa-whatsapp fa-4x"></span>
                      </div>
                      <div class="icon-content text-white">
                        <h5 class="wt-tilte text-uppercase m-b0">
                          <a
                            href="https://api.whatsapp.com/send?phone=17692030556&amp;text=Hello%20I%20want%20to%20know%20more%20about%20"
                            class="text-white"
                            >1-7692030556</a
                          >
                        </h5>
                      </div>
                    </div>
                    <br />
                    <div
                      class="wt-icon-box-wraper left bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix"
                    >
                      <div class="icon-md text-primary">
                        <span class="iconmoon-travel"></span>
                      </div>
                      <div class="icon-content text-white">
                        <h5 class="wt-tilte text-uppercase m-b0">Address</h5>
                        <p class="m-b0">Drottninggatan 7, 252 21 Helsingborg</p>
                        <p>Sweden</p>
                      </div>
                    </div>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-bottom overlay-wraper">
          <div class="overlay-main"></div>
          <div class="constrot-strip"></div>
          <div class="container p-t30">
            <div class="row">
              <div class="wt-footer-bot-left">
                <span class="copyrights-text"
                  >&copy; 2016 - 2022
                  <a href="/" class="base--color">{{company}}</a>. All rights
                  reserved</span
                >
              </div>
            </div>
          </div>
        </div>
        <h3></h3>
        <!-- Back To Top Starts  -->
      
      </footer>
</template>
<style scoped>
@import "../assets/ebuka.css";
@import "../assets/css/style37913791.css";
@import "../assets/css/skin/skin-25b275b27.css";
@import "../assets/plugins/pace/pace.css";
@import "../assets/plugins/revolution/revolution/css/settings.css";
@import "../assets/plugins/revolution/revolution/css/navigation.css";
</style>