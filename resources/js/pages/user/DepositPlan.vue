<template>
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <div class="section-header">
                <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b class="base--color">Plans</b></h2>
            </div>
        </div>
        <div class="col-lg-12 mb-3">
            <InvestmentPackage></InvestmentPackage>
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
            portfolios: '',
            packages: '',
            form: new Form({
                amount: '',
                user_id: this.user.id,
                package_id: '',
                reference: 'SELF',
            }),
            selectedPackage: '',
            select: '',
            selectedPortfolio: '',
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
    props: ['user', 'success'],
    mounted() {
        if (localStorage.portfolioss) {
            this.portfolios = JSON.parse(localStorage.portfolioss)
        }
        if (localStorage.packages) {
            this.packages = JSON.parse(localStorage.packages)
        }
        this.getPortfolios()
        this.getPackages()
        this.$root.getIp()
    },
    methods: {
        getPortfolios() {

            this.form.get("/auth/portfolios")
                .then(response => {
                    this.portfolios = response.data.data.item
                    localStorage.portfolioss = JSON.stringify(response.data.data.item)
                })
                .catch(error => {
                    console.log(error.response)
                })
        },
        getPackages() {
            this.form.get("/auth/packages")
                .then(response => {
                    this.packages = response.data.data.item
                    localStorage.packages = JSON.stringify(response.data.data.item)
                })
                .catch(error => {
                    console.log(error.response)
                })
        },
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
.btn:focus {
    box-shadow: none !important;
}

.silver {
    background: linear-gradient(to right, #a7a7a7 0%, #eaeaea 100%);
}

.gold {
    background: linear-gradient(to right, #e25e5a 0%, #e25e5a 0%, #f8b982 100%, #f8b982 100%, #f8b982 100%);
}

</style>
