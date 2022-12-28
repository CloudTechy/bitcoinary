<template>
    <div class="">

        <Header></Header>
        <div id="appCapsule">

            <div class="section mt-3 text-center">
                <div class="avatar-section">
                    <a :key="avatarKey" href="#" data-bs-toggle="modal" data-bs-target="#photo">
                        <img v-if="$auth.user().image" :src="$root.basepath + '/images/users/'+$auth.user().image"
                            alt="avatar" class="imaged w100 rounded">
                        <img v-else :src="$root.basepath + '/assets/images/home/user-default.png'" alt="avatar"
                            class="imaged w100 rounded">
                        <span class="button"><i class="fas fa-camera"></i></span>
                    </a>
                </div>
            </div>

            <div class="listview-title mt-1">&nbsp;</div>
            <ul class="listview image-listview text inset">
                <li>
                    <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#profile">
                        <div class="in">
                            <div class="text-capitalize">
                                {{$auth.user().names}} </div>
                            <span class="text-primary">
                                <i class="fas fa-edit"></i> EDIT PROFILE
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        <div class="in">
                            <div>Balance</div>
                            <span class="text-primary">
                                ${{$root.normalNumeral($auth.user().balance)}} </span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="listview-title mt-1">Personal Information</div>
            <ul class="listview image-listview text inset">
                <li>
                    <a href="#" class="item">
                        <div class="in">
                            <div>Username</div>
                            <span class="text-primary">
                                {{$auth.user().username}} </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        <div class="in">
                            <div>Email</div>
                            <span class="text-primary">
                                {{$auth.user().email}} </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        <div class="in">
                            <div>Phone</div>
                            <span class="text-primary">
                                {{$auth.user().number}}
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        <div class="in">
                            <div>Country</div>
                            <span class="text-primary">
                                {{$auth.user().country}}
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        <div class="in">
                            <div>City</div>
                            <span class="text-primary">
                                {{$auth.user().city}}
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        <div class="in">
                            <div>Gender</div>
                            <span class="text-primary">
                                {{$auth.user().gender}}
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="listview-title mt-1">Payment Details <span class = "text-primary">Click on respective address to edit</span></div>
            <ul class="listview image-listview text inset">
                <li  v-for="py in $root.payments">
                    <span class="item">
                        <div class="in">
                            <div class = "smaller font-weight-bold" style="flex-basis: max-content;
