<template>
    <div class="section-full p-t10 p-b10 bg-gray">
        <div class="container">
            <div class="section-head text-center">
                <span
                    class="wt-title-subline font-16 text-gray-dark m-b15"
                ></span>
                <h2 class="text-uppercase">our investment plans</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator bg-primary"></div>
                </div>
                <p>
                    Choose the best investment plan that fits your budget and
                    get started
                </p>
            </div>

            <div class="section-content">
                <div class="row">
                    <section class="pricing">
                        <div class="container">
                            <!-- Section Title Starts -->

                            <!-- Section Title Ends -->
                            <!-- Section Content Starts -->
                            <div class="row pricing-tables-content">
                                <div class="pricing-container">
                                    <!-- Pricing Tables Starts -->
                                    <div
                                        class="row mb-none-30 justify-content-center"
                                    >
                                     
        <div v-for="plan in $root.packages" class="col-xl-3 col-lg-4 col-md-6 mb-30">
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
        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</template>
<script></script>
<style scoped>
@import "../assets/ebuka.css";
@import "../assets/css/style37913791.css";
@import "../assets/css/skin/skin-25b275b27.css";
@import "../assets/plugins/pace/pace.css";
@import "../assets/plugins/revolution/revolution/css/settings.css";
@import "../assets/plugins/revolution/revolution/css/navigation.css";
</style>
