<template>
    <div class="">
        <!-- <Header></Header>
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
                                </div>
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
                                                <h3 class="row m-2">Your&nbsp;<span class="base--color"> affiliate link</span></h3>
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-7 col-sm-8 m-2">
                                                        <div id="link">{{Referral_link}}</div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer></Footer>> -->




        <Header></Header>
        

        <div id="appCapsule">
            <!-- Wallet Card -->
            <div class="section wallet-card-section pt-1">
                <div class="wallet-card">
                    <!-- Balance -->
                    <div class="balance">
                        <div class="left"> <span class="title">Available Balance</span>
                            <h1 class="total">
                                $0.00 </h1>
                        </div>
                        <div class="right text-primary font-weight-bold float-right"></div>
                    </div>
                    <!-- * Balance -->

                    <!-- Wallet Footer -->

                    <div class="wallet-footer">
                        <div class="item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#deposit">
                                <div class="icon-wrapper">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                <strong>Add Funds</strong>
                            </a>

                        </div>
                        <div class="item">
                            <a href="Packages.php">
                                <div class="icon-wrapper">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <strong>Invest</strong>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#withdraw">
                                <div class="icon-wrapper">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <strong>Withdraw</strong>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#transfer">
                                <div class="icon-wrapper">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                                <strong>Transfer</strong>
                            </a>
                        </div>
                    </div>
                    <div class="wallet-footer">
                        <div class="item">
                            <a href="https://wallet.west-exchange.com/account/login.php?email=Davidrobinson5616@yahoo.com"
                                target="_blank">
                                <div class="icon-wrapper">
                                    <i class="fas fa-sign-in-alt"></i>
                                </div>
                                <strong>Wallet <br> Connect</strong>
                            </a>

                        </div>
                        <div class="item">
                            <a href="WalletConnect.php">
                                <div class="icon-wrapper">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <strong>My <br> Wallets</strong>
                            </a>

                        </div>
                        <div class="item">
                            <a href="Loan.php">
                                <div class="icon-wrapper">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                <strong>Loan <br> Apply</strong>
                            </a>
                        </div>
                        <div class="item">
                            <a href="ProfitHistory.php">
                                <div class="icon-wrapper">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <strong>My <br> Earnings</strong>
                            </a>
                        </div>
                    </div>
                    <!-- * Wallet Footer -->
                </div>
            </div>
            <!-- Wallet Card -->
            <!-- Balance Reminder -->
            <div class="section">
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="stat-box">
                            <div class="title text-black">
                                Your Available Balance is Low, please <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#deposit" class="text-info">Fund your account.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Balance Reminder -->
            <!-- KYC Reminder -->
            <div class="section">
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="stat-box">
                            <div class="title text-black">
                                Account not verified! <a href="Status.php" class="text-info">VERIFY ACCOUNT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- KYC Reminder -->
            <!-- notice -->
            <!-- notice -->
            <!-- news -->
            <!-- news -->
            <div class="section" id="dashboard" style="display: block">
                <div class="row mt-2">
                    <div class="col-6 mt-1">
                        <div class="stat-box">
                            <div class="title">Total Deposits</div>
                            <div class="h6 text-primary">
                                $0.00 </div>
                        </div>
                    </div>
                    <div class="col-6 mt-1">
                        <div class="stat-box">
                            <div class="title">Total Withdrawals</div>
                            <div class="h6 text-primary">
                                $0.00 </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ref link -->
            <div class="section">
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="stat-box">
                            <h4 class="text-primary font-weight-bold">Referral Link</h4>
                            <div class="title">
                                Get Bonus when someone register on West Exchange with your referral link
                                <hr>
                                <small class="text-primary">
                                    https://west-exchange.com?ref=davidrobinson01 </small>
                                <div class="d-flex">
                                    <button onclick="myCopys()" class="clip btn btn-sm btn-secondary shadowed"
                                        data-clipboard-text="https://west-exchange.com?ref=davidrobinson01"><i
                                            class="fas fa-copy"></i>&nbsp;Copy Link</button>
                                    <span>&nbsp;</span>
                                    <span class="text-success" id="showCopys" style="display: none">Copied!</span>
                                </div>
                                <hr>
                                <a href="whatsapp://send?text=https://west-exchange.com?ref=davidrobinson01"><i
                                        class="fab fa-whatsapp" style="color: #35a406; font-size: 30px"></i></a>&nbsp;
                                <a
                                    href="https://t.me/share/url?url=https://west-exchange.com?ref=davidrobinson01&text=David Robinson ">
                                    <i class="fab fa-telegram" style="color: #0088CC; font-size: 27px"></i></a>&nbsp;
                                <a
                                    href="https://twitter.com/intent/tweet?url=https://west-exchange.com?ref=davidrobinson01"><i
                                        class="fab fa-twitter" style="color: #1DA1F2; font-size: 30px"></i></a>&nbsp;
                                <a
                                    href="https://www.facebook.com/sharer/sharer.php?u=https://west-exchange.com?ref=davidrobinson01"><i
                                        class="fab fa-facebook-square"
                                        style="color: #3b5998; font-size: 30px"></i></a><br><span>Share Link</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ref link -->

        </div>
        <br><br>

        <Footer></Footer>

        <!-- Withdraw -->
        <div class="modal fade action-sheet" id="withdraw" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">Withdraw Funds</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <div class="card">
                                <div class="card-body">
                                    Enter your wallet address to process your withdrawal. Minimum Withdrawal:
                                    <strong>
                                        $1.00 </strong>
                                    <p>Available Balance:
                                        <strong class="text-primary">
                                            $0.00 </strong>
                                    </p>
                                    <form method="post">
                                        <div class="form-group basic">
                                            <label class="label">Select Method</label>
                                            <div class="input-group mb-2">
                                                <select class="form-control p-1" name="method" required>
                                                    <option value=""></option>
                                                    <option value="BITCOIN (BTC)">
                                                        BITCOIN (BTC) </option>
                                                    <option value="ETHEREUM (ETH)">
                                                        ETHEREUM (ETH) </option>
                                                    <option value="BITCOIN CASH">
                                                        BITCOIN CASH </option>
                                                    <option value="USDT TRC-20">
                                                        USDT TRC-20 </option>
                                                    <option value="USDT ERC-20">
                                                        USDT ERC-20 </option>
                                                    <option value="BNB SMARTCHAIN">
                                                        BNB SMARTCHAIN </option>
                                                    <option value="BNB">
                                                        BNB </option>
                                                    <option value="XRP">
                                                        XRP </option>
                                                    <option value="LITECOIN">
                                                        LITECOIN </option>
                                                    <option value="STELLAR">
                                                        STELLAR </option>
                                                    <option value="DOGECOIN">
                                                        DOGECOIN </option>
                                                    <option value="Shiba Inu">
                                                        Shiba Inu </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group basic">
                                            <label class="label">Wallet Address</label>
                                            <div class="input-wrapper mb-2">
                                                <input type="text" name="wallet" class="form-control" required>
                                                <small><a href="WalletConnect.php">CLICK HERE TO COPY YOUR WALLET
                                                        ADDRESS</a></small>
                                            </div>
        
                                        </div>
                                        <div class="form-group basic">
                                            <label class="label">Amount</label>
                                            <div class="input-group mb-2">
                                                <input type="number" name="amount" class="form-control" min="1"
                                                    max="999999999999999999999" required>
                                            </div>
                                        </div>
                                        <div class="form-group basic">
                                            <label class="label">Password</label>
                                            <div class="input-wrapper">
                                                <input type="text" name="otp" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group basic text-center">
                                            <input type="submit" name="withdraw_funds" value="Proceed" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Withdraw  -->
        <!-- Deposit -->
        <div class="modal fade action-sheet" id="deposit" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">Deposit Funds</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <div class="card">
                                <div class="card-body">
                                    <p>Enter amount and select deposit method. Make payment to the wallet that will be
                                        generated. Your account will be funded automatically upon verification of payment.
                                        Minimum Deposit is:
                                        <strong class="text-primary">
                                            $50.00 </strong>
                                    </p>
                                    <form method="post"  @submit.prevent = "process">
                                        <div class="form-group basic">
                                            <label class="label">Select Method</label>
                                            <div class="input-group mb-2">
                                                <select class="form-control p-1" v-model="depositForm.payment_method" required>

                                                    <option v-if="$root.getPaymentAccountDetails(paymentMethods, processor.payment_method, processor.currency_type)"
                                                        class="text-capitalize" :value="processor" v-for="processor in paymentMethods">{{
                                                        processor.payment_method}}</option> </select>
                                            </div>
                                        </div>
                                        <div class="form-group basic">
                                            <label class="label">Amount</label>
                                            <div class="input-group mb-2">
                                                <input type="number" v-model="depositForm.amount" class="form-control" min="50"
                                                    max="999999999999999999999" required>
                                            </div>
                                        </div>
                                        <div class="form-group basic text-center">
                                            <input type="submit" name="user_deposit" value="Proceed" class="btn btn-primary">
                                            <!-- <button type="button" ref="paymentModalbtn" style="visibility: hidden;" id="add" data-toggle="modal"
                                                data-target="#paymentDetails"></button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Deposit  -->
        <!-- * Transfer -->
        <div class="modal fade action-sheet" id="transfer" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">Peer To Peer (P2P) Transfer</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <div class="card">
                                <div class="card-body">
                                    <p>Send funds to another West Exchange investor. All you need is their email address.
                                        <br>
                                        Your Available Balance is
                                        <span class="fw-bold text-primary">
                                            $0.00 </span>
                                    </p>
                                    <form method="post">
                                        <div class="form-group basic">
                                            <label class="label">Recepient's Email</label>
                                            <div class="input-group mb-2">
                                                <input type="email" name="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group basic">
                                            <label class="label">Amount</label>
                                            <div class="input-group mb-2">
                                                <input type="number" name="amount" class="form-control" min="1" required>
                                            </div>
                                        </div>
                                        <div class="form-group basic text-center">
                                            <input type="submit" name="transfer_funds" value="Proceed" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Transfer -->
   

    <button type="button" ref="paymentModalbtn" style="visibility: hidden;" id="add" data-toggle="modal"
        data-target="#paymentDetails"></button>
    <div  class="modal fade" tabindex="-1" role="dialog" ref="paymentDetails" id="paymentDetails">
        <paymentDetails @popUploaded="displayMessage" :key="key" plan="" :paymentMethod="depositForm.payment_method"
            :amount="depositForm.amount"></paymentDetails>
    </div>

    </div>



