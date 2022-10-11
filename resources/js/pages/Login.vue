<template>

    <div class="">
        <div class="appHeader no-border transparent position-absolute">
            <div class="left"> Login
            </div>
            <div class="pageTitle"></div>
            <div class="right">
                <div class="top-bar-item top-bar-item-full" id="id_100">
                    <div id="google_translate_element"></div>
                </div>
            </div>
        </div>

        <div id="appCapsule" class="cap">
            <div class="section mt-2 text-center">
                <a href="/">
                    <img :src="$root.basepath + '/assets/images/home/logo.png'" width="150px" />
                </a>

            </div>
            <div class="section mb-5 p-2">
                <form autocomplete="off" @submit.prevent="login" class="agile_form" method="post">

                    <div class="form-group">
                        <div class="alert alert-danger m-2" v-if="has_error && !success">
                            <p v-if="error.error" class="text-center m-2">
                                {{ error.message }}
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body pb-1">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email">Email</label>
                                    <input type="text" v-model="email" class="form-control" name="email" required>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="password1">Password</label>
                                    <input type="password" v-model="password" class="form-control" name="password"
                                        required>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <a href="/forgot_password" class="text-primary">Need some help?</a> | <a
                                        href="/register" class="text-primary">Register</a>
                                </div>
                            </div>
                            <input type="submit" ref="signin" class="btn btn-secondary btn-block btn-lg"
                                name="user_login" value="Sign In">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div v-if = "verifyUser" class="modal fade dialogbox" id="myModal" data-bs-backdrop="true" tabindex="-1" role="dialog" aria-modal="true"
            >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    Your email is not verified!
                    </div>
                    <div class="modal-body">
                        <span class="danger"></span> <br> Your verification details has been sent to
                        <strong class="text-primary">{{email}}</strong>.<br> <br>please check your inbox or spam
                        folder and follow the instructions
                    </div>
                    <div class="modal-footer">
                        <div class="btn-inline">
                            <button type="button" class="btn btn-text-secondary" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
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
            verifyUser: undefined,
        };
    },
    mounted() {
        document.body.classList.add("authbody")
        this.$root.scrollUp();
        window.addEventListener("beforeunload", () => {
            if (!this.$auth.user().isEmailVerified) {
                this.$auth.logout();
            }
        });

        var js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/splide.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/fontawesome.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/all.min.js"
        );
        document.body.appendChild(js);

    },
    created() {
        var css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/bootstrap.min.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);

        css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/font-awesome.min.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);


        css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/login-style.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);

        css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/others.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);

        css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/custom.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);

        var js = document.createElement("script");
        js.setAttribute(
            "src",
            "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
        );
        js.setAttribute("async", true);
        document.body.appendChild(js);
    },
    beforeMount() {
        var js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/jquery.min.js"
        );
        js.setAttribute("async", true);
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/bootstrap.bundle.min.js"
        );
        document.body.appendChild(js);
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
                    app.$root.loader("hide");
                    app.processing(false);
                   
                    // if (redirect && !app.$auth.user().isEmailVerified) {
                    // if (redirect.from.path == "/confirm-registration") {
                    // app.$router.push(redirect.from.fullPath)
                    // }
                    // }

                    if (app.$auth.user().isEmailVerified) {
                        this.$root.alert(
                            "success",
                            " ",
                            "Login successful, redirecting..."
                        );
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
                    else {
                        app.verifyUser = true
                        this.resendEmail()
                        
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
                this.$refs.signin.value = "Signing in...";
                this.$refs.signin.disabled = true;
            } else {
                this.$refs.signin.value = "Login Now";
                this.$refs.signin.disabled = false;
            }
        },
        resendEmail() {
            var form = new Form({ email: this.email, password: this.password });
            form.get("auth/email/resend/")
                .then((response) => {
                    var myModal = new bootstrap.Modal(document.getElementById('myModal'))
                    myModal.show()
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
.cap {
    left: 0;
    right: 0;
    top: 15%;
    width: 480px;
    margin: 0 auto
}

@media only screen and (max-width: 600px) {
    .cap {
        left: 0;
        right: 0;
        top: 0;
        width: 100%;
        margin: 0 auto
    }
}
</style>
