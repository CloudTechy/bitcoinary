<template>
    <div class="page-wrapper">
        <section class="inner-hero bg_img" :style="'background:url('+ $root.basepath +'/images/bg/bg-1.jpg)'" :data-background="$root.basepath + '/images/bg/bg-1.jpg'">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Withdrawal</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li>Withdrawal</li>
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
                        <div class="row mt-50 ">
                            <div class="col-lg-4 col-sm-12 mb-50">
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="headeraccount base--bg">
                                        <span class="font-weight-bold">Financial Statistics </span>
                                    </div>
                                    <div class="row p-4 pb-2">
                                        <div class="col-9 col-md-10 ">
                                            <h2 class="mb-1">{{$root.numeral($auth.user().totalEarned)}}</h2>
                                            <p class="mb-3">Total Earned</p>
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
                                            <h2 class="mb-1">{{$root.numeral(totalWithdraw)}}</h2>
                                            <p class="mb-3">Total Withdrawals</p>
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
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="headeraccount base--bg mb-4"><span class="text-capitalize font-weight-bold">Your Approved Withdrawal Report </span> </div>
                                    <div v-if="withdrawals.length > 0">
                                        <form @submit.prevent="getWithdrawals" class="date-from" method="post" name="opts">
                                            <div class="form-list m-3 form-group">
                                                <div class="row text-center">
                                                    <div class="col">
                                                        <label for="from_date" class="form-label">From</label>
                                                        <div class="input-group">
                                                            <div style="border-radius: 0px 5px" class="input-group-prepend">
                                                                <span class="icon"><i class="fas fa-calendar" aria-hidden="true"></i></span>
                                                            </div>
                                                            <input type="date" id="from_date" placeholder="select from date" v-model="from" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <label for="to_date" class="form-label">To</label>
                                                        <div class="input-group">
                                                            <div style="border-radius: 0px 5px" class="input-group-prepend">
                                                                <span class="icon"><i class="fas fa-calendar" aria-hidden="true"></i></span>
                                                            </div>
                                                            <input type="date" id="to_date" placeholder="select to date" v-model="to" required class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="table-respon2sive table-responsive--md p-0">
                                        <table class="table style--two white-space-nowrap">
                                            <thead v-if="withdrawals.length > 0" class="bg-transparent text-white">
                                                <tr>
                                                    <th>Amount</th>
                                                    <th>Payment Processor</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-if="withdrawals.length > 0" v-for="data in withdrawals">
                                                    <td data-label="Amount">{{$root.numeral(data.amount)}}</td>
                                                    <td data-label="Processor"><span class="badge text-dark bg--base">{{data.payment_method}}</span></td>
                                                    <td class="text-success" data-label="Date">{{data.date}}</td>
                                                </tr>
                                                <tr v-if="withdrawals.length == 0">
                                                    <td class="text-center only" colspan="4">
                                                        <div class="p-3 text-center">
                                                            You do not have any approved withdrawal yet.<br> Click <a style="text-decoration: underline;" href="/dashboard/withdraw" class="base--color font-weight-bold"> here </a> to request for withdrawal.
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
import moment from 'moment'
export default {
    data() {
        return {
            from: '',
            to: '',
            withdrawals: [],
            error: '',
            totalWithdraw: 0,
        }
    },
    mounted() {
        this.$root.loader('show')
        setInterval(this.getWithdrawals, 61000)
        this.getWithdrawals()
    },
    computed: {

    },
    methods: {
        getWithdrawals() {
            // this.$root.loader('show')
            let form = new Form()
            form.get("auth/withdrawals?confirmed=1&processed=1&user_id=" + this.$auth.user().id)
                .then(response => {
                    this.$root.loader('hide')
                    this.withdrawals = response.data.data.item
                    this.totalWithdraw = this.withdrawals.sum('amount')
                })
                .catch(error => {
                    this.$root.loader('hide')
                    this.error = error.response
                    console.log(error.response)
                })
        },
        createDate(createDate) {
            return moment(createDate).format("MMM Do YYYY")
        },
        myFilter(list, fromDate, toDate) {
            var data = [];

            if (fromDate) {
                data = list.filter((item) => {
                    var keys = []
                    keys.push(item.created_at)
                    var boolean = false
                    if (item == undefined) {
                        return false
                    }
                    var bool = keys.forEach((item) => {
                        var created_at = new moment(item)
                        var fromDate = this.from != '' ? new moment(this.from.toString()) : new moment().subtract(1, 'd')
                        var toDate = this.to != '' ? new moment(this.to.toString()).add(1, 'd') : new moment().add(1, 'd')
                        if (created_at != null && fromDate <= created_at && toDate >= created_at) {
                            boolean = true
                        }

                    })
                    return boolean

                })
            } else {
                data = list;
            }
            return data;
        },
        loadViewPOP(item) {
            this.$root.viewItem = { title: `Viewing $${item.amount}  POP for ${this.createDate(item.created_at) }`, imgUrl: item.pop }
        },
        resetViewModal() {
            this.$root.viewItem = null
        }
    }
}

</script>
