<template>
    <!-- footer section start -->
    <footer class="footer bg_img" :data-background="$root.basepath + '/images/bg/bg-7.jpg'">
        <div class="footer__top">
            <div class="container">
                <div class="row" style="margin-top:50px;">
                    <div class="col-md-12">
                        <div class="row equal">
                            <div :data-background="$root.basepath + '/images/bg/bg-5.jpg'" class="col-md-8 no-padding wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;min-height: 180px;">
                                <div class="incrop-left" style="min-height: 100%;">
                                    <div class="incrop-left-img">
                                        <img :src="$root.basepath + '/images/uploads/uk.png'">
                                        <h4 class="step__title base--color" style="padding-bottom: 15px;">UK Registered &amp; USA Based Company</h4>
                                        <p><span>{{$root.appName}}</span> which is based in the United States is a fully registered and licensed company in UK. <span>{{$root.appName}}</span> is powered by the latest and most secure form of SSL data encryption to keep all your data and information safe and secure.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 no-padding wow fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;min-height: 180px;">
                                <div class="incrop-right" style="min-height: 100%;">
                                    <div class="incorp-inner">
                                        <h4 class="step__title pb-sm-0" style="padding-bottom: 15px;color:#2f2e2e;">12019970</h4>
                                        <p style="color:#2f2e2e;">Official Registered Company</p>
                                        <a target="_blank" title="Read more about us" href="/about" style="padding-left:20px;margin-top: 0px;display: block;font-size: 0.8rem;" class="btn btn-black-warning section-home__btn textsite truncate" data-pjax="">Of Companies House</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <a style="max-height: 200px;" href="#" class="footer-logo"><img :src="$root.basepath + '/images/logo.png'" alt="image"></a>
                        <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-4">
                            <li><a href="/">Home</a></li>
                            <li><a href="/terms#privacy">Privacy & Policy</a></li>
                            <li><a href="/terms">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-md-right text-center">
                        <p> © {{fullYear}} <a class="base--color" href="/">  <span>{{$root.appName}}</span>. </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="facebook"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="twitter"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-p"></i></a></li>
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>
<script>
import moment from 'moment'
export default {
    data() {
        return {

        }
    },
    computed: {
        fullYear() {
            return moment().get('year')
        }
    },
    methods: {
        collapse() {
            // this.$refs.collapsibleNavbar.classList.add('in')
        }
    }
}

</script>
<style scoped="">
._text_1nv7e_24 {
    font-family: Sailec-Regular, system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.6;
    margin: 0
}

.incrop-left {
    background-color: #171717;
    background-size: 100%;
    background-position: 0 100%;
    padding: 30px;
    border-radius: 10px 0 0 10px;
    box-shadow: -3px 0px 10px 1px rgba(0, 0, 0, 0.3);
}

.incrop-left img {
    position: absolute;
    top: 0;
    left: 0;
    max-width: 90px;
}

@media screen and (max-width: 991px) {
    .incrop-left {
        border-radius: initial;
    }
}

.incrop-left-img {
    position: relative;
    padding-left: 100px;
}

.incorp-inner {
    padding-left: 90px;
    background: url(../../../public/images/uploads/company-logo.png) no-repeat 0 0;
    background-size: 80px auto;
}

.step__title {
    font-weight: 500;
    font-size: 22px;
    font-size: 1.57rem;
    color: #2e3035;
}

.no-padding {
    padding: 0 !important;
}

.incrop-right {
    background-color: #cca354;
    padding: 30px;
    border-radius: 0 10px 10px 0;
}

@media screen and (max-width: 991px) {
    .incrop-right {
        border-radius: initial;
    }
}

.section-home__btn {
    margin-top: 25px;
    text-transform: uppercase;
}

.textsite {
    color: rgba(255, 255, 255, 0.8) !important;
}

.btn-black-warning {
    color: #4f4f4f;
    background-color: #171717;
    border-color: #171717;
}

.section-home__btn:hover {
    background-color: black !important;
    border-color: #cca354;
}

</style>
