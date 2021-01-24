<template>
	<section class="pt-120 pb-120 border-top-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">Our Top</span> <b class="base--color">Investors</b></h2>
                            <p>&nbsp; </p>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <div class="row justify-content-center mb-none-30">
                    <div v-for = "investor in data" class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="investor-card border-radius--5">
                            <div class="investor-card__thumb bg_img background-position-y-top" :data-background="$root.basepath + '/images/investor/' + investor.image"></div>
                            <div class="investor-card__content">
                                <h6 class="name">{{investor.name}}</h6>
                                <span class="amount f-size-14">Investment - ${{$root.normalNumeral(investor.Investment)}}</span>
                            </div>
                        </div>
                        <!-- investor-card end -->
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
    // components: { Menu },
    props : ['data'],
    methods: {
    },

}

</script>
<style>
</style>