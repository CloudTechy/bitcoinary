<template>
    <div class="row justify-content-center mb-none-30">
        <div  v-for = "plan in $root.packages" class="col-xl-3 col-lg-4 col-md-6 mb-30">
            <div class="package-card text-center bg_img" :data-background="$root.basepath + '/images/bg/bg-4.png'">
                <h4 class="package-card__title base--color text-capitalize mb-2">{{plan.name}}</h4>
                <div v-if="plan.name == 'bronze' || plan.name == 'silver' ">
                	<ul class="package-card__features mt-4">
	                    <li>Return {{plan.roi}}%</li>
	                    <li>Every {{plan.turnover}}</li>
	                    <li>For 6 Days</li>
	                    <li>Total {{plan.roi}}% + <span class="badge base--bg">Capital</span></li>
	                </ul>
                </div>
                <div v-if="plan.name == 'gold'">
                	<ul class="package-card__features mt-4">
	                    <li>Return {{plan.roi}}%</li>
	                    <li>Every {{plan.turnover}}</li>
	                    <li>For 3x</li>
	                    <li>Total {{plan.roi}}% + <span class="badge base--bg">Capital</span></li>
	                </ul>
                </div>
                <div v-if="plan.name == 'premium'">
                	<ul class="package-card__features mt-4">
	                    <li>Return {{plan.roi}}%</li>
	                    <li>Every {{plan.turnover}}</li>
	                    <li>For 2x</li>
	                    <li>Total {{plan.roi}}% + <span class="badge base--bg">Capital</span> </li>
	                </ul>
                </div>

                <div class="package-card__range mt-5 base--color">{{'$' + plan.min_deposit + ' - ' + '$' + plan.max_deposit}}</div>
                <a href="/dashboard/#deposit" class="cmn-btn btn-md mt-4">Invest Now</a>
            </div>
        </div>
            <!-- package-card end -->
     
    </div>
</template>
<script>
export default {
    data() {
        return {
        	packages : [],
        }
           
    },
    computed: {},
    created(){
    	this.getPackages();
    },
    // components: { Menu },
    methods: {
    	getPackages(){
    		this.$http.get("/auth/packages")
                .then(response => {
                    this.packages = response.data.data.item
                })
                .catch(error => {
                    console.log(error.response)
                })
    	}

    },

}

</script>
<style>
</style>
