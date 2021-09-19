<template>
    <div class="page-wrapper">
        <DashboardHeader></DashboardHeader>
        <!-- account section start -->
        <div class="account-section p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="account-card">
                            <div class="account-card__header bg_img overlay--one" :style="'background:url('+ $root.basepath +'/images/bg/bg-6.jpg) no-repeat 0 0;'">
                                <h2 class="section-title text-center">Make an <span class="base--color"> Investment</span></h2>
                            </div>
                            <div class="account-card__body">
                                <h3 class="text-center">Investment Details</h3>
                                <form class="mt-4" autocomplete="off" @submit.prevent="processInvest" method="post">
                                    <div :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-5.jpg )'}" class="success-msg " v-if="message">
                                        <p class="p-2 m-lg-3 m-sm-1 text-center">{{message.message}}</p>
                                    </div>
                                    <div class="form-group">
                                        <div :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-5.jpg )'}" class="error-msg  m-3" v-if="error">
                                            <div v-if="typeof error == 'object'">
                                                <p v-for="err in error" class="small m-2 m-md-3">{{err}}</p>
                                            </div>
                                            <p v-else class="text-center m-2  m-md-3 small">{{error}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Payment method</label>
                                        <select required="" v-model="paymentMethod" class="base--bg">
                                            <option v-if="$auth.user().balance >= plan.min_deposit" value="balance" class="text-capitalize">
                                                Direct Invest Balance
                                            </option>
                                            <option v-if="$root.getPaymentAccountDetails(paymentMethods, processor.payment_method, processor.currency_type)" class="text-capitalize" :value="processor" v-for="processor in paymentMethods">{{'Direct Invest ' + processor.payment_method}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Capital</label>
                                        <input type="number" required placeholder="Enter amount" :min="plan.min_deposit" :max="plan.max_deposit" v-model="amount" :class="{'form-control' : true, 'error-input': errors.amount != undefined}">
                                        <p v-if="plan.name" class="small p-1">{{'Limit: $' + plan.min_deposit + ' - $' + plan.max_deposit}}</p>
                                    </div>
                                    <div class="p-0 m-0  row">
                                        <div class="col mt-2 p-0">
                                            <button :disabled="paymentMethod == 'balance' && $auth.user().balance <  amount" ref="submit" type="submit" :class="{'cmn-btn' : true,'btn' : true, disabled : paymentMethod == 'balance' && $auth.user().balance <  amount}">{{paymentMethod == 'balance' && $auth.user().balance > amount ? 'Invest' : 'Proceed' }}</button>
                                        </div>
                                        <div class="col mt-2 p-0 ml-1 ml-sm-0 text-left text-sm-right">
                                            <button @click.prevent="$emit('changeComponent', 'DepositPlan', '')" class="cmn-btn btn">Back</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <button type="button" ref="paymentModalbtn" style="visibility: hidden;" id="add" data-toggle="modal" data-target="#paymentDetails"></button>
                            <div class="modal fade" ref="paymentDetails" id="paymentDetails">
                                <paymentDetails @popUploaded="displayMessage" :key="key" :plan="plan" :paymentMethod="paymentMethod" :amount="amount" :processor="getPaymentProcessorDetails(paymentMethod.payment_method)"></paymentDetails>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account section end -->
        <Footer></Footer>
    </div>
</template>
<script>
    export default {
    data() {
        return {

            errors: '',
            form: new Form({
                
            }),
            error: '',
            paymentMethods : undefined,
            paymentMethod : {payment_method:''},
            validated : false,
            amount : undefined,
            key : 0,
            message : undefined,
        }
    },
    mounted() {
        
    },
    created(){
        window.scrollTo(0, 350)
        this.getPaymentMethods()
    },
    watch: {
        error() {
            setTimeout(() => { this.error = '' }, 15000);
        },
        errors() {
            setTimeout(() => { this.errors = '' }, 15000);
        },
        amount(){
            this.key++
            this.message = undefined
        },
        paymentMethod(){
            this.key++
            this.message = undefined
        }
    },
    props: ['plan'],
    computed: {
        btc() {
            if (localStorage.rate) {
                var rate = parseFloat(numeral(JSON.parse(localStorage.rate)).format('00.00'))
                var btc = this.payment / rate
                return btc.toFixed(8)
            } else {
                return 'N/A'
            }
        },
        // paymentMethods(){
        //     return this.getPaymentMethods
        // }

    },
    methods: {
        getPaymentProcessorDetails(search){
           return this.$root.myFilter(this.$root.payments, search)[0]
        },
        processing(status) {
            if (status) {
                this.$refs.process.innerText = "Processing..."
                this.$refs.process.disabled = true
            } else {
                this.$refs.process.innerText = "Process"
                this.$refs.process.disabled = false
            }
        },
        getPaymentMethods(){
            this.$root.loader('show')
            this.$error = ''
            this.form.get("/auth/bankdetails/?user_id=1")
                .then(response => {
                    this.paymentMethods = response.data.data.item
                    this.$root.loader('hide')
                })
                .catch(error => {
                    this.error = error.response.data.message
                    this.$root.loader('hide')
                    console.log(error.response)
                })
        },
        displayMessage(msg){
            this.message = msg
            window.scrollTo(0, 350)
        },
        processInvest(){
            if (this.paymentMethod == 'balance') {

                this.$root.loader('show')
                let form = new Form()
                form.fromWallet = true
                this.error = undefined
                this.message = undefined
                form.user_id = this.$auth.user().id
                form.amount = this.amount

                form.submit('post', "/auth/packageusers")
                    .then(response => {
                        this.$root.loader('hide')
                        this.displayMessage({message:response.data.message})
                    })
                    .catch(error => {
                        this.$root.loader('hide')
                        if (error.response.status == 422) {
                            this.error =  error.response.data.error.pop
                        }
                        else{
                            this.error = error.response.data.message
                        }
                        console.log(error, error.response)
                        
                    })  
        
            }
            else {
                this.$refs.paymentModalbtn.click()
            }
        }
    },
    
}

</script>
<style type="text/css" scoped="">
/* .bg_img{
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
    }*/

</style>
