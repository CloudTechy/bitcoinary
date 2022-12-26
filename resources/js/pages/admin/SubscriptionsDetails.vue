<template>
    <div class="page-wrapper default-version">
        <AdminDashboardSidebar></AdminDashboardSidebar>
        <AdminDashboardHeader></AdminDashboardHeader>

        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="row align-items-center mb-30 justify-content-between">
                    <div v-if="deposit" class="col-lg-6 col-sm-6">
                        <h6 class="page-title">
                            {{
                                    deposit.username +
                                    " requested " +
                                    $root.normalNumeral(deposit.amount) +
                                    " USD " +
                                    deposit.name +
                                    " plan"
                            }}
                        </h6>

                    </div>
                    <content-loader v-else></content-loader>

                </div>

                <div class="row mb-none-30">
                    <div class="col-lg-5 col-md-6 col-sm-12 mb-30">
                        <div v-if="deposit" class="card b-radius--10 overflow-hidden box--shadow1">
                            <div class="card-body">
                                <h5 class="mb-20 text-muted">
                                    {{ 'Deposit Via ' + deposit.transaction.payment_method }}
                                </h5>

                                <div class="p-3 bg--white">
                                    <div class="">
                                        <img :src="
                                            $root.basepath +
                                            '/images/uploads/' +
                                            cryptoFilter($root.payments, deposit.transaction.payment_method)[0].image
                                        " alt="profile-image"
                                            class="b-radius--10 deposit-imgView" />
                                    </div>
                                </div>

                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Date
                                        <span class="font-weight-bold">{{ deposit.created_at }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Turnover
                                        <span v-if="deposit.expiration"
                                            class="font-weight-bold badge badge--success">{{ getDate(deposit.expiration) }}</span>
                                        <span v-else class="font-weight-bold badge badge--warning">Pending</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Trx Number
                                        <span class="font-weight-bold">{{ deposit.transaction_id }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Username
                                        <span class="font-weight-bold">
                                            <a :href="
                                                $root.basepath +
                                                '/admin/users/' +
                                                deposit.user_id
                                            ">{{ deposit.username }}</a>
                                        </span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Method
                                        <span class="font-weight-bold">{{ deposit.transaction.payment_method }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Amount
                                        <span class="font-weight-bold">{{ $root.normalNumeral(deposit.amount) }}
                                            USD</span>
                                    </li>


                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Charge
                                        <span class="font-weight-bold">0 USD</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        After Charge
                                        <span class="font-weight-bold">{{ $root.normalNumeral(deposit.amount) }}
                                            USD</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Rate
                                        <span class="font-weight-bold">1 USD = 1 USD</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Payable
                                        <span class="font-weight-bold">{{ $root.normalNumeral(deposit.amount) }}
                                            USD</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Status
                                        <span :class="{
                                            badge: true,
                                            'badge--warning':
                                                !deposit.active,
                                            'badge--success':
                                                deposit.active,
                                        }">{{
        deposit.active
            ? "Active"
            : "Pending"
}}</span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <list-loader v-else></list-loader>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 mb-30">
                        <div v-if="deposit" class="card b-radius--10 overflow-hidden box--shadow1">
                            <div class="card-body">
                                <h5 class="card-title mb-50 border-bottom pb-2">
                                    User Deposit Information
                                </h5>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Transaction number</h6>
                                        <p v-if="deposit.transaction.transaction_ref">
                                            {{ deposit.transaction.transaction_ref }}</p>
                                        <p v-else> NIL</p>
                                    </div>
                                </div>
                                <div class="divider"></div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Screenshot POP</h6>
                                        <p v-if="deposit.pop"><img style="width:100%" :src="
                                        $root.basepath +
                                        '/images/pop/' +
                                        deposit.pop" /></p>
                                        <p v-else> No PoP uploaded yet</p>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <button v-if="!deposit.active" class="btn btn--success ml-1 approveBtn"
                                            data-original-title="Approve" data-toggle="modal"
                                            data-target="#approveModal">
                                            <i class="fas fa-check"></i> Approve
                                        </button>

                                        <button v-else class="btn btn--danger ml-1 rejectBtn" data-toggle="modal"
                                            data-target="#rejectModal" data-original-title="Reject">
                                            <i class="fas fa-ban"></i> Terminate
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <list-loader v-else></list-loader>
                    </div>
                </div>

                <div id="approveModal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Approve Deposit Confirmation
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="" method="POST" @submit.prevent="approveSubscription(deposit.id)">

                                <input type="hidden" name="id" />
                                <div class="modal-body">
                                    <p>
                                        Are you sure to
                                        <span class="font-weight-bold">approve</span>
                                        <span class="font-weight-bold withdraw-amount text-success"></span>
                                        this subscription plan of
                                        <span
                                            class="font-weight-bold withdraw-user">{{ $root.normalNumeral(deposit.amount) }}
                                            USD</span>?

                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button ref="subscription_modal_button" type="button" class="btn btn--dark"
                                        data-dismiss="modal">
                                        Close
                                    </button>
                                    <VueLoadingButton class="btn btn--success" type="submit" :loading="form.busy"
                                        aria-label="Approve">
                                        Approve</VueLoadingButton>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="rejectModal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Stop Subscription Confirmation
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" @submit.prevent="approveSubscription(deposit.id)">
                                <input type="hidden" name="id" />
                                <div class="modal-body">
                                    <p>
                                        Are you sure to
                                        <span class="font-weight-bold">terminate</span>
                                        <span class="font-weight-bold withdraw-amount text-success"></span>
                                        this subscription plan of
                                        <span
                                            class="font-weight-bold withdraw-user">{{ $root.normalNumeral(deposit.amount) }}
                                            USD</span>?
                                    </p>

                                    <div class="form-group">
                                        <label class="font-weight-bold mt-2">Reason for Termination</label>
                                        <textarea name="message" id="message" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button ref="subscription_modal_button2" type="button" class="btn btn--dark"
                                        data-dismiss="modal">
                                        Close
                                    </button>
                                    <VueLoadingButton class="btn btn--danger" type="submit" :loading="form.busy"
                                        aria-label="Reject">
                                        Terminate</VueLoadingButton>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bodywrapper__inner end -->
        </div>
    </div>