">{{py.name}}</div>
                            <!-- <span class="text-primary">
                                {{$auth.user().gender}}
                            </span>
                            <div>
                                {{$root.getPaymentAccountDetails($auth.user().bank_details, py.name, py.type)}}
                            </div> -->
                            <div class="text-primary " style="flex-basis: 80%;">
                                <input  @change="updatePaymentDetails(py.name, py.type)" :ref="py.name"
                                :value="$root.getPaymentAccountDetails($auth.user().bank_details, py.name, py.type) " type="text" required
                                :placeholder="py.type == 'fiat' ? 'Enter Account No' :'Enter Wallet Address'"
                                :class="{'form-control' : true, editbox:true , small:true, 'text-center':true}"> 
                                <p v-if="errors && errors[py.name]" v-for="err in errors[py.name]" class="small text-center p-1 text-danger">{{err}}</p>
                                                            <p v-if="message && message[py.name]" class="text-success small text-center p-1">{{message[py.name]}}</p>
                            </div>
                        </div>
                    </span>
                </li>
            </ul>
            <div class="listview-title mt-1">Security</div>
            <ul class="listview image-listview text inset">
                <li>
                    <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#pass">
                        <div class="in">
                            <div  id="Password" class="text-danger">Change Password</div>
                            <span class="text-primary">
                                <i class="fas fa-user-shield"></i>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#phrase">
                        <div class="in">
                            <div class="text-danger">Recovery Phrase</div>
                            <span class="text-primary">
                                <i class="fas fa-user-lock"></i>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="listview-title mt-1">&nbsp;</div>

        </div>
        <!-- * App Capsule -->
        <!-- Dialog Form -->
        <div class="modal fade dialogbox" id="phrase" data-bs-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        &nbsp;
                    </div>
                    <div v-if = "$auth.user().key_phrase" class="modal-body">
                        {{$auth.user().username + ' ' + $auth.user().key_phrase }} </div>
                        <div v-else class="modal-body">
                            No Key phrases has been assigned to you yet! <br>Contact Admin for assistance  </div>
                    <div class="modal-footer">
                        <div class="btn-inline">
                            <button onclick="copyPhrase()" class="phrase_modal btn btn-text-primary"
                                data-clipboard-text="davidrobinson01 red car earth camera cow biolumonesance bludgeon five dog rock tank"><span
                                    class="text-success" id="thePhrase">COPY</span></button>

                            <button type="button" class="btn btn-text-danger" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Dialog Form -->
        <!-- Dialog Form -->
        <div class="modal fade dialogbox" id="photo" data-bs-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Profile Photo</h5>
                    </div>
                    <form method="post" @submit.prevent="changeProfilePicture()" enctype="multipart/form-data">
                        <div class="modal-body text-start mb-2">
                            <div v-if="avatar_error" v-for="err in avatar_error"
                                class="alert alert-danger small p-2 m-1">{{err}}</div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <input ref="fileInput" type="file" class="form-control" name="photo" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="btn-inline">
                                <button type="button" ref="profileModalCloseButton" class="btn btn-text-secondary"
                                    data-bs-dismiss="modal">CANCEL</button>

                                <button type="submit" ref="profileModalUploadButton" class="btn btn-text-primary"
                                    value="UPLOAD" name="upload_photo">UPLOAD</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- * Dialog Form -->
        <!-- Dialog Form -->
        <div class="modal fade dialogbox" id="profile" data-bs-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Profile</h5>
                    </div>
                    <form method="POST" @submit.prevent = "updateProfile()">
                        <div class="modal-body text-start mb-2">
                            <div class="form-group basic">
                                <div class="input-wrapper disabled">
                                    <label class="label">Names</label>
                                    <input readonly type="text" class="form-control" v-model="profileForm.names" required>
                                 
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="password1">Phone number</label>
                                    <vue-tel-input v-model="profileForm.number" mode="international" v-on:country-changed="countryChanged" :class="{
                                        'form-control': false,
                                        'wthree_input': false,
                                        'error-input': errors.number != undefined,
                                    }">>
                                    </vue-tel-input>
                                    <p v-if="errors.number" v-for="error in errors.number" class="text-danger p-1 small">
                                        {{ error }}
                                    </p>
                                </div>
                            </div>


                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Email: </label>
                                    <input type="email" class="form-control" v-model="profileForm.email"
                                       >
                                        <p v-if="errors.email" v-for="error in errors.email" class="text-danger p-1 small">
                                            {{ error }}
                                        </p>
                                </div>
                            </div>
                            <div class="form-group basic disabled">
                                <div class="input-wrapper">
                                    <label class="label">Country: </label>
                                    <input readonly type="text" class="form-control" v-model="profileForm.country">
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">City: </label>
                                    <input type="text" class="form-control" v-model="profileForm.city"
                                       >
                                        <p v-if="errors.city" v-for="error in errors.city" class="text-danger p-1 small">
                                            {{ error }}
                                        </p>

                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Gender: </label>
                                    <select class="form-control" v-model="profileForm.gender" required>
                                        <option>-Select-</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <p v-if="errors.gender" v-for="error in errors.gender" class="text-danger p-1 small">
                                        {{ error }}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Address</label>
                                    <textarea class="form-control" rows="2" v-model="profileForm.address"></textarea>
                                    <p v-if="errors.address" v-for="error in errors.address" class="text-danger p-1 small">
                                        {{ error }}
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="btn-inline">
                                <button ref = "profileModalCloseButton" type="button" class="btn btn-text-secondary"
                                    data-bs-dismiss="modal">CANCEL</button>

                                <button ref="profileModalResetButton" type="submit" class="btn btn-text-primary">UPDATE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- * Dialog Form -->
        <!-- Dialog Form -->
        <div class="modal fade dialogbox" id="pass" data-bs-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Password</h5>
                    </div>
                    <form method="POST" @submit.prevent="changePassword()">
                        <div class="modal-body text-start mb-2">

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Old Password</label>
                                    <input type="password" class="form-control" v-model="passwordForm.old_password"
                                        required>
                                </div>
                                <p v-if="errors.old_password" v-for="error in errors.old_password"
                                    class="text-danger m-0 p-1 pt-0 small">
                                    {{ error }}
                                </p>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">New Password</label>
                                    <input type="password" class="form-control" v-model="passwordForm.password"
                                        required>
                                </div>
                                <p v-if="errors.password" v-for="error in errors.password"
                                    class="text-danger m-0 p-1 pt-0 small">
                                    {{ error }}
                                </p>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Confirm New Password</label>
                                    <input type="password" class="form-control"
                                        v-model="passwordForm.password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">

                                    <input type="checkbox" class="" v-model="passwordForm.logout">
                                    <label style="display:inline" class="pl-1 label" for="">Log me out on other
                                        devices</label>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="btn-inline">
                                <button ref="passwordModalCloseButton" type="button" class="btn btn-text-secondary"
                                    data-bs-dismiss="modal">CANCEL</button>

                                <button ref="passwordModalResetButton" type="submit"
                                    class="btn btn-text-primary">RESET</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- * Dialog Form -->
        <br><br>
        <!-- App Bottom Menu -->



        <br><br>

        <Footer  @popUploaded="displayMessage"></Footer>


    </div>


