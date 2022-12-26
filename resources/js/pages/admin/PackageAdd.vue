<template>
    <div class="page-wrapper default-version">
        <AdminDashboardSidebar></AdminDashboardSidebar>
        <AdminDashboardHeader></AdminDashboardHeader>
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div
                    class="row align-items-center mb-30 justify-content-between"
                >
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">Create New Plan</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                        <a
                            :href="$root.basepath + '/admin/packages'"
                            class="btn btn--primary box--shadow1 text--small"
                            ><i class="fa fa-fw fa-eye"></i>Plan List</a
                        >
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form
                                    method="post"
                                    class="form-horizontal"
                                    @submit.prevent="addPackage()"
                                >
                                    <div class="form-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label class="font-weight-bold"
                                                    >Plan Name</label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control form-control-lg"
                                                    name="name"
                                                    required
                                                    v-model="form.name"
                                                />
                                                <p
                                                    v-if="errors.name"
                                                    v-for="error in errors.name"
                                                    class="text-danger m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                            </div>

                                            <div
                                                class="form-group col-md-3 d-none"
                                            >
                                                <label class="font-weight-bold"
                                                    >Amount Type</label
                                                >
                                                <input
                                                    data-toggle="toggle"
                                                    data-size="large"
                                                    id="amount"
                                                    class="amount"
                                                    data-onstyle="-success"
                                                    data-offstyle="-info"
                                                    data-on="Fixed"
                                                    data-off="Range"
                                                    data-width="100%"
                                                    type="checkbox"
                                                    name="amount_type"
                                                />
                                            </div>

                                            <div
                                                class="form-group offman col-md-3"
                                            >
                                                <label class="font-weight-bold"
                                                    >Minimum Amount</label
                                                >
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control form-control-lg"
                                                        name="minimum"
                                                        required
                                                        v-model="
                                                            form.min_deposit
                                                        "
                                                    />
                                                    <div
                                                        class="input-group-append"
                                                    >
                                                        <div
                                                            class="input-group-text"
                                                        >
                                                            $
                                                        </div>
                                                    </div>
                                                </div>
                                                <p
                                                    v-if="errors.min_deposit"
                                                    v-for="error in errors.min_deposit"
                                                    class="text-danger m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                            </div>

                                            <div
                                                class="form-group offman col-md-3"
                                            >
                                                <label class="font-weight-bold"
                                                    >Maximum Amount</label
                                                >
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control form-control-lg"
                                                        name="maximum"
                                                        required
                                                        v-model="
                                                            form.max_deposit
                                                        "
                                                    />
                                                    <div
                                                        class="input-group-append"
                                                    >
                                                        <div
                                                            class="input-group-text"
                                                        >
                                                            $
                                                        </div>
                                                    </div>
                                                </div>
                                                <p
                                                    v-if="errors.max_deposit"
                                                    v-for="error in errors.max_deposit"
                                                    class="text-danger m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                            </div>

                                            <div
                                                class="form-group onman col-md-3 d-none"
                                            >
                                                <label class="font-weight-bold">
                                                    Amount</label
                                                >
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control form-control-lg"
                                                        name="amount"
                                                    />
                                                    <div
                                                        class="input-group-append"
                                                    >
                                                        <div
                                                            class="input-group-text"
                                                        >
                                                            $
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label class="font-weight-bold"
                                                    >Return /Interest</label
                                                >
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control form-control-lg"
                                                        name="interest"
                                                        required
                                                        v-model="form.roi"
                                                    />
                                                    <div
                                                        class="input-group-append height-47"
                                                    >
                                                        <div
                                                            class="input-group-text"
                                                        >
                                                            <select
                                                                name="interest_status"
                                                                class="form-control"
                                                                style="
                                                                    height: 35px !important;
                                                                "
                                                            >
                                                                <option
                                                                    value="%"
                                                                >
                                                                    %
                                                                </option>
                                                                <option
                                                                    value="$"
                                                                >
                                                                    $
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <p
                                                        v-if="errors.roi"
                                                        v-for="error in errors.roi"
                                                        class="text-danger m-0 p-2 small"
                                                    >
                                                        {{ error }}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label class="font-weight-bold"
                                                    >Every</label
                                                >
                                                <select
                                                    class="form-control form-control-lg"
                                                    name="times"
                                                    required
                                                    v-model="form.turnover"
                                                >
                                                    <option value="1">
                                                        Day
                                                    </option>
                                                    <option value="7">
                                                        Week
                                                    </option>
                                                    <option value="30">
                                                        Month
                                                    </option>
                                                    <option value="365">
                                                        Year
                                                    </option>
                                                </select>
                                                <p
                                                    v-if="errors.turnover"
                                                    v-for="error in errors.turnover"
                                                    class="text-danger m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                            </div>

                                            <!-- <div class="form-group col-md-3">
                                                <label class="font-weight-bold"
                                                    >Return For</label
                                                >
                                                <input
                                                    data-toggle="toggle"
                                                    data-size="large"
                                                    id="lifetime"
                                                    class="lifetime"
                                                    data-onstyle="-success"
                                                    data-offstyle="-danger"
                                                    data-on="Period"
                                                    data-off="Lifetime"
                                                    data-width="100%"
                                                    type="checkbox"
                                                    name="lifetime_status"
                                                />
                                            </div> -->

                                            <div
                                                class="form-group return col-md-3"
                                            >
                                                <label class="font-weight-bold"
                                                    >How Many Times</label
                                                >
                                                <input
                                                    type="number"
                                                    min="1"
                                                    class="form-control form-control-lg"
                                                    name="repeat_time"
                                                    required
                                                    v-model="
                                                        form.loop_termination
                                                    "
                                                />
                                                <p
                                                    v-if="
                                                        errors.loop_termination
                                                    "
                                                    v-for="error in errors.loop_termination"
                                                    class="text-danger m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label class="font-weight-bold"
                                                    >1st Level Referral
                                                    Commission</label
                                                >
                                                <div class="input-group">
                                                    <input
                                                        type="number"
                                                        class="form-control form-control-lg"
                                                        name="repeat_time"
                                                        step="0.01"
                                                        v-model="
                                                            form.first_level_ref_commission
                                                        "
                                                    />
                                                    <div
                                                        class="input-group-append height-47"
                                                    >
                                                        <div
                                                            class="input-group-text"
                                                        >
                                                            <select
                                                                name="interest_status"
                                                                class="form-control"
                                                                style="
                                                                    height: 35px !important;
                                                                "
                                                            >
                                                                <option
                                                                    value="%"
                                                                >
                                                                    %
                                                                </option>
                                                                <option
                                                                    value="$"
                                                                >
                                                                    $
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p
                                                    v-if="
                                                        errors.first_level_ref_commission
                                                    "
                                                    v-for="error in errors.first_level_ref_commission"
                                                    class="text-danger m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="font-weight-bold"
                                                    >2nd Level Referral
                                                    Commission</label
                                                >
                                                <div class="input-group">
                                                    <input
                                                        type="number"
                                                        class="form-control form-control-lg"
                                                        name="repeat_time"
                                                        step="0.01"
                                                        v-model="
                                                            form.second_level_ref_commission
                                                        "
                                                    />
                                                    <div
                                                        class="input-group-append height-47"
                                                    >
                                                        <div
                                                            class="input-group-text"
                                                        >
                                                            <select
                                                                name="interest_status"
                                                                class="form-control"
                                                                style="
                                                                    height: 35px !important;
                                                                "
                                                            >
                                                                <option
                                                                    value="%"
                                                                >
                                                                    %
                                                                </option>
                                                                <option
                                                                    value="$"
                                                                >
                                                                    $
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p
                                                    v-if="
                                                        errors.second_level_ref_commission
                                                    "
                                                    v-for="error in errors.second_level_ref_commission"
                                                    class="text-danger m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                            </div>

                                            <!-- <div
                                                class="form-group col-md-3"
                                                id="capitalBack"
                                            >
                                                <label class="font-weight-bold"
                                                    >Capital Back</label
                                                >
                                                <input
                                                    data-toggle="toggle"
                                                    data-size="large"
                                                    data-onstyle="-success"
                                                    data-offstyle="-danger"
                                                    data-on="Yes"
                                                    data-off="No"
                                                    data-width="100%"
                                                    type="checkbox"
                                                    name="capital_back_status"
                                                />
                                            </div> -->

                                            <div class="form-group col-md-3">
                                                <label class="font-weight-bold"
                                                    >Ranking</label
                                                >
                                                <input
                                                    type="number"
                                                    class="form-control form-control-lg"
                                                    name="rank"
                                                    required
                                                    v-model="form.rank"
                                                />
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="font-weight-bold"
                                                    >Status</label
                                                >
                                                <input
                                                    data-toggle="toggle"
                                                    data-size="large"
                                                    data-onstyle="-success"
                                                    data-offstyle="-danger"
                                                    data-on="Active"
                                                    data-off="Disable"
                                                    data-width="100%"
                                                    type="checkbox"
                                                    name="status"
                                                    :checked="form.status"
                                                />
                                            </div>

                                            <!-- <div class="form-group col-md-3">
                                                <label class="font-weight-bold"
                                                    >Featured</label
                                                >
                                                <input
                                                    data-toggle="toggle"
                                                    data-onstyle="-success"
                                                    data-offstyle="-danger"
                                                    data-size="large"
                                                    data-on="Yes"
                                                    data-off="No"
                                                    data-width="100%"
                                                    type="checkbox"
                                                    name="featured"
                                                />
                                            </div> -->
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <VueLoadingButton
                                                    class="btn btn--primary btn-block"
                                                    type="submit"
                                                    :loading="form.busy"
                                                    aria-label="Save"
                                                    :styled="false"
                                                >
                                                    Save</VueLoadingButton
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
export default {
    data() {
        return {
            form: new Form({
                name: "",
                roi: 0,
                min_deposit: 0,
                max_deposit: 0,
                turnover: "7",
                rank: 1,
                loop_termination: "1",
                first_level_ref_commission: 0,
                second_level_ref_commission: 0,
                status: true,
                amount_type:'range',
                return_for : 'period',
            }),
            loading: true,
            has_error: false,
            errors: "",
            error: "",
            unknown_error: "",
        };
    },
    watch: {},
    created() {},
    components: {
        VueLoadingButton,
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
    methods: {
        addPackage() {
            this.loading = true;
            this.has_error = false;
            this.errors = "";
            this.error = "";
            this.unknown_error = "";

            this.form
                .post("/auth/packages")
                .then((response) => {
                    this.loading = false;
                    this.$root.alert("success", response.data.message);
                    this.form.reset();
                    this.$root.scrollUp();
                })
                .catch((error) => {
                    this.loading = false;
                    this.$root.alert("error", error.response.data.message);
                    console.log(error);
                    this.has_error = true;
                    this.error = error.response.data.message;
                    this.errors =
                        typeof error.response.data.error == "string"
                            ? {}
                            : error.response.data.error;
                    this.unknown_error =
                        typeof error.response.data.error == "string"
                            ? error.response.data.error
                            : "";
                    this.$root.scrollUp();
                });
        },
    },
};
</script>
