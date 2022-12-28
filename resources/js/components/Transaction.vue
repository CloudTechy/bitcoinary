<template>
    <section data-bgcolor="var(--secondary_color)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 style="color: #fff">
                        {{ " " + $root.appName + " " }} Transactions
                    </h2>
                    <div class="small-border" style="border-color: #ffcc29"></div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="iq-cart_total heading-left">
                        <h4 style="color: #fff" class="iq-mb-30 title iq-tw-5">
                            Recent Deposits
                        </h4>
                        <table class="table table-bordered">
                            <tbody>
                                <tr class="iq-cart-st">
                                    <td class="text-warning" style="font-weight: bold">
                                        Member Name
                                    </td>
                                    <td class="text-warning" style="font-weight: bold">
                                        Date
                                    </td>
                                    <td class="text-warning" style="font-weight: bold">
                                        <span class="amount">Amount</span>
                                    </td>
                                </tr>
                                <tr v-for="trx in buildTransactions" class="iq-shipping">
                                    <td style="color: #fff">
                                        <img src="assets/images/star.png" width="15px" alt="" />
                                        <span class="text-capitalize">{{trx.owner}}</span>
                                    </td>
                                    <td style="color: #fff">
                                        {{trx.date}}
                                    </td>
                                    <td style="color: #30c731">
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        ${{ $root.normalNumeralNoUnit(trx.amount) }}
                                    </td>
                                </tr>
                            </tbody>
                          
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="iq-cart_total heading-left">
                        <h4 style="color: #fff" class="iq-mb-30 title iq-tw-5">
                            Recent Withdrawals
                        </h4>
                        <table class="table table-bordered">
                            <tbody>
                                <tr class="iq-cart-st">
                                    <td class="text-warning" style="font-weight: bold">
                                        Member Name
                                    </td>
                                    <td class="text-warning" style="font-weight: bold">
                                        Date
                                    </td>
                                    <td class="text-warning" style="font-weight: bold">
                                        <span class="amount">Amount </span>
                                    </td>
                                </tr>
                                <tr v-for="wlt in buildWithdrawals" class="iq-shipping">
                                    <td style="color: #fff">
                                        <img src="assets/images/star.png" width="15px" alt="" />
                                        <span class="text-capitalize">{{wlt.owner}}</span>
                                    </td>
                                    <td style="color: #fff">
                                        {{ wlt.date }}
                                    </td>
                                    <td style="color: #30c731">
                                        <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        ${{ $root.normalNumeralNoUnit(wlt.amount) }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</template>
<script>
import moment from 'moment'
export default {
    data() {
        return {
            date_format: " Do MMM, YYYY",
        }

    },
    computed: {
        buildTransactions() {
            var data = this.transactions
            data.forEach((item) => {
                    item.date = moment(item.updated_at).format(this.date_format)
                });           
            var size = data.length
            var builtTransactions  = []
            if (data.length == 1) {
                // No transaction
                if (localStorage.getItem(builtTransactions)) {
                    builtTransactions =  JSON.parse(localStorage.getItem(builtTransactions))
                }
                else {
                    var first_item = data.shift()
                    builtTransactions =  this.generateTransactions(10, first_item)
                }
                
            }
            else {
                builtTransactions = this.generateTransactions(10 - size, data[0]).concat(data);
            }
            localStorage.removeItem(builtTransactions);
            localStorage.setItem(
                        "builtTransactions",
                        JSON.stringify(builtTransactions)
            );
                    
            return builtTransactions
        },
        buildWithdrawals() {
            var data = this.withdrawals 
            data.forEach((item) => {
                    item.date = moment(item.updated_at).format(this.date_format)
                });           
            var size = data.length
            var builtWithdrawals  = []
            if (data.length == 1) {
                // No transaction
                if (localStorage.getItem(builtWithdrawals)) {
                    builtWithdrawals =  JSON.parse(localStorage.getItem(builtWithdrawals))
                }
                else {
                    var first_item = data.shift()
                    builtWithdrawals =  this.generateTransactions(10, first_item)
                }
                
            }
            else {
                builtWithdrawals = this.generateTransactions(10 - size, data[0]).concat(data);
            }
            localStorage.removeItem(builtWithdrawals);
            localStorage.setItem(
                        "builtWithdrawals",
                        JSON.stringify(builtWithdrawals)
            );
                    
            return builtWithdrawals
        }
    },
    created() {
        setInterval(() => {
            if (this.transactions.length == 10) {
                var last_transaction = this.transactions[0]
                if (moment().diff(moment(last_transaction.updated_at), 'minutes') > 720) {
                   this.$emit('refreshTransactions') 
                }
            }
            if (this.withdrawals.length == 10) {
                var last_withdrawals = this.withdrawals[0]
                if (moment().diff(moment(last_withdrawals.updated_at), 'minutes') > 720) {
                   this.$emit('refreshWithdrawals') 
                }
            }
            // this.$emit('refresh')
        }, 5000)

    },
    props: ['withdrawals', 'transactions'],
    // components: { Menu },
    methods: {
        getDate(to) {
            return moment().to(moment(to))
        },
        getRndInteger(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        },
        generateTransactions(size, first_item) {
            let data = []
            
            
            for (let i = size - 1; i >= 0; i--) {
                var last_date = data.length > 0 ? data[i + 1].correct_date : first_item?first_item.updated_at:moment().subtract(48, 'h')
                var difference = moment().diff(last_date, 'minutes') - i * 2
                var RandomTens = Math.floor(Math.random() * difference);
                var correct_date = moment(last_date).add(RandomTens, 'm')
                var item = {}
                item.owner = this.$faker().name.findName() 
                item.image = "undefined.jpg"
                item.amount = this.getRndInteger(100, 250000);
                item.correct_date = moment(correct_date)
                item.date = moment(correct_date).format(this.date_format)
                data[i] = item
            }
            return data
        }
    },

}

</script>
<style>

</style>
