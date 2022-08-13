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
                        <h6 class="page-title">Manual Deposit Methods</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                        <a
                            class="btn btn-sm btn--primary box--shadow1 text--small"
                            :href="$root.basepath + '/admin/payment/new'"
                            ><i class="fa fa-fw fa-plus"></i>Add New</a
                        >
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-radius--10">
                            <div class="card-body p-0">
                                <div
                                    class="table-responsive--md"
                                >
                                <div class = "row align-items-right mb-30 justify-content-between">
                                    <div class="col-lg-12 col-sm-12 text-sm-right mt-sm-0 mt-3">
                        <form
                            action=""
                            method="GET"
                            class="form-inline float-sm-right bg--white"
                        >
                            <div class="input-group has_append">
                                <input
                                    type="text"
                                    v-model="search"
                                    class="form-control"
                                    placeholder="name"
                                />
                                <div class="input-group-append">
                                    <button
                                        class="btn btn--primary"
                                        @click.prevent="searchItem"
                                    >
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                                </div>
                                    <table
                                        class="table table--light style--two"
                                    >
                                         <thead>
                                                <tr>
                                                    <th scope="col">Gateway</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                             <tr>
                                                    

                                                    
                                                   
                                                </tr>

                                            <tr
                                                v-if="payments"
                                                v-for="py in payments"
                                            >
                                                <td data-label="Gateway">
                                                        <div class="user">
                                                            <div class="thumb">
                                                                <img
                                                                   :src="$root.basepath + '/images/uploads/' + py.image"
                                                                    :alt="py.image"
                                                                />
                                                            </div>
                                                            <span class="name"
                                                                >{{py.name}}</span
                                                            >
                                                        </div>
                                                    </td>
                                                    <td data-label="Status">
                                                        <span
                                                            class="text--small badge font-weight-normal badge--success"
                                                            >Active</span
                                                        >
                                                    </td>
                                                     <td data-label="Action">
                                                        <a
                                                            :href="$root.basepath + '/admin/payment/manual/' + py.name"
                                                            class="icon-btn editGatewayBtn"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            data-original-title="Edit"
                                                        >
                                                            <i
                                                                class="la la-pencil"
                                                            ></i>
                                                        </a>

                                                        <a
                                                            data-toggle="modal"
                                                            href="#deactivateModal"
                                                            class="icon-btn bg--danger disabled ml-1 deactivateBtn"
                                                            data-code="1002"
                                                            data-name="Mobile Money"
                                                            data-original-title="Disable"
                                                            disabled
                                                        >
                                                            <i
                                                                class="la la-eye-slash"
                                                            ></i>
                                                        </a>
                                                    </td>
                                            </tr>
                                          
                                            <tr
                                                v-if="
                                                    payments.length === 0 
                                                "
                                            >
                                                <td
                                                    class="text-center"
                                                    data-label="Users"
                                                    colspan="5"
                                                >
                                                    <div class="icon">
                                                        <i
                                                            class="fa fa-search"
                                                        ></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="desciption">
                                                            <span class=""
                                                                >Nothing found
                                                                here</span
                                                            >
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- table end -->
                                </div>
                            </div>
                            <div
                                v-if="paging.total_pages > 1"
                                class="card-footer py-4"
                            >
                                <nav aria-label="...">
                                    <ul
                                        class="pagination justify-content-end mb-0"
                                    >
                                        <li
                                            v-if="paging.current_page > 1"
                                            class="page-item"
                                        >
                                            <a
                                                class="page-link"
                                                @click.prevent="
                                                    getUsers(
                                                        --paging.current_page
                                                    )
                                                "
                                            >
                                                <i class="fa fa-angle-left"></i>
                                                <span class="sr-only"
                                                    >Prev</span
                                                >
                                            </a>
                                        </li>
                                        <li
                                            v-for="num in paging.total_pages"
                                            :class="{
                                                'page-item': true,
                                                active:
                                                    num == paging.current_page,
                                            }"
                                        >
                                            <a
                                                class="page-link"
                                                @click.prevent="getUsers(num)"
                                                >{{ num }}</a
                                            >
                                        </li>
                                        <li
                                            v-if="
                                                paging.total_pages !=
                                                paging.current_page
                                            "
                                            class="page-item"
                                        >
                                            <a
                                                class="page-link"
                                                @click.prevent="
                                                    getUsers(
                                                        ++paging.current_page
                                                    )
                                                "
                                            >
                                                <i
                                                    class="fa fa-angle-right"
                                                ></i>
                                                <span class="sr-only"
                                                    >Next</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- card end -->
                    </div>
                </div>

                
                                      
                                       

                <div
                    id="activateModal"
                    class="modal fade"
                    tabindex="-1"
                    role="dialog"
                >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Payment Method Activation Confirmation
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
                                action="https://script.viserlab.com/hyiplab/demo/admin/deposit/gateway/manual/activate"
                                method="POST"
                            >
                                <input
                                    type="hidden"
                                    name="_token"
                                    value="3OYLUW4gdsDIxLUKILV0HTrClR3v0BiB4bV2cqdf"
                                />
                                <input type="hidden" name="code" />
                                <div class="modal-body">
                                    <p>
                                        Are you sure to activate
                                        <span
                                            class="font-weight-bold method-name"
                                        ></span>
                                        method?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn--dark"
                                        data-dismiss="modal"
                                    >
                                        Close
                                    </button>
                                    <button
                                        type="submit"
                                        class="btn btn--primary"
                                    >
                                        Activate
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div
                    id="deactivateModal"
                    class="modal fade"
                    tabindex="-1"
                    role="dialog"
                >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Payment Method Disable Confirmation
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
                                action="https://script.viserlab.com/hyiplab/demo/admin/deposit/gateway/manual/deactivate"
                                method="POST"
                            >
                                <input
                                    type="hidden"
                                    name="_token"
                                    value="3OYLUW4gdsDIxLUKILV0HTrClR3v0BiB4bV2cqdf"
                                />
                                <input type="hidden" name="code" />
                                <div class="modal-body">
                                    <p>
                                        Are you sure to disable
                                        <span
                                            class="font-weight-bold method-name"
                                        ></span>
                                        method?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn--dark"
                                        data-dismiss="modal"
                                    >
                                        Close
                                    </button>
                                    <button
                                        type="submit"
                                        class="btn btn--danger"
                                    >
                                        Disable
                                    </button>
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
export default {
    data() {
        return {
            pageLimit: 20,
            currentPage: 1,
            search: "",
            error: null,
            message: null,
            paging: [],
            payments: [],
        };
    },
    created() {
     this.payments = this.$root.payments   
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
        searchItem() {
            var data = [];
            if (this.search) {
                data = this.payments.filter((item) => {
                    return item.name
                        .toLowerCase()
                        .includes(this.search.toLowerCase());
                });
            } else {
                data = [];
            }
            this.payments = data;
        },
       
    }

};
</script>
