<template>
    <div class="page-wrapper default-version">
        <AdminDashboardSidebar></AdminDashboardSidebar>
        <AdminDashboardHeader></AdminDashboardHeader>

        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div
                    class="row align-items-center mb-30 justify-content-between"
                >
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">User Detail</h6>
                    </div>
                    <div
                        class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3"
                    ></div>
                </div>

                <div class="row mb-none-30">
                    <div class="col-xl-3 col-lg-5 col-md-5 mb-30">
                        <div
                            class="card b-radius--10 overflow-hidden box--shadow1"
                        >
                            <div class="card-body p-0">
                                <div v-if = "user" class="p-3 bg--white">
                                    <div v-if="user.image" class="">
                                        <img
                                            :src="
                                                $root.basepath +
                                                '/images/users/' +
                                                user.image
                                            "
                                            alt="profile-image"
                                            class="b-radius--10 w-100"
                                        />
                                    </div>
                                    <div v-else>
                                        <img
                                            src="/placeholder-image/undefined"
                                            alt="profile-image"
                                            class="b-radius--10 w-100"
                                        />
                                    </div>
                                    <div class="mt-15">
                                        <h4 class="">{{ user.names }}</h4>
                                        <span class="text--small"
                                            >Joined @
                                            <strong>
                                                {{ user.created_at }}</strong
                                            ></span
                                        >
                                    </div>
                                </div>
                                 <content-loader v-else></content-loader>
                            </div>
                        </div>

                        <div
                            class="card b-radius--10 overflow-hidden mt-30 box--shadow1"
                        >
                            <div v-if = "user" class="card-body">
                                <h5 class="mb-20 text-muted">
                                    User information
                                </h5>
                                <ul class="list-group">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Username
                                        <span class="font-weight-bold">{{
                                            user.username
                                        }}</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Role
                                        <span class="font-weight-bold text-uppercase">{{
                                            user.user_level
                                        }}</span>
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Withdrawal Status
                                        <span
                                            v-if="user.CanWithdraw"
                                            class="badge badge-pill bg--success"
                                            >Active</span
                                        >
                                        <span
                                            v-else
                                            class="badge badge-pill bg--danger"
                                            >On Hold</span
                                        >
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Deposit Wallet
                                        <span class="font-weight-bold"
                                            >${{
                                                $root.normalNumeral(
                                                    user.balance
                                                )
                                            }}</span
                                        >
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Interest Wallet
                                        <span class="font-weight-bold">$0</span>
                                    </li>
                                </ul>
                            </div>
                             <content-loader v-else></content-loader>
                        </div>
                        <div
                            class="card b-radius--10 overflow-hidden mt-30 box--shadow1"
                        >
                            <div v-if = "user" class="card-body">
                                <h5 class="mb-20 text-muted">User action</h5>
                                <a
                                    data-toggle="modal"
                                    href="#addSubModal"
                                    class="btn btn--success btn--shadow btn-block btn-lg"
                                >
                                    Add Deposit
                                </a>
                                <a onclick = "return false"
                                    :href="$root.basepath + '/admin/login/history/' + user.id"
                                    class="btn btn--primary btn--shadow btn-block disabled btn-lg"
                                >
                                    Login Logs
                                </a>
                                <a
                                    :href="$root.basepath + '/admin/send-email/' + user.id"
                                    class="btn btn--danger btn--shadow btn-block btn-lg"
                                >
                                    Send Email
                                </a>
                                <a
                                onclick = "return false"
                                    :href="$root.basepath + '/admin/email-log/' + user.id"
                                    class="btn btn--dark btn--shadow btn-block disabled btn-lg"
                                >
                                    Email Log
                                </a>
                            </div>
                            <content-loader v-else></content-loader>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-7 col-md-7 mb-30">
                        <div v-if = "user" class="row mb-none-30">
                            <div class="col-xl-4 col-lg-6 col-sm-6 mb-30">
                                <div
                                    class="dashboard-w1 bg--1 b-radius--10 box-shadow has--link"
                                >
                                    <a
                                        href=""
                                        onclick = "return false"
                                        class="item--link "
                                    ></a>
                                    <div class="icon">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">{{
                                                $root.normalNumeral(
                                                    user.totalActiveTransaction
                                                )
                                            }}</span>
                                            <span class="currency-sign">
                                                $</span
                                            >
                                        </div>
                                        <div class="desciption">
                                            <span>Total Deposit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- dashboard-w1 end -->

                            <div class="col-xl-4 col-lg-6 col-sm-6 mb-30">
                                <div
                                    class="dashboard-w1 bg--15 b-radius--10 box-shadow has--link"
                                >
                                    <a onclick = "return false"
                                        href="demo/admin/user/withdrawals/243"
                                        class="item--link"
                                    ></a>
                                    <div class="icon">
                                        <i class="fa fa-wallet"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">{{
                                                $root.normalNumeral(
                                                    user.totalWithdrawBySelf
                                                )
                                            }}</span>
                                            <span class="currency-sign">$</span>
                                        </div>
                                        <div class="desciption">
                                            <span>Total Withdraw</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- dashboard-w1 end -->

                            <div class="col-xl-4 col-lg-6 col-sm-6 mb-30">
                                <div
                                    class="dashboard-w1 bg--20 b-radius--10 box-shadow has--link"
                                >
                                    <a
                                        href="/admin/user/transactions/243"
                                        class="item--link"
                                        onclick = "return false"
                                    ></a>
                                    <div class="icon">
                                        <i class="fa fa-exchange-alt"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">{{
                                                $root.normalNumeral(
                                                    user.totalEarned
                                                )
                                            }}</span>
                                            <span class="currency-sign">
                                                $</span
                                            >
                                        </div>
                                        <div class="desciption">
                                            <span>Total Earned</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- dashboard-w1 end -->

                            <div class="col-xl-4 col-lg-6 col-sm-6 mb-30">
                                <div
                                    class="dashboard-w1 bg--11 b-radius--10 box-shadow has--link"
                                >
                                    <a
                                        href="/admin/user/invests/243"
                                        class="item--link"
                                        onclick = "return false"
                                    ></a>
                                    <div class="icon">
                                        <i class="fa fa-money-bill"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">{{
                                                $root.normalNumeral(
                                                    user.totalPendingWithdrawal
                                                )
                                            }}</span>
                                            <span class="currency-sign">
                                                $</span
                                            >
                                        </div>
                                        <div class="desciption">
                                            <span
                                                >Total Pending Withdarals</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- dashboard-w1 end -->

                            <div class="col-xl-4 col-lg-6 col-sm-6 mb-30">
                                <div
                                    class="dashboard-w1 bg--18 b-radius--10 box-shadow has--link"
                                >
                                    <a
                                        href="/admin/user/referrals/243"
                                        class="item--link"
                                        onclick = "return false"
                                    ></a>
                                    <div class="icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">{{
                                                user.referrals
                                            }}</span>
                                        </div>
                                        <div class="desciption">
                                            <span>Total Referral</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- dashboard-w1 end -->

                            <div class="col-xl-4 col-lg-6 col-sm-6 mb-30">
                                <div
                                    class="dashboard-w1 bg--12 b-radius--10 box-shadow has--link"
                                >
                                    <a
                                        href="/admin/user/commissions/deposit/243"
                                        class="item--link"
                                        onclick = "return false"
                                    ></a>
                                    <div class="icon">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">{{
                                                $root.normalNumeral(
                                                    user.totalCommission
                                                )
                                            }}</span>
                                            <span class="currency-sign">$</span>
                                        </div>
                                        <div class="desciption">
                                            <span>Referral Commission</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- dashboard-w1 end -->
                        </div>
                            <content-loader v-else></content-loader>
                        <div class="card mt-50">
                            <div v-if = "user" class="card-body">
                                <h5 class="card-title mb-50 border-bottom pb-2">
                                    {{ user.names }} Information
                                </h5>

                                <form
                                    action=""
                                    method="POST"
                                    @submit.prevent="editProfile()"
                                >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >First Name
                                                    <span class="text-danger"
                                                        >*</span
                                                    ></label
                                                >
                                                <input
                                                    :class="{
                                                        'form-control': true,
                                                        'text-capitalize': true,
                                                        'error-input':
                                                            errors.first_name !=
                                                            undefined,
                                                    }"
                                                    type="text"
                                                    v-model="form.first_name"
                                                />
                                                <p
                                                    v-if="errors.first_name"
                                                    v-for="error in errors.first_name"
                                                    class="m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >Last Name
                                                    <span class="text-danger"
                                                        >*</span
                                                    ></label
                                                >
                                                <input
                                                    :class="{
    'form-control': true,
                                                        'text-capitalize': true,
                                                        'error-input':
                                                            errors.last_name !=
                                                            undefined,
                                                    }"
                                                    type="text"
                                                    v-model="form.last_name"
                                                />
                                                <p
                                                    v-if="errors.last_name"
                                                    v-for="error in errors.last_name"
                                                    class="m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >Mobile Number
                                                    <span class="text-danger"
                                                        >*</span
                                                    ></label
                                                >
                                                <vue-tel-input
                                                    v-model="form.number"
                                                    mode="international"
                                                    v-on:country-changed="
                                                        countryChanged
                                                    "
                                                    :class="{
                                                        'form-control': true,
                                                        'error-input':
                                                            errors.number !=
                                                            undefined,
                                                    }"
                                                    >>
                                                </vue-tel-input>
                                                <p
                                                    v-if="errors.number"
                                                    v-for="error in errors.number"
                                                    class="base--color m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >Email
                                                    <span class="text-danger"
                                                        >*</span
                                                    ></label
                                                >
                                                <input
                                                    :class="{
                                                        'form-control': true,
                                                        'error-input':
                                                            errors.email !=
                                                            undefined,
                                                    }"
                                                    type="email"
                                                    v-model="form.email"
                                                />
                                                <p
                                                    v-if="errors.email"
                                                    v-for="error in errors.email"
                                                    class="m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >Role
                                                    <span class="text-danger"
                                                        >*</span
                                                    ></label
                                                >
                                                <select
                                                v-model="form.user_level_id"
                                                :class="{
                                                        'form-control': true,
                                                        'error-input':
                                                            errors.user_level_id !=
                                                            undefined,
                                                    }"
                                                required
                                            >
                                                <option value="1">
                                                    User
                                                </option>
                                                <option value="2">
                                                    Administrator
                                                </option>
                                            </select> <p
                                                    v-if="errors.user_level_id"
                                                    v-for="error in errors.user_level_id"
                                                    class="m-0 p-2 small"
                                                >
                                                    {{ error }}
                                                </p>

                                              
                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >Address
                                                </label>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    name="address"
                                                    value=""
                                                    disabled
                                                />
                                                <small
                                                    class="form-text text-muted"
                                                    ><i
                                                        class="fas fa-info-circle"
                                                    ></i>
                                                    House number, street address
                                                </small>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >City
                                                </label>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    name="city"
                                                    value=""
                                                    disabled
                                                />
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >State
                                                </label>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    name="state"
                                                    value=""
                                                    disabled
                                                />
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >Zip/Postal
                                                </label>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    name="state"
                                                    value=""
                                                    disabled
                                                />
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >Country
                                                </label>
                                                <input
                                                    type="text"
                                                    v-model="form.country"
                                                    class="form-control"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div
                                            class="form-group col-xl-4 col-md-6 col-sm-3 col-12"
                                        >
                                            <label
                                                class="form-control-label font-weight-bold"
                                                >Status
                                            </label>
                                            <input
                                                type="checkbox"
                                                data-width="100%"
                                                data-onstyle="-success"
                                                data-offstyle="-danger"
                                                data-toggle="toggle"
                                                data-on="Active"
                                                data-off="Banned"
                                                name="status"
                                                checked
                                                disabled
                                            />
                                        </div>

                                        <div
                                            class="form-group col-xl-4 col-md-6 col-sm-3 col-12"
                                        >
                                            <label
                                                class="form-control-label font-weight-bold"
                                                >Email Verification
                                            </label>
                                            <input
                                                type="checkbox"
                                                data-width="100%"
                                                data-onstyle="-success"
                                                data-offstyle="-danger"
                                                data-toggle="toggle"
                                                data-on="Verified"
                                                data-off="Unverified"
                                                name="ev"
                                                checked
                                                disabled
                                            />
                                        </div>

                                        <div
                                            class="form-group col-xl-4 col-md-6 col-sm-3 col-12"
                                        >
                                            <label
                                                class="form-control-label font-weight-bold"
                                                >SMS Verification
                                            </label>
                                            <input
                                                type="checkbox"
                                                data-width="100%"
                                                data-onstyle="-success"
                                                data-offstyle="-danger"
                                                data-toggle="toggle"
                                                data-on="Verified"
                                                data-off="Unverified"
                                                name="sv"
                                                checked
                                                disabled
                                            />
                                        </div>
                                        <div
                                            class="form-group col-md-6 col-sm-3 col-12"
                                        >
                                            <label
                                                class="form-control-label font-weight-bold"
                                                >2FA Status
                                            </label>
                                            <input
                                                type="checkbox"
                                                data-width="100%"
                                                data-onstyle="-success"
                                                data-offstyle="-danger"
                                                data-toggle="toggle"
                                                data-on="Verified"
                                                data-off="Unverified"
                                                name="ts"
                                                checked
                                                disabled
                                            />
                                        </div>

                                        <div
                                            class="form-group col-md-6 col-sm-3 col-12"
                                        >
                                            <label
                                                class="form-control-label font-weight-bold"
                                                >2FA Verification
                                            </label>
                                            <input
                                                type="checkbox"
                                                data-width="100%"
                                                data-onstyle="-success"
                                                data-offstyle="-danger"
                                                data-toggle="toggle"
                                                data-on="Verified"
                                                data-off="Unverified"
                                                name="tv"
                                                checked
                                                disabled
                                            />
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <VueLoadingButton
                                                    class="btn btn--primary btn-block btn-lg"
													type = "submit"
                                                    :loading="form.busy"
                                                    aria-label="Save Changes"
                                                 >
												Save Changes</VueLoadingButton>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <list-loader v-else></list-loader>
                            
                        </div>
                    </div>
                </div>

                <div
                    id="addSubModal"
                    class="modal fade"
                    tabindex="-1"
                    role="dialog"
                >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Post Deposit Payment
                                </h5>
                                <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"
                                >
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form
                                action=""
                                method="POST"
								@submit.prevent = "makeDeposit()"
                            >
                                <div class="modal-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input
                                                type="checkbox"
                                                data-width="100%"
                                                data-height="44px"
                                                data-onstyle="-success"
                                                data-offstyle="-danger"
                                                data-toggle="toggle"
                                                data-on="Add Balance"
                                                data-off="Subtract Balance"
                                                name="act"
                                                checked
                                            />
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label class="font-weight-bold"
                                                >As<span
                                                    class="text-danger"
                                                    >*</span
                                                ></label
                                            >
                                            <select
                                                v-model="deposit_form.type"
                                                class="form-control"
                                                required
                                            >
                                                <option value="investment">
                                                    Investment
                                                </option>
                                                <option value="balance">
                                                    Balance
                                                </option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label
                                                >Amount<span class="text-danger"
                                                    >*</span
                                                ></label
                                            >
                                            <div class="input-group has_append">
                                                <input
                                                    type="number"
                                                    v-model="deposit_form.amount"
													min="0"
													required
                                                    class="form-control"
                                                    placeholder="Please provide positive amount"
                                                />
                                                <div class="input-group-append">
                                                    <div
                                                        class="input-group-text"
                                                    >
                                                        $
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group col-md-12">
                                            <label class="font-weight-bold"
                                                >Payment Gateway<span
                                                    class="text-danger"
                                                    >*</span
                                                ></label
                                            >
                                            <select
                                                v-model="deposit_form.payment_method"
                                                class="form-control"
                                                required
                                            >
                                                <option class = "text-capitalize" v-for = "py in $root.payments" :value="py.name">
                                                    {{py.name}}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label
                                                >Reference
                                                </label
                                            >
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    v-model="deposit_form.transaction_ref"
                                                    class="form-control"
                                                    placeholder="Provide transaction reference"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button
                                        ref = "deposit_modal_button"
                                        type="button"
                                        class="btn btn--dark"
                                        data-dismiss="modal"
                                    >
                                        Close
                                    </button>
									<VueLoadingButton
                                                    class="btn btn--success"
													type = "submit"
                                                    :loading="deposit_form.busy"
                                                    aria-label="Submit"
													 :styled="false"
                                                >
												Submit</VueLoadingButton>
    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bodywrapper__inner end -->
        </div>
    </div>
</template>
<script>
import { ContentLoader, ListLoader } from "vue-content-loader";
import VueLoadingButton from "vue-loading-button";
export default {
    data() {
        return {
            form: new Form({
                first_name: "",
                last_name: "",
                email: "",
                country: "",
                number: "",
                user_level_id : "",
                // username : '',
                // password : '',
                // password_confirmation : '',
			}),
			deposit_form: new Form({
				type: "",
				amount: "",
				user_id: "",
                reference: "SELF",
                transaction_ref: "",
                type:'deposit',
                payment_method : "",
			}),
            user:"",
            loading: false,
            key: 0,
            errors: "",
            message: "",
            error: "",
            image: "",
            avatarKey: 0,
        };
    },
    created() {
        this.fetchUser(this.$route.params.id);
    },
    watch: {
        user() {
			this.form.fill(this.user);
			this.deposit_form.user_id = this.user.id
			this.deposit_form.reference = "SELF"
        },
    },
    mounted() {
        var script = document.createElement("script");
        script.src = this.$root.basepath + "/assets/admin/js/app.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src = this.$root.basepath + "/assets/admin/js/admin.js";
        document.body.appendChild(script);
    },
    beforeCreate() {
       

        var style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/admin/css/vendor/bootstrap.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath +
            "/assets/admin/css/vendor/bootstrap-toggle.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/admin/css/all.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = this.$root.basepath + "/css/line-awesome.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/admin/css/vendor/nice-select.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/admin/css/vendor/prism.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/admin/css/vendor/select2.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/admin/css/vendor/datatables.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href =
            this.$root.basepath +
            "/assets/admin/css/vendor/jquery-jvectormap-2.0.5.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath + "/assets/admin/css/vendor/datepicker.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath +
            "/assets/admin/css/vendor/jquery-timepicky.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href =
            this.$root.basepath +
            "/assets/admin/css/vendor/bootstrap-clockpicker.min.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href =
            this.$root.basepath +
            "/assets/admin/css/vendor/bootstrap-pincode-input.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/css/vue-input.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/admin/css/app.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);
        style = document.createElement("link");
        style.href = this.$root.basepath + "/assets/admin/css/userView.css";
        style.rel = "stylesheet";
        style.type = "text/css";
        document.head.appendChild(style);

        var script = document.createElement("script");
        script.src =
            this.$root.basepath + "/assets/admin/js/vendor/jquery-3.5.1.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath +
            "/assets/admin/js/vendor/bootstrap.bundle.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath +
            "/assets/admin/js/vendor/bootstrap-toggle.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath +
            "/assets/admin/js/vendor/jquery.slimscroll.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath +
            "/assets/admin/js/vendor/jquery.nice-select.min.js";
        document.body.appendChild(script);
        style = document.createElement("link");
        script = document.createElement("script");
        script.src = this.$root.basepath + "/assets/admin/js/nicEdit.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src = this.$root.basepath + "/assets/admin/js/vendor/prism.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath + "/assets/admin/js/vendor/select2.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath + "/assets/admin/js/vendor/datatables.min.js";
        document.body.appendChild(script);
        script = document.createElement("script");
        script.src =
            this.$root.basepath + "/assets/admin/js/vendor/apexcharts.min.js";
        document.body.appendChild(script);
    },

    components: {
        ContentLoader,
        ListLoader,
        VueLoadingButton,
    },
    methods: {
        fetchUser(id) {
            this.loading = true;
            var form = new Form();
            form.get("/auth/users/" + id)
                .then((response) => {
                    this.loading = false;
                    this.user = response.data.data;
                    this.key++;
                })
                .catch((error) => {
                    this.loading = false;
                    this.$root.alert(
                        "error",
                        "",
                        "An error occured when fetching data"
                    );
                    console.log(error);
                });
        },
        editProfile() {
            this.loading = true
            this.message = "";
            this.error = "";
            this.errors = {};
            this.form
                .patch("/auth/users/" + this.user.id)
				.then((response) => {
					this.user = response.data.data
                    this.$root.alert("success", " ", " Updated");
                })
                .catch((error) => {
                    if (error.response.status == 422) {
                        this.errors = {};
                        this.errors = error.response.data.error;
                    } else {
                        this.error = error.response.data.message;
                        this.$root.alert("error", " ", this.error);
                    }
                });
        },
        countryChanged(country) {
            this.form.country = country.name;
		},
		makeDeposit() {
            this.message = "";
            this.error = "";
            this.errors = {};
            this.deposit_form
                .post("/auth/deposit")
				.then((response) => {
					this.user = response.data.data
                    this.$root.alert("success", " ", response.data.message);
                    this.deposit_form.reset()
                    this.$refs.deposit_modal_button.click()
                    this.$root.scrollUp()
                })
                .catch((error) => {
					console.log(error.response.data)

                    if (error.response.status == 422) {
						this.errors = {};
					this.$root.alert("error", " ", error.response.data.message);
                        this.errors = error.response.data.error;
                    } else {
                        this.error = error.response.data.message;
                        this.$root.alert("error", " ", this.error);
                    }
                });
		}
    },
};
</script>
<style scoped>
</style>
