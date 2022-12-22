<template>
    <div class="page-wrapper default-version">
        <AdminDashboardSidebar></AdminDashboardSidebar>
        <AdminDashboardHeader></AdminDashboardHeader>
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="row align-items-center mb-30 justify-content-between">
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">Manage Plan</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                        <a :href="$root.basepath + '/admin/packages/add'"
                            class="btn btn--primary box--shadow1 text--small"><i class="fa fa-fw fa-plus"></i>Add
                            New</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-radius--10">
                            <div class="card-body p-0">
                                <div class="table-responsive--md table-responsive">
                                    <table class="table table--light style--two">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">
                                                    Invest Limit
                                                </th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-if="packages" v-for="item in packages">
                                                <td data-label="Name">
                                                    {{item.name}}
                                                </td>
                                                <td data-label="Invest Limit">
                                                    <span class="price text--dark d-block">{{'$' +
                                                    $root.normalNumeral(item.min_deposit) + ' - $' +
                                                    (item.max_deposit >= 1000000 ? 'Unlimited' :
                                                    $root.normalNumeral(item.max_deposit)) }}</span>
                                                </td>
                                                <td data-label="Status">
                                                    <span
                                                        :class="{ badge: true, 'badge--success':item.status, 'badge--danger':!item.status}">{{item.status
                                                        ? 'Active' : 'Disabled'}}</span>
                                                </td>
                                                <td data-label="Action">
                                                    <a :href=" $root.basepath + '/admin/packages/edit/' + item.id"
                                                        class="icon-btn"><i class="fas fa-pen"></i></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <!-- table end -->
                                </div>
                            </div>
                            <div class="card-footer py-4">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-end mb-0">
                                        <ul class="pagination justify-content-end mb-0">
                                            <li v-if="paging.current_page > 1" class="page-item">
                                                <a class="page-link" @click.prevent="
                                                    getUsers(
                                                        --paging.current_page
                                                    )
                                                ">
                                                    <i class="fa fa-angle-left"></i>
                                                    <span class="sr-only">Prev</span>
                                                </a>
                                            </li>
                                            <li v-if="paging" v-for="num in paging.total_pages" :class="{
                                                'page-item': true,
                                                active:
                                                    num == paging.current_page,
                                            }">
                                                <a class="page-link" @click.prevent="getUsers(num)">{{ num }}</a>
                                            </li>
                                            <li v-if="
                                                paging.total_pages !=
                                                paging.current_page
                                            " class="page-item">
                                                <a class="page-link" @click.prevent="
                                                    getUsers(
                                                        ++paging.current_page
                                                    )
                                                ">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- card end -->
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
export default {
    data() {
        return {
            form: new Form({}),
            loading: false,
            packages: "",
            paging: "",
        };
    },
    watch: {},
    created() {
        this.fetchPackages();
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
        fetchPackages() {
            this.loading = true;
            this.form.get("/auth/packages/")
                .then((response) => {
                    this.loading = false;
                    this.packages = response.data.data.item;
                    this.paging = response.data.data.pagination
                })
                .catch((error) => {
                    this.loading = false;
                    this.$root.alert("error", error.response.data.message);
                    console.log(error);
                });
        },
    },
};
</script>
