<template>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="">
                <button ref = "closeButton" class="btn f-size-18 float-right fonts fontsize-headingXLarge" type="button"
                    data-dismiss="modal">
                    &times;
                </button>
            </div>

            <div class="modal-body mb-1">
                <div class="form-group">
                    <div class="m-0 p-0" v-if="error">
                        <div class = "alert alert-danger" v-if="typeof error == 'object'">
                            <p v-for="err in error">
                                {{ err }}
                            </p>
                        </div>
                        <div v-else class="alert alert-danger">
                        <p >
                            {{ error }}
                        </p>
                        </div>
                    </div>
                </div>
                <div v-if="paymentMethod.currency_type == 'crypto'" class="card">
                    <div class="card-header pb-0">
                        <small>Send ${{ $root.normalNumeral(amount) }} worth of <span class="text-uppercase ">{{
                        paymentMethod.payment_method }}</span> to the wallet address.<br>
                           <span class="small text-secondary">Your account will be funded automatically upon verification of payment.</span> </small>
                    </div>
                    <div class="card-body pt-0 pb-0">
                        
                        <div class="mt-1">
                            <h4 class="mb-0 pb-0">
                                Payment <span class="text-primary">Details</span>
                            </h4>
                            <div class="m-2 qrcode">
                                <VueQRCodeComponent :size="150" :text="paymentMethod.wallet"></VueQRCodeComponent>
                            </div>
                            <table class="table table-sm">
                                <tr v-if="paymentMethod.wallet">

                                    <td colspan="2" @click="
                                        $root.alert(
                                            'success',
                                            ' ',
                                            'copied'
                                        )
                                    " v-clipboard="paymentMethod.wallet" class="p-0 pb-1 pt-1">
                                        <span id="wallet" class="small">{{ paymentMethod.wallet }} &nbsp;</span> <i
                                            class="fas fa-copy text-primary" title="copy" data-toggle="tooltip"
                                            data-placement="right" style="border-radius: 0px"></i>
                                    </td>
                                </tr>
                                <tr v-if="paymentMethod.crypto_memo">
                                    <td class="p-1 text-center text-primary">
                                        Memo: <span class="text-dark" id="memo">{{ paymentMethod.crypto_memo
                                        }}</span>
                                    </td>
                                    <td class="p-1 " @click="
                                    $root.alert(
                                        'success',
                                        ' ',
                                        'copied'
                                    )" v-clipboard=" paymentMethod.crypto_memo">
                                        <i class=" fas fa-copy text-primary" title="copy"
                                            style="border-radius: 0px"></i>
                                    </td>
                                </tr>
                                <tr v-if="paymentMethod.crypto_standard">
                                    <td class="p-1 text-center text-primary">
                                        Standard: <span id="standard" class=" text-uppercase text-dark">{{
                                        paymentMethod.crypto_standard }}</span>
                                    </td>
                                    <td class="p-1 " v-clipboard="paymentMethod.crypto_standard" @click="
                                        $root.alert(
                                            'success',
                                            ' ',
                                            'copied'
                                        )
                                    ">
                                        <i class="fas fa-copy text-primary" title="copy" data-toggle="tooltip"
                                            data-placement="right" style="border-radius: 0px"></i>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                  
                </div>
                <div v-else class="card">
                    <div class="card-header">
                        <small>Send ${{ $root.normalNumeral(amount) }} to the company's <span class="text-uppercase">{{
                        paymentMethod.payment_method
                        }}</span>
                            Account.<br>
                            <span class="small text-secondary">Your account will be funded automatically upon verification of
                                payment.</span></small>
                    </div>
                    <div class="card-body pt-0 pb-0">
                        
                        <div class="mt-1">
                            <h4>
                                Payment <span class="text-primary">Details</span>
                            </h4>
                            <div class="m-1 qrcode">
                                <VueQRCodeComponent :size="150" :text="'' + paymentMethod.acc_number">
                                </VueQRCodeComponent>
                            </div>
                            <table class="table table-sm">
                                <tr v-if="paymentMethod.bank_name">
                            
                                    <td><span class = "text-secondary small">Bank:</span></td>
                                    <td><span class = "small">{{ paymentMethod.bank_name }}</span></td>
                                </tr>
                                <tr v-if="paymentMethod.acc_name">
                                
                                    <td><span class="text-secondary small">Name:</span></td>
                                    <td><span class="small">{{ paymentMethod.acc_name }}</span></td>
                                </tr>
                                <tr v-if="paymentMethod.acc_number" @click="$root.alert( 'success' , ' ' , 'copied' )"
                                v-clipboard="paymentMethod.acc_number">
                                
                                    <td><span class="text-secondary small">Number:</span></td>
                                    <td><span class="small">{{ paymentMethod.acc_number }} </span><i class=" fas fa-copy text-primary" title="copy" style="border-radius: 0px"></i></td>
                                </tr>
                                <tr v-if="paymentMethod.swift_code">
                                
                                    <td><span class="text-secondary small">Swift:</span></td>
                                    <td><span class="small">{{ paymentMethod.swift_code }}</span></td>
                                </tr>
                            </table>
                          
                          

                        </div>
                       
                    </div>
                </div>
