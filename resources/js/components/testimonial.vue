<template>
    <section id="section-highlight" data-bgcolor="var(--secondary_color)">
                <div class="container" id="testimonials">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <span class="p-title" style="color: #fff">Testimonials</span><br />
                                <h2 style="color: #fff">
                                    What Our Investors Say
                                </h2>
                                <div class="small-border" style="border-color: #ffcc29"></div>
                            </div>
                            <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                                <div :key="testimonial.id" v-for="testimonial in data" class="item" style = "min-height: ;">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <div class="testimonial-card__client">
                                                <div class="thumb">
                                                    <img :src="$root.basepath + '/images/testimonial/' + testimonial.image" alt="img">
                                                </div>
                                            </div>
                                            <div class="p-rating">
                                                <i v-for= "n in testimonial.rating" class="fa fa-star checked"></i>
                                            </div>
                                            
                                            <h3>{{testimonial.heading}}</h3>
                                            <p>
                                                {{ testimonial.content}}
                                            </p>
                                            
                                            <div class="de_testi_by">
                                                <span><b>{{testimonial.name}}</b>,
                                                    {{ testimonial.country || testimonial.company}}</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-color: #ffcc29; height: 2px" />
                            <div class="row wow fadeInUp">
                                <div class="col-lg-4">
                                    <video height="200" controls>
                                        <source :src="$root.basepath + '/assets/video/home/vid3.mp4'"
                                            type="video/mp4" />
                                        Your browser does not support HTML
                                        video.
                                    </video>
                                </div>
                                <div class="col-lg-4">
                                    <video height="200" controls>
                                        <source :src="$root.basepath + '/assets/video/home/vid2.mp4'"
                                            type="video/mp4" />
                                        Your browser does not support HTML
                                        video.
                                    </video>
                                </div>
                                <div class="col-lg-4">
                                    <video height="200" controls>
                                        <source :src="$root.basepath + '/assets/video/home/vid1.mp4'"
                                            type="video/mp4" />
                                        Your browser does not support HTML
                                        video.
                                    </video>
                                </div>
                            </div>
                            <hr style="border-color: #ffcc29; height: 2px" />
                            <div class="text-center">
                                <a class="btn-custom" href="/#testimonies" style="
                                            background-color: #ffcc29;
                                            color: #000;
                                        ">Join us today</a>
                            </div>
                        </div>
                    </div>
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
            return this.key++
        },
        testimonial(){
            return this.key++
        }
    },
    mounted() {
        this.key++
    },
    components: { VueSlickCarousel },
    props: ['data'],
    methods: {
        
    },

}

</script>
<style type="text/css">
.testimonial-card__client .thumb {
    width: 75px;
    height: 75px;
    overflow: hidden;
    border: 3px solid #cca354;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    float : right;
}

.testimonial-card__client .thumb img {
    width: inherit;
    height: inherit;
    object-fit: cover;
    -o-object-fit: cover;
    object-position: center;
    -o-object-position: center;
}
</style>
