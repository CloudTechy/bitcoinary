<template>
<header>
    
    <div class="appHeader bg-primary text-light">
        <div class="left"> <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel"
                style="margin-right:10px"> <i class="fas fa-bars fa-2x"></i> </a>
            <div class="top-bar-item top-bar-item-full" id="id_100">
                <div id="google_translate_element"></div>
            </div>
        </div>
        <div class="pageTitle">
            <span v-if = "$root.dashboard_header_page_title">
                {{$root.dashboard_header_page_title}}
            </span>
            <span v-else>
                <a href="/"><img :src="$root.basepath + '/assets/images/home/logo.png'" alt="logo" class="logo"></a>
            </span>
          
                </div>
        <div class="right">
            <a href="/dashboard/Notifications" class="headerButton"> <i class="fas fa-bell"></i> <span
                    class="badge badge-danger">0</span>
            </a> <a href="/dashboard/profile" class="headerButton"> <img :src="$root.basepath + '/assets/images/home/user-default.png'"
                   alt="img" class="imaged w32"
                    style="width:32px;height:32px;border-radius:50%"> </a>
        </div>
    </div>
    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- profile box -->
                    <div class="profileBox pt-2 pb-2">
                        <div class="image-wrapper"> <img  :src="$root.basepath + '/assets/images/home/user-default.png'"
                                alt="img" class="imaged  w36" style="width:36px;height:36px;border-radius:50%"> </div>
                        <div class="in">
                            <strong class="text-capitalize">
                                {{$auth.user().names}} </strong>
                            <div class="text-muted">
                                {{$auth.user().email}} </div>
                        </div>
                    </div>
                    <!-- * profile box -->
                    <!-- balance -->
                    <div class="sidebar-balance">
                        <div class="listview-title">Total Balance</div>
                        <div class="in">
                            <h2 class="amount">
                                ${{$root.normalNumeral($auth.user().balance)}} </h2>
                        </div>
                    </div>
                    <!-- * balance -->
    
                    <!-- action group -->
                    <div class="action-group">
                        <a href="/dashboard/profile" class="action-button">
                            <div class="in">
                                <div class="iconbox">
                                    <i class="fas fa-user"></i>
                                </div>
                                My Profile
                            </div>
                        </a>
                        <a href="/dashboard/referral" class="action-button">
                            <div class="in">
                                <div class="iconbox">
                                    <i class="fas fa-users"></i>
                                </div>
                                My Downlines
                            </div>
                        </a>
                        <a href="/dashboard/profile#Password" class="action-button">
                            <div class="in">
                                <div class="iconbox">
                                    <i class="fas fa-user-lock"></i>
                                </div>
                                Change Password
                            </div>
                        </a>
    
                        <a href="/dashboard/status" class="action-button">
                            <div class="in">
                                <div class="iconbox">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                Account Status
                            </div>
                        </a>
                    </div>
                    <!-- * action group -->
                    <!-- menu -->
                    <div class="listview-title mt-1">Transactions</div>
                    <ul class="listview flush transparent image-listview">
                        <li>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#deposit" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                <div class="in"> Add Funds</div>
                            </a>
                        </li>
    
                        <li>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#transfer" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                                <div class="in"> Transfer</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#withdraw" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <div class="in"> Withdraw </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://wallet.west-exchange.com/account/login.php?email=Davidrobinson5616@yahoo.com"
                                target="_blank" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div class="in"> Wallet Connect </div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/loan" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                            <div class="in"> Credit Advance/Loan</div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/report/transaction" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-history"></i>
                                </div>
                                <div class="in"> Transaction History </div>
                            </a>
                        </li>
                    </ul>
                    <!-- * menu -->
    
                    <!-- menu -->
                    <div class="listview-title mt-1">Investment</div>
                    <ul class="listview flush transparent image-listview">
                        <li>
                            <router-link to = "/dashboard/plans" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="in"> Investment Packages </div>
                            </router-link>
                        </li>
                        <li>
                            <a href="/dashboard/promo" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-smile"></i>
                                </div>
                                <div class="in"> Bonus Packages</div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/report/deposit" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-history"></i>
                                </div>
                                <div class="in"> Investment History </div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/report/earning" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-funnel-dollar"></i>
                                </div>
                                <div class="in"> Profit History </div>
                            </a>
                        </li>
                    </ul>
                    <!-- * menu -->
                    <!-- menu -->
                    <div class="listview-title mt-1">Support</div>
                    <ul class="listview flush transparent image-listview">
                        <li>
                            <a href="/dashboard/notifications" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="in"> Notifications
                                    <span class="badge badge-primary">
                                        0 </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/support" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-comment-dots"></i>
                                </div>
                                <div class="in"> Support Ticket</div>
                            </a>
                        </li>
    
                    </ul>
                    <!-- * menu -->
    
                    <!-- menu -->
                    <div class="listview-title mt-1">Session</div>
                    <ul class="listview flush transparent image-listview">
    
                        <li @click.prevent = "$auth.logout()">
                            <a href ="" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fa fa-sign-out-alt"></i>
                                </div>
                                <div class="in"> Sign Out </div>
                            </a>
                        </li>
                    </ul>
                    <!-- * menu -->
                    <div class="listview-title mt-1">&copy;
                        {{$root.appName}} </div>
    
                </div>
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->

    <!-- transfer -->

    <div class="modal fade action-sheet" id="transfer"  tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Peer To Peer (P2P) Transfer</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content pt-0">
                        <div class="card">
                            <div class="card-body">
                                <p>Send funds to another West Exchange investor. All you need is their username.
                                    <br>
                                    Your Available Balance is
                                    <span class="fw-bold text-primary">
                                        {{$root.numeral($auth.user().balance)}} </span>
                                </p>
                                <form method="post" @submit.prevent="transfer">
                                    <div ref="messageTransferBox" v-if="error || transferForm.message"
                                        style="position:fixed;top:0px;left:0px" class=" form-group p-2 ">
                                        <div v-if="error">
                                            <div class="alert alert-danger" v-if="typeof error == 'object'">
                                                <p v-for="err in error">{{err}}</p>
                                            </div>
                                            <div v-else class="alert alert-danger">
                                                <p>{{error}}</p>
                                            </div>
                                        </div>
                                        <div class="alert alert-success" v-if="transferForm.message">
                                            <p>{{transferForm.message}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <label class="label">Recepient's username</label>
                                        <div class="input-group mb-2">
                                            <input type="text" v-model="transferForm.receiver_username" class="form-control"
                                                required>
                                        </div>
                                        <p v-if="errors.receiver_username" v-for="error in errors.receiver_username"
                                            class="text-danger m-0 p-1 pt-0 small">
                                            {{ error }}
                                        </p>
                                    </div>
                                    <div class="form-group basic">
                                        <label class="label">Amount</label>
                                        <div class="input-group mb-2">
                                            <input type="number" v-model="transferForm.amount" class="form-control" min="1"
                                                :max="$auth.user().balance" required>
                                        </div>
                                        <p v-if="errors.amount" v-for="error in errors.amount"
                                            class="text-danger m-0 p-1 pt-0 small">
                                            {{ error }}
                                        </p>
                                    </div>
                                    <div class="form-group basic text-center">
                                        <button ref="submitTransferForm" type="submit" class="btn btn-primary">Transfer
                                        </button>
                                        <button type="button" ref="closeTransferForm" style="visibility: hidden;" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</template>
<script>
import moment from "moment";

export default {
    data() {
        return {
            transferForm: new Form({
                receiver_username: undefined,
                amount: undefined,
                sender_id: this.$auth.user().id,
                message: undefined
            }),
            error: undefined,
            errors: {},
};
    },
    watch: {
        error() {
            setTimeout(() => { this.error = '' }, 15000);
        },
        errors() {
            setTimeout(() => { this.errors = '' }, 15000);
        }
    },
    beforeCreate() {
        var css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/bootstrap.min.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);

        css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/font-awesome.min.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);


        css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/datatables.min.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);

        css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/all.min.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);



        css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/custom.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);

        css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/dashboard/style.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);

        css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/others.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);

        var js = document.createElement("script");
        js.setAttribute(
            "src",
            "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
        );
        js.setAttribute("async", true);
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            "https://www.google.com/recaptcha/api.js?render=6LfVOFIcAAAAAJNh1Oa3oAU3PDrLxwNJhWonFUtA"
        );
        js.setAttribute("async", true);
        document.body.appendChild(js);


    },
    mounted() {
        var js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/splide.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/dashboard/datatables.min.js"
        );
        document.body.appendChild(js);



        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/fontawesome.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/all.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/dashboard.js"
        );
        document.body.appendChild(js);
    },
    computed: {
        getIp() {
            return this.$auth.user().ip != undefined
                ? this.$auth.user().ip
                : this.$root.ip;
        },
        time() {
            return moment(this.$auth.user().created_at).format("MMM Do YYYY");
        },
    },
    methods: {
        transfer() {
            this.$root.loader('show')
            this.processing(true, 'submitTransferForm', 'Requesting...', '')
            this.transferForm.message = ""
            this.error = ''
            if (this.transferForm.amount > this.$auth.user().balance) {
                this.transferForm.amount = this.$auth.user().balance
            }
            this.transferForm.post("/auth/transfer")
                .then(response => {
                    this.$root.loader('hide')
                    this.processing(false, 'submitTransferForm', 'Requesting...', 'Tranfer')
                    this.$root.alert('success', ' ', response.data.message)
                    // this.transferForm.message = response.data.message
                    this.$root.scrollToTop(0, 250)
                    this.transferForm.amount = ''
                    this.$auth.fetch()
                })
                .catch(error => {
                    this.$root.loader('hide')
                    this.processing(false, 'submitTransferForm', 'Requesting...', 'Tranfer')
                    this.$root.scrollToTop(0, 250)
                    console.log(error.response.status, error.response.data.message)
                    if (error.response.status == 422) {
                        this.errors = error.response.data.error
                    }
                    this.$root.alert('error', ' ', error.response.data.message)
                    // console.log(error, error.response)
                })

            setTimeout(() => { this.transferForm.message = ''; this.error = ''; this.errors = ''; this.$refs.closeTransferForm.click(); this.transferForm.reset();  }, 2000);

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
},
};
</script>
<style scoped>
.modal-header {
    display: block;

}

.modal-content {
    box-shadow: 1px 1px 20px !important;
}
</style>
