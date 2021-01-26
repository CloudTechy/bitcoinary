<template>
    <section :key="key" :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-7.jpg )'}"  class="pt-120 pb-120 bg_img overlay--radial" >
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
                        <VueSlickCarousel v-if = "!loading" v-bind="settings">
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
                          <!--   <div class="single-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-card__content">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos minus, assumenda soluta unde veritatis voluptatibus adipisci, aliquid, non officiis repudiandae rerum porro odio ea laborum veniam numquam doloribus
                                            obcaecati.</p>
                                    </div>
                                    <div class="testimonial-card__client">
                                        <div class="thumb">
                                            <img src="assets/images/testimonial/1.jpg" alt="image">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">Fahaddevs</h6>
                                            <span class="designation">CEO of fahaddevs</span>
                                            <div class="ratings">
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div  class="testimonial-card">
                                    <div class="testimonial-card__content">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos minus, assumenda soluta unde veritatis voluptatibus adipisci, aliquid, non officiis repudiandae rerum porro odio ea laborum veniam numquam doloribus
                                            obcaecati.</p>
                                    </div>
                                    <div class="testimonial-card__client">
                                        <div class="thumb">
                                            <img src="assets/images/testimonial/2.jpg" alt="image">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">Alina</h6>
                                            <span class="designation">CTO of fahaddevs</span>
                                            <div class="ratings">
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
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
    import  "../../../public/js/vendor/slick.min.js"
    import  "../../../public/js/k.js"

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
            loading: true,
            key: 1,
        }

    },
    watch: {
        data() {
            if (this.data) {
                this.key++
                this.loading = false
            } else {
                this.loading = true
            }
        }
    },
    created() {

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
