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
                            <h6 class="page-title">Manage Users</h6>
                        </div>
                        <div
                            class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3"
                        >
                            <form
                                action="https://script.viserlab.com/hyiplab/demo/admin/users/all/search"
                                method="GET"
                                class="form-inline float-sm-right bg--white"
                            >
                                <div class="input-group has_append">
                                    <input
                                        type="text"
                                        name="search"
                                        class="form-control"
                                        placeholder="Username or email"
                                        value=""
                                    />
                                    <div class="input-group-append">
                                        <button
                                            class="btn btn--primary"
                                            type="submit"
                                        >
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
                                    <div
                                        class="table-responsive--md table-responsive"
                                    >
                                        <table
                                            class="table table--light style--two"
                                        >
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Email-Phone</th>
                                                    <th>Country</th>
                                                    <th>Joined At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-if = "users" v-for="user in users">
                                                    <td data-label="User">
                                                        <span
                                                            class="font-weight-bold"
                                                            >{{user.names}}</span
                                                        >
                                                        <br />
                                                        <span class="small">
                                                            <a
                                                                href="https://script.viserlab.com/hyiplab/demo/admin/user/detail/5124"
                                                                ><span>@</span
                                                                >{{user.username}}</a
                                                            >
                                                        </span>
                                                    </td>
                                                    <td
                                                        data-label="Email-Phone"
                                                    >
                                                       {{user.email}} <br />[Mobile
                                                        Number Protected For
                                                        Demo]
                                                    </td>
                                                    <td data-label="Country">
                                                        <span
                                                            class="font-weight-bold"
                                                            data-toggle="tooltip"
                                                            >Egypt</span
                                                        >
                                                    </td>
                                                    <td data-label="Joined At">
                                                        11 Aug, 2022 09:59 PM
                                                        <br />
                                                        3 hours ago
                                                    </td>
                                                    <td data-label="Action">
                                                        <a
                                                            href="https://script.viserlab.com/hyiplab/demo/admin/user/detail/5124"
                                                            class="icon-btn"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            data-original-title="Details"
                                                        >
                                                            <i
                                                                class="las la-desktop text--shadow"
                                                            ></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                           
                                            </tbody>
                                        </table>
                                        <!-- table end -->
                                    </div>
                                </div>
                                <div class="card-footer py-4">
                                    <nav aria-label="...">
                                        <ul
                                            class="pagination justify-content-end mb-0"
                                        >
                                            <li class="page-item active">
                                                <a
                                                    class="page-link"
                                                    href="javascript:void(0)"
                                                    >1</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=2"
                                                    >2</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=3"
                                                    >3</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=4"
                                                    >4</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=5"
                                                    >5</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=6"
                                                    >6</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=7"
                                                    >7</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=8"
                                                    >8</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=9"
                                                    >9</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=10"
                                                    >10</a
                                                >
                                            </li>
                                            <li class="page-item disabled">
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
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=251"
                                                    >251</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=252"
                                                    >252</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="https://script.viserlab.com/hyiplab/demo/admin/users?page=2"
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
                </div>
                <!-- bodywrapper__inner end -->
            </div>
         
    </div>