</template>
<script>
export default {
    data() {
        return {
            key: 0,
            passwordForm: new Form({
                old_password: undefined,
                password: undefined,
                password_confirmation: undefined,
                message: undefined,
                logout: false
            }),
            profileForm: new Form({
                names:undefined,
                email: undefined,
                number: undefined,
                country: undefined,
                city: undefined,
                address: undefined,
                postal_code: undefined,
                gender: undefined,
            }),
            error: undefined,
            errors: {},
            message: undefined,
            avatarKey: 0,
            avatar_error: undefined,
        }
    },
    watch: {
        error() {
            setTimeout(() => { this.error = '' }, 15000);
        },
        errors() {
            setTimeout(() => { this.errors = '' }, 15000);
        },
        errors() {
            setTimeout(() => { this.message = '' }, 15000);
        },
        message() {
            setTimeout(() => { this.message = {}}, 5000);
        }
        
    },
    mounted() {
        this.$root.dashboard_header_page_title = "Profile"
        window.scrollTo(0, 0);
        this.profileForm.fill(this.$auth.user())
    },
    created() {
        var css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/home/vue-input.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);
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
    beforeRouteEnter(to, from, next) {
        next(vm => {
            vm.$root.loader('show')

            setTimeout(() => { vm.$root.loader('hide') }, 3000);
        })
    },
    beforeDestroy() {
    },
    computed: {
        wallet() {
            if (this.withdrawalPaymentMethod) {
                return this.$root.getAccountDetails(this.withdrawalPaymentMethod.name, this.withdrawalPaymentMethod.type)
            }
        }

    },
    methods: {
        updatePaymentDetails(ref, type) {
            this.$root.loader('show')
            this.message = ''
            this.errors = ''
            var value = this.$refs[ref][0].value
            var payment_method = this.pyValidate(ref, value)
            var payment_method_acc_number = value && type == 'fiat' ? value : 0
            var payment_method_wallet = value && type == 'crypto' ? value : "Not Set"
            let form = new Form({
                acc_number: payment_method_acc_number,
                acc_name: this.$auth.user().names,
                currency_type: type,
                wallet: payment_method_wallet,
                user_id: this.$auth.user().id,
                payment_method,
            })
            let paymentDetails = this.$root.cryptoFilter(this.$auth.user().bank_details, payment_method)[0]

            if (paymentDetails) {
                //update
                form.patch("/auth/bankdetails/" + paymentDetails.id)
                    .then(response => {
                        this.$auth.fetch()
                        this.message = {}
                        this.message[ref] = "Updated Successfully"
                        this.$root.loader('hide')
                        this.$root.alert('success', ' ', 'Your payment details has been updated')
                    })
                    .catch(error => {
                        console.log(error)
                        this.$root.loader('hide')
                        if (error.response.status == 422) {
                            var address = type == 'fiat' ? 'acc_number' : 'wallet'
                            this.errors = {}
                            this.errors[ref] = error.response.data.error[address]
                        }
                        else {
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
                        this.message[ref] = "updated successfully"
                        this.$root.loader('hide')
                        this.$root.alert('success', ' ', 'Your payment details has been updated')
                    })
                    .catch(error => {
                        this.$root.loader('hide')
                        if (error.response.status == 422) {
                            this.errors = {}
                            this.errors[ref] = error.response.data.error
                        }
                        else {
                            this.error = error.response.data.message
                            this.$root.alert('error', ' ', this.error)
                        }
                    })
            }
            // console.log({form})    
        }, 
        updateProfile() {
            this.processing(true, 'profileModalResetButton', 'Requesting...', '')
            this.$root.loader('show')
            this.message = ''
            this.error = ''
            this.errors = {}
            this.profileForm.patch("/auth/users/" + this.$auth.user().id)
                .then(response => {
                    this.processing(false, 'profileModalResetButton', 'Requesting...', 'UPDATE')
                    this.$auth.fetch()
                    this.$root.loader('hide')
                    this.$root.alert('success', ' ', response.data.message)
                    this.$refs.profileModalCloseButton.click()
                    
                })
                .catch(error => {
                    this.$root.loader('hide')
                    this.processing(false, 'profileModalResetButton', 'Requesting...', 'UPDATE')
                    if (error.response.status == 422) {
                        this.errors = {}
                        this.errors = error.response.data.error
                    }
                    else {
                        this.error = error.response.data.message
                        this.$root.alert('error', ' ', this.error)
                    }
                    // this.$root.alert('error', ' ', 'Update was not successful, try again...')

                })

    
        },
        changePassword() {
            if (this.passwordForm.old_password == this.passwordForm.password) {
                return this.$root.alert('error', ' ', 'Old password and new password must be different')
            }
            this.processing(true, 'passwordModalResetButton', 'Requesting...', '')
            this.$root.loader('show')
            this.error = ''
            this.passwordForm._method = "PUT"
            this.passwordForm.post("/auth/user/password_change/" + this.$auth.user().id)
                .then(response => {
                    this.processing(false, 'passwordModalResetButton', 'Requesting...', 'RESET')
                    this.$refs.passwordModalCloseButton.click()
                    this.$root.loader('hide')
                    this.$auth.fetch()
                    this.passwordForm.reset()
                    this.$root.alert('success', ' ', response.data.message)
                })
                .catch(error => {
                    this.processing(false, 'passwordModalResetButton', 'Requesting...', 'RESET')
                    this.$root.loader('hide')
                    if (error.response.status == 422) {
                        this.errors = error.response.data.error
                    }
                    else {
                        this.error = error.response.data.message
                        this.$root.alert('error', ' ', this.error)
                    }
                    console.log(error, error.response)
                })
        },
        changeProfilePicture() {
            this.$root.loader('show')
            this.processing(true, 'profileModalUploadButton', 'Requesting...', '')
            this.avatar_error = ''
            let data = new FormData()
            let file = this.$refs.fileInput.files[0]
            let form = new Form()
            form.image = file
            if (file) {
                if (this.$refs.fileInput.files[0].size > 4000000) {
                    this.$root.loader('hide')
                    return this.$root.alert('error', ' ', ' File size is too large.')
                }
                form._method = "PUT"
                form.submit('post', "/auth/user/image/" + this.$auth.user().id, {
                    transformRequest: [function (data, headers) {
                        return objectToFormData(data)
                    }]
                })
                    .then(response => {
                        this.processing(false, 'profileModalUploadButton', 'Requesting...', 'UPLOAD')
                        this.$refs.profileModalCloseButton.click()
                        this.$root.loader('hide')
                        this.$auth.fetch()
                        this.$root.alert('success', ' ', response.data.message)
                    })
                    .catch(error => {
                        this.processing(false, 'profileModalUploadButton', 'Requesting...', 'UPLOAD')
                        this.$root.loader('hide')
                        if (error.response.status == 422) {
                            this.avatar_error = error.response.data.error.image
                        }
                        else {
                            this.avatar_error = error.response.data.message
                        }
                        console.log(error, error.response)
                    })
            }
            else {
                this.$root.loader('hide')
                this.processing(false, 'profileModalUploadButton', 'Requesting...', 'UPLOAD')
                this.$root.alert('info', ' ', 'No file choosen.')
            }
            this.avatarKey++

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
        countryChanged(country) {
            this.profileForm.country = country.name;
        },
        pyValidate(paymentMethod, address) {
            //serve validation here
            return paymentMethod
        } 

    }
}

</script>
<style scoped>
.modal-header {
    display: block;

}

.modal-content {
    box-shadow: 1px 1px 20px !important;
}

.form-control {
    /* display: block; */
    border:none;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 0.75rem;
    font-weight: 400;
    line-height: 1.5;
    color: var(--primary_color);
    background-color: #fff;
    background-clip: padding-box;
    border-bottom: 1px solid var(--secondary_color);
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus {
    color: var(--secondary_color);
    background-color: #fff;
    border-color: none;
    outline: 0;
    box-shadow: 0 0.2rem rgb(0 123 255 / 25%);
}
</style>
