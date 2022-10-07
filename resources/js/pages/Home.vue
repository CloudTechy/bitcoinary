<script>
export default {
    data() {
        return {
            company: this.$root.appName,
            domain: this.$root.appDomain,
        };
    },
    beforeMount() {
        var js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/jquery.min.js"
        );
        js.setAttribute("async", true);
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/bootstrap.min.js"
        );
        document.body.appendChild(js);
        // js = document.createElement("script");
        // js.setAttribute(
        //     "src",
        //     this.$root.basepath +
        //         "https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"
        // );
        // js.setAttribute("async", true);
        // document.body.appendChild(js);
    },
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
    },
};
</script>
<template>
        <div class="page-wraper">
            
            <HomeHeader :domain="domain"></HomeHeader>
            <div class="no-bottom no-top" id="content">
                <div id="top"></div>
                <section
                    aria-label="section"
                    :style="
                        'background:url(' +
                        $root.basepath +
                        '/assets/images/home/bg2.jpg) center top / cover;'
                    "
                    class="text-light"
                    id="home"
                >
                    <div class="container">
                        <div class="row align-items-center">
                            <div
                                class="col-lg-5 wow fadeInRight"
                                data-wow-delay=".0s"
                            >
                                <div class="spacer-10"></div>
                                <div class="h2 text-light">
                                    <span
                                        style="color: #ffcc29; font-size: 18px"
                                        >What you get on West Exchange</span
                                    >
                                    <br />
                                    <div class="typed-strings">
                                        <p>Profitable investment</p>
                                        <p>Secured Crypto wallet</p>
                                        <p>Interest-free loan</p>
                                    </div>
                                    <div class="typed"></div>
                                </div>
                                <p class="lead">
                                    Earn by investing in the rapidly growing
                                    crypto market. Our team of experts are
                                    dedicated to creating a unique & profitable
                                    investment opportunity for you.<br />
                                    <span style="color: #ffcc29"
                                        >Get a free simple, secure,
                                        industry-standard and elite wallet to
                                        keep your assets safe, based on over 10
                                        million users globally.</span
                                    >
                                </p>
                                <div class="spacer-20"></div>
                                <a
                                    class="btn-custom"
                                    href="account/register.php"
                                    style="
                                        background-color: #ffcc29;
                                        color: #000;
                                    "
                                    >SIGN UP</a
                                >
                                <a
                                    class="btn-custom"
                                    href="http://wallet.west-exchange.com/account/register.php"
                                    style="
                                        background-color: var(--primary_color);
                                        color: #fff;
                                    "
                                    >CRYPTO WALLET</a
                                >
                                <div class="mb-sm-30"></div>
                            </div>
                            <div
                                class="col-lg-6 offset-lg-1 text-center wow fadeInLeft"
                                data-wow-delay=".5s"
                                style="
                                    padding-top: 100px;
                                    padding-bottom: 100px;
                                "
                            >
                                <!--img src="assets/images/mobile.png" class="img-fluid" alt=""/-->
                                <iframe
                                    width="100%"
                                    height="350"
                                    src="https://www.youtube.com/embed/n2ekI2QnW-Y"
                                    title="West Exchange"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script> -->
                <!-- <coingecko-coin-price-marquee-widget
                    coin-ids="bitcoin,ethereum,eos,ripple,litecoin"
                    currency="usd"
                    background-color="#ffffff"
                    locale="en"
                ></coingecko-coin-price-marquee-widget> -->

                <section
                    id="section-highlight"
                    data-bgcolor="var(--secondary_color)"
                >
                    <div class="container" id="howItWorks">
                        <div class="text-center">
                            <span class="p-title" style="background-color: #fff"
                                >Discover</span
                            ><br />
                            <h2 style="color: #fff">How it works</h2>
                            <div
                                class="small-border pb-5"
                                style="border-color: #ffcc29"
                            ></div>
                        </div>
                        <div class="row sequence">
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-user bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <p class="whited" style="color: white">
                                            Create your own account to get
                                            started. It takes a few minutes to
                                            complete registration.
                                        </p>
                                        <a
                                            href="account/register.php"
                                            class="btn-border text-white"
                                            >Sign Up</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-line-chart bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <p class="whited" style="color: white">
                                            Make your investment deposit using
                                            Bitcoin or other accepted payment
                                            methods.
                                        </p>
                                        <a
                                            href="account/index.php"
                                            class="btn-border text-white"
                                            >Invest Funds</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-money bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <p class="whited" style="color: white">
                                            Now you are all setup and ready to
                                            start earning and withdraw without
                                            hassle.
                                        </p>
                                        <a
                                            href="account/index.php"
                                            class="btn-border text-white"
                                            >Withdraw Profit</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section
                    aria-label="section"
                    data-bgimage="url(assets/images/home/slide2.jpg) top"
                    class="text-light"
                    id="plans"
                >
                    <div class="container" id="about" align="center">
                        <div class="text-center">
                            <span
                                class="p-title"
                                style="color: #fff; background-color: #377dff"
                                >Our Investment Packages</span
                            ><br />
                            <h2 style="color: #fff">
                                Energised to be part of the future?
                            </h2>
                            <div
                                class="small-border pb-5"
                                style="border-color: #ffcc29"
                            ></div>
                            <div class="row sequence">
                                <div
                                    class="col-lg-3 col-md-6 col-sm-12 sq-item wow"
                                >
                                    <div
                                        class="pricing-s1 mb30"
                                        style="border: 2px white solid"
                                    >
                                        <div class="top">
                                            <p class="plan-tagline">
                                                <b> Starter </b>
                                            </p>
                                        </div>
                                        <div class="mid text-light bg-color">
                                            <h2>10%</h2>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Duration: 24 Hours</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Minimum: $100.00</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Maximum: $3,999.00</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action">
                                            <a
                                                href="account/register.php"
                                                class="btn-custom"
                                                style="
                                                    background-color: #ffcc29;
                                                    color: #000;
                                                "
                                                >Sign Up</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-md-6 col-sm-12 sq-item wow"
                                >
                                    <div
                                        class="pricing-s1 mb30"
                                        style="border: 2px white solid"
                                    >
                                        <div class="top">
                                            <p class="plan-tagline">
                                                <b> Regular </b>
                                            </p>
                                        </div>
                                        <div class="mid text-light bg-color">
                                            <h2>15%</h2>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Duration: 48 Hours</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Minimum: $4,000.00</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Maximum: $8,999.00</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action">
                                            <a
                                                href="account/register.php"
                                                class="btn-custom"
                                                style="
                                                    background-color: #ffcc29;
                                                    color: #000;
                                                "
                                                >Sign Up</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-md-6 col-sm-12 sq-item wow"
                                >
                                    <div
                                        class="pricing-s1 mb30"
                                        style="border: 2px white solid"
                                    >
                                        <div class="top">
                                            <p class="plan-tagline">
                                                <b> Pro </b>
                                            </p>
                                        </div>
                                        <div class="mid text-light bg-color">
                                            <h2>35%</h2>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Duration: 6 Days</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Minimum: $9,000.00</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Maximum: $29,999.00</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action">
                                            <a
                                                href="account/register.php"
                                                class="btn-custom"
                                                style="
                                                    background-color: #ffcc29;
                                                    color: #000;
                                                "
                                                >Sign Up</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-md-6 col-sm-12 sq-item wow"
                                >
                                    <div
                                        class="pricing-s1 mb30"
                                        style="border: 2px white solid"
                                    >
                                        <div class="top">
                                            <p class="plan-tagline">
                                                <b> Elite </b>
                                            </p>
                                        </div>
                                        <div class="mid text-light bg-color">
                                            <h2>50%</h2>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Duration: 30 Days</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Minimum: $30,000.00</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Maximum: $120,000.00</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action">
                                            <a
                                                href="account/register.php"
                                                class="btn-custom"
                                                style="
                                                    background-color: #ffcc29;
                                                    color: #000;
                                                "
                                                >Sign Up</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 style="color: #fff">Mining Plans</h2>
                            <div
                                class="small-border pb-5"
                                style="border-color: #ffcc29"
                            ></div>
                            <div class="row sequence">
                                <div
                                    class="col-lg-3 col-md-6 col-sm-12 sq-item wow"
                                >
                                    <div
                                        class="pricing-s1 mb30"
                                        style="border: 2px white solid"
                                    >
                                        <div class="top">
                                            <p class="plan-tagline">
                                                <b> Clarke </b>
                                            </p>
                                        </div>
                                        <div class="mid text-light bg-color">
                                            <h2>20%</h2>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Duration: 30 Days</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Minimum: $5,000.00</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Maximum: $10,999.00</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action">
                                            <a
                                                href="account/register.php"
                                                class="btn-custom"
                                                style="
                                                    background-color: #ffcc29;
                                                    color: #000;
                                                "
                                                >Sign Up</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-md-6 col-sm-12 sq-item wow"
                                >
                                    <div
                                        class="pricing-s1 mb30"
                                        style="border: 2px white solid"
                                    >
                                        <div class="top">
                                            <p class="plan-tagline">
                                                <b> Tradis </b>
                                            </p>
                                        </div>
                                        <div class="mid text-light bg-color">
                                            <h2>35%</h2>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Duration: 30 Days</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Minimum: $10,000.00</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Maximum: $25,999.00</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action">
                                            <a
                                                href="account/register.php"
                                                class="btn-custom"
                                                style="
                                                    background-color: #ffcc29;
                                                    color: #000;
                                                "
                                                >Sign Up</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-md-6 col-sm-12 sq-item wow"
                                >
                                    <div
                                        class="pricing-s1 mb30"
                                        style="border: 2px white solid"
                                    >
                                        <div class="top">
                                            <p class="plan-tagline">
                                                <b> Blackbox </b>
                                            </p>
                                        </div>
                                        <div class="mid text-light bg-color">
                                            <h2>50%</h2>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Duration: 30 Days</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Minimum: $26,000.00</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Maximum: $50,999.00</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action">
                                            <a
                                                href="account/register.php"
                                                class="btn-custom"
                                                style="
                                                    background-color: #ffcc29;
                                                    color: #000;
                                                "
                                                >Sign Up</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-md-6 col-sm-12 sq-item wow"
                                >
                                    <div
                                        class="pricing-s1 mb30"
                                        style="border: 2px white solid"
                                    >
                                        <div class="top">
                                            <p class="plan-tagline">
                                                <b> Ultimate </b>
                                            </p>
                                        </div>
                                        <div class="mid text-light bg-color">
                                            <h2>100%</h2>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Duration: 30 Days</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Minimum: $51,000.00</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i
                                                    ><b>Maximum: Unlimited</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action">
                                            <a
                                                href="account/register.php"
                                                class="btn-custom"
                                                style="
                                                    background-color: #ffcc29;
                                                    color: #000;
                                                "
                                                >Sign Up</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row sequence">
                                <div class="col-lg-6 offset-lg-3 text-center">
                                    <small class="text-white"
                                        >All plans shown are principal
                                        inclusive.</small
                                    >
                                </div>
                                <div class="col-md-12">
                                    <h2
                                        class="title"
                                        style="
                                            text-align: center;
                                            margin-bottom: 20px;
                                            color: #fff;
                                        "
                                    >
                                        Calculate <b>Profit</b>
                                    </h2>
                                    <form name="calculator">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label
                                                    class="text-warning font-weight-bold"
                                                    >Choose Plan</label
                                                >
                                                <select
                                                    class="form-control"
                                                    name="percent"
                                                    id="percent"
                                                >
                                                    <option value="">
                                                        Select
                                                    </option>
                                                    <option value="0.1">
                                                        Starter: $ 100- $3999
                                                    </option>
                                                    <option value="0.15">
                                                        Regular: $ 4000- $8999
                                                    </option>
                                                    <option value="0.35">
                                                        Pro: $ 9000- $29999
                                                    </option>
                                                    <option value="0.5">
                                                        Elite: $ 30000- $120000
                                                    </option>
                                                    <option value="0.2">
                                                        Clarke: $ 5000- $10999
                                                    </option>
                                                    <option value="0.35">
                                                        Tradis: $ 10000- $25999
                                                    </option>
                                                    <option value="0.5">
                                                        Blackbox: $ 26000-
                                                        $50999
                                                    </option>
                                                    <option value="1">
                                                        Ultimate: $ 51000-
                                                        Unlimited
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label
                                                        class="text-warning font-weight-bold"
                                                        >Enter Amount</label
                                                    >
                                                    <input
                                                        type="number"
                                                        name="amount"
                                                        id="amount"
                                                        class="form-control"
                                                        aria-describedby="basic-addon1"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label
                                                        class="text-warning font-weight-bold"
                                                        >&nbsp;</label
                                                    ><br />
                                                    <input
                                                        type="button"
                                                        class="btn btn-warning"
                                                        style="
                                                            line-height: normal;
                                                            color: #fff;
                                                        "
                                                        value="Calculate Profit"
                                                        onClick="multiply()"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div
                                                        class="col-sm-6 col-xs-12"
                                                    >
                                                        <label
                                                            class="text-warning font-weight-bold"
                                                            >Net Profit</label
                                                        >
                                                        <h2 class="text-white">
                                                            $<span
                                                                id="netProfit"
                                                                class="text-white"
                                                                >0.00</span
                                                            >
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="col-sm-6 col-xs-12"
                                                    >
                                                        <label
                                                            class="text-warning font-weight-bold"
                                                            >Total Return</label
                                                        >
                                                        <h2 class="text-white">
                                                            $<span
                                                                id="profit"
                                                                class="text-white"
                                                                >0.00</span
                                                            >
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section
                    id="section-banner"
                    data-bgcolor="var(--secondary_color)"
                    class="profile"
                >
                    <div class="container" id="about">
                        <div class="row align-items-center">
                            <div
                                class="col-lg-6 wow fadeInLeft"
                                data-wow-delay="0s"
                            >
                                <h2 style="color: #fff">Corporate Profile</h2>
                                <div class="tab-content" id="pills-tabContent">
                                    <div
                                        class="tab-pane fade show active whited"
                                        id="pills-home"
                                        role="tabpanel"
                                        aria-labelledby="pills-home-tab"
                                    >
                                        <div
                                            class="field field--name-field-nir-global-block-body field--type-text-long field--label-hidden field__item"
                                            style="color: #fff"
                                        >
                                            <p>
                                                We build, own, and operate data
                                                center and electrical
                                                infrastructure for the mining of
                                                Bitcoin.
                                            </p>

                                            <p>
                                                We believe it is increasingly
                                                vital that Bitcoin is, and can
                                                be, mined and utilized in an
                                                environmentally and socially
                                                responsible manner. We are
                                                focused on locating our
                                                operations in areas with
                                                low-cost and excess renewable
                                                energy.
                                            </p>

                                            <p>
                                                We are building proprietary data
                                                centers that continue to be
                                                refined through years of
                                                research and development to
                                                optimize the operational
                                                environment and efficiencies,
                                                including stable uptime
                                                performance during high and
                                                low-temperature periods.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="spacer-half"></div>
                                <a
                                    class="btn-custom"
                                    href="account/register.php"
                                    style="
                                        background-color: #ffcc29;
                                        color: #000;
                                    "
                                    >BECOME AN INVESTOR</a
                                >
                            </div>
                            <div
                                class="col-lg-6 d-none d-lg-block d-xl-block text-center wow fadeInRight"
                                data-wow-delay="0s"
                            >
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div
                                        class="tradingview-widget-container__widget"
                                    ></div>

                                    <!-- <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                    {
                      "symbol": "COINBASE:BTCUSD",
                      "width": "100%",
                      "height": 400,
                      "locale": "en",
                      "dateRange": "1D",
                      "colorTheme": "dark",
                      "trendLineColor": "rgba(255, 255, 0, 1)",
                      "underLineColor": "rgba(255, 0, 0, 0.1)",
                      "underLineBottomColor": "rgba(255, 0, 0, 0)",
                      "isTransparent": true,
                      "autosize": false,
                      "largeChartUrl": ""
                    }
                  </script> -->
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                </section>

                <!-- section close -->
                <section
                    aria-label="section"
                    data-bgimage="url(assets/images/home/hp.jpg) top"
                    class="text-light"
                    id="whyUs"
                >
                    <div class="container">
                        <div class="text-center">
                            <span class="p-title" style="background-color: #fff"
                                >Discover</span
                            ><br />
                            <h2 style="color: #fff">Why we are the best</h2>
                            <div
                                class="small-border"
                                style="border-color: #ffcc29"
                            ></div>
                        </div>
                        <div class="row sequence">
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-usd bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">
                                            Profitable Returns
                                        </h4>
                                        <p class="whited" style="color: white">
                                            Our Plans & our earnings at the
                                            mining & trading sector of the
                                            business apply to all, we make sure
                                            that our expenses & revenue are
                                            balanced to keep us running.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-shield bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">
                                            Top Encryption
                                        </h4>
                                        <p class="whited" style="color: white">
                                            We have enforced SSL encryption on
                                            all dynamic response pages to secure
                                            financial transactions and account
                                            charges per demand.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-tachometer bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">
                                            Fast Proccess
                                        </h4>
                                        <p class="whited" style="color: white">
                                            You can withdraw your money at any
                                            moment by requesting. The funds will
                                            be sent to your crypto-wallet
                                            instantly.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-certificate bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">
                                            Legal Company
                                        </h4>
                                        <p class="whited" style="color: white">
                                            Our company conducts absolutely
                                            legal activities in the legal field.
                                            We are certified to operate
                                            investment business, we are legal
                                            and safe.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-smile-o bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">
                                            High reliability
                                        </h4>
                                        <p class="whited" style="color: white">
                                            We are trusted by a huge number of
                                            people. We are working hard
                                            constantly to improve the level of
                                            our security system and minimize
                                            possible risks.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-user-secret bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">Anonymity</h4>
                                        <p class="whited" style="color: white">
                                            Anonymity and using cryptocurrency
                                            as a payment instrument. In the era
                                            of electronic money – this is one of
                                            the most convenient ways of
                                            cooperation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-money bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">
                                            Quick Withdrawal
                                        </h4>
                                        <p class="whited" style="color: white">
                                            Our all retreats are treated
                                            spontaneously once requested. There
                                            are high maximum limits. The minimum
                                            withdrawal amount is only $10 .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-share-alt bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">
                                            Referral Program
                                        </h4>
                                        <p class="whited" style="color: white">
                                            We think investing is better with
                                            family and friends, so for everyone
                                            you invite to join, you’ll both earn
                                            reward crypto assets.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-headphones bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">
                                            24/7 Support
                                        </h4>
                                        <p class="whited" style="color: white">
                                            We provide 24/7 customer support
                                            through e-mail and telegram. Our
                                            support representatives are
                                            periodically available to elucidate
                                            any difficulty.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-server bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">
                                            Dedicated Server
                                        </h4>
                                        <p class="whited" style="color: white">
                                            We are using a dedicated server for
                                            the website which allows us
                                            exclusive use of the resources of
                                            the entire server.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-lock bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">SSL Secured</h4>
                                        <p class="whited" style="color: white">
                                            Comodo Essential-SSL Security
                                            encryption confirms that the
                                            presented content is genuine and
                                            legitimate.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                                <div
                                    class="f-box f-icon-left f-icon-circle f-icon-shadow"
                                >
                                    <i
                                        class="fa fa-ban bg-color text-light"
                                    ></i>
                                    <div class="fb-text">
                                        <h4 style="color: #fff">
                                            DDOS Protection
                                        </h4>
                                        <p class="whited" style="color: white">
                                            We are using one of the most
                                            experienced, professional, and
                                            trusted DDoS Protection and
                                            mitigation provider.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section
                    aria-label="section"
                    data-bgimage="url(assets/images/home/sl-home2-img1.jpg) top"
                    class="text-light"
                    id="affiliate"
                >
                    <div class="container">
                        <div class="row align-items-center">
                            <div
                                class="col-md-6 text-center wow fadeInLeft"
                                data-wow-delay="0s"
                                style="margin: auto 0px"
                            >
                                <br /><br />
                                <img
                                    src="assets/images/mobile.png"
                                    class="img-fluid"
                                    alt=""
                                    style="width: 60%"
                                />
                            </div>
                            <div
                                class="col-md-6 col-sm-12 wow fadeInRight"
                                data-wow-delay="0s"
                            >
                                <span class="p-title" style="color: #fff"
                                    >Affiliates</span
                                ><br />
                                <h2 style="color: #fff">Earn Referral Bonus</h2>
                                <p style="color: #fff">
                                    “We think investing is better with family
                                    and friends, so for everyone you invite to
                                    join, you’ll both earn reward crypto assets.
                                    As soon as your friend signs up and Makes a
                                    first deposit , we’ll credit each of your
                                    accounts with a reward Crypto Assets. Keep
                                    in mind: You can receive up to $500 in
                                    reward crypto assets each calendar year, so
                                    feel free to spread the word.”
                                </p>
                                <div class="spacer-half"></div>
                                <a
                                    class="btn-custom"
                                    href="account/register.php"
                                    style="
                                        background-color: #ffcc29;
                                        color: #000;
                                    "
                                    >Sign Up</a
                                >&nbsp;
                                <a
                                    class="btn-border"
                                    href="account/login.php"
                                    style="
                                        background-color: var(
                                            --secondary_color
                                        );
                                    "
                                    >Login</a
                                >
                            </div>
                        </div>
                    </div>
                </section>

                <section
                    id="section-highlight"
                    data-bgcolor="var(--secondary_color)"
                >
                    <div class="container" id="testimonials">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <span class="p-title" style="color: #fff"
                                        >Testimonials</span
                                    ><br />
                                    <h2 style="color: #fff">
                                        What Our Investors Say
                                    </h2>
                                    <div
                                        class="small-border"
                                        style="border-color: #ffcc29"
                                    ></div>
                                </div>
                                <div
                                    class="owl-carousel owl-theme wow fadeInUp"
                                    id="testimonial-carousel"
                                >
                                    <div class="item">
                                        <div class="de_testi opt-2 review">
                                            <blockquote>
                                                <div class="p-rating">
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h3>Unbelievable!</h3>
                                                <p>
                                                    “My questions/issues are
                                                    resolved as soon as I make
                                                    them known to them. Indeed,
                                                    they provide customer
                                                    service with a delightful
                                                    difference”
                                                </p>
                                                <div class="de_testi_by">
                                                    <span
                                                        ><b>Dehli</b>,
                                                        India</span
                                                    >
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="de_testi opt-2 review">
                                            <blockquote>
                                                <div class="p-rating">
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h3>Thank you</h3>
                                                <p>
                                                    “What an excellent service.
                                                    Thank you very much, I
                                                    really recommend this
                                                    company”
                                                </p>
                                                <div class="de_testi_by">
                                                    <span
                                                        ><b>Sarah</b>, USA</span
                                                    >
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="de_testi opt-2 review">
                                            <blockquote>
                                                <div class="p-rating">
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i
                                                        class="fa fa-star checked"
                                                    ></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h3>Pretty Awesome!</h3>
                                                <p>
                                                    “Thank you for your support
                                                    and concern during this
                                                    difficult times. Accessing
                                                    my money is very easy.
                                                    Opening an investment
                                                    account was a good
                                                    decision.”
                                                </p>
                                                <div class="de_testi_by">
                                                    <span
                                                        ><b>Alexi</b>,
                                                        Brazil</span
                                                    >
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <hr
                                    style="border-color: #ffcc29; height: 2px"
                                />
                                <div class="row wow fadeInUp">
                                    <div class="col-lg-4">
                                        <video height="200" controls>
                                            <source
                                                src="https://west-exchange.com/account/upload/vid3.mp4"
                                                type="video/mp4"
                                            />
                                            <source
                                                src="https://west-exchange.com/account/upload/vid3.mp4.ogg"
                                                type="video/ogg"
                                            />
                                            Your browser does not support HTML
                                            video.
                                        </video>
                                    </div>
                                    <div class="col-lg-4">
                                        <video height="200" controls>
                                            <source
                                                src="https://west-exchange.com/account/upload/vid2.mp4"
                                                type="video/mp4"
                                            />
                                            <source
                                                src="https://west-exchange.com/account/upload/vid2.mp4.ogg"
                                                type="video/ogg"
                                            />
                                            Your browser does not support HTML
                                            video.
                                        </video>
                                    </div>
                                    <div class="col-lg-4">
                                        <video height="200" controls>
                                            <source
                                                src="https://west-exchange.com/account/upload/vid1.mp4"
                                                type="video/mp4"
                                            />
                                            <source
                                                src="https://west-exchange.com/account/upload/vid1.mp4.ogg"
                                                type="video/ogg"
                                            />
                                            Your browser does not support HTML
                                            video.
                                        </video>
                                    </div>
                                </div>
                                <hr
                                    style="border-color: #ffcc29; height: 2px"
                                />
                                <div class="text-center">
                                    <a
                                        class="btn-custom"
                                        href="testimonies.php"
                                        style="
                                            background-color: #ffcc29;
                                            color: #000;
                                        "
                                        >VIEW ALL</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section
                    aria-label="section"
                    data-bgimage="url(assets/images/home/Layer-4.jpg) top"
                    class="text-light"
                    id="contact"
                >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 style="color: #fff">
                                    Do you have any question?
                                </h3>
                                <p class="whited">
                                    Kindly contact us with any of the means
                                    below & we will get back to you as soon as
                                    possible
                                </p>
                                <div
                                    class="padding40 box-rounded mb30"
                                    data-bgcolor="#c94747"
                                >
                                    <h3>Our Office</h3>
                                    <address class="s1">
                                        <span
                                            ><i
                                                class="id-color fa fa-map-marker fa-lg"
                                            ></i
                                            >220 W Exchange St, Providence, RI
                                            02903</span
                                        >
                                        <span
                                            ><i
                                                class="id-color fa fa-envelope-o fa-lg"
                                            ></i
                                            ><a
                                                href="mailto:westexchangeofficial@gmail.com"
                                                >westexchangeofficial@gmail.com</a
                                            >
                                        </span>
                                    </address>
                                </div>
                            </div>
                            <div class="col-lg-8 mb-sm-30">
                                <form
                                    name="contactForm"
                                    id="contact_form"
                                    class="form-border"
                                    method="post"
                                    action=""
                                >
                                    <div class="field-set">
                                        <input
                                            type="text"
                                            name="name"
                                            id="name"
                                            class="form-control"
                                            placeholder="Your Name"
                                            style="background-color: #f0f4fd"
                                        />
                                    </div>
                                    <div class="field-set">
                                        <input
                                            type="text"
                                            name="email"
                                            id="email"
                                            class="form-control"
                                            placeholder="Your Email"
                                            style="background-color: #f0f4fd"
                                        />
                                    </div>
                                    <div class="field-set">
                                        <input
                                            type="text"
                                            name="phone"
                                            id="phone"
                                            class="form-control"
                                            placeholder="Your Phone"
                                            style="background-color: #f0f4fd"
                                        />
                                    </div>
                                    <div class="field-set">
                                        <textarea
                                            name="message"
                                            id="message"
                                            class="form-control"
                                            placeholder="Your Message"
                                            style="background-color: #f0f4fd"
                                        ></textarea>
                                    </div>
                                    <div class="spacer-half"></div>
                                    <div id="submit">
                                        <input
                                            type="submit"
                                            id="send_message"
                                            value="Submit Form"
                                            class="btn btn-custom"
                                            style="
                                                background-color: #ffcc29;
                                                color: #000;
                                            "
                                        />
                                    </div>
                                    <div id="mail_success" class="success">
                                        Your message has been sent successfully.
                                    </div>
                                    <div id="mail_fail" class="error">
                                        Sorry, error occured this time sending
                                        your message.
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <section data-bgcolor="var(--secondary_color)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 style="color: #fff">
                                    West Exchange Transactions
                                </h2>
                                <div
                                    class="small-border"
                                    style="border-color: #ffcc29"
                                ></div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="iq-cart_total heading-left">
                                    <h4
                                        style="color: #fff"
                                        class="iq-mb-30 title iq-tw-5"
                                    >
                                        Recent Deposits
                                    </h4>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr class="iq-cart-st">
                                                <td
                                                    class="text-warning"
                                                    style="font-weight: bold"
                                                >
                                                    Member Name
                                                </td>
                                                <td
                                                    class="text-warning"
                                                    style="font-weight: bold"
                                                >
                                                    Date
                                                </td>
                                                <td
                                                    class="text-warning"
                                                    style="font-weight: bold"
                                                >
                                                    <span class="currencies"
                                                        >$</span
                                                    ><span class="amount"
                                                        >Amount</span
                                                    >
                                                </td>
                                            </tr>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Dr. Aisha
                                                </td>
                                                <td style="color: #fff">
                                                    4th October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-up"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $100.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Meisie Adele
                                                </td>
                                                <td style="color: #fff">
                                                    4th October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-up"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $11,250.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Michael Muellner
                                                </td>
                                                <td style="color: #fff">
                                                    4th October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-up"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $30,000.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    uğur dinçer
                                                </td>
                                                <td style="color: #fff">
                                                    1st October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-up"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $300.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Meisie Adele
                                                </td>
                                                <td style="color: #fff">
                                                    1st October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-up"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $100.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Bernadette beadeux
                                                </td>
                                                <td style="color: #fff">
                                                    1st October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-up"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $50,000.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Madalena Pereira
                                                </td>
                                                <td style="color: #fff">
                                                    1st October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-up"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $100,000.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Avessalom mukhanov
                                                </td>
                                                <td style="color: #fff">
                                                    29th September, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-up"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $2,000.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Avessalom mukhanov
                                                </td>
                                                <td style="color: #fff">
                                                    29th September, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-up"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $4,000.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Eashan Das
                                                </td>
                                                <td style="color: #fff">
                                                    27th September, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-up"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $11,500.00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="iq-cart_total heading-left">
                                    <h4
                                        style="color: #fff"
                                        class="iq-mb-30 title iq-tw-5"
                                    >
                                        Recent Withdrawals
                                    </h4>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr class="iq-cart-st">
                                                <td
                                                    class="text-warning"
                                                    style="font-weight: bold"
                                                >
                                                    Member Name
                                                </td>
                                                <td
                                                    class="text-warning"
                                                    style="font-weight: bold"
                                                >
                                                    Date
                                                </td>
                                                <td
                                                    class="text-warning"
                                                    style="font-weight: bold"
                                                >
                                                    <span class="currencies"
                                                        >$</span
                                                    ><span class="amount"
                                                        >Amount</span
                                                    >
                                                </td>
                                            </tr>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Dr. Aisha
                                                </td>
                                                <td style="color: #fff">
                                                    5th October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-down"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $110.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Lizaverta kartseva
                                                </td>
                                                <td style="color: #fff">
                                                    4th October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-down"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $1,000.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    NicholasHussain
                                                </td>
                                                <td style="color: #fff">
                                                    4th October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-down"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $950.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    JamesUrquhart
                                                </td>
                                                <td style="color: #fff">
                                                    4th October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-down"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $1,750.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    DerrickDemelo
                                                </td>
                                                <td style="color: #fff">
                                                    4th October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-down"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $800.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    RosieHowe
                                                </td>
                                                <td style="color: #fff">
                                                    4th October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-down"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $2,000.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Butz Alcancia
                                                </td>
                                                <td style="color: #fff">
                                                    4th October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-down"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $1,204.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Meisie Adele
                                                </td>
                                                <td style="color: #fff">
                                                    1st October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-down"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $2,000.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Kathryn Garnier
                                                </td>
                                                <td style="color: #fff">
                                                    1st October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-down"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $6,000.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="iq-shipping">
                                                <td style="color: #fff">
                                                    <img
                                                        src="assets/images/star.png"
                                                        width="15px"
                                                        alt=""
                                                    />
                                                    Antoinette lemaire
                                                </td>
                                                <td style="color: #fff">
                                                    1st October, 2022
                                                </td>
                                                <td style="color: #30c731">
                                                    <i
                                                        class="fa fa-arrow-down"
                                                        aria-hidden="true"
                                                    ></i>
                                                    $6,000.00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section
                    :style="
                        'background:url(' +
                        $root.basepath +
                        '/assets/images/home/bg2.jpg)  center top / cover;'
                    "
                    id="faqs"
                >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 style="color: #fff">Frequent Questions</h2>
                                <div
                                    class="small-border"
                                    style="border-color: #ffcc29"
                                ></div>
                            </div>
                            <div class="col-md-6">
                                <!-- Accordion -->
                                <div id="accordion-1" class="accordion">
                                    <!-- Accordion item 1 -->
                                    <div class="card">
                                        <div
                                            id="heading-a1"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-a1"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-a1"
                                                    class="d-block position-relative text-dark collapsible-link py-2"
                                                    >How do I make profit from
                                                    cryptocurrency
                                                    investment?</a
                                                >
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-a1"
                                            aria-labelledby="heading-a1"
                                            data-parent="#accordion-1"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: The profit on investment
                                                    is the interest earned which
                                                    is paid periodically.
                                                    Interest on investment is
                                                    paid monthly, quarterly or
                                                    at maturity of the
                                                    investment. You have the
                                                    option of reinvesting your
                                                    accrued interest or
                                                    receiving (same as) a direct
                                                    credit into your Wallet.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion item 2 -->
                                    <div class="card">
                                        <div
                                            id="heading-a2"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-a2"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-a2"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >What interest rates can I
                                                    expect to receive?</a
                                                >
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-a2"
                                            aria-labelledby="heading-a2"
                                            data-parent="#accordion-1"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: Our interest rates vary
                                                    depending on your investment
                                                    package, value of
                                                    investment, duration of the
                                                    investment and the current
                                                    interest rate trend in the
                                                    financial market. However,
                                                    we have one of the most
                                                    competitive rates in the
                                                    market.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion item 3 -->
                                    <div class="card">
                                        <div
                                            id="heading-a3"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-a3"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-a3"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >How do I know my money is
                                                    safe?</a
                                                >
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-a3"
                                            aria-labelledby="heading-a3"
                                            data-parent="#accordion-1"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: We are regulated by the
                                                    Securities and Exchange
                                                    Commission (SEC) and
                                                    Financial Industry
                                                    Regulatory Authority. West
                                                    Exchangeowns a very strong
                                                    capital base and a robust
                                                    risk management framework
                                                    that ensures your investment
                                                    is in safe hands.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div
                                            id="heading-a4"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-a4"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-a4"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >What will I receive as
                                                    proof of my investment</a
                                                >
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-a4"
                                            aria-labelledby="heading-a4"
                                            data-parent="#accordion-1"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: The West ExchangeCustomer
                                                    Service team will provide
                                                    you with an investment
                                                    certificate at the start of
                                                    your investment and for
                                                    additional investments in
                                                    your account.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div
                                            id="heading-b5"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-b5"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-b5"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >Can I invest in multiple
                                                    investment products?
                                                </a>
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-b5"
                                            aria-labelledby="heading-b4"
                                            data-parent="#accordion-2"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: Yes, you can. Most
                                                    investment products are
                                                    tailored to address a
                                                    particular investment
                                                    objective. Thus, you can
                                                    invest in several of our
                                                    products to suit your
                                                    various investment needs.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div
                                            id="heading-b6"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-b6"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-b6"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >What is the maximum number
                                                    of people in a group who can
                                                    invest in this scheme?
                                                </a>
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-b6"
                                            aria-labelledby="heading-b4"
                                            data-parent="#accordion-2"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: There is no cap to the
                                                    number of people who can
                                                    make up a group to invest in
                                                    the scheme.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div
                                            id="heading-b7"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-b7"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-b7"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >Can I invest with what
                                                    currencies?
                                                </a>
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-b7"
                                            aria-labelledby="heading-b4"
                                            data-parent="#accordion-2"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: Yes, you can invest with
                                                    crypto currencies like
                                                    Bitcoins ( BTC ), Ethereum (
                                                    ETH ), Binance coin ( BNB
                                                    ),Tether USD ( USDT ) ,
                                                    Cardano ( ADA ) .
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Accordion -->
                                <div id="accordion-2" class="accordion">
                                    <!-- Accordion item 1 -->
                                    <div class="card">
                                        <div
                                            id="heading-b8"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-b8"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-b8"
                                                    class="d-block position-relative text-dark collapsible-link py-2"
                                                    >How can I keep track of my
                                                    investment?</a
                                                >
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-b8"
                                            aria-labelledby="heading-b1"
                                            data-parent="#accordion-2"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: Once you’ve signed on as
                                                    a client, you will be given
                                                    access to view and monitor
                                                    your account activity
                                                    online. You may also request
                                                    for your account statement
                                                    at any time.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion item 2 -->
                                    <div class="card">
                                        <div
                                            id="heading-b9"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-b9"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-b9"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >Can I invest for my
                                                    children?</a
                                                >
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-b9"
                                            aria-labelledby="heading-b2"
                                            data-parent="#accordion-2"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: Yes, you can.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion item 3 -->
                                    <div class="card">
                                        <div
                                            id="heading-b10"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-b10"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-b10"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >How long does it take to
                                                    withdraw my fund when I want
                                                    it?</a
                                                >
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-b10"
                                            aria-labelledby="heading-b3"
                                            data-parent="#accordion-2"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: Withdrawal of fund is
                                                    processed on the same
                                                    working day your request is
                                                    received provided your
                                                    request is received during
                                                    working hours (8am – 5pm).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div
                                            id="heading-b11"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-b11"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-b11"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >Can I invest from any part
                                                    of the world?
                                                </a>
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-b11"
                                            aria-labelledby="heading-b4"
                                            data-parent="#accordion-2"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: Yes, you can. Our robust
                                                    platform allows you to
                                                    invest from any part of the
                                                    world by opening an account
                                                    online.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div
                                            id="heading-b12"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-b12"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-b12"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >Can I add to my investment
                                                    at any time?
                                                </a>
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-b12"
                                            aria-labelledby="heading-b4"
                                            data-parent="#accordion-2"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: Yes, you can. Our
                                                    platform allows you to top
                                                    up your investment at any
                                                    time.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div
                                            id="heading-b13"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-b13"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-b13"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >Can I have multiple
                                                    investment accounts running?
                                                </a>
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-b13"
                                            aria-labelledby="heading-b4"
                                            data-parent="#accordion-2"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: Yes, you can. As long as
                                                    these accounts are in your
                                                    name or minors’ whose
                                                    identity are linked to your
                                                    Email
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div
                                            id="heading-b14"
                                            class="card-header bg-white shadow-sm border-0"
                                        >
                                            <h6 class="mb-0 font-weight-bold">
                                                <a
                                                    href="#"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-b14"
                                                    aria-expanded="false"
                                                    aria-controls="collapse-b14"
                                                    class="d-block position-relative collapsed text-dark collapsible-link py-2"
                                                    >Can I transfer my
                                                    investments from me to
                                                    someone else?
                                                </a>
                                            </h6>
                                        </div>
                                        <div
                                            id="collapse-b14"
                                            aria-labelledby="heading-b4"
                                            data-parent="#accordion-2"
                                            class="collapse"
                                        >
                                            <div class="card-body p-4">
                                                <p class="m-0">
                                                    A: Yes, you can. All you
                                                    need to do is send a duly
                                                    signed instruction to that
                                                    effect.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- content close -->
            <HomeFooter :company="company" :domain="domain"></HomeFooter>
            <button class="scroltop">
                <span class="iconmoon-house relative" id="btn-vibrate"></span
                >Top
            </button>
            <div class="mgm" style="display: none; opacity: 1"></div>
        </div>
</template>

<style scoped>
/* @import "../assets/ebuka.css"; */
/* @import "../assets/css/bootstrap.min.css";
@import "../assets/css/owl.carousel.min.css";
@import "../assets/css/fontawesome/css/font-awesome.min.css";
@import "../assets/css/flaticon.min.css";
@import "../assets/css/bootstrap-select.min.css";
@import "../assets/css/magnific-popup.min.css"; */
/* @import "../assets/css/loader.min.css"; */
/* @import "../assets/css/style37913791.css"; */
/* @import "../assets/css/skin/skin-25b275b27.css";
@import "../assets/plugins/pace/pace.css";
@import "../assets/plugins/revolution/revolution/css/settings.css";
@import "../assets/plugins/revolution/revolution/css/navigation.css"; */
/* @import "../assets/css/iziToast.min.css"; */

.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 45%;
    right: 10px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, 0.3);
}
</style>
