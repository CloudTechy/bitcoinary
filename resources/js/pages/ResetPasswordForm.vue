<template>

    <div class="">
        <div class="appHeader no-border transparent position-absolute">
            <div class="left"><h3 class = "text-white">Reset your Password</h3>

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

                <form method="post" autocomplete="off" @submit.prevent="resetPassword">
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                    <input type="hidden" name="action" value="validate_captcha">
                    <div class="card">
                        <div class="card-body pb-1">
                            <div class="form-group basic mb-1">
                                <div class="alert alert-danger m-3" v-if="has_error && !success">
                                    <p v-if="!unknown_error && errors" class="text-center">
                                        You have some errors in your form


                                    </p>
                                    <div v-if="errors.token" v-for="error in errors.token">
                                        <p class="text-center">{{ error }}</p>
                                    </div>
                                    <p class="m-3 small" v-if="unknown_error">
                                        {{ unknown_error }}
                                    </p>
                                </div>
                                    <div class="alert alert-success" v-if="success && !has_error">
                                        <p class="p-2 m-lg-3 m-sm-1" v-if="message">{{message}}<span><a class=""
                                                    href="/login"><span class="font-weight-bold"> LOGIN HERE</span></a></span></p>
                                    </div>
                                

                            </div>
                            
                                <div class="form-group basic mb-1">
                                    <label class="label" for="">Email</label>
                                    <input type="text" v-model="form.email" :class="{
                                        'form-control': true,
                                        'error-input':
                                            errors.email != undefined,
                                    }" placeholder="Enter your email" required>
                                    <p v-if="errors.email" v-for="error in errors.email" class="text-danger m-0 p-1 pt-0 small">
                                        {{ error }}
                                    </p>
                                </div>
                                <div class="form-group basic mb-1">
                                    <label class="label" for="">Password</label>
                                    <input type="password" v-model="form.password" :class="{
                                        'form-control': true,
                                        'error-input':
                                            errors.password != undefined,
                                    }" placeholder="Enter new password" required>
                                    <p v-if="errors.password" v-for="error in errors.password" class="text-danger m-0 p-1 pt-0 small">
                                        {{ error }}
                                    </p>
                                </div>
                                <div class="form-group basic mb-1">
                                    <label class="label" for="">Confirm Password</label>
                                    <input type="password" v-model="form.password_confirmation" :class="{
                                        'form-control': true,
                                        'error-input':
                                            errors.password_confirmation != undefined,
                                    }" placeholder="Renter new password"
                                        required>
                                    <p v-if="errors.password_confirmation" v-for="error in errors.password_confirmation"
                                        class="text-danger m-0 p-1 pt-0 small">
                                        {{ error }}
                                    </p>
                                </div>
                                <div class="m-4 text-center"><button type="submit" ref="process" class="btn btn-primary ">Reset</button></div>
                        </div>
                    </div>

                </form>
            </div>


        </div>

    </div>

</template>
<script>
export default {
    data() {
        return {
            form: new Form({
                token: this.$route.query.token,
                email: null,
                password: null,
                password_confirmation: null,
            }),
            has_error: false,
            errors: {},
            error:undefined,
            message: undefined,
            success: false,
            company: this.$root.appName,
            domain: this.$root.appDomain,
        };
    },
    mounted() {
        document.body.classList.add("authbody")
        this.$root.scrollUp();
        // window.addEventListener("beforeunload", () => {
        //     if (this.$auth.check() && !this.$auth.user().isEmailVerified) {
        //         this.$auth.logout();
        //     }
        // });

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
    methods: {
        resetPassword() {
            this.processing(true)
            this.$root.loader('show')
            this.formDefault()
            this.form.post("/auth/reset/password")
                .then(response => {
                    this.$root.loader('hide')
                    this.$root.scrollUp()
                    this.message = response.data.message
                    this.$root.alert('success', ' ', response.data.message)
                    this.processing(false)
                    this.success = true
                    // this.$router.push({ name: 'login' })
                }).catch(error => {
                    this.$root.loader('hide')
                    this.$root.scrollUp()
                    this.has_error = true
                    this.processing(false)
                    if (error.response.status == 422) {
                        this.errors = error.response.data.error
                    }
                    else {
                        this.error = error.response.data.message
                        this.$root.alert('error', ' ', this.error)
                    }
                    // this.$root.alert("error", " ", this.error);
                    // app.$root.alert('error', ' ', app.error.error ? app.error.error.error : 'An unknown error has occured, please try again later.')
                    
                    
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
                this.$refs.process.innerHTML = "processing..."
                this.$refs.process.disabled = true
            } else {
                this.$refs.process.innerHTML = "Reset"
                this.$refs.process.disabled = false
            }
        }
        
    },
};
</script>
<style scoped type="text/css">
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
