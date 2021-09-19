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
                            <h5 class="card-header">Search Edit Filter</h5>
                            <div class="d-flex justify-content-between align-items-center mx-50 row pt-0 pb-2">
                                <div class="col-md-4 user_role"><select id="UserRole" class="form-select text-capitalize mb-md-0 mb-2">
                                        <option value=""> Select Role </option>
                                        <option value="Admin" class="text-capitalize">Admin</option>
                                        <option value="Author" class="text-capitalize">Author</option>
                                        <option value="Editor" class="text-capitalize">Editor</option>
                                        <option value="Maintainer" class="text-capitalize">Maintainer</option>
                                        <option value="Subscriber" class="text-capitalize">Subscriber</option>
                                    </select></div>
                                <div class="col-md-4 user_plan"><select id="UserPlan" class="form-select text-capitalize mb-md-0 mb-2">
                                        <option value=""> Select Plan </option>
                                        <option value="Basic" class="text-capitalize">Basic</option>
                                        <option value="Company" class="text-capitalize">Company</option>
                                        <option value="Enterprise" class="text-capitalize">Enterprise</option>
                                        <option value="Team" class="text-capitalize">Team</option>
                                    </select></div>
                                <div class="col-md-4 user_status"><select id="FilterTransaction" class="form-select text-capitalize mb-md-0 mb-2xx">
                                        <option value=""> Select Status </option>
                                        <option value="Pending" class="text-capitalize">Pending</option>
                                        <option value="Active" class="text-capitalize">Active</option>
                                        <option value="Inactive" class="text-capitalize">Inactive</option>
                                    </select></div>
                            </div>
                        </div>
                        <!-- users filter end -->
                        <!-- list section start -->
                        <div class="card">
                            <div class="card-datatable table-responsive pt-0">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="d-flex justify-content-between align-items-center header-actions mx-1 row mt-75">
                                        <div class="col-sm-12 col-md-4 col-lg-6">
                                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-8 col-lg-6 ps-xl-75 ps-0">
                                            <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end align-items-center flex-sm-nowrap flex-wrap me-1">
                                                <div class="me-1">
                                                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0"></label></div>
                                                </div>
                                                <div class="dt-buttons btn-group flex-wrap"><button class="btn add-new btn-primary mt-50" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span>Add New User</span></button> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="user-list-table table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1035px;">
                                        <thead class="table-light">
                                            <tr role="row">
                                                <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 206px;" aria-label="User: activate to sort column ascending">User</th>
                                                <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 245px;" aria-label="Email: activate to sort column ascending" aria-sort="descending">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Role: activate to sort column ascending">Role</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 68px;" aria-label="Plan: activate to sort column ascending">Plan</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 58px;" aria-label="Status: activate to sort column ascending">Status</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63px;" aria-label="Actions">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd">
                                                <td class=" control" tabindex="0" style="display: none;"></td>
                                                <td>
                                                    <div class="d-flex justify-content-left align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar  me-1"><img :src="$root.basepath + '/pixinvest/app-assets/images/avatars/1-small.png'" alt="Avatar" height="32" width="32"></div>
                                                        </div>
                                                        <div class="d-flex flex-column"><a href="app-user-view.html" class="user_name text-truncate"><span class="fw-bold">Zsazsa McCleverty</span></a><small class="emp_post text-muted">@zmcclevertye</small></div>
                                                    </div>
                                                </td>
                                                <td class="sorting_1">zmcclevertye@soundcloud.com</td>
                                                <td style=""><span class="text-truncate align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database font-medium-3 text-success me-50">
                                                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                                        </svg>Maintainer</span></td>
                                                <td style="">Enterprise</td>
                                                <td style=""><span class="badge rounded-pill badge-light-success" text-capitalized="">Active</span></td>
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
                                            <tr class="even">
                                                <td class=" control" tabindex="0" style="display: none;"></td>
                                                <td>
                                                    <div class="d-flex justify-content-left align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar  me-1"><img :src="$root.basepath + '/pixinvest/app-assets/images/avatars/1-small.png'" alt="Avatar" height="32" width="32"></div>
                                                        </div>
                                                        <div class="d-flex flex-column"><a href="app-user-view.html" class="user_name text-truncate"><span class="fw-bold">Yoko Pottie</span></a><small class="emp_post text-muted">@ypottiec</small></div>
                                                    </div>
                                                </td>
                                                <td class="sorting_1">ypottiec@privacy.gov.au</td>
                                                <td style=""><span class="text-truncate align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-3 text-primary me-50">
                                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="12" cy="7" r="4"></circle>
                                                        </svg>Subscriber</span></td>
                                                <td style="">Basic</td>
                                                <td style=""><span class="badge rounded-pill badge-light-secondary" text-capitalized="">Inactive</span></td>
                                                <td style="">
                                                    <div class="btn-group"><a class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg></a>
                                                        <div class="dropdown-menu dropdown-menu-end"><a href="app-user-view.html" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-small-4 me-50">
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
                                            <tr class="odd">
                                                <td class=" control" tabindex="0" style="display: none;"></td>
                                                <td>
                                                    <div class="d-flex justify-content-left align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar  me-1"><img :src="$root.basepath + '/pixinvest/app-assets/images/avatars/1-small.png'" alt="Avatar" height="32" width="32"></div>
                                                        </div>
                                                        <div class="d-flex flex-column"><a href="app-user-view.html" class="user_name text-truncate"><span class="fw-bold">Wesley Burland</span></a><small class="emp_post text-muted">@wburlandj</small></div>
                                                    </div>
                                                </td>
                                                <td class="sorting_1">wburlandj@uiuc.edu</td>
                                                <td style=""><span class="text-truncate align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 font-medium-3 text-info me-50">
                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                        </svg>Editor</span></td>
                                                <td style="">Team</td>
                                                <td style=""><span class="badge rounded-pill badge-light-secondary" text-capitalized="">Inactive</span></td>
                                                <td style="">
                                                    <div class="btn-group"><a class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg></a>
                                                        <div class="dropdown-menu dropdown-menu-end"><a href="app-user-view.html" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-small-4 me-50">
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
                                    </table>
                                    <div class="d-flex justify-content-between mx-2 row mb-1">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
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
                            <!-- Modal to add new user starts-->
                            <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                                <div class="modal-dialog">
                                    <form class="add-new-user modal-content pt-0" novalidate="novalidate">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                        <div class="modal-header mb-1">
                                            <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                                        </div>
                                        <div class="modal-body flex-grow-1">
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                                <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" name="user-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-icon-default-uname">Username</label>
                                                <input type="text" id="basic-icon-default-uname" class="form-control dt-uname" placeholder="Web Developer" aria-label="jdoe1" aria-describedby="basic-icon-default-uname2" name="user-name">
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                                <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" aria-describedby="basic-icon-default-email2" name="user-email">
                                                <small class="form-text"> You can use letters, numbers &amp; periods </small>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="user-role">User Role</label>
                                                <select id="user-role" class="form-select">
                                                    <option value="subscriber">Subscriber</option>
                                                    <option value="editor">Editor</option>
                                                    <option value="maintainer">Maintainer</option>
                                                    <option value="author">Author</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="user-plan">Select Plan</label>
                                                <select id="user-plan" class="form-select">
                                                    <option value="basic">Basic</option>
                                                    <option value="enterprise">Enterprise</option>
                                                    <option value="company">Company</option>
                                                    <option value="team">Team</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary me-1 data-submit waves-effect waves-float waves-light">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Modal to add new user Ends-->
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
