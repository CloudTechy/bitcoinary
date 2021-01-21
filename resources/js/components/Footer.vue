<template>
    <!-- footer section start -->
    <footer class="footer bg_img" :data-background="$root.basepath + '/images/bg/bg-7.jpg'">
        <div class="footer__top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <a style="max-height: 200px;" href="#0" class="footer-logo"><img :src="$root.basepath + '/images/bg/bg-10.jpg'" alt="image"></a>
                        <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-4">
                            <li><a href="#0">Home</a></li>
                            <li><a href="#0">Privacy & Policy</a></li>
                            <li><a href="#0">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-md-right text-center">
                        <p>© {{fullYear}}<router-link class="base--color" to="/"> &nbsp; Bitcoinary Mint. All Rights Reserved.</router-link>
                        </p>
                    </div>
                    <div class="col-md-6">
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

</style>
