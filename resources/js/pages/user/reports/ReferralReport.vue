<template>
    <div class="page-wrapper">
        <DashboardHeader></DashboardHeader>

        <section class="inner-hero bg_img" :style="'background:url('+ $root.basepath +'/images/bg/bg-1.jpg)'" :data-background="$root.basepath + '/images/bg/bg-1.jpg'">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Referral</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li>Referral</li>
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
                            <div class="col-lg-4 col-sm-12 mb-50">
                                <div class="m-auto equal blog-card p-0 mb-50">
                                    <div class="headeraccount base--bg">
                                        <span class="font-weight-bold">Referral Statistics </span>
                                    </div>
                                    <div class="row p-4 pb-2">
                                        <div class="col-9 col-md-10">
                                            <h2 class="mb-1">{{$root.numeral($auth.user().totalCommission)}}</h2>
                                            <p class="mb-3">Earned commission</p>
                                        </div>
                                        <div class="col-3 col-md-2 p-0">
                                            <div class="icon base--bg text-white">
                                                <i class="las la-dollar-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider pb-3"></div>
                                    <div class="row p-4 pb-2">
                                        <div class="col-8  ">
                                            <p class="mb-3">Your Status</p>
                                        </div>
                                        <div class="col-4 text-center p-0">
                                            <div class="mb-1">
                                                <span v-if="$auth.user().totalActiveTransaction > 0 ||  $auth.user().totalEarned > 0" class="badge badge-success text-uppercase">
                                                    Investor
                                                </span>
                                                <span v-else class="badge badge-warning text-uppercase">Prospect</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider pb-3"></div>
                                    <div class="row p-4 pb-2">
                                        <div class="col-8  ">
                                            <p class="mb-3">Your Upline</p>
                                        </div>
                                        <div class="col-4 text-center p-0">
                                            <div class="mb-1">
                                                {{$auth.user().referral == null ? 'None' : $auth.user().referral}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider pb-3"></div>
                                    <div class="row p-4 pb-2">
                                        <div class="col-8  ">
                                            <p class="mb-3">Referrals</p>
                                        </div>
                                        <div class="col-4 text-center p-0">
                                            <div class="mb-1">
                                                {{$auth.user().referrals}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider pb-3"></div>
                                    <div class="row p-4 pb-2">
                                        <div class="col-8  ">
                                            <p class="mb-3">Active referrals</p>
                                        </div>
                                        <div class="col-4 text-center p-0">
                                            <div class="mb-1">
                                                {{$auth.user().activeReferrals}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="headeraccount base--bg mb-4"><span class="text-capitalize font-weight-bold">Your Referrals </span> </div>
                                    <div class="table-respon2sive table-responsive--md p-0">
                                        <table class="table style--two white-space-nowrap">
                                            <thead v-if="referrals.length > 0" class="bg-transparent text-white">
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Status</th>
                                                    <th>Referral level</th>
                                                    <th>Commission</th>
                                                    <th>Joined</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-if="referrals.length > 0" v-for="data in referrals.slice(0,20)">
                                                    <td data-label="Username">{{data.username}}</td>
                                                    <td data-label="Status"><span :class="{badge:true, 'badge-success' : data.active, 'text-uppercase' : true, 'bg--base' : !data.active, 'text-dark' : !data.active}">
                                                            {{data.active ? 'investor' : 'prospect'}}</span>
                                                    </td>
                                                    <td data-label="Level">{{ data.referral_level == 1 ? 'First Level Downline' : 'Second Level Downline' }}</td>
                                                    <td class="text-success" data-label="Commission">+ ${{$root.normalNumeral(data.cumulativeCommission)}}</td>
                                                    <td data-label="Joined">{{$root.numeral(data.date)}}</td>
                                                </tr>
                                                <tr v-if="referrals.length == 0">
                                                    <td class="text-center only" colspan="5">
                                                        <div class="p-3 text-center">
                                                            You do not have any referred investor yet.
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="headeraccount base--bg"><span class="font-weight-bold"><span class="text-white">Your </span> Affiliate Link </span> </div>
                                    <div class="input-group mt-3 p-4">
                                        <input type="text" :value="Referral_link" disabled="" class="text-center form-control">
                                        <div class="input-group-append">
                                            <button @click="$root.alert('success',' ', 'copied')" v-clipboard="Referral_link" style="border-radius: 0px;" class="cmn-btn" data-clipboard-target="#wallet">Copy</button>
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
            referrals: [],
            error: '',
            form: new Form()
        }
    },
    mounted() {
        this.$root.loader('show')
        // setInterval(this.getReferrals, 61000)
        this.getReferrals()
    },
    computed: {
        Referral_link() {
            return this.$root.basepath + '/register?ref=' + this.$auth.user().username
        }
    },
    watch: {},
    methods: {
        getReferrals() {
            this.form.get("auth/user/referrals/" + this.$auth.user().id)
                .then(response => {
                    this.$root.loader('hide')
                    this.referrals = response.data.data
                })
                .catch(error => {
                    this.$root.loader('hide')
                    this.error = error.response
                    console.log(error.response)
                })
        },
    }

}

</script>
