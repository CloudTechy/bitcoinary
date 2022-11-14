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

        <!-- Withdraw -->
        <div class="modal fade action-sheet" id="withdraw" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">Withdraw Funds</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content pt-0">
                            <div class="card">
                                <div class="card-body">
                                    Enter your wallet address to process your withdrawal. Minimum Withdrawal:
                                    <strong>
                                        $1.00 </strong>
                                    <p class="mb-0">Available Balance:
                                        <strong class="text-primary ">
                                            {{$root.numeral($auth.user().balance)}} </strong>
                                    </p>
                                    <p>Pending Balance:
                                        <strong class="text-primary">
                                            {{$root.numeral($auth.user().totalPendingWithdrawal)}} </strong>
                                    </p>
                                    <form method="post" @submit.prevent="withdraw">
                                        <div ref="messageBox" v-if="error || withdrawalForm.message"
                                            style="position:fixed;top:0px;left:0px" class=" form-group p-2 ">
                                            <div v-if="error">
                                                <div class="alert alert-danger" v-if="typeof error == 'object'">
                                                    <p v-for="err in error">{{err}}</p>
                                                </div>
                                                <div v-else class="alert alert-danger">
                                                    <p>{{error}}</p>
                                                </div>
                                            </div>
                                            <div class="alert alert-success" v-if="withdrawalForm.message">
                                                <p>{{withdrawalForm.message}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group basic">
                                            <label class="label">Select Method</label>
                                            <div class="input-group mb-2">
                                                <select class="form-control p-1" v-model="withdrawalPaymentMethod"
                                                    required>

                                                    <option class="text-capitalize" :value="py"
                                                        v-for=" py in $root.payments">{{
                                                        py.name}}</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="form-group basic">
                                            <label class="label">Account/Wallet Address</label>
                                            <div class="input-wrapper mb-2">
                                                <input type="text" readonly v-model="wallet" class="form-control"
                                                    required>
                                                <small
                                                    v-if="withdrawalPaymentMethod && !$root.getAccountDetails(withdrawalPaymentMethod.name, withdrawalPaymentMethod.type) ">
                                                    You don't have any stored address/account for this payment
                                                    processor.
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#addcryptowallet">click here to set one.</a>
                                                </small>
                                            </div>

                                        </div>
                                        <div class="form-group basic">
                                            <label class="label">Amount</label>
                                            <div class="input-group mb-2">
                                                <input type="number" v-model="withdrawalForm.amount"
                                                    class="form-control" min="1" :max="$auth.user().balance" required>

                                            </div>
                                            <p class="fontsize-normal text-dark mb-0"
                                                v-if="withdrawalForm.amount > $auth.user().balance">
                                                Insufficient fund!
                                                <a data-v-5c5876d9="" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#deposit" class="text-primary">invest or make
                                                    deposit.</a>
                                            </p>
                                        </div>

                                        <div class="form-group basic text-center">
                                            <button ref="submitWithdrawalForm" type="submit"
                                                class="btn btn-info">Withdraw
                                            </button>
                                        </div>
                                        <button type="button" ref="closeWithdrawalForm" style="visibility: hidden;"
                                            class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Withdraw  -->
        <!-- add wallet or account address -->

        <div v-if="withdrawalPaymentMethod" :key="walletForm.key" style=" box-shadow: 1px 1px 20px;"
            class="modal dialogbox fade" id="addcryptowallet" role="dialog" data-bs-keyboard="true"
            data-bs-backdrop="static" tabindex="-1" aria-labelledby="vLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        Add <span class="font-weight-bold">{{ withdrawalPaymentMethod.name}}</span>
                        {{withdrawalPaymentMethod.type ==
                        'crypto' ? 'Wallet':'Account'}}.
                    </div>
                    <form
                        @submit.prevent="updatePaymentDetails(withdrawalPaymentMethod.name, withdrawalPaymentMethod.type)">
                        <div v-if="withdrawalPaymentMethod.type == 'crypto'" class="modal-body m-1">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="">Payment Processor</label>
                                    <input readonly type="text" v-model="walletForm.payment_method" :class="{
                                        'form-control': true,
                                        'fontsize-sub':true,
                                        'error-input':
                                            errors.payment_method !=
                                            undefined,
                                    }" required>
                                    <p v-if="errors.payment_method" v-for="error in errors.payment_method"
                                        class="text-danger m-0 p-1 pt-0 small">
                                        {{ error }}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="">Wallet</label>
                                    <input type="text" placeholder="Enter wallet address" v-model="walletForm.wallet"
                                        :class="{
                                            'form-control': true,
                                            'fontsize-sub':true,
                                            'fontsize-sub':true,
                                            'error-input':
                                                errors.wallet !=
                                                undefined,
                                        }" required>
                                    <p v-if="errors.wallet" v-for="error in errors.wallet"
                                        class="text-danger m-0 p-1 pt-0 small">
                                        {{ error }}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class=" row ">
                                    <div class="col input-wrapper">
                                        <label class="label" for="memo">Memo</label>
                                        <input type="text" :class="{
                                            'form-control': true,
                                            'fontsize-sub':true,
                                            'error-input': errors.memo != undefined,
                                        }" placeholder="Enter MEMO" v-model="walletForm.memo" name="memo">
                                        <p v-if="errors.memo" v-for="error in errors.memo"
                                            class="text-danger m-0 p-1 pt-0 small">
                                            {{ error }}
                                        </p>
                                    </div>
                                    <div class="col input-wrapper">
                                        <label class="label" for="standard">Standard</label>
                                        <input type="text" v-model="walletForm.standard" :class="{
                                            'form-control': true,
                                            'fontsize-sub':true,
                                            'error-input':
                                                errors.standard !=
                                                undefined,
                                        }" placeholder="Enter standard" name="standard">
                                        <p v-if="errors.standard" v-for="error in errors.standard"
                                            class="text-danger m-0 p-1 pt-0 small">
                                            {{ error }}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div v-else class="modal-body m-1">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="">Payment Processor</label>
                                    <input readonly type="text" v-model="walletForm.payment_method" :class="{
                                        'form-control': true,
                                        'fontsize-sub':true,
                                        'error-input':
                                            errors.payment_method !=
                                            undefined,
                                    }" required>
                                    <p v-if="errors.payment_method" v-for="error in errors.payment_method"
                                        class="text-danger m-0 p-1 pt-0 small">
                                        {{ error }}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="">Account/Number/Address</label>
                                    <input type="text" placeholder="Enter address" v-model="walletForm.acc_number"
                                        :class="{
                                            'form-control': true,
                                            'fontsize-sub':true,
                                            'fontsize-sub':true,
                                            'error-input':
                                                errors.acc_number !=
                                                undefined,
                                        }" required>
                                    <p v-if="errors.acc_number" v-for="error in errors.acc_number"
                                        class="text-danger m-0 p-1 pt-0 small">
                                        {{ error }}
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <div class="btn-inline">
                                <button ref="submitWalletForm" type="submit" class="btn btn-text-primary">Save
                                    Changes</button>
                                <button ref="closeWalletForm" type="button" @click="$auth.fetch()"
                                    class="btn btn-text-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Deposit -->


        <div class="modal fade action-sheet" id="deposit" tabindex="-1" role="dialog" data-bs-backdrop="true"
            data-bs-keyboard="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">Deposit Funds</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content pt-0">
                            <div class="card">
                                <div class="card-body">
                                    <p>Enter amount and select deposit method. Make payment to the wallet that will be
                                        generated. Your account will be funded automatically upon verification of
                                        payment.
                                        Minimum Deposit is:
                                        <strong class="text-primary">
                                            $50.00 </strong>
                                    </p>
                                    <form method="post" @submit.prevent="process">
                                        <div class="form-group basic">
                                            <label class="label">Select Method</label>
                                            <div class="input-group mb-2">
                                                <select class="form-control p-1" v-model="depositPaymentMethod"
                                                    required>

                                                    <option
                                                        v-if="$root.getPaymentAccountDetails(paymentMethods, processor.payment_method, processor.currency_type)"
                                                        class="text-capitalize" :value="processor"
                                                        v-for="processor in paymentMethods">{{
                                                        processor.payment_method}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group basic">
                                            <label class="label">Amount</label>
                                            <div class="input-group mb-2">
                                                <input type="number" v-model="depositAmount" class="form-control"
                                                    min="50" max="999999999999999999999" required>
                                            </div>
                                        </div>
                                        <div class="form-group basic text-center">

                                            <input type="submit" name="user_deposit" value="Proceed"
                                                class="btn btn-primary">
                                            <!-- <button type="button" ref="paymentModalbtn" style="visibility: hidden;" id="add" data-toggle="modal"
                                                        data-target="#paymentDetails"></button> -->
                                        </div>
                                        <button type="button" ref="closeDeposit" style="visibility: hidden;"
                                            class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- * Deposit  -->
        <!-- * Transfer -->
        <div class="modal fade action-sheet" id="transfer" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">Peer To Peer (P2P) Transfer</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content pt-0">
                            <div class="card">
                                <div class="card-body">
                                    <p>Send funds to another West Exchange investor. All you need is their email
                                        address.
                                        <br>
                                        Your Available Balance is
                                        <span class="fw-bold text-primary">
                                            $0.00 </span>
                                    </p>
                                    <form method="post">
                                        <div class="form-group basic">
                                            <label class="label">Recepient's Email</label>
                                            <div class="input-group mb-2">
                                                <input type="email" name="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group basic">
                                            <label class="label">Amount</label>
                                            <div class="input-group mb-2">
                                                <input type="number" name="amount" class="form-control" min="1"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group basic text-center">
                                            <button type="submit" class="btn btn-primary">Withdraw </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Transfer -->


        <button type="button" ref="paymentModalbtn" style="visibility: show;" id="add" data-toggle="modal"
            data-target="#paymentDetails"></button>
        <div v-if="depositForm.payment_method" :key="depositForm.key" class="modal fade dialogbox" tabindex="-1"
            role="dialog" ref="paymentDetails" id="paymentDetails" data-bs-backdrop="true">
            <paymentDetails @popUploaded="displayMessage" :key="key" plan="" :deposit_type="deposit_type"
                :paymentMethod="depositForm.payment_method" :amount="depositForm.amount"></paymentDetails>
        </div>

    </div>


</template>
<script>
export default {
    data() {
        return {
            key: 0,
            transactions: [],
            withdrawalForm: new Form({
                amount: undefined,
                payment_method: undefined,
                user_id: this.$auth.user().id,
                type: "balance",
                reference: 'SELF',
                message: undefined,

            }),
            depositForm: new Form({
                amount: undefined,
                payment_method: undefined,
                user_id: this.$auth.user().id,
                type: "balance",
                reference: "",
                key: 0,
            }),
            walletForm: new Form({
                payment_method: undefined,
                wallet: undefined,
                user_id: this.$auth.user().id,
                memo: undefined,
                standard: undefined,
                acc_number: undefined,
                acc_name: this.$auth.user().names,
                key: 0,
                // currency_type: type,
            }),

            supportForm: new Form({
                department: undefined,
                subject: undefined,
                message: undefined,
                user_id: this.$auth.user().id,
            }),

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


            paymentMethods: undefined,
            paymentMethod: undefined,
            depositPaymentMethod: undefined,
            planForm: undefined,
            investmentPaymentMethod: undefined,
            withdrawalPaymentMethod: undefined,
            error: undefined,
            errors: {},
            message: undefined,
            depositAmount: undefined,
            deposit_type: 'balance',
            avatarKey: 0,
            avatar_error: undefined



        }
    },
    watch: {
        error() {
            setTimeout(() => { this.error = '' }, 15000);
        },
        errors() {
            setTimeout(() => { this.errors = '' }, 15000);
        },
        depositAmount() {
            this.withdrawalForm.payment_method = undefined
            this.depositForm.key++
            this.depositForm.payment_method = this.depositPaymentMethod
            this.depositForm.amount = this.depositAmount

        },
        withdrawalPaymentMethod() {
            this.depositForm.payment_method = undefined
            this.key++
            this.walletForm.payment_method = this.withdrawalPaymentMethod.name
            this.withdrawalForm.payment_method = this.withdrawalPaymentMethod.name
            // this.withdrawalForm.wallet = this.$root.getAccountDetails(this.withdrawalPaymentMethod.name, this.withdrawalPaymentMethod.type)

        },
        depositPaymentMethod() {
            this.withdrawalForm.payment_method = undefined
            this.depositForm.key++
            this.depositForm.payment_method = this.depositPaymentMethod
            this.depositForm.amount = this.depositAmount
        },
        investmentPaymentMethod() {
            this.withdrawalForm.payment_method = undefined
            this.depositForm.key++
        },
        PaymentMethod() {
            this.key++
            this.depositForm.key++

        },

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
        this.getPaymentMethods()
    },
    beforeRouteEnter(to, from, next) {
        next(vm => {
            vm.$root.loader('show')
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

        subscribePlan(event, plan) {
            this.deposit_type = 'investment'
            this.planForm = event.target
            this.depositForm.amount = event.target[0].value
            this.$refs.paymentModalbtn.click()
        },
        setInvestmentPaymentMethod(event) {
            this.depositForm.key++
            var select = event.target;
            var method = select.options[select.selectedIndex].value;
            this.depositForm.payment_method = this.$root.cryptoFilter(this.paymentMethods, method)[0]

        },

        process() {
            this.deposit_type = 'balance'
            this.$refs.closeDeposit.click()
            this.$refs.paymentModalbtn.click()
            //  var myModal = new bootstrap.Modal(document.getElementById('paymentDetails'))
            // myModal.show()
        },
        displayMessage(msg) {
            this.message = msg
            this.$root.scrollUp()
            this.$root.alert('success', ' ', msg.message)
            // this.planForm.reset()
            // this.planForm = undefined
        },
        getPaymentMethods() {
            this.$root.loader('show')
            this.$error = ''
            var form = new Form()
            form.get("/auth/bankdetails/?user_id=1")
                .then(response => {
                    this.paymentMethods = response.data.data.item
                    this.$root.loader('hide')
                })
                .catch(error => {
                    this.error = error.response.data.message
                    this.$root.loader('hide')
                    console.log(error.response)
                })
        },
        updatePaymentDetails(ref, type) {
            this.processing(true, 'submitWalletForm', 'Requesting...', '')
            this.message = ''
            this.errors = ''
            this.walletForm.currency_type = type
            //add
            this.walletForm.post("/auth/bankdetails")
                .then(response => {
                    this.processing(false, 'submitWalletForm', '', 'Save Changes')
                    this.$auth.fetch()
                    this.$root.alert('success', ' ', 'wallet added successfully')
                    this.walletForm.key++
                    this.$refs.closeWalletForm.click()
                    this.walletForm.reset()
                    this.$root.loader('hide')

                })
                .catch(error => {
                    this.processing(false, 'submitWalletForm', '', 'Save Changes')
                    this.$root.loader('hide')
                    if (error.response.status == 422) {
                        this.errors = {}
                        this.errors = error.response.data.error
                    }
                    else {
                        this.error = error.response.data.message
                        this.$root.alert('error', ' ', this.error)
                    }
                    // this.$refs.closeWalletForm.click()
                })

            // console.log({form})    
        },
        withdraw() {
            this.$root.loader('show')
            this.processing(true, 'submitWithdrawalForm', 'Requesting...', '')
            this.withdrawalForm.message = ""
            this.error = ''
            if (this.withdrawalForm.amount > this.$auth.user().balance) {
                this.withdrawalForm.amount = this.$auth.user().balance
            }
            this.withdrawalForm.post("/auth/withdrawals")
                .then(response => {
                    this.$root.loader('hide')
                    this.processing(false, 'submitWithdrawalForm', 'Requesting...', 'Withdraw')
                    this.withdrawalForm.message = response.data.message
                    this.$root.scrollToTop(0, 250)
                    this.amount = ''
                    this.$auth.fetch()
                })
                .catch(error => {
                    this.$root.loader('hide')
                    this.processing(false, 'submitWithdrawalForm', 'Requesting...', 'Withdraw')
                    this.$root.scrollToTop(0, 250)
                    if (error.response.status == 422) {
                        this.errors = {}
                        this.errors = error.response.data.error
                    }
                    else {
                        this.error = error.response.data.message
                        this.$root.alert('error', ' ', this.error)
                    }
                    console.log(error, error.response)
                })


            setTimeout(() => { this.withdrawalForm.message = ''; this.error = ''; this.errors = ''; this.$refs.closeWithdrawalForm.click() }, 5000);

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
</style>
