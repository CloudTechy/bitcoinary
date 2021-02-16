<template>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg_img" :style="'backgroundImage:url('+ $root.basepath + '/images/bg/bg-5.jpg'">
            <div class="modal-header text-center">
                <h3 class="modal-title font-weight-bold">Deposit</h3>
                <button type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-centerT">
                <div class="account-card__body small">
                    <p>Transfer Bitcoin address </p>
                    <p>Once we confirm your payment, your account will be funded instantly,<br>Please note that there is a minimum deposit of 300USD</p>
                    <div class="input-group mb-3">
                        <input type="text" v-model = "Referral_link" disabled="" id="wallet" class="form-control">
                        <div class="input-group-append">
                            <button v-clipboard="Referral_link" class="btn base--bg text-white" data-clipboard-target="#wallet">Copy</button>
                        </div>
                    </div>
                    <vue-qrcode value="https://www.1stg.me" />
                    <a href="/about" class="cmn-btn mt-4">Pay Using BTC Wallet App</a>
                    <p class="f-size-14 mb-3">If you do not know where to buy bitcoin <a href="/forgot_password" class="base--color">click here</a></p>
                    <!-- <button" type="button" class="cmn-btn">Login Now</button> -->
                </div>
            </div>
            <div class="modal-footer">
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
            Referral_link : "jdshjdshjdhjdhjdhjdhjdsh"
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
