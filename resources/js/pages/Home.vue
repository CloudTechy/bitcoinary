<template>
    <div class="page-wrapper">
        <Header></Header>
        <section class="hero bg_img" :style="'background:url('+ $root.basepath + '/images/bg/hero.jpg'">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-8">
                        <div class="hero__content">
                            <h2 class="hero__title"><span class="text-white font-weight-normal">Invest for Future in Stable Platform</span> <b class="base--color">and Make Fast Money</b></h2>
                            <p class="text-white f-size-18 mt-3">Invest in an Industry Leader, Professional, and Reliable Company. We provide you with the most necessary features that will make your experience better. Not only we guarantee the fastest and the most exciting returns on your
                                investments, but we also guarantee the security of your investment.</p>
                            <a href="/register" class="cmn-btn mr-2 text-uppercase font-weight-600 mt-4">Sign Up</a>
                            <a href="/dashboard" class="cmn-btn text-uppercase font-weight-600 mt-4">Sign In</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero end -->
        <!-- cureency section start -->
        <div class="cureency-section">
            <div class="container">
                <div class="row mb-none-30">
                    <div class="col-lg-3 col-sm-6 cureency-item mb-30">
                        <div class="cureency-card text-center">
                            <h6 class="cureency-card__title text-white">BITCOIN PRICE</h6>
                            <span class="cureency-card__amount h-font-family font-weight-600 base--color">{{$root.normalNumeral(usd_btc_rate) }} USD</span>
                        </div>
                        <!-- cureency-card end -->
                    </div>
                    <!-- cureency-item end -->
                    <div class="col-lg-3 col-sm-6 cureency-item mb-30">
                        <div class="cureency-card text-center">
                            <h6 class="cureency-card__title text-white">BITCOIN PRICE</h6>
                            <span class="cureency-card__amount h-font-family font-weight-600 base--color">{{$root.normalNumeral(eur_btc_rate) }} EUR</span>
                        </div>
                        <!-- cureency-card end -->
                    </div>
                    <!-- cureency-item end -->
                    <div class="col-lg-3 col-sm-6 cureency-item mb-30">
                        <div class="cureency-card text-center">
                            <h6 class="cureency-card__title text-white">24HRS VOLUME</h6>
                            <span class="cureency-card__amount h-font-family font-weight-600 base--color">{{$root.normalNumeral(btc_volume) }} BTC</span>
                        </div>
                        <!-- cureency-card end -->
                    </div>
                    <!-- cureency-item end -->
                    <div class="col-lg-3 col-sm-6 cureency-item mb-30">
                        <div class="cureency-card text-center">
                            <h6 class="cureency-card__title text-white">ACTIVE TRADES</h6>
                            <span class="cureency-card__amount h-font-family font-weight-600 base--color">{{ $root.normalNumeral(active_trade) }}</span>
                        </div>
                        <!-- cureency-card end -->
                    </div>
                    <!-- cureency-item end -->
                </div>
            </div>
        </div>
        <!-- cureency section end  -->
        <!-- about section start -->
        <section class="about-section pt-120 pb-120 bg_img" :style="'background:url('+ $root.basepath + '/images/bg/bg-2.jpg'">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="about-content">
                            <h2 class="section-title mb-3"><span class="font-weight-normal">About</span> <b class="base--color">Us</b></h2>
                            <p>Bitcoinary Mint is an innovating company diversified in several Investment methods.<br>
                                Our company is a big investor in real estate, oil and gas, gold mining, automobiles and a big investor of digital currencies and has invested in mining & trading of the most popular cryptocurrency by market volume. Our Investment strategies is free from risks and returns accrued profits.</p>
                            <p class="mt-4">Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and
                                the trustees. We work towards increasing your profit margin by profitable investment strategies. We look forward to you being part of our community.</p>
                            <a href="/about" class="cmn-btn mt-4">READ MORE</a>
                        </div>
                        <!-- about-content end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->
        <!-- package section start -->
        <!-- package section end  -->
        <!-- choose us section start -->
        <section class="pt-120 pb-120 overlay--radial bg_img" :style="'background:url('+ $root.basepath + '/images/bg/bg-3.jpg'">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">Why Choose</span> <b class="base--color">Bitcoinary Mint</b></h2>
                            <p>Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service.</p>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <div class="row justify-content-center mb-none-30">
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon">
                                    <i class="lar la-copy"></i>
                                </div>
                                <h4 class="choose-card__title base--color">Legal Company</h4>
                            </div>
                            <p>Our company conducts absolutely legal activities in the legal field. We are certified to operate investment business, we are legal and safe.</p>
                        </div>
                        <!-- choose-card end -->
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon">
                                    <i class="las la-lock"></i>
                                </div>
                                <h4 class="choose-card__title base--color">High reliability</h4>
                            </div>
                            <p>We are trusted by a huge number of people. We are working hard constantly to improve the level of our security system and minimize possible risks.</p>
                        </div>
                        <!-- choose-card end -->
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon">
                                    <i class="las la-user-lock"></i>
                                </div>
                                <h4 class="choose-card__title base--color">Anonymity</h4>
                            </div>
                            <p>Anonymity and using cryptocurrency as a payment instrument. In the era of electronic money – this is one of the most convenient ways of cooperation.</p>
                        </div>
                        <!-- choose-card end -->
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon">
                                    <i class="las la-shipping-fast"></i>
                                </div>
                                <h4 class="choose-card__title base--color">Quick Withdrawal</h4>
                            </div>
                            <p>Our all retreats are treated spontaneously once requested. There are high maximum limits. The minimum withdrawal amount is only $1.</p>
                        </div>
                        <!-- choose-card end -->
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon">
                                    <i class="las la-users"></i>
                                </div>
                                <h4 class="choose-card__title base--color">Referral Program</h4>
                            </div>
                            <p>We are offering a certain level of referral income through our referral program. you can increase your income by simply refer a few people.</p>
                        </div>
                        <!-- choose-card end -->
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon">
                                    <i class="las la-headset"></i>
                                </div>
                                <h4 class="choose-card__title base--color">24/7 Support</h4>
                            </div>
                            <p>We provide 24/7 customer support through e-mail and telegram. Our support representatives are periodically available to elucidate any difficulty..</p>
                        </div>
                        <!-- choose-card end -->
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon">
                                    <i class="las la-server"></i>
                                </div>
                                <h4 class="choose-card__title base--color">Dedicated Server</h4>
                            </div>
                            <p>We are using a dedicated server for the website which allows us exclusive use of the resources of the entire server.</p>
                        </div>
                        <!-- choose-card end -->
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon">
                                    <i class="fab fa-expeditedssl"></i>
                                </div>
                                <h4 class="choose-card__title base--color">SSL Secured</h4>
                            </div>
                            <p>Comodo Essential-SSL Security encryption confirms that the presented content is genuine and legitimate.</p>
                        </div>
                        <!-- choose-card end -->
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon">
                                    <i class="las la-shield-alt"></i>
                                </div>
                                <h4 class="choose-card__title base--color">DDOS Protection</h4>
                            </div>
                            <p>We are using one of the most experienced, professional, and trusted DDoS Protection and mitigation provider.</p>
                        </div>
                        <!-- choose-card end -->
                    </div>
                </div>
            </div>
        </section>
        <section id="packages" class="pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b class="base--color">Plans</b></h2>
                            <p>To make a solid investment, you have to know where you are investing. Find a plan which is best for you.</p>
                        </div>
                    </div>
                </div>
                <InvestmentPackage :href="'deposit'"></InvestmentPackage>
            </div>
        </section>
        <!-- choose us section end  -->
        <!-- profit calculator section start -->
        <section class="pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h2 class="section-title"><span class="font-weight-normal">Profit</span> <b class="base--color">Calculator</b></h2>
                            <p>You must know the calculation before investing in any plan, so you never make mistakes. Check the calculation and you will get as our calculator says.</p>
                        </div>
                    </div>
                </div>
                <packageCalculator></packageCalculator>
            </div>
        </section>
        <!-- profit calculator section end -->
        <!-- how work section start -->
        <section class="pt-120 pb-120 bg_img" :style="'background:url('+ $root.basepath + '/images/bg/bg-5.jpg'">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">How</span> <b class="base--color">Bitcoinary Mint</b> <span class="font-weight-normal">Works</span></h2>
                            <p>Get involved in our tremendous platform and Invest. We will utilize your money and give you profit in your wallet automatically.</p>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <div class="row justify-content-center mb-none-30">
                    <div class="col-lg-4 col-md-6 work-item mb-30">
                        <div class="work-card text-center">
                            <div class="work-card__icon">
                                <i class="las la-user base--color"></i>
                                <span class="step-number">01</span>
                            </div>
                            <div class="work-card__content">
                                <h4 class="base--color mb-3">Create Account</h4>
                            </div>
                        </div>
                        <!-- work-card end -->
                    </div>
                    <div class="col-lg-4 col-md-6 work-item mb-30">
                        <div class="work-card text-center">
                            <div class="work-card__icon">
                                <i class="las la-hand-holding-usd base--color"></i>
                                <span class="step-number">02</span>
                            </div>
                            <div class="work-card__content">
                                <h4 class="base--color mb-3">Invest To Plan</h4>
                            </div>
                        </div>
                        <!-- work-card end -->
                    </div>
                    <div class="col-lg-4 col-md-6 work-item mb-30">
                        <div class="work-card text-center">
                            <div class="work-card__icon">
                                <i class="las la-wallet base--color"></i>
                                <span class="step-number">03</span>
                            </div>
                            <div class="work-card__content">
                                <h4 class="base--color mb-3">Get Profit</h4>
                            </div>
                        </div>
                        <!-- work-card end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- how work section end  -->
        <!-- faq section start -->
        <FaqComponent></FaqComponent>
        <!-- faq section end -->
        <!-- testimonial section start -->
        <testimonial v-if="testimonials.length > 0" :data="testimonials"></testimonial>
        <!-- testimonial section end -->
        <!-- team section start -->
        <Team :data="teams"></Team>
        <!-- team section end -->
        <!-- data section start -->
        <Transaction :transactions="transactions" :withdrawals="withdrawals"></Transaction>
        <!-- data section end -->
        <!-- top investor section start -->
        <Investor :data="investors"></Investor>
        <!-- top investor section end -->
        <!-- cta section start -->
        <section class="pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="cta-wrapper bg_img border-radius--10 text-center" :style="'background:url('+ $root.basepath + '/images/bg/bg-8.jpg'">
                            <h2 class="title mb-3">Get Started Today With Us</h2>
                            <p>This is a Revolutionary Money Making Platform! Invest for Future in Stable Platform and Make Fast Money. Not only we guarantee the fastest and the most exciting returns on your investments, but we also guarantee the security
                                of your investment.</p>
                            <a class="cmn-btn mt-4" href="/register">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta section end -->
        <!-- payment brand section start -->
        <PaymentBrand v-if="$root.payments.length > 0" :data="$root.payments"></PaymentBrand>
        <!-- payment brand section end -->
        <!-- blog section start -->
        <!-- <Blog></Blog> -->
        <!-- blog section end -->
        <!-- subscribe section start -->
        <newsletter></newsletter>
        <!-- subscribe section end -->
        <Footer></Footer>
    </div>
