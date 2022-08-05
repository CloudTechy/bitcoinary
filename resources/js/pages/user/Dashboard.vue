<template>
    <div class="page-wrapper">
        <Header></Header>
        <section class="inner-hero bg_img" :style="'background:url('+ $root.basepath +'/images/bg/bg-1.jpg)'" :data-background="$root.basepath + '/images/bg/bg-1.jpg'">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Dashboard</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>Dashboard</li>
                        </ul>
                        <h2 class="page-title pt-4"><span class="base--color">Welcome, </span> {{$auth.user().username}}</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="pt-60 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row mb-none-30">
                            <div class="col-xl-3 col-sm-6 mb-30 ">
                                <div class="d-widget d-flex flex-wrap">
                                    <div class="col-8">
                                        <span class="caption">Active Investment</span>
                                        <h4 class="currency-amount">{{$root.numeral($auth.user().totalActiveTransaction)}}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="icon ml-auto">
                                            <i class="las la-cubes"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-30">
                                <div class="d-widget d-flex flex-wrap">
                                    <div class="col-8">
                                        <span class="caption">Total Earned</span>
                                        <h4 class="currency-amount">{{$root.numeral($auth.user().totalEarned)}}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="icon ml-auto">
                                            <i class="las la-credit-card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-30">
                                <div class="d-widget d-flex flex-wrap">
                                    <div class="col-8">
                                        <span class="caption">Total Withdraw</span>
                                        <h4 class="currency-amount">{{$root.numeral($auth.user().totalWithdrawBySelf)}}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="icon ml-auto">
                                            <i class="las la-cloud-download-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-30">
                                <div class="d-widget d-flex flex-wrap">
                                    <div class="col-8">
                                        <span class="caption">Referral Earnings</span>
                                        <h4 class="currency-amount">{{$root.numeral($auth.user().totalCommission)}}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="icon ml-auto">
                                            <i class="las la-user-friends"></i>
                                        </div>
                                    </div>
                                </div><!-- d-widget-two end -->
                            </div>
                        </div><!-- row end -->
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
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <div class="table-responsive table-responsive--md p-0">
                                    <table class="table style--two white-space-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Recipient</th>
                                                <th>Amount</th>
                                                <th>Details</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr :key="transactions.id" v-for="trx in transactions">
                                                <td data-label="Recipient">
                                                    <div class="user">
                                                        <div class="thumb"><img :src="$root.basepath + '/images/users/' + trx.image" alt="image"></div>
                                                        <span>{{trx.owner}}</span>
                                                    </div>
                                                </td>
                                                <td class="text-success" data-label="Amount">+ ${{$root.normalNumeral(trx.amount)}}</td>
                                                <td data-label="Details">From {{trx.reference}}</td>
                                                <td data-label="Date">{{trx.date}}</td>
                                            </tr>
                                            <tr v-if="transactions.length == 0">
                                                <td class="text-center only" colspan="5">
                                                    <div class="p-3 text-center">
                                                        No data to display yet. Click <a style="text-decoration: underline;" href="/dashboard/deposit" class="base--color font-weight-bold"> here </a> to invest and start earning.
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pb-60 pt-3">
                                    <div class="container equal blog-card">
                                        <div class="row justify-content-center ">
                                            <div :data-background="$root.basepath + '/images/bg/bg-5.jpg'" class="col-md-12 no-padding wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                                <h3 class="row m-2">Your&nbsp;<span class="base--color"> Affiliate Link</span></h3>
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-7 col-sm-8 m-2">
                                                        <div id="link">https://bitcoinarymint.com/?ref=bitcoinary</div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-3 m-2 text-md-right">
                                                        <button @click="$root.alert('success',' ', 'copied')" v-clipboard="Referral_link" class="cmn-btn" data-clipboard-target="#link">COPY LINK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row end -->
                    </div>
                </div>
            </div>
        </div>
        <<Footer></Footer>>
    </div>
</template>
<script>
    export default {
    data() {
        return {
            transactions : []   
                 }
    },
    mounted() {
        window.scrollTo(0, 0);
        this.getTransactions();
        setInterval(this.getTransactions, 100000)
    },
    computed: {
        Referral_link() {
            return this.$root.basepath + '/register?ref=' + this.$auth.user().username
        }
    },
    methods: {

        getTransactions() {
            this.$auth.fetch()
            this.$http.get("/auth/transactions?pageSize=6&sent=1&confirmed=1&user_id="+this.$auth.user().id)
                .then(response => {
                    this.transactions = response.data.data.item
                })
                .catch(error => {
                    console.log(error.response)
                })
        },
    }
}

</script>
<style type="text/css">
.equal {
    box-shadow: 0 5px 5px 0 rgb(204 163 84 / 25%) !important;
}

.headeraccount {
    padding: 10px;
    position: relative;
    box-shadow: none;
    color: black;
}

.icon {
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    background-color: #000000;
    color: #cca354;
    font-size: 32px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
}

</style>
