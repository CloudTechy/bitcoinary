<template>
    <!-- header-section start  -->
    <header class="header animated fadeInDown menu-fixed">
        <div class="header__bottom">
            <div class="container">
                <nav class="navbar navbar-expand-xl p-0 align-items-center">
                    <a class="site-logo site-title" href="/"><img :src="$root.basepath + '/images/logo.png'" alt="site-logo"></a>
                    <ul class="account-menu mobile-acc-menu">
                        <li class="icon">
                            <a title="logout" v-if="$auth.check()" @click="$auth.logout()"><i class="las la-user"></i></a>
                            <a title="login" v-else href="/login"><i class="las la-user"></i></a>
                        </li>
                    </ul>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                            <li><a href="/#faq">FAQ</a>
                                <!-- <router-link to="/faq">Faq</router-link> -->
                            </li>
                            <!-- <li>
                                <a href="https://tawk.link/5be61a8a70ff5a5a3a717ba7/vc/5c0a5e54af5de8c7a62ef1f4/v/f6499c5fa1bda2dc59c0aaf0ca87fa79564509c1/BitcoinaryFinance">Company Certificate</a>
                            </li> -->
                            <!-- <li>
                                <a href="/news">Blog</a>
                            </li> -->
                            <!-- <li>
                                <a href="/support">Support</a>
                            </li> -->
                            <!--  <li> <a href="index.html">Home</a></li>
                            <li> <a href="about.html">About Us</a></li>
                            <li> <a href="plan.html">Plan</a></li>
                            <li><a href="dashboard.html">Dashboard</a></li>
                            <li class="menu_has_children"><a href="#0">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Posts</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="menu_has_children"><a href="#0">Page</a>
                                <ul class="sub-menu">
                                    <li><a href="error-404.html">Error - 404</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li> -->
                        </ul>
                        <div class="nav-right">
                            <ul class="account-menu ml-3">
                                <li class="icon">
                                     <a title="logout" v-if="$auth.check()" @click="$auth.logout()"><i class="las la-user"></i></a>
                            <a title="login" v-else href="/login"><i class="las la-user"></i></a>
                                </li>
                            </ul>
                            <select class="select d-inline-block w-auto ml-xl-3">
                                <option><a href="#">Eng</a></option>
                                <option>Ban</option>
                                <option>Hin</option>
                            </select>
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
                    { name: 'Register', path: '/register' },
                    { name: 'Login', path: '/login' }
                ],
                // LOGGED USER
                user: [
                    { name: 'Dashboard', path: '/dashboard' }
                ],
                // LOGGED ADMIN
                admin: [
                    { name: 'AdminDashboard', path: '/admin/dashboard' }
                ]
            },
            rate: ''
        }
    },
    computed: {},
    // components: { Menu },
    methods: {


    },
    mounted() {
        // console.log(this.$auth)
    }
}

</script>
<style scoped="">
.icon {
    background-color: unset;
}

</style>
