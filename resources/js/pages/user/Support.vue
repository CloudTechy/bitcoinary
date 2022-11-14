<template>
    <div class="">

        <Header></Header>
        <div id="appCapsule">

        <div class="container mt-2">
            <div class="card p-2">
                <div class="card-body">
                    <div v-if="message" class="alert alert-success alert-dissmissible mb-2 p-2"> {{message}} <p class = "mt-2 pb-1">
                        Meanwhile, our live support is always alvailable.
                    </p></div>
                    <div v-if="error" class="alert alert-danger  mb-2 p-2"> {{error}}</div>
                    <form method="post" @submit.prevent = "submitTicket" style="width: 100%">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="account1">Department</label>
                                <select v-model = "supportForm.department" class="form-control p-1" required="">
                                    <option value=""></option>
                                    <option value="Deposits">Deposits</option>
                                    <option value="Loan">Loan</option>
                                    <option value="Withdrawals">Withdrawals</option>
                                    <option value="Investment">Investment</option>
                                    <option value="Account Status">Account Status</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <p v-if="errors.department" v-for="error in errors.department" class="text-danger m-0 p-1 pt-0 small">
                                {{ error }}
                            </p>
                        </div>
                        <div class="form-group basic">
                            <label class="label">Subject</label>
                            <div class="input-group mb-2">
                                <input type="text" v-model = "supportForm.subject" class="form-control" required="">
                            </div>
                            <p v-if="errors.subject" v-for="error in errors.subject" class="text-danger m-0 p-1 pt-0 small">
                                {{ error }}
                            </p>
                        </div>
                        <div class="form-group basic">
                            <label class="label">Message</label>
                            <div class="input-group mb-2">
                                <textarea class="form-control" v-model = "supportForm.message" rows="10" required=""></textarea>
                            </div>
                            <p v-if="errors.message" v-for="error in errors.message" class="text-danger m-0 p-1 pt-0 small">
                                {{ error }}
                            </p>
                        </div>
                        <div class="form-group basic">
                            <button type="reset" @click="supportForm.reset()" class="btn btn-danger">Reset</button>
        
                            <button type="submit" ref="submitSupportForm" class="btn btn-success">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>


        <br><br>

        <Footer  @popUploaded="displayMessage"></Footer>


    </div>


</template>
<script>
export default {
    data() {
        return {
            key: 0,
            supportForm: new Form({
                department: undefined,
                subject: undefined,
                message: undefined,
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
        this.$root.dashboard_header_page_title = "Support"
        window.scrollTo(0, 0);
    },
    beforeRouteEnter(to, from, next) {
        next(vm => {
            vm.$root.loader('show')

            setTimeout(() => { vm.$root.loader('hide') }, 2000);
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
    methods: {
        submitTicket() {
            this.$root.loader('show')
            this.processing(true, 'submitSupportForm', 'Requesting...', '')
            this.message = ""
            this.error = ''
            this.errors = {}
            this.supportForm.post("/auth/ticket")
                .then(response => {
                    this.$root.loader('hide')
                    this.processing(false, 'submitSupportForm', 'Requesting...', 'Send')
                    this.message = response.data.message
                    window.scrollTo(0, 0);
                    this.supportForm.reset()
                })
                .catch(error => {
                    this.$root.loader('hide')
                    this.processing(false, 'submitSupportForm', 'Requesting...', 'Send')
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
        displayMessage(msg) {
            this.message = msg
            this.$root.scrollUp()
            this.$root.alert('success', ' ', msg.message)
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

    }
}

</script>
<style scoped>
</style>
