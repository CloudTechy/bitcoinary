<template>
	<section class="pb-120">
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
                        <div class="payment-slider">
                            <div v-for = "py in data" class="single-slide">
                                <div class="brand-item">
                                    <img :src="$root.basepath + '/images/uploads/' + py.image" alt="image">
                                </div>
                                <!-- brand-item end -->
                            </div>
                        </div>
                        <!-- payment-slider end -->
                    </div>
                </div>
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
    created(){
    	
    },
    props : ['data'],
    // components: { Menu },
    methods: {
    },

}

</script>
<style>
</style>