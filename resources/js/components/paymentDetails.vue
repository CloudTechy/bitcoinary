<template>
    <div class="modal-dialog modal-dialog-centered">
        <div
            class="modal-content bg-dark bg_img"
            :style="
                'backgroundImage:url(' + $root.basepath + '/images/bg/bg-5.jpg'
            "
        >
            <div class="modal-header text-center">
                <h3 class="modal-title font-weight-bold base--color">
                    Deposit
                </h3>
                <button
                    class="btn base--color f-size-18 p-0"
                    type="button"
                    data-dismiss="modal"
                >
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center small">
                    <div
                        v-if="paymentMethod.currency_type == 'crypto'"
                        class="p-0 m-0"
                    >
                        <h3 class="mb-2">
                            Payment
                            <span class="base--color"> Summary </span>
                        </h3>
                        <div class="form-group">
                            <div
                                :style="{
                                    backgroundImage:
                                        'url(' +
                                        $root.basepath +
                                        '/images/bg/bg-5.jpg )',
                                }"
                                class="error-msg m-3"
                                v-if="error"
                            >
                                <div v-if="typeof error == 'object'">
                                    <p
                                        v-for="err in error"
                                        class="small m-2 m-md-3"
                                    >
                                        {{ err }}
                                    </p>
                                </div>
                                <p v-else class="text-center m-2 m-md-3 small">
                                    {{ error }}
                                </p>
                            </div>
                        </div>
                        <div class="mb-20">
                            <div
                                class="package-card text-center bg_img"
                                :style="{
                                    backgroundImage:
                                        'url(' +
                                        $root.basepath +
                                        '/images/bg/bg-4.png )',
                                }"
                            >
                                <h4
                                    class="package-card__title base--color text-capitalize mb-2"
                                >
                                    {{ plan.name }} Plan
                                </h4>
                                <div>
                                    <ul class="package-card__features mt-4">
                                        <li>
                                            Amount:
                                            <strong
                                                >{{
                                                    parseInt(
                                                        $root.normalNumeral(
                                                            amount
                                                        )
                                                    )
                                                }}
                                            </strong>
                                            USD
                                        </li>
                                        <li>
                                            Charge:
                                            <strong
                                                >{{
                                                    parseInt(
                                                        $root.normalNumeral(
                                                            amount
                                                        )
                                                    ) * 0.02
                                                }}
                                            </strong>
                                            USD
                                        </li>
                                        <li>
                                            Payable:
                                            <strong>
                                                {{
                                                    parseInt(
                                                        $root.normalNumeral(
                                                            amount
                                                        )
                                                    ) *
                                                        0.02 +
                                                    parseInt(
                                                        $root.normalNumeral(
                                                            amount
                                                        )
                                                    )
                                                }}</strong
                                            >
                                            USD
                                        </li>
                                        <li>
                                            Conversion Rate:
                                            <strong>1 USD = 1 USD</strong>
                                        </li>
                                        <li>
                                            In USD:
                                            <strong>{{
                                                parseInt(
                                                    $root.normalNumeral(amount)
                                                ) *
                                                    0.02 +
                                                parseInt(
                                                    $root.normalNumeral(amount)
                                                )
                                            }}</strong>
                                        </li>
                                        <li>
                                            Payment Method:
                                            <strong>{{
                                                paymentMethod.payment_method
                                            }}</strong>
                                        </li>
                                    </ul>
                                </div>

                                <a
                                    @click="processPayment($event)"
                                    class="cmn-btn btn-md mt-4"
                                    >Proceed to checkout</a
                                >
                            </div>
                        </div>
                        <!-- <div class="m-3">
                            <vue-qrcode :value="paymentMethod.wallet" />
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="modal-footer mb-115">
                <button
                    type="button"
                    ref="closeButton"
                    class="btn btn-outline-light"
                    data-dismiss="modal"
                >
                    Close
                </button>
            </div>
        </div>
    </div>
