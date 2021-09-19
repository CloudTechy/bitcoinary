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
		            <section class="app-user-view">
		                <!-- User Card & Plan Starts -->
		                <div class="row">
		                    <!-- User Card starts-->
		                    <div class="col-xl-9 col-lg-8 col-md-7">
		                        <div class="card user-card">
		                            <div class="card-body">
		                                <div class="row">
		                                    <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
		                                        <div class="user-avatar-section">
		                                            <div class="d-flex justify-content-start">
		                                                <img class="img-fluid rounded"  :src="$root.basepath + '/pixinvest/app-assets/images/avatars/7.png'" height="104" width="104" alt="User avatar">
		                                                <div class="d-flex flex-column ms-1">
		                                                    <div class="user-info mb-1">
		                                                        <h4 class="mb-0">Eleanor Aguilar</h4>
		                                                        <span class="card-text">eleanor.aguilar@gmail.com</span>
		                                                    </div>
		                                                    <div class="d-flex flex-wrap">
		                                                        <a href="./app-user-edit.html" class="btn btn-primary waves-effect waves-float waves-light">Edit</a>
		                                                        <button class="btn btn-outline-danger ms-1 waves-effect">Delete</button>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="d-flex align-items-center user-total-numbers">
		                                            <div class="d-flex align-items-center me-2">
		                                                <div class="color-box bg-light-primary">
		                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign text-primary">
		                                                        <line x1="12" y1="1" x2="12" y2="23"></line>
		                                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
		                                                    </svg>
		                                                </div>
		                                                <div class="ms-1">
		                                                    <h5 class="mb-0">23.3k</h5>
		                                                    <small>Monthly Sales</small>
		                                                </div>
		                                            </div>
		                                            <div class="d-flex align-items-center">
		                                                <div class="color-box bg-light-success">
		                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success">
		                                                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
		                                                        <polyline points="17 6 23 6 23 12"></polyline>
		                                                    </svg>
		                                                </div>
		                                                <div class="ms-1">
		                                                    <h5 class="mb-0">$99.87K</h5>
		                                                    <small>Annual Profit</small>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
		                                        <div class="user-info-wrapper">
		                                            <div class="d-flex flex-wrap">
		                                                <div class="user-info-title">
		                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-1">
		                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
		                                                        <circle cx="12" cy="7" r="4"></circle>
		                                                    </svg>
		                                                    <span class="card-text user-info-title fw-bold mb-0">Username</span>
		                                                </div>
		                                                <p class="card-text mb-0">eleanor.aguilar</p>
		                                            </div>
		                                            <div class="d-flex flex-wrap my-50">
		                                                <div class="user-info-title">
		                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check me-1">
		                                                        <polyline points="20 6 9 17 4 12"></polyline>
		                                                    </svg>
		                                                    <span class="card-text user-info-title fw-bold mb-0">Status</span>
		                                                </div>
		                                                <p class="card-text mb-0">Active</p>
		                                            </div>
		                                            <div class="d-flex flex-wrap my-50">
		                                                <div class="user-info-title">
		                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star me-1">
		                                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
		                                                    </svg>
		                                                    <span class="card-text user-info-title fw-bold mb-0">Role</span>
		                                                </div>
		                                                <p class="card-text mb-0">Admin</p>
		                                            </div>
		                                            <div class="d-flex flex-wrap my-50">
		                                                <div class="user-info-title">
		                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag me-1">
		                                                        <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
		                                                        <line x1="4" y1="22" x2="4" y2="15"></line>
		                                                    </svg>
		                                                    <span class="card-text user-info-title fw-bold mb-0">Country</span>
		                                                </div>
		                                                <p class="card-text mb-0">England</p>
		                                            </div>
		                                            <div class="d-flex flex-wrap">
		                                                <div class="user-info-title">
		                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone me-1">
		                                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
		                                                    </svg>
		                                                    <span class="card-text user-info-title fw-bold mb-0">Contact</span>
		                                                </div>
		                                                <p class="card-text mb-0">(123) 456-7890</p>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <!-- /User Card Ends-->
		                    <!-- Plan Card starts-->
		                    <div class="col-xl-3 col-lg-4 col-md-5">
		                        <div class="card plan-card border-primary">
		                            <div class="card-header d-flex justify-content-between align-items-center pt-75 pb-1">
		                                <h5 class="mb-0">Current Plan</h5>
		                                <span class="badge badge-light-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Expiry Date">July 22, <span class="nextYear">2022</span>
		                                </span>
		                            </div>
		                            <div class="card-body">
		                                <span class="badge badge-light-primary">Basic</span>
		                                <ul class="list-unstyled my-1">
		                                    <li>
		                                        <span class="align-middle">5 Users</span>
		                                    </li>
		                                    <li class="my-25">
		                                        <span class="align-middle">10 GB storage</span>
		                                    </li>
		                                    <li>
		                                        <span class="align-middle">Basic Support</span>
		                                    </li>
		                                </ul>
		                                <button class="btn btn-primary text-center w-100 waves-effect waves-float waves-light">Add Plan</button>
		                            </div>
		                        </div>
		                    </div>
		                    <!-- /Plan CardEnds -->
		                </div>
		                <!-- User Card & Plan Ends -->
		                <!-- User Timeline & Permissions Starts -->
		                <div class="row">
		                    <!-- information starts -->
		                    <div class="col-md-6">
		                        <div class="card">
		                            <div class="card-header">
		                                <h4 class="card-title mb-2">User Timeline</h4>
		                            </div>
		                            <div class="card-body">
		                                <ul class="timeline">
		                                    <li class="timeline-item">
		                                        <span class="timeline-point timeline-point-indicator"></span>
		                                        <div class="timeline-event">
		                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
		                                                <h6>12 Invoices have been paid</h6>
		                                                <span class="timeline-event-time">12 min ago</span>
		                                            </div>
		                                            <p>Invoices have been paid to the company.</p>
		                                            <div class="d-flex align-items-center">
		                                                <img class="me-1"  :src="$root.basepath + '/pixinvest/app-assets/images/icons/file-icons/pdf.png'" alt="invoice" height="23">
		                                                <div class="invoice-name">invoice.pdf</div>
		                                            </div>
		                                        </div>
		                                    </li>
		                                    <li class="timeline-item">
		                                        <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
		                                        <div class="timeline-event">
		                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
		                                                <h6>Client Meeting</h6>
		                                                <span class="timeline-event-time">45 min ago</span>
		                                            </div>
		                                            <p>Project meeting with john @10:15am.</p>
		                                            <div class="d-flex align-items-center">
		                                                <div class="avatar">
		                                                    <img  :src="$root.basepath + '/pixinvest/app-assets/images/avatars/12-small.png'" alt="avatar" height="38" width="38">
		                                                </div>
		                                                <div class="user-info ms-50">
		                                                    <h6 class="mb-0">John Doe (Client)</h6>
		                                                    <span>CEO of Infibeam</span>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </li>
		                                    <li class="timeline-item">
		                                        <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
		                                        <div class="timeline-event">
		                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
		                                                <h6>Create a new project for client</h6>
		                                                <span class="timeline-event-time">2 days ago</span>
		                                            </div>
		                                            <p class="mb-0">Add files to new design folder</p>
		                                        </div>
		                                    </li>
		                                </ul>
		                            </div>
		                        </div>
		                    </div>
		                    <!-- information Ends -->
		                    <!-- User Permissions Starts -->
		                    <div class="col-md-6">
		                        <!-- User Permissions -->
		                        <div class="card">
		                            <div class="card-header">
		                                <h4 class="card-title">Permissions</h4>
		                            </div>
		                            <p class="card-text ms-2">Permission according to roles</p>
		                            <div class="table-responsive">
		                                <table class="table table-striped table-borderless">
		                                    <thead class="table-light">
		                                        <tr>
		                                            <th>Module</th>
		                                            <th>Read</th>
		                                            <th>Write</th>
		                                            <th>Create</th>
		                                            <th>Delete</th>
		                                        </tr>
		                                    </thead>
		                                    <tbody>
		                                        <tr>
		                                            <td>Admin</td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="admin-read" checked="" disabled="">
		                                                    <label class="form-check-label" for="admin-read"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="admin-write" disabled="">
		                                                    <label class="form-check-label" for="admin-write"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="admin-create" disabled="">
		                                                    <label class="form-check-label" for="admin-create"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="admin-delete" disabled="">
		                                                    <label class="form-check-label" for="admin-delete"></label>
		                                                </div>
		                                            </td>
		                                        </tr>
		                                        <tr>
		                                            <td>Staff</td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="staff-read" disabled="">
		                                                    <label class="form-check-label" for="staff-read"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="staff-write" checked="" disabled="">
		                                                    <label class="form-check-label" for="staff-write"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="staff-create" disabled="">
		                                                    <label class="form-check-label" for="staff-create"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="staff-delete" disabled="">
		                                                    <label class="form-check-label" for="staff-delete"></label>
		                                                </div>
		                                            </td>
		                                        </tr>
		                                        <tr>
		                                            <td>Author</td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="author-read" checked="" disabled="">
		                                                    <label class="form-check-label" for="author-read"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="author-write" disabled="">
		                                                    <label class="form-check-label" for="author-write"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="author-create" checked="" disabled="">
		                                                    <label class="form-check-label" for="author-create"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="author-delete" disabled="">
		                                                    <label class="form-check-label" for="author-delete"></label>
		                                                </div>
		                                            </td>
		                                        </tr>
		                                        <tr>
		                                            <td>Contributor</td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="contributor-read" disabled="">
		                                                    <label class="form-check-label" for="contributor-read"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="contributor-write" disabled="">
		                                                    <label class="form-check-label" for="contributor-write"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="contributor-create" disabled="">
		                                                    <label class="form-check-label" for="contributor-create"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="contributor-delete" disabled="">
		                                                    <label class="form-check-label" for="contributor-delete"></label>
		                                                </div>
		                                            </td>
		                                        </tr>
		                                        <tr>
		                                            <td>User</td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="user-read" disabled="">
		                                                    <label class="form-check-label" for="user-read"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="user-create" disabled="">
		                                                    <label class="form-check-label" for="user-create"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="user-write" disabled="">
		                                                    <label class="form-check-label" for="user-write"></label>
		                                                </div>
		                                            </td>
		                                            <td>
		                                                <div class="form-check">
		                                                    <input type="checkbox" class="form-check-input" id="user-delete" checked="" disabled="">
		                                                    <label class="form-check-label" for="user-delete"></label>
		                                                </div>
		                                            </td>
		                                        </tr>
		                                    </tbody>
		                                </table>
		                            </div>
		                        </div>
		                        <!-- /User Permissions -->
		                    </div>
		                    <!-- User Permissions Ends -->
		                </div>
		                <!-- User Timeline & Permissions Ends -->
		                <!-- User Invoice Starts-->
		                <div class="row invoice-list-wrapper">
		                    <div class="col-12">
		                        <div class="card">
		                            <div class="card-datatable table-responsive">
		                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
		                                            <h3 class="p-2">Recent Investments</h3>
		                                            <table class="invoice-list-table table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
		                                                <thead>
		                                                    <tr role="row">
		                                                        <th class="control sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="display: none;"></th>
		                                                        <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 88;" aria-label="Plan: activate to sort column ascending" aria-sort="descending">Plan</th>
		                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 270px;" aria-label="Client: activate to sort column ascending">Investor</th>
		                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 73px;" aria-label="Total: activate to sort column ascending">Amount</th>
		                                                        <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 130px;" aria-label="Issued Date: activate to sort column ascending">Date</th>
		                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">Status</th>
		                                                        <th class="cell-fit sorting_disabled" rowspan="1" colspan="1" style="width: 80px;" aria-label="Actions">Actions</th>
		                                                    </tr>
		                                                </thead>
		                                                <tbody>
		                                                    <tr class="odd">
		                                                        <td class=" control" tabindex="0" style="display: none;"></td>
		                                                        <td class="sorting_1"><a class="fw-bold" href="app-invoice-preview.html"> Dimond - Daily 8.52% for 14 Days</a></td>
		                                                        <td>
		                                                            <div class="d-flex justify-content-left align-items-center">
		                                                                <div class="avatar-wrapper">
		                                                                    <div class="avatar bg-light-success me-50">
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
		                                                                <div class="dropdown"><a class="btn btn-sm btn-icon px-0" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-2">
		                                                                            <circle cx="12" cy="12" r="1"></circle>
		                                                                            <circle cx="12" cy="5" r="1"></circle>
		                                                                            <circle cx="12" cy="19" r="1"></circle>
		                                                                        </svg></a>
		                                                                    <div class="dropdown-menu dropdown-menu-end" style=""><a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download font-small-4 me-50">
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
		                                                    <tr class="even">
		                                                        <td class=" control" tabindex="0" style="display: none;"></td>
		                                                        <td class="sorting_1"><a class="fw-bold" href=""> Platinam - Daily 14.82% for 7 Days</a></td>
		                                                        <td>
		                                                            <div class="d-flex justify-content-left align-items-center">
		                                                                <div class="avatar-wrapper">
		                                                                    <div class="avatar me-50"><img  :src="$root.basepath + '/pixinvest/avatar-s-1.jpg'" width="32" height="32"></div>
		                                                                </div>
		                                                                <div class="d-flex flex-column">
		                                                                    <h6 class="user-name text-truncate mb-0">Shamus Tuttle</h6><small class="text-truncate text-muted">shamustuttle@email.com</small>
		                                                                </div>
		                                                            </div>
		                                                        </td>
		                                                        <td><span class="d-none">2230</span>$2230</td>
		                                                        <td style=""><span class="d-none">20191119</span>19 Nov 2019</td>
		                                                        <td style=""><span class="badge rounded-pill badge-light-success" text-capitalized=""> Paid </span></td>
		                                                        <td style="">
		                                                            <div class="d-flex align-items-center col-actions"><a class="me-1" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send font-medium-2">
		                                                                        <line x1="22" y1="2" x2="11" y2="13"></line>
		                                                                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
		                                                                    </svg></a><a class="me-1" href="" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-medium-2">
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
		                                                <div class="col-sm-12 col-md-6">
		                                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 41 to 50 of 50 entries</div>
		                                                </div>
		                                                <div class="col-sm-12 col-md-6">
		                                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
		                                                        <ul class="pagination">
		                                                            <li class="paginate_button page-item previous" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a></li>
		                                                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
		                                                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
		                                                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
		                                                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
		                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
		                                                            <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">&nbsp;</a></li>
		                                                        </ul>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>
		                        </div>
		                    </div>
		                </div>
		                <!-- /User Invoice Ends-->
		            </section>
        		</div>
        	</div>
          </div>
        <AdminFooter></AdminFooter>
</main>

</template>
<script>
export default {
    data() {
        return {}
    }
}

</script>
