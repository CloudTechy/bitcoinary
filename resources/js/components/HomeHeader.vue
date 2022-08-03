<script>
export default {
  props: ['domain'],
  created() {
           
            // js = document.createElement("script");
            // js.setAttribute("src", "assets/js/jquery-1.12.4.min.js");
            // js.setAttribute("async", "");
            // document.body.appendChild(js);
            // var js = document.createElement("script");
            // js.setAttribute("src", "assets/js/bootstrap.min.js");
            // document.body.appendChild(js);
            // js = document.createElement("script");
            // js.setAttribute("src", "assets/js/bootstrap-select.min.js");
            // document.body.appendChild(js);
            // js = document.createElement("script");
            // js.setAttribute(
            //     "src",
            //     "assets/js/jquery.bootstrap-touchspin.min.js"
            // );
            // document.body.appendChild(js);
            // js = document.createElement("script");
            // js.setAttribute("src", "assets/js/magnific-popup.min.js");
            // document.body.appendChild(js);
            // js = document.createElement("script");
            // js.setAttribute("src", "assets/js/waypoints.min.js");
            // document.body.appendChild(js);
            // js = document.createElement("script");
            // js.setAttribute("src", "assets/js/counterup.min.js");
            // document.body.appendChild(js);
            // js = document.createElement("script");
            // js.setAttribute("src", "assets/js/owl.carousel.min.js");
            // document.body.appendChild(js);
            // js = document.createElement("script");
            // js.setAttribute("src", "assets/js/waypoints-sticky.min.js");
            // document.body.appendChild(js);
            // js = document.createElement("script");
            // js.setAttribute("src", "assets/js/isotope.pkgd.min.js");
            // document.body.appendChild(js);
    let style = document.createElement('link')
    style.href = this.$root.basepath + "/assets/css/bootstrap.min.css"
    style.rel = "stylesheet"
    style.type = "text/css"
    document.head.appendChild(style)
    style = document.createElement('link')
    style.href = this.$root.basepath + "/assets/css/fontawesome/css/font-awesome.min.css"
    style.rel = "stylesheet"
    style.type = "text/css"
    document.head.appendChild(style)
    style = document.createElement('link')
    style.href = this.$root.basepath + "/assets/css/flaticon.min.css"
    style.rel = "stylesheet"
    style.type = "text/css"
    document.head.appendChild(style)
    style = document.createElement('link')
    style.href = this.$root.basepath + "/assets/css/bootstrap-select.min.css"
    style.rel = "stylesheet"
    style.type = "text/css"
document.head.appendChild(style)
   var js = document.createElement("script");
js.setAttribute("src", "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit");
document.body.appendChild(js);
  }
}

</script>
<template>
  <header class="site-header header-style-3 topbar-transparent">
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="clearfix">
            <div class="wt-topbar-left">
              <ul class="list-unstyled e-p-bx pull-left">
                <li>
                  <i class="fa fa-envelope"></i>
                  <a
                    style="font-weight: 500; font-size: 16px"
                    href="mailto:support@gmail.com"
                    ><span class="" data-cfemail=""
                      >support@{{domain}}</span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <div class="wt-topbar-right">
              <ul class="list-unstyled e-p-bx pull-right">
                <li><div id="google_translate_element"></div></li>

                <li>
                  <a href="/login"><i class="fa fa-user"></i>Sign in</a>
                </li>
                <li>
                  <a href="/register"><i class="fa fa-sign-in"></i>Sign up</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sticky-wrapper">
      <div class="sticky-header main-bar-wraper">
        <div class="main-bar">
          <div class="container">
            <div class="logo-header mostion">
              <a href="/">
                <img
                  src="assets/images/logo2.png"
                  width="230"
                  height="67"
                  alt=""
                />
              </a>
            </div>

            <button
              data-target=".header-nav"
              data-toggle="collapse"
              type="button"
              class="navbar-toggle collapsed"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <div class="header-nav navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/terms">Terms</a></li>
                <li><a href="/plan">Plan</a></li>
                <li>
                  <a href="/contact">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>
<style scoped>
@import "../assets/ebuka.css";
@import "../assets/css/style37913791.css";
@import "../assets/css/skin/skin-25b275b27.css";
@import "../assets/plugins/pace/pace.css";
@import "../assets/plugins/revolution/revolution/css/settings.css";
@import "../assets/plugins/revolution/revolution/css/navigation.css";


</style>
