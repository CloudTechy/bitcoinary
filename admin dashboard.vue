<!-- <template>
    <div class="m-0 p-0">
        <AdminDashboardHeader></AdminDashboardHeader>
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
                            <AdminDashboardSidebar></AdminDashboardSidebar>
                            <div class="columns col-xl-9 p-0 pl-lg-2 col-lg-9 col-12 main-acc">
                                <div class="acc-block overview">
                                    <div class="acc-heading clearfix">
                                        <h2>Account Overview</h2>
                                        <ul class="breadcrumbs">
                                            <li>Main</li>
                                            <li><img :src="$root.basepath + '/img/right-b.png'"></li>
                                            <li class="active">Overview</li>
                                        </ul>
                                    </div>
                                    <div class="acc-body ">
                                        <div class="stat-box row ">
                                            <div class="s-box col-sm-4 col-12 p-2">
                                                <img :src="$root.basepath + '/img/box-1.png'">
                                                <h4>Account Income</h4>
                                                <span>{{$root.numeral(users.sum('balance'))}}</span>
                                            </div>
                                            <div class="s-box col-sm-4 col-12 p-2">
                                                <img :src="$root.basepath + '/img/box-2.png'">
                                                <h4>Active Trading</h4>
                                                <span>{{$root.numeral(users.sum('totalActiveTransaction'))}}</span>
                                            </div>
                                            <div class="s-box col-sm-4 col-12 p-2">
                                                <img :src="$root.basepath + '/img/box-3.png'">
                                                <h4>Total Giveaway</h4>
                                                <span>{{$root.numeral(users.sum('totalEarned'))}}</span>
                                            </div>
                                        </div>
                                        <h3 class="acc-sub-heading'">Account Statistics</h3>
                                        <div class="simple-stats">
                                            <ul class="clearfix">
                                                <li>
                                                    <img :src="$root.basepath + '/img/stat-deposit.png'">
                                                    <p>Total Deposits: <span>{{$root.numeral(users.sum('totalDeposit'))}}</span></p>
                                                </li>
                                                <li>
                                                    <img :src="$root.basepath + '/img/stat-withdraw.png'">
                                                    <p>Total Withdrawals: <span>{{$root.numeral(users.sum('totalWithdraw'))}}</span></p>
                                                </li>
                                                <li>
                                                    <img :src="$root.basepath + '/img/stat-last-deposit.png'">
                                                    <p>Last Deposit: <span>{{$root.numeral(users.sum('lastDeposit'))}}</span></p>
                                                </li>
                                                <li>
                                                    <img :src="$root.basepath + '/img/stat-last-withdrawal.png'">
                                                    <p>Last Withdrawal: <span>{{$root.numeral(users.sum('lastWithdraw'))}}</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                 <div class="acc-block affiliate-link">
                                    <div class="acc-heading clearfix">
                                        <h2>Admin Affiliate Link</h2>
                                    </div>
                                    <div class="acc-body p-0 clearfix">
                                        <div class="aff-link-1 clearfix">
                                            <a class="aff-link p-0" id="foo" :href="Referral_link">{{Referral_link}}</a>
                                            <button v-clipboard="Referral_link" class="btn btn-default small" style="float:right;" data-clipboard-target="#foo">Copy</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    data() {
        return {
            error: null,
            message: null,
            users: []
        }
    },
    mounted() {

    },
    computed: {
        user() {
            return this.$auth.user()
        },
        Referral_link() {
            return this.$root.basepath + '/register?ref=' + this.user.username
        }
    },
    beforeCreate: function () {
    if (this.$auth.user().isAdmin == false) {this.$auth.logout()}
    },
    created() {
        if (localStorage.users) {
            this.users = JSON.parse(localStorage.users)
        }
        this.getUsers()

    },
    methods: {
        getUsers() {
            var form = new Form
            form.get("/auth/users")
                .then(response => {
                    this.users = response.data.data.item
                    localStorage.users = JSON.stringify(this.users)
                })
                .catch(error => {
                    console.log(error)
                })
        },

    }
}