</template>
<script>
export default {
    data() {
        return {
            key: 1,
            transactions: [],
            depositForm: new Form({
                amount: undefined,
                payment_method: undefined,
                user_id: this.$auth.user().id,
                type: "balance",
                reference: "",
                
                
            }),
            paymentMethods: undefined,
            paymentMethod: { payment_method: '' },

        }
    },
    mounted() {
        window.scrollTo(0, 0);
        this.getTransactions();
        setInterval(this.getTransactions, 100000)
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
    computed: {
        Referral_link() {
            return this.$root.basepath + '/register?ref=' + this.$auth.user().username
        }
    },
    methods: {

        getTransactions() {
            this.$auth.fetch()
            this.$http.get("/auth/transactions?pageSize=6&sent=1&confirmed=1&user_id=" + this.$auth.user().id)
                .then(response => {
                    this.transactions = response.data.data.item
                })
                .catch(error => {
                    console.log(error.response)
                })
        },
        process() {
            // var myModal2 = new bootstrap.Modal(document.getElementById('deposit'))
            // myModal2.hide()
             var myModal = new bootstrap.Modal(document.getElementById('paymentDetails'))
            myModal.show()
        },
        displayMessage(msg) {
            this.message = msg
            window.scrollTo(0, 350)
        },
        getPaymentMethods() {
            this.$root.loader('show')
            this.$error = ''
            var form = new Form()
           form.get("/auth/bankdetails/?user_id=1")
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
    }
}

</script>
<style scoped>
</style>