</template>
<script>
import VueLoadingButton from "vue-loading-button";
import { ContentLoader, ListLoader } from "vue-content-loader";
import moment from 'moment'
export default {
    data() {
        return {
            form: new Form({}),
            deposit: "",
            loading: false,
            key: 0,
            errors: "",
            message: "",
            error: "",
            image: "",
            avatarKey: 0,
        };
    },
    created() {
        this.fetchDeposits(this.$route.params.id);
    },
    watch: {

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
        style.href = this.$root.basepath + "assets/admin/css/line-awesome.min.css";
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
        style.href = this.$root.basepath + "/assets/css/vue-input.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/admin/css/app.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/admin/css/userView.css";
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
    },

    components: {
        VueLoadingButton,
        ContentLoader, ListLoader,
    },
    methods: {
        fetchDeposits(id) {
            this.loading = true;
            this.form
                .get("/auth/packageusers/" + id)
                .then((response) => {
                    this.loading = false;
                    this.deposit = response.data.data;
                    this.key++;
                })
                .catch((error) => {
                    this.loading = false;
                    this.$root.alert(
                        "error",
                        "",
                        "An error occured when fetching data"
                    );
                    console.log(error);
                });
        },
        cryptoFilter(list, search) {
            var data = [];
            if (search) {
                data = list.filter((item) => {
                    return item.name == search;
                });
            } else {
                data = [];
            }
            return data;

        },
        approveSubscription(id) {
            this.loading = true;
            this.form
                .get("/auth/subscribe/" + id)
                .then((response) => {
                    this.fetchDeposits(this.$route.params.id)
                    this.loading = false;
                    console.log(response.data.message)
                    this.$root.alert(
                        "success",
                        response.data.message
                    );
                    this.$refs.subscription_modal_button.click()
                    this.$refs.subscription_modal_button2.click()
                    this.$root.scrollUp()
                })
                .catch((error) => {
                    this.loading = false;
                    this.$root.alert(
                        "error",
                        error.response.data.message
                    );
                    console.log(error);
                });

        },
        getDate(to) {
            return moment().to(moment(to))
        }
    },
};
</script>
<style scoped>

</style>