</script> -->
<template>
    <div>
        <!-- BEGIN: Header-->
        <AdminDashboardHeader></AdminDashboardHeader>
        <!-- END: Header-->
        <!-- BEGIN: Main Menu-->
        <AdminDashboardSidebar></AdminDashboardSidebar>
        <!-- END: Main Menu-->
        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-body">
                    <section id="dashboard-analytics">
                        <!-- <div class="row match-height">
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header  flex-column align-items-start pb-0">
                                        <div class="align-items-center d-flex flex-row justify-content-between" style=" width: 100%;">
                                            <div class="avatar bg-light-primary p-50 m-0">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users font-medium-5">
                                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="9" cy="7" r="4"></circle>
                                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div><span class="text-success"><i class="fas fa-fw fa-long-arrow-alt-up"></i> 1.1%</span></div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"><span class="amount"> 49,595.34 <span class="currency">USD</span></span></h2>
                                        <p class="card-text">Balance in Account</p>
                                        <div class="d-flex flex-row justify-content-between invest-data-amount g-2" style="width: 100% ">
                                            <div class="invest-data-history">
                                                <div class="card-text">This Month</div>
                                                <div class="amount font-weight-bold">2,940.59 <span class="currency currency-usd">USD</span></div>
                                            </div>
                                            <div class="invest-data-history">
                                                <div class="card-text">This Week</div>
                                                <div class="amount font-weight-bold">1,259.28 <span class="currency currency-usd">USD</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="v-chart" style="min-height: 100px;">
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 392px; height: 237px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="card">
                                    <div class="card-header  flex-column align-items-start pb-0">
                                        <div class="align-items-center d-flex flex-row justify-content-between" style=" width: 100%;">
                                            <div class="avatar bg-light-primary p-50 m-0">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users font-medium-5">
                                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="9" cy="7" r="4"></circle>
                                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div><span class="text-success">1.1%</span></div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"><span class="amount"> 49,595.34 <span class="currency">USD</span></span></h2>
                                        <p class="card-text">Total Deposit</p>
                                        <div class="d-flex flex-row justify-content-between invest-data-amount g-2" style="width: 100% ">
                                            <div class="invest-data-history">
                                                <div class="card-text">This Month</div>
                                                <div class="amount font-weight-bold">2,940.59 <span class="currency currency-usd">USD</span></div>
                                            </div>
                                            <div class="invest-data-history">
                                                <div class="card-text">This Week</div>
                                                <div class="amount font-weight-bold">1,259.28 <span class="currency currency-usd">USD</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="gained-chart" style="min-height: 100px;">
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 392px; height: 237px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="align-items-center d-flex flex-row justify-content-between" style=" width: 100%;">
                                            <div class="avatar bg-light-warning p-50 m-0">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package font-medium-5">
                                                        <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div><span class="text-success"><i class="fas fa-fw fa-long-arrow-alt-up"></i> 1.1%</span></div>
                                        </div>
                                        <h2 class="fw-bolder mt-1"><span class="amount"> 49,595.34 <span class="currency">USD</span></span></h2>
                                        <p class="card-text">Total Withdrawal</p>
                                        <div class="d-flex flex-row justify-content-between invest-data-amount g-2" style="width: 100% ">
                                            <div class="invest-data-history">
                                                <div class="card-text">This Month</div>
                                                <div class="amount font-weight-bold">2,940.59 <span class="currency currency-usd">USD</span></div>
                                            </div>
                                            <div class="invest-data-history">
                                                <div class="card-text">This Week</div>
                                                <div class="amount font-weight-bold">1,259.28 <span class="currency currency-usd">USD</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="order-chart" style="min-height: 100px;">
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 392px; height: 237px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Investment Overview</h4>
                                        <div class="card-subtitle mb-2">The investment overview of your platform.</div>
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-left flex-column" role="tablist" style="height: 77px;">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="baseVerticalLeft-tab1" data-bs-toggle="tab" aria-controls="tabVerticalLeft1" href="#tabVerticalLeft1" role="tab" aria-selected="true">Overview</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft-tab2" data-bs-toggle="tab" aria-controls="tabVerticalLeft2" href="#tabVerticalLeft2" role="tab" aria-selected="false">This Year</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft-tab3" data-bs-toggle="tab" aria-controls="tabVerticalLeft3" href="#tabVerticalLeft3" role="tab" aria-selected="false">All Time</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane  active" id="tabVerticalLeft1" role="tabpanel" aria-labelledby="baseVerticalLeft-tab1">
                                                    <div class="invest-ov pt-0 gy-2">
                                                        <div class="subtitle">Currently Active Investment</div>
                                                        <div class="flex-column flex-lg-row invest-ov-details justify-content-between">
                                                            <div class="invest-ov-info mb-1">
                                                                <div class="amount">49,395.395 <span class="currency currency-usd">USD</span></div>
                                                                <div class="title">Amount</div>
                                                            </div>
                                                            <div class="invest-ov-stats">
                                                                <div><span class="amount">56 </span><span class="change up text-danger"><i class="fas fa-fw fa-long-arrow-alt-down"></i>1.93%</span></div>
                                                                <div class="title">Plans</div>
                                                            </div>
                                                        </div>
                                                        <div class="invest-ov-details">
                                                            <div class="invest-ov-info">
                                                                <div class="amount">49,395.395 <span class="currency currency-usd">USD</span></div>
                                                                <div class="title">Paid Profit</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="invest-ov gy-2">
                                                        <div class="subtitle">Investment in this Month</div>
                                                        <div class="flex-column flex-lg-row invest-ov-details justify-content-between">
                                                            <div class="invest-ov-info mb-1">
                                                                <div class="amount">49,395.395 <span class="currency currency-usd">USD</span></div>
                                                                <div class="title">Amount</div>
                                                            </div>
                                                            <div class="invest-ov-stats">
                                                                <div><span class="amount">23 </span><span class="change down text-success"><i class="fas fa-fw fa-long-arrow-alt-up"></i>1.93%</span></div>
                                                                <div class="title">Plans</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane " id="tabVerticalLeft2" role="tabpanel" aria-labelledby="baseVerticalLeft-tab2">
                                                    <div class="invest-ov pt-0 gy-2">
                                                        <div class="subtitle">Currently Active Investment</div>
                                                        <div class="flex-column flex-lg-row invest-ov-details justify-content-between">
                                                            <div class="invest-ov-info mb-1">
                                                                <div class="amount">49,395.395 <span class="currency currency-usd">USD</span></div>
                                                                <div class="title">Amount</div>
                                                            </div>
                                                            <div class="invest-ov-stats">
                                                                <div><span class="amount">56 </span><span class="change up text-danger"><i class="fas fa-fw fa-long-arrow-alt-down"></i>1.93%</span></div>
                                                                <div class="title">Plans</div>
                                                            </div>
                                                        </div>
                                                        <div class="invest-ov-details">
                                                            <div class="invest-ov-info">
                                                                <div class="amount">49,395.395 <span class="currency currency-usd">USD</span></div>
                                                                <div class="title">Paid Profit</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="invest-ov gy-2">
                                                        <div class="subtitle">Investment in this Month</div>
                                                        <div class="flex-column flex-lg-row invest-ov-details justify-content-between">
                                                            <div class="invest-ov-info mb-1">
                                                                <div class="amount">49,395.395 <span class="currency currency-usd">USD</span></div>
                                                                <div class="title">Amount</div>
                                                            </div>
                                                            <div class="invest-ov-stats">
                                                                <div><span class="amount">23 </span><span class="change down text-success"><i class="fas fa-fw fa-long-arrow-alt-up"></i>1.93%</span></div>
                                                                <div class="title">Plans</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalLeft3" role="tabpanel" aria-labelledby="baseVerticalLeft-tab3">
                                                    <div class="invest-ov pt-0 gy-2">
                                                        <div class="subtitle">Currently Active Investment</div>
                                                        <div class="flex-column flex-lg-row invest-ov-details justify-content-between">
                                                            <div class="invest-ov-info mb-1">
                                                                <div class="amount">49,395.395 <span class="currency currency-usd">USD</span></div>
                                                                <div class="title">Amount</div>
                                                            </div>
                                                            <div class="invest-ov-stats">
                                                                <div><span class="amount">56 </span><span class="change up text-danger"><i class="fas fa-fw fa-long-arrow-alt-down"></i>1.93%</span></div>
                                                                <div class="title">Plans</div>
                                                            </div>
                                                        </div>
                                                        <div class="invest-ov-details">
                                                            <div class="invest-ov-info">
                                                                <div class="amount">49,395.395 <span class="currency currency-usd">USD</span></div>
                                                                <div class="title">Paid Profit</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="invest-ov gy-2">
                                                        <div class="subtitle">Investment in this Month</div>
                                                        <div class="flex-column flex-lg-row invest-ov-details justify-content-between">
                                                            <div class="invest-ov-info mb-1">
                                                                <div class="amount">49,395.395 <span class="currency currency-usd">USD</span></div>
                                                                <div class="title">Amount</div>
                                                            </div>
                                                            <div class="invest-ov-stats">
                                                                <div><span class="amount">23 </span><span class="change down text-success"><i class="fas fa-fw fa-long-arrow-alt-up"></i>1.93%</span></div>
                                                                <div class="title">Plans</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card">
                                    <div class="card-header pb-0 d-flex justify-content-between align-items-end">
                                        <h4 class="card-title align-self-start">Investors</h4>
                                        <div class="dropdown chart-dropdown align-self-start">
                                            <a class="btn btn-link border-0 dropdown-toggle px-50 waves-effect waves-light" type="link" id="dropdownIte4pix" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownIte4pix" data-popper-placement="bottom-end" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-47px, 30px);">
                                                <a class="dropdown-item" href="#">15 Days</a>
                                                <a class="dropdown-item active" href="#">30 Days</a>
                                                <a class="dropdown-item" href="#">3 Months</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body" style="position: relative;">
                                        <div id="customer-chart" style="min-height: 199px">
                                        </div>
                                        <div class="pt-25">
                                            <div class="d-flex justify-content-between mb-1">
                                                <div class="d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle font-medium-1 text-primary">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                    </svg>
                                                    <span class="fw-bold ms-75">New</span>
                                                </div>
                                                <span>690</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-1">
                                                <div class="d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle font-medium-1 text-warning">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                    </svg>
                                                    <span class="fw-bold ms-75">Active</span>
                                                </div>
                                                <span>258</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle font-medium-1 text-danger">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                    </svg>
                                                    <span class="fw-bold ms-75">Inactive</span>
                                                </div>
                                                <span>149</span>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 255px; height: 448px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                       <!--  <div class="row match-height">
                            <div class="col-lg-4 col-md-7 col-sm-6 col-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-end">
                                        <div style="width: 90%;">
                                            <h4 class="card-title">Top Invested Plan</h4>
                                            <p class="card-subtitle mt-2">In last 30 days top invested schemes.</p>
                                        </div>
                                        <div class="dropdown chart-dropdown align-self-start">
                                            <a class="btn btn-link border-0 dropdown-toggle px-50 waves-effect waves-light" type="link" id="dropdownItem3pix" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem3pix" data-popper-placement="bottom-end" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-47px, 30px);">
                                                <a class="dropdown-item" href="#">15 Days</a>
                                                <a class="dropdown-item active" href="#">30 Days</a>
                                                <a class="dropdown-item" href="#">3 Months</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="progress-list gy-3">
                                            <div class="progress-wrap">
                                                <div class="progress-text">
                                                    <div class="progress-label">Bronze Plan</div>
                                                    <div class="progress-amount">58%</div>
                                                </div>
                                                <div class="progress progress-bar-primary">
                                                    <div role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100" class="progress-bar progress-bar-striped progress-bar-animated" style="width: 20%;"></div>
                                                </div>
                                            </div>
                                            <div class="progress-wrap">
                                                <div class="progress-text">
                                                    <div class="progress-label">Silver Plan</div>
                                                    <div class="progress-amount">18.49%</div>
                                                </div>
                                                <div class="progress progress-bar-warning">
                                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100" class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                            <div class="progress-wrap">
                                                <div class="progress-text">
                                                    <div class="progress-label">Gold Plan</div>
                                                    <div class="progress-amount">16%</div>
                                                </div>
                                                <div class="progress progress-bar-success">
                                                    <div role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" class="progress-bar progress-bar-striped progress-bar-animated" style="width: 40%;"></div>
                                                </div>
                                            </div>
                                            <div class="progress-wrap">
                                                <div class="progress-text">
                                                    <div class="progress-label">Platinum Plan</div>
                                                    <div class="progress-amount">29%</div>
                                                </div>
                                                <div class="progress progress-bar-info">
                                                    <div role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                                <div class="card card-app-design">
                                    <div class="card-body">
                                        <h4 class="card-title mb-75 pt-25">Administrators</h4>
                                        <p class="card-text mb-2">
                                            Platform members and administrators
                                        </p>
                                        <div class="design-group mb-2 pt-50">
                                            <h6 class="section-label">Roles</h6>
                                            <span class="badge badge-light-warning me-1">Super Admin</span>
                                            <span class="badge badge-light-success">Admin</span>
                                            <span class="badge badge-light-primary">Investors</span>
                                        </div>
                                        <div class="design-group pt-25">
                                            <h6 class="section-label">Members</h6>
                                            <div class="avatar bg-light-success">
                                                <div class="avatar-content">PI</div>
                                            </div>
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content">PI</div>
                                            </div>
                                            <div class="avatar bg-light-secondary">
                                                <div class="avatar-content">AL</div>
                                            </div>
                                        </div>
                                        <div class="design-planning-wrapper mb-2 py-75">
                                            <div class="design-planning">
                                                <p class="card-text mb-25">Super-Admin</p>
                                                <h6 class="mb-0">1</h6>
                                            </div>
                                            <div class="design-planning">
                                                <p class="card-text mb-25">Administartor</p>
                                                <h6 class="mb-0">3</h6>
                                            </div>
                                            <div class="design-planning">
                                                <p class="card-text mb-25">Investors</p>
                                                <h6 class="mb-0">30</h6>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary w-100 waves-effect waves-float waves-light">Assign Role</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="card card-user-timeline">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-list mr-2"></i>
                                            <h4 class="card-title">Users Activities</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="timeline ms-50">
                                            <li class="timeline-item">
                                                <span class="timeline-point timeline-point-indicator"></span>
                                                <div class="timeline-event">
                                                    <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                        <h6>12 Invoices have been paid</h6>
                                                        <span class="timeline-event-time me-1">12 min ago</span>
                                                    </div>
                                                    <p>Invoices have been paid to the company.</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item">
                                                <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                                <div class="timeline-event">
                                                    <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                        <h6>Client Meeting</h6>
                                                        <span class="timeline-event-time me-1">45 min ago</span>
                                                    </div>
                                                    <p>Project meeting with john @10:15am</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item">
                                                <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                                                <div class="timeline-event">
                                                    <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                        <h6>Create a new project for client</h6>
                                                        <span class="timeline-event-time me-1">2 day ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-item">
                                                <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                                                <div class="timeline-event">
                                                    <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                        <h6>Create a new project for client</h6>
                                                        <span class="timeline-event-time me-1">5 day ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card invoice-list-wrapper">
                                        <div class="card-datatable table-responsive">
                                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                <h3 class="p-2">Recent Investments</h3>
                                                <table class="invoice-list-table table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="control sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="display: none;"></th>
                                                            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 88;" aria-label="Plan: activate to sort column ascending" aria-sort="descending">Plan</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 270px;" aria-label="Client: activate to sort column ascending">Investor</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 73px;" aria-label="Total: activate to sort column ascending">Amount</th>
                                                            <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 130px;" aria-label="Issued Date: activate to sort column ascending">Date</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">Status</th>
                                                            <th class="cell-fit sorting_disabled" rowspan="1" colspan="1" style="width: 80px;" aria-label="Actions">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td class=" control" tabindex="0" style="display: none;"></td>
                                                            <td class="sorting_1"><a class="fw-bold" href="app-invoice-preview.html"> Dimond - Daily 8.52% for 14 Days</a></td>
                                                            <td>
                                                                <div class="d-flex justify-content-left align-items-center">
                                                                    <div class="avatar-wrapper">
                                                                        <div class="avatar bg-light-success me-50">
                                                                            <div class="avatar-content">JK</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex flex-column">
                                                                        <h6 class="user-name text-truncate mb-0">Jamal Kerrod</h6><small class="text-truncate text-muted">jamalkerrod@email.com</small>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="d-none">3077</span>$3077</td>
                                                            <td style=""><span class="d-none">20190509</span>09 May 2019</td>
                                                            <td style=""><span class="badge rounded-pill badge-light-success" text-capitalized=""> Paid </span></td>
                                                            <td style="">
                                                                <div class="d-flex align-items-center col-actions"><a class="me-1" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send font-medium-2">
                                                                            <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                                                        </svg></a><a class="me-1" href="app-invoice-preview.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-medium-2">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown"><a class="btn btn-sm btn-icon px-0" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-2">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                                <circle cx="12" cy="19" r="1"></circle>
                                                                            </svg></a>
                                                                        <div class="dropdown-menu dropdown-menu-end" style=""><a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download font-small-4 me-50">
                                                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                                                                </svg>Download</a><a href="app-invoice-edit.html" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4 me-50">
                                                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                                                </svg>Edit</a><a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash font-small-4 me-50">
                                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                </svg>Delete</a><a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy font-small-4 me-50">
                                                                                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                                                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                                                </svg>Duplicate</a></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class=" control" tabindex="0" style="display: none;"></td>
                                                            <td class="sorting_1"><a class="fw-bold" href=""> Platinam - Daily 14.82% for 7 Days</a></td>
                                                            <td>
                                                                <div class="d-flex justify-content-left align-items-center">
                                                                    <div class="avatar-wrapper">
                                                                        <div class="avatar me-50"><img :src="$root.basepath + '/pixinvest/avatar-s-1.jpg'" width="32" height="32"></div>
                                                                    </div>
                                                                    <div class="d-flex flex-column">
                                                                        <h6 class="user-name text-truncate mb-0">Shamus Tuttle</h6><small class="text-truncate text-muted">shamustuttle@email.com</small>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="d-none">2230</span>$2230</td>
                                                            <td style=""><span class="d-none">20191119</span>19 Nov 2019</td>
                                                            <td style=""><span class="badge rounded-pill badge-light-success" text-capitalized=""> Paid </span></td>
                                                            <td style="">
                                                                <div class="d-flex align-items-center col-actions"><a class="me-1" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send font-medium-2">
                                                                            <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                                                        </svg></a><a class="me-1" href="" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-medium-2">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg></a>
                                                                    <div class="dropdown"><a class="btn btn-sm btn-icon px-0" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-2">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                                <circle cx="12" cy="19" r="1"></circle>
                                                                            </svg></a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download font-small-4 me-50">
                                                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                                                                </svg>Download</a><a href="app-invoice-edit.html" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4 me-50">
                                                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                                                </svg>Edit</a><a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash font-small-4 me-50">
                                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                                </svg>Delete</a><a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy font-small-4 me-50">
                                                                                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                                                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                                                </svg>Duplicate</a></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    
                                                    </tbody>
                                                </table>
                                                <div class="d-flex justify-content-between mx-2 row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 41 to 50 of 50 entries</div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                            <ul class="pagination">
                                                                <li class="paginate_button page-item previous" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a></li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">&nbsp;</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- END: Content-->
        <!-- BEGIN: Footer-->
        <AdminFooter></AdminFooter>
        <!-- END: Footer-->
    </div>
</template>
<script>
    export default {
    data() {
        return {
            error: null,
            message: null,
            users: []
        }
    },
    computed: {
        user() {
            return this.$auth.user()
        },
        Referral_link() {
            return this.$root.basepath + '/register?ref=' + this.user.username
        }
    },
    beforeCreate: function() {
        if (this.$auth.user().isAdmin == false) { this.$auth.logout() }
    },
    created() {
        let style = document.createElement('link')
        style.href = "./pixinvest/dark-layout.min.css"
        style.rel = "stylesheet"
        style.type = "text/css"
        document.head.appendChild(style)
        style = document.createElement('link')
        style.href = "./pixinvest/semi-dark-layout.min.css"
        style.rel = "stylesheet"
        style.type = "text/css"
        document.head.appendChild(style)

        let body = document.getElementById("body")
        body.setAttribute("data-open", "open");
        body.setAttribute("data-menu", "vertical-menu-modern");
        body.className = 'pace-done vertical-layout navbar-floating footer-static menu-hide vertical-overlay-menu'
        if (localStorage.users) {
            this.users = JSON.parse(localStorage.users)
        }
        // this.getUsers()

    },
    methods: {
        getUsers() {
            var form = new Form
            form.get("/auth/users")
                .then(response => {
                    this.users = response.data.data.item
                    localStorage.users = JSON.stringify(this.users)
                })
                .catch(error => {
                    console.log(error)
                })
        },

    }
}

</script>
<style type="text/css" scoped="">
.link-act-check:after,
.link-check li.active>a:after,
.link-check li a.active:after,
.link-list-opt li.active>a:after,
.dropdown-menu>a.dropdown-item.active:after {
    content: "\2714";
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 1rem;
    font-family: "Nioicon";
}

.dropdown-toggle::after {
    content: unset
}

.nav-vertical .nav.nav-tabs.nav-left~.tab-content .tab-pane {
    overflow-y: hidden;
}

.preloader .animated-preloader::after {
    background: #161D31;
}

.preloader .animated-preloader {
    background: #7367F0 !important;
}

.g-2>li,
.g-2>div {
    padding: .585rem !important;
}

@keyframes chartjs-render-animation {
    from {
        opacity: .99
    }

    to {
        opacity: 1
    }
}

.chartjs-render-monitor {
    animation: chartjs-render-animation 1ms
}

.chartjs-size-monitor,
.chartjs-size-monitor-expand,
.chartjs-size-monitor-shrink {
    position: absolute;
    direction: ltr;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    pointer-events: none;
    visibility: hidden;
    z-index: -1
}

.chartjs-size-monitor-expand>div {
    position: absolute;
    width: 1000000px;
    height: 1000000px;
    left: 0;
    top: 0
}

