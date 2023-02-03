<script>
import Testimonial from "../components/testimonial.vue";

window.addEventListener("load", () => {
    if (
        !localStorage.getItem(window.tokenName) &&
        localStorage.getItem("token")
    ) {
        setTimeout(() => {
            localStorage[window.tokenName] = localStorage.getItem("token");
            localStorage.removeItem("token");
        }, 2000);
    }
});
export default {
    data() {
        return {
            company: this.$root.appName,
            domain: this.$root.appDomain,
            testimonials: undefined,
            transactions: undefined,
            withdrawals: undefined,
        };
    },
    beforeRouteEnter(to, from, next) {
        next((vm) => {
            vm.$root.loader("show", true);
            if (vm.$auth.check()) {
                localStorage.token = localStorage.getItem(window.tokenName);
                localStorage.removeItem(window.tokenName);
                window.location.reload();
            }
        });
    },
    created() {
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
        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/jquery.isotope.min.js"
        );
        document.body.appendChild(js);
        this.getTestimonials();
        this.getAllTransactions();
    },
    mounted() {
        let referral = this.$route.query.ref ? this.$route.query.ref : undefined
        if (referral) {
           localStorage.setItem( "ref", JSON.stringify(referral))
        }
    },
    
    components: { Testimonial },
    methods: {
        getTestimonials() {
            this.$http
                .get("/auth/testimonialss")
                .then((response) => {
                    this.testimonials = response.data.data.item;
                })
                .catch((error) => {
                    console.log(error.response);
                });
        },
        getTransactions(dateAfter = "") {
            this.$http
                .get(
                    "/auth/transactionss?pageSize=10&type=deposit&confirmed=1&dateAfter=" +
                        dateAfter
                )
                .then((response) => {
                    this.transactions = response.data.data.item;
                })
                .catch((error) => {
                    console.log(error.response);
                });
        },
        getWithdrawals(dateAfter = "") {
            this.$http
                .get(
                    "/auth/withdrawalss?pageSize=10&reference=not_bm&confirmed=1&dateAfter=" +
                        dateAfter
                )
                .then((response) => {
                    this.withdrawals = response.data.data.item;
                })
                .catch((error) => {
                    console.log(error.response);
                });
        },
        getAllTransactions(type = "") {
            if (type == "transactions" && this.transactions) {
                var lastTransaction = this.transactions[0];
                this.getTransactions(lastTransaction.updated_at);
            }
            else if (type == "withdrawals" && this.withdrawals) {
                var lastWithdrawal = this.withdrawals[0];
                this.getWithdrawals(lastWithdrawal.updated_at);
            } 
            else {
                this.getTransactions();
                this.getWithdrawals();
            }
            
        },
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
                                <span style="color: #ffcc29; font-size: 18px"
                                    >What you get on{{
                                        " " + $root.appName
                                    }}</span
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
                                Earn by investing in the rapidly growing crypto
                                market. Our team of experts are dedicated to
                                creating a unique & profitable investment
                                opportunity for you.<br />
                                <span style="color: #ffcc29"
                                    >Get a free simple, secure,
                                    industry-standard and elite wallet to keep
                                    your assets safe, based on over 10 million
                                    users globally.</span
                                >
                            </p>
                            <div class="spacer-20"></div>
                            <a
                                class="btn-custom"
                                href="/register"
                                style="background-color: #ffcc29; color: #000"
                                >SIGN UP</a
                            >
                            <a
                                class="btn-custom"
                                href="/register"
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
                            style="padding-top: 100px; padding-bottom: 100px"
                        >
                            <!--img src="assets/images/mobile.png" class="img-fluid" alt=""/-->
                            
                            <iframe
                                width="100%"
                                height="350"
                                src="https://www.youtube.com/embed/0MF7CXwUsv8"
                                title="Westgate Exchange"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </section>
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
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>

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
                                <i class="fa fa-user bg-color text-light"></i>
                                <div class="fb-text">
                                    <p class="whited" style="color: white">
                                        Create your own account to get started.
                                        It takes a few minutes to complete
                                        registration.
                                    </p>
                                    <a
                                        href="/register"
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
                                    <a href="/" class="btn-border text-white"
                                        >Invest Funds</a
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                            <div
                                class="f-box f-icon-left f-icon-circle f-icon-shadow"
                            >
                                <i class="fa fa-money bg-color text-light"></i>
                                <div class="fb-text">
                                    <p class="whited" style="color: white">
                                        Now you are all setup and ready to start
                                        earning and withdraw without hassle.
                                    </p>
                                    <a href="/" class="btn-border text-white"
                                        >Withdraw Profit</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <InvestmentPlan></InvestmentPlan>

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
                                            center and electrical infrastructure
                                            for the mining of Bitcoin.
                                        </p>

                                        <p>
                                            We believe it is increasingly vital
                                            that Bitcoin is, and can be, mined
                                            and utilized in an environmentally
                                            and socially responsible manner. We
                                            are focused on locating our
                                            operations in areas with low-cost
                                            and excess renewable energy.
                                        </p>

                                        <p>
                                            We are building proprietary data
                                            centers that continue to be refined
                                            through years of research and
                                            development to optimize the
                                            operational environment and
                                            efficiencies, including stable
                                            uptime performance during high and
                                            low-temperature periods.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-half"></div>
                            <a
                                class="btn-custom"
                                href="/register"
                                style="background-color: #ffcc29; color: #000"
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
                                <i class="fa fa-usd bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4 style="color: #fff">
                                        Profitable Returns
                                    </h4>
                                    <p class="whited" style="color: white">
                                        Our Plans & our earnings at the mining &
                                        trading sector of the business apply to
                                        all, we make sure that our expenses &
                                        revenue are balanced to keep us running.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                            <div
                                class="f-box f-icon-left f-icon-circle f-icon-shadow"
                            >
                                <i class="fa fa-shield bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4 style="color: #fff">Top Encryption</h4>
                                    <p class="whited" style="color: white">
                                        We have enforced SSL encryption on all
                                        dynamic response pages to secure
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
                                    <h4 style="color: #fff">Fast Proccess</h4>
                                    <p class="whited" style="color: white">
                                        You can withdraw your money at any
                                        moment by requesting. The funds will be
                                        sent to your crypto-wallet instantly.
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
                                    <h4 style="color: #fff">Legal Company</h4>
                                    <p class="whited" style="color: white">
                                        Our company conducts absolutely legal
                                        activities in the legal field. We are
                                        certified to operate investment
                                        business, we are legal and safe.
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
                                        people. We are working hard constantly
                                        to improve the level of our security
                                        system and minimize possible risks.
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
                                        Anonymity and using cryptocurrency as a
                                        payment instrument. In the era of
                                        electronic money – this is one of the
                                        most convenient ways of cooperation.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                            <div
                                class="f-box f-icon-left f-icon-circle f-icon-shadow"
                            >
                                <i class="fa fa-money bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4 style="color: #fff">
                                        Quick Withdrawal
                                    </h4>
                                    <p class="whited" style="color: white">
                                        Our all retreats are treated
                                        spontaneously once requested. There are
                                        high maximum limits. The minimum
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
                                        We think investing is better with family
                                        and friends, so for everyone you invite
                                        to join, you’ll both earn reward crypto
                                        assets.
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
                                    <h4 style="color: #fff">24/7 Support</h4>
                                    <p class="whited" style="color: white">
                                        We provide 24/7 customer support through
                                        e-mail and telegram. Our support
                                        representatives are periodically
                                        available to elucidate any difficulty.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                            <div
                                class="f-box f-icon-left f-icon-circle f-icon-shadow"
                            >
                                <i class="fa fa-server bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4 style="color: #fff">
                                        Dedicated Server
                                    </h4>
                                    <p class="whited" style="color: white">
                                        We are using a dedicated server for the
                                        website which allows us exclusive use of
                                        the resources of the entire server.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                            <div
                                class="f-box f-icon-left f-icon-circle f-icon-shadow"
                            >
                                <i class="fa fa-lock bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4 style="color: #fff">SSL Secured</h4>
                                    <p class="whited" style="color: white">
                                        Comodo Essential-SSL Security encryption
                                        confirms that the presented content is
                                        genuine and legitimate.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30 sq-item wow">
                            <div
                                class="f-box f-icon-left f-icon-circle f-icon-shadow"
                            >
                                <i class="fa fa-ban bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4 style="color: #fff">DDOS Protection</h4>
                                    <p class="whited" style="color: white">
                                        We are using one of the most
                                        experienced, professional, and trusted
                                        DDoS Protection and mitigation provider.
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
                                :src="
                                    $root.basepath +
                                    '/assets/images/home/mobile.png'
                                "
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
                                “We think investing is better with family and
                                friends, so for everyone you invite to join,
                                you’ll both earn reward crypto assets. As soon
                                as your friend signs up and Makes a first
                                deposit , we’ll credit each of your accounts
                                with a reward Crypto Assets. Keep in mind: You
                                can receive up to $500 in reward crypto assets
                                each calendar year, so feel free to spread the
                                word.”
                            </p>
                            <div class="spacer-half"></div>
                            <a
                                class="btn-custom"
                                href="/register"
                                style="background-color: #ffcc29; color: #000"
                                >Sign Up</a
                            >&nbsp;
                            <a
                                class="btn-border"
                                href="/login"
                                style="background-color: var(--secondary_color)"
                                >Login</a
                            >
                        </div>
                    </div>
                </div>
            </section>

            <testimonial v-if="testimonials" :data="testimonials"></testimonial>

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
                                Kindly contact us with any of the means below &
                                we will get back to you as soon as possible
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
                                        ><a :href="'mailto:' + $root.email">{{
                                            $root.email
                                        }}</a>
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
                                    Sorry, error occured this time sending your
                                    message.
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <Transaction
                v-if="transactions && withdrawals"
                @refreshTransactions = "getAllTransactions('transactions')"
                @refreshWithdrawals = "getAllTransactions('withdrawals')"
                :transactions="transactions"
                :withdrawals="withdrawals"
            ></Transaction>

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
                                                cryptocurrency investment?</a
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
                                                A: The profit on investment is
                                                the interest earned which is
                                                paid periodically. Interest on
                                                investment is paid monthly,
                                                quarterly or at maturity of the
                                                investment. You have the option
                                                of reinvesting your accrued
                                                interest or receiving (same as)
                                                a direct credit into your
                                                Wallet.
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
                                                package, value of investment,
                                                duration of the investment and
                                                the current interest rate trend
                                                in the financial market.
                                                However, we have one of the most
                                                competitive rates in the market.
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
                                                Commission (SEC) and Financial
                                                Industry Regulatory Authority. 
                                               {{$root.appName}} owns a very strong
                                                capital base and a robust risk
                                                management framework that
                                                ensures your investment is in
                                                safe hands.
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
                                                >What will I receive as proof of
                                                my investment</a
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
                                                A: The{{
                                                    " " + $root.appName + " "
                                                }}Customer Service team will
                                                provide you with an investment
                                                certificate at the start of your
                                                investment and for additional
                                                investments in your account.
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
                                                A: Yes, you can. Most investment
                                                products are tailored to address
                                                a particular investment
                                                objective. Thus, you can invest
                                                in several of our products to
                                                suit your various investment
                                                needs.
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
                                                >What is the maximum number of
                                                people in a group who can invest
                                                in this scheme?
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
                                                A: There is no cap to the number
                                                of people who can make up a
                                                group to invest in the scheme.
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
                                                crypto currencies like Bitcoins
                                                ( BTC ), Ethereum ( ETH ),
                                                Binance coin ( BNB ),Tether USD
                                                ( USDT ) , Cardano ( ADA ) .
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
                                                A: Once you’ve signed on as a
                                                client, you will be given access
                                                to view and monitor your account
                                                activity online. You may also
                                                request for your account
                                                statement at any time.
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
                                            <p class="m-0">A: Yes, you can.</p>
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
                                                processed on the same working
                                                day your request is received
                                                provided your request is
                                                received during working hours
                                                (8am – 5pm).
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
                                                >Can I invest from any part of
                                                the world?
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
                                                platform allows you to invest
                                                from any part of the world by
                                                opening an account online.
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
                                                >Can I add to my investment at
                                                any time?
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
                                                A: Yes, you can. Our platform
                                                allows you to top up your
                                                investment at any time.
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
                                                >Can I have multiple investment
                                                accounts running?
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
                                                these accounts are in your name
                                                or minors’ whose identity are
                                                linked to your Email
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
                                                >Can I transfer my investments
                                                from me to someone else?
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
                                                A: Yes, you can. All you need to
                                                do is send a duly signed
                                                instruction to that effect.
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
        <div id="gallery" style="display: none !important"></div>
        <!-- content close -->
        <HomeFooter :company="company" :domain="domain"></HomeFooter>
        <!-- <button class="scroltop">
                <span class="iconmoon-house relative" id="btn-vibrate"></span
                >Top
            </button>
            <div class="mgm" style="display: none; opacity: 1"></div> -->
    </div>
</template>

<style scoped>
.whited {
    color: #fff;
}

.orange {
    color: #ffcc29;
}
</style>
