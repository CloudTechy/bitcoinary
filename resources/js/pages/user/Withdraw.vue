<template>
    <div class="page-wrapper">
        <DashboardHeader></DashboardHeader>
        <section class="inner-hero bg_img" :style="'background:url('+ $root.basepath +'/images/bg/bg-1.jpg)'" :data-background="$root.basepath + '/images/bg/bg-1.jpg'">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Withdraw</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li>Withdraw</li>
                        </ul>
                        <h2 class="page-title pt-4"><span class="base--color">Welcome, </span> {{$auth.user().username}}</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="mt-50 form-group p-2 text-center">
                            <div :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-5.jpg )'}" class="error-msg  m-3" v-if="error">
                                <div v-if="typeof error == 'object'">
                                    <p v-for="err in error" class="small m-2 m-md-3">{{err}}</p>
                                </div>
                                <p v-else class="text-center m-2  m-md-3 small">{{error}}</p>
                            </div>
                            <div :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-5.jpg )'}" class="success-msg " v-if="message">
                                <p class="p-2 m-lg-3 m-sm-1">{{message}}</p>
                            </div>
                        </div>
                        <div class="row mt-50 ">
                            <div class="col-lg-4 col-sm-12 mb-50">
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="headeraccount base--bg"><span class="font-weight-bold">Financial Statistics </span> </div>
                                    <div class="row p-4 pb-2">
                                        <div class="col-9 col-md-10 ">
                                            <h2 class="mb-1">{{$root.numeral($auth.user().balance)}}</h2>
                                            <p class="mb-3">Account Balance</p>
                                        </div>
                                        <div class="col-3 col-md-2 p-0">
                                            <div class="icon base--bg text-white">
                                                <i class="las la-dollar-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider pb-3"></div>
                                    <div class="row p-4 pb-2">
                                        <div class="col-9 col-md-10 ">
                                            <h2 class="mb-1">{{$root.numeral($auth.user().totalPendingWithdrawal)}}</h2>
                                            <p class="mb-3">Pending Withdrawal</p>
                                        </div>
                                        <div class="col-3 col-md-2 p-0">
                                            <div class="icon base--bg text-white">
                                                <i class="las la-dollar-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider pb-3"></div>
                                    <div class="row p-4 pb-2">
                                        <div class="col-8 col-md-9 ">
                                            <p class="mb-3">Withdrawal Status</p>
                                        </div>
                                        <div class="col-4 col-md-3 p-0">
                                            <div class="mb-1">
                                                <span :class="{badge:true, 'badge-success' : $auth.user().CanWithdraw , 'badge-danger' : !$auth.user().CanWithdraw }">
                                                    {{$auth.user().CanWithdraw ? 'Active' : 'Paused'}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="headeraccount base--bg mb-4"><span class="font-weight-bold">Make Withdrawal Request </span> </div>
                                    <form @submit.prevent="withdraw">
                                        <h6 class="text-center p-2 base--color">Select your Payment Method</h6>
                                        <div class="table-respon2sive table-responsive--md p-0">
                                            <table class="table style--two white-space-nowrap">
                                                <thead class="bg-transparent text-white">
                                                    <tr>
                                                        <th>Processor</th>
                                                        <th>Receiving Address</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="py in $root.payments" :class="{ selected : form.payment_method == py.name && $root.getAccountDetails(py.name, py.type)}">
                                                        <td data-label="Payment processor">
                                                            <input class="select_input" required="" name="payment_option" type="radio" @click="" v-model="form.payment_method" :value="py.name">
                                                            <span class="">
                                                                <img class="img-size-50" :src="$root.basepath + '/images/uploads/' + py.image" alt="processor brand">
                                                            </span>
                                                            <span class="text-capitalize"> {{py.name}}</span></td>
                                                        <td v-if="$root.getAccountDetails(py.name, py.type)" data-label="Address">{{$root.getAccountDetails(py.name, py.type)}}</td>
                                                        <td data-label="Address" v-else>
                                                            <p>Not set
                                                                <a style="text-decoration: underline;" :href="'/dashboard/settings?py='+py.name" class="base--color font-weight-bold"> setup?</a>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4 p-3">
                                            <h6 class="text-center p-2 base--color"">Withdrawal Amount</h6>
                                            <div v-if=" $auth.user().balance> 1" class="form-group">
                                                <div class="input-group">
                                                    <div style="border-radius: 0px 5px" class="input-group-prepend">
                                                        <span class="icon bg--base text-white"><i class="fas fa-dollar-sign" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input :max='$auth.user().balance' min="1" type="number" placeholder="Enter amount" v-model="amount" required class="form-control">
                                                    <div class="input-group-prepend">
                                                        <button style="border-radius: 0px 5px" ref="withdrawBtn" type="submit" class="cmn-btn">Request</button>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="pb-2 mt-4 p-3 text-center" v-else>You have no funds to withdraw. click <a style="text-decoration: underline;" href="/dashboard/deposit" class="base--color font-weight-bold"> here </a> to start earning.</div>
                                </div>
                               
                            </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer></Footer>
    </div>
</template>
<script>
    export default {
    data() {
        return {
            form: new Form({
                reference: 'SELF',
                user_id: this.$auth.user().id,
                payment_method : '',
            }),
            message: '',
            error: '',
            amount: ''

        }
    },
    watch: {
        amount() {
            if (this.amount > this.user.balance) {
                this.amount = this.user.balance
            }
        },
        message() {
            // setTimeout(() => { this.message = '' }, 3000);
        },
        error() {
            // setTimeout(() => { this.error = '' }, 3000);
        },
    },
    mounted() {
        this.$root.scrollUp()
    },
    computed: {
        user() {
            return this.$auth.user()
        },
    },
    methods: {
        withdraw() {
            this.$root.loader('show')
            this.message = ""
            this.error = ''
            this.form.amount = this.amount
            this.form.post("/auth/withdrawals")
                .then(response => {
                    this.$root.loader('hide')
                    this.message = response.data.message
                    this.$root.scrollUp()
                    this.amount = ''
                    this.$auth.fetch()
                })
                .catch(error => {
                    this.$root.loader('hide')
                    this.$root.scrollUp()
                    if (error.response.status == 422) {
                        this.error =  error.response.data.error.pop
                    }
                    else{
                        this.error = error.response.data.message
                    }
                    console.log(error, error.response)
                })
        },
    }
}

</script>
<style type="text/css">
.img-size-50 {
    width: 50px;
    height: 50px;
}

.disabled:hover {
    background-color: #cca354 !important;
}

.cmn-btn:disabled {
    opacity: 0.65;
    cursor: not-allowed;
}

.select_input {
    opacity: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    margin: 0;
    top: 0;
    z-index: 11;
    cursor: pointer;
}

.selected {
    border-radius: 3px;
    background: #cca354 !important;
    box-shadow: 0 5px 5px 0 rgb(204 163 84 / 25%) !important;

}

</style>
