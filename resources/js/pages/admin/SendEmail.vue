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
                        <h6 class="page-title">Send Email To: {{user.names}}</h6>
                    </div>
                    <div
                        class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3"
                    ></div>
                </div>

                <div class="row mb-none-30">
                    <div class="col-xl-12">
                        <div class="card">
                            <form
                                action=""
                                method="POST"
                                @submit.prevent ="sendEmail()"
                            >
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label class="font-weight-bold"
                                                >Subject
                                                <span class="text-danger"
                                                    >*</span
                                                ></label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Email subject"
                                                v-model="email_form.subject"
                                                required
                                            />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="font-weight-bold"
                                                >Message
                                                <span class="text-danger"
                                                    >*</span
                                                ></label
                                            > <VueTrix 
                                            :localStorage="true"
                                            inputId="editor1" 
                                            autofocus
                                            class="form-control"
                                            rows="10"
                                            v-model="email_form.message" 
                                            placeholder="Write your message"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="form-row">
                                        <div
                                            class="form-group col-md-12 text-center"
                                        >
                                        <VueLoadingButton
                                                    class="btn btn-block btn--primary mr-2"
													type = "submit"
                                                    :loading="email_form.busy"
                                                    aria-label="Send Email"
													:styled="false"
                                                >
												Send Email</VueLoadingButton>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
import VueLoadingButton from "vue-loading-button";
import VueTrix from "vue-trix";
export default {
    data() {
        return {
            email_form: new Form({
                emails: [],
                subject: '',
                message: '',  
            }),
            user: '',
            loading:false,
        }
    },
     watch: {
        user() {
			this.email_form.emails.push(this.user.email)
        },
    },
    created() {
        this.fetchUser(this.$route.params.id);
    },
    components: {
        VueLoadingButton,
        VueTrix,
    },
    beforeDestroy() {
        if (this.email_form.subject == undefined) {
        this.email_form.message = ""
      }  
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
        sendEmail() {
            this.loading = true;
            this.email_form.post("/auth/email")
                .then((response) => {
                    this.loading = false;
                    this.$root.alert("success", response.data.message);
                    this.email_form.subject = ""
                })
                .catch((error) => {
                    this.loading = false;
                    this.$root.alert("success", error.response.data.message);
                   
                });
        },
    }
}
</script>