<div class="card-footer p-0 pt-1 ">
    <div class="card-footer-content text-muted">
        <p v-if="!subscribed_plan" class="text-danger text-left mb-0">Have you made payment?
        </p>
        <p v-else="!subscribed_plan" class="text-danger text-left mb-0 small">You have uploaded
            the POP of
            this deposit, you can
            change it below</p>
        <div class="" v-if="subscribed_plan" style=" margin: auto">
            <img style ="width: 100%;" :src="
                                        $root.basepath +
                                        '/images/pop/' +
                                        subscribed_plan.pop
                                    " class="p-1" alt="pop image" />
        </div>
        <form method="post" @submit.prevent="subscribe">

            <div class="form-group">
                <input type="text" style="font-size: 0.75rem;border: none;border-bottom: 1px solid gray;padding: 0px;"
                    placeholder="Click & enter transaction id/hash/ref." v-model="form.transaction_ref"
                    class="form-control input-ref" />
            </div>

            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <button class="btn btn-secondary" ref = "depositButton" style="height:28px; font-size:10px; padding:3px 12px"
                        type="submit">
                        {{ !subscribed_plan ? "Submit" : "Update" }}
                    </button>
                </div>

                <div class="custom-file">
                    <input required="" @change="updateLabel" ref="fileInput" type="file" class="custom-file-input"
                        id="inputGroupFile03" accept=".png, .jpg, .jpeg" />
                    <label class="custom-file-label text-left" for="inputGroupFile03">{{
                        label }}</label>
                </div>
            </div>
            <p v-for="err in error" class="small text-primary" v-if="typeof error == 'object'">
                {{ err }}
            </p>
        </form>

    </div>
</div>
            </div>
        </div>




    </div>
</template>
<script>
import VueQRCodeComponent from "vue-qrcode-component";
export default {
    mounted() { },
    data() {
        return {
            form: new Form({
                transaction_ref: "",
            }),
            label: "upload POP/Screenshot",
            subscribed_plan: undefined,
            error: undefined,
        };
    },
    components: {
        VueQRCodeComponent,
    },
    props: ["plan", "paymentMethod", "amount", "deposit_type"],
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
                var url = this.deposit_type == 'balance' ? "/auth/popdeposit" : "/auth/packageusers"
                form.type = this.deposit_type
                form.reference = "SELF DEPOSIT"
                form.type = "deposit"
                form.submit("post", url, {
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
                            this.label = "Change pop file";
                      
                        
                        this.$root.scrollUp()
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
                    });
            } else {
                form._method = "PUT";
                var url = this.deposit_type == 'balance' ? "/auth/popdeposit/" + this.subscribed_plan.id : "/auth/packageusers/" + this.subscribed_plan.id 
                if (this.$refs.fileInput.files[0].name == this.subscribed_plan.pop) {
                    this.$root.loader("hide");
                    return this.$root.alert(
                        "warning",
                        "Choose a different file ",
                        "OOPS!!!"
                    );

                }
                form.submit(
                    "post",
                    url,
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
                        this.$root.scrollUp()
                        this.$refs.closeButton.click();
                    })
                    .catch((error) => {
                        this.$root.loader("hide");
                        if (error.response.status == 422) {
                            this.error = error.response.data.error.pop;
                        } else {
                            this.error = error.response.data.message;
                            this.$root.alert("error", " ", this.error);
                        }
                        this.$root.scrollUp()
                        console.log(error, error.response);
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
    background-color: var(--primary_color) !important;
    color: white !important;
}

.custom-file-label {
    padding: 10px 2px !important;
    font-size: 10px !important;
}

.qrcode {
    display: flex;
    justify-content: center;
}

.qrcode>* {
    text-align: center;
    align-self: center;
}

.input-ref:focus {
    color: #495057;
    background-color: #fff;
    border-color: unset !important;
    outline: 0;
    box-shadow: unset !important;
    border: none;
    border-bottom: 1px solid var(--primary_color) !important;
}

.dialogbox .modal-dialog .modal-content {
    max-width: 350px !important;
}
</style>
