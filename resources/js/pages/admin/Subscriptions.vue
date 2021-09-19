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
                    <section class="invoice-list-wrapper">
                        <div class="card">
                            <div class="card-datatable table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="row d-flex justify-content-between align-items-center m-1">
                                        <div class="col-lg-6 d-flex align-items-center">
                                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select></label></div>
                                            <div class="dt-action-buttons text-xl-end text-lg-start text-lg-end text-start ">
                                                <div class="dt-buttons"><button class="dt-button btn btn-primary btn-add-record ms-2" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Add Record</span></button> </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 d-flex align-items-center justify-content-lg-end flex-lg-nowrap flex-wrap pe-lg-1 p-0">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search<input type="search" class="form-control" placeholder="Search Invoice" aria-controls="DataTables_Table_0"></label></div>
                                            <div class="invoice_status ms-sm-2"><select id="UserRole" class="form-select ms-50 text-capitalize">
                                                    <option value=""> Select Status </option>
                                                    <option value="Downloaded" class="text-capitalize">Downloaded</option>
                                                    <option value="Draft" class="text-capitalize">Draft</option>
                                                    <option value="Paid" class="text-capitalize">Paid</option>
                                                    <option value="Partial Payment" class="text-capitalize">Partial Payment</option>
                                                    <option value="Past Due" class="text-capitalize">Past Due</option>
                                                    <option value="Sent" class="text-capitalize">Sent</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <table class="invoice-list-table table">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 46px;" aria-label="#: activate to sort column ascending" aria-sort="descending">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 270px;" aria-label="Client: activate to sort column ascending">Client</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 73px;" aria-label="Total: activate to sort column ascending">Total</th>
                                                <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 130px;" aria-label="Issued Date: activate to sort column ascending">Issued Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">Balance</th>
                                                <th class="cell-fit sorting_disabled" rowspan="1" colspan="1" style="width: 80px;" aria-label="Actions">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd">
                                                <td class="sorting_1"><a class="fw-bold" href="#"> #5089</a></td>
                                                <td>
                                                    <div class="d-flex justify-content-left align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar bg-light-danger me-50">
                                                                <div class="avatar-content">JK</div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <h6 class="user-name text-truncate mb-0">Jamal Kerrod</h6><small class="text-truncate text-muted">jamalkerrod@email.com</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="d-none">3077</span>$3077</td>
                                                <td style=""><span class="d-none">20190509</span>09 May 2019</td>
                                                <td style=""><span class="badge rounded-pill badge-light-success" text-capitalized=""> Paid </span></td>
                                                <td style="">
                                                    <div class="d-flex align-items-center col-actions"><a class="me-1" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send font-medium-2">
                                                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                                            </svg></a><a class="me-1" href="app-invoice-preview.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-medium-2">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg></a>
                                                        <div class="dropdown"><a class="btn btn-sm btn-icon px-0" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-2">
                                                                    <circle cx="12" cy="12" r="1"></circle>
                                                                    <circle cx="12" cy="5" r="1"></circle>
                                                                    <circle cx="12" cy="19" r="1"></circle>
                                                                </svg></a>
                                                            <div class="dropdown-menu dropdown-menu-end"><a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download font-small-4 me-50">
                                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                                                    </svg>Download</a><a href="app-invoice-edit.html" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4 me-50">
                                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                                    </svg>Edit</a><a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash font-small-4 me-50">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    </svg>Delete</a><a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy font-small-4 me-50">
                                                                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                                    </svg>Duplicate</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-between mx-2 row">
                                        <div class="col-md-6 col-sm-12 p-1 p-sm-1">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 p-1 p-sm-1">
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">&nbsp;</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <AdminFooter></AdminFooter>
    </main>
