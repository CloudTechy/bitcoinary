<template>
    <section  class="pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">Payment We</span> <b class="base--color">Accept</b></h2>
                        <p>We accept all major cryptocurrencies and fiat payment methods to make your investment process easier with our platform.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <VueSlickCarousel :key="key" v-if="data" v-bind="settings">
                            <div :key="py.name" v-for="py in data" class="">
                                <div class="brand-item m-2" style="min-height: 139px">
                                    <img :src="$root.basepath + '/images/uploads/' + py.image" alt="image">
                                </div>
                            </div>
                        </VueSlickCarousel>
                    </div>
                    <!-- payment-slider end -->
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'
// import "../../../public/js/vendor/slick.min.js"
// import "../../../public/js/k.js"
export default {
    data() {
        name: 'paymentBrand'
        return {
            settings: {
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 6,
                slidesToScroll: 1,
                arrows: false,
                autoplay: false,
                prevArrow: '<div class="prev"><i class="las la-angle-left"></i></div>',
                nextArrow: '<div class="next"><i class="las la-angle-right"></i></div>',
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            },
            key: 1,
        }

    },
    watch: {
        data(){
            console.log('payment',this.data)
            return this.key++
        },
    },
    components: { VueSlickCarousel },
    computed: {},
    mounted() {

        this.key++
    },
    props: ['data'],
    // components: { Menu },
    methods: {},

}

</script>
<style type="text/css">
    .single-slide .slick-slide .slick-active{
        margin : 5px !important;
    }
</style>
