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
                                <h3 class="text-center m-3 ">Recover your password</h3>
                                <p class="mt-2 font-weight-bold text-uppercase base--color">Steps:</p>
                                <ul style="list-style-type: circle;" class="">
                                 <li style="margin-left: 2em;">Submit your email address through the form below.</li>  
                                 <li style="margin-left: 2em;">A reset password link will be sent to your email address.</li> 
                                 <li style="margin-left: 2em;">click on the reset link and change your password.</li>
                                </ul>
                                
                            </div>
                            <div class="account-card__body">
                                <form autocomplete="off" @submit.prevent="requestResetPassword" method="post">

                                    <div class="form-group">
                                        <div :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-5.jpg )'}" class="error-msg  m-3" v-if="has_error && !success  ">
                                            <p class="p-2 m-lg-3 m-sm-2" v-if="errors.error.email" v-for="error in errors.error.email">{{error}}</p>
                                            <p v-if = "errors.error && typeof errors.error == 'string' " class="text-center p-2 m-lg-3 m-sm-1">{{errors.message || errors.error}}</p>
                                        </div>
                                        <div :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-5.jpg )'}" class="success-msg " v-if="success && !has_error">
                                             <p class="p-2 m-lg-3 m-sm-1" v-if="response != undefined">{{response.message == "The selected email is invalid." ? "Invalid email" : response.message}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" placeholder="Enter email address" required="" v-model="email" class="form-control">
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
            email: null,
            has_error: false,
            response: '',
            success: false,
            errors: ''
        }
    },
    methods: {
        requestResetPassword() {
            this.$root.loader('show')
            this.processing(true)
            this.formDefault()
            this.$http.post("/auth/reset-password", { email: this.email }).then(result => {
                this.$root.loader('hide')
                this.$root.scrollUp()
                this.processing(false)
                this.response = result.data
                this.success = true
                // console.log(result.data)
            }, error => {
                this.$root.loader('hide')
                this.$root.scrollUp()
                this.processing(false)
                this.has_error = true
                // console.error(error.response)
                this.errors = error.response.data
            });
        },
        processing(status) {
            if (status) {
                this.$refs.process.innerText = "processing..."
                this.$refs.process.disabled = true
            } else {
                this.$refs.process.innerText = "Send Password Reset Link"
                this.$refs.process.disabled = false
            }
        },
        formDefault(){
            this.success = false
            this.errors = ""
            this.response = ""
            this.has_error = false
        }
    }
}

</script>
