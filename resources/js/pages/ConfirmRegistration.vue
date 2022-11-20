<template>
    <div>
       <div class="appHeader no-border transparent position-absolute">
            <div class="left"> Email Verification
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
                <div v-if="success" class="modal fade dialogbox show" id="myModal" data-bs-backdrop="true" tabindex="-1"
                    role="dialog" aria-modal="true" style="display:block">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                Email Verified! <span class="text-success"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="modal-body">
                                <span class="danger"></span> <br> Welcome onboard, you are now an official member of
                                <br>
                                <strong class="text-primary">{{$root.appName}}</strong>.<br> <br>Please <a href="/login"
                                    class="text-primary">login</a> into
                                your account to continue and keep safe your login credentials.
                            </div>
                            <div class="modal-footer">
                                <div class="btn-inline">
                                    <button href="/login" type="button" class="btn btn-text-secondary"
                                        data-bs-dismiss="modal"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="!success && !has_error && !message" class="modal fade dialogbox show" id="myModal"
                    data-bs-backdrop="true" tabindex="-1" role="dialog" aria-modal="true" style="display:block">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                Email Verification 
                            </div>
                            <div class="modal-body">
                                <span class="danger"></span> <br> Make sure you are partially logged in to confirm
                                your email.<br> <br>Email verification is taking place...
                            </div>
                            <div class="modal-footer">
                                <div class="btn-inline">
                                    <button disabled type="button" class="btn btn-text-secondary disabled"
                                        data-bs-dismiss="modal">Verifying</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="has_error" class="modal fade dialogbox show" id="myModal" data-bs-backdrop="true"
                    tabindex="-1" role="dialog" aria-modal="true" style="display:block">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                Email Verification Failed<span class="text-danger"><i class="fa fa-cancel"></i></span>
                            </div>
                            <div class="modal-body">
                                <span class="danger"></span> <br> Your email could not be verified at this moment.
                                Please Try
                                again later.
                            </div>
                            <div class="modal-footer">
                                <div class="text-center">
                                    <a href="/" class="text-primary">Goto home</a>
                                </div>
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
            form: new Form({
                username: '',
                email: ''
            }),
            success: false,
            has_error: false,
            error: '',
            message: ''
        }
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

        const queryURL = this.$route.query.queryURL;

        if (this.$auth.user().isEmailVerified) {
            this.message = "This email has already been verified"
        }
        else {
            this.confirmEmail()
        }
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
        confirmEmail() {
            //this.processing(true)
            this.form.post(this.$route.query.queryURL)
                .then(response => {
                    window.scrollTo(0, 200)
                    //this.processing(false)
                    this.error = ''
                    this.success = true
                    this.message = response.data.message
                    console.log(response)
                })
                .catch(error => {
                    this.message = ''
                    this.has_error = true
                    this.error = error.response.data.message
                    //this.processing(false)
                    console.log(error.response)
                })
        }
    },
    beforeDestroy() {
        if (!this.$auth.user().isEmailVerified) {
            this.$auth.logout()
        }
    }
}

</script>