</template>
<script>
    export default {
    data() {
        return {
            success: false,
            has_error: false,
            error: '',
            response: '',
            news: [],
            investors: [],
            testimonials: [],
            transactions: [],
            withdrawals: [],
            teams: [],
            usd_btc_rate: '-',
            eur_btc_rate: '-',
            btc_volume: '-',
            active_trade: '-',
        }
    },
    mounted() {
        this.getNews();
        this.getTeams();
        this.getInvestors();
        this.getTestimonials();
        this.getTransactions();
        this.getWithdrawals();
        setInterval(this.btcRate, 45000)
        setInterval(this.btcVolume, 60000)
        this.btcRate()
        this.btcVolume()
    },
    methods: {
        submitForm() {
            this.has_error = false;
            this.success = true;
            this.response = "Your message was delivered, you will be contacted as soon as possible."
        },
        
        getNews() {
            this.$http.get("/auth/newss")
                .then(response => {
                    this.news = response.data.data.item
                })
                .catch(error => {
                    console.log(error.response)
                })
        },
        getTeams() {
            this.$http.get("/auth/teamss")
                .then(response => {
                    this.teams = response.data.data.item
                })
                .catch(error => {
                    console.log(error.response)
                })
        },
        getInvestors() {
            this.$http.get("/auth/investorss")
                .then(response => {
                    this.investors = response.data.data.item
                })
                .catch(error => {
                    console.log(error.response)
                })
        },
        getTestimonials() {
            this.$http.get("/auth/testimonialss")
                .then(response => {
                    this.testimonials = response.data.data.item
                })
                .catch(error => {
                    console.log(error)
                })
        },
        getTransactions() {
            this.$http.get("/auth/transactionss?pageSize=6&reference=SELF&sent=1&confirmed=1")
                .then(response => {
                    this.transactions = response.data.data.item
                })
                .catch(error => {
                    console.log(error.response)
                })
        },
        getWithdrawals() {
            this.$http.get("/auth/withdrawalss?pageSize=6&confirmed=1&processed=1")
                .then(response => {
                    this.withdrawals = response.data.data.item
                })
                .catch(error => {
                    console.log(error.response)
                })
        },
        btcRate() {
            this.$http.get("https://api.coindesk.com/v1/bpi/currentprice.json")
                .then(response => {
                    this.usd_btc_rate = response.data.bpi.USD.rate
                    this.eur_btc_rate = response.data.bpi.EUR.rate
                })
                .catch(error => {
                    console.log(error.response)
                })


        },
        btcVolume() {
            this.$http.get("https://api.binance.com/api/v3/ticker/24hr?symbol=BTCUSDT")
                .then(response => {
                    let volume = response.data.volume
                    this.btc_volume = parseInt(volume) / 3
                    this.active_trade = volume
                    // console.log(response.data);
                })
                .catch(error => {
                    console.log(error.response)
                })


        },
    }
}

</script>
<style type="text/css">
.section-home__btn {
    border-color: #f8b782;
    color: rgba(255, 255, 255, 0.8) !important;
    text-transform: uppercase;
    padding: 5px 12px !important;
}

.section-home__btn:hover {
    background-color: #e25e5a !important;
    border-color: #f8b782;
}

.section-home__btn:active {
    background-color: #e25e5a !important;
    border-color: #f8b782;
}

.slick-slide .slick-active {
    margin: 15px !important;
}

.equal {
    box-shadow: 0 0 10px 2px rgba(204, 163, 84, 0.45) !important;
}

.cmn-btn:hover {
    cursor: pointer;
}

</style>