</template>
<script>
export default {
    data() {
        return {
            form: new Form({
                admin_wallet: null,
                admin_pm: null,
                id: null,
                user_level_id: null,
            }),
            addUserkey: 0,
            key: 0,
            role: "",
            pageLimit: 5,
            currentPage: 1,
            search: "",
            error: null,
            message: null,
            users: [],
            activeUsers: 0,
            admins: 0,
            selectedUser: [],
            search: "",
            userLevelTitle:
                this.selectedUser && this.selectedUser.isAdmin == true
                    ? "Make User"
                    : "Make Admin",
        };
    },
    watch: {
        users() {
            this.users.data.forEach((user, index) => {
                if (user.totalActiveTransaction > 0) {
                    this.activeUsers++;
                }
            });
            this.admins = [];
            this.users.data.forEach((user, index) => {
                if (user.isAdmin == true) {
                    this.admins++;
                }
            });
        },
        role() {
            this.getUsers(1);
        },
        pageLimit() {
            this.getUsers(1);
        },

        selectedUser() {
            if (this.selectedUser.isAdmin == true) {
                this.userLevelTitle = "Make User";
            } else {
                this.userLevelTitle = "Make Admin";
            }
        },
        search() {
            this.getUsers(1);
            // this.getSelectedUser()
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
        this.getUsers(this.currentPage);
    },
    methods: {
        getUsers(page, url = null) {
            this.currentPage = page;
            this.$root.loader("show");
            var searchQuery = this.search ? "&username=" + this.search : "";
            var roleQuery = this.role ? "&user_level_id=" + this.role : "";
            url = url ? url : "/auth/users?page=" + page;
            this.form
                .get(
                    url +
                        "&pageSize=" +
                        this.pageLimit +
                        searchQuery +
                        roleQuery
                )
                .then((response) => {
                    this.users = response.data.data.item;
                    this.key++;
                    // this.getSelectedUser()
                    this.$root.loader("hide");
                })
                .catch((error) => {
                    this.$root.loader("hide");
                    console.log(error);
                });
        },
        getSelectedUser() {
            if (this.search && this.users) {
                this.selectedUser = this.users.filter((item) => {
                    if (
                        item.username.toLowerCase() == this.search.toLowerCase()
                    ) {
                        this.form.fill(item);
                        return true;
                    }
                });
            }
        },
        updateData() {
            this.form
                .put("/auth/users/" + this.form.id)
                .then((response) => {
                    this.$root.alert("success", " ", "update successful");
                    this.getUsers();
                })
                .catch((error) => {
                    this.$root.alert("error", " ", "update not successful");
                    console.log(error.response);
                });
        },
        userLevel(user) {
            // / var form = new Form({ user_level_id: '' })
            if (user.isAdmin) {
                this.form.user_level_id = 2;
                this.form
                    .put("/auth/users/" + this.form.id)
                    .then((response) => {
                        this.$root.alert(
                            "success",
                            " ",
                            "update user-level to user successful"
                        );
                        this.userLevelTitle = "Make Admin";
                        this.getUsers();
                    })
                    .catch((error) => {
                        this.$root.alert(
                            "error",
                            " ",
                            "update user-level to user not successful"
                        );
                        console.log(error.response);
                    });
            } else {
                this.form.user_level_id = 1;
                this.form
                    .put("/auth/users/" + this.form.id)
                    .then((response) => {
                        this.$root.alert(
                            "success",
                            " ",
                            "update user-level to admin successful"
                        );
                        this.userLevelTitle = "Make User";
                        this.getUsers();
                    })
                    .catch((error) => {
                        this.$root.alert(
                            "error",
                            " ",
                            "update user-level to admin not successful"
                        );
                        console.log(error.response);
                    });
            }
        },
        sendEmail($user) {
            this.$root.mailUser = $user;
        },
        resetEmailModal() {
            this.$root.mailUser = null;
        },
        pause(user) {
            var user = this.selectedUser[0];
            this.$swal({
                title: `Do you want to ${
                    user.withdraw_request
                        ? "stop the pausing withdrawal process"
                        : "start the pausing withdrawal process"
                } for  ${user.username}?`,
                text: "You can revert this changes in future",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#38c172",
                cancelButtonColor: "#d33",
                confirmButtonText: `Yes,  ${
                    user.withdraw_request ? "stop" : "start"
                } pausing withdrawal Process`,
            }).then((result) => {
                if (result.value == true) {
                    this.processing(true);
                    if (user.withdraw_request) {
                        this.form
                            .get("/auth/cancelWithdrawalRequest/" + user.id)
                            .then((response) => {
                                this.getUsers();
                                this.$root.alert(
                                    "success",
                                    " ",
                                    response.data.message
                                );
                                this.processing(false);
                            })
                            .catch((error) => {
                                this.$root.alert(
                                    "error",
                                    " ",
                                    "pausing withdrawal process failed " +
                                        error.response.data.message !=
                                        undefined
                                        ? error.response.data.message
                                        : " "
                                );
                                this.processing(false);
                                console.log(error.response);
                            });
                    } else {
                        this.form
                            .get("/auth/confirmWithdrawalRequest/" + user.id)
                            .then((response) => {
                                this.getUsers();
                                this.$root.alert(
                                    "success",
                                    " ",
                                    response.data.message
                                );
                                this.processing(false);
                            })
                            .catch((error) => {
                                this.$root.alert(
                                    "error",
                                    " ",
                                    "pausing withdrawal process failed " +
                                        error.response.data.message !=
                                        undefined
                                        ? error.response.data.message
                                        : " "
                                );
                                this.processing(false);
                                console.log(error.response);
                            });
                    }
                } else {
                    this.$root.alert(
                        "info",
                        " ",
                        `Pausing withdrawal Process  ${
                            user.withdraw_request ? " started" : " cancelled"
                        } `
                    );
                }
                this.getUsers();
            });
        },
        processing(status) {
            if (status) {
                this.$refs.pause[0].innerText = "Processing...";
                this.$refs.pause[0].disabled = true;
            } else {
                this.$refs.pause[0].innerText = "Toggle Pause Withdrawal";
                this.$refs.pause[0].disabled = false;
            }
        },
    },
};
</script>
