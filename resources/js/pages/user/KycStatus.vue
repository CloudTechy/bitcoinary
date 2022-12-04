<template>
    <div>
        <Header></Header>
        <div id="appCapsule">
        <div class="section">
        
            <div class="row mt-2">
                <div v-if="$auth.user().isIdVerified" class="alert alert-outline-success mb-1" role="alert" align="center">
                    <strong>Account verified!</strong>
                </div>
                <div v-else class="alert alert-outline-danger mb-1" role="alert" align="center"><strong>Account not verified!</strong>
                </div>
               
                <div v-if="!$auth.user().isIdVerified"  class="col-lg-5">
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
                            <div  class="card-footer-content text-muted">
                                <div v-if = "kyc && !kyc.approved" class = "alert alert-info m-1">
                                    <p class = "mb-0 p-1" v-if = "kyc.issue == null">Your request has been submitted and it is under review. <br> Sit back and relax, there is no need for resubmission</p>
                                    <p class = "mb-0 p-1" v-else >There is an issue in your submission <br>  {{kyc.issue}}</p>
                                 </div>
                                <form  method="post" @submit.prevent = "kycRequest" enctype="multipart/form-data">
                                    <div class="">
                                        <div class="col-sm-4 mb-3">
                                            <select class="form-control text-success" v-model = "kycForm.type" required>
                                                <option value="">Choose Document Type</option>
                                                <option value="passport">Passport</option>
                                                <option value="driving license">Driving License</option>
                                                <option value="identity card">Identity Card</option>
                                            </select>
                                            <ul v-if="errors.type" class="text-danger small">
                                                <li v-for="error in errors.type">{{ error }}</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-5 mb-3">
                                        <input required="" @change="" ref="fileInput" type="file"  accept=".png, .jpg, .jpeg, .pdf" />
                                            <ul v-if="errors.file" class="text-danger small">
                                                <li v-for="error in errors.file">{{ error }}</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 mb-3">

                                            <button type="submit" ref="submitKycForm" class="btn btn-success">Upload</button>
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
import { ContentLoader, ListLoader } from "vue-content-loader";
export default {
    data() {
        return {
            key: 0,
            kycForm: new Form({
                type: "",
                file: undefined,
                user_id: this.$auth.user().id,
            }),
            error: undefined,
            errors: {},
            message: undefined,
            loading: false,
            kycStatus: undefined,
            kyc:undefined



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
    components: {
        ContentLoader,
        ListLoader,
    },
    mounted() {
        this.$root.dashboard_header_page_title = "Account KYC status"
        this.getKycStatus()
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
        getKycStatus() {
            this.loading = true
            this.kycForm.get("/auth/kyc")
                .then(response => {
                    var msg = response.data.data.item
                    this.kyc = msg[0]
                    this.kycStatus = msg.length > 0 ? msg[0].approved == true ? 'approved' : 'pending' : undefined
                    this.loading = false
                })
                .catch(error => {
                    this.loading = false
                    console.log(error.response)
            })
        },
        kycRequest() {
            this.$root.loader('show')
            this.processing(true, 'submitKycForm', 'Requesting...', '')
            if (this.$refs.fileInput.files[0].size > 4000000) {
                this.$root.loader("hide");
                return this.$root.alert(
                    "error",
                    " ",
                    " File size is too large."
                );
            }
            
            this.message = ""
            this.error = ''
            this.errors = {}
            this.kycForm.file = this.$refs.fileInput.files[0];
            this.kycForm.submit("post", "/auth/kyc", {
                transformRequest: [
                    function (data, headers) {
                        return objectToFormData(data);
                    },
                ],
            }).then(response => {
                    this.$root.loader('hide')
                    this.processing(false, 'submitKycForm', 'Requesting...', 'Upload')
                    this.message = response.data.message
                    this.kycForm.reset()
                })
                .catch(error => {
                    this.$root.loader('hide')
                    this.processing(false, 'submitKycForm', 'Requesting...', 'Upload')
                    this.$root.scrollToTop(0, 250)
                    if (error.response.status == 422) {
                        this.errors = {}
                        this.errors = error.response.data.error
                    }
                    else {
                        this.error = error.response.data.message
                        // this.$root.alert('error', ' ', this.error)
                    }
                    console.log(error.response)
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
