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
        <div id="topbar" class="text-white bg-color" style="background-color: var(--secondary_color)">
            <div class="container">
                <div class="topbar-left sm-hide">
                    <span class="topbar-widget tb-social">
                        <a :href="'https://www.facebook.com/sharer/sharer.php?u=https://' +domain"><i
                                class="fa fa-facebook"></i></a>
                        <a :href="'https://twitter.com/intent/tweet?url=https://' +domain"><i
                                class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </span>
                </div>
                <div class="topbar-right">
                    <span class="topbar-widget sm-hide"><a href="#" style="margin-top: -4px"><i
                                class="fa fa-envelope"></i>{{ $root.email }}</a></span>
                    <span class="topbar-widget">
                        <div class="top-bar-item top-bar-item-full" id="id_100">
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
                                    <a href="/">
                                        <img alt="" class="logo" :src="$root.basepath + '/assets/images/home/logo.png'"
                                            style="width: 100px" />
                                        <img alt="" class="logo-2"
                                            :src="$root.basepath + '/assets/images/home/logo.png'" style="width: 40%" />
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <a href="/" class="nnav">Home<span></span></a>
                                    </li>
                                    <li>
                                        <a href="/about" class="nnav">About<span></span></a>
                                    </li>

                                    <li>
                                        <a href="/#plans" class="nnav">Investment<span></span></a>
                                    </li>
                                    <!-- <li>
                                        <a
                                            href="http://wallet.west-exchange.com/"
                                            class="nnav"
                                            >crypto wallet<span></span
                                        ></a>
                                    </li> -->
                                    <li>
                                        <a href="/#testimonials" class="nnav">Testimonies<span></span></a>
                                    </li>
                                    <li>
                                        <a href="/#contact" class="nnav">Contact<span></span></a>
                                    </li>

                                    <li>
                                        <a :href="$root.basepath + '/assets/documents/home/sec_doc.pdf'" target="_blank"
                                            class="nnav">SEC Regulation<span></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <a class="btn-custom" href="/login" style="
                                        background-color: #ffcc29;
                                        color: #000;
                                    ">INVESTORS</a>
                                <span id="menu-btn"><i class="fa fa-bars"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
    </div>
</template>
<style scoped>
a.nnav:hover {
    color: #ffcc29 !important;
}
</style>
