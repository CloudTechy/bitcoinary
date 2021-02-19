<template>
    <!-- <div class="m-0 p-0">
        <DashboardHeader></DashboardHeader>
        <section class="main-container m-lg-3 m-0 acc">
            <div class="main">
                
                <div class="container">
                    <div class="wrapper" :style="'background:url('+ $root.basepath +'/img/home.png) no-repeat 0 0;min-height:400px;'">
                        <div class="account-wrapper m-xl-2 row m-0 ">
                            <nav class="nav  navbar-dark ml-4 ml-lg-0 mb-3 mb-lg-b p-0 mt-3 navbar navbar-expand-lg ">
                                <button @click="" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar4">
                                    <span class="navbar-toggler-icon "></span>
                                </button>
                            </nav>
                            <DashboardSidebar></DashboardSidebar>
                            <div class="columns col-xl-9 p-0 pl-lg-2 col-lg-9 col-12 main-acc">
                                <div class="acc-body p-0 deposit-confirm withdraw-confirm">
                                    <div class="bal p-0 text-center">
                                        <span>Account Balance:</span> {{$root.numeral(user.balance)}}
                                    </div>
                                    <div class="bal p-0 text-center">
                                        <span>Pending Withdrawals:</span> {{$root.numeral(user.totalPendingWithdrawal)}}</div>
                                    <div class="error-msg p-4 m-3" v-if="error">
                                        <p  class="p-2 m-2">{{error}}</p>
                                    </div>
                                    <div class="success-msg p-4 m-4" v-if="message">
                                        <p   class="p-2 m-2">{{message}}</p>
                                    </div>
                                    <form @submit.prevent="withdraw" method="post">
                                        <table class="stat">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Account</th>
                                                    <th>Available</th>
                                                    <th>Pending</th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td> Dollar</td>
                                                    <td><b style="color:green">{{$root.numeral(user.balance)}}</b></td>
                                                    <td class="text-center"><b style="color:red">{{$root.numeral(user.totalPendingWithdrawal)}}</b></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td> Bitcoin</td>
                                                    <td><b style="color:green">{{btc(user.balance)}}</b></td>
                                                    <td class="text-center"><b style="color:red">{{btc(user.totalPendingWithdrawal)}}</b></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td> Perfectmoney</td>
                                                    <td><b style="color:green">$0.00</b></td>
                                                    <td class="text-center"><b style="color:red">$0.00</b></td>
                                                </tr>
                                            </thead>
                                        </table>
                                        <br><br>
                                        <ul class="form-list text-left deposit-form-wrapper">
                                            <li class="clearfix floated">
                                                <div class="input-box m-1">
                                                    <label>Withdraw Amount</label>
                                                    <div class="iconed">
                                                        <span class="icon"><i class="fas fa-dollar-sign" aria-hidden="true"></i></span>
                                                        <input type="number" min="1" :disabled="user.balance <= 0" placeholder="Enter amount to Withdraw" v-model="amount" value="" :class="{'form-control' : true, disabled :user.balance > 0 }">
                                                            <p class="small text-white m-2">maximum amount is {{$root.numeral(user.balance)}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <h3 v-if="user.balance <= 0" class="notice-message m-2 text-center">You have no funds to withdraw.</h3>
                                        <div v-else class="text-center m-2 mb-3 p-3 mb-lg-0">
                                            <button type="submit" ref="process" class="btn btn-default">Withdraw</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> -->
    <div class="page-wrapper">
        <section class="inner-hero bg_img" :style="'background:url('+ $root.basepath +'/images/bg/bg-1.jpg)'" :data-background="$root.basepath + '/images/bg/bg-1.jpg'">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Dashboard</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>Dashboard</li>
                        </ul>
                        <h2 class="page-title pt-4"><span class="base--color">Welcome, </span> {{'Bitcoinary'}}</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row mt-50 ">
                            <div class="col-lg-4 col-sm-12 mb-5s0">
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
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="headeraccount base--bg mb-4"><span class="font-weight-bold">Make Withdrawal Request </span> </div>
                                    <div class="table-respon2sive table-responsive--md p-0">
                                        <table class="table style--two white-space-nowrap">
                                            <thead class="bg-transparent text-white">
                                                <tr>
                                                    <th>Payment Processor</th>
                                                    <th>Receiving Address</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="py in $root.payments">
                                                    <td data-label="Payment processor">
                                                        <span class="">
                                                            <img class="img-size-50" :src="$root.basepath + '/images/uploads/' + py.image" alt="processor brand">
                                                        </span>
                                                        <span class="text-capitalize"> {{py.name}}</span></td>
                                                    <td v-if="getAccountDetails(py.name, py.type)" data-label="Address">{{getAccountDetails(py.name, py.type)}}</td>
                                                    <td data-label="Address" v-else>
                                                        <p>Not set
                                                            <a style="text-decoration: underline;" href="/dashboard/settings/#payment" class="base--color font-weight-bold"> setup?</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mt-4 p-3">
                                        <div v-if = "$auth.user().balance > 1" class="form-group">
                                            <label>Amount</label>
                                            <input type="password" placeholder="Enter Amount" v-model="amount" required class="form-control">
                                        </div>
                                        <div class="pb-2" v-else>You have no funds to withdraw.</div>
                                        <button :disabled="$auth.user().balance < 1"  ref="withdrawBtn" type="submit" :class="{'cmn-btn' : true, disabled : $auth.user().balance < 1}">Request</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
    data() {
        return {
            form: new Form({
                reference: 'SELF',
                user_id: this.$auth.user().id
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
            setTimeout(() => { this.message = '' }, 3000);
        },
        error() {
            setTimeout(() => { this.error = '' }, 3000);
        },
    },
    mounted() {
        this.$root.scrollUp()
        console.log(this.$auth.user())
    },
    computed: {
        user() {
            return this.$auth.user()
        },
    },
    methods: {
        withdraw() {
            this.processing(true)
            this.form.amount = this.amount
            this.form.post("/auth/withdrawals")
                .then(response => {
                    window.scrollTo(0, 200)
                    this.amount = ''
                    this.processing(false)
                    this.error = ''
                    this.message = response.data.message
                })
                .catch(error => {
                    this.message = ''
                    this.error = error.response.data.message
                    this.processing(false)
                    window.scrollTo(0, 200)
                    console.log(error.response)
                })
        },
        getAccountDetails(search, currencyType){
           let paymentDetails = this.$root.myFilter(this.$auth.user().bank_details, search)[0]
           return currencyType == 'fiat' ?  paymentDetails.acc_number : paymentDetails.wallet
       }
    }
}

</script>
<style type="text/css">
    .img-size-50 {
        width: 50px;
        height: 50px;
    }
    .disabled:hover{
        background-color: #cca354 !important;
    }
    .cmn-btn.disabled, .cmn-btn:disabled {
        opacity: 0.65;
        cursor: not-allowed;
    }
</style>
