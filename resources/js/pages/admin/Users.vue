<template>
    <main>
        <AdminDashboardHeader></AdminDashboardHeader>
        <AdminDashboardSidebar></AdminDashboardSidebar>
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <!-- users list start -->
                    <section class="app-user-list">
                        <!-- users filter start -->
                        <div class="card">
                            <h5 class="card-header">Search Filter</h5>
                            <div class="d-flex justify-content-between align-items-center mx-50 row pt-0 pb-2">
                                <div class="col-md-4 user_role"><select id="UserRole" v-model="role" class="form-select text-capitalize mb-md-0 mb-2">
                                        <option value=""> Select Role </option>
                                        <option value="administrator" class="text-capitalize">Admin</option>
                                        <option value="user" class="text-capitalize">User</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-datatable pt-0">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="d-flex justify-content-between align-items-center header-actions mx-1 row mt-75">
                                        <div class="col-sm-12 col-md-4 col-lg-6">
                                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select v-model="pageLimit" aria-controls="DataTables_Table_0" class="form-select">
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-8 col-lg-6 ps-xl-75 ps-0">
                                            <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end align-items-center flex-sm-nowrap flex-wrap me-1">
                                                <div class="me-1">
                                                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" v-model="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0"></label></div>
                                                </div>
                                                <div class="dt-buttons btn-group flex-wrap"><button class="btn add-new btn-primary mt-50" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#adminAddUserComponent"><span>Add New User</span></button> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table  :key = "key" class="user-list-table table dataTable no-footer dtr-column table-responsive" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1035px;">
                                        <thead class="table-light">
                                            <tr role="row">
                                                <th class="sorting_disabled" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 206px;" aria-label="User: activate to sort column ascending">User</th>
                                                <th class="sorting_disabled" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 245px;" aria-label="Email" aria-sort="descending">Email</th>
                                                <th class="sorting_disabled" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Role">Role</th>
                                                <th class="sorting_disabled" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 68px;" aria-label="Plan">Balance</th>
                                                <th class="sorting_disabled" tabindex="0"rowspan="1" colspan="1" style="width: 58px;" aria-label="Status">W/D Status</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63px;" aria-label="Actions">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody v-if = "users.data">
                                            <tr class="odd" v-for="user in users.data">
                                                <td>
                                                <div class="d-flex justify-content-left align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar  me-1"><img :src="$root.basepath + '/images/users/' + user.image" alt="Avatar" height="32" width="32"></div>
                                                    </div>
                                                    <div class="d-flex flex-column"><a href="app-user-view.html" class="user_name text-truncate"><span class="fw-bold text-capitalize">{{user.names}}</span></a><small class="emp_post text-muted text-lowercase">{{'@' + user.username}}</small></div>
                                                </div>
                                                </td>
                                                <td class="text-lowercase">{{user.email}}</td>
                                                <td class="text-lowercase">{{user.user_level}}</td>
                                                <td style="">{{$root.numeral(user.balance)}}</td>
                                                <td style=""><span class="badge rounded-pill badge-light-success" text-capitalized="">
                                                {{user.CanWithdraw}}</span></td>
                                                <td style="">
                                                    <div class="btn-group"><a class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg></a>
                                                        <div class="dropdown-menu dropdown-menu-end" style=""><a href="app-user-view.html" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-small-4 me-50">
                                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                                </svg>Details</a><a href="app-user-edit.html" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive font-small-4 me-50">
                                                                    <polyline points="21 8 21 21 3 21 3 8"></polyline>
                                                                    <rect x="1" y="3" width="22" height="5"></rect>
                                                                    <line x1="10" y1="12" x2="14" y2="12"></line>
                                                                </svg>Edit</a><a href="javascript:;" class="dropdown-item delete-record"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 font-small-4 me-50">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                </svg>Delete</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody v-else>
                                            <tr class="" >
                                                <td class="p-2 mb-2 text-center" colspan="6">Records are currently not available</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-between mx-2 row mb-1">
                                        <div v-if = "users.total && users.total.length == 0" class="col-sm-12 col-md-6">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">{{'Showing ' + users.from +' to '+ users.to + ' of ' + users.total + ' entries '}}</div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li :class="{paginate_button:true, 'page-item':true, previous:true, disabled:users.prev_page_url ? false : true}" id="DataTables_Table_0_previous"><a @click="getUsers(--currentPage, users.prev_page_url)" href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a></li>
                                                   
                                                    <li v-if = "users.last_page <= 10" @click="getUsers(n)" v-for="n in users.last_page"  :class="{paginate_button:true, 'page-item':true, active: n!=currentPage ? false : true}" > <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">{{n}}</a></li>
                                                    <li  v-if = "users.last_page > 10">
                                                        ...
                                                    </li>


                                                    <li @click="getUsers(++currentPage, users.next_page_url)" :class="{paginate_button:true, 'page-item':true, next:true, disabled:users.next_page_url ? false : true}"  id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">&nbsp;</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal modal-slide-in new-user-modal fade" ref="adminAddUserComponent" id="adminAddUserComponent">
                                <adminAddUserComponent :key="addUserkey"></adminAddUserComponent>
                            </div>

                          </div>
                        <!-- list section end -->
                    </section>
                    <!-- users list ends -->
                </div>
            </div>
        </div>
        <AdminFooter></AdminFooter>
    </main>
