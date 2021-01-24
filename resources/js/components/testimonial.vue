<template>
    <section :key="key" class="pt-120 pb-120 bg_img overlay--radial" :data-background="$root.basepath + '/images/bg/bg-7.jpg'">
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
                    <VueSlickCarousel v-bind="settings">
                        <div v-for="(testimonial) in data" class="single-slide">
                            <div class="testimonial-card">
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
                        <!--  <VueSlickCarousel v-if = "!loading" v-bind="settings">
                        <div>
                            <h3>1</h3>
                        </div>
                        <div>
                            <h3>2</h3>
                        </div>
                        <div>
                            <h3>3</h3>
                        </div> -->
                    </VueSlickCarousel>
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
export default {
    name: 'Testimonial',

    data() {
        return {
            settings: {
                "dots": true,
                "dotsClass": "slick-dots custom-dot-class",
                "infinite": true,
                "speed": 500,
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "rtl": true,
            },
            loading: true,
            key: 1,
        }

    },
    watch: {
        data() {
            console.log('data', this.data)
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
<style scoped>
div.slick-slide {
    margin: 15px !important;
}

</style>
