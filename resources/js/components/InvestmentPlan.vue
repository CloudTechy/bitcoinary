<template>
    <section aria-label="section" data-bgimage="url(assets/images/home/slide2.jpg) top" class="text-light" id="plans">
        <div class="container" id="about">
            <div class="text-center">
                <span class="p-title" style="color: #fff; background-color: #377dff">Our Investment
                    Packages</span><br />
                <h2 style="color: #fff">Energised to be part of the future?</h2>
                <div class="small-border pb-5" style="border-color: #ffcc29"></div>
                <div class="row sequence">
                    <div v-for="plan in $root.packages" v-if="plan.status"
                        class="col-lg-3 col-md-6 col-sm-12 sq-item wow">
                        <div class="pricing-s1 mb30" style="border: 2px white solid">
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

                                        <b>Duration: {{ plan.duration }} </b>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i><b>Minimum:
                                            {{
                                                    $root.numeral(plan.min_deposit)
                                            }}</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i><b>Maximum:
                                            {{
        plan.max_deposit >= 1000000
            ? "Unlimited"
            : $root.numeral(
                plan.max_deposit
            )
                                            }}</b>
                                    </li>
                                </ul>
                            </div>
                            <div class="action">
                                <a href="/dashboard/plans" class="btn-custom" style="
                                        background-color: #ffcc29;
                                        color: #000;
                                    ">Invest</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>
<script></script>
<style scoped>

</style>
