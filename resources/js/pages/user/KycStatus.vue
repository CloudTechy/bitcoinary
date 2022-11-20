<template>
    <div>
        <Header></Header>
        <div id="appCapsule">
        <div class="section">
        
            <div class="row mt-2">
                <div class="alert alert-outline-danger mb-1" role="alert" align="center"><strong>Account not verified!</strong>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <p>In order for us to know the authenticity of your
                               {{' ' + $root.appName+ ' '}} account, the law requires us to collect identifying information on our clients and
                                keep it up to date.</p>
                            <p>
                               {{' ' + $root.appName+ ' '}} follows the regulations as required for KYC Verification. All data uploaded by
                                customers are fully ecrypted and will never be shared with third-parties.</p>
                        </div>
                        <div class="card-footer" align="center">
                            <div class="card-footer-content text-muted">
                                <form method="post" @submit.prevent = "" enctype="multipart/form-data">
                                    <div class="">
                                        <div class="col-sm-4 mb-3">
                                            <select class="form-control text-success" name="document" required>
                                                <option value="">Choose Document Type</option>
                                                <option value="Passport">Passport</option>
                                                <option value="Driving License">Driving License</option>
                                                <option value="Identity Card">Identity Card</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5 mb-3">
                                            <input type="file" class="" id="name" name="file">
                                        </div>
                                        <div class="col-sm-3 mb-3">
                                            <input type="submit" name="upload_document" value="Upload" class="btn btn-success">
                                        </div>
                                        <small>Files Allowed: Jpg, png, gif, pdf, jpeg</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <p>In order to combat fraud and follow required rules and regulations,
                               {{' ' + $root.appName+ ' '}} partners up with JUMIO, a U.S company that provides REAL-TIME end-to-end identity
                                verification in over 200 countries.</p>
        
                            <p>The verification process may take a few days. During this process and once verification is
                                complete you won't be able to edit your name on your payments profile.</p>
                            <h4 class="card-title">Tips on submitting documents:</h4>
                            <ul>
                                <li style="list-style-type: square;"> Capture the entire document including all four corners.
                                </li>
                                <li style="list-style-type: square;"> Your image must be readable, in focus, and free of
                                    reflections and glare. </li>
                                <li style="list-style-type: square;"> Incomplete or obstructed documents or dark or blurry
                                    photos won't be accepted.</li>
                                <li style="list-style-type: square;"> To prevent abuse, we allow a limited number of
                                    verification attempts. </li>
                                <li style="list-style-type: square;"> Uploading documents or photos other than what is requested
                                    may result in account suspension. </li>
                            </ul>
        
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        </div>


        <br><br>

        <Footer @popUploaded="displayMessage"></Footer>
    </div>


</template>
<script>
export default {
    data() {
        return {
            key: 0,
            loanForm: new Form({
                occupation: undefined,
                reference: undefined,
                amount: undefined,
                tenor: undefined,
                purpose: undefined,
                user_id: this.$auth.user().id,
            }),
            error: undefined,
            errors: {},
            message: undefined,



        }
    },
    watch: {
        error() {
            setTimeout(() => { this.error = '' }, 15000);
        },
        errors() {
            setTimeout(() => { this.errors = '' }, 15000);
        },
    },
    mounted() {
        this.$root.dashboard_header_page_title = "Account KYC status"
        setTimeout(() => { window.scrollTo(0, 0) }, 1000)
    },
    beforeRouteEnter(to, from, next) {
        next(vm => {
            vm.$root.loader('show')
            setTimeout(() => { vm.$root.loader('hide') }, 1000);
        })
    },
    created() {
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
            this.$root.basepath + "/assets/js/home/dashboard/jquery-3.2.1.slim.min.js"
        );
        js.setAttribute("async", true);
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/bootstrap.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/bootstrap.bundle.min.js"
        );
        document.body.appendChild(js);
    },
    computed: {
    },
    methods: {
        loanRequest() {
            this.$root.loader('show')
            this.processing(true, 'submitLoanForm', 'Requesting...', '')
            this.message = ""
            this.error = ''
            this.errors = {}
            this.loanForm.post("/auth/loan")
                .then(response => {
                    this.$root.loader('hide')
                    this.processing(false, 'submitLoanForm', 'Requesting...', 'Request')
                    this.message = response.data.message
                    this.loanForm.reset()
                })
                .catch(error => {
                    this.$root.loader('hide')
                    this.processing(false, 'submitLoanForm', 'Requesting...', 'Request')
                    this.$root.scrollToTop(0, 250)
                    if (error.response.status == 422) {
                        this.errors = {}
                        this.errors = error.response.data.error
                    }
                    else {
                        this.error = error.response.data.message
                        // this.$root.alert('error', ' ', this.error)
                    }
                    console.log(error, error.response)
                })
        },

        processing(status, ref, text1, text2) {
            if (status) {
                this.$refs[ref].innerHTML = text1;
                this.$refs[ref].disabled = true;
            } else {
                this.$refs[ref].innerHTML = text2;
                this.$refs[ref].disabled = false;
            }
        },
        displayMessage(msg) {
            this.$root.alert('success', ' ', msg.message)
            setTimeout(() => { this.$root.scrollUp() }, 1000);
        },

    }
}

</script>
<style scoped>
textarea,
.form-control {
    background-clip: padding-box;
    background-image: linear-gradient(transparent, transparent);
}

.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
</style>
