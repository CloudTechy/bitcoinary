<template>
    <main>
        <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
            <div class="navbar-container d-flex content">
                <div class="bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav d-xl-none">
                        <li class="nav-item"><a href="#" class="nav-link menu-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon">
                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                </svg></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                                <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                                <ul class="search-list search-list-bookmark"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav align-items-center ms-auto">
                    <!--  <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a></li> -->
                    <li class="nav-item dropdown dropdown-notification me-25"><a href="#" data-bs-toggle="dropdown" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell ficon">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg><span class="badge rounded-pill bg-danger badge-up">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header d-flex">
                                    <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                    <div class="badge rounded-pill badge-light-primary">6 New</div>
                                </div>
                            </li>
                            <li class="scrollable-container media-list">
                                <a class="d-flex" href="#">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar"><img :src="$root.basepath + '/pixinvest/avatar-s-15.jpg'" alt="avatar" width="32" height="32"></div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span class="fw-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="list-item d-flex align-items-center">
                                    <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                    <div class="form-check form-check-primary form-switch">
                                        <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                        <label class="form-check-label" for="systemNotification"></label>
                                    </div>
                                </div>
                                <a class="d-flex" href="#">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span class="fw-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to high CPU usage</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="d-flex" href="#">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-success">
                                                <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span class="fw-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="d-flex" href="#">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-warning">
                                                <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all notifications</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">John Doe</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" :src="$root.basepath + '/pixinvest/avatar-s-11.jpg'" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="me-50" data-feather="check-square"></i> Task</a>
                            <a class="dropdown-item" href="app-chat.html"><i class="me-50" data-feather="message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings.html"><i class="me-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50" data-feather="credit-card"></i> Pricing</a>
                            <a class="dropdown-item" href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item" href="page-auth-login-v2.html"><i class="me-50" data-feather="power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <ul class="main-search-list-defaultlist d-none">
            <li class="d-flex align-items-center">
                <a href="#">
                    <h6 class="section-label mt-75 mb-0">Files</h6>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                    <div class="d-flex">
                        <div class="me-75"><img :src="$root.basepath + '/pixinvest/xls.png'" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                        </div>
                    </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                    <div class="d-flex">
                        <div class="me-75"><img :src="$root.basepath + '/pixinvest/jpg.png'" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                        </div>
                    </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                    <div class="d-flex">
                        <div class="me-75"><img :src="$root.basepath + '/pixinvest/pdf.png'" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                        </div>
                    </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                    <div class="d-flex">
                        <div class="me-75"><img :src="$root.basepath + '/pixinvest/doc.png'" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                        </div>
                    </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
                </a>
            </li>
            <li class="d-flex align-items-center">
                <a href="#">
                    <h6 class="section-label mt-75 mb-0">Members</h6>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-75"><img :src="$root.basepath + '/pixinvest/avatar-s-8.jpg'" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-75"><img :src="$root.basepath + '/pixinvest/avatar-s-1.jpg'" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-75"><img :src="$root.basepath + '/pixinvest/avatar-s-14.jpg'" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-75"><img :src="$root.basepath + '/pixinvest/avatar-s-6.jpg'" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="main-search-list-defaultlist-other-list d-none">
            <li class="auto-suggestion justify-content-between">
                <a class="d-flex align-items-center justify-content-between w-100 py-50">
                    <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
                </a>
            </li>
        </ul>
    </main>
</template>
<script>
import moment from 'moment'
export default {
    data() {
        return {

        }
    },
    head: {
        script: [
            // { type: 'text/javascript', src: '../../pixinvest/app-assets/js/core/app-menu.min.js', async: true, body: true },
            { type: 'text/javascript', src: '../../pixinvest/app-assets/js/scripts/customizer.min.js', async: true, body: true },

        ],
    },
    beforeCreate() {
        let mainCSS = document.querySelector('link[href$="main.css"]')
        let body = document.getElementById("body")
        let html = document.getElementById("html")
        if (mainCSS != null) {
            document.querySelector('link[href$="all.min.css"]').remove()
            document.querySelector('link[href$="line-awesome.min.css"]').remove()
            document.querySelector('link[href$="animate.min.css"]').remove()
            document.querySelector('link[href$="slick.css"]').remove()
            mainCSS.remove()
            html.setAttribute("data-layout", "dark-layout")
            html.setAttribute("style", "--vh:6.38px;")
            html.classList.add('dark-layout')
            body.setAttribute("data-open", "click")
            body.setAttribute("data-menu", "vertical-menu-modern")
            body.className = 'pace-done vertical-layout vertical-menu-modern  navbar-floating footer-static'
        }

    },
    mounted() {},
    computed: {
        getIp() {
            return this.$auth.user().ip != undefined ? this.$auth.user().ip : this.$root.ip
        },
        time() {
            return moment(this.$auth.user().created_at).format("MMM Do YYYY")
        }
    },
    methods: {}
}

</script>
