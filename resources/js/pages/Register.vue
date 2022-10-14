<template>

    <div class="">
        <div class="appHeader no-border transparent position-absolute">
            <div class="left"> Create Account
            </div>
            <div class="pageTitle"></div>
            <div class="right">
                <div class="top-bar-item top-bar-item-full" id="id_100">
                    <div id="google_translate_element"></div>
                </div>
            </div>
        </div>

        <div id="appCapsule" class="cap mb-5">
            <div class="section mt-0 text-center">
                <a href="/">
                    <img :src="$root.basepath + '/assets/images/home/logo.png'" width="150px" />
                </a>

            </div>
            <div class="section mb-5 p-2">

                <form method="post" autocomplete="off" @submit.prevent="register" v-if="!success">
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                    <input type="hidden" name="action" value="validate_captcha">
                    <div class="card">
                        <div class="card-body pb-1">
                            <div class="form-group basic">
                                <div class="form-group">
                                    <div class="alert alert-danger m-3" v-if="has_error && !success">
                                        <p v-if="!unknown_error && errors" class="text-center m-3">
                                            You have some errors in your form
                                        </p>
                                        <p class="m-3 small" v-if="unknown_error">
                                            {{ unknown_error }}
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col  input-wrapper">
                                        <label class="label" for="">Last Name</label>
                                        <input type="text" v-model="last_name" :class="{
                                            'form-control': true,
                                            'error-input':
                                                errors.last_name != undefined,
                                        }" name="name"
                                            required>
                                        <p v-if="errors.last_name" v-for="error in errors.last_name"
                                            class="base--color m-0 p-1 pt-0 small">
                                            {{ error }}
                                        </p>
                                    </div>
                                    <div class="col input-wrapper">
                                        <label class="label" for="">First Name</label>
                                        <input type="text" v-model="first_name" :class="{
                                            'form-control': true,
                                            'error-input':
                                                errors.first_name != undefined,
                                        }" name="name" required>
                                        <p v-if="errors.first_name" v-for="error in errors.first_name"
                                            class="base--color m-0 p-1 pt-0 small">
                                            {{ error }}
                                        </p>
                                    </div>



                                </div>

                            </div>
                            <div class="form-group basic">
                                <div class="row ">
                                    <div class="col input-wrapper">
                                        <label class="label" for="email1">Email</label>
                                        <input type="email" v-model="email" :class="{
                                            'form-control': true,
                                            'error-input': errors.email != undefined,
                                        }" name="email" required>
                                        <p v-if="errors.email" v-for="error in errors.email"
                                            class="base--color m-0 p-1 pt-0 small">
                                            {{ error }}
                                        </p>
                                    </div>
                                    <div class="col input-wrapper">
                                        <label class="label" for="">Username</label>
                                        <input type="text" v-model="username" :class="{
                                            'form-control': true,
                                            'error-input': errors.username != undefined,
                                        }" name="username"
                                            required>

                                        <p v-if="errors.username" v-for="error in errors.username"
                                            class="base--color m-0 p-1 pt-0 small">
                                            {{ error }}
                                        </p>
                                    </div>
                                </div>




                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="password1">Phone number</label>
                                    <vue-tel-input v-model="number" mode="international"
                                        v-on:country-changed="countryChanged" :class="{
                                            'form-control': true,
                                            'wthree_input': true,
                                            'error-input': errors.number != undefined,
                                        }">>
                                    </vue-tel-input>
                                    <p v-if="errors.number" v-for="error in errors.number"
                                        class="base--color m-0 p-1 pt-0 small">
                                        {{ error }}
                                    </p>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class=" row ">
                                    <div class="col input-wrapper">
                                        <label class="label" for="password1">Password</label>
                                        <input type="password" :class="{
                                            'form-control': true,
                                            'error-input': errors.password != undefined,
                                        }" v-model="password" name="password" required>
                                        <p v-if="errors.password" v-for="error in errors.password"
                                            class="base--color m-0 p-1 pt-0 small">
                                            {{ error }}
                                        </p>
                                    </div>
                                    <div class="col input-wrapper">
                                        <label class="label" for="password1">Confirm Password</label>
                                        <input type="password" v-model="password_confirmation" :class="{
                                            'form-control': true,
                                            'error-input':
                                                errors.password_confirmation !=
                                                undefined,
                                        }" name="password2"
                                            required>
                                        <p v-if="errors.password_confirmation"
                                            v-for="error in errors.password_confirmation"
                                            class="base--color m-0 p-1 pt-0 small">
                                            {{ error }}
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="password1">Referred By</label>
                                    <input type="text" v-model="referral" name="upline_username" :class="{
                                        'form-control': true,
                                        'error-input':
                                            errors.referral !=
                                            undefined,
                                    }" readonly>
                                    <p v-if="errors.referral" v-for="error in errors.referral"
                                        class="base--color m-0 p-1 pt-0 small">
                                        {{ error }}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    Have an account? <a href="/login" class="text-primary">Login</a>
                                </div>
                            </div>
                            <input type="submit" ref="signup" class="btn btn-secondary btn-block btn-lg"
                                value="SignUp Now">
                        </div>
                    </div>

                </form>
            </div>


        </div>
 
        
  
        
