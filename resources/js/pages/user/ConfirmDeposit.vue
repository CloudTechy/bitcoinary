<template>
    <!-- <div class="acc-block">
        <div class="acc-heading clearfix">
            <h2>Confirm Deposit</h2>
            <ul class="breadcrumbs">
                <li>Main</li>
                <li><img :src="$root.basepath + '/img/right-b.png'"></li>
                <li class="active">Deposit Confirm</li>
            </ul>
        </div>
        <div class="acc-body deposit-confirm">
            <div class="error-msg  m-2" v-if="!plan.wallet && !user.admin_pm">
                <p class="p-2 m-2">Unable to process a wallet address at this time, Please contact your administrator or try again later.</p>
            </div>
            Please send your payments to this account: <b ref = "wlt">{{plan.wallet}}</b></br>
            <p class="p-2 m-2" v-if="user.admin_pm"> Use Perfect Money: <b>{{user.admin_pm}}</b></p><br><br>
            <table class="stat">
                <thead>
                    <tr>
                        <th>Plan:</th>
                        <td>{{plan.duration}} days turnover</td>
                    </tr>
                    <tr>
                        <th>Amount:</th>
                        <td>{{$root.numeral(plan.deposit)}}</td>
                    </tr>
                    <tr>
                        <th>Profit:</th>
                        <td>{{$root.numeral(plan.interest_rate)}} after {{plan.duration}} days</td>
                    </tr>
                    <tr>
                        <th>Principal Return:</th>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <th>Principal Withdraw:</th>
                        <td>
                            Available with
                            0.00% fee </td>
                    </tr>
                    <tr>
                        <th> Your Account Balance:</th>
                        <td>{{$root.numeral(user.balance)}}</td>
                    </tr>
                    <tr>
                        <th> Pay:</th>
                        <td>{{$root.numeral(payment)}}</td>
                    </tr>
                    <tr>
                        <th>Btc Conversion:</th>
                        <td>{{btc}}</td>
                    </tr>
                </thead>
            </table>
            <br><br>
            <form @submit.prevent="processDeposit" method="post">
                <div class="error-msg p-3 m-2" v-if="error">
                    <p class="p-2 m-2">{{error}}</p>
                </div>
                <table class="stat">
                    <thead>
                        <tr>
                            <td colspan="2"><b>Required Information:</b></td>
                        </tr>
                        <tr>
                            <td>Upload POP/Screenshot: </td>
                            <td><input :required="true" ref="fileInput" type="file" class="inpts"></td>
                        </tr>
                    </thead>
                </table>
                <br>
                <button ref="process" :disabled="!user.admin_wallet && !user.admin_pm" type="submit" :class="{btn:true, disabled: !user.admin_wallet , 'btn-inverse' : true}">Upload</button>&nbsp;
                <button type="submit" @click.prevent="$router.push({ name: 'dashboard'})" required class="btn btn-inverse">Cancel</button>
            </form>
        </div>
    </div> -->
    <div class="page-wrapper">
        <!-- account section start -->
        <div class="account-section p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="account-card">
                            <div class="account-card__header bg_img overlay--one" :style="'background:url('+ $root.basepath +'/images/bg/bg-6.jpg) no-repeat 0 0;'" >
                                <h2 class="section-title text-center">Make an <span class="base--color"> Investment</span></h2>
                            </div>
                            <div class="account-card__body">
                                <h3 class="text-center">Investment Details</h3>
                                <form class="mt-4" autocomplete="off" @submit.prevent="register" method="post">
                                    <!-- <div class="form-group">
                                        <div :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-5.jpg )'}" class="error-msg  m-3" v-if="has_error && !success  ">
                                            <p v-if="!unknown_error && errors" class="text-center  m-3 small">You have some errors in your form</p>
                                            <p class=" m-3 small" v-if="unknown_error">{{unknown_error}}</p>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label>Payment method</label>
                                        <select v-model="paymentMethod" class="base--bg">
                                            <option class="text-capitalize" :value="processor.payment_method" v-for="processor in paymentMethods">{{'Direct Invest with ' + processor.payment_method}}</option>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Capital</label>
                                        <input type="number" required placeholder="Enter amount" :min="plan.min_deposit" :max="plan.max_deposit" v-model="form.amount" :class="{'form-control' : true, 'error-input': errors.amount != undefined}">
                                        <p v-if="plan.name" class="small p-1">{{'Limit: $' + plan.min_deposit + ' - $' + plan.max_deposit}}</p>
                                    </div>
                                    <div class="p-0 m-0  row">
                                        <div class="col mt-3">
                                        <button :disabled="false" ref="submit" type="submit" :class="{'cmn-btn' : true,'btn' : true, disabled : false}">Proceed</button>
                                    </div>
                                        <div class="col mt-3 text-left text-sm-right">
                                        <button @click.prevent = "$emit('changeComponent', 'DepositPlan', '')" class="cmn-btn btn">Back</button>
                                    </div>
                                    
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account section end -->
    </div>
</template>
<script>
export default {
    data() {
        return {

            errors: '',
            form: new Form({
                package_id: this.plan.id,
                user_id: this.user.id,
                amount : undefined
            }),
            error: '',
            paymentMethods : undefined,
            paymentMethod : undefined
        }
    },
    mounted() {
        window.scrollTo(0, 350)
        this.getPaymentMethods()
    },
    watch: {
        error() {
            setTimeout(() => { this.error = '' }, 5000);
        },
        errors() {
            setTimeout(() => { this.errors = '' }, 5000);
        }
    },
    props: ['plan', 'user'],
    computed: {
        payment() {
            var payment = this.plan.deposit - this.user.balance
            return payment
        },
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
        processDeposit() {
            this.$refs.wlt.innerText = this.user.admin_wallet
            this.processing(true)
            var data = new FormData()
            var file = this.$refs.fileInput.files[0]
            this.form.pop = file
            this.form.submit('post', "/auth/packageusers", {
                    transformRequest: [function(data, headers) {
                        return objectToFormData(data)
                    }]

                })
                .then(response => {
                    window.scrollTo(0, 250)
                    this.$emit('success', 'The deposit has been saved. It will become active when the administrator checks statistics.')
                    this.processing(false)
                })
                .catch(error => {
                    this.errors = error.response.data.error
                    this.error = error.response.data.message
                    setTimeout(() => { window.scrollTo(0, 600); this.$emit('changeComponent', 'DepositPlan', this.selectedPackage)  }, 2000);
                    this.processing(false)
                })
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

