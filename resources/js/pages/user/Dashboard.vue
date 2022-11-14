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
                                ${{$root.normalNumeral($auth.user().balance)}}</h1>
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
                            <router-link to="/dashboard/plans">
                                <div class="icon-wrapper">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <strong>Invest</strong>
                            </router-link>
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
                            <router-link to="/dashboard/loan">
                                <div class="icon-wrapper">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                <strong>Loan <br> Apply</strong>
                            </router-link>
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
            <div class="section" v-if="$auth.user().balance < 50">
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
                                Account not verified! <a href="/dashboard/status" class="text-info">VERIFY ACCOUNT</a>
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
                            <div class="title">Total Earned</div>
                            <div class="h6 text-primary">
                                ${{$root.normalNumeral($auth.user().totalEarned)}} </div>
                        </div>
                    </div>
                    <div class="col-6 mt-1">
                        <div class="stat-box">
                            <div class="title">Total Withdrawals</div>
                            <div class="h6 text-primary">
                                ${{$root.normalNumeral($auth.user().totalWithdraw)}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ref link -->
            <div class="section">
                <div class="row mt-2">
                    <div class="stat-box">
                        <h4 class="text-primary font-weight-bold">Referral Link</h4>
                        <div class="title">
                            Get Bonus when someone register on West Exchange with your referral link
                            <hr>
                            <small class="text-primary">
                                {{$root.referralLink}} </small>

                            <div class="d-flex pt-1">
                                <button @click="
                                $root.alert(
                                    'success',
                                    ' ',
                                    'copied'
                                )" class="clip btn btn-sm btn-secondary shadowed" v-clipboard="$root.referralLink"><i
                                        class="fas fa-copy"></i>&nbsp;Copy Link</button>
                                <span>&nbsp;</span>
                            </div>
                            <hr>
                            <a :href="'whatsapp://send?text=' + $root.referralLink "><i class="fab fa-whatsapp"
                                    style="color: #35a406; font-size: 30px"></i></a>&nbsp;
                            <a
                                :href="'https://t.me/share/url?url='+ $root.referralLink + '&text=' + $auth.user().names">
                                <i class="fab fa-telegram" style="color: #0088CC; font-size: 27px"></i></a>&nbsp;
                            <a :href="'https://twitter.com/intent/tweet?url=' + $root.referralLink "><i
                                    class="fab fa-twitter" style="color: #1DA1F2; font-size: 30px"></i></a>&nbsp;
                            <a :href="'https://www.facebook.com/sharer/sharer.php?u='+ $root.referralLink"><i
                                    class="fab fa-facebook-square"
                                    style="color: #3b5998; font-size: 30px"></i></a><br><span>Share
                                Link</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ref link -->

        </div>
        <br><br>

        <Footer @popUploaded="displayMessage"></Footer>


    </div>


</template>
<script>
export default {
    data() {
        return {
            key: 0,


            message: undefined,



        }
    },
    watch: {


    },
    mounted() {
        window.scrollTo(0, 0);
        this.$root.dashboard_header_page_title = undefined
        setTimeout(() => { this.$root.loader('hide') }, 1000);
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

        // this.getPaymentMethods()
    },
    beforeRouteEnter(to, from, next) {
        next(vm => {
            vm.$root.loader('show')
        })
    },
    methods: {

        displayMessage(msg) {
            this.$root.alert('success', ' ', msg.message)
            setTimeout(() => { this.$root.scrollUp() }, 1000);
        },

    }
}

</script>
<style scoped>

</style>
