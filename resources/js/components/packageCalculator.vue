<template>
	<section class="pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h2 class="section-title"><span class="font-weight-normal">Profit</span> <b class="base--color">Calculator</b></h2>
                            <p>You must know the calculation before investing in any plan, so you never make mistakes. Check the calculation and you will get as our calculator says.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="profit-calculator-wrapper">
                            <form class="profit-calculator">
                                <div class="row mb-none-30">
                                    <div class="col-lg-6 mb-30">
                                        <label>Choose Plan</label>
                                        <select v-model="plan" class="base--bg">
                                        	<option selected v-if = " $root.packages == '' ">Fetching Packages...</option>
                                            <option class="p-1 text-capitalize" :value="plan" v-for = "plan in $root.packages">{{plan.name}} Package</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <label>Invest Amount</label>
                                        <input type="text" v-model="invest_amount" name="invest_amount" placeholder="0" :min="plan.min_deposit" :max="plan.max_deposit" id="invest_amount" class="form-control base--bg">
                                        <p v-if = "plan.name" class="small">{{'Limit: $' + plan.min_deposit + ' - $' + plan.max_deposit}}</p>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <label>Profit Amount</label>
                                        <input v-model="profit_amount" type="text" name="profit_amount"  id="profit_amount" class="form-control base--bg" disabled>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <label>Total Earning</label>
                                        <input v-model="total_earning" type="text" name="total_earning" id="total_earning" class="form-control base--bg" disabled>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</template>
<script>
export default {
    data() {
        return {
        	plan : {},
        	invest_amount: '',
        }
           
    },
    watch: {},
    computed: {
    	profit_amount(){
    		if(parseInt(this.invest_amount) >= this.plan.min_deposit && parseInt(this.invest_amount) <= this.plan.max_deposit ){
    			return (parseInt(this.plan.roi) / 100) *  parseInt(this.invest_amount)
    		}
    		else if (this.plan.name == undefined || this.invest_amount == "") return '0.00'
    		else return 'input a valid amount for this plan'
    	},
    	total_earning(){

    		return this.$root.numeral( parseInt(this.profit_amount ) + parseInt(this.invest_amount))
    	}

    },
    created(){
    	
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