<template>
    <div class="page-wrapper default-version">
       <AdminDashboardSidebar></AdminDashboardSidebar>
        <!-- sidebar end -->
        <!-- navbar-wrapper start -->
       <AdminDashboardHeader></AdminDashboardHeader> 
        <!-- navbar-wrapper end -->

         <!-- 
       -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div
                    class="row align-items-center mb-30 justify-content-between"
                >
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">Dashboard</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                        <span class="text--info"
                            >Last Cron Run <strong>2 minutes ago</strong></span
                        >
                    </div>
                </div>

                <div class="row mb-none-30">
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--4 b-radius--10 box-shadow">
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">5028</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small">Total Users</span>
                                </div>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/users"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- dashboard-w1 end -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--8 b-radius--10 box-shadow">
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">5028</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small"
                                        >Total Verified Users</span
                                    >
                                </div>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/users/active"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div
                            class="dashboard-w1 bg--red b-radius--10 box-shadow"
                        >
                            <div class="icon">
                                <i class="la la-ban"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">3</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small"
                                        >Total Email Unverified Users</span
                                    >
                                </div>

                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/users/email-unverified"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- dashboard-w1 end -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--9 b-radius--10 box-shadow">
                            <div class="icon">
                                <i class="la la-ban"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">1</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small"
                                        >Total SMS Unverified Users</span
                                    >
                                </div>

                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/users/sms-unverified"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- dashboard-w1 end -->

                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--2 b-radius--10 box-shadow">
                            <div class="icon">
                                <i class="fa fa-wallet"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">100,358,174.81</span>
                                    <span class="currency-sign">$</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small"
                                        >User Deposit Wallet
                                    </span>
                                </div>

                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/user/with-deposit-balance"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- dashboard-w1 end -->

                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--3 b-radius--10 box-shadow">
                            <div class="icon">
                                <i class="las la-dollar-sign"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">112,533,411.58</span>
                                    <span class="currency-sign">$</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small"
                                        >User Interest Wallet</span
                                    >
                                </div>

                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/user/with-interest-balance"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- dashboard-w1 end -->

                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div
                            class="dashboard-w1 bg--17 b-radius--10 box-shadow"
                        >
                            <div class="icon">
                                <i class="las la-clipboard-check"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">9</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small">Total Plan</span>
                                </div>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/plan-setting"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- dashboard-w1 end -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div
                            class="dashboard-w1 bg--11 b-radius--10 box-shadow"
                        >
                            <div class="icon">
                                <i class="las la-hand-holding-usd"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">135,491.00</span>
                                    <span class="currency-sign">$</span>
                                </div>
                                <div class="desciption">
                                    <span class="text--small"
                                        >Total Investment</span
                                    >
                                </div>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/report/plan"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- dashboard-w1 end -->
                </div>
                <!-- row end-->

                <div class="row mt-50 mb-none-30">
                    <div class="col-xl-6 mb-30">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Monthly Deposit & Withdraw Report
                                </h5>
                                <div id="apex-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-30">
                        <div class="row mb-none-30">
                            <div class="col-lg-6 col-sm-6 mb-30">
                                <div
                                    class="widget-three box--shadow2 b-radius--5 bg--white"
                                >
                                    <div
                                        class="widget-three__icon b-radius--rounded bg--primary box--shadow2"
                                    >
                                        <i class="las la-wallet"></i>
                                    </div>
                                    <div class="widget-three__content">
                                        <h2 class="numbers">136</h2>
                                        <p class="text--small">Total Deposit</p>
                                    </div>
                                </div>
                                <!-- widget-two end -->
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-30">
                                <div
                                    class="widget-three box--shadow2 b-radius--5 bg--white"
                                >
                                    <div
                                        class="widget-three__icon b-radius--rounded bg--pink box--shadow2"
                                    >
                                        <i class="las la-money-bill"></i>
                                    </div>
                                    <div class="widget-three__content">
                                        <h2 class="numbers">337985 USD</h2>
                                        <p class="text--small">
                                            Total Deposit Amount
                                        </p>
                                    </div>
                                </div>
                                <!-- widget-two end -->
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-30">
                                <div
                                    class="widget-three box--shadow2 b-radius--5 bg--white"
                                >
                                    <div
                                        class="widget-three__icon b-radius--rounded bg--teal box--shadow2"
                                    >
                                        <i class="las la-money-check"></i>
                                    </div>
                                    <div class="widget-three__content">
                                        <h2 class="numbers">8618.06 USD</h2>
                                        <p class="text--small">
                                            Total Deposit Charge
                                        </p>
                                    </div>
                                </div>
                                <!-- widget-two end -->
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-30">
                                <div
                                    class="widget-three box--shadow2 b-radius--5 bg--white"
                                >
                                    <div
                                        class="widget-three__icon b-radius--rounded bg--green box--shadow2"
                                    >
                                        <i class="las la-money-bill-wave"></i>
                                    </div>
                                    <div class="widget-three__content">
                                        <h2 class="numbers">359</h2>
                                        <p class="text--small">
                                            Pending Deposit
                                        </p>
                                    </div>
                                </div>
                                <!-- widget-two end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <div class="row mt-50 mb-none-30">
                    <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--4 b-radius--10 box-shadow">
                            <div class="icon">
                                <i class="fa fa-wallet"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">1</span>
                                </div>
                                <div class="desciption">
                                    <span>Total Withdraw</span>
                                </div>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/withdraw/method"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--7 b-radius--10 box-shadow">
                            <div class="icon">
                                <i class="fa fa-hand-holding-usd"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">100</span>
                                    <span class="currency-sign">USD</span>
                                </div>
                                <div class="desciption">
                                    <span>Total Withdraw Amount</span>
                                </div>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/withdraw/approved"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
                        <div class="dashboard-w1 bg--9 b-radius--10 box-shadow">
                            <div class="icon">
                                <i class="fa fa-money-bill-alt"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">0.01 </span>
                                    <span class="currency-sign">USD</span>
                                </div>
                                <div class="desciption">
                                    <span>Total Withdraw Charge</span>
                                </div>

                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/withdraw/approved"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
                        <div
                            class="dashboard-w1 bg--primary b-radius--10 box-shadow"
                        >
                            <div class="icon">
                                <i class="fa fa-spinner"></i>
                            </div>
                            <div class="details">
                                <div class="numbers">
                                    <span class="amount">28</span>
                                </div>
                                <div class="desciption">
                                    <span>Withdraw Pending</span>
                                </div>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/withdraw/pending"
                                    class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"
                                    >View All</a
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-none-30 mt-5">
                    <div class="col-xl-6 mb-30">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Last 30 days Deposit History
                                </h5>
                                <div id="deposit-line"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Last 30 days Withdraw History
                                </h5>
                                <div id="withdraw-line"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alert -->
                <div
                    class="modal fade"
                    id="cronModal"
                    tabindex="-1"
                    role="dialog"
                    aria-hidden="true"
                >
                    <div
                        class="modal-dialog modal-dialog-centered modal-lg"
                        role="document"
                    >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5
                                    class="modal-title"
                                    id="exampleModalLongTitle"
                                >
                                    Cron Job Setting Instruction
                                </h5>
                                <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"
                                >
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3 class="text--danger text-center">
                                    Please Set Cron Job Now
                                </h3>
                                <p class="lead">
                                    To automate the return interest, we need to
                                    set the cron job and make sure the cron job
                                    is running properly. Set the Cron time as
                                    minimum as possible. Once per 5-15 minutes
                                    is ideal while once every minute is the best
                                    option.
                                </p>

                                <label class="font-weight-bold"
                                    >Cron Command</label
                                >
                                <div class="input-group">
                                    <input
                                        type="text"
                                        name="text"
                                        class="form-control form-control-lg"
                                        id="referralURL"
                                        value="curl -s https://script.viserlab.com/hyiplab/demo/cron"
                                        readonly
                                    />
                                    <div class="input-group-append">
                                        <span
                                            class="input-group-text copytext btn--primary copyBoard"
                                            id="copyBoard"
                                        >
                                            Copy
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal"
                                >
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bodywrapper__inner end -->
        </div>
        <!-- body-wrapper end -->
    </div>
</template>
<script>
export default {
    data() {
        return {
            error: null,
            message: null,
            users: [],
        };
    },
    computed: {
        user() {
            return this.$auth.user();
        },
        Referral_link() {
            return this.$root.basepath + "/register?ref=" + this.user.username;
        },
    },
    mounted() {
        var script = document.createElement("script");
        script.src = this.$root.basepath + "/assets/admin/js/app.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src = this.$root.basepath + "/assets/admin/js/admin.js";
        document.body.appendChild(script);
    },
    beforeCreate() {
        let js = document.createElement("script");
        js.setAttribute(
            "src",
            "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
        );
        document.body.appendChild(js);

        var style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/admin/css/vendor/bootstrap.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath +
            "/assets/admin/css/vendor/bootstrap-toggle.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/admin/css/all.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/css/line-awesome.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/admin/css/vendor/nice-select.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/admin/css/vendor/prism.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/admin/css/vendor/select2.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/admin/css/vendor/datatables.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href =
            this.$root.basepath +
            "/assets/admin/css/vendor/jquery-jvectormap-2.0.5.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/admin/css/vendor/datepicker.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath +
            "/assets/admin/css/vendor/jquery-timepicky.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href =
            this.$root.basepath +
            "/assets/admin/css/vendor/bootstrap-clockpicker.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath +
            "/assets/admin/css/vendor/bootstrap-pincode-input.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/admin/css/app.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        var script = document.createElement("script");
        script.src =
            this.$root.basepath + "/assets/admin/js/vendor/jquery-3.5.1.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath +
            "/assets/admin/js/vendor/bootstrap.bundle.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath +
            "/assets/admin/js/vendor/bootstrap-toggle.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath +
            "/assets/admin/js/vendor/jquery.slimscroll.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath +
            "/assets/admin/js/vendor/jquery.nice-select.min.js";
        document.body.appendChild(script);
        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/admin/css/iziToast.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        script = document.createElement("script");
        script.src = this.$root.basepath + "/assets/admin/js/iziToast.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src = this.$root.basepath + "/assets/admin/js/nicEdit.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src = this.$root.basepath + "/assets/admin/js/vendor/prism.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath + "/assets/admin/js/vendor/select2.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath + "/assets/admin/js/vendor/datatables.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath + "/assets/admin/js/vendor/apexcharts.min.js";
        document.body.appendChild(script);
        // script = document.createElement("script");
        // script.src = this.$root.basepath + "/assets/admin/js/app.js";
        // document.body.appendChild(script);
        // script = document.createElement("script");
        // script.src = this.$root.basepath + "/assets/admin/js/admin.js";
        // document.body.appendChild(script);
    },
    created() {
        // let body = document.getElementById("body")
        // body.setAttribute("data-open", "open");
        // body.setAttribute("data-menu", "vertical-menu-modern");
        // body.className = 'pace-done vertical-layout navbar-floating footer-static menu-hide vertical-overlay-menu'
        if (localStorage.users) {
            this.users = JSON.parse(localStorage.users);
        }
        // this.getUsers()
    },
    methods: {
        getUsers() {
            var form = new Form();
            form.get("/auth/users")
                .then((response) => {
                    this.users = response.data.data.item;
                    localStorage.users = JSON.stringify(this.users);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>
<style type="text/css" scoped="">
/* @import "../../assets/css/app.css"; */
</style>
