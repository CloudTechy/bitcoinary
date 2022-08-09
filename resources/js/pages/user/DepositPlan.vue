<template>
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <div class="section-header">
                <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b class="base--color">Plans</b></h2>
            </div>
        </div>
        <div class="col-lg-12 mb-3">
            <div class="row justify-content-center mb-none-30">
        <div  v-for = "plan in $root.packages" class="col-xl-3 col-lg-4 col-md-6 mb-30">
            <div class="package-card text-center bg_img" :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-4.png )'}">
                <h4 class="package-card__title base--color text-capitalize mb-2">{{plan.name}}</h4>
                <div v-if="plan.name == 'Starter'">
                    <ul class="package-card__features mt-4">
                        <li>Return {{plan.roi}}%</li>
                        <li>Matures in a {{plan.turnover}}</li>
                        <li>Total {{plan.roi}}% + <span class="badge base--bg">Capital</span></li>
                    </ul>
                </div>
                <div v-if="plan.name == 'Basic'">
                    <ul class="package-card__features mt-4">
                        <li>Return {{plan.roi}}%</li>
                        <li>Matures in a {{plan.turnover}}</li>
                        <li>Total {{plan.roi}}% + <span class="badge base--bg">Capital</span></li>
                    </ul>
                </div>
                <div v-if="plan.name == 'Premium'">
                    <ul class="package-card__features mt-4">
                        <li>Return {{plan.roi}}%</li>
                        <li>Matures in a {{plan.turnover}}</li>
                        <li>Total {{plan.roi}}% + <span class="badge base--bg">Capital</span> </li>
                        <li>With loan Security</li>
                    </ul>
                </div>
                <div class="package-card__range mt-5 base--color">{{'$' + plan.min_deposit + ' - ' + '$' + plan.max_deposit}}</div>
                <a @click = "$emit('changeComponent', 'ConfirmDeposit', plan)" class="cmn-btn btn-md mt-4">Invest Now</a>
            </div>
        </div>
     
    </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title"><span class="font-weight-normal">Calculate your</span> <b class="base--color">Profit</b></h2>
                    </div>
                </div>
            </div>
            <packageCalculator :href = "'ConfirmDeposit'"></packageCalculator>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            form: new Form({
                amount: '',
                package_id: '',
                reference: 'SELF',
            }),
            selectedPackage: '',
            select: '',
            error: '',
            msg: this.success,

        }
    },
    watch: {
        msg() {
            setTimeout(() => { this.msg = '' }, 10000);
        },
        error() {
            setTimeout(() => { this.error = '' }, 10000);
        },
    },
    computed:{
       
    },
    mounted() {
        
        window.scrollTo(0, 0)
    },
    created(){
        // this.$root.loader('show')
    },
    methods: {
        updateSelection(pack) {
            this.selectedPackage = pack
            this.select = pack.name
        },
        selectPortfolio(portfollio) {
            this.selectedPortfolio = portfollio
        },
        numeral(value) {
            return numeral(value).format('0,0')
        },
        processDeposit() {
            this.processDepo(true)
            var form = new Form({ amount: this.selectedPackage.deposit, id: this.user.id, ip: this.$root.ip })
            var wlt = this.user.admin_wallet
            // console.log(wlt)
            form.post("/auth/showWlt")
                .then(response => {
                    wlt = response.data.data.wallet
                    this.selectedPackage.wallet = wlt
                    this.$emit('changeComponent', 'ConfirmDeposit', this.selectedPackage)
                    this.processDepo(false)
                })
                .catch(error => {
                    this.selectedPackage.wallet = wlt
                    this.$emit('changeComponent', 'ConfirmDeposit', this.selectedPackage)
                    this.processDepo(false)
                })
            // if(this.user.packages.length > 0){
            //     this.$emit('changeComponent', 'ConfirmDeposit', this.selectedPackage)  
            //     // this.error = 'Oops!!! There is an active subscription on this account'
            //     // window.scrollTo(0, 200)
            // }
            // else{
            //   this.$emit('changeComponent', 'ConfirmDeposit', this.selectedPackage)  
            // }

        },
        subscribe() {
            this.processing(true)
            this.form.package_id = this.selectedPackage.id
            this.form.post("/auth/packageusers")
                .then(response => {
                    window.scrollTo(0, 200)
                    this.processing(false)
                    this.error = ''
                    this.msg = response.data.message
                })
                .catch(error => {
                    window.scrollTo(0, 200)
                    this.success = ''
                    this.error = error.response.data ? error.response.data.message : 'Subscription was not successful'
                    this.processing(false)
                })
        },
        processing(status) {
            if (status) {
                this.$refs.process.innerText = "Processing..."
                this.$refs.process.disabled = true
            } else {
                this.$refs.process.innerText = "Subscribe"
                this.$refs.process.disabled = false
            }
        },
        processDepo(status) {
            if (status) {
                this.$refs.deposit.innerText = "processing..."
                this.$refs.deposit.disabled = true
            } else {
                this.$refs.deposit.innerText = "Make a Deposit"
                this.$refs.deposit.disabled = false
            }
        }
    }
}

</script>
<style scoped="">
/*.btn:focus {
    box-shadow: none !important;
}

.silver {
    background: linear-gradient(to right, #a7a7a7 0%, #eaeaea 100%);
}

.gold {
    background: linear-gradient(to right, #e25e5a 0%, #e25e5a 0%, #f8b982 100%, #f8b982 100%, #f8b982 100%);
}*/

</style>
