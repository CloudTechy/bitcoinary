<template>
    <div class="">

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
                            <router-link to="/dashboard/report/profit">
                                <div class="icon-wrapper">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <strong>My <br> Earnings</strong>
                            </router-link>
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
                            Get Bonus when someone register on{{' ' + $root.appName+ ' '}} with your referral link
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
        setTimeout(() => { this.$root.loader('hide') }, 2000);
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
            vm.$root.loader('show', true)
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
