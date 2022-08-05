<script>
import moment from "moment";


export default {
    data() {
        return {
company: this.$root.appName,
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
<template>
    <!-- footer section start -->
    <footer class="footer bg_img" :data-background="$root.basepath + '/assets/images/bg/bg-7.jpg'">
        <div class="footer__top">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <a style="max-height: 200px;" href="#" class="footer-logo"><img :src="$root.basepath + '/assets/images/logo2.png'" alt="image"></a>
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
                        <p> © {{fullYear}} <a class="base--color" href="/">  <span>{{company}}</span>. </a> All Rights Reserved.
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

<style scoped="">
.footer::before {
    content: none;
 
}
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
