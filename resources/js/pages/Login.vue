<template>
    <div class="main">
        <h1>
            <div
                class="sitelogo"
                style="background: rgba(1, 0, 21, 0.66); padding: 15px 0 5px"
            >
                <a href="/"
                    ><img
                        :src= '$root.basepath +"/assets/images/logo2.png"'
                        width="230"
                        height=""
                        alt="site logo"
                /></a>
            </div>
        </h1>
        <div class="w3_agile_main_grids">
            <form
                autocomplete="off"
                @submit.prevent="login"
                class="agile_form"
                method="post"
            >
                <div class="form-group">
                    <div class="alert alert-danger m-2"
                        v-if="has_error && !success"
                    >
                        <p v-if="error.error" class="text-center m-2">
                            {{ error.message }}
                        </p>
                    </div>
                </div>
                <h3>Account Login</h3>
                <div class="row">
                    <div class="col-md-12 col-sm-12 form-group">
                        <div class="wthree_input">
                            <i style = "left:2%" class="fa fa-envelope" aria-hidden="true"></i>
                            <input
                                type="email"
                                v-model="email"
                                class="form-control"
                                placeholder="Enter your email"
                                size="30"
                                autofocus="autofocus"
                                required=""
                                style="width: 100%"
                            />
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 form-group">
                        <div class="wthree_input">
                            <i style = "left:2%" class="fa fa-lock" aria-hidden="true"></i>
                            <input
                                type="password"
                                v-model="password"
                                class="form-control"
                                size="30"
                                placeholder="Enter password"
                                required=""
                                style="width: 100%"
                            />
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12">
                        <button
                            type="submit"
                            ref="signin"
                            class="btn btn-primary"
                            style="margin-top: 10px; width: 100%"
                        >
                            Login Now
                        </button>
                    </div>
                </div>
                <div class="clear"></div>
            </form>
            <div class="form-row mt-2">
                <div class="col-sm-6">
                    <div id="progress">
                        <p class="f-size-14">
                            Forgot Password?
                            <a href="/forgot_password" class="base--color"
                                >Reset Now</a
                            >
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="progress">
                        <p class="f-size-14">
                            Don't have an account?
                            <a href="/register" class="base--color">Sign Up</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-5 agileits_copyright">
                <span class="copyrights-text text-white"
                    >© {{$root.fullYearTemplate}}
                    <a href="/" class="base--color">{{ company }}</a
                    >. All rights reserved</span
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: null,
            password: null,
            success: false,
            has_error: false,
            error: "",
            rememberMe: false,
            redirectTo: "",
            redirectPath: "",
            company: this.$root.appName,
            domain: this.$root.appDomain,
        };
    },
    mounted() {
        this.$root.scrollUp();
        window.addEventListener("beforeunload", () => {
            if (!this.$auth.user().isEmailVerified) {
                this.$auth.logout();
            }
        });
    },
    created() {
        var css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/bootstrap.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);
        var css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/stylec31c.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);
    },
    methods: {
        login() {
            this.$root.loader("show");
            this.processing(true);
            this.formDefault();
            var redirect = this.$auth.redirect();
            var app = this;
            this.$auth.login({
                data: {
                    email: app.email,
                    password: app.password,
                },
                success: function (response) {
                    window.localStorage.setItem(
                        "lbUser",
                        JSON.stringify(app.$auth.user())
                    );
                    app.success = true;
                    this.$root.alert(
                        "success",
                        " ",
                        "Login successful, redirecting..."
                    );
                    // if (redirect && !app.$auth.user().isEmailVerified) {
                    // if (redirect.from.path == "/confirm-registration") {
                    // app.$router.push(redirect.from.fullPath)
                    // }
                    // }

                    if (app.$auth.user().isEmailVerified) {
                        if (redirect) {
                            app.redirectTo = redirect.from.name;
                            app.redirectPath = redirect.from.path;
                        } else if (app.$auth.user().isAdmin) {
                            app.redirectTo = "adminDashboard";
                            app.redirectPath = "/admin/dashboard";
                        } else {
                            app.redirectTo = "dashboard";
                            app.redirectPath = "/dashboard";
                        }
                        console.log(app.redirectPath);
                        // app.$router.push({ name: 'adminDashboard' })
                        window.location.assign(basepath + app.redirectPath);
                        // app.processing(false)
                        // app.$root.loader('hide')
                    }
                },
                error: function (res) {
                    app.$root.loader("hide");
                    window.scrollTo(0, 180);
                    app.processing(false);
                    app.has_error = true;
                    app.error = res.response ? res.response.data : {};
                    // app.$root.alert('error', ' ', app.error.error ? app.error.error.error : 'An unknown error has occured, please try again later.')
                    console.log(res.response.data.error.error);
                },
                rememberMe: app.rememberMe,
                fetchUser: true,
            });
        },
        formDefault() {
            this.success = false;
            this.error = "";
            this.has_error = false;
        },
        processing(status) {
            if (status) {
                this.$refs.signin.innerText = "Signing in...";
                this.$refs.signin.disabled = true;
            } else {
                this.$refs.signin.innerText = "Login Now";
                this.$refs.signin.disabled = false;
            }
        },
        resendEmail() {
            var form = new Form({ email: this.email, password: this.password });
            form.get("auth/email/resend/")
                .then((response) => {
                    this.$root.alert("success", " ", "Email has been sent");
                })
                .catch((error) => {
                    this.$root.alert(
                        "error",
                        " ",
                        "Email was not sent, try again"
                    );
                    console.log(error.response);
                });
        },
    },
};
</script>
<style scoped>


</style>