</template>
<script>
export default {
    data() {
        return {
            form: new Form({
                admin_wallet: null,
                admin_pm: null,
                id: null,
                user_level_id: null
            }),
            addUserkey : 0,
            key : 0,
            role: '',
            pageLimit: 5,
            currentPage: 1,
            search: '',
            error: null,
            message: null,
            users: [],
            activeUsers: 0,
            admins: 0,
            selectedUser: [],
            search: '',
            userLevelTitle: this.selectedUser && this.selectedUser.isAdmin == true ? 'Make User' : 'Make Admin'
        }
    },
    mounted() {

    },
    watch: {
        users() {
            this.users.data.forEach((user, index) => {
                if (user.totalActiveTransaction > 0) {
                    this.activeUsers++
                }
            });
            this.admins = []
            this.users.data.forEach((user, index) => {
                if (user.isAdmin == true) {
                    this.admins++
                }
            });

        },
        role(){
          this.getUsers(1)  
        },
        pageLimit() {
            this.getUsers(1)
        },
        
        selectedUser() {
            if (this.selectedUser.isAdmin == true) {
                this.userLevelTitle = 'Make User'
            } else {
                this.userLevelTitle = 'Make Admin'
            }
        },
        search() {
            this.getUsers(1)
            // this.getSelectedUser()
        },
    },

    computed: {
        user() {
            return this.$auth.user()
        }
    },

    beforeCreate: function() {
        if (this.$auth.user().isAdmin == false) { this.$auth.logout() }
    },
    created() {
        // if (localStorage.users) {
        //     this.users = JSON.parse(localStorage.users)
        // }
        // if (this.$auth.user().isAdmin == false) {this.$auth.logout()}
        // setInterval(this.getUsers, 20000)
        this.getUsers(this.currentPage)
    },
    methods: {
        getUsers(page, url=null) {
            this.currentPage = page
            this.$root.loader('show')
            var searchQuery = this.search ? '&username=' + this.search : ''
            var roleQuery = this.role ? '&user_level_id=' + this.role : ''
            url = url ? url : "/auth/users?page=" + page
            this.form.get(url + '&pageSize=' + this.pageLimit + searchQuery + roleQuery)
                .then(response => {
                    this.users = response.data.data.item
                    this.key++
                    // this.getSelectedUser()
                    this.$root.loader('hide')
                })
                .catch(error => {
                    this.$root.loader('hide')
                    console.log(error)
                })
        },
        getSelectedUser() {
            if (this.search && this.users) {
                this.selectedUser = this.users.filter((item) => {
                    if (item.username.toLowerCase() == this.search.toLowerCase()) {
                        this.form.fill(item)
                        return true
                    }
                })
            }
        },
        updateData() {
            this.form.put("/auth/users/" + this.form.id)
                .then(response => {
                    this.$root.alert('success', ' ', 'update successful')
                    this.getUsers()
                })
                .catch(error => {
                    this.$root.alert('error', ' ', 'update not successful')
                    console.log(error.response)
                })
        },
        userLevel(user) {
            // / var form = new Form({ user_level_id: '' })
            if (user.isAdmin) {
                this.form.user_level_id = 2
                this.form.put("/auth/users/" + this.form.id)
                    .then(response => {
                        this.$root.alert('success', ' ', 'update user-level to user successful')
                        this.userLevelTitle = "Make Admin"
                        this.getUsers()
                    })
                    .catch(error => {
                        this.$root.alert('error', ' ', 'update user-level to user not successful')
                        console.log(error.response)
                    })
            } else {
                this.form.user_level_id = 1
                this.form.put("/auth/users/" + this.form.id)
                    .then(response => {
                        this.$root.alert('success', ' ', 'update user-level to admin successful')
                        this.userLevelTitle = "Make User"
                        this.getUsers()
                    })
                    .catch(error => {
                        this.$root.alert('error', ' ', 'update user-level to admin not successful')
                        console.log(error.response)
                    })
            }
        },
        sendEmail($user) {
            this.$root.mailUser = $user;
        },
        resetEmailModal() {
            this.$root.mailUser = null
        },
        pause(user) {
            var user = this.selectedUser[0]
            this.$swal({
                    title: `Do you want to ${ user.withdraw_request ? 'stop the pausing withdrawal process' : 'start the pausing withdrawal process'  } for  ${user.username}?`,
                    text: "You can revert this changes in future",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#38c172',
                    cancelButtonColor: '#d33',
                    confirmButtonText: `Yes,  ${ user.withdraw_request ?  'stop'  : 'start'} pausing withdrawal Process`
                })
                .then((result) => {
                    if (result.value == true) {
                        this.processing(true)
                        if (user.withdraw_request) {
                            this.form.get("/auth/cancelWithdrawalRequest/" + user.id)
                                .then(response => {
                                    this.getUsers()
                                    this.$root.alert('success', ' ', response.data.message)
                                    this.processing(false)
                                })
                                .catch(error => {
                                    this.$root.alert('error', ' ', 'pausing withdrawal process failed ' + error.response.data.message != undefined ? error.response.data.message : ' ')
                                    this.processing(false)
                                    console.log(error.response)
                                })
                        } else {
                            this.form.get("/auth/confirmWithdrawalRequest/" + user.id)
                                .then(response => {
                                    this.getUsers()
                                    this.$root.alert('success', ' ', response.data.message)
                                    this.processing(false)
                                })
                                .catch(error => {
                                    this.$root.alert('error', ' ', 'pausing withdrawal process failed ' + error.response.data.message != undefined ? error.response.data.message : ' ')
                                    this.processing(false)
                                    console.log(error.response)
                                })
                        }

                    } else {

                        this.$root.alert('info', ' ', `Pausing withdrawal Process  ${ user.withdraw_request ? ' started' : ' cancelled' } `)
                    }
                    this.getUsers()

                })
        },
        processing(status) {
            if (status) {
                this.$refs.pause[0].innerText = "Processing..."
                this.$refs.pause[0].disabled = true
            } else {
                this.$refs.pause[0].innerText = "Toggle Pause Withdrawal"
                this.$refs.pause[0].disabled = false
            }
        },
    },


}

</script>
