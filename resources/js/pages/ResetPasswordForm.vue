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
                @submit.prevent="resetPassword"
                class="agile_form"
                method="post"
            >
                <div class="form-group">
                                        <ul class="alert alert-danger " v-if="errors.error">
                                            <li v-if="errors.error.token" v-for="error in errors.error.token">
                                                <p class="text-center p-1 m-lg-3 m-sm-1">{{ error }}</p>
                                            </li>
                                            <li v-if="errors.error.password" v-for="error in errors.error.password">
                                                <p class="text-center p-1 m-lg-3 m-sm-1">{{ error }}</p>
                                            </li>
                                            <li v-if="errors.error.email" v-for="error in errors.error.email">
                                                <p class="text-center p-1 m-lg-3 m-sm-1">{{ error }}</p>
                                            </li>
                                            <li>
                                                <p v-if="errors.error.error && typeof errors.error.error == 'string' " class="text-center p-1 m-lg-3 m-sm-1">{{errors.message || errors.error.error}}</p>
                                            </li>
                                        </ul>
                                        <div class="alert alert-success" v-if="success && !has_error">
                                            <p class="p-2 m-lg-3 m-sm-1" v-if="response != undefined">{{response.message}}<span><a class="base--color" href="/login">login</a></span></p>
                                        </div>
                                    </div>
                <h3>Reset your Password</h3>
                <div class="row">
                    <div class="col-md-12 col-sm-12 form-group">
                        <div class="wthree_input">
                            <i style = "left:2%" class="fa fa-envelope" aria-hidden="true"></i>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email" v-model="email" required>
                                    
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 form-group">
                        <div class="wthree_input">
                            <i style = "left:2%" class="fa fa-lock" aria-hidden="true"></i>
                            <input type="password" id="password" class="form-control" placeholder="Enter new password" v-model="password" required>
                                   
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 form-group">
                        <div class="wthree_input">
                            <i style = "left:2%" class="fa fa-lock" aria-hidden="true"></i>
                           <input type="password" id="password_confirmation" class="form-control" placeholder="Renter new password" v-model="password_confirmation" required>
                                              
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12">
                        <button
                            type="submit"
                            ref="process"
                            class="btn btn-primary"
                            style="margin-top: 10px; width: 100%"
                        >
                            Reset
                        </button>
                    </div>
                </div>
                <div class="clear"></div>
            </form>
           
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
            token: null,
            email: null,
            password: null,
            password_confirmation: null,
            has_error: false,
            errors: [],
            response: '',
            success: false,
        }
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
                    // this.$router.push({ name: 'login' })
                }).catch(error => {
                    this.$root.loader('hide')
                    this.$root.scrollUp()
                    this.has_error = true
                    this.processing(false)
                    this.errors = error.response.data != undefined ? error.response.data : this.errors.push('Password reset not successful, check that your email is valid')
                    console.error(error.response)
                });
        },
        formDefault() {
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
                this.$refs.process.innerText = "Reset"
                this.$refs.process.disabled = false
            }
        }
    }
}

</script>
