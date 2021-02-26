<template>
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">Our Latest</span> <b class="base--color">Transaction</b></h2>
                        <p>Here is the log of the most recent transactions including withdraw and deposit made by our users.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <ul class="nav nav-tabs custom--style-two justify-content-center" id="transactionTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="deposit-tab" data-toggle="tab" href="#deposit" role="tab" aria-controls="deposit" aria-selected="true">Latest Deposit</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="withdraw-tab" data-toggle="tab" href="#withdraw" role="tab" aria-controls="withdraw" aria-selected="false">Latest Withdraw</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-4" id="transactionTabContent">
                        <div class="tab-pane fade show active" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">
                            <div class="table-responsive--sm">
                                <table class="table style--two">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Gateway</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for = "trx in transactions">
                                            <td data-label="Name">
                                                <div class="user">
                                                    <div class="thumb"><img :src="trx.image == null ? $root.basepath + '/images/uploads/anonymous.jpg' :  $root.basepath + '/images/uploads/' +trx.image" alt="image"></div>
                                                    <span>{{trx.owner}}</span>
                                                </div>
                                            </td>
                                            <td data-label="Date">{{trx.date}}</td>
                                            <td data-label="Amount">${{$root.normalNumeral(trx.amount)}}</td>
                                            <td data-label="Gateway">Bitcoin</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                            <div class="table-responsive--md">
                                <table class="table style--two">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Gateway</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for = "wlt in withdrawals">
                                            <td data-label="Name">
                                                <div class="user">
                                                    <div class="thumb"><img :src="wlt.image == null ? $root.basepath + '/images/uploads/anonymous.jpg' :  $root.basepath + '/images/uploads/' +wlt.image" alt="image"></div>
                                                    <span>{{wlt.owner}}</span>
                                                </div>
                                            </td>
                                            <td data-label="Date">{{wlt.date}}</td>
                                            <td data-label="Amount">$ {{$root.normalNumeral(wlt.amount)}}</td>
                                            <td data-label="Gateway">Bitcoin</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- tab-content end -->
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    data() {
        return {

        }

    },
    computed: {},
    created() {

    },
    props : ['withdrawals' , 'transactions'],
    // components: { Menu },
    methods: {},

}

</script>
<style>
</style>
