<template>
    <div class="">

        <Header></Header>
        <div id="appCapsule">
            <div class="section">
                <div class="row mt-2">
                    <div v-for="plan in $root.packages" v-if = "plan.status" class="col-xl-3 col-lg-6 col-sm-12 mb-2">
                        <div class="stat-box text-center">
                            <h4 class="text-primary font-weight-bold">
                                {{ plan.name }} </h4>
                            <hr>
                            <div class="title">
                                <div class="card-body">
                                    <p><strong>Profit: </strong>
                                        {{ plan.roi }}%</p>
                                    <p><strong>Minimum:</strong>
                                        {{$root.numeral(plan.min_deposit)}} </p>
                                    <p><strong>Maximum:</strong>
                                        {{
                                        plan.max_deposit >= 1000000
                                        ? "Unlimited"
                                        : $root.numeral(
                                        plan.max_deposit
                                        )
                                        }}</p>
                                    <p><strong>Duration: </strong>
                                        {{ plan.duration }}
                                        <span v-if = "plan.turnover <= 3">
                                            {{ plan.return_for == 'period' ? ' for ' +
                                            plan.loop_termination * plan.turnover + ' Day(s) ' : 'Unlimited'
                                            }}
                                        </span>
                                        </p>
                                        <p v-if = "plan.first_level_ref_commission"><strong>Referral Commission: </strong>
                                            {{ plan.first_level_ref_commission }}%</p>
                                        <p  v-if = "plan.capital_back"><strong>Total:</strong>
                                        {{plan.roi}}% <span class="badge badge-primary"> + Capital</span> </p>
                                        <p v-if = "plan.min_deposit >= 5000"><strong>With loan Security </strong>
                                            </p>
                                        <hr>
                                        <form style="width:100%; margin:auto" method="post" @submit.prevent="subscribePlan($event, plan)" class = "mt-3">
                                           
                                            <div class="form-group basic">
                                                <label class="label text-primary" for="account1">Capital</label>
                                                <input type="number" @change="depositForm.key++" placeholder="Enter amount" name="amount" class="form-control" id="tf2"
                                                    :min="plan.min_deposit" :max="plan.max_deposit" required="">
                                                <p class="text-left small">Available Balance: <strong class="text-primary ">{{$auth.user().balance}}</strong></p>
                                            </div>
                                            <div class="form-group basic">
                                                <label class="label text-primary">Select method of payment</label>
                                                <div class="input-group mb-2">
                                                    <select @change="setInvestmentPaymentMethod($event)" required="" value="" class="form-control p-1">
                                                        <option class="text-capitalize">
                                                            select
                                                        </option>
                                                        <option value="balance" v-if="$auth.user().balance >= plan.min_deposit" class="text-capitalize">
                                                            Direct Invest Balance
                                                        </option>
                                        
                                                        <option
                                                            v-if="$root.getPaymentAccountDetails(paymentMethods, processor.payment_method, processor.currency_type)"
                                                            class="text-capitalize" :value="processor.payment_method" v-for="processor in paymentMethods">
                                                            {{'Direct Invest ' +
                                                            processor.payment_method}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <div class="col-sm-12 text-center">
                                                    <button type="reset" class="btn btn-danger mb-md-2">Reset</button>
                                                    <input type="submit" name="investment" value="Proceed" class="btn btn-primary mb-md-2">
                                        
                                                </div>
                                            </div>
                                        </form>
                                </div>
                               
                        </div>
                    </div>
                </div>
            </div>
            <hr>

        </div>
        <!-- ref link -->
    </div>


    <br><br>

    <Footer  @popUploaded="displayMessage"></Footer>



    <button type="button" ref="paymentModalbtn" style="visibility: show;" id="add" data-toggle="modal"
        data-target="#paymentDetails"></button>
    <div v-if="depositForm.payment_method" :key="depositForm.key" class="modal fade dialogbox" tabindex="-1"
        role="dialog" ref="paymentDetails" id="paymentDetails" data-bs-backdrop="true">
        <paymentDetails @popUploaded="displayMessage" :key="key" plan="" :deposit_type="deposit_type"
            :paymentMethod="depositForm.payment_method" :amount="depositForm.amount"></paymentDetails>
    </div>

    </div>


</template>
<script>
export default {
    data() {
        return {
            key: 0,
            depositForm: new Form({
                amount: undefined,
                payment_method: undefined,
                user_id: this.$auth.user().id,
                type: "balance",
                reference: "",
                key: 0,
            }),


            paymentMethods: undefined,
            paymentMethod: undefined,
            planForm : undefined,
            investmentPaymentMethod: undefined,
            error: undefined,
            errors: {},
            message: undefined,
            deposit_type : 'balance'



        }
    },
    watch: {
        error() {
            setTimeout(() => { this.error = '' }, 15000);
        },
        errors() {
            setTimeout(() => { this.errors = '' }, 15000);
        },
       
        investmentPaymentMethod() {
            this.depositForm.key++
        },
        

    },
    mounted() {
        this.$root.dashboard_header_page_title = "Investment Plans"
        window.scrollTo(0, 0);
    },
    created() {
        var js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/jquery.min.js"
        );
        js.setAttribute("async", true);
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/dashboard/jquery-3.2.1.slim.min.js"
        );
        js.setAttribute("async", true);
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/bootstrap.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/bootstrap.bundle.min.js"
        );
        document.body.appendChild(js);

        this.getPaymentMethods()
    },
    beforeRouteEnter(to, from, next) {
        next(vm => {
            vm.$root.loader('show')

            setTimeout(() => { vm.$root.loader('hide') }, 2000);
        })
    },
   
    methods: {
        subscribePlan(event, plan) {
            if (this.paymentMethod == 'balance') {
                this.$root.loader('show')
                let form = new Form()
                form.fromWallet = true
                this.error = undefined
                this.message = undefined
                form.deposit_type = 'balance'
                form.transaction_ref = 'Balance Deposit'
                form.amount = event.target[0].value
                form.user_id = this.$auth.user().id
                form.payment_method = this.paymentMethods[0].payment_method
                form.submit('post', "/auth/packageusers")
                    .then(response => {
                        this.$root.loader('hide')
                        this.paymentMethod = undefined
                        this.$auth.fetch()
                        this.displayMessage({ message: response.data.message })
                    })
                    .catch(error => {
                        this.$root.loader('hide')
                        if (error.response.status == 422) {
                            this.error = error.response.data.error.pop
                        }
                        else {
                            this.error = error.response.data.message
                            this.$root.alert("error" , " ", this.error)
                        }
                        console.log(error, error.response)

                    })

            } else {
                this.deposit_type = 'investment'
                this.planForm = event.target
                this.depositForm.amount = event.target[0].value
                this.$refs.paymentModalbtn.click()
            }
            
        },
        setInvestmentPaymentMethod(event) {
            this.depositForm.key++
            this.key++
            this.depositForm.payment_method = undefined
            var select = event.target;
            var method = select.options[select.selectedIndex].value;
            var paymentMethod = this.$root.cryptoFilter(this.paymentMethods, method)[0] 
            this.paymentMethod = paymentMethod ? undefined : "balance"
            this.depositForm.payment_method = paymentMethod
            
        },
        displayMessage(msg) {
            this.message = msg
            setTimeout(() => { this.$root.scrollUp() }, 1000);
            this.$root.alert('success', ' ', msg.message)
        },
        getPaymentMethods() {
            this.$error = ''
            var form = new Form()
            form.get("/auth/bankdetails/?user_id=1")
                .then(response => {
                    this.paymentMethods = response.data.data.item
                    // this.$root.loader('hide')
                })
                .catch(error => {
                    this.error = error.response.data.message
                    // this.$root.loader('hide')
                    console.log(error.response)
                })
        },
        processing(status, ref, text1, text2) {
            if (status) {
                this.$refs[ref].innerHTML = text1;
                this.$refs[ref].disabled = true;
            } else {
                this.$refs[ref].innerHTML = text2;
                this.$refs[ref].disabled = false;
            }
        },

    }
}

</script>
<style scoped>
</style>
