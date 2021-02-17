<template>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark bg_img" :style="'backgroundImage:url('+ $root.basepath + '/images/bg/bg-5.jpg'">
            <div class="modal-header text-center">
                <h3 class="modal-title font-weight-bold base--color">Deposit</h3>
                <button class="btn base--color f-size-18 p-0" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="text-center small">
                    <div v-if="paymentMethod.currency_type == 'crypto'" class="p-0 m-0">
                        <h3 class="mb-2">Transfer <span class="base--color">{{ paymentMethod.payment_method}} Address </span> </h3>
                        <p>Once we confirm your payment, your account will be funded instantly,<br>Please note that you are making a deposit of {{$root.normalNumeral(amount)}} USD</p>
                        <div class="m-3">
                            <vue-qrcode :value="paymentMethod.wallet" />
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" v-model="paymentMethod.wallet" disabled="" id="wallet" class="text-center form-control">
                            <div class="input-group-append">
                                <button v-clipboard="paymentMethod.wallet" style="border-radius: 0px;" class="cmn-btn" data-clipboard-target="#wallet">Copy</button>
                            </div>
                        </div>
                        <p class="f-size-14 m-2">If you do not know where to buy <span class="text-lowercase">{{paymentMethod.payment_method}}</span> <a href="#" class="base--color">click here</a></p>
                    </div>
                    <div v-else class="p-0 m-0">
                        <h3 class="mb-2">Transfer&nbsp;<span class="base--color">{{ paymentMethod.payment_method}} Account</span> </h3>
                        <p>Once we confirm your payment, your account will be funded instantly,<br>Please note that you are making deposit of {{$root.normalNumeral(amount)}} USD</p>
                        <div class="p-0 mt-3">
                            <h4>Payment <span class="base--color">Details</span></h4>
                            <p v-if="paymentMethod.bank_name"><b>Bank Name:</b> <span>{{paymentMethod.bank_name}}</span></p>
                            <p v-if="paymentMethod.acc_name"><b>Account Name:</b> <span>{{paymentMethod.acc_name}}</span></p>
                            <p v-if="paymentMethod.acc_number"><b>Account Number:</b> <span>{{paymentMethod.acc_number}}</span></p>
                            <p v-if="paymentMethod.swift_code"><b>Swift Code:</b> <span>{{paymentMethod.swift_code}}</span></p>
                        </div>
                        <div class="m-3">
                            <vue-qrcode :quality="1" :value="'' + paymentMethod.acc_number" />
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" v-model="paymentMethod.acc_number" disabled="" id="acc_number" class="text-center form-control">
                            <div class="input-group-append">
                                <button v-clipboard="paymentMethod.acc_number" style="border-radius: 0px;" class="cmn-btn" data-clipboard-target="#wallet">Copy</button>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="cmn-btn mt-2">Pay Using BTC Wallet App< /a>-->
                    <p class="f-size-14 m-2">If you have made this transfer, upload your proof of payment (pop)</p>
                    <form @submit.prevent="subscribe">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn base--bg text-white" type="submit">Upload</button>
                            </div>
                            <div class="custom-file">
                                <input required="" @change = "updateLabel" ref="fileInput" type="file" class="custom-file-input" id="inputGroupFile03">
                                <label class="custom-file-label text-left" for="inputGroupFile03">{{label}}</label>
                            </div>
                        </div>
                    </form>
                    <!-- <button" type="button" class="cmn-btn">Login Now</button> -->
                </div>
            </div>
            <div class="modal-footer mb-115">
                <button type="button" ref="closeButton" class="btn btn-outline-light" data-dismiss="modal">Close</button>
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
            form : new Form({

            }),
            subscription_status : false,
            label : 'Choose pop file'

        }
    },
    components: {
        VueQrcode,
    },
    props: ['plan', 'paymentMethod', 'processor', 'amount'],
    computed: {
        
    },
    beforeDestroy() {
        // this.$refs.closeButton.click();
        // this.form.reset();
    },
    methods: {

        subscribe() {
            if(!this.subscription_status){
                if(this.$refs.fileInput.files[0].size > 4000000){
                    return this.$root.alert('error', ' ', ' File size is too large.')   
                }
               this.$root.loader('show')
                let data = new FormData()
                let file = this.$refs.fileInput.files[0]
                let form = new Form()
                form.pop = file
                form.user_id = this.$auth.user().id
                form.amount = this.amount


                form.submit('post', "/auth/packageusers", {
                    transformRequest: [function(data, headers) {
                        return objectToFormData(data)
                    }]
                })
                .then(response => {
                    this.$root.loader('hide')
                    this.subscription_status = true
                    this.$emit('popUploaded')
                    this.$root.alert('success', '', response.data.message)
                    form.reset()
                    this.label = 'Choose pop file'
                    this.$refs.closeButton.click()
                    window.scrollTo(0, 0)
                    console.log(response.data)
                    // this.$emit('success', 'The deposit has been saved. It will become active when the administrator checks statistics.')
                })
                .catch(error => {
                    this.$root.loader('hide')
                    // this.errors = error.response.data.error
                    console.log(error, error.response)
                    // this.error = error.response.data.message
                    this.$root.alert('error', '', 'Upload not successful, try again.')
                    // setTimeout(() => { window.scrollTo(0, 600); this.$emit('changeComponent', 'DepositPlan', this.selectedPackage)  }, 2000);
                })
            }
            else {
                this.$root.alert('error', '', 'you have submitted already')
                console.log('you have submitted already')
            }  
        },
         updateLabel(){
                this.label = this.$refs.fileInput.files[0].name
                if(this.$refs.fileInput.files[0].size > 4000000){
                     this.$root.alert('warning', ' ', ' File size is too large.')   
                }
            }

    }
}

</script>
<style type="text/css">
.custom-file-label::after {
    background-color: #cca354 !important;
}

</style>
