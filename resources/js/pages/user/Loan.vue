<template>
    <div>
        <Header></Header>
        <div id="appCapsule">
            <div class="container mt-2">
                <div class="card p-2">
                    <div class="card-body">
                        <div v-if="message" class="alert alert-success alert-dissmissible mb-2 p-2"> {{message}}</div>
                        <div v-if="error" class="alert alert-danger  mb-2 p-2"> {{error}}</div>
                        <form method="post" @submit.prevent="loanRequest" style="width: 100%">
                            <div class="form-group basic">
                                <label class="label">Occupation</label>
                                <div class="input-group mb-2">
                                    <input type="text" v-model="loanForm.occupation" class="form-control" required>
                                </div>
                                <p v-if="errors.occupation" v-for="error in errors.occupation"
                                    class="text-danger m-0 p-1 pt-0 small">
                                    {{ error }}
                                </p>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Amount (USD)</label>
                                <div class="input-group mb-2">
                                    <input type="text" v-model="loanForm.amount" class="form-control" required>
                                </div>
                                <p v-if="errors.amount" v-for="error in errors.amount"
                                    class="text-danger m-0 p-1 pt-0 small">
                                    {{ error }}
                                </p>
                            </div>
                            <div class="form-group basic">
                                <label class="label">Loan Tenor</label>
                                <div class="input-group mb-2">
                                    <select v-model="loanForm.tenor" class="form-control pb-1" required>
                                        <option value=""></option>
                                        <option value="30">
                                            a Month </option>
                                        <option value="90">
                                            3 Months </option>
                                        <option value="190">
                                            6 Months </option>
                                        <option value="360">
                                            a Year </option>
                                        <option value="720">
                                            2 Years </option>
                                        <option value="1440">
                                            3 years </option>
                                    </select>
                                </div>
                                <p v-if="errors.tenor" v-for="error in errors.tenor"
                                    class="text-danger m-0 p-1 pt-0 small">
                                    {{ error }}
                                </p>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Purpose</label>
                                <div class="input-group mb-2">
                                    <textarea class="form-control" v-model="loanForm.purpose" rows="4"></textarea>
                                </div>
                                <p v-if="errors.purpose" v-for="error in errors.purpose"
                                    class="text-danger m-0 p-1 pt-0 small">
                                    {{ error }}
                                </p>
                            </div>
                            <div class="form-group basic">
                                <button type="reset" @click="loanForm.reset()" class="btn btn-danger">Reset</button>

                                <button type="submit" ref="submitLoanForm" class="btn btn-success">Request </button>
                            </div>
                        </form>
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
        this.$root.dashboard_header_page_title = "Credit Advance/Loan"
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
    computed: {
        wallet() {
            if (this.withdrawalPaymentMethod) {
                return this.$root.getAccountDetails(this.withdrawalPaymentMethod.name, this.withdrawalPaymentMethod.type)
            }
        }

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
</style>
