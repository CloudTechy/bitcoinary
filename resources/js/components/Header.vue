<template>
    <!-- <header class="header animated fadeInDown menu-fixed">
        <div class="header__bottom">
            <div class="container">
                <nav class="navbar navbar-expand-xl p-0 align-items-center">
                    <a class="site-logo site-title" href="/"
                        ><img
                            :src="$root.basepath + '/assets/images/logo2.png'"
                            alt="site-logo"
                    /></a>
                    <div class="account-menu mobile-acc-menu dropdown">
                        <a href="#" type="button" data-toggle="dropdown">
                            <div class="icon">
                                <i class="las la-user"></i>
                            </div>
                        </a>
                        <ul v-if="$auth.check()" class="dropdown-menu">
                            <div
                                class="font-weight-bold text-center text-capitalize p-1"
                            >
                                Hi {{ $auth.user().username }}
                            </div>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item pt-2">
                                <a tabindex="-1" href="/dashboard"
                                    >Goto Dashboard</a
                                >
                            </li>
                            <li class="dropdown-divider"></li>
                            <li @click="$auth.logout()" class="dropdown-item">
                                <a tabindex="-1" href="">Sign out</a>
                            </li>
                        </ul>
                        <ul v-else class="dropdown-menu">
                            <div class="text-center font-weight-bold p-1">
                                Hello Guest
                            </div>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item pt-2">
                                <a tabindex="-1" href="/login">Login</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <a tabindex="-1" href="/register">Register</a>
                            </li>
                        </ul>
                    </div>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="menu-toggle"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <ul class="navbar-nav main-menu m-auto">
                            <li>
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li>
                                <a href="/dashboard/deposit">Make deposit</a>
                            </li>
                            <li>
                                <a href="/dashboard/withdraw">Withdraw</a>
                            </li>
                            <li>
                                <a href="/dashboard/plans">Active plans</a>
                            </li>
                            <li>
                                <a href="/dashboard/withdrawal-report"
                                    >Withdrawal history</a
                                >
                            </li>
                            <li><a href="/dashboard/referral">Referrals</a></li>
                            <li class="menu_has_children">
                                <a href="/dashboard/settings"
                                    >Account Setting</a
                                >
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/dashboard/settings/#profile"
                                            >Profile setup</a
                                        >
                                    </li>
                                    <li>
                                        <a href="/dashboard/settings/#payment"
                                            >Payment setup</a
                                        >
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="nav-right">
                            <div class="account-menu ml-3 dropdown">
                                <a
                                    href="#"
                                    type="button"
                                    data-toggle="dropdown"
                                >
                                    <div class="icon">
                                        <i class="las la-user"></i>
                                    </div>
                                </a>
                                <ul v-if="$auth.check()" class="dropdown-menu">
                                    <div
                                        class="font-weight-bold text-center text-capitalize p-1"
                                    >
                                        Hi {{ $auth.user().username }}
                                    </div>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item pt-2">
                                        <a tabindex="-1" href="/dashboard"
                                            >Goto Dashboard</a
                                        >
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li
                                        @click="$auth.logout()"
                                        class="dropdown-item"
                                    >
                                        <a tabindex="-1" href="">Sign out</a>
                                    </li>
                                </ul>
                                <ul v-else class="dropdown-menu">
                                    <div
                                        class="text-center font-weight-bold p-1"
                                    >
                                        Hello Guest
                                    </div>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item pt-2">
                                        <a tabindex="-1" href="/login">Login</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item">
                                        <a tabindex="-1" href="/register"
                                            >Register</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div
                                id="google_translate_element"
                                class="w-auto m-1"
                            ></div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
      
    </header> -->

<header>
    <div class="appHeader bg-primary text-light">
        <div class="left"> <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel"
                style="margin-right:10px"> <i class="fas fa-bars fa-2x"></i> </a>
            <div class="top-bar-item top-bar-item-full" id="id_100">
                <div id="google_translate_element2"></div>
    
            </div>
        </div>
        <div class="pageTitle"><a href="/"><img :src="$root.basepath + '/assets/images/home/logo.png'" alt="logo"
                    class="logo"></a></div>
        <div class="right">
            <a href="Notifications.php" class="headerButton"> <i class="fas fa-bell"></i> <span
                    class="badge badge-danger">0</span>
            </a> <a href="Profile.php" class="headerButton"> <img
                    src="https://west-exchange.com/account/upload/user-default.png" alt="img" class="imaged w32"
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
                        <div class="image-wrapper"> <img src="https://west-exchange.com/account/upload/user-default.png"
                                alt="img" class="imaged  w36" style="width:36px;height:36px;border-radius:50%"> </div>
                        <div class="in">
                            <strong>
                                David Robinson </strong>
                            <div class="text-muted">
                                Davidrobinson5616@yahoo.com </div>
                        </div>
                    </div>
                    <!-- * profile box -->
                    <!-- balance -->
                    <div class="sidebar-balance">
                        <div class="listview-title">Total Balance</div>
                        <div class="in">
                            <h2 class="amount">
                                $0.00 </h2>
                        </div>
                    </div>
                    <!-- * balance -->
    
                    <!-- action group -->
                    <div class="action-group">
                        <a href="Profile.php" class="action-button">
                            <div class="in">
                                <div class="iconbox">
                                    <i class="fas fa-user"></i>
                                </div>
                                My Profile
                            </div>
                        </a>
                        <a href="Downlines.php" class="action-button">
                            <div class="in">
                                <div class="iconbox">
                                    <i class="fas fa-users"></i>
                                </div>
                                My Downlines
                            </div>
                        </a>
                        <a href="Profile.php#Password" class="action-button">
                            <div class="in">
                                <div class="iconbox">
                                    <i class="fas fa-user-lock"></i>
                                </div>
                                Change Password
                            </div>
                        </a>
    
                        <a href="Status.php" class="action-button">
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
                            <a href="Loan.php" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                <div class="in"> Credit Advance/Loan</div>
                            </a>
                        </li>
                        <li>
                            <a href="TransactionHistory.php" class="item">
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
                            <!-- <a href="Packages.php" >
                                
                            </a> -->
                        </li>
                        <li>
                            <a href="Promo.php" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-smile"></i>
                                </div>
                                <div class="in"> Bonus Packages</div>
                            </a>
                        </li>
                        <li>
                            <a href="InvestmentHistory.php" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-history"></i>
                                </div>
                                <div class="in"> Investment History </div>
                            </a>
                        </li>
                        <li>
                            <a href="ProfitHistory.php" class="item">
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
                            <a href="Notifications.php" class="item">
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
                            <a href="Support.php" class="item">
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
                        West Exchange </div>
    
                </div>
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->
</header>
</template>
<script>
import moment from "moment";

export default {
    data() {
        return {};
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
    methods: {},
};
</script>
<style scoped="">

</style>
