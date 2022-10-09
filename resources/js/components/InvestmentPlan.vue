<template>
    <!-- <div v-for="plan in $root.packages" class="col-xl-3 col-lg-4 col-md-6 mb-30">
            <div class="package-card text-center bg_img" :style="{backgroundImage : 'url(' + $root.basepath + '/images/bg/bg-4.png )'}">
                <h4 class="package-card__title text-white text-capitalize mb-2">{{plan.name}}</h4>
                <div v-if="plan.name == 'Starter'">
                    <ul class="package-card__features mt-4">
                        <li>Return {{plan.roi}}%</li>
                        <li>Matures in a {{plan.turnover}}</li>
                        <li>Total {{plan.roi}}% + <span class="badge base--bg">Capital</span></li>
                    </ul>
                </div>
                <div v-if="plan.name == 'Basic'">
                    <ul class="package-card__features mt-4">
                        <li>Return {{plan.roi}}%</li>
                        <li>Matures in a {{plan.turnover}}</li>
                        <li>Total {{plan.roi}}% + <span class="badge base--bg">Capital</span></li>
                    </ul>
                </div>
                <div v-if="plan.name == 'Premium'">
                    <ul class="package-card__features mt-4">
                        <li>Return {{plan.roi}}%</li>
                        <li>Matures in a  {{plan.turnover}}</li>
                        <li>Total {{plan.roi}}% + <span class="badge base--bg">Capital</span> </li>
                        <li>With loan Security</li>
                    </ul>
                </div>
                <div class="package-card__range mt-5 mb-4 base--color">{{plan.max_deposit == 1000000 ? '$' + plan.min_deposit + ' - ' + '$' + 'Unlimited' : '$' + plan.min_deposit + ' - ' + '$' + plan.max_deposit}}</div>
                <a href="/dashboard/deposit" class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
            </div>
        </div> -->
    <section
        aria-label="section"
        data-bgimage="url(assets/images/home/slide2.jpg) top"
        class="text-light"
        id="plans"
    >
        <div class="container" id="about">
            <div class="text-center">
                <span
                    class="p-title"
                    style="color: #fff; background-color: #377dff"
                    >Our Investment Packages</span
                ><br />
                <h2 style="color: #fff">Energised to be part of the future?</h2>
                <div
                    class="small-border pb-5"
                    style="border-color: #ffcc29"
                ></div>
                <div class="row sequence">
                    <div
                        v-for="plan in $root.packages"
                        class="col-lg-3 col-md-6 col-sm-12 sq-item wow"
                    >
                        <div
                            class="pricing-s1 mb30"
                            style="border: 2px white solid"
                        >
                            <div class="top">
                                <p class="plan-tagline">
                                    <b> {{ plan.name }} </b>
                                </p>
                            </div>
                            <div class="mid text-light bg-color">
                                <h2>{{ plan.roi }}%</h2>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="fa fa-check"></i>

                                        <b>Duration: {{ plan.turnover }} </b>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b
                                            >Minimum:
                                            {{
                                                $root.numeral(plan.min_deposit)
                                            }}</b
                                        >
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b
                                            >Maximum:
                                            {{
                                                plan.max_deposit >= 1000000
                                                    ? "Unlimited"
                                                    : $root.numeral(
                                                          plan.max_deposit
                                                      )
                                            }}</b
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="action">
                                <a
                                    href="account/register.php"
                                    class="btn-custom"
                                    style="
                                        background-color: #ffcc29;
                                        color: #000;
                                    "
                                    >Invest</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <h2 style="color: #fff">Mining Plans</h2>
                <div
                    class="small-border pb-5"
                    style="border-color: #ffcc29"
                ></div>
                <div class="row sequence">
                    <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">
                        <div
                            class="pricing-s1 mb30"
                            style="border: 2px white solid"
                        >
                            <div class="top">
                                <p class="plan-tagline">
                                    <b> Clarke </b>
                                </p>
                            </div>
                            <div class="mid text-light bg-color">
                                <h2>20%</h2>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Duration: 30 Days</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Minimum: $5,000.00</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Maximum: $10,999.00</b>
                                    </li>
                                </ul>
                            </div>
                            <div class="action">
                                <a
                                    href="account/register.php"
                                    class="btn-custom"
                                    style="
                                        background-color: #ffcc29;
                                        color: #000;
                                    "
                                    >Sign Up</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">
                        <div
                            class="pricing-s1 mb30"
                            style="border: 2px white solid"
                        >
                            <div class="top">
                                <p class="plan-tagline">
                                    <b> Tradis </b>
                                </p>
                            </div>
                            <div class="mid text-light bg-color">
                                <h2>35%</h2>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Duration: 30 Days</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Minimum: $10,000.00</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Maximum: $25,999.00</b>
                                    </li>
                                </ul>
                            </div>
                            <div class="action">
                                <a
                                    href="account/register.php"
                                    class="btn-custom"
                                    style="
                                        background-color: #ffcc29;
                                        color: #000;
                                    "
                                    >Sign Up</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">
                        <div
                            class="pricing-s1 mb30"
                            style="border: 2px white solid"
                        >
                            <div class="top">
                                <p class="plan-tagline">
                                    <b> Blackbox </b>
                                </p>
                            </div>
                            <div class="mid text-light bg-color">
                                <h2>50%</h2>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Duration: 30 Days</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Minimum: $26,000.00</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Maximum: $50,999.00</b>
                                    </li>
                                </ul>
                            </div>
                            <div class="action">
                                <a
                                    href="account/register.php"
                                    class="btn-custom"
                                    style="
                                        background-color: #ffcc29;
                                        color: #000;
                                    "
                                    >Sign Up</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">
                        <div
                            class="pricing-s1 mb30"
                            style="border: 2px white solid"
                        >
                            <div class="top">
                                <p class="plan-tagline">
                                    <b> Ultimate </b>
                                </p>
                            </div>
                            <div class="mid text-light bg-color">
                                <h2>100%</h2>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Duration: 30 Days</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Minimum: $51,000.00</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i
                                        ><b>Maximum: Unlimited</b>
                                    </li>
                                </ul>
                            </div>
                            <div class="action">
                                <a
                                    href="account/register.php"
                                    class="btn-custom"
                                    style="
                                        background-color: #ffcc29;
                                        color: #000;
                                    "
                                    >Sign Up</a
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row sequence">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <small class="text-white"
                            >All plans shown are principal inclusive.</small
                        >
                    </div>
                    <div class="col-md-12">
                        <h2
                            class="title"
                            style="
                                text-align: center;
                                margin-bottom: 20px;
                                color: #fff;
                            "
                        >
                            Calculate <b>Profit</b>
                        </h2>
                        <form name="calculator">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="text-warning font-weight-bold"
                                        >Choose Plan</label
                                    >
                                    <select
                                        class="form-control"
                                        name="percent"
                                        id="percent"
                                    >
                                        <option value="">Select</option>
                                        <option value="0.1">
                                            Starter: $ 100- $3999
                                        </option>
                                        <option value="0.15">
                                            Regular: $ 4000- $8999
                                        </option>
                                        <option value="0.35">
                                            Pro: $ 9000- $29999
                                        </option>
                                        <option value="0.5">
                                            Elite: $ 30000- $120000
                                        </option>
                                        <option value="0.2">
                                            Clarke: $ 5000- $10999
                                        </option>
                                        <option value="0.35">
                                            Tradis: $ 10000- $25999
                                        </option>
                                        <option value="0.5">
                                            Blackbox: $ 26000- $50999
                                        </option>
                                        <option value="1">
                                            Ultimate: $ 51000- Unlimited
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label
                                            class="text-warning font-weight-bold"
                                            >Enter Amount</label
                                        >
                                        <input
                                            type="number"
                                            name="amount"
                                            id="amount"
                                            class="form-control"
                                            aria-describedby="basic-addon1"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label
                                            class="text-warning font-weight-bold"
                                            >&nbsp;</label
                                        ><br />
                                        <input
                                            type="button"
                                            class="btn btn-warning"
                                            style="
                                                line-height: normal;
                                                color: #fff;
                                            "
                                            value="Calculate Profit"
                                            onClick="multiply()"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <label
                                                class="text-warning font-weight-bold"
                                                >Net Profit</label
                                            >
                                            <h2 class="text-white">
                                                $<span
                                                    id="netProfit"
                                                    class="text-white"
                                                    >0.00</span
                                                >
                                            </h2>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label
                                                class="text-warning font-weight-bold"
                                                >Total Return</label
                                            >
                                            <h2 class="text-white">
                                                $<span
                                                    id="profit"
                                                    class="text-white"
                                                    >0.00</span
                                                >
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script></script>
<style scoped></style>
