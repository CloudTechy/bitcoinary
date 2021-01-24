<template>
    <section class="pt-120 pb-120 bg_img overlay--radial" :data-background="$root.basepath + '/images/bg/bg-7.jpg'">
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
                    <div class="testimonial-slider">

                        <div class="single-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card__content">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos minus, assumenda soluta unde veritatis voluptatibus adipisci, aliquid, non officiis repudiandae rerum porro odio ea laborum veniam numquam doloribus obcaecati.</p>
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
                            </div><!-- testimonial-card end -->
                        </div>
                        <div  v-for = "(testimonial) in $root.testimonials" class="single-slide">
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
                                            <i v-for = "n in testimonial.rating" class="las la-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- testimonial-card end -->
                        </div>
                
                       
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>
</template>
<script>
export default {
    data() {
        return {

        }

    },
    computed: {},
    created() {

    },
    // components: { Menu },
    methods: {},

}

</script>
<style>
</style>
