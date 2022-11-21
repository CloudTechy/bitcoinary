<template>
    <div class="page-wrapper default-version">
        <AdminDashboardSidebar></AdminDashboardSidebar>
        <AdminDashboardHeader></AdminDashboardHeader>

        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div
                    class="row align-items-center mb-30 justify-content-between"
                >
                    <div v-if="withdrawal" class="col-lg-6 col-sm-6">
                        <h6 class="page-title">
                            {{
                                withdrawal.username +
                                " requested withdrawal of " +
                                $root.normalNumeral(withdrawal.amount) +
                                " USD "
                            }}
                        </h6>
                    </div>
                    <content-loader v-else></content-loader>
                    <div
                        class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3"
                    ></div>
                </div>

                <div class="row mb-none-30">
                    <div class="col-lg-5 col-md-6 col-sm-12 mb-30">
                        <div
                            v-if="withdrawal"
                            class="card b-radius--10 overflow-hidden box--shadow1"
                        >
                            <div class="card-body">
                                <h5 class="mb-20 text-muted">
                                    {{
                                        "Withdrawal Via " +
                                        withdrawal.payment_method
                                    }}
                                </h5>

                                <div class="p-3 bg--white">
                                    <div class="">
                                        <img
                                            :src="
                                                $root.basepath +
                                                '/images/uploads/' +
                                                cryptoFilter(
                                                    $root.payments,
                                                    withdrawal.payment_method
                                                )[0].image
                                            "
                                            alt="profile-image"
                                            class="b-radius--10 withdrawal-imgView"
                                        />
                                    </div>
                                </div>

                                <ul class="list-group">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Date
                                        <span class="font-weight-bold">{{
                                            withdrawal.created_at
                                        }}</span>
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Trx Number
                                        <span class="font-weight-bold">{{
                                            withdrawal.id
                                        }}</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Username
                                        <span class="font-weight-bold">
                                            <a
                                                :href="
                                                    $root.basepath +
                                                    '/admin/users/' +
                                                    withdrawal.user_id
                                                "
                                                >{{ withdrawal.username }}</a
                                            >
                                        </span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Method
                                        <span class="font-weight-bold">{{
                                            withdrawal.payment_method
                                        }}</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Amount
                                        <span class="font-weight-bold"
                                            >{{
                                                $root.normalNumeral(
                                                    withdrawal.amount
                                                )
                                            }}
                                            USD</span
                                        >
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Charge
                                        <span class="font-weight-bold"
                                            >0 USD</span
                                        >
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        After Charge
                                        <span class="font-weight-bold"
                                            >{{
                                                $root.normalNumeral(
                                                    withdrawal.amount
                                                )
                                            }}
                                            USD</span
                                        >
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Rate
                                        <span class="font-weight-bold"
                                            >1 USD = 1 USD</span
                                        >
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Payable
                                        <span class="font-weight-bold"
                                            >{{
                                                $root.normalNumeral(
                                                    withdrawal.amount
                                                )
                                            }}
                                            USD</span
                                        >
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Status
                                        <span
                                            :class="{
                                                badge: true,
                                                'badge--warning':
                                                    !withdrawal.approved,
                                                'badge--success':
                                                    withdrawal.approved,
                                            }"
                                            >{{
                                                withdrawal.approved
                                                    ? "Approved"
                                                    : "Pending"
                                            }}</span
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <list-loader v-else></list-loader>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 mb-30">
                        <div v-if="account"
                            class="card b-radius--10 overflow-hidden box--shadow1"
                        >
                            <div v-if="account.currency_type == 'fiat'"
                                class="card-body"
                            >
                                <h5 class="card-title mb-50 border-bottom pb-2">
                                    User Withdrawal Information
                                </h5>
                                <div v-if = "account.bank_name" class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Bank Name</h6>
                                        <p class="text-uppercase">
                                            {{ account.bank_name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div v-if="account.bank_name" class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Account Name</h6>
                                        <p class="text-uppercase">
                                            {{ account.acc_name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Account Number</h6>
                                        <p>
                                            {{ account.acc_number
                                             }}  <i
                                                class="fas fa-copy text--primary"
                                                title="copy"
                                                data-toggle="tooltip"
                                                data-placement="right"
                                                @click="
                                                    $root.alert(
                                                        'success',
                                                        ' ',
                                                        'copied'
                                                    )
                                                "
                                                v-clipboard="account.acc_number"
                                                style="border-radius: 0px"
                                            ></i>
                                        </p>
                                    </div>
                                </div>
                                <div v-if="account.bank_name" class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Swift Code</h6>
                                        <p>{{ account.swift_code || " NIL " }}</p>
                                    </div>
                                </div>
                                <div class="divider"></div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Screenshot POP</h6>
                                        <p v-if="withdrawal.pop">
                                            <img
                                                :src="
                                                    $root.basepath +
                                                    '/images/pop/' +
                                                    withdrawal.pop
                                                "
                                            />
                                        </p>
                                        <p v-else>No PoP uploaded yet</p>
                                        <div class="input-group">
                                            <div class="custom-file mt-4">
                                                <input
                                                    required=""
                                                    @change="updateLabel"
                                                    ref="fileInput"
                                                    type="file"
                                                    class="custom-file-input"
                                                    id="inputGroupFile03"
                                                    accept=".png, .jpg, .jpeg"
                                                />
                                                <label
                                                    class="custom-file-label text-left"
                                                    for="inputGroupFile03"
                                                    >{{ label }}</label
                                                >
                                            </div>
                                        </div>
                                        <p
                                            v-for="err in error"
                                            class="small base--color"
                                            v-if="typeof error == 'object'"
                                        >
                                            {{ err }}
                                        </p>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <button
                                            class="btn btn--success ml-1 approveBtn"
                                            data-original-title="Approve"
                                            data-toggle="modal"
                                            data-target="#approveModal"
                                        >
                                            <i class="fas fa-check"></i> Approve
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div v-else class="card-body">
                                <h5 class="card-title mb-50 border-bottom pb-2">
                                    User Withdrawal Information
                                </h5>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Wallet Address</h6>
                                        <p id="wallet">
                                            {{ account.wallet }}
                                            <i
                                                class="fas fa-copy text--primary"
                                                title="copy"
                                                data-toggle="tooltip"
                                                data-placement="right"
                                                @click="
                                                    $root.alert(
                                                        'success',
                                                        ' ',
                                                        'copied'
                                                    )
                                                "
                                                v-clipboard="account.wallet"
                                                style="border-radius: 0px"
                                            ></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Blockchain Standard</h6>
                                        <p class="text-uppercase">
                                            {{ account.crypto_standard }}
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Memo</h6>
                                        <p>
                                            {{ account.crypto_memo || " NIL " }}
                                            <i
                                                v-if="account.crypto_memo"
                                                class="fas fa-copy text--primary"
                                                title="copy"
                                                data-toggle="tooltip"
                                                data-placement="right"
                                                @click="
                                                    $root.alert(
                                                        'success',
                                                        ' ',
                                                        'copied'
                                                    )
                                                "
                                                v-clipboard="
                                                    account.crypto_memo
                                                "
                                                style="border-radius: 0px"
                                            ></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="divider"></div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Screenshot POP</h6>
                                        <p v-if="withdrawal.pop">
                                            <img style="width:100%"
                                                :src="
                                                    $root.basepath +
                                                    '/images/pop/' +
                                                    withdrawal.pop
                                                "
                                            />
                                        </p>
                                        <p v-else>No PoP uploaded yet</p>
                                        <div class="input-group">
                                            <div class="custom-file mt-4">
                                                <input
                                                    required=""
                                                    @change="updateLabel"
                                                    ref="fileInput"
                                                    type="file"
                                                    class="custom-file-input"
                                                    id="inputGroupFile03"
                                                    accept=".png, .jpg, .jpeg"
                                                />
                                                <label
                                                    class="custom-file-label text-left"
                                                    for="inputGroupFile03"
                                                    >{{ label }}</label
                                                >
                                            </div>
                                        </div>
                                        <p
                                            v-for="err in error"
                                            class="small base--color"
                                            v-if="typeof error == 'object'"
                                        >
                                            {{ err }}
                                        </p>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <button
                                            class="btn btn--success ml-1 approveBtn"
                                            data-original-title="Approve"
                                            data-toggle="modal"
                                            data-target="#approveModal"
                                        >
                                            <i class="fas fa-check"></i> Approve
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <list-loader v-else></list-loader>
                    </div>
                </div>

                <div
                    id="approveModal"
                    class="modal fade"
                    tabindex="-1"
                    role="dialog"
                >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Approve Withdrawal Confirmation
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
                            <form
                                action=""
                                method="POST"
                                @submit.prevent="
                                    approveWithdrawal(withdrawal.id)
                                "
                            >
                                <input type="hidden" name="id" />
                                <div class="modal-body">
                                    <p>
                                        Are you sure to
                                        <span class="font-weight-bold"
                                            >approve</span
                                        >
                                        <span
                                            class="font-weight-bold withdraw-amount text-success"
                                        ></span>
                                        the withdrawl request of
                                        <span
                                            class="font-weight-bold withdraw-user"
                                            >{{
                                                $root.normalNumeral(
                                                    withdrawal.amount
                                                )
                                            }}
                                            USD</span
                                        >?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button
                                        ref="subscription_modal_button"
                                        type="button"
                                        class="btn btn--dark"
                                        data-dismiss="modal"
                                    >
                                        Close
                                    </button>
                                    <VueLoadingButton
                                        class="btn btn--success"
                                        type="submit"
                                        :loading="form.busy"
                                        aria-label="Approve"
                                    >
                                        Approve</VueLoadingButton
                                    >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div
                    id="rejectModal"
                    class="modal fade"
                    tabindex="-1"
                    role="dialog"
                >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Stop Subscription Confirmation
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
                            <form
                                method="POST"
                                @submit.prevent="
                                    approveWithdrawal(withdrawal.id)
                                "
                            >
                                <input type="hidden" name="id" />
                                <div class="modal-body">
                                    <p>
                                        Are you sure to
                                        <span class="font-weight-bold"
                                            >terminate</span
                                        >
                                        <span
                                            class="font-weight-bold withdraw-amount text-success"
                                        ></span>
                                        this subscription plan of
                                        <span
                                            class="font-weight-bold withdraw-user"
                                            >{{
                                                $root.normalNumeral(
                                                    withdrawal.amount
                                                )
                                            }}
                                            USD</span
                                        >?
                                    </p>

                                    <div class="form-group">
                                        <label class="font-weight-bold mt-2"
                                            >Reason for Termination</label
                                        >
                                        <textarea
                                            name="message"
                                            id="message"
                                            class="form-control"
                                            rows="5"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button
                                        ref="subscription_modal_button2"
                                        type="button"
                                        class="btn btn--dark"
                                        data-dismiss="modal"
                                    >
                                        Close
                                    </button>
                                    <VueLoadingButton
                                        class="btn btn--danger"
                                        type="submit"
                                        :loading="form.busy"
                                        aria-label="Reject"
                                    >
                                        Terminate</VueLoadingButton
                                    >
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
export default {
    data() {
        return {
            form: new Form({
                pop: "",
            }),
            withdrawal: "",
            account: "",
            loading: false,
            key: 0,
            errors: "",
            message: "",
            error: "",
            image: "",
            avatarKey: 0,
            label: "",
        };
    },
    created() {
        this.fetchWithdrawal(this.$route.params.id);
    },
    watch: {},
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
        style.href = this.$root.basepath + "/css/line-awesome.min.css";
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
        ContentLoader,
        ListLoader,
    },
    methods: {
        fetchWithdrawal(id) {
            this.loading = true;
            this.form
                .get("/auth/withdrawals/" + id)
                .then((response) => {
                    this.loading = false;
                    this.withdrawal = response.data.data;
                    this.fetchAcoountDetails(this.withdrawal.user_id);
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
        fetchAcoountDetails(id) {
            this.loading = true;
            this.form
                .get(
                    "/auth/bankdetails/?user_id=" +
                        id +
                        "&payment_method=" +
                        this.withdrawal.payment_method
                )
                .then((response) => {
                    this.loading = false;
                    this.account = response.data.data.item[0];
                })
                .catch((error) => {
                    this.loading = false;
                    this.$root.alert("error", error.response.data.message);
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
        approveWithdrawal(id) {
            this.loading = true;
            if (this.form.image && this.form.image.size > 400000) {
                return this.$root.alert(
                    "error",
                    "The image size should not be greater than 400Kb"
                );
            }
            // this.form.pop = this.$refs.fileInput.files[0]
            this.form
                .post("/auth/confirm_withdrawal/" + id, {
                    transformRequest: [
                        function (data, headers) {
                            return objectToFormData(data);
                        },
                    ],
                })
                .then((response) => {
                    this.fetchWithdrawal(this.$route.params.id);
                    this.loading = false;
                    console.log(response.data.message);
                    this.$root.alert("success", response.data.message);
                    this.$refs.subscription_modal_button.click();
                    this.$refs.subscription_modal_button2.click();
                    this.$root.scrollUp();
                })
                .catch((error) => {
                    this.loading = false;
                    this.$root.alert("error", error.response.data.message);
                    if (error.response.status == 422) {
                        this.error = error.response.data.error.pop;
                    } else {
                        this.error = error.response.data.message;
                    }
                    console.log(error, error.response);
                    this.form.reset();
                });
        },
        updatePic() {
            this.form.pop = this.$refs.fileInput.files[0];
        },
        updateLabel() {
            this.label = this.$refs.fileInput.files[0].name;
            this.form.pop = this.$refs.fileInput.files[0];
            if (this.$refs.fileInput.files[0].size > 400000) {
                this.$root.alert(
                    "warning",
                    " File size should be less than 400Kb."
                );
            }
        },
    },
};
</script>
<style scoped></style>
