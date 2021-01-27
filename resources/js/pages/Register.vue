<template>
    <div class="page-wrapper">
        <!-- account section start -->
        <div class="account-section bg_img" :data-background="$root.basepath + '/images/bg/bg-5.jpg'">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="account-card">
                            <div class="account-card__header bg_img overlay--one" :data-background="$root.basepath + '/images/bg/bg-6.jpg'">
                                <h2 class="section-title text-center">Welcome to <span class="base--color">Bitcoinary Mint</span></h2>
                            </div>
                            <div class="account-card__body">
                                <h3 class="text-center">Create an Account</h3>
                                <form class="mt-4" autocomplete="off" @submit.prevent="register" v-if="!success" method="post">
                                    <div class="form-group">
                                        <div class="error-msg  m-3" v-if="has_error && !success">
                                            <p class="p-2 m-3" v-if="error == 'registration_validation_error'">Validation Errors.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" required v-model="first_name" placeholder="Your first name" :class="{'form-control' : true, 'error-input': errors.first_name != undefined}">
                                        <p v-if="errors.first_name" v-for="error in errors.first_name" class="text-danger m-0 p-2">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" required placeholder="Your last name" v-model="last_name" :class="{'form-control' : true, 'error-input': errors.last_name != undefined}">
                                        <p v-if="errors.last_name" v-for="error in errors.last_name" class="text-danger m-0 p-2">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" required v-model="username" placeholder="Username" :class="{'form-control' : true, 'error-input': errors.username != undefined}">
                                        <p v-if="errors.username" v-for="error in errors.username" class="text-danger m-0 p-2">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" required="" v-model="email" placeholder="Email address" :class="{'form-control' : true, 'error-input': errors.email != undefined}">
                                        <p v-if="errors.email" v-for="error in errors.email" class="text-danger m-0 p-2">{{error}}</p>
                                    </div>
                                <!--     <div class="form-group">
                                        <label>Phone Number</label>
                                        <vue-tel-input v-model="number" :class="{'form-control' : true, 'error-input': errors.number != undefined}">>
                                        </vue-tel-input>
                                        <p v-if="errors.number" v-for="error in errors.number" class="text-danger m-0 p-2">{{error}}</p>
                                    </div> -->
                                    <div class="form-group">
                                        <label>BTC Wallet</label>
                                        <input type="text" placeholder="Your Bitcoin wallet address" v-model="wallet" :class="{'form-control' : true, 'error-input': errors.wallet != undefined}">
                                        <p v-if="errors.wallet" v-for="error in errors.wallet" class="text-danger m-0 p-2">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" min="4" required placeholder="Password" v-model="password" :class="{'form-control' : true, 'error-input': errors.password != undefined}">
                                        <p v-if="errors.password" v-for="error in errors.password" class="text-danger m-0 p-2">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" min="4" required placeholder="Confirm Password" v-model="password_confirmation" :class="{'form-control' : true, 'error-input': errors.password_confirmation != undefined}">
                                        <p v-if="errors.password_confirmation" v-for="error in errors.password_confirmation" class="text-danger m-0 p-2">{{error}}</p>
                                    </div>
                                    <div class="form-group form-check">
                                        <input checked="" v-model="terms" type="checkbox" class="form-check-input" id="terms">
                                        <label class="form-check-label" for="terms"> I agree to the <a href="/terms" class="base--color">terms & condition</a></label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-check">
                                                <input checked="" type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-sm-right">
                                            <p class="f-size-14">Have an account? <a href="/login" class="base--color">Login</a></p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button class="cmn-btn">SignUp Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account section end -->
    </div>
</template>
<script>
    export default {
    data() {
        return {
            first_name: '',
            last_name: '',
            // number: '',
            email: '',
            username: '',
            email_confirmation: '',
            password: '',
            password_confirmation: '',
            secret_answer: '',
            secret_question: '',
            pm: '',
            referral: this.$route.query.ref ? this.$route.query.ref : null,
            wallet: '',
            terms: true,
            has_error: false,
            error: '',
            errors: {},
            success: false
        }
    },
    mounted() {},
    methods: {
        register() {
            this.processing(true)
            var app = this
            this.$auth.register({
                data: {
                    first_name: app.first_name,
                    email: app.email,
                    email_confirmation: app.email_confirmation,
                    last_name: app.last_name,
                    // number: app.number,
                    secret_answer: app.secret_answer,
                    secret_question: app.secret_question,
                    username: app.username,
                    pm: app.pm,
                    wallet: app.wallet,
                    user_level_id: 2,
                    referral: app.referral,
                    ip: this.$root.ip,
                    password: app.password,
                    password_confirmation: app.password_confirmation
                },
                success: function() {
                    this.$root.alert('success', '', 'Registration Successful!!! Redirecting...')
                    this.processing(false)
                    app.success = true
                    this.$router.push({ name: 'login', params: { successRegistrationRedirect: true } })
                },
                error: function(res) {
                    window.scrollTo(0, 300)
                    app.has_error = true
                    app.error = res.response.data.message
                    app.errors = res.response.data.error || {}
                    this.processing(false)
                }
            })
        },
        processing(status) {
            if (status) {
                this.$refs.signup.innerText = "processing..."
                this.$refs.signup.disabled = true
            } else {
                this.$refs.signup.innerText = "Sign Up"
                this.$refs.signup.disabled = false
            }
        },
        resendEmail() {
            this.form.post("/email/resend/")
                .then(response => {
                    this.$root.alert('success', ' ', 'Email has been sent')
                })
                .catch(error => {
                    this.$root.alert('error', ' ', 'Email was not sent, try again')
                    console.log(error.response)
                })
        }
    }
}

</script>
<style type="text/css">
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
input[type="checkbox"] {
    visibility: hidden;
}

label {
    cursor: pointer;
}

input[type="checkbox"]+label:before {
    border: 1px solid #cca354;
    content: "\00a0";
    display: inline-block;
    font: 16px/1em sans-serif;
    height: 16px;
    margin: 0 .25em 0 0;
    vertical-align: top;
    width: 16px;
}

input[type="checkbox"]:checked+label:before {
    background: #cca354;
    color: #fff;
    content: "\2713";
    text-align: center;
}

input[type="checkbox"]:checked+label:after {
    font-weight: bold;
}

input[type="checkbox"]:focus+label::before {
    outline: rgb(59, 153, 252) auto 5px;
}

.iti-flag {
  background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.0.3/img/flags.png");
}

@media only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (min--moz-device-pixel-ratio: 2),
  only screen and (-o-min-device-pixel-ratio: 2 / 1),
  only screen and (min-device-pixel-ratio: 2),
  only screen and (min-resolution: 192dpi),
  only screen and (min-resolution: 2dppx) {
  .iti-flag {
    background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.0.3/img/flags@2x.png");
  }
}
.vue-tel-input {
    width: 100% !important;
    border: 1px solid rgba(204, 163, 84, 0.45) !important;
}
.vti__input {

    background-color: black;
    font-weight: bold;
    color: white;
}

</style>