.chartjs-size-monitor-shrink>div {
    position: absolute;
    width: 200%;
    height: 200%;
    left: 0;
    top: 0
}

.apexcharts-canvas {
    position: relative;
    user-select: none;
    /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}


/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
    -webkit-appearance: none;
    width: 6px;
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
    border-radius: 4px;
    background-color: rgba(0, 0, 0, .5);
    box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}


.apexcharts-inner {
    position: relative;
}

.apexcharts-text tspan {
    font-family: inherit;
}

.legend-mouseover-inactive {
    transition: 0.15s ease all;
    opacity: 0.20;
}

.apexcharts-series-collapsed {
    opacity: 0;
}

.apexcharts-tooltip {
    border-radius: 5px;
    box-shadow: 2px 2px 6px -4px #999;
    cursor: default;
    font-size: 14px;
    left: 62px;
    opacity: 0;
    pointer-events: none;
    position: absolute;
    top: 20px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    white-space: nowrap;
    z-index: 12;
    transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-active {
    opacity: 1;
    transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-theme-light {
    border: 1px solid #e3e3e3;
    background: rgba(255, 255, 255, 0.96);
}

.apexcharts-tooltip.apexcharts-theme-dark {
    color: #fff;
    background: rgba(30, 30, 30, 0.8);
}

.apexcharts-tooltip * {
    font-family: inherit;
}


.apexcharts-tooltip-title {
    padding: 6px;
    font-size: 15px;
    margin-bottom: 4px;
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
    background: #ECEFF1;
    border-bottom: 1px solid #ddd;
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
    background: rgba(0, 0, 0, 0.7);
    border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
    display: inline-block;
    font-weight: 600;
    margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
    display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
    font-weight: 600;
}

.apexcharts-tooltip-marker {
    width: 12px;
    height: 12px;
    position: relative;
    top: 0px;
    margin-right: 10px;
    border-radius: 50%;
}

.apexcharts-tooltip-series-group {
    padding: 0 10px;
    display: none;
    text-align: left;
    justify-content: left;
    align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
    opacity: 1;
}

.apexcharts-tooltip-series-group.apexcharts-active,
.apexcharts-tooltip-series-group:last-child {
    padding-bottom: 4px;
}

.apexcharts-tooltip-series-group-hidden {
    opacity: 0;
    height: 0;
    line-height: 0;
    padding: 0 !important;
}

.apexcharts-tooltip-y-group {
    padding: 6px 0 5px;
}

.apexcharts-tooltip-candlestick {
    padding: 4px 8px;
}

.apexcharts-tooltip-candlestick>div {
    margin: 4px 0;
}

.apexcharts-tooltip-candlestick span.value {
    font-weight: bold;
}

.apexcharts-tooltip-rangebar {
    padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
    font-weight: 600;
    color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
    opacity: 0;
    padding: 9px 10px;
    pointer-events: none;
    color: #373d3f;
    font-size: 13px;
    text-align: center;
    border-radius: 2px;
    position: absolute;
    z-index: 10;
    background: #ECEFF1;
    border: 1px solid #90A4AE;
    transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
    background: rgba(0, 0, 0, 0.7);
    border: 1px solid rgba(0, 0, 0, 0.5);
    color: #fff;
}

.apexcharts-xaxistooltip:after,
.apexcharts-xaxistooltip:before {
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
}

.apexcharts-xaxistooltip:after {
    border-color: rgba(236, 239, 241, 0);
    border-width: 6px;
    margin-left: -6px;
}

.apexcharts-xaxistooltip:before {
    border-color: rgba(144, 164, 174, 0);
    border-width: 7px;
    margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after,
.apexcharts-xaxistooltip-bottom:before {
    bottom: 100%;
}

.apexcharts-xaxistooltip-top:after,
.apexcharts-xaxistooltip-top:before {
    top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
    border-bottom-color: #ECEFF1;
}

.apexcharts-xaxistooltip-bottom:before {
    border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
    border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
    border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
    border-top-color: #ECEFF1
}

.apexcharts-xaxistooltip-top:before {
    border-top-color: #90A4AE;
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
    border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
    border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip.apexcharts-active {
    opacity: 1;
    transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
    opacity: 0;
    padding: 4px 10px;
    pointer-events: none;
    color: #373d3f;
    font-size: 13px;
    text-align: center;
    border-radius: 2px;
    position: absolute;
    z-index: 10;
    background: #ECEFF1;
    border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
    background: rgba(0, 0, 0, 0.7);
    border: 1px solid rgba(0, 0, 0, 0.5);
    color: #fff;
}

.apexcharts-yaxistooltip:after,
.apexcharts-yaxistooltip:before {
    top: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
}

.apexcharts-yaxistooltip:after {
    border-color: rgba(236, 239, 241, 0);
    border-width: 6px;
    margin-top: -6px;
}

.apexcharts-yaxistooltip:before {
    border-color: rgba(144, 164, 174, 0);
    border-width: 7px;
    margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after,
.apexcharts-yaxistooltip-left:before {
    left: 100%;
}

.apexcharts-yaxistooltip-right:after,
.apexcharts-yaxistooltip-right:before {
    right: 100%;
}

.apexcharts-yaxistooltip-left:after {
    border-left-color: #ECEFF1;
}

.apexcharts-yaxistooltip-left:before {
    border-left-color: #90A4AE;
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
    border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
    border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
    border-right-color: #ECEFF1;
}

.apexcharts-yaxistooltip-right:before {
    border-right-color: #90A4AE;
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
    border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
    border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
    opacity: 1;
}

.apexcharts-yaxistooltip-hidden {
    display: none;
}

.apexcharts-xcrosshairs,
.apexcharts-ycrosshairs {
    pointer-events: none;
    opacity: 0;
    transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active,
.apexcharts-ycrosshairs.apexcharts-active {
    opacity: 1;
    transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
    opacity: 0;
}

.apexcharts-selection-rect {
    cursor: move;
}

.svg_select_boundingRect,
.svg_select_points_rot {
    pointer-events: none;
    opacity: 0;
    visibility: hidden;
}

.apexcharts-selection-rect+g .svg_select_boundingRect,
.apexcharts-selection-rect+g .svg_select_points_rot {
    opacity: 0;
    visibility: hidden;
}

.apexcharts-selection-rect+g .svg_select_points_l,
.apexcharts-selection-rect+g .svg_select_points_r {
    cursor: ew-resize;
    opacity: 1;
    visibility: visible;
}

.svg_select_points {
    fill: #efefef;
    stroke: #333;
    rx: 2;
}

.apexcharts-svg.apexcharts-zoomable.hovering-zoom {
    cursor: crosshair
}

.apexcharts-svg.apexcharts-zoomable.hovering-pan {
    cursor: move
}

.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
    cursor: pointer;
    width: 20px;
    height: 20px;
    line-height: 24px;
    color: #6E8192;
    text-align: center;
}

.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
    fill: #6E8192;
}

.apexcharts-selection-icon svg {
    fill: #444;
    transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
    fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
    fill: #008FFB;
}

.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
    fill: #333;
}

.apexcharts-selection-icon,
.apexcharts-menu-icon {
    position: relative;
}

.apexcharts-reset-icon {
    margin-left: 5px;
}

.apexcharts-zoom-icon,
.apexcharts-reset-icon,
.apexcharts-menu-icon {
    transform: scale(0.85);
}

.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon {
    transform: scale(0.7)
}

.apexcharts-zoomout-icon {
    margin-right: 3px;
}

.apexcharts-pan-icon {
    transform: scale(0.62);
    position: relative;
    left: 1px;
    top: 0px;
}

.apexcharts-pan-icon svg {
    fill: #fff;
    stroke: #6E8192;
    stroke-width: 2;
}

.apexcharts-pan-icon.apexcharts-selected svg {
    stroke: #008FFB;
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
    stroke: #333;
}

.apexcharts-toolbar {
    position: absolute;
    z-index: 11;
    max-width: 176px;
    text-align: right;
    border-radius: 3px;
    padding: 0px 6px 2px 6px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.apexcharts-menu {
    background: #fff;
    position: absolute;
    top: 100%;
    border: 1px solid #ddd;
    border-radius: 3px;
    padding: 3px;
    right: 10px;
    opacity: 0;
    min-width: 110px;
    transition: 0.15s ease all;
    pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
    opacity: 1;
    pointer-events: all;
    transition: 0.15s ease all;
}

.apexcharts-menu-item {
    padding: 6px 7px;
    font-size: 12px;
    cursor: pointer;
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
    background: #eee;
}

.apexcharts-theme-dark .apexcharts-menu {
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
}

@media screen and (min-width: 768px) {
    .apexcharts-canvas:hover .apexcharts-toolbar {
        opacity: 1;
    }
}

.apexcharts-datalabel.apexcharts-element-hidden {
    opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels,
.apexcharts-datalabel,
.apexcharts-datalabel-label,
.apexcharts-datalabel-value {
    cursor: default;
    pointer-events: none;
}

.apexcharts-pie-label-delay {
    opacity: 0;
    animation-name: opaque;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
    animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
    opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
    opacity: 0;
}

.apexcharts-gridline,
.apexcharts-annotation-rect,
.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line,
.apexcharts-zoom-rect,
.apexcharts-toolbar svg,
.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-radar-series path,
.apexcharts-radar-series polygon {
    pointer-events: none;
}


/* markers */

.apexcharts-marker {
    transition: 0.15s ease all;
}

@keyframes opaque {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}


/* Resize generated styles */

@keyframes resizeanim {
    from {
        opacity: 0;
    }

    to {
        opacity: 0;
    }
}

.resize-triggers {
    animation: 1ms resizeanim;
    visibility: hidden;
    opacity: 0;
}

.resize-triggers,
.resize-triggers>div,
.contract-trigger:before {
    content: " ";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
}

.resize-triggers>div {
    background: #eee;
    overflow: auto;
}

.contract-trigger:before {
    width: 200%;
    height: 200%;
}

</style>