</template>
<script>
import moment from 'moment'
export default {
    data() {
        return {
            portfolios: '',
            usersPackages: '',
            form: new Form({}),
            select: '',
            error: '',
            search: '',

        }
    },
    mounted() {

        if (localStorage.portfolioss) {
            this.portfolios = JSON.parse(localStorage.portfolioss)
        }
        if (localStorage.usersPackages) {
            this.usersPackages = JSON.parse(localStorage.usersPackages)
        }
        if (this.$route.query.username) {
            this.search = this.$route.query.username
        }
        setInterval(this.getPackages, 61000)
        this.getPortfolios()
        this.getPackages()
    },
    computed: {
        user() {
            return this.$auth.user()
        },
        usersPackagesx() {
            return this.usersPackages
        }
    },
    beforeCreate: function() {
        if (this.$auth.user().isAdmin == false) { this.$auth.logout() }
    },
    methods: {
        getPortfolios() {
            window.scrollTo(0, 250);
            this.form.get("/auth/portfolios")
                .then(response => {
                    this.portfolios = response.data.data.item
                    localStorage.portfolioss = JSON.stringify(response.data.data.item)
                })
                .catch(error => {
                    console.log(error.response)
                })
        },
        getPackages() {
            this.form.get("auth/packageusers")
                .then(response => {
                    this.usersPackages = response.data.data.item
                    localStorage.usersPackages = JSON.stringify(response.data.data.item)
                })
                .catch(error => {
                    console.log(error.response)
                })
        },
        getDate(to) {

            return moment().to(moment(to))
        },
        subscribe(packag, index) {
            this.$swal({
                    title: `Do you want to ${ packag.unsubscribed ? 'activate' : 'deactivate' } ${packag.username}'s ${packag.package} subscription?`,
                    text: "You can revert this changes in future",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#38c172',
                    cancelButtonColor: '#d33',
                    confirmButtonText: `Yes,  ${ packag.unsubscribed ? 'activate' : 'deactivate' } subscription`
                })
                .then((result) => {
                    if (result.value == true) {
                        this.form.get("/auth/subscribe/" + packag.transaction.id)
                            .then(response => {
                                this.$root.alert('success', ' ', response.data.message)
                                this.getPackages()
                                var status = packag.unsubscribed ? this.$refs[index][0].classList.remove('active') : this.$refs[index][0].classList.add('active')
                            })
                            .catch(error => {
                                var status = packag.unsubscribed ? this.$refs[index][0].classList.remove('active') : this.$refs[index][0].classList.add('active')
                                this.$root.alert('error', ' ', 'Subscription failed to activate ' + error.response.data.message != undefined ? error.response.data.message : ' ')
                                this.getPackages()
                                console.log(error.response)
                            })
                    } else {
                        var status = packag.unsubscribed ? this.$refs[index][0].classList.remove('active') : this.$refs[index][0].classList.add('active')

                        this.$root.alert('info', ' ', `Subscription  ${ packag.unsubscribed ? ' activation' : ' deactivation' } cancelled`)
                    }

                })
        },
        loadViewPOP(item) {
            this.$root.viewItem = { title: `Viewing ${item.package}  POP for ${item.username }`, imgUrl: item.transaction.pop }
        },
        resetViewModal() {
            this.$root.viewItem = null
        }
    }
}

</script>
<style>
.example .btn-toggle {
    top: 50%;
    transform: translateY(-50%);
}

.btn-toggle {
    margin: 0 4rem;
    padding: 0;
    position: relative;
    border: none;
    height: 1.5rem;
    width: 3rem;
    border-radius: 1.5rem;
    color: #6b7381;
    background: #bdc1c8;
}

.btn-toggle:focus,
.btn-toggle.focus,
.btn-toggle:focus.active,
.btn-toggle.focus.active {
    outline: none;
}

.btn-toggle:before,
.btn-toggle:after {
    line-height: 1.5rem;
    width: 4rem;
    text-align: center;
    font-weight: 600;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: absolute;
    bottom: 0;
    transition: opacity 0.25s;
}

.btn-toggle:before {
    content: 'Off';
    left: -4rem;
}

.btn-toggle:after {
    content: 'On';
    right: -4rem;
    opacity: 0.5;
}

.btn-toggle>.handle {
    position: absolute;
    top: 0.1875rem;
    left: 0.1875rem;
    width: 1.125rem;
    height: 1.125rem;
    border-radius: 1.125rem;
    background: #fff;
    transition: left 0.25s;
}

.btn-toggle.active {
    transition: background-color 0.25s;
}

