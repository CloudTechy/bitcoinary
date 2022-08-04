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
      <HomeHeader :domain=" domain"></HomeHeader>
      <div class="page-content">
        <div
          class="wt-bnr-inr overlay-wraper"
          style="background-image: url('assets/images/banner/banner2.jpg')"
        >
          <div class="overlay-main bg-black opacity-07"></div>
          <div class="container">
            <div class="wt-bnr-inr-entry">
              <h1 class="text-white">Page Not Found</h1>
            </div>
          </div>
        </div>
        <div class="error">
    <div class="container mb-0">
      <div class="mb-0row justify-content-center" style="display: flex; justify-content: center;">
        <div class="col-lg-7 text-center">
          <!-- <img src="assets/images/error-404.png" alt="image"> -->
          <h2 class="title"><b>404</b> Page not found</h2>
          <p>The page you are looking for does not exist or another error occured <br> or temporarily not available.</p>
          <a href="/" class="cmn-btn mt-4">Go to Home</a>
        </div>
      </div>
    </div>
  </div>
        <!-- <HomeFooter
          :company=" company"
          :domain=" domain"
        ></HomeFooter> -->
      </div>
      <button class="scroltop">
        <span class="iconmoon-house relative" id="btn-vibrate"></span>Top
      </button>
      <!-- <div class="mgm" style="display: none; opacity: 1"></div> -->
    </div>
  </div>
</template>

<style scoped>
@import "../assets/css/notfound.css";
@import "../assets/ebuka.css";
@import "../assets/css/style37913791.css";
@import "../assets/css/skin/skin-25b275b27.css";
@import "../assets/plugins/pace/pace.css";
@import "../assets/plugins/revolution/revolution/css/settings.css";
@import "../assets/plugins/revolution/revolution/css/navigation.css";
</style>
