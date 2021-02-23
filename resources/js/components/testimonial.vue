<template>
    <section  :style="'background:url('+  $root.basepath + '/images/bg/bg-7.jpg )'"  class="pt-120 pb-120 bg_img overlay--radial" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">What Users Say</span> <b class="base--color">About Us</b></h2>
                        <p>Bitcoinary Mint is a well performing company with many good reviews from our investors.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row">
                <div class="col-lg-12">
                    <div id="testimonial-slider" class="testimonial-slider">
                        <VueSlickCarousel :key="key"  v-if = "data" v-bind="settings">
                              <div :key = "testimonial.id" v-for="(testimonial) in data" class="single-slide">
                            <div class="testimonial-card m-2">
                                <div class="testimonial-card__content">
                                    <p>{{testimonial.content}}</p>
                                </div>
                                <div class="testimonial-card__client">
                                    <div class="thumb">
                                        <img :src="$root.basepath + '/images/testimonial/' + testimonial.image" alt="image">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">{{testimonial.name}}</h6>
                                        <span class="designation">{{testimonial.designation + ' of ' + testimonial.company}}</span>
                                        <div class="ratings">
                                            <i v-for="n in testimonial.rating" class="las la-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </VueSlickCarousel>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>
</template>
<script>
    import VueSlickCarousel from 'vue-slick-carousel'
    import 'vue-slick-carousel/dist/vue-slick-carousel.css'
    import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'
    // import  "../../../public/js/vendor/slick.min.js"
    // import  "../../../public/js/k.js"

export default {
    name: 'Testimonial',

    data() {
        return {
            settings: {
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                prevArrow: '<div class="prev"><i class="las la-angle-left"></i></div>',
                nextArrow: '<div class="next"><i class="las la-angle-right"></i></div>',
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            },
            key: 1,
            testimonial : this.data
        }

    },
    watch: {
        data(){
            console.log(this.data)
            return this.key++
        },
        testimonial(){
            console.log(this.testimonial)
            return this.key++
        }
    },
    mounted() {
        this.key++
    },
    components: { VueSlickCarousel },
    props: ['data'],
    methods: {},

}

</script>
<style type="text/css">
/*#testimonial-slider{
    min-height: 40px; 
}
.slick-slide .slick-active .slick-current{
    margin : 15px;
}
.slick-slide .slick-active {
    margin : 15px;
}*/
</style>
