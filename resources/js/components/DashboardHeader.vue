<template>
    <header class="header animated fadeInDown menu-fixed">
        <div class="header__bottom">
            <div class="container">
                <nav class="navbar navbar-expand-xl p-0 align-items-center">
                    <a class="site-logo site-title" href="/"><img :src="$root.basepath + '/images/logo.png'" alt="site-logo"></a>
                    <ul class="account-menu mobile-acc-menu">
                        <li class="icon">
                            <a href="/login"><i class="las la-user"></i></a>
                        </li>
                    </ul>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main-menu m-auto">
                            <li>
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li>
                                <a href="/dashboard/deposit">Add deposit</a>
                            </li>
                            <li>
                                <a href="/dashboard/report/deposit">Deposit history</a>
                            </li>
                            <li>
                                <a href="/dashboard/withdraw">Withdraw</a>
                            </li>
                            <li>
                                <a href="/dashboard/report/withdraw">Withdrawal history</a>
                            </li>
                            <li><a href="/dashboard/report/withdraw">Referrals</a>
                            </li>
                            <li class="menu_has_children"><a href="#0">Account Setting</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Profile setup</a></li>
                                    <li><a href="login.html">Payment setup</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- <div class=" nav-right menu_has_children">
                            <ul class="navbar-nav main-menu account-menu ml-3">
                                <li class="menu_has_children icon"><a href="#0"><i class="las la-user"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="login.html">login</a>
                                        </li>
                                        <li>
                                            <a href="login.html">create account</a>
                                        </li>
                                    </ul>
                                      <select class="select d-inline-block w-auto ml-xl-3">
                                <option>Eng</option>
                                <option>Ban</option>
                                <option>Hin</option>
                            </select>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div><!-- header__bottom end -->
    </header>
</template>
<script>
import moment from 'moment'
export default {
    data() {
        return {

        }
    },
    computed: {
        getIp() {
            return this.$auth.user().ip != undefined ? this.$auth.user().ip : this.$root.ip
        },
        time() {
            return moment(this.$auth.user().created_at).format("MMM Do YYYY")
        }
    },
    mounted() {},
    methods: {}
}

</script>
