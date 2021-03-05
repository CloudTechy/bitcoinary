<template>
    <div class="page-wrapper">
    <DashboardHeader></DashboardHeader>


        <section class="inner-hero bg_img" :style="'background:url('+ $root.basepath +'/images/bg/bg-1.jpg)'" :data-background="$root.basepath + '/images/bg/bg-1.jpg'">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">User Settings</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li>Settings</li>
                        </ul>
                        <h2 class="page-title pt-4"><span class="base--color">Welcome, </span> {{$auth.user().username}}</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row mt-50 ">
                            <div class="col-sm-12 col-md-12 col-lg-4 mb-50">
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="card member-card">
                                        <div class="headeraccount base--bg">
                                            <h4 class="m-t-10 text-dark">{{$auth.user().username}}</h4>
                                        </div>
                                        <div class="member-img">
                                            <img @click="changeProfilePicture" v-if="$auth.user().image" :src="$root.basepath + '/images/users/'+$auth.user().image" class="rounded-circle" alt="profile-image">
                                            <img v-else :src="$root.basepath + '/images/uploads/user2.png'" class="rounded-circle" alt="profile-image">
                                        </div>
                                        <div class="body">
                                            <div class="col-12">
                                                <p class="text-muted">{{reg_date}}</p>
                                                <p class="text-muted" style="font-size: 16px">{{$auth.user().email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="profile" class="col-sm-12 col-md-12 col-lg-4 mb-50">
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="headeraccount mb-3">
                                        <h2><strong>Personal</strong> Details</h2>
                                    </div>
                                    <div class="card">
                                        <div class="body">
                                            <form autocomplete="off" @submit.prevent="editProfile" method="post">
                                                <table cellspacing="0" cellpadding="2" border="0" style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <td>First Name:</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="text" v-model="form.first_name" required placeholder="Enter first name" :class="{'form-control' : true, 'error-input': errors.first_name != undefined, editbox:true}">
                                                                    <p v-if="errors.first_name" v-for="error in errors.first_name" class="base--color m-0 p-2 small">{{error}}</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Last Name:</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="text" v-model="form.last_name" required placeholder="Enter last name" :class="{'form-control' : true, 'error-input': errors.last_name != undefined, editbox:true}">
                                                                    <p v-if="errors.last_name" v-for="error in errors.last_name" class="base--color m-0 p-2 small">{{error}}</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- <tr>
                                                            <td>Username:</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input disabled="" type="text" v-model="form.username" required placeholder="Enter username" :class="{'form-control' : true, 'error-input': errors.username != undefined, editbox:true}">
                                                                    <p v-if="errors.username" v-for="error in errors.username" class="base--color m-0 p-2 small">{{error}}</p>
                                                                </div>
                                                            </td>
                                                        </tr> -->
                                                        <tr>
                                                            <td>Email:</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="email" v-model="form.email" required placeholder="Enter email" :class="{'form-control' : true, 'error-input': errors.email != undefined, editbox:true}">
                                                                    <p v-if="errors.email" v-for="error in errors.email" class="base--color m-0 p-2 small">{{error}}</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Password:</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="password" v-model="form.password"  placeholder="Enter new password" :class="{'form-control' : true, 'error-input': errors.password != undefined, editbox:true}">
                                                                    <p v-if="errors.password" v-for="error in errors.password" class="base--color m-0 p-2 small">{{error}}</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Confirm Password:</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="password" v-model="form.password_confirmation"  placeholder="Confirm new password" :class="{'form-control' : true, 'error-input': errors.password_confirmation != undefined, editbox:true}">
                                                                    <p v-if="errors.password_confirmation" v-for="error in errors.password_confirmation" class="base--color m-0 p-2 small">{{error}}</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <div class="text-center p-2">
                                                                    <button :disabled="form.busy" type="submit" class="btn cmn-btn">Update</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="payment" class="col-sm-12 col-md-12 col-lg-4 mb-50">
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="headeraccount mb-3">
                                        <!-- Third Section -->
                                        <h2><strong>Payment</strong> Details</h2>
                                    </div>
                                    <div class="card"">
                                        <div class=" body">
                                        <table cellspacing="0" cellpadding="2" border="0" style="width: 100%">
                                            <tbody>
                                                <tr v-for="py in $root.payments">
                                                    <td class="text-capitalize">{{py.name}}</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input @change="updatePaymentDetails(py.name, py.type)" :ref="py.name" :value="$root.getAccountDetails(py.name, py.type) " type="text" required :placeholder="py.type == 'fiat' ? 'Enter Account' :'Enter Wallet'" :class="{'form-control' : true, editbox:true}">
                                                            <p v-if="errors && errors[py.name]" v-for="err in errors[py.name]" class="small p-1 base--color">{{err}}</p>
                                                            <p v-if="message && message[py.name]" class="text-success small p-1">{{message[py.name]}}</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer></Footer>
    </div>
</template>
<script>
    import moment from 'moment'
export default {
    data() {
        return {
            form : new Form({
                first_name : '',
                last_name : '',
                email: '',
                // username : '',
                password : '',
                password_confirmation : '',
            }),
            message: '',
            error: '',
            errors: {},
        }
    },
    watch: {
        message() {
            setTimeout(() => { this.message = '' }, 5000);
        },
    },
    mounted() {
        if(this.$route.query.py){
            this.$refs[this.$route.query.py][0].focus();        
        } 

        this.form.fill(this.$auth.user())   
    },
    computed: {
        reg_date() {
            return moment(this.$auth.user().created_at).format("MMM Do YYYY h:mm:ss a")
        }
    },
    methods: {
        editProfile() {
            this.$root.loader('show')
            this.message  = ''
            this.error  = ''
            this.errors  = {}
            this.form.patch("/auth/users/" + this.$auth.user().id)
                .then(response => {
                    this.$auth.fetch()
                    this.$root.loader('hide')
                    this.$root.alert('success', ' ', ' Updated')
                })
                .catch(error => {
                    this.$root.loader('hide')
                    if (error.response.status == 422) { 
                        this.errors = {}
                        this.errors =  error.response.data.error   
                    }
                    else{
                        this.error = error.response.data.message
                        this.$root.alert('error', ' ', this.error)
                    }
                    // this.$root.alert('error', ' ', 'Update was not successful, try again...')

                })

        },
        changeProfilePicture(){
        }, 
        updatePaymentDetails(ref, type){
            this.$root.loader('show')
            this.message  = ''
            this.errors  = ''
            var value = this.$refs[ref][0].value
            var payment_method = this.pyValidate(ref, value)
            var payment_method_acc_number = value && type == 'fiat' ?  value : 0
            var payment_method_wallet = value && type == 'crypto' ?  value : "Not Set"
            let form = new Form({
                acc_number : payment_method_acc_number,
                acc_name : this.$auth.user().names,
                currency_type : type,
                wallet : payment_method_wallet,
                user_id : this.$auth.user().id,
                payment_method,
            })
            let paymentDetails = this.$root.cryptoFilter(this.$auth.user().bank_details, payment_method)[0]

            if(paymentDetails){
                //update
                form.patch("/auth/bankdetails/" + paymentDetails.id)
                .then(response => {
                    this.$auth.fetch()
                    this.message = {}
                    this.message[ref]= "Updated Successfully"
                    this.$root.loader('hide')
                    this.$root.alert('success', ' ', 'updated')
                })
                .catch(error => {
                    console.log(error)
                    this.$root.loader('hide')
                    if (error.response.status == 422) {
                        var address = type =='fiat' ? 'acc_number' : 'wallet' 
                        this.errors = {}
                        this.errors[ref] =  error.response.data.error[address]    
                    }
                    else{
                        this.error = error.response.data.message
                        this.$root.alert('error', ' ', this.error)
                    }
                    // this.errors = error.response.data.error || {}
                    // this.$root.alert('error', ' ', 'Update was not successful, try again...')

                })
            } 
            else {
                //add
                form.post("/auth/bankdetails")
                .then(response => {
                    this.$auth.fetch()
                    this.message = {}
                    this.message[ref]= "updated successfully"
                    this.$root.loader('hide')
                    this.$root.alert('success', ' ', 'updated')
                })
                .catch(error => {
                    this.$root.loader('hide')
                    if (error.response.status == 422) {
                        this.errors = {}
                        this.errors[ref] =  error.response.data.error
                    }
                    else{
                        this.error = error.response.data.message
                        this.$root.alert('error', ' ', this.error)
                    }
                })
            }            
            // console.log({form})    
        }, 
        pyValidate(paymentMethod, address){
            //serve validation here
            return paymentMethod
        }    
    }
}

</script>
<style type="text/css" scoped="">
.member-card {
    min-height: 467px;
    border-radius: 0.55rem 0.55rem .25rem .25rem;
    text-align: center;
}

.member-card .member-img {
    position: relative;
    margin-top: -70px;
}

.member-card .member-img img {
    width: 150px;
    border: 3px solid #fff;
    box-shadow: 0 10px 25px 0 rgb(0 0 0 / 30%);
}

.blog-card .body {
    color: white;
    font-size: 14px;
    padding: 20px;
    font-weight: 400;
}

.text-muted {
    color: #6c757d !important;
    line-height: 1.61em;
    margin-top: 0;
    margin-bottom: 1rem;
}

.m-t-10,
.profile_state li h4,
.social-links {
    margin-top: 10px;
    font-size: 1.714em;
    line-height: 1.45em;
}

.blog-card .headeraccount {
    color: #424242;
    padding: 20px;
    position: relative;
    box-shadow: none;
}

.blog-card .headeraccount h2 strong {
    color: #cca354;
}

.blog-card .headeraccount h2 {
    font-size: 15px;
    color: #ffff;
    position: relative;
}

.editbox {
    border-radius: 30px;
    border: 2px solid rgba(204, 163, 84, 0.45);
    color: #cca354;
}

.form-controlamount {
    background-color: transparent;
    border: 1px solid #535e69;
    border-radius: 30px;
    color: #cca354;
    line-height: normal;
    font-size: 0.8571em;
    -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
    -moz-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
    -o-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
    -ms-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
    transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
    -webkit-box-shadow: none;
    box-shadow: none;
    height: auto;
    padding: 10px 22px;
    display: block;
    width: 100%;
}

.member-card .headeraccount {
    min-height: 150px;
    border-radius: 0.55rem 0.55rem .25rem .25rem;
}

.btn:focus {
    box-shadow: none !important;
}

.silver {
    background: linear-gradient(to right, #a7a7a7 0%, #eaeaea 100%);
}

.gold {
    background: linear-gradient(to right, #e25e5a 0%, #e25e5a 0%, #f8b982 100%, #f8b982 100%, #f8b982 100%);
}

</style>
