<template>
    <div class="page-wrapper">
    <Header></Header>


    <section :style="'background:url('+ $root.basepath + '/images/bg/bg-8.jpg'" class="bg_img pt-120 pb-120 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><span class="font-weight-normal">Our Affiliate </span> <b class="base--color">Program</b></h2>
                        <p class="blog-details__content">
                            Enjoy exceptional upto 15% two levels affiliate system structure in <span>{{$root.appName}}</span> Limited.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="blog-details-wrapper">
                    <div class="blog-details__thumb">
                        <img :src="$root.basepath + '/images/blog/1.jpg'" alt="image">
                    </div>
                    <div class="blog-details__content">
                        <h4 class="blog-details__title">Partner Incentive System Structure</h4>
                        <p class=""><span>{{$root.appName}}</span> has derived a means to support our clients who do not have enough to subscribe for an investment plan through our affiliate program.</p>
                        <p> This is located in your account user dashboard as your <span class="base--color">affiliate link.</span></p>
                        <p>You can attract any number of new investors, the more your active referrals, the more earnings you have. You are entitled to 15% on every deposit made by your downline.
                        </p>
                        <p> You do not need to have an active deposit before you can earn from our investment program.</p> <p> For first level, you will receive 10% affiliate commission and for second level you will receive 5% affiliate commission.</p><p>This multi-tier affiliate program will ensure multiple sources of passive income for you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <Footer></Footer>
</div>
</template>
