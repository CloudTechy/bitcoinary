<template>
	<section :key="key" class="pt-120 pb-120 border-top-1">
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
                    <div :key = "investor.id" v-for = "investor in data" class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="investor-card border-radius--5">
                            <div :style="{backgroundImage : 'url(' +$root.basepath + '/images/investor/' + investor.image + ')'}" class="investor-card__thumb bg_img dd background-position-y-top" ></div>
                            <div class="investor-card__content">
                                <h6 class="name">{{investor.name}}</h6>
                                <span class="amount f-size-14">Investment - ${{$root.normalNumeral(investor.investment)}}</span>
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
        	loading: true,
            key: 1,
        }
           
    },
    watch: {
        data() {
            // console.log('data', this.data)
            if (this.data) {
                this.loading = false
                this.key++
               
            } else {
                this.loading = true
            }
        }
    },
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