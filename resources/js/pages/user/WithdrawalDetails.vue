<template>
    <div class="">

        <Header></Header>
        <div id="appCapsule">
            <div v-if="withdrawal" class="section">
                <div class="row mt-2">
                    <div class="stat-box text-center">
                        <h3 v-if="withdrawal.confirmed == true" class="font-weight-bold text-success">
                            Congrats! This withdrawal has been approved
                        </h3>
                        <div v-else>
                            <h3 class="font-weight-bold text-primary">This withdrawal is pending
                            </h3>
                        </div>

                    </div>
                </div>
            </div>
            <list-loader v-else-if="!withdrawal && loading"></list-loader>

            <div class="section">
                <div class="row mt-2">
                    <div class="col-lg-5 col-md-6 col-sm-12 mb-2">
                        <div v-if="withdrawal" class="card b-radius--10 overflow-hidden box--shadow1">
                            <div class="card-body">
                                <h5 class="mb-20 text-muted">
                                    {{'Withdrawal Via ' + withdrawal.payment_method}}
                                </h5>

                                <div class="p-3 bg-white">
                                    <div class="text-center">
                                        <img :src="
                                            $root.basepath +
                                            '/images/uploads/' +
                                            cryptoFilter($root.payments, withdrawal.payment_method)[0].image
                                        " alt="withdrawal-image" class="b-radius--10" />
                                    </div>
                                </div>

                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Date
                                        <span class="font-weight-bold">{{withdrawal.date}}</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Trx Number
                                        <span class="font-weight-bold">{{withdrawal.id}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Method
                                        <span class="font-weight-bold">{{withdrawal.payment_method}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Amount
                                        <span class="font-weight-bold">{{$root.normalNumeral(withdrawal.amount)}}
                                            USD</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Charge
                                        <span class="font-weight-bold">0 USD</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        After Charge
                                        <span class="font-weight-bold">{{$root.normalNumeral(withdrawal.amount)}}
                                            USD</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Rate
                                        <span class="font-weight-bold">1 USD = 1 USD</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Payable
                                        <span class="font-weight-bold">{{$root.normalNumeral(withdrawal. amount)}}
                                            USD</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Status
                                        <span :class="{
                                            badge: true,
                                            'text-uppercase': true,
                                            'p-1': true,
                                            'badge-primary':
                                                withdrawal.confirmed == false,
                                            'badge-success':
                                                withdrawal.confirmed == true,
                                        }">{{
                                        withdrawal.confirmed
                                        ? "Approved"
                                        : "Pending"
                                        }}</span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <list-loader v-else-if="!withdrawal && loading"></list-loader>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12  mb-2">
                        <div v-if="withdrawal" class="card b-radius--10 overflow-hidden box--shadow1">
                            <div class="card-body">
                                <h5 class="card-title mb-50 border-bottom pb-2">
                                    Withdrawal Information
                                </h5>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Withdrawal ref/id</h6>
                                        <p v-if="withdrawal.withdrawal_ref">{{withdrawal.withdrawal_ref}}</p>
                                        <p v-else> NIL</p>
                                    </div>
                                </div>
                                <div class="divider"></div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>Screenshot POP</h6>
                                        <p v-if="withdrawal.pop"><img style="width:100%" :src="
                                        $root.basepath +
                                        '/images/pop/' +
                                        withdrawal.pop " /></p>
                                        <p v-else> No PoP uploaded yet</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <list-loader v-else-if="!withdrawal && loading"></list-loader>
                    </div>
                    <div class="section" v-if="withdrawal && withdrawal.confirmed == false">
                        <div class="row mt-2">
                            <div class="col-lg-5 col-sm-12 col-md-6">
                                <div class="stat-box">
                                    <div class="title text-black">
                                        This withdraw request is still under review but you can choose to <a href="#" data-original-title="Cancel withdrawal request" data-bs-toggle="modal" data-bs-target="#rejectWithdrawalModal"
                                            class="text-danger">Cancel this request.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if = "withdrawal" id="rejectWithdrawalModal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                Cancel Withdrawal Request
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" @submit.prevent="deleteWithdrawal(withdrawal.id)">
                            <input type="hidden" name="id" />
                            <div class="modal-body">
                                <p>
                                    Are you sure to
                                    <span class="font-weight-bold">cancel</span>
                                    <span class="font-weight-bold withdraw-amount text-success"></span>
                                    this withdrawal request of
                                    <span  class="font-weight-bold withdraw-user">{{ $root.normalNumeral(withdrawal.amount) }}
                                        USD</span>?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button ref="close_modal_button" type="button" class="btn btn-dark" data-dismiss="modal">
                                    Close
                                </button>
                                <VueLoadingButton class="btn btn-danger" type="submit" :loading="form.busy" aria-label="Reject">
                                    Cancel</VueLoadingButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div v-if="!withdrawal && !loading" class="section">
                <div class="card p-2">
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row mt-2">
                            <div class="col-sm-12">
                                <div class="card-body" align="center">
                                    <i class="fa fa-exclamation-triangle text-primary fa-2x"></i> <br>
                                    <strong>No Records Found!</strong>
                                </div>
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
import VueLoadingButton from "vue-loading-button";
import { ContentLoader, ListLoader } from "vue-content-loader";
export default {
    data() {
        return {
            key: 0,
            form: new Form({
                pop: undefined,
            }),
            withdrawal: undefined,
            loading: false,
            error: undefined,
            errors: {},
            message: undefined,
            label: undefined,
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
    computed: {
        id() {
            return this.$route.params.id
        }
    },
    components: {
        VueLoadingButton,
        ContentLoader, ListLoader,
    },
    mounted() {
        this.$root.dashboard_header_page_title = "Withdrawal Details | Ref: " + this.id
        setTimeout(() => { window.scrollTo(0, 0) }, 600);
        this.fetchWithdrawal(this.id)
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
    methods: {
        fetchWithdrawal(id) {
            this.loading = true;
            var form = new Form({})
            form
                .get("/auth/withdrawals/" + id)
                .then((response) => {
                    this.loading = false;
                    this.withdrawal = response.data.data;
                })
                .catch((error) => {
                    this.loading = false;
                    this.$root.alert(
                        "error",
                        " ",
                        error.response.data.message
                    );
                    console.log(error);
                });
        },
        deleteWithdrawal(id) {
            this.$root.loader('show')
            this.loading = true;
            var form = new Form({})
            form
                .delete("/auth/withdrawals/" + id)
                .then((response) => {
                    this.$root.loader('hide')
                    this.loading = false;
                    this.$root.alert(
                        "success",
                        " ",
                        response.data.message
                    );
                    this.$refs.close_modal_button.click()
                    this.$auth.fetch()
                    this.$router.push({ name: 'WithdrawReport' })
                })
                .catch((error) => {
                    this.$root.loader('hide')
                    this.loading = false;
                    this.$root.alert(
                        "error",
                        " ",
                        error.response.data.message
                    );
                    console.log(error);
                });
        },
        updatePOP() {
            this.processing(true, 'submitPOPForm', 'Updating...', 'Update POP')
            this.form._method = "PUT";
            if (this.$refs.fileInput.files[0].name == this.withdrawal.pop) {
                this.$root.loader("hide");
                return this.$root.alert(
                    "warning",
                    "Choose a different file ",
                    "OOPS!!!"
                );

            }
            this.form.submit(
                "post",
                "/auth/popdeposit/" + this.id,
                {
                    transformRequest: [
                        function (data, headers) {
                            return objectToFormData(data);
                        },
                    ],
                }
            )
                .then((response) => {
                    this.$root.alert("success", " ", response.data.message);
                    this.fetchWithdrawal(this.id)
                    this.processing(false, 'submitPOPForm', 'Updating...', 'Update POP')
                })
                .catch((error) => {
                    this.processing(false, 'submitPOPForm', 'Updating...', 'Update POP')
                    if (error.response.status == 422) {
                        this.error = error.response.data.error.pop;
                    } else {
                        this.error = error.response.data.message;
                        this.$root.alert("error", " ", this.error);
                    }
                    this.$root.scrollUp()
                    console.log(error, error.response);
                });
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
        cryptoFilter(list, search) {
            var data = [];
            if (search) {
                data = list.filter((item) => {
                    return item.name == search;
                });
            } else {
                data = [];
            }
            return data;
        },
        updateLabel() {
            this.label = this.$refs.fileInput.files[0].name;
            this.form.pop = this.$refs.fileInput.files[0];
            if (this.$refs.fileInput.files[0].size > 400000) {
                this.$root.alert(
                    "warning",
                    " File size should be less than 400Kb.", " OOPS!!! ",
                );
            }
        },

    }
}

</script>
<style scoped>

</style>
