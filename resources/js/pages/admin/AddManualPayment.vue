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
                        <h6 class="page-title">New Manual Deposit Method</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                        <a
                            :href="$root.basepath + '/admin/payment/manual'"
                            class="btn btn-sm btn--primary box--shadow1 text--small"
                            ><i class="fa fa-fw la-backward"></i> Go Back
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form
                                @submit.prevent="addPaymentMethod()"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                <div class="form-group">
                                    <div
                                        class="alert alert-danger m-3"
                                        v-if="has_error"
                                    >
                                        <p
                                            v-if="!unknown_error && errors"
                                            class="text-center m-3"
                                        >
                                            You have some errors in your form
                                        </p>
                                        <p
                                            class="m-3 small"
                                            v-if="unknown_error"
                                        >
                                            {{ unknown_error }}
                                        </p>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="payment-method-item">
                                        <div
                                            class="payment-method-header d-flex flex-wrap"
                                        >
                                            <div class="thumb">
                                                <p
                                                    v-if="errors.image"
                                                    v-for="error in errors.image"
                                                    class="text-danger m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                                <div class="avatar-preview">
                                                    <div
                                                        class="profilePicPreview"
                                                        :style="{
                                                            'background-image':
                                                                'url(' +
                                                                $root.basepath +
                                                                '/assets/images/undefined.jpg )',
                                                        }"
                                                    ></div>
                                                </div>
                                                <div class="avatar-edit">
                                                    <input
                                                        ref="image"
                                                        type="file"
                                                        @change="updatePic"
                                                        class="profilePicUpload"
                                                        id="image"
                                                        accept=".png, .jpg, .jpeg"
                                                    />
                                                    <label
                                                        for="image"
                                                        class="bg-primary"
                                                        ><i
                                                            class="fa fa-pencil-alt"
                                                        ></i
                                                    ></label>
                                                </div>
                                            </div>

                                            <div class="content">
                                                <div
                                                    class="row mt-4 mb-none-15"
                                                >
                                                    <div
                                                        class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-15"
                                                    >
                                                        <div
                                                            class="input-group"
                                                        >
                                                            <label
                                                                class="w-100 font-weight-bold"
                                                                >Gateway Name
                                                                <span
                                                                    class="text-danger"
                                                                    >*</span
                                                                ></label
                                                            >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Method Name"
                                                                v-model="
                                                                    payment_form.name
                                                                "
                                                            />
                                                        </div>
                                                        <p
                                                            v-if="errors.name"
                                                            v-for="error in errors.name"
                                                            class="text-danger m-0 p-2 small"
                                                        >
                                                            {{ error }}
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-15"
                                                    >
                                                        <div
                                                            class="input-group"
                                                        >
                                                            <label
                                                                class="w-100 font-weight-bold"
                                                                >Currency
                                                                <span
                                                                    class="text-danger"
                                                                    >*</span
                                                                ></label
                                                            >
                                                            <input
                                                                type="text"
                                                                readonly
                                                                name="currency"
                                                                class="form-control border-radius-5"
                                                                value="USD"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-15"
                                                    >
                                                        <div
                                                            class="input-group"
                                                        >
                                                            <label
                                                                class="w-100 font-weight-bold"
                                                                >Type<span
                                                                    class="text-danger"
                                                                    >*</span
                                                                ></label
                                                            >
                                                            <select
                                                                v-model="
                                                                    payment_form.type
                                                                "
                                                                class="form-control border-radius-5"
                                                                required
                                                            >
                                                                <option
                                                                    value="crypto"
                                                                >
                                                                    Cryptocurrency
                                                                </option>
                                                                <option
                                                                    value="fiat"
                                                                >
                                                                    Fiat
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-15"
                                                    >
                                                        <div
                                                            class="input-group"
                                                        >
                                                            <label
                                                                class="w-100 font-weight-bold"
                                                                >Display<span
                                                                    class="text-danger"
                                                                    >*</span
                                                                ></label
                                                            >
                                                            <select
                                                                v-model="
                                                                    payment_form.show_on
                                                                "
                                                                class="form-control border-radius-5"
                                                                required
                                                            >
                                                                <option
                                                                    value="deposit"
                                                                >
                                                                    User Deposit
                                                                    Page
                                                                </option>
                                                                <option
                                                                    value="withdrawal"
                                                                >
                                                                    User
                                                                    Withdrawal
                                                                    Page
                                                                </option>
                                                                <option
                                                                    value="both"
                                                                >
                                                                    Both Deposit
                                                                    and
                                                                    Withdrawal
                                                                    Page
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-15"
                                                    >
                                                        <div
                                                            class="input-group"
                                                        >
                                                            <label
                                                                title="Payment methods will be sorted by rank number in descending order"
                                                                class="w-100 font-weight-bold"
                                                                >Display Rank
                                                                <span
                                                                    class="text-danger"
                                                                    >*</span
                                                                ></label
                                                            >
                                                            <input
                                                                title="Payment methods will be sorted by rank number in descending order"
                                                                type="number"
                                                                v-model="
                                                                    payment_form.rank
                                                                "
                                                                class="form-control border-radius-5"
                                                            />
                                                        </div>
                                                        <p
                                                            v-if="errors.rank"
                                                            v-for="error in errors.rank"
                                                            class="text-danger m-0 p-2 small"
                                                        >
                                                            {{ error }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            aria-readonly="true"
                                            class="payment-method-body disabled"
                                        >
                                            <div class="row">
                                                <div
                                                    class="col-sm-12 col-md-6 col-lg-6 col-xl-6"
                                                >
                                                    <div
                                                        class="card border--primary mt-3"
                                                    >
                                                        <h5
                                                            class="card-header bg--primary"
                                                        >
                                                            Range
                                                        </h5>
                                                        <div class="card-body">
                                                            <div
                                                                class="input-group mb-3"
                                                            >
                                                                <label
                                                                    class="w-100 font-weight-bold"
                                                                    >Minimum
                                                                    Amount
                                                                    <span
                                                                        class="text-danger"
                                                                        >*</span
                                                                    ></label
                                                                >
                                                                <div
                                                                    class="input-group-prepend"
                                                                >
                                                                    <div
                                                                        class="input-group-text"
                                                                    >
                                                                        USD
                                                                    </div>
                                                                </div>
                                                                <input
                                                                    type="text"
                                                                    readonly
                                                                    class="form-control disabled"
                                                                    name="min_limit"
                                                                    placeholder="0"
                                                                    value=""
                                                                />
                                                            </div>
                                                            <div
                                                                class="input-group"
                                                            >
                                                                <label
                                                                    class="w-100 font-weight-bold"
                                                                    >Maximum
                                                                    Amount
                                                                    <span
                                                                        class="text-danger"
                                                                        >*</span
                                                                    ></label
                                                                >
                                                                <div
                                                                    class="input-group-prepend"
                                                                >
                                                                    <div
                                                                        class="input-group-text"
                                                                    >
                                                                        USD
                                                                    </div>
                                                                </div>
                                                                <input
                                                                    type="text"
                                                                    readonly
                                                                    class="form-control disabled"
                                                                    placeholder="0"
                                                                    name="max_limit"
                                                                    value=""
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-sm-12 col-md-6 col-lg-6 col-xl-6"
                                                >
                                                    <div
                                                        class="card border--primary mt-3"
                                                    >
                                                        <h5
                                                            class="card-header bg--primary"
                                                        >
                                                            Charge
                                                        </h5>
                                                        <div class="card-body">
                                                            <div
                                                                class="input-group mb-3"
                                                            >
                                                                <label
                                                                    class="w-100 font-weight-bold"
                                                                    >Fixed
                                                                    Charge
                                                                    <span
                                                                        class="text-danger"
                                                                        >*</span
                                                                    ></label
                                                                >
                                                                <div
                                                                    class="input-group-prepend"
                                                                >
                                                                    <div
                                                                        class="input-group-text"
                                                                    >
                                                                        USD
                                                                    </div>
                                                                </div>
                                                                <input
                                                                    type="text"
                                                                    readonly
                                                                    class="form-control disabled"
                                                                    placeholder="0"
                                                                    name="fixed_charge"
                                                                    value=""
                                                                />
                                                            </div>
                                                            <div
                                                                class="input-group"
                                                            >
                                                                <label
                                                                    class="w-100 font-weight-bold"
                                                                    >Percent
                                                                    Charge
                                                                    <span
                                                                        class="text-danger"
                                                                        >*</span
                                                                    ></label
                                                                >
                                                                <div
                                                                    class="input-group-prepend"
                                                                >
                                                                    <div
                                                                        class="input-group-text"
                                                                    >
                                                                        %
                                                                    </div>
                                                                </div>
                                                                <input
                                                                    type="text"
                                                                    readonly
                                                                    class="form-control disabled"
                                                                    placeholder="0"
                                                                    name="percent_charge"
                                                                    value=""
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="col-sm-12 col-md-12 col-lg-12 col-xl-12"
                                                >
                                                    <div
                                                        class="card border--dark mt-3"
                                                    >
                                                        <h5
                                                            class="card-header bg--dark"
                                                        >
                                                            Deposit Instruction
                                                        </h5>
                                                        <div class="card-body">
                                                            <div
                                                                class="form-group"
                                                            >
                                                                <VueTrix
                                                                    :localStorage="
                                                                        false
                                                                    "
                                                                    inputId="editor1"
                                                                    autofocus
                                                                    class="form-control border-radius-5 nicEdit"
                                                                    rows="8"
                                                                    name="instruction"
                                                                    disabledEditor
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div
                                                        class="card border--dark mt-3"
                                                    >
                                                        <h5
                                                            class="card-header bg--dark text-white"
                                                        >
                                                            User data
                                                            <button
                                                                disabled
                                                                type="button"
                                                                class="disabled btn btn-sm btn-outline-light float-right addUserData"
                                                            >
                                                                <i
                                                                    class="fa fa-fw la-plus"
                                                                ></i
                                                                >Add New
                                                            </button>
                                                        </h5>

                                                        <div class="card-body">
                                                            <div
                                                                class="row addedField"
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <VueLoadingButton
                                        class="btn btn--primary btn-block"
                                        type="submit"
                                        :loading="payment_form.busy"
                                        aria-label="Save Method"
                                        :styled="false"
                                    >
                                        Save Method</VueLoadingButton
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
import VueTrix from "vue-trix";
export default {
    data() {
        return {
            payment_form: new Form({
                name: "",
                show_on: "both",
                type: "crypto",
                image: "",
                rank: ++this.$root.payments.length,
            }),
            loading: false,
            has_error: false,
            error: "",
            errors: {},
            unknown_error: "",
        };
    },
    watch: {},
    created() {},
    components: {
        VueLoadingButton,
        VueTrix,
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
    methods: {
        addPaymentMethod() {
            this.loading = true;
            this.has_error = false;
            this.errors = "";
            this.error = "";
            this.unknown_error =""
            if (this.$refs.image.files[0] && this.$refs.image.files[0].size > 4000000) {
                return this.$root.alert("error", " ","image size is too large. make sure it's less than 4mb"
                );
            }
            this.payment_form
                .post("/auth/paymentmethods",  {
                    transformRequest: [
                        function (data, headers) {
                            return objectToFormData(data);
                        },
                    ],
                })
                .then((response) => {
                    this.loading = false;
                    this.$root.alert("success", response.data.message);
                    this.payment_form.reset()
                    this.$root.getPayments();
                    this.$root.scrollUp()
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
                    this.$root.scrollUp()
                });

        },
        changeProfilePicture() {
            this.$root.loader("show");
            this.avatar_error = "";
            let data = new FormData();
            let file = this.$refs.fileInput.files[0];
            let form = new Form();
            form.image = file;
            if (file) {
                if (this.$refs.fileInput.files[0].size > 4000000) {
                    this.$root.loader("hide");
                    return this.$root.alert(
                        "error",
                        " ",
                        " File size is too large."
                    );
                }
                form._method = "PUT";
                form.submit(
                    "post",
                    "/auth/user/image/" + this.$auth.user().id,
                    {
                        transformRequest: [
                            function (data, headers) {
                                return objectToFormData(data);
                            },
                        ],
                    }
                )
                    .then((response) => {
                        this.$root.loader("hide");
                        this.$auth.fetch();
                        this.$root.alert("success", " ", response.data.message);
                    })
                    .catch((error) => {
                        this.$root.loader("hide");
                        if (error.response.status == 422) {
                            this.avatar_error = error.response.data.error.image;
                        } else {
                            this.avatar_error = error.response.data.message;
                        }
                        console.log(error, error.response);
                    });
            } else {
                this.$root.loader("hide");
                this.$root.alert("info", " ", "No file choosen.");
            }
            this.avatarKey++;
        },
        updatePic() {
            payment_form.image = this.$refs.image.files[0];
        },
        updateLabel() {
            this.label = this.$refs.fileInput.files[0].name;
            if (this.$refs.fileInput.files[0].size > 4000000) {
                this.$root.alert("warning", " ", " File size is too large.");
            }
        },
    },
};
</script>
