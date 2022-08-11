<template>
     <div
            class="sidebar capsule--rounded bg_img overlay--dark"
            data-background="https://script.viserlab.com/hyiplab/demo/assets/admin/images/sidebar/2.jpg"
        >
            <button class="res-sidebar-close-btn">
                <i class="las la-times"></i>
            </button>
            <div class="sidebar__inner">
                <div class="sidebar__logo">
                    <a
                        href="https://script.viserlab.com/hyiplab/demo/admin/dashboard"
                        class="sidebar__main-logo"
                        ><img
                            src="https://script.viserlab.com/hyiplab/demo/assets/images/logoIcon/logo.png"
                            alt="image"
                    /></a>
                    <a
                        href="https://script.viserlab.com/hyiplab/demo/admin/dashboard"
                        class="sidebar__logo-shape"
                        ><img
                            src="https://script.viserlab.com/hyiplab/demo/assets/images/logoIcon/favicon.png"
                            alt="image"
                    /></a>
                    <button type="button" class="navbar__expand"></button>
                </div>

                <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
                    <ul class="sidebar__menu">
                        <li class="sidebar-menu-item active">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/dashboard"
                                class="nav-link"
                            >
                                <i class="menu-icon las la-home"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/referral"
                                class="nav-link"
                            >
                                <i class="menu-icon las la-tree"></i>
                                <span class="menu-title">Manage Referral</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-clipboard-check"></i>
                                <span class="menu-title">Plan Manage</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/time-setting"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Time Manage</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/plan-setting"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Plan Manage</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-users"></i>
                                <span class="menu-title">Manage Users</span>

                                <span
                                    class="menu-badge pill bg--primary ml-auto"
                                >
                                    <i class="fa fa-exclamation"></i>
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/users"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >All Users</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/users/active"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Active Users</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/users/banned"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Banned Users</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/users/email-unverified"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Email Unverified</span
                                            >

                                            <span
                                                class="menu-badge pill bg--primary ml-auto"
                                                >3</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/users/sms-unverified"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >SMS Unverified</span
                                            >
                                            <span
                                                class="menu-badge pill bg--primary ml-auto"
                                                >1</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/users/login/history"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Login History</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/users/send-email"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Send Email</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-credit-card"></i>
                                <span class="menu-title">Deposit System</span>
                                <span
                                    class="menu-badge pill bg--primary ml-auto"
                                >
                                    <i class="fa fa-exclamation"></i>
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/deposit/gateway"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Automatic Gateways</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/deposit/gateway/manual"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Manual Gateways</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/deposit/pending"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Pending Deposits</span
                                            >
                                            <span
                                                class="menu-badge pill bg--primary ml-auto"
                                                >359</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/deposit/approved"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Approved Deposits</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/deposit/successful"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Successful Deposits</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/deposit/rejected"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Rejected Deposits</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/deposit"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >All Deposits</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-bank"></i>
                                <span class="menu-title">Withdrawals </span>
                                <span
                                    class="menu-badge pill bg--primary ml-auto"
                                >
                                    <i class="fa fa-exclamation"></i>
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/withdraw/method"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Withdraw Methods</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/withdraw/pending"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Pending Log</span
                                            >

                                            <span
                                                class="menu-badge pill bg--primary ml-auto"
                                                >28</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/withdraw/approved"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Approved Log</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/withdraw/rejected"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Rejected Log</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/withdraw/log"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Withdrawals Log</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-ticket"></i>
                                <span class="menu-title">Support Ticket </span>
                                <span
                                    class="menu-badge pill bg--primary ml-auto"
                                >
                                    <i class="fa fa-exclamation"></i>
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/tickets"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >All Ticket</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/tickets/pending"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Pending Ticket</span
                                            >
                                            <span
                                                class="menu-badge pill bg--primary ml-auto"
                                                >555</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/tickets/closed"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Closed Ticket</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/tickets/answered"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Answered Ticket</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-list"></i>
                                <span class="menu-title">Report </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/report/transaction/deposit-wallet"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Transaction Log</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/report/plan"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Invest Plan Log</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/report/commissions/deposit"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Commission Log</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/promotional-tool"
                                class="nav-link"
                            >
                                <i class="menu-icon las la-ad"></i>
                                <span class="menu-title">Promotional Tool</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/subscriber"
                                class="nav-link"
                                data-default-url="https://script.viserlab.com/hyiplab/demo/admin/subscriber"
                            >
                                <i class="menu-icon las la-thumbs-up"></i>
                                <span class="menu-title">Subscribers </span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/language"
                                class="nav-link"
                                data-default-url="https://script.viserlab.com/hyiplab/demo/admin/language"
                            >
                                <i class="menu-icon las la-language"></i>
                                <span class="menu-title">Language </span>
                            </a>
                        </li>

                        <li class="sidebar__menu-header">Pages</li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/setting"
                                class="nav-link"
                            >
                                <i class="menu-icon las la-life-ring"></i>
                                <span class="menu-title">Settings</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/setting/logo-icon"
                                class="nav-link"
                            >
                                <i class="menu-icon las la-images"></i>
                                <span class="menu-title"
                                    >Logo Icon Setting</span
                                >
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/plugin"
                                class="nav-link"
                            >
                                <i class="menu-icon las la-cogs"></i>
                                <span class="menu-title">Plugins</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/seo"
                                class="nav-link"
                            >
                                <i class="menu-icon las la-globe"></i>
                                <span class="menu-title">SEO</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-envelope-o"></i>
                                <span class="menu-title">Email Manager</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/email-template/global"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Global Template</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/email-template/index"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Email Templates</span
                                            >
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/email-template/setting"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Email Configure</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-mobile"></i>
                                <span class="menu-title">SMS Manager</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/sms-template/global"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Global Setting</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/sms-template/setting"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >SMS Gateways</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/sms-template/index"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >SMS Templates</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/holiday-setting"
                                class="nav-link"
                            >
                                <i class="menu-icon la la-toggle-off"></i>
                                <span class="menu-title">Holiday Setting</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/cookie"
                                class="nav-link"
                            >
                                <i class="menu-icon las la-cookie-bite"></i>
                                <span class="menu-title">GDPR Cookie</span>
                            </a>
                        </li>

                        <li class="sidebar__menu-header">TEMPLATES</li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/frontend/templates"
                                class="nav-link"
                            >
                                <i class="menu-icon la la-html5"></i>
                                <span class="menu-title">Active Template</span>
                            </a>
                        </li>

                        <li class="sidebar__menu-header">PAGE BUILDER</li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/frontend/manage-pages"
                                class="nav-link"
                            >
                                <i class="menu-icon la la-list"></i>
                                <span class="menu-title">Manage Pages</span>
                            </a>
                        </li>

                        <li class="sidebar__menu-header">CONTENT MANAGER</li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-html5"></i>
                                <span class="menu-title">Section Manage</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/about"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >About</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/banner"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Banner Content</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/blog"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Blog Section</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/breadcrumb"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Breadcrumb</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/calculation"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Profit Calculator</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/contact"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Contact</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/cta"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Call To Action</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/faq"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/footer"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Footer</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/how_work"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >How Work</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/links"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Links</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/login"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Login</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/plan"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title">Plan</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/register"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Register</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/social_icon"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Social Icon</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/subscribe"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Subscribe Section</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/team"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Team Member</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/testimonial"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Testimonial</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/top_investor"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Top Investor</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/transaction"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Transaction Section</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/we_accept"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >We Accept Section</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a
                                            href="https://script.viserlab.com/hyiplab/demo/admin/frontend/frontend-sections/why_choose"
                                            class="nav-link"
                                        >
                                            <i
                                                class="menu-icon las la-dot-circle"
                                            ></i>
                                            <span class="menu-title"
                                                >Why Choose Us</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar__menu-header">Extra</li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/system-info"
                                class="nav-link"
                                data-default-url="https://script.viserlab.com/hyiplab/demo/admin/system-info"
                            >
                                <i class="menu-icon las la-server"></i>
                                <span class="menu-title"
                                    >System Information
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/custom-css"
                                class="nav-link"
                            >
                                <i class="menu-icon lab la-css3-alt"></i>
                                <span class="menu-title">Custom CSS</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/optimize"
                                class="nav-link"
                            >
                                <i class="menu-icon las la-broom"></i>
                                <span class="menu-title">Clear Cache</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/request-report"
                                class="nav-link"
                                data-default-url="https://script.viserlab.com/hyiplab/demo/admin/request-report"
                            >
                                <i class="menu-icon las la-bug"></i>
                                <span class="menu-title"
                                    >Report & Request
                                </span>
                            </a>
                        </li>
                    </ul>

                    <div class="text-center mb-3 text-uppercase">
                        <span class="text--primary">hyiplab</span>
                        <span class="text--success">V2.1 </span>
                    </div>
                </div>
            </div>
        </div>
</template>
<script>
    export default {
        
    mounted() {
            $(function(){
                var url = window.location.href
                $(".navigation a").each(function(){
                    if(url == (this.href)){
                        $(this).closest('li').addClass('active')
                        $(this).closest('li').parent().parent().addClass('active')
                    }
                })
            })
    },

    beforeCreate() {
        
    }

    
}
   
</script>