<div class="modal dialogbox fade" id="checkemailmodal" role="dialog" data-bs-keyboard="true" data-bs-backdrop="static"
    tabindex="-1" aria-labelledby="vLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                &nbsp;
            </div>
            <div class="modal-body">
                <b>Registration Successfull!</b><br><a href="/login" class="btn btn-primary btn-block btn-lg">Please
                    check your email for verification link</a>
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <button type="button" class="btn btn-text-secondary disabled" disabled data-bs-dismiss="modal">CLOSE</button>
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
            first_name: "",
            last_name: "",
            number: "",
            email: "",
            country: "",
            username: "",
            password: "",
            password_confirmation: "",
            referral: this.$route.query.ref ? this.$route.query.ref : null,
            wallet: "",
            terms: true,
            has_error: false,
            error: "",
            errors: {},
            unknown_error: "",
            success: false,
            company: this.$root.appName,
            domain: this.$root.appDomain,
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
            this.$root.basepath + "/assets/js/home/ebuka.js"
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

        css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/vue-input.css"
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

        js = document.createElement("script");
        js.setAttribute(
            "src",
            "https://www.google.com/recaptcha/api.js?render=6LfVOFIcAAAAAJNh1Oa3oAU3PDrLxwNJhWonFUtA"
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

    // beforeDestroy(){this.},
    methods: {
        register() {
            this.$root.loader("show");
            this.processing(true);
            this.formDefault();
            var app = this;
            this.$auth.register({
                data: {
                    first_name: app.first_name,
                    email: app.email,
                    last_name: app.last_name,
                    number: app.number,
                    username: app.username,
                    pm: app.pm,
                    wallet: app.wallet,
                    user_level_id: 2,
                    referral: app.referral,
                    ip: this.$root.ip,
                    password: app.password,
                    password_confirmation: app.password_confirmation,
                    country: app.country,
                },
                success: function (res) {
                    this.$root.loader("hide");
                    // this.$root.alert(
                    //     "success",
                    //     " ",
                    //     "Registration Successful!!! Redirecting..."
                    // );
                    // this.$refs.checkemailmodal.click()
                    this.processing(false);
                    app.success = true;
                    var myModal = new bootstrap.Modal(document.getElementById('checkemailmodal'))
                    myModal.show()
                
                    // window.location.href = this.$root.basepath + '/login'
                    // this.$router.push({ name: 'login', params: { successRegistrationRedirect: true }, base : 'hash' })
                },
                error: function (res) {
                    this.processing(false);
                    this.$root.loader("hide");
                    window.scrollTo(0, 180);
                    app.has_error = true;
                    app.error = res.response.data.message;
                    app.errors =
                        typeof res.response.data.error == "string"
                            ? {}
                            : res.response.data.error;
                    app.unknown_error =
                        typeof res.response.data.error == "string"
                            ? res.response.data.error
                            : "";
                    this.$root.alert("error", " ", app.error);
                },
            });
        },
        formDefault() {
            this.success = false;
            this.unknown_error = "";
            this.errors = {};
            this.has_error = false;
        },
        processing(status) {
            if (status) {
                this.$refs.signup.value = "processing...";
                this.$refs.signup.disabled = true;
            } else {
                this.$refs.signup.value = "SignUp Now";
                this.$refs.signup.disabled = false;
            }
        },
        resendEmail() {
            this.form
                .post("/email/resend/")
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
        countryChanged(country) {
            this.country = country.name;
        },
    },
};
</script>
<style type="text/css">
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
