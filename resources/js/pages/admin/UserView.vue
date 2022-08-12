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
                                <div class="p-3 bg--white">
                                    <div class="">
                                        <img
                                            src="https://script.viserlab.com/hyiplab/demo/placeholder-image/undefined"
                                            alt="profile-image"
                                            class="b-radius--10 w-100"
                                        />
                                    </div>
                                    <div class="mt-15">
                                        <h4 class="">James G</h4>
                                        <span class="text--small"
                                            >Joined At<strong
                                                >14 Dec, 2020 09:21 PM</strong
                                            ></span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="card b-radius--10 overflow-hidden mt-30 box--shadow1"
                        >
                            <div class="card-body">
                                <h5 class="mb-20 text-muted">
                                    User information
                                </h5>
                                <ul class="list-group">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Username
                                        <span class="font-weight-bold"
                                            >jamesg</span
                                        >
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Status
                                        <span
                                            class="badge badge-pill bg--success"
                                            >Active</span
                                        >
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center"
                                    >
                                        Deposit Wallet
                                        <span class="font-weight-bold"
                                            >$10</span
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
                        </div>
                        <div
                            class="card b-radius--10 overflow-hidden mt-30 box--shadow1"
                        >
                            <div class="card-body">
                                <h5 class="mb-20 text-muted">User action</h5>
                                <a
                                    data-toggle="modal"
                                    href="#addSubModal"
                                    class="btn btn--success btn--shadow btn-block btn-lg"
                                >
                                    Add/Subtract Balance
                                </a>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/users/login/history/243"
                                    class="btn btn--primary btn--shadow btn-block btn-lg"
                                >
                                    Login Logs
                                </a>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/user/send-email/243"
                                    class="btn btn--danger btn--shadow btn-block btn-lg"
                                >
                                    Send Email
                                </a>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/users/email-log/243"
                                    class="btn btn--dark btn--shadow btn-block btn-lg"
                                >
                                    Email Log
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-7 col-md-7 mb-30">
                        <div class="row mb-none-30">
                            <div class="col-xl-4 col-lg-6 col-sm-6 mb-30">
                                <div
                                    class="dashboard-w1 bg--1 b-radius--10 box-shadow has--link"
                                >
                                    <a
                                        href="https://script.viserlab.com/hyiplab/demo/admin/user/deposits/243"
                                        class="item--link"
                                    ></a>
                                    <div class="icon">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">0.00</span>
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
                                    <a
                                        href="https://script.viserlab.com/hyiplab/demo/admin/user/withdrawals/243"
                                        class="item--link"
                                    ></a>
                                    <div class="icon">
                                        <i class="fa fa-wallet"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">0.00</span>
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
                                        href="https://script.viserlab.com/hyiplab/demo/admin/user/transactions/243"
                                        class="item--link"
                                    ></a>
                                    <div class="icon">
                                        <i class="la la-exchange-alt"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">1</span>
                                        </div>
                                        <div class="desciption">
                                            <span>Total Transaction</span>
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
                                        href="https://script.viserlab.com/hyiplab/demo/admin/user/invests/243"
                                        class="item--link"
                                    ></a>
                                    <div class="icon">
                                        <i class="la la-money-bill"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">0</span>
                                        </div>
                                        <div class="desciption">
                                            <span>Total Invest</span>
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
                                        href="https://script.viserlab.com/hyiplab/demo/admin/user/referrals/243"
                                        class="item--link"
                                    ></a>
                                    <div class="icon">
                                        <i class="la la-users"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">0</span>
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
                                        href="https://script.viserlab.com/hyiplab/demo/admin/user/commissions/deposit/243"
                                        class="item--link"
                                    ></a>
                                    <div class="icon">
                                        <i class="la la-money"></i>
                                    </div>
                                    <div class="details">
                                        <div class="numbers">
                                            <span class="amount">0.00</span>
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

                        <div class="card mt-50">
                            <div class="card-body">
                                <h5 class="card-title mb-50 border-bottom pb-2">
                                    James G Information
                                </h5>

                                <form
                                    action="https://script.viserlab.com/hyiplab/demo/admin/user/update/243"
                                    method="POST"
                                    enctype="multipart/form-data"
                                >
                                    <input
                                        type="hidden"
                                        name="_token"
                                        value="RgcPyegaILDSesIQWfFRWWkp5JugsZ0TvYurJD0q"
                                    />
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
                                                    class="form-control"
                                                    type="text"
                                                    name="firstname"
                                                    value="James"
                                                />
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
                                                    class="form-control"
                                                    type="text"
                                                    name="lastname"
                                                    value="G"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
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
                                                    class="form-control"
                                                    type="email"
                                                    name="email"
                                                    value="[Email Protected For Demo]"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >Mobile Number
                                                    <span class="text-danger"
                                                        >*</span
                                                    ></label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    name="mobile"
                                                    value="[Mobile Number Protected For Demo]"
                                                />
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
                                                />
                                                <small
                                                    class="form-text text-muted"
                                                    ><i
                                                        class="las la-info-circle"
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
                                                />
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-control-label font-weight-bold"
                                                    >Country
                                                </label>
                                                <select
                                                    name="country"
                                                    class="form-control"
                                                >
                                                    <option value="AF">
                                                        Afghanistan
                                                    </option>
                                                    <option value="AX">
                                                        Aland Islands
                                                    </option>
                                                    <option value="AL">
                                                        Albania
                                                    </option>
                                                    <option value="DZ">
                                                        Algeria
                                                    </option>
                                                    <option value="AS">
                                                        AmericanSamoa
                                                    </option>
                                                    <option value="AD">
                                                        Andorra
                                                    </option>
                                                    <option value="AO">
                                                        Angola
                                                    </option>
                                                    <option value="AI">
                                                        Anguilla
                                                    </option>
                                                    <option value="AQ">
                                                        Antarctica
                                                    </option>
                                                    <option value="AG">
                                                        Antigua and Barbuda
                                                    </option>
                                                    <option value="AR">
                                                        Argentina
                                                    </option>
                                                    <option value="AM">
                                                        Armenia
                                                    </option>
                                                    <option value="AW">
                                                        Aruba
                                                    </option>
                                                    <option value="AU">
                                                        Australia
                                                    </option>
                                                    <option value="AT">
                                                        Austria
                                                    </option>
                                                    <option value="AZ">
                                                        Azerbaijan
                                                    </option>
                                                    <option value="BS">
                                                        Bahamas
                                                    </option>
                                                    <option value="BH">
                                                        Bahrain
                                                    </option>
                                                    <option value="BD">
                                                        Bangladesh
                                                    </option>
                                                    <option value="BB">
                                                        Barbados
                                                    </option>
                                                    <option value="BY">
                                                        Belarus
                                                    </option>
                                                    <option value="BE">
                                                        Belgium
                                                    </option>
                                                    <option value="BZ">
                                                        Belize
                                                    </option>
                                                    <option value="BJ">
                                                        Benin
                                                    </option>
                                                    <option value="BM">
                                                        Bermuda
                                                    </option>
                                                    <option value="BT">
                                                        Bhutan
                                                    </option>
                                                    <option value="BO">
                                                        Bolivia, Plurinational
                                                        State of
                                                    </option>
                                                    <option value="BA">
                                                        Bosnia and Herzegovina
                                                    </option>
                                                    <option value="BW">
                                                        Botswana
                                                    </option>
                                                    <option value="BR">
                                                        Brazil
                                                    </option>
                                                    <option value="IO">
                                                        British Indian Ocean
                                                        Territory
                                                    </option>
                                                    <option value="BN">
                                                        Brunei Darussalam
                                                    </option>
                                                    <option value="BG">
                                                        Bulgaria
                                                    </option>
                                                    <option value="BF">
                                                        Burkina Faso
                                                    </option>
                                                    <option value="BI">
                                                        Burundi
                                                    </option>
                                                    <option value="KH">
                                                        Cambodia
                                                    </option>
                                                    <option value="CM">
                                                        Cameroon
                                                    </option>
                                                    <option value="CA">
                                                        Canada
                                                    </option>
                                                    <option value="CV">
                                                        Cape Verde
                                                    </option>
                                                    <option value="KY">
                                                        Cayman Islands
                                                    </option>
                                                    <option value="CF">
                                                        Central African Republic
                                                    </option>
                                                    <option value="TD">
                                                        Chad
                                                    </option>
                                                    <option value="CL">
                                                        Chile
                                                    </option>
                                                    <option value="CN">
                                                        China
                                                    </option>
                                                    <option value="CX">
                                                        Christmas Island
                                                    </option>
                                                    <option value="CC">
                                                        Cocos (Keeling) Islands
                                                    </option>
                                                    <option value="CO">
                                                        Colombia
                                                    </option>
                                                    <option value="KM">
                                                        Comoros
                                                    </option>
                                                    <option value="CG">
                                                        Congo
                                                    </option>
                                                    <option value="CD">
                                                        Congo, The Democratic
                                                        Republic of the Congo
                                                    </option>
                                                    <option value="CK">
                                                        Cook Islands
                                                    </option>
                                                    <option value="CR">
                                                        Costa Rica
                                                    </option>
                                                    <option value="CI">
                                                        Cote d&#039;Ivoire
                                                    </option>
                                                    <option value="HR">
                                                        Croatia
                                                    </option>
                                                    <option value="CU">
                                                        Cuba
                                                    </option>
                                                    <option value="CY">
                                                        Cyprus
                                                    </option>
                                                    <option value="CZ">
                                                        Czech Republic
                                                    </option>
                                                    <option value="DK">
                                                        Denmark
                                                    </option>
                                                    <option value="DJ">
                                                        Djibouti
                                                    </option>
                                                    <option value="DM">
                                                        Dominica
                                                    </option>
                                                    <option value="DO">
                                                        Dominican Republic
                                                    </option>
                                                    <option value="EC">
                                                        Ecuador
                                                    </option>
                                                    <option value="EG">
                                                        Egypt
                                                    </option>
                                                    <option value="SV">
                                                        El Salvador
                                                    </option>
                                                    <option value="GQ">
                                                        Equatorial Guinea
                                                    </option>
                                                    <option value="ER">
                                                        Eritrea
                                                    </option>
                                                    <option value="EE">
                                                        Estonia
                                                    </option>
                                                    <option value="ET">
                                                        Ethiopia
                                                    </option>
                                                    <option value="FK">
                                                        Falkland Islands
                                                        (Malvinas)
                                                    </option>
                                                    <option value="FO">
                                                        Faroe Islands
                                                    </option>
                                                    <option value="FJ">
                                                        Fiji
                                                    </option>
                                                    <option value="FI">
                                                        Finland
                                                    </option>
                                                    <option value="FR">
                                                        France
                                                    </option>
                                                    <option value="GF">
                                                        French Guiana
                                                    </option>
                                                    <option value="PF">
                                                        French Polynesia
                                                    </option>
                                                    <option value="GA">
                                                        Gabon
                                                    </option>
                                                    <option value="GM">
                                                        Gambia
                                                    </option>
                                                    <option value="GE">
                                                        Georgia
                                                    </option>
                                                    <option value="DE">
                                                        Germany
                                                    </option>
                                                    <option value="GH">
                                                        Ghana
                                                    </option>
                                                    <option value="GI">
                                                        Gibraltar
                                                    </option>
                                                    <option value="GR">
                                                        Greece
                                                    </option>
                                                    <option value="GL">
                                                        Greenland
                                                    </option>
                                                    <option value="GD">
                                                        Grenada
                                                    </option>
                                                    <option value="GP">
                                                        Guadeloupe
                                                    </option>
                                                    <option value="GU">
                                                        Guam
                                                    </option>
                                                    <option value="GT">
                                                        Guatemala
                                                    </option>
                                                    <option value="GG">
                                                        Guernsey
                                                    </option>
                                                    <option value="GN">
                                                        Guinea
                                                    </option>
                                                    <option value="GW">
                                                        Guinea-Bissau
                                                    </option>
                                                    <option value="GY">
                                                        Guyana
                                                    </option>
                                                    <option value="HT">
                                                        Haiti
                                                    </option>
                                                    <option value="VA">
                                                        Holy See (Vatican City
                                                        State)
                                                    </option>
                                                    <option value="HN">
                                                        Honduras
                                                    </option>
                                                    <option value="HK">
                                                        Hong Kong
                                                    </option>
                                                    <option value="HU">
                                                        Hungary
                                                    </option>
                                                    <option value="IS">
                                                        Iceland
                                                    </option>
                                                    <option value="IN">
                                                        India
                                                    </option>
                                                    <option value="ID">
                                                        Indonesia
                                                    </option>
                                                    <option value="IR">
                                                        Iran, Islamic Republic
                                                        of Persian Gulf
                                                    </option>
                                                    <option value="IQ">
                                                        Iraq
                                                    </option>
                                                    <option value="IE">
                                                        Ireland
                                                    </option>
                                                    <option value="IM">
                                                        Isle of Man
                                                    </option>
                                                    <option value="IL">
                                                        Israel
                                                    </option>
                                                    <option value="IT">
                                                        Italy
                                                    </option>
                                                    <option value="JM">
                                                        Jamaica
                                                    </option>
                                                    <option value="JP">
                                                        Japan
                                                    </option>
                                                    <option value="JE">
                                                        Jersey
                                                    </option>
                                                    <option value="JO">
                                                        Jordan
                                                    </option>
                                                    <option value="KZ">
                                                        Kazakhstan
                                                    </option>
                                                    <option value="KE">
                                                        Kenya
                                                    </option>
                                                    <option value="KI">
                                                        Kiribati
                                                    </option>
                                                    <option value="KP">
                                                        Korea, Democratic
                                                        People&#039;s Republic
                                                        of Korea
                                                    </option>
                                                    <option value="KR">
                                                        Korea, Republic of South
                                                        Korea
                                                    </option>
                                                    <option value="KW">
                                                        Kuwait
                                                    </option>
                                                    <option value="KG">
                                                        Kyrgyzstan
                                                    </option>
                                                    <option value="LA">
                                                        Laos
                                                    </option>
                                                    <option value="LV">
                                                        Latvia
                                                    </option>
                                                    <option value="LB">
                                                        Lebanon
                                                    </option>
                                                    <option value="LS">
                                                        Lesotho
                                                    </option>
                                                    <option value="LR">
                                                        Liberia
                                                    </option>
                                                    <option value="LY">
                                                        Libyan Arab Jamahiriya
                                                    </option>
                                                    <option value="LI">
                                                        Liechtenstein
                                                    </option>
                                                    <option value="LT">
                                                        Lithuania
                                                    </option>
                                                    <option value="LU">
                                                        Luxembourg
                                                    </option>
                                                    <option value="MO">
                                                        Macao
                                                    </option>
                                                    <option value="MK">
                                                        Macedonia
                                                    </option>
                                                    <option value="MG">
                                                        Madagascar
                                                    </option>
                                                    <option value="MW">
                                                        Malawi
                                                    </option>
                                                    <option value="MY">
                                                        Malaysia
                                                    </option>
                                                    <option value="MV">
                                                        Maldives
                                                    </option>
                                                    <option value="ML">
                                                        Mali
                                                    </option>
                                                    <option value="MT">
                                                        Malta
                                                    </option>
                                                    <option value="MH">
                                                        Marshall Islands
                                                    </option>
                                                    <option value="MQ">
                                                        Martinique
                                                    </option>
                                                    <option value="MR">
                                                        Mauritania
                                                    </option>
                                                    <option value="MU">
                                                        Mauritius
                                                    </option>
                                                    <option value="YT">
                                                        Mayotte
                                                    </option>
                                                    <option value="MX">
                                                        Mexico
                                                    </option>
                                                    <option value="FM">
                                                        Micronesia, Federated
                                                        States of Micronesia
                                                    </option>
                                                    <option value="MD">
                                                        Moldova
                                                    </option>
                                                    <option value="MC">
                                                        Monaco
                                                    </option>
                                                    <option value="MN">
                                                        Mongolia
                                                    </option>
                                                    <option value="ME">
                                                        Montenegro
                                                    </option>
                                                    <option value="MS">
                                                        Montserrat
                                                    </option>
                                                    <option value="MA">
                                                        Morocco
                                                    </option>
                                                    <option value="MZ">
                                                        Mozambique
                                                    </option>
                                                    <option value="MM">
                                                        Myanmar
                                                    </option>
                                                    <option value="NA">
                                                        Namibia
                                                    </option>
                                                    <option value="NR">
                                                        Nauru
                                                    </option>
                                                    <option value="NP">
                                                        Nepal
                                                    </option>
                                                    <option value="NL">
                                                        Netherlands
                                                    </option>
                                                    <option value="AN">
                                                        Netherlands Antilles
                                                    </option>
                                                    <option value="NC">
                                                        New Caledonia
                                                    </option>
                                                    <option value="NZ">
                                                        New Zealand
                                                    </option>
                                                    <option value="NI">
                                                        Nicaragua
                                                    </option>
                                                    <option value="NE">
                                                        Niger
                                                    </option>
                                                    <option value="NG" selected>
                                                        Nigeria
                                                    </option>
                                                    <option value="NU">
                                                        Niue
                                                    </option>
                                                    <option value="NF">
                                                        Norfolk Island
                                                    </option>
                                                    <option value="MP">
                                                        Northern Mariana Islands
                                                    </option>
                                                    <option value="NO">
                                                        Norway
                                                    </option>
                                                    <option value="OM">
                                                        Oman
                                                    </option>
                                                    <option value="PK">
                                                        Pakistan
                                                    </option>
                                                    <option value="PW">
                                                        Palau
                                                    </option>
                                                    <option value="PS">
                                                        Palestinian Territory,
                                                        Occupied
                                                    </option>
                                                    <option value="PA">
                                                        Panama
                                                    </option>
                                                    <option value="PG">
                                                        Papua New Guinea
                                                    </option>
                                                    <option value="PY">
                                                        Paraguay
                                                    </option>
                                                    <option value="PE">
                                                        Peru
                                                    </option>
                                                    <option value="PH">
                                                        Philippines
                                                    </option>
                                                    <option value="PN">
                                                        Pitcairn
                                                    </option>
                                                    <option value="PL">
                                                        Poland
                                                    </option>
                                                    <option value="PT">
                                                        Portugal
                                                    </option>
                                                    <option value="PR">
                                                        Puerto Rico
                                                    </option>
                                                    <option value="QA">
                                                        Qatar
                                                    </option>
                                                    <option value="RO">
                                                        Romania
                                                    </option>
                                                    <option value="RU">
                                                        Russia
                                                    </option>
                                                    <option value="RW">
                                                        Rwanda
                                                    </option>
                                                    <option value="RE">
                                                        Reunion
                                                    </option>
                                                    <option value="BL">
                                                        Saint Barthelemy
                                                    </option>
                                                    <option value="SH">
                                                        Saint Helena, Ascension
                                                        and Tristan Da Cunha
                                                    </option>
                                                    <option value="KN">
                                                        Saint Kitts and Nevis
                                                    </option>
                                                    <option value="LC">
                                                        Saint Lucia
                                                    </option>
                                                    <option value="MF">
                                                        Saint Martin
                                                    </option>
                                                    <option value="PM">
                                                        Saint Pierre and
                                                        Miquelon
                                                    </option>
                                                    <option value="VC">
                                                        Saint Vincent and the
                                                        Grenadines
                                                    </option>
                                                    <option value="WS">
                                                        Samoa
                                                    </option>
                                                    <option value="SM">
                                                        San Marino
                                                    </option>
                                                    <option value="ST">
                                                        Sao Tome and Principe
                                                    </option>
                                                    <option value="SA">
                                                        Saudi Arabia
                                                    </option>
                                                    <option value="SN">
                                                        Senegal
                                                    </option>
                                                    <option value="RS">
                                                        Serbia
                                                    </option>
                                                    <option value="SC">
                                                        Seychelles
                                                    </option>
                                                    <option value="SL">
                                                        Sierra Leone
                                                    </option>
                                                    <option value="SG">
                                                        Singapore
                                                    </option>
                                                    <option value="SK">
                                                        Slovakia
                                                    </option>
                                                    <option value="SI">
                                                        Slovenia
                                                    </option>
                                                    <option value="SB">
                                                        Solomon Islands
                                                    </option>
                                                    <option value="SO">
                                                        Somalia
                                                    </option>
                                                    <option value="ZA">
                                                        South Africa
                                                    </option>
                                                    <option value="SS">
                                                        South Sudan
                                                    </option>
                                                    <option value="GS">
                                                        South Georgia and the
                                                        South Sandwich Islands
                                                    </option>
                                                    <option value="ES">
                                                        Spain
                                                    </option>
                                                    <option value="LK">
                                                        Sri Lanka
                                                    </option>
                                                    <option value="SD">
                                                        Sudan
                                                    </option>
                                                    <option value="SR">
                                                        Suricountry
                                                    </option>
                                                    <option value="SJ">
                                                        Svalbard and Jan Mayen
                                                    </option>
                                                    <option value="SZ">
                                                        Swaziland
                                                    </option>
                                                    <option value="SE">
                                                        Sweden
                                                    </option>
                                                    <option value="CH">
                                                        Switzerland
                                                    </option>
                                                    <option value="SY">
                                                        Syrian Arab Republic
                                                    </option>
                                                    <option value="TW">
                                                        Taiwan
                                                    </option>
                                                    <option value="TJ">
                                                        Tajikistan
                                                    </option>
                                                    <option value="TZ">
                                                        Tanzania, United
                                                        Republic of Tanzania
                                                    </option>
                                                    <option value="TH">
                                                        Thailand
                                                    </option>
                                                    <option value="TL">
                                                        Timor-Leste
                                                    </option>
                                                    <option value="TG">
                                                        Togo
                                                    </option>
                                                    <option value="TK">
                                                        Tokelau
                                                    </option>
                                                    <option value="TO">
                                                        Tonga
                                                    </option>
                                                    <option value="TT">
                                                        Trinidad and Tobago
                                                    </option>
                                                    <option value="TN">
                                                        Tunisia
                                                    </option>
                                                    <option value="TR">
                                                        Turkey
                                                    </option>
                                                    <option value="TM">
                                                        Turkmenistan
                                                    </option>
                                                    <option value="TC">
                                                        Turks and Caicos Islands
                                                    </option>
                                                    <option value="TV">
                                                        Tuvalu
                                                    </option>
                                                    <option value="UG">
                                                        Uganda
                                                    </option>
                                                    <option value="UA">
                                                        Ukraine
                                                    </option>
                                                    <option value="AE">
                                                        United Arab Emirates
                                                    </option>
                                                    <option value="GB">
                                                        United Kingdom
                                                    </option>
                                                    <option value="US">
                                                        United States
                                                    </option>
                                                    <option value="UY">
                                                        Uruguay
                                                    </option>
                                                    <option value="UZ">
                                                        Uzbekistan
                                                    </option>
                                                    <option value="VU">
                                                        Vanuatu
                                                    </option>
                                                    <option value="VE">
                                                        Venezuela, Bolivarian
                                                        Republic of Venezuela
                                                    </option>
                                                    <option value="VN">
                                                        Vietnam
                                                    </option>
                                                    <option value="VG">
                                                        Virgin Islands, British
                                                    </option>
                                                    <option value="VI">
                                                        Virgin Islands, U.S.
                                                    </option>
                                                    <option value="WF">
                                                        Wallis and Futuna
                                                    </option>
                                                    <option value="YE">
                                                        Yemen
                                                    </option>
                                                    <option value="ZM">
                                                        Zambia
                                                    </option>
                                                    <option value="ZW">
                                                        Zimbabwe
                                                    </option>
                                                </select>
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
                                            />
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button
                                                    type="submit"
                                                    class="btn btn--primary btn-block btn-lg"
                                                >
                                                    Save Changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                                    Add / Subtract Balance
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
                                action="https://script.viserlab.com/hyiplab/demo/admin/user/add-sub-balance/243"
                                method="POST"
                            >
                                <input
                                    type="hidden"
                                    name="_token"
                                    value="RgcPyegaILDSesIQWfFRWWkp5JugsZ0TvYurJD0q"
                                />
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
                                                >Select Wallet<span
                                                    class="text-danger"
                                                    >*</span
                                                ></label
                                            >
                                            <select
                                                name="wallet"
                                                class="form-control"
                                                required
                                            >
                                                <option value="deposit_wallet">
                                                    Deposit Wallet
                                                </option>
                                                <option value="interest_wallet">
                                                    Interest Wallet
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
                                                    type="text"
                                                    name="amount"
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
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn--dark"
                                        data-dismiss="modal"
                                    >
                                        Close
                                    </button>
                                    <button
                                        type="submit"
                                        class="btn btn--success"
                                    >
                                        Submit
                                    </button>
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
export default {
    data() {
        return {
            user: {},
            loading: false,
            key: 0,
        };
    },
    created() {
        this.fetchUser(this.$route.params.id);
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
        let js = document.createElement("script");
        js.setAttribute(
            "src",
            "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
        );
        document.body.appendChild(js);

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
        style.href = this.$root.basepath + "/assets/admin/css/app.css";
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
    },
    methods: {
        fetchUser(id) {
            this.loading = true;
            var form = new Form();
            form.get("/auth/users?id=" + id)
                .then((response) => {
                    this.loading = false;
                    this.user = response.data.data.item[0];
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
    },
};
</script>
