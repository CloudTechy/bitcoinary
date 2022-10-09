<script>
export default {
    props: ["domain"],
     mounted() {
        var js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/wow.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/jquery.isotope.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/easing.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/owl.carousel.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/validation.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/jquery.magnific-popup.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/enquire.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/jquery.stellar.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/jquery.plugin.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute("src", this.$root.basepath + "/assets/js/home/typed.js");
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/jquery.countTo.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/jquery.countdown.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/designesia.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute("src", this.$root.basepath + "/assets/js/home/ebuka.js");
        document.body.appendChild(js);
    },

    created() {
        let style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/css/home/coloring.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/css/home/style.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/css/home/bootstrap.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/css/home/bootstrap-grid.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/css/home/bootstrap-reboot.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/css/home/animate.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/css/home/owl.carousel.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/css/home/owl.theme.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/css/home/owl.transitions.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/css/home/magnific-popup.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/css/home/jquery.countdown.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/css/home/others.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/css/fontawesome/css/font-awesome.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
    
      

        var js = document.createElement("script");
        js.setAttribute(
            "src",
            "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
        );
        js.setAttribute("async", true);
        document.body.appendChild(js);
    },
};
</script>
<template>
  
    <div>
        <div
            id="topbar"
            class="text-white bg-color"
            style="background-color: var(--secondary_color)"
        >
            <div class="container">
                <div class="topbar-left sm-hide">
                    <span class="topbar-widget tb-social">
                        <a
                            href="https://www.facebook.com/sharer/sharer.php?u=https://west-exchange.com"
                            ><i class="fa fa-facebook"></i
                        ></a>
                        <a
                            href="https://twitter.com/intent/tweet?url=https://west-exchange.com"
                            ><i class="fa fa-twitter"></i
                        ></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </span>
                </div>
                <div class="topbar-right">
                    <span class="topbar-widget sm-hide"
                        ><a href="#" style="margin-top: -4px"
                            ><i class="fa fa-envelope"></i
                            >westexchangeofficial@gmail.com</a
                        ></span
                    >
                    <span class="topbar-widget">
                        <div class="top-bar-item top-bar-item-full" id="id_100">
                            <!-- <select
                                onchange="doGTranslate(this);"
                                class="text-primary lang"
                            >
                                <option value="">EN</option>
                                <option value="en|af">Afrikaans</option>
                                <option value="en|sq">Albanian</option>
                                <option value="en|ar">Arabic</option>
                                <option value="en|hy">Armenian</option>
                                <option value="en|az">Azerbaijani</option>
                                <option value="en|eu">Basque</option>
                                <option value="en|be">Belarusian</option>
                                <option value="en|bg">Bulgarian</option>
                                <option value="en|ca">Catalan</option>
                                <option value="en|zh-CN">
                                    Chinese (Simplified)
                                </option>
                                <option value="en|zh-TW">
                                    Chinese (Traditional)
                                </option>
                                <option value="en|hr">Croatian</option>
                                <option value="en|cs">Czech</option>
                                <option value="en|da">Danish</option>
                                <option value="en|nl">Dutch</option>
                                <option value="en|en">English</option>
                                <option value="en|et">Estonian</option>
                                <option value="en|tl">Filipino</option>
                                <option value="en|fi">Finnish</option>
                                <option value="en|fr">French</option>
                                <option value="en|gl">Galician</option>
                                <option value="en|ka">Georgian</option>
                                <option value="en|de">German</option>
                                <option value="en|el">Greek</option>
                                <option value="en|ht">Haitian Creole</option>
                                <option value="en|iw">Hebrew</option>
                                <option value="en|hi">Hindi</option>
                                <option value="en|hu">Hungarian</option>
                                <option value="en|is">Icelandic</option>
                                <option value="en|id">Indonesian</option>
                                <option value="en|ga">Irish</option>
                                <option value="en|it">Italian</option>
                                <option value="en|ja">Japanese</option>
                                <option value="en|ko">Korean</option>
                                <option value="en|lv">Latvian</option>
                                <option value="en|lt">Lithuanian</option>
                                <option value="en|mk">Macedonian</option>
                                <option value="en|ms">Malay</option>
                                <option value="en|mt">Maltese</option>
                                <option value="en|no">Norwegian</option>
                                <option value="en|fa">Persian</option>
                                <option value="en|pl">Polish</option>
                                <option value="en|pt">Portuguese</option>
                                <option value="en|ro">Romanian</option>
                                <option value="en|ru">Russian</option>
                                <option value="en|sr">Serbian</option>
                                <option value="en|sk">Slovak</option>
                                <option value="en|sl">Slovenian</option>
                                <option value="en|es">Spanish</option>
                                <option value="en|sw">Swahili</option>
                                <option value="en|sv">Swedish</option>
                                <option value="en|th">Thai</option>
                                <option value="en|tr">Turkish</option>
                                <option value="en|uk">Ukrainian</option>
                                <option value="en|ur">Urdu</option>
                                <option value="en|vi">Vietnamese</option>
                                <option value="en|cy">Welsh</option>
                                <option value="en|yi">Yiddish</option>
                            </select> -->
                            <div id="google_translate_element"></div>
                        </div>
                    </span>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10" id="logo-mobile-fix">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="#">
                                        <img
                                            alt=""
                                            class="logo"
                                            :src="$root.basepath + '/assets/images/home/logo.png'"
                                            style="width: 100px"
                                        />
                                        <img
                                            alt=""
                                            class="logo-2"
                                            :src="$root.basepath + '/assets/images/home/logo.png'"
                                            style="width: 40%"
                                        />
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <a href="#" class="nnav"
                                            >Home<span></span
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="/about" class="nnav"
                                            >About<span></span
                                        ></a>
                                    </li>

                                    <li>
                                        <a
                                            href="/#plans"
                                            class="nnav"
                                            >Investment<span></span
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="http://wallet.west-exchange.com/"
                                            class="nnav"
                                            >crypto wallet<span></span
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="/#testimonials"
                                            class="nnav"
                                            >Testimonies<span></span
                                        ></a>
                                    </li>
                                    <li>
                                        <a
                                            href="/#contact"
                                            class="nnav"
                                            >Contact<span></span
                                        ></a>
                                    </li>

                                    <li>
                                        <a
                                            href="assets/sec_doc.pdf"
                                            target="_blank"
                                            class="nnav"
                                            >SEC Regulation<span></span
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <a
                                    class="btn-custom"
                                    href="/login"
                                    style="
                                        background-color: #ffcc29;
                                        color: #000;
                                    "
                                    >INVESTORS</a
                                >
                                <span id="menu-btn"
                                    ><i class="fa fa-bars"></i
                                ></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close --><!-- content begin -->
    </div>
</template>
<style scoped>
a.nnav:hover {
    color: #ffcc29 !important;
}
</style>
