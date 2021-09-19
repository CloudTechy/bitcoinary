<template>
    <div>
        <AdminDashboardHeader></AdminDashboardHeader>
        <AdminDashboardSidebar></AdminDashboardSidebar>
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-start mb-0">Account Settings</h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Pages</a>
                                        </li>
                                        <li class="breadcrumb-item active"> Account Settings
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                        <div class="mb-1 breadcrumb-right">
                            <div class="dropdown">
                                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                        <rect x="3" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="14" width="7" height="7"></rect>
                                        <rect x="3" y="14" width="7" height="7"></rect>
                                    </svg></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square me-1">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square me-1">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-1">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar me-1">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg><span class="align-middle">Calendar</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <!-- account setting page -->
                    <section id="page-account-settings">
                        <div class="row">
                            <!-- left menu section -->
                            <div class="col-md-3 mb-2 mb-md-0">
                                <ul class="nav nav-pills flex-column nav-left">
                                    <!-- general -->
                                    <li class="nav-item">
                                        <a class="nav-link active" id="account-pill-general" data-bs-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-3 me-1">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <span class="fw-bold">General</span>
                                        </a>
                                    </li>
                                    <!-- change password -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-password" data-bs-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock font-medium-3 me-1">
                                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                            <span class="fw-bold">Change Password</span>
                                        </a>
                                    </li>
                                    <!-- information -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-info" data-bs-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info font-medium-3 me-1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                            </svg>
                                            <span class="fw-bold">Information</span>
                                        </a>
                                    </li>
                                    <!-- social -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-social" data-bs-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link font-medium-3 me-1">
                                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                            </svg>
                                            <span class="fw-bold">Social</span>
                                        </a>
                                    </li>
                                    <!-- notification -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-notifications" data-bs-toggle="pill" href="#account-vertical-notifications" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell font-medium-3 me-1">
                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                            </svg>
                                            <span class="fw-bold">Notifications</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--/ left menu section -->
                            <!-- right content section -->
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <!-- general tab -->
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                                <!-- header section -->
                                                <div class="d-flex">
                                                    <a href="#" class="me-25">
                                                        <img :src="$root.basepath + '/pixinvest/app-assets/images/portrait/small/avatar-s-11.jpg'" id="account-upload-img" class="rounded me-50" alt="profile image" height="80" width="80">
                                                    </a>
                                                    <!-- upload and reset button -->
                                                    <div class="mt-75 ms-1">
                                                        <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light">Upload</label>
                                                        <input type="file" id="account-upload" hidden="" accept="image/*">
                                                        <button class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                                        <p>Allowed JPG, GIF or PNG. Max size of 800kB</p>
                                                    </div>
                                                    <!--/ upload and reset button -->
                                                </div>
                                                <!--/ header section -->
                                                <!-- form -->
                                                <form class="validate-form mt-2" novalidate="novalidate">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-username">Username</label>
                                                                <input type="text" class="form-control" id="account-username" name="username" placeholder="Username" value="johndoe">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-name">Name</label>
                                                                <input type="text" class="form-control" id="account-name" name="name" placeholder="Name" value="John Doe">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-e-mail">E-mail</label>
                                                                <input type="email" class="form-control" id="account-e-mail" name="email" placeholder="Email" value="granger007@hogward.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-company">Company</label>
                                                                <input type="text" class="form-control" id="account-company" name="company" placeholder="Company name" value="Crystal Technologies">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-75">
                                                            <div class="alert alert-warning mb-50" role="alert">
                                                                <h4 class="alert-heading">Your email is not confirmed. Please check your inbox.</h4>
                                                                <div class="alert-body">
                                                                    <a href="javascript: void(0);" class="alert-link">Resend confirmation</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mt-2 me-1 waves-effect waves-float waves-light">Save changes</button>
                                                            <button type="reset" class="btn btn-outline-secondary mt-2 waves-effect">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--/ form -->
                                            </div>
                                            <!--/ general tab -->
                                            <!-- change password -->
                                            <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                <!-- form -->
                                                <form class="validate-form" novalidate="novalidate">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-old-password">Old Password</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" class="form-control" id="account-old-password" name="password" placeholder="Old Password">
                                                                    <div class="input-group-text cursor-pointer">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-new-password">New Password</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" id="account-new-password" name="new-password" class="form-control" placeholder="New Password">
                                                                    <div class="input-group-text cursor-pointer">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-retype-new-password">Retype New Password</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" class="form-control" id="account-retype-new-password" name="confirm-new-password" placeholder="New Password">
                                                                    <div class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary me-1 mt-1 waves-effect waves-float waves-light">Save changes</button>
                                                            <button type="reset" class="btn btn-outline-secondary mt-1 waves-effect">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--/ form -->
                                            </div>
                                            <!--/ change password -->
                                            <!-- information -->
                                            <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                                <!-- form -->
                                                <form class="validate-form" novalidate="novalidate">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="accountTextarea">Bio</label>
                                                                <textarea class="form-control" id="accountTextarea" rows="4" placeholder="Your Bio data here..."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-birth-date">Birth date</label>
                                                                <input type="text" class="form-control flatpickr flatpickr-input" placeholder="Birth date" id="account-birth-date" name="dob" readonly="readonly">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="accountSelect">Country</label>
                                                                <select class="form-select" id="accountSelect">
                                                                    <option>USA</option>
                                                                    <option>India</option>
                                                                    <option>Canada</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-website">Website</label>
                                                                <input type="text" class="form-control" name="website" id="account-website" placeholder="Website address">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-phone">Phone</label>
                                                                <input type="text" class="form-control" id="account-phone" placeholder="Phone number" value="(+656) 254 2568" name="phone">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mt-1 me-1 waves-effect waves-float waves-light">Save changes</button>
                                                            <button type="reset" class="btn btn-outline-secondary mt-1 waves-effect">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--/ form -->
                                            </div>
                                            <!--/ information -->
                                            <!-- social -->
                                            <div class="tab-pane fade" id="account-vertical-social" role="tabpanel" aria-labelledby="account-pill-social" aria-expanded="false">
                                                <!-- form -->
                                                <form class="validate-form" novalidate="novalidate">
                                                    <div class="row">
                                                        <!-- social header -->
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link font-medium-3">
                                                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                                                </svg>
                                                                <h4 class="mb-0 ms-75">Social Links</h4>
                                                            </div>
                                                        </div>
                                                        <!-- twitter link input -->
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-twitter">Twitter</label>
                                                                <input type="text" id="account-twitter" class="form-control" placeholder="Add link" value="https://www.twitter.com">
                                                            </div>
                                                        </div>
                                                        <!-- facebook link input -->
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-facebook">Facebook</label>
                                                                <input type="text" id="account-facebook" class="form-control" placeholder="Add link">
                                                            </div>
                                                        </div>
                                                        <!-- google plus input -->
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-google">Google+</label>
                                                                <input type="text" id="account-google" class="form-control" placeholder="Add link">
                                                            </div>
                                                        </div>
                                                        <!-- linkedin link input -->
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-linkedin">LinkedIn</label>
                                                                <input type="text" id="account-linkedin" class="form-control" placeholder="Add link" value="https://www.linkedin.com">
                                                            </div>
                                                        </div>
                                                        <!-- instagram link input -->
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-instagram">Instagram</label>
                                                                <input type="text" id="account-instagram" class="form-control" placeholder="Add link">
                                                            </div>
                                                        </div>
                                                        <!-- Quora link input -->
                                                        <div class="col-12 col-sm-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="account-quora">Quora</label>
                                                                <input type="text" id="account-quora" class="form-control" placeholder="Add link">
                                                            </div>
                                                        </div>
                                                        <!-- divider -->
                                                        <div class="col-12">
                                                            <hr class="my-2">
                                                        </div>
                                                        <div class="col-12 mt-1">
                                                            <!-- profile connection header -->
                                                            <div class="d-flex align-items-center mb-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-3">
                                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                                    <circle cx="12" cy="7" r="4"></circle>
                                                                </svg>
                                                                <h4 class="mb-0 ms-75">Profile Connections</h4>
                                                            </div>
                                                            <div class="row">
                                                                <!-- twitter user -->
                                                                <div class="col-6 col-md-3 text-center mb-1">
                                                                    <p class="fw-bold">Your Twitter</p>
                                                                    <div class="avatar mb-1">
                                                                        <span class="avatar-content">
                                                                            <img :src="$root.basepath + '/pixinvest/app-assets/images/avatars/6-small.png'" alt="avatar img" width="40" height="40">
                                                                        </span>
                                                                    </div>
                                                                    <p class="mb-0">@johndoe</p>
                                                                    <a href="#">Disconnect</a>
                                                                </div>
                                                                <!-- facebook button -->
                                                                <div class="col-6 col-md-3 text-center mb-1">
                                                                    <p class="fw-bold mb-2">Your Facebook</p>
                                                                    <button class="btn btn-outline-primary waves-effect">Connect</button>
                                                                </div>
                                                                <!-- google user -->
                                                                <div class="col-6 col-md-3 text-center mb-1">
                                                                    <p class="fw-bold">Your Google</p>
                                                                    <div class="avatar mb-1">
                                                                        <span class="avatar-content">
                                                                            <img :src="$root.basepath + '/pixinvest/app-assets/images/avatars/3-small.png'" alt="avatar img" width="40" height="40">
                                                                        </span>
                                                                    </div>
                                                                    <p class="mb-0">@luraweber</p>
                                                                    <a href="#">Disconnect</a>
                                                                </div>
                                                                <!-- github button -->
                                                                <div class="col-6 col-md-3 text-center mb-2">
                                                                    <p class="fw-bold mb-1">Your GitHub</p>
                                                                    <button class="btn btn-outline-primary waves-effect">Connect</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <!-- submit and cancel button -->
                                                            <button type="submit" class="btn btn-primary me-1 mt-1 waves-effect waves-float waves-light">Save changes</button>
                                                            <button type="reset" class="btn btn-outline-secondary mt-1 waves-effect">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--/ form -->
                                            </div>
                                            <!--/ social -->
                                            <!-- notifications -->
                                            <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel" aria-labelledby="account-pill-notifications" aria-expanded="false">
                                                <div class="row">
                                                    <h6 class="section-label mb-2">Activity</h6>
                                                    <div class="col-12 mb-2">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" checked="" id="accountSwitch1">
                                                            <label class="form-check-label" for="accountSwitch1">
                                                                Email me when someone comments onmy article
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" checked="" id="accountSwitch2">
                                                            <label class="form-check-label" for="accountSwitch2">
                                                                Email me when someone answers on my form
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" id="accountSwitch3">
                                                            <label class="form-check-label" for="accountSwitch3">Email me hen someone follows me</label>
                                                        </div>
                                                    </div>
                                                    <h6 class="section-label mt-2">Application</h6>
                                                    <div class="col-12 mt-1 mb-2">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" checked="" id="accountSwitch4">
                                                            <label class="form-check-label" for="accountSwitch4">News and announcements</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" checked="" id="accountSwitch6">
                                                            <label class="form-check-label" for="accountSwitch6">Weekly product updates</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-75">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" id="accountSwitch5">
                                                            <label class="form-check-label" for="accountSwitch5">Weekly blog digest</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mt-2 me-1 waves-effect waves-float waves-light">Save changes</button>
                                                        <button type="reset" class="btn btn-outline-secondary mt-2 waves-effect">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/ notifications -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ right content section -->
                        </div>
                    </section>
                    <!-- / account setting page -->
                </div>
            </div>
        </div>
        <!-- END: Content-->
        <!-- BEGIN: Footer-->
        <AdminFooter></AdminFooter>
        <!-- END: Footer-->
    </div>
</template>
<script>
export default {
    data() {
        return {

        }
    },

}

</script>
