<template>
    <section class="pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="subscribe-wrapper bg_img" :data-background="$root.basepath + '/images/bg/bg-5.jpg'" >
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <h2 class="title">Subscribe Our Newsletter</h2>
                            </div>
                            <div class="col-lg-7 mt-lg-0 mt-4">
                                <form action ="" method="post" class="subscribe-form">
                                    <input type="email" required="" v-model="form.email" class="form-control" placeholder="Email Address ">
                                    <button @click.prevent = "subscribe" type="submit" @submit.prevent="subscribe" class="subscribe-btn"><i class="fas fa-envelope"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- subscribe-wrapper end -->
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    data() {
        return {
            form: new Form({
                email: ''
            })
        }

    },
    computed: {},
    created() {

    },
    // components: { Menu },
    methods: {
        subscribe() {
        	if (this.form.email) {
        		this.form.post("/auth/newsletterss")
                .then(response => {
                    this.$root.alert('success', 'Ok', 'you have subscribed successfully')
                    this.form.reset()
                })
                .catch(error => {
                    this.errors = error.response.data.error || {}
                    console.log(error.response)
                    this.$root.alert('error', ' ', 'subscription was not successful, please try again...')

                })
        	}else return false;
        	return false
        }
    },

}

</script>
<style>
</style>
