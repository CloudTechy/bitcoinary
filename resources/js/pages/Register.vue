<template>
    <div class="main">
        <h1>
            <div
                class="sitelogo"
                style="background: rgba(1, 0, 21, 0.66); padding: 15px 0 5px"
            >
                <a href="/"
                    ><img
                        src="assets/images/logo2.png"
                        width="230"
                        height=""
                        alt="site logo"
                /></a>
            </div>
        </h1>
        <div class="w3_agile_main_grids">
            <form
                class="agile_form"
                method="post"
                autocomplete="off"
                @submit.prevent="register"
                v-if="!success"
            >
                <div class="form-group">
                    <div 
                        class="alert alert-danger m-3"
                        v-if="has_error && !success"
                    >
                        <p
                            v-if="!unknown_error && errors"
                            class="text-center m-3"
                        >
                            You have some errors in your form
                        </p>
                        <p class="m-3 small" v-if="unknown_error">
                            {{ unknown_error }}
                        </p>
                    </div>
                </div>
                <input
                    type="hidden"
                    name="_token"
                    value="xpWr6vXT9IWQ3A6oIZ0P0qYFFCiLgZjh8MJtWq5p"
                />
                <h3>Account Signup</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-12 form-group">
                        <div class="wthree_input">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input
                                type="text"
                                v-model="first_name"
                                :class="{
                                    'form-control': true,
                                    'error-input':
                                        errors.first_name != undefined,
                                }"
                                placeholder="Enter first name"
                                size="30"
                                value=""
                                autofocus="autofocus"
                                required=""
                            />
                            <p
                                v-if="errors.first_name"
                                v-for="error in errors.first_name"
                                class="base--color m-0 p-2 small"
                            >
                                {{ error }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <div class="wthree_input">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input
                                type="text"
                                v-model="last_name"
                                :class="{
                                    'form-control': true,
                                    'error-input':
                                        errors.last_name != undefined,
                                }"
                                size="30"
                                placeholder="Enter last name"
                                value=""
                                required=""
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 form-group">
                            <vue-tel-input
                                v-model="number"
                                :class="{
                                    'form-control': true,
                                    'wthree_input': true,
                                    'error-input': errors.number != undefined,
                                }"
                                >>
                            </vue-tel-input>
                            <p
                                v-if="errors.number"
                                v-for="error in errors.number"
                                class="base--color m-0 p-2 small"
                            >
                                {{ error }}
                            </p>
                    </div>
                    <div class="col-md-6 col-sm-6 form-group">
                        <div class="wthree_input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input
                                type="email"
                                required=""
                                v-model="email"
                                placeholder="Email address"
                                :class="{
                                    'form-control': true,
                                    'error-input': errors.email != undefined,
                                }"
                            />
                            <p
                                v-if="errors.email"
                                v-for="error in errors.email"
                                class="base--color m-0 p-2 small"
                            >
                                {{ error }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 form-group">
                        <div class="wthree_input">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input
                                type="text"
                                required
                                v-model="username"
                                placeholder="Username"
                                :class="{
                                    'form-control': true,
                                    'error-input': errors.username != undefined,
                                }"
                            />
                            <p
                                v-if="errors.username"
                                v-for="error in errors.username"
                                class="base--color m-0 p-2 small"
                            >
                                {{ error }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <div class="wthree_input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input
                                type="password"
                                required
                                min="4"
                                v-model="password"
                                placeholder="password"
                                :class="{
                                    'form-control': true,
                                    'error-input': errors.password != undefined,
                                }"
                            />
                            <p
                                v-if="errors.password"
                                v-for="error in errors.password"
                                class="base--color m-0 p-2 small"
                            >
                                {{ error }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 form-group">
                        <div class="wthree_input">
                            <i style="left: 2%;" class="fa fa-lock fas" aria-hidden="true"></i> 
                            <input
                                type="password"
                                min="4"
                                required
                                placeholder="Confirm Password"
                                v-model="password_confirmation"
                                :class="{
                                    'form-control': true,
                                    'error-input':
                                        errors.password_confirmation !=
                                        undefined,
                                }"
                            />
                            <p
                                v-if="errors.password_confirmation"
                                v-for="error in errors.password_confirmation"
                                class="base--color m-0 p-2 small"
                            >
                                {{ error }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input
                            style="opacity: 1"
                            checked
                            v-model="terms"
                            type="checkbox"
                            class="form-check-input"
                            id="terms"
                        />
                        <span class="f-size-14 ml-4 text-white"
                            >I agree with
                            <a class="base--color" href="/terms">
                                Terms &amp; Conditions</a
                            >
                        </span>
                        <p
                            v-if="errors.terms && !terms"
                            class="text-danger m-0 p-2"
                        >
                            You will need to accept the terms to proceed.
                        </p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12">
                        <button
                            :disabled="!terms"
                            ref="signup"
                            type="submit"
                            :class="{
                                'btn-primary': true,
                                btn: true,
                                disabled: !terms,
                            }"
                            style="margin-top: 10px; width: 100%"
                        >
                            Signup Now
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
                            <a href="/forgot_password" class="base--color">Reset Now</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="progress">
                        <p class="f-size-14">
                            Already have an account?
                            <a href="/login" class="base--color">Sign In</a>
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
            first_name: "",
            last_name: "",
            number: "",
            email: "",
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
    mounted() {},
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
        var css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/vue-input.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);
    },
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
                },
                success: function () {
                    this.$root.loader("hide");
                    this.$root.alert(
                        "success",
                        " ",
                        "Registration Successful!!! Redirecting..."
                    );
                    this.processing(false);
                    app.success = true;
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
                this.$refs.signup.innerText = "processing...";
                this.$refs.signup.disabled = true;
            } else {
                this.$refs.signup.innerText = "SignUp Now";
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
    },
};
</script>
<style type="text/css">
@import "../assets/ebuka.css";
@import "../assets/css/style37913791.css";
@import "../assets/css/skin/skin-25b275b27.css";
@import "../assets/plugins/pace/pace.css";
@import "../assets/plugins/revolution/revolution/css/settings.css";
@import "../assets/plugins/revolution/revolution/css/navigation.css";



/* .vue-tel-input {
    border-radius: 3px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border: 1px solid #bbb;
    text-align: left;
    
}
.vti__selection {
    font-size: .8em;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    overflow : auto;
} */
/*    .box {
  background: #666666;
  color: #ffffff;
  width: 250px;
  padding: 10px;
  margin: 1em auto;
}
p {
  margin: 1.5em 0;
  padding: 0;
}*/
</style>