.btn-toggle.active>.handle {
    left: 1.6875rem;
    transition: left 0.25s;
}

.btn-toggle.active:before {
    opacity: 0.5;
}

.btn-toggle.active:after {
    opacity: 1;
}

.btn-toggle.btn-sm:before,
.btn-toggle.btn-sm:after {
    line-height: -0.5rem;
    color: #fff;
    letter-spacing: 0.75px;
    left: 0.4125rem;
    width: 2.325rem;
}

.btn-toggle.btn-sm:before {
    text-align: right;
}

.btn-toggle.btn-sm:after {
    text-align: left;
    opacity: 0;
}

.btn-toggle.btn-sm.active:before {
    opacity: 0;
}

.btn-toggle.btn-sm.active:after {
    opacity: 1;
}

.btn-toggle.btn-xs:before,
.btn-toggle.btn-xs:after {
    display: none;
}

.btn-toggle:before,
.btn-toggle:after {
    color: #6b7381;
}

.btn-toggle.active {
    background-color: #29b5a8;
}

.btn-toggle.btn-lg {
    margin: 0 5rem;
    padding: 0;
    position: relative;
    border: none;
    height: 2.5rem;
    width: 5rem;
    border-radius: 2.5rem;
}

.btn-toggle.btn-lg:focus,
.btn-toggle.btn-lg.focus,
.btn-toggle.btn-lg:focus.active,
.btn-toggle.btn-lg.focus.active {
    outline: none;
}

.btn-toggle.btn-lg:before,
.btn-toggle.btn-lg:after {
    line-height: 2.5rem;
    width: 5rem;
    text-align: center;
    font-weight: 600;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: absolute;
    bottom: 0;
    transition: opacity 0.25s;
}

.btn-toggle.btn-lg:before {
    content: 'Off';
    left: -5rem;
}

.btn-toggle.btn-lg:after {
    content: 'On';
    right: -5rem;
    opacity: 0.5;
}

.btn-toggle.btn-lg>.handle {
    position: absolute;
    top: 0.3125rem;
    left: 0.3125rem;
    width: 1.875rem;
    height: 1.875rem;
    border-radius: 1.875rem;
    background: #fff;
    transition: left 0.25s;
}

.btn-toggle.btn-lg.active {
    transition: background-color 0.25s;
}

.btn-toggle.btn-lg.active>.handle {
    left: 2.8125rem;
    transition: left 0.25s;
}

.btn-toggle.btn-lg.active:before {
    opacity: 0.5;
}

.btn-toggle.btn-lg.active:after {
    opacity: 1;
}

.btn-toggle.btn-lg.btn-sm:before,
.btn-toggle.btn-lg.btn-sm:after {
    line-height: 0.5rem;
    color: #fff;
    letter-spacing: 0.75px;
    left: 0.6875rem;
    width: 3.875rem;
}

.btn-toggle.btn-lg.btn-sm:before {
    text-align: right;
}

.btn-toggle.btn-lg.btn-sm:after {
    text-align: left;
    opacity: 0;
}

.btn-toggle.btn-lg.btn-sm.active:before {
    opacity: 0;
}

.btn-toggle.btn-lg.btn-sm.active:after {
    opacity: 1;
}

.btn-toggle.btn-lg.btn-xs:before,
.btn-toggle.btn-lg.btn-xs:after {
    display: none;
}

.btn-toggle.btn-sm {
    margin: 0 0.5rem;
    padding: 0;
    position: relative;
    border: none;
    height: 1.5rem;
    width: 3rem;
    border-radius: 1.5rem;
}

.btn-toggle.btn-sm:focus,
.btn-toggle.btn-sm.focus,
.btn-toggle.btn-sm:focus.active,
.btn-toggle.btn-sm.focus.active {
    outline: none;
}

.btn-toggle.btn-sm:before,
.btn-toggle.btn-sm:after {
    line-height: 1.5rem;
    width: 0.5rem;
    text-align: center;
    font-weight: 600;
    font-size: 0.55rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: absolute;
    bottom: 0;
    transition: opacity 0.25s;
}

.btn-toggle.btn-sm:before {
    content: 'Off';
    left: -0.5rem;
}

