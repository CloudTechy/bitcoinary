<template>
    <div class="page-wrapper default-version">
        <AdminDashboardSidebar></AdminDashboardSidebar>
        <AdminDashboardHeader></AdminDashboardHeader>
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="row align-items-center mb-30 justify-content-between">
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">Subscription History</h6>
                        <i data-toggle="tooltip" data-original-title="refresh" @click="getDeposits(1)"
                            style="cursor: pointer" :class="{
                                'text--primary': true,
                                fa: true,
                                'fa-circle-notch': true,
                                'fa-spin': loading,
                            }"></i>
                    </div>

                    <div class="col-lg-6 col-sm-6 offset-6 text-sm-right mt-sm-0 mt-3">
                        <form action="" method="GET" class="form-inline float-sm-right bg--white">
                            <div class="input-group has_append">
                                <input type="text" v-model="search" class="form-control" placeholder="username" />
                                <div class="input-group-append">
                                    <button class="btn btn--primary" @click.prevent="searchTransactions">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
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
                                                <th>Gateway | Trx</th>
                                                <th>Initiated</th>
                                                <th>User</th>
                                                <th>Amount</th>
                                                <th>Turnover</th>
                                                <th>package</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-if="deposits && !loading" v-for="dp in deposits">
                                                <td data-label="Gateway | Trx">
                                                    <span class="font-weight-bold">
                                                        {{
                                                        dp.transaction
                                                        .payment_method
                                                        }}
                                                    </span>
                                                    <br />
                                                    <small>
                                                        {{
                                                        dp.transaction
                                                        .transaction_ref
                                                        ? dp.transaction
                                                        .id
                                                        : dp.transaction
                                                        .transaction_ref
                                                        }}
                                                    </small>
                                                </td>

                                                <td data-label="Date">
                                                    {{ dp.date }}<br />{{
                                                    dp.date_bad
                                                    }}
                                                </td>

                                                <td data-label="User">
                                                    <span class="font-weight-bold">{{ dp.owner }}</span>
                                                    <br />
                                                    <span class="small">
                                                        <a :href="
                                                            $root.basepath +
                                                            '/admin/users/' +
                                                            dp.user_id
                                                        "><span>@</span>{{
                                                            dp.username
                                                            }}</a>
                                                    </span>
                                                </td>

                                                <td data-label="Amount">
                                                    ${{
                                                    $root.normalNumeral(
                                                    dp.amount
                                                    )
                                                    }}
                                                    +
                                                    <span class="text-danger" data-toggle="tooltip"
                                                        data-original-title="charge">0
                                                    </span>
                                                    <br />
                                                    <strong data-toggle="tooltip"
                                                        data-original-title="Amount with charge">
                                                        {{
                                                        $root.normalNumeral(
                                                        dp.amount
                                                        )
                                                        }}
                                                        USD
                                                    </strong>
                                                </td>

                                                <td data-label="Turnover">
                                                    <span v-if="
                                                        dp.expiration
                                                    " class="font-weight-bold badge badge--success">{{
                                                        getDate(
                                                        dp.expiration
                                                        )
                                                        }}</span>
                                                    <span v-else
                                                        class="font-weight-bold badge badge--warning">Pending</span>
                                                </td>
                                                <td data-label="Package">
                                                    <span class="text-capitalize">{{ dp.name }}</span>
                                                </td>
                                                <td data-label="Status">
                                                    <span :class="{
                                                        badge: true,
                                                        'badge--warning':
                                                            !dp.active,
                                                        'badge--success':
                                                            dp.active,
                                                    }">{{
                                                        dp.active
                                                        ? "Active"
                                                        : "Pending"
                                                        }}</span>
                                                </td>
                                                <td data-label="Action">
                                                    <a :href="
                                                        $root.basepath +
                                                        '/admin/subscription/details/' +
                                                        dp.id
                                                    " class="icon-btn ml-1" data-toggle="tooltip" title=""
                                                        data-original-title="Detail">
                                                        <i class="la la-desktop"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr v-if="loading">
                                                <td colspan="7">
                                                    <!-- <content-loader></content-loader> -->
                                                    <list-loader></list-loader>
                                                </td>
                                            </tr>
                                            <tr v-if="
                                                deposits.length === 0 &&
                                                !loading
                                            ">
                                                <td class="text-center" data-label="deposits" colspan="8">
                                                    <div class="icon">
                                                        <i class="fa fa-search"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="desciption">
                                                            <span class="">Nothing found
                                                                here</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- table end -->
                                </div>
                            </div>
                            <div v-if="paging.total_pages > 1" class="card-footer py-4">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-end mb-0">
                                        <li v-if="paging.current_page > 1" class="page-item">
                                            <a class="page-link" @click.prevent="
                                                getDeposits(
                                                    --paging.current_page
                                                )
                                            ">
                                                <i class="fa fa-angle-left"></i>
                                                <span class="sr-only">Prev</span>
                                            </a>
                                        </li>
                                        <li v-for="num in paging.total_pages" :class="{
                                            'page-item': true,
                                            active:
                                                num == paging.current_page,
                                        }">
                                            <a class="page-link" @click.prevent="
                                                getDeposits(num)
                                            ">{{ num }}</a>
                                        </li>
                                        <!-- <li class="page-item disabled">
                                            <a
                                                class="page-link"
                                                href="javascript:void(0)"
                                            >
                                                ...
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a
                                                class="page-link"
                                                href="https://script.viserlab.com/hyiplab/demo/admin/deposits?page=251"
                                                >251</a
                                            >
                                        </li> -->
                                        <li v-if="
                                            paging.total_pages !=
                                            paging.current_page
                                        " class="page-item">
                                            <a class="page-link" @click.prevent="
                                                getDeposits(
                                                    ++paging.current_page
                                                )
                                            ">
                                                <i class="fa fa-angle-right"></i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
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
    </div>
</template>
<script>
import { ContentLoader, ListLoader } from "vue-content-loader";
import moment from "moment";

export default {
    data() {
        return {
            deposit_form: new Form({}),
            key: 0,
            pageLimit: 18,
            currentPage: 1,
            search: "",
            loading: false,
            error: null,
            message: null,
            deposits: [],
            paging: [],
        };
    },
    components: {
        ContentLoader,
        ListLoader,
    },
    watch: {
        pageLimit() {
            this.getDeposits(1);
        },
    },

    computed: {
        user() {
            return this.$auth.user();
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

    created() {
        this.getDeposits(this.currentPage);
    },
    methods: {
        getDeposits(page, url = null) {
            this.loading = true;
            this.currentPage = page;
            var searchQuery = this.search ? "&username=" + this.search : "";
            url = url ? url : "/auth/packageusers?page=" + page;
            this.deposit_form
                .get(url + "&pageSize=" + this.pageLimit + searchQuery)
                .then((response) => {
                    this.loading = false;
                    this.deposits = response.data.data.item;
                    this.paging = response.data.data.pagination;
                    this.key++;
                })
                .catch((error) => {
                    this.loading = false;
                    console.log(error);
                });
        },
        updateData() {
            this.form
                .put("/auth/users/" + this.form.id)
                .then((response) => {
                    this.$root.alert("success", " ", "update successful");
                    this.getDeposits();
                })
                .catch((error) => {
                    this.$root.alert("error", " ", "update not successful");
                    console.log(error.response);
                });
        },
        searchTransactions() {
            this.getDeposits(1);
        },
        getDate(to) {
            return moment().to(moment(to));
        },
    },
};
</script>
