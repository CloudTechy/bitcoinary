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
                                <h2 class="section-title text-center">Welcome to <span class="base--color"><span>{{$root.appName}}</span></span></h2>
                            </div>
                            <div class="account-card__body">
                                <h3 class="text-center">Create an Account</h3>
                                <form class="mt-4" autocomplete="off" @submit.prevent="register" v-if="!success" method="post">
                                    <div class="form-group">
                                        <div :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-5.jpg )'}" class="error-msg  m-3" v-if="has_error && !success  ">
                                            <p v-if="!unknown_error && errors" class="text-center  m-3 small">You have some errors in your form</p>
                                            <p class=" m-3 small" v-if="unknown_error">{{unknown_error}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" required v-model="first_name" placeholder="Your first name" :class="{'form-control' : true, 'error-input': errors.first_name != undefined}">
                                        <p v-if="errors.first_name" v-for="error in errors.first_name" class="base--color m-0 p-2 small">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" required placeholder="Your last name" v-model="last_name" :class="{'form-control' : true, 'error-input': errors.last_name != undefined}">
                                        <p v-if="errors.last_name" v-for="error in errors.last_name" class="base--color m-0 p-2 small">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" required v-model="username" placeholder="Username" :class="{'form-control' : true, 'error-input': errors.username != undefined}">
                                        <p v-if="errors.username" v-for="error in errors.username" class="base--color m-0 p-2 small">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" required="" v-model="email" placeholder="Email address" :class="{'form-control' : true, 'error-input': errors.email != undefined}">
                                        <p v-if="errors.email" v-for="error in errors.email" class="base--color m-0 p-2 small">{{error}}</p>
                                    </div>
                                        <div class="form-group">
                                        <label>Phone Number</label>
                                        <vue-tel-input v-model="number" :class="{'form-control' : true, 'error-input': errors.number != undefined}">>
                                        </vue-tel-input>
                                        <p v-if="errors.number" v-for="error in errors.number" class="base--color m-0 p-2 small">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Referral</label>
                                        <input type="text" required placeholder="Enter your referral" v-model="referral" :class="{'form-control' : true, 'error-input': errors.referral != undefined}">
                                        <p v-if="errors.referral" v-for="error in errors.referral" class="base--color m-0 p-2 small">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>BTC Wallet</label>
                                        <input type="text" required v-model="wallet" placeholder="Your Bitcoin wallet address" :class="{'form-control' : true, 'error-input': errors.wallet != undefined}">
                                        <p v-if="errors.wallet" v-for="error in errors.wallet" class="base--color m-0 p-2 small">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" required v-model="password" placeholder="password" :class="{'form-control' : true, 'error-input': errors.password != undefined}">
                                        <p v-if="errors.password" v-for="error in errors.password" class="base--color m-0 p-2 small">{{error}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" min="4" required placeholder="Confirm Password" v-model="password_confirmation" :class="{'form-control' : true, 'error-input': errors.password_confirmation != undefined}">
                                        <p v-if="errors.password_confirmation" v-for="error in errors.password_confirmation" class="base--color m-0 p-2 small">{{error}}</p>
                                    </div>
                                    <div class="form-group form-check">
                                        <input checked="" v-model="terms" type="checkbox" class="form-check-input" id="terms">
                                        <label class="form-check-label" for="terms"> I agree to the <a href="/terms" class="base--color">terms & condition</a></label>
                                        <p v-if="errors.terms && !terms" class="text-danger m-0 p-2">You will need to accept the terms to proceed.</p>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-check">
                                                <input checked="" type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-sm-right">
                                            <p class="f-size-14">Already a member? <a href="/login" class="base--color">Login</a></p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button :disabled="!terms" ref="signup" type="submit" :class="{'cmn-btn' : true,'btn' : true, disabled : !terms}">SignUp Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account section end -->
        <Footer></Footer>
    </div>
</template>
<script>
    export default {
    data() {
        return {
            first_name: '',
            last_name: '',
            number: '',
            email: '',
            username: '',
            password: '',
            password_confirmation: '',
            referral: this.$route.query.ref ? this.$route.query.ref : null,
            wallet: '',
            terms: true,
            has_error: false,
            error: '',
            errors: {},
            unknown_error : '',
            success: false
        }
    },
    mounted() {},
    methods: {
        register() {
            this.$root.loader('show')
            this.processing(true)
            this.formDefault()
            var app = this
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
                    password_confirmation: app.password_confirmation
                },
                success: function() {
                    this.$root.loader('hide')
                    this.$root.alert('success', ' ', 'Registration Successful!!! Redirecting...')
                    this.processing(false)
                    app.success = true
                    // window.location.href = this.$root.basepath + '/login'
                    // this.$router.push({ name: 'login', params: { successRegistrationRedirect: true }, base : 'hash' })

                },
                error: function(res) {
                    this.processing(false)
                    this.$root.loader('hide')
                    window.scrollTo(0, 180)
                    app.has_error = true
                    app.error = res.response.data.message
                    app.errors = typeof res.response.data.error == 'string' ? {} : res.response.data.error
                    app.unknown_error = typeof res.response.data.error == 'string' ? res.response.data.error : ''
                    this.$root.alert('error', ' ', app.error)
                }
            })
            
        },
        formDefault(){
            this.success = false
            this.unknown_error = ''
            this.errors = {}
            this.has_error = false
        },
        processing(status) {
            if (status) {
                this.$refs.signup.innerText = "processing..."
                this.$refs.signup.disabled = true
            } else {
                this.$refs.signup.innerText = "SignUp Now"
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

</style>
