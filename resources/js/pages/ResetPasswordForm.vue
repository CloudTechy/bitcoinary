<template>
    <!--  <div style="width: inherit;">
        <div class="page-title row page-title m-3 p-2 with-btn">
            <div class=" col-12 col-lg-8  container">
                <h1>Reset Password</h1>
                <p>Don't have an account? Click the button signup below for account registration.</p>
                <router-link class="btn btn-default" to="/register">Sign Up</router-link>
            </div>
        </div>
        <section class="main-container" :style="'background:url('+ $root.basepath +'/img/home.png) no-repeat 0 0;'">
            <div class="main">
                <div class="container">
                    <div class="wrapper">
                        <div class="login-wrapper">
                            <div class="login-heading mb-0 text-center">
                                <h2>Enter details to reset your password</h2>
                            </div>
                            <div class="card-body">
                                <ul class="error-msg P-3 m-3" v-if="errors.error">
                                    <li v-if = "errors.error.token" v-for="error in errors.error.token" >{{ error }}</li>
                                    <li v-if = "errors.error.password" v-for="error in errors.error.password" >{{ error }}</li>
                                    <li v-if = "errors.error.email" v-for="error in errors.error.email" >{{ error }}</li>
                                </ul>
                                <form autocomplete="off" @submit.prevent="resetPassword" method="post">
                                    <ul class="form-list m-2">
                                        <li class="row clearfix text-center">
                                            <div class="input-box col-12 ">
                                                <label>Email</label>
                                                <div class="iconed">
                                                    <span class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></span>
                                                    <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="form-list m-2">
                                        <li class="row clearfix text-center">
                                            <div class="input-box col-12 col-md-6">
                                                <label for="email">Password</label>
                                                <div class="iconed">
                                                    <span class="icon"><i class="fas fa-lock" aria-hidden="true"></i></span>
                                                    <input type="password" id="password" class="form-control" placeholder="" v-model="password" required>
                                                </div>
                                            </div>
                                            <div class="input-box col-12 col-md-6">
                                                <label for="email">Confirm Password</label>
                                                <div class="iconed">
                                                    <span class="icon"><i class="fas fa-lock" aria-hidden="true"></i></span>
                                                    <input type="password" id="password_confirmation" class="form-control" placeholder="" v-model="password_confirmation" required>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="buttons-set text-center">
                                        <button ref="process" type="submit" class="btn btn-default">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> -->
    <div class="page-wrapper">
        <!-- account section start -->
        <div class="account-section bg_img" :data-background="$root.basepath + '/images/bg/bg-5.jpg'">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="account-card">
                            <div class="account-card__header bg_img overlay--one" :data-background="$root.basepath + '/images/bg/bg-6.jpg'">
                                <h2 class="section-title text-center">Welcome to <span class="base--color">Bitcoinary Mint</span></h2>
                                <h3 class="mt-2 text-center">Reset your Password</h3>
                            </div>
                            <div class="account-card__body">
                                <form autocomplete="off" @submit.prevent="resetPassword" method="post">
                                    <div class="form-group">
                                        <ul :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-5.jpg )'}" class="error-msg " v-if="errors.error">
                                            <li v-if="errors.error.token" v-for="error in errors.error.token">
                                                <p class="p-1 m-lg-3 m-sm-1">{{ error }}</p>
                                            </li>
                                            <li v-if="errors.error.password" v-for="error in errors.error.password">
                                                <p class="p-1 m-lg-3 m-sm-1">{{ error }}</p>
                                            </li>
                                            <li v-if="errors.error.email" v-for="error in errors.error.email">
                                                <p class="p-1 m-lg-3 m-sm-1">{{ error }}</p>
                                            </li>
                                            <li>
                                                <p v-if="errors.error && typeof errors.error == 'string' " class="text-center p-1 m-lg-3 m-sm-1">{{errors.message || errors.error}}</p>
                                            </li>
                                        </ul>
                                        <div :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-5.jpg )'}" class="success-msg " v-if="success && !has_error">
                                            <p class="p-2 m-lg-3 m-sm-1" v-if="response != undefined">{{response.message}}</p>
                                            <p>Go to <a href="/login">Login</a></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" id="password" class="form-control" placeholder="" v-model="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" id="password_confirmation" class="form-control" placeholder="" v-model="password_confirmation" required>
                                    </div>
                                    <button ref="process" type="submit" class="cmn-btn m-2">Submit</button>
                                </form>
                            </div>
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
            token: null,
            email: null,
            password: null,
            password_confirmation: null,
            has_error: false,
            errors: [],
            response: '',
            success : false,
        }
    },
    methods: {
        resetPassword() {
            this.processing(true)
            this.$root.loader('show')
            this.formDefault()
            this.$http.post("/auth/reset/password/", {
                    token: this.$route.query.token,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation
                })
                .then(result => {
                    this.$root.loader('hide')
                    this.$root.scrollUp()
                    this.response = result.data
                    this.processing(false)
                    this.success = true
                    this.$root.alert('success', '', 'Password Reset Successful!!! Redirecting...')
                    // this.$router.push({ name: 'login' })
                }, error => {
                    this.$root.loader('hide')
                    this.$root.scrollUp()
                    this.has_error = true
                    this.processing(false)
                    this.errors = error.response.data != undefined ? error.response.data : this.errors.push('Password reset not successful, check that your email is valid')
                    console.error(error.response)
                });
        },formDefault(){
            this.success = false
            this.response = ''
            this.errors = []
            this.has_error = false
        },
        processing(status) {
            if (status) {
                this.$refs.process.innerText = "processing..."
                this.$refs.process.disabled = true
            } else {
                this.$refs.process.innerText = "Update"
                this.$refs.process.disabled = false
            }
        }
    }
}

</script>