</template>
<script>
// import VueQrcode from "vue-qrcode";
export default {
    mounted() {},
    data() {
        return {
            form: new Form({}),
            label: "Choose pop file",
            subscribed_plan: undefined,
            error: undefined,
        };
    },
    components: {
    },
    props: ["plan", "paymentMethod", "processor", "amount"],
    computed: {},
    beforeDestroy() {
        // this.$refs.closeButton.click();
        // this.form.reset();
    },
    methods: {
        subscribe() {
            this.$root.loader("show");
            let data = new FormData();
            let file = this.$refs.fileInput.files[0];
            let form = new Form();
            form.pop = file;
            this.error = undefined;
            form.user_id = this.$auth.user().id;
            form.amount = this.amount;
            if (this.$refs.fileInput.files[0].size > 4000000) {
                this.$root.loader("hide");
                return this.$root.alert(
                    "error",
                    " ",
                    " File size is too large."
                );
            }

            if (!this.subscribed_plan) {
                form.submit("post", "/auth/packageusers", {
                    transformRequest: [
                        function (data, headers) {
                            return objectToFormData(data);
                        },
                    ],
                })
                    .then((response) => {
                        this.$root.loader("hide");
                        this.subscribed_plan = response.data.data;
                        this.$emit("popUploaded", {
                            subscription: this.subscribed_plan,
                            message: response.data.message,
                        });
                        form.reset();
                        this.label = "Change pop file";
                        this.$refs.closeButton.click();
                    })
                    .catch((error) => {
                        this.$root.loader("hide");
                        if (error.response.status == 422) {
                            this.error = error.response.data.error.pop;
                        } else {
                            this.error = error.response.data.message;
                        }
                        console.log(error, error.response);
                        form.reset();
                    });
            } else {
                form._method = "PUT";
                form.submit(
                    "post",
                    "/auth/packageusers/" + this.subscribed_plan.id,
                    {
                        transformRequest: [
                            function (data, headers) {
                                return objectToFormData(data);
                            },
                        ],
                    }
                )
                    .then((response) => {
                        this.$root.loader("hide");
                        this.subscribed_plan.pop =
                            this.$refs.fileInput.files[0].name;
                        this.$emit("popUploaded", {
                            subscription: this.subscribed_plan,
                            message: response.data.message,
                        });
                        this.$root.alert("success", "", response.data.message);
                        form.reset();
                    })
                    .catch((error) => {
                        this.$root.loader("hide");
                        if (error.response.status == 422) {
                            this.error = error.response.data.error.pop;
                        } else {
                            this.error = error.response.data.message;
                        }
                        console.log(error, error.response);
                        form.reset();
                    });
            }
        },
        processPayment(e) {
            e.preventDefault();
            let form = new Form({
                name: process.env.MIX_APP_NAME,
                description:
                    "complete payment for the " + this.plan.name + " plan",
                local_price: {
                    amount: 90,
                    currency: process.env.MIX_COINBASE_CURRENCY,
                },
                pricing_type: "fixed_price",
                metadata: {
                    customer_id: this.$auth.user().id,
                    customer_name: this.$auth.user().owner,
                },
                cancel_url: process.env.MIX_APP_BASE_URL + "/dashboard/deposit",
                redirect_url:
                    process.env.MIX_APP_BASE_URL + "/dashboard/deposit/success",
            });
            form.submit("post", "https://api.commerce.coinbase.com/charges", {
                headers: {
                    "Content-Type": "Application/json",
                    "X-CC-Api-Key": process.env.MIX_COINBASE_API_KEY,
                    "X-CC-Version": "2018-03-22",
                },
            })
                .then((res) => {
                    location.assign(res.data.data.hosted_url)
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        updateLabel() {
            this.label = this.$refs.fileInput.files[0].name;
            if (this.$refs.fileInput.files[0].size > 4000000) {
                this.$root.alert("warning", " ", " File size is too large.");
            }
        },
    },
};
</script>
<style type="text/css">
.custom-file-label::after {
    background-color: #cca354 !important;
}
.list-group-item {
    background-color: unset;
}
</style>
