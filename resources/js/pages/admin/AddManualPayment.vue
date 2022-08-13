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
                            href="https://script.viserlab.com/hyiplab/demo/admin/deposit/gateway/manual"
                            class="btn btn-sm btn--primary box--shadow1 text--small"
                            ><i class="la la-fw la-backward"></i> Go Back
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form
                                action="https://script.viserlab.com/hyiplab/demo/admin/deposit/gateway/manual/new"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                <input
                                    type="hidden"
                                    name="_token"
                                    value="aDVW0n1TMZAu54ecSR89YzLyNLjSoVoiHjiqrqrr"
                                />
                                <div class="card-body">
                                    <div class="payment-method-item">
                                        <div
                                            class="payment-method-header d-flex flex-wrap"
                                        >
                                            <div class="thumb">
                                                <div class="avatar-preview">
                                                    <div
                                                        class="profilePicPreview"
                                                        style="
                                                            background-image: url('https://script.viserlab.com/hyiplab/demo/placeholder-image/undefined');
                                                        "
                                                    ></div>
                                                </div>
                                                <div class="avatar-edit">
                                                    <input
                                                        type="file"
                                                        name="image"
                                                        class="profilePicUpload"
                                                        id="image"
                                                        accept=".png, .jpg, .jpeg"
                                                    />
                                                    <label
                                                        for="image"
                                                        class="bg-primary"
                                                        ><i
                                                            class="la la-pencil"
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
                                                                name="name"
                                                                value=""
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
                                                                >Currency
                                                                <span
                                                                    class="text-danger"
                                                                    >*</span
                                                                ></label
                                                            >
                                                            <input
                                                                type="text"
                                                                name="currency"
                                                                class="form-control border-radius-5"
                                                                value=""
                                                            />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-15"
                                                    >
                                                        <label
                                                            class="w-100 font-weight-bold"
                                                            >Rate
                                                            <span
                                                                class="text-danger"
                                                                >*</span
                                                            ></label
                                                        >

                                                        <div
                                                            class="input-group has_append"
                                                        >
                                                            <div
                                                                class="input-group-prepend"
                                                            >
                                                                <div
                                                                    class="input-group-text"
                                                                >
                                                                    1 USD =
                                                                </div>
                                                            </div>
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="0"
                                                                name="rate"
                                                                value=""
                                                            />
                                                            <div
                                                                class="input-group-append"
                                                            >
                                                                <div
                                                                    class="input-group-text"
                                                                >
                                                                    <span
                                                                        class="currency_symbol"
                                                                    ></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payment-method-body">
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
                                                                    class="form-control"
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
                                                                    class="form-control"
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
                                                                    class="form-control"
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
                                                                    class="form-control"
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
                                                                <textarea
                                                                    rows="8"
                                                                    class="form-control border-radius-5 nicEdit"
                                                                    name="instruction"
                                                                ></textarea>
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
                                                                type="button"
                                                                class="btn btn-sm btn-outline-light float-right addUserData"
                                                            >
                                                                <i
                                                                    class="la la-fw la-plus"
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
                                    <button
                                        type="submit"
                                        class="btn btn--primary btn-block"
                                    >
                                        Save Method
                                    </button>
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
export default {
    data() {
        return {
            payment_form: new Form({
                subject: '',
                message: '',  
            }),
            loading:false,
        }
    },
    watch: {
      
    },
    created() {
  
    },
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
        fetchUser(id) {
            this.loading = true;
            var form = new Form()
            form.get("/auth/users?id=" + id)
                .then((response) => {
                    this.loading = false;
                    this.user = response.data.data.item[0];
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
      
    }
}
</script>
