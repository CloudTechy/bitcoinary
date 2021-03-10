<template>
    <div class="page-wrapper">
        <Header></Header>
        <!-- account section start -->
        <div class="account-section bg_img" :style="'background:url('+ $root.basepath + '/images/bg/bg-5.jpg'">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="account-card">
                            <div class="account-card__header bg_img overlay--one" :style="'background:url('+ $root.basepath + '/images/bg/bg-6.jpg'">
                                <h2 class="section-title text-center">Welcome to <span class="base--color">Bitcoinary Mint</span></h2>
                            </div>
                            <div class="account-card__body">
                                <h3 class="text-center">Login</h3>
                                <form class="mt-4" autocomplete="off" @submit.prevent="login" method="post">
                                    <div class="form-group">
                                        <div :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-5.jpg )'}" class="error-msg  m-3" v-if="has_error && !success  ">
                                            <p v-if="error.error" class="text-center m-3 small">{{error.message}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" placeholder="Enter email address" v-model="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" placeholder="Enter password" v-model="password" required class="form-control">
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-check">
                                                <input v-model="rememberMe" type="checkbox" class="form-check-input" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <p class="f-size-14">Not yet a member? <a href="/register" class="base--color">Sign Up</a></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-sm-right">
                                            <p class="f-size-14 mb-3">Forgotten password? <a href="/forgot_password" class="base--color">Reset</a></p>
                                        </div>
                                    </div>
                                    <button ref="signin" type="submit" class="cmn-btn">Login Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer></Footer>
    </div>
    <!-- account section end -->
</template>
<script>
export default {
    data() {
        return {
            email: null,
            password: null,
            success: false,
            has_error: false,
            error: '',
            rememberMe: false
        }
    },
    mounted() {
        this.$root.scrollUp()
        window.addEventListener('beforeunload', () => {
            if (!this.$auth.user().isEmailVerified) {
                this.$auth.logout()
            }
        })

    },
    methods: {
        login() {
            this.$root.loader('show')
            this.processing(true)
            this.formDefault()
            var redirect = this.$auth.redirect()
            var app = this
            this.$auth.login({
                data: {
                    email: app.email,
                    password: app.password
                },
                success: function(response) {
                    this.processing(false)
                    this.$root.loader('hide')
                    var redirectTo = 'dashboard'
                    app.success = true
                    if (redirect && !this.$auth.user().isEmailVerified) {
                        if (redirect.from.path == "/confirm-registration") {
                            this.$router.push(redirect.from.fullPath)
                        }
                    }
                    if (this.$auth.user().isEmailVerified) {
                        if (redirect) {
                            redirectTo = redirect.from.name
                        } else if (this.$auth.user().isAdmin) {
                            redirectTo = 'adminDashboard'
                        }
                        this.$router.push({ name: redirectTo })
                    }
                },
                error: function(res) {
                    this.$root.loader('hide')
                    window.scrollTo(0, 180)
                    this.processing(false)
                    app.has_error = true
                    app.error = res.response ? res.response.data : {}
                    this.$root.alert('error', ' ', app.error.error ? app.error.error.error : 'An unknown error has occured, please try again later.')
                    console.log(res.response.data.error.error)
                },
                rememberMe: app.rememberMe,
                fetchUser: true
            })
        },
        formDefault() {
            this.success = false
            this.error = ""
            this.has_error = false
        },
        processing(status) {
            if (status) {
                this.$refs.signin.innerText = "Signing in..."
                this.$refs.signin.disabled = true
            } else {
                this.$refs.signin.innerText = "Login Now"
                this.$refs.signin.disabled = false
            }
        },
        resendEmail() {
            var form = new Form({ email: this.email, password: this.password })
            form.get("auth/email/resend/")
                .then(response => {
                    this.$root.alert('success', ' ', 'Email has been sent')
                })
                .catch(error => {
                    this.$root.alert('error', ' ', 'Email was not sent, try again')
                    console.log(error.response)
                })
        }
    },

}

</script>
