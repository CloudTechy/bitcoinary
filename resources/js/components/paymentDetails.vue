<template>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark bg_img" :style="'backgroundImage:url('+ $root.basepath + '/images/bg/bg-5.jpg'">
            <div class="modal-header text-center">
                <h3 class="modal-title font-weight-bold">Deposit</h3>
                <button class="btn base--color f-size-18" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="text-center small">
                    <p class="mb-2">Transfer Bitcoin address </p>
                    <p>Once we confirm your payment, your account will be funded instantly,<br>Please note that you are making deposit of 300 USD</p>
                    <div class="m-3">
                        <vue-qrcode :value="Referral_link" />
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" v-model="Referral_link" disabled="" id="wallet" class="text-center form-control">
                        <div class="input-group-append">
                            <button v-clipboard="Referral_link" style="border-radius: 0px;" class="cmn-btn" data-clipboard-target="#wallet">Copy</button>
                        </div>
                    </div>
                    <a href="#" class="cmn-btn mt-2">Pay Using BTC Wallet App</a>
                    <p class="f-size-14 m-3">If you do not know where to buy bitcoin <a href="#" class="base--color">click here</a></p>
                    <p class="f-size-14 m-3">If you have made this transfer, upload your proof of payment (pop)</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn base--bg" type="button">Upload</button>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile03">
                            <label class="custom-file-label" for="inputGroupFile03">Choose pop file</label>
                        </div>
                    </div>
                    <!-- <button" type="button" class="cmn-btn">Login Now</button> -->
                </div>
            </div>
            <div class="modal-footer mb-4">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</template>
<script>
import VueQrcode from 'vue-qrcode'
export default {

    mounted() {

    },
    data() {
        return {
            Referral_link: "jdshjdshjdhjdhjdhjdhjdsh"
        }
    },
    components: {
        VueQrcode,
    },
    beforeDestroy() {
        // this.$refs.closeButton.click();
        // this.form.reset();
    },
    methods: {
        add() {
            this.$Progress.start();
            this.form.post('./api/suppliers')
                .then(response => {
                    this.$refs.closeButton.click()
                    window.dispatchEvent(new Event('close_sidebar_min'));
                    if (response.data.status == true) {
                        Fire.$emit('supplier_created', response.data.data)
                        this.form.reset()
                        this.$Progress.finish()
                        this.$root.alert('success', 'success', 'supplier created')
                    } else {
                        this.$Progress.fail()
                        this.$root.alert('error', 'error', 'An unexpected error occured, Try again Later')
                    }
                })
                .catch(error => {
                    this.$Progress.fail()
                    this.$root.alert('error', 'error', error.response.data.message)
                    var error = error.response.data.error;
                    console.log(error);
                    if (error.name) {
                        this.$refs.name.classList.add('is-invalid');
                    }
                    if (error.email) {
                        this.$refs.email.classList.add('is-invalid');
                    }
                    if (error.number) {
                        this.$refs.number.classList.add('is-invalid');
                    }
                    if (error.city) {
                        this.$refs.city.classList.add('is-invalid');
                    }
                    if (error.country) {
                        this.$refs.country.classList.add('is-invalid');
                    }
                    if (error.acc_name) {
                        this.$refs.acc_name.classList.add('is-invalid');
                    }
                    if (error.acc_number) {
                        this.$refs.acc_number.classList.add('is-invalid');
                    }
                    if (error.bank_name) {
                        this.$refs.bank_name.classList.add('is-invalid');
                    }
                    if (error.is_stock_available) {
                        this.$refs.is_stock_available.classList.add('is-invalid');
                    }
                    if (error.address) {
                        this.$refs.address.classList.add('is-invalid');
                    }
                });
        },
        closeAddComponent() {
            window.dispatchEvent(new Event('close_sidebar_min'));
            return true;
        },

    }
}

</script>
<style type="text/css">
    .custom-file-label::after {
            background-color: #cca354 !important;
    }
</style>
