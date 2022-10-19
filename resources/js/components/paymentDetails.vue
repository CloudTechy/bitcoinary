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
                            Transfer
                            <span class="base--color"
                                >{{ paymentMethod.payment_method }} Address
                            </span>
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

                        <p>
                            Once we confirm your payment, your account will be
                            funded instantly,<br />Please note that you are
                            making a deposit of
                            {{ $root.normalNumeral(amount) }} USD
                        </p>

                        <div class="p-0 mt-3">
                            <h4>
                                Payment <span class="base--color">Details</span>
                            </h4>
                            <div class="m-3 qrcode">
                                <VueQRCodeComponent
                                    :size="150"
                                    :text="paymentMethod.wallet"
                                ></VueQRCodeComponent>
                            </div>
                            <table class="table table-sm">
                                <tr v-if="paymentMethod.wallet">
                                    <td
                                        class="text-center base--color font-weight-bold"
                                    >
                                        Wallet:
                                    </td>
                                    <td
                                        id="wallet"
                                        class="text-center text-white"
                                    >
                                        {{ paymentMethod.wallet }}
                                    </td>
                                    <td class="text-left">
                                        <i
                                            class="fa fa-copy base--color"
                                            title="copy"
                                            data-toggle="tooltip"
                                            data-placement="right"
                                            @click="
                                                $root.alert(
                                                    'success',
                                                    ' ',
                                                    'copied'
                                                )
                                            "
                                            v-clipboard="paymentMethod.wallet"
                                            style="border-radius: 0px"
                                            data-clipboard-target="#wallet"
                                        ></i>
                                    </td>
                                </tr>
                                <tr v-if="paymentMethod.crypto_memo">
                                    <td
                                        class="text-center base--color font-weight-bold"
                                    >
                                        Memo:
                                    </td>
                                    <td
                                        id="memo"
                                        class="text-center text-white"
                                    >
                                        {{ paymentMethod.crypto_memo }}
                                    </td>
                                    <td class="text-left">
                                        <i
                                            class="fas fa-copy base--color"
                                            title="copy"
                                            data-toggle="tooltip"
                                            data-placement="right"
                                            @click="
                                                $root.alert(
                                                    'success',
                                                    ' ',
                                                    'copied'
                                                )
                                            "
                                            v-clipboard="paymentMethod.crypto_memo"
                                            style="border-radius: 0px"
                                            data-clipboard-target="#memo"
                                        ></i>
                                    </td>
                                </tr>
                                <tr v-if="paymentMethod.crypto_standard">
                                    <td
                                        class="text-center base--color font-weight-bold"
                                    >
                                        Standard:
                                    </td>
                                    <td
                                        id="standard"
                                        class="text-center text-white text-uppercase"
                                    >
                                        {{ paymentMethod.crypto_standard }}
                                    </td>
                                    <td class="text-left">
                                        <i
                                            class="fas fa-copy base--color"
                                            title="copy"
                                            data-toggle="tooltip"
                                            data-placement="right"
                                            @click="
                                                $root.alert(
                                                    'success',
                                                    ' ',
                                                    'copied'
                                                )
                                            "
                                            v-clipboard="paymentMethod.crypto_standard"
                                            style="border-radius: 0px"
                                            data-clipboard-target="#standard"
                                        ></i>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <p v-if="!subscribed_plan" class="f-size-14 m-2">
                            If you do not know where to buy
                            <span class="text-lowercase">{{
                                paymentMethod.payment_method
                            }}</span>
                            <a
                                target="_blank"
                                href="https://www.coinmama.com"
                                class="base--color"
                                >click here</a
                            >
                        </p>
                    </div>
                    <div v-else class="p-0 m-0">
                        <h3 class="mb-2">
                            Transfer&nbsp;<span class="base--color"
                                >{{
                                    paymentMethod.payment_method
                                }}
                                Account</span
                            >
                        </h3>
                        <p>
                            Once we confirm your payment, your account will be
                            funded instantly,<br />Please note that you are
                            making deposit of
                            {{ $root.normalNumeral(amount) }} USD
                        </p>
                        <div class="p-0 mt-3">
                            <h4>
                                Payment <span class="base--color">Details</span>
                            </h4>
                            <p v-if="paymentMethod.bank_name">
                                <b>Bank Name:</b>
                                <span>{{ paymentMethod.bank_name }}</span>
                            </p>
                            <p v-if="paymentMethod.acc_name">
                                <b>Account Name:</b>
                                <span>{{ paymentMethod.acc_name }}</span>
                            </p>
                            <p v-if="paymentMethod.acc_number">
                                <b>Account Number:</b>
                                <span>{{ paymentMethod.acc_number }}</span>
                            </p>
                            <p v-if="paymentMethod.swift_code">
                                <b>Swift Code:</b>
                                <span>{{ paymentMethod.swift_code }}</span>
                            </p>
                        </div>
                        <p class="base--color m-2 font-weight-bold">
                            scan account number
                        </p>
                        <div class="m-3 qrcode">
                            <VueQRCodeComponent
                                :size="150"
                                :text="'' + paymentMethod.acc_number"
                            ></VueQRCodeComponent>
                        </div>
                        <p class="base--color m-2 font-weight-bold">
                            or copy account number
                        </p>
                        <div class="input-group mb-3">
                            <input
                                type="text"
                                v-model="paymentMethod.acc_number"
                                disabled=""
                                id="acc_number"
                                class="text-center form-control"
                            />
                            <div class="input-group-append">
                                <button
                                    @click="
                                        $root.alert('success', ' ', 'copied')
                                    "
                                    v-clipboard="paymentMethod.acc_number"
                                    style="border-radius: 0px"
                                    class="cmn-btn"
                                    data-clipboard-target="#wallet"
                                >
                                    Copy
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="cmn-btn mt-2">Pay Using BTC Wallet App< /a>-->
                    <p v-if="!subscribed_plan" class="f-size-14 m-2">
                        If you have made this transfer, upload your proof of
                        payment (pop)
                    </p>
                    <p v-else class="mt-4 font-weight-bold p-1">
                        You have uploaded the POP of this deposit, you can
                        change it below
                    </p>
                    <div
                        class="bg--base"
                        v-if="subscribed_plan"
                        style="width: 128px; margin: auto"
                    >
                        <img
                            :src="
                                $root.basepath +
                                '/images/pop/' +
                                subscribed_plan.pop
                            "
                            class="p-1"
                            alt="pop image"
                        />
                    </div>
                    <form class="mt-2" @submit.prevent="subscribe">
                     <div class="input-group">
                            <div
                                style="border-radius: 0px 5px"
                                class="input-group p-3"
                            >
                                <span class="icon bg--base text-white"
                                    ><i
                                        class="fas fa-pen"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <input
                                type="text"
                                placeholder="Paste or enter transaction ref"
                                v-model="form.transaction_ref"
                                class="form-control"
                            />
                            </div>
                            
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button
                                    class="btn base--bg text-white"
                                    type="submit"
                                >
                                    {{ !subscribed_plan ? "Upload" : "Update" }}
                                </button>
                            </div>

                            <div class="custom-file">
                                <input
                                    required=""
                                    @change="updateLabel"
                                    ref="fileInput"
                                    type="file"
                                    class="custom-file-input"
                                    id="inputGroupFile03"
                                    accept=".png, .jpg, .jpeg"
                                />
                                <label
                                    class="custom-file-label text-left"
                                    for="inputGroupFile03"
                                    >{{ label }}</label
                                >
                            </div>
                        </div>
                        <p
                            v-for="err in error"
                            class="small base--color"
                            v-if="typeof error == 'object'"
                        >
                            {{ err }}
                        </p>

                       
                    </form>
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
import VueQRCodeComponent from "vue-qrcode-component";
export default {
    mounted() {},
    data() {
        return {
            form: new Form({
                transaction_ref: "",
            }),
            label: "Choose pop file",
            subscribed_plan: undefined,
            error: undefined,
        };
    },
    components: {
        VueQRCodeComponent,
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
            let form = this.form;
            form.pop = file;
            this.error = undefined;
            form.user_id = this.$auth.user().id;
            form.amount = this.amount;
            form.payment_method = this.paymentMethod.payment_method;

            form.reference;
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
.qrcode {
    display: flex;
    justify-content: center;
}
.qrcode > * {
    text-align: center;
    align-self: center;
}
</style>