.btn-toggle.btn-sm:after {
    content: 'On';
    right: -0.5rem;
    opacity: 0.5;
}

.btn-toggle.btn-sm>.handle {
    position: absolute;
    top: 0.1875rem;
    left: 0.1875rem;
    width: 1.125rem;
    height: 1.125rem;
    border-radius: 1.125rem;
    background: #fff;
    transition: left 0.25s;
}

.btn-toggle.btn-sm.active {
    transition: background-color 0.25s;
}

.btn-toggle.btn-sm.active>.handle {
    left: 1.6875rem;
    transition: left 0.25s;
}

.btn-toggle.btn-sm.active:before {
    opacity: 0.5;
}

.btn-toggle.btn-sm.active:after {
    opacity: 1;
}

.btn-toggle.btn-sm.btn-sm:before,
.btn-toggle.btn-sm.btn-sm:after {
    line-height: -0.5rem;
    color: #fff;
    letter-spacing: 0.75px;
    left: 0.4125rem;
    width: 2.325rem;
}

.btn-toggle.btn-sm.btn-sm:before {
    text-align: right;
}

.btn-toggle.btn-sm.btn-sm:after {
    text-align: left;
    opacity: 0;
}

.btn-toggle.btn-sm.btn-sm.active:before {
    opacity: 0;
}

.btn-toggle.btn-sm.btn-sm.active:after {
    opacity: 1;
}

.btn-toggle.btn-sm.btn-xs:before,
.btn-toggle.btn-sm.btn-xs:after {
    display: none;
}

.btn-toggle.btn-xs {
    margin: 0 0;
    padding: 0;
    position: relative;
    border: none;
    height: 1rem;
    width: 2rem;
    border-radius: 1rem;
}

.btn-toggle.btn-xs:focus,
.btn-toggle.btn-xs.focus,
.btn-toggle.btn-xs:focus.active,
.btn-toggle.btn-xs.focus.active {
    outline: none;
}

.btn-toggle.btn-xs:before,
.btn-toggle.btn-xs:after {
    line-height: 1rem;
    width: 0;
    text-align: center;
    font-weight: 600;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: absolute;
    bottom: 0;
    transition: opacity 0.25s;
}

.btn-toggle.btn-xs:before {
    content: 'Off';
    left: 0;
}

.btn-toggle.btn-xs:after {
    content: 'On';
    right: 0;
    opacity: 0.5;
}

.btn-toggle.btn-xs>.handle {
    position: absolute;
    top: 0.125rem;
    left: 0.125rem;
    width: 0.75rem;
    height: 0.75rem;
    border-radius: 0.75rem;
    background: #fff;
    transition: left 0.25s;
}

.btn-toggle.btn-xs.active {
    transition: background-color 0.25s;
}

.btn-toggle.btn-xs.active>.handle {
    left: 1.125rem;
    transition: left 0.25s;
}

.btn-toggle.btn-xs.active:before {
    opacity: 0.5;
}

.btn-toggle.btn-xs.active:after {
    opacity: 1;
}

.btn-toggle.btn-xs.btn-sm:before,
.btn-toggle.btn-xs.btn-sm:after {
    line-height: -1rem;
    color: #fff;
    letter-spacing: 0.75px;
    left: 0.275rem;
    width: 1.55rem;
}

.btn-toggle.btn-xs.btn-sm:before {
    text-align: right;
}

.btn-toggle.btn-xs.btn-sm:after {
    text-align: left;
    opacity: 0;
}

.btn-toggle.btn-xs.btn-sm.active:before {
    opacity: 0;
}

.btn-toggle.btn-xs.btn-sm.active:after {
    opacity: 1;
}

.btn-toggle.btn-xs.btn-xs:before,
.btn-toggle.btn-xs.btn-xs:after {
    display: none;
}

.btn-toggle.btn-secondary {
    color: #6b7381;
    background: #bdc1c8;
}

.btn-toggle.btn-secondary:before,
.btn-toggle.btn-secondary:after {
    color: #6b7381;
}

.btn-toggle.btn-secondary.active {
    background-color: #ff8300;
}

</style>
