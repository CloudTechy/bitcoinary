<template>
    <!-- header-section start  -->
    <header class="header animated fadeInDown menu-fixed">
        <div class="header__bottom">
            <div class="container">
                <nav class="navbar navbar-expand-xl p-0 align-items-center">
                    <a class="site-logo site-title" href="/"
                        ><img
                            :src="$root.basepath + '/images/logo.png'"
                            alt="site-logo"
                    /></a>
                    <div class="account-menu mobile-acc-menu dropdown">
                        <a href="#" type="button" data-toggle="dropdown">
                            <div class="icon">
                                <i class="las la-user"></i>
                            </div>
                        </a>
                        <ul v-if="$auth.check()" class="dropdown-menu">
                            <div
                                class="font-weight-bold text-center text-capitalize p-1"
                            >
                                Hi {{ $auth.user().username }}
                            </div>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item pt-2">
                                <a tabindex="-1" href="/dashboard"
                                    >Goto Dashboard</a
                                >
                            </li>
                            <li class="dropdown-divider"></li>
                            <li @click="$auth.logout()" class="dropdown-item">
                                <a tabindex="-1" href="#">Sign out</a>
                            </li>
                        </ul>
                        <ul v-else class="dropdown-menu">
                            <div class="text-center font-weight-bold p-1">
                                Hello Guest
                            </div>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item pt-2">
                                <a tabindex="-1" href="/login">Login</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <a tabindex="-1" href="/register">Register</a>
                            </li>
                        </ul>
                    </div>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="menu-toggle"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <ul class="navbar-nav main-menu m-auto">
                            <li>
                                <!-- <router-link to="/">Home</router-link> -->
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/about">About</a>
                                <!-- <router-link to="/about">About</router-link> -->
                            </li>
                            <li>
                                <a href="/register">Get Started</a>
                                <!-- <router-link to="/register">Get Started</router-link> -->
                            </li>
                            <li>
                                <a href="/#packages">Investment plans</a>
                                <!-- <router-link to="/investmentPlans">Investment plans</router-link> -->
                            </li>
                            <li>
                                <a href="/partners">Partners</a>
                            </li>
                            <li>
                                <a href="/#faq">FAQ</a>
                                <!-- <router-link to="/faq">Faq</router-link> -->
                            </li>
                        </ul>
                        <div class="nav-right">
                            <div class="account-menu ml-3 dropdown">
                                <a
                                    href="#"
                                    type="button"
                                    data-toggle="dropdown"
                                >
                                    <div class="icon">
                                        <i class="las la-user"></i>
                                    </div>
                                </a>
                                <ul v-if="$auth.check()" class="dropdown-menu">
                                    <div
                                        class="font-weight-bold text-center text-capitalize p-1"
                                    >
                                        Hi {{ $auth.user().username }}
                                    </div>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item pt-2">
                                        <a tabindex="-1" href="/dashboard"
                                            >Goto Dashboard</a
                                        >
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li
                                        @click="$auth.logout()"
                                        class="dropdown-item"
                                    >
                                        <a tabindex="-1" href="#">Sign out</a>
                                    </li>
                                </ul>
                                <ul v-else class="dropdown-menu">
                                    <div
                                        class="text-center font-weight-bold p-1"
                                    >
                                        Hello Guest
                                    </div>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item pt-2">
                                        <a tabindex="-1" href="/login">Login</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item">
                                        <a tabindex="-1" href="/register"
                                            >Register</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div
                                id="google_translate_element"
                                class="w-auto m-1"
                            ></div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- header__bottom end -->
    </header>
</template>
<script>
export default {
    data() {
        return {
            routes: {
                // UNLOGGED
                unlogged: [
                    { name: "Register", path: "/register" },
                    { name: "Login", path: "/login" },
                ],
                // LOGGED USER
                user: [{ name: "Dashboard", path: "/dashboard" }],
                // LOGGED ADMIN
                admin: [{ name: "AdminDashboard", path: "/admin/dashboard" }],
            },
            rate: "",
        };
    },
    beforeCreate() {
        let js = document.createElement("script");
        js.setAttribute(
            "src",
            "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
        );
        document.body.appendChild(js);

        let style = document.createElement("link");
        style.href = "../css/all.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = "../css/line-awesome.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = "../css/vendor/animate.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = "../css/vendor/slick.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = "../css/vendor/dots.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = "../css/main.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        js = document.createElement("script");
        js.setAttribute("src", $root.basepath + "/js/slick.min.js.download");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", $root.basepath + "/js/wow.min.js.download");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", $root.basepath + "/js/contact.js.download");
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute("src", $root.basepath + "/js/k.js");
        document.body.appendChild(js);
    },
    computed: {},
    // components: { Menu },
    methods: {},
    mounted() {
        // console.log(this.$auth)
    },
};
</script>
<style scoped="">
.icon {
    background-color: unset;
    width: unset;
    height: unset;
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}

.dropdown-menu {
    margin: 1.125rem 0 0;
    color: white;
    background-color: #cca354;
}

.divider {
    border-top: 1px solid black !important;
}

.icon:hover {
    color: #000000 !important;
    background-color: #b78b36 !important;
}

.dropdown-item > a {
    color: black;
}

.dropdown-item > a:hover {
    color: #cca354 !important;
}

.dropdown-item:active {
    background-color: black !important;
    color: white !important;
}

.dropdown-divider {
    margin: unset;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: -100%;
}
</style>
