<template>
    <div class="page-wrapper">
        <DashboardHeader></DashboardHeader>
        <section class="inner-hero bg_img" :style="'background:url('+ $root.basepath +'/images/bg/bg-1.jpg)'" :data-background="$root.basepath + '/images/bg/bg-1.jpg'">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Deposit Statement</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li>Active Plans</li>
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
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="headeraccount base--bg">
                                        <span class="font-weight-bold">Financial Statistics </span>
                                    </div>
                                    <div class="row p-4 pb-2">
                                        <div class="col-9 col-md-10 ">
                                            <h2 class="mb-1">{{$root.numeral($auth.user().balance)}}</h2>
                                            <p class="mb-3">Account Balance</p>
                                        </div>
                                        <div class="col-3 col-md-2 p-0">
                                            <div class="icon base--bg text-white">
                                                <i class="las la-dollar-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider pb-3"></div>
                                    <div class="row p-4 pb-2">
                                        <div class="col-9 col-md-10 ">
                                            <h2 class="mb-1">{{$root.numeral($auth.user().totalActiveTransaction)}}</h2>
                                            <p class="mb-3">Active Investment</p>
                                        </div>
                                        <div class="col-3 col-md-2 p-0">
                                            <div class="icon base--bg text-white">
                                                <i class="las la-dollar-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <div class="m-auto equal blog-card p-0 mb-30">
                                    <div class="headeraccount base--bg mb-4"><span class="text-capitalize font-weight-bold">Your active Investment plans </span> </div>
                                    <div class="table-respon2sive table-responsive--md p-0">
                                        <table class="table style--two white-space-nowrap">
                                            <thead v-if="userPackages.length > 0" class="bg-transparent text-white">
                                                <tr>
                                                    <th>Plan</th>
                                                    <th>Capital</th>
                                                    <th>Interest</th>
                                                    <th>Activation</th>
                                                    <th>Countdown</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-if="userPackages.length > 0" v-for="packag in userPackages">
                                                    <td data-label="Plan">{{$root.numeral(packag.name)}}</td>
                                                    <td data-label="Capital">{{$root.numeral(packag.amount)}}</td>
                                                    <td class="text-success" data-label="Interest">+ ${{$root.normalNumeral(packag.roi)}}</td>
                                                    <td data-label="Activation">{{packag.date}}</td>
                                                    <td data-label="Countdown" class="text-success">{{getDate(packag.expiration)}}</td>
                                                </tr>
                                                <tr v-if="userPackages.length == 0">
                                                    <td class="text-center only" colspan="4">
                                                        <div class="p-3 text-center">
                                                            You do not have an active investment.<br> Click <a style="text-decoration: underline;" href="/dashboard/deposit" class="base--color font-weight-bold"> here </a> to invest.
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
        <Footer></Footer>
    </div>
</template>
<script>
    import moment from 'moment'
export default {
    data() {
        return {
            userPackages: [],
            form: new Form({}),
            select: '',
            error: '',

        }
    },
    mounted() {
        this.$root.loader('show')
        setInterval(this.getPackages, 100000)
        this.getPackages()
    },
    computed: {

    },
    methods: {
        getPackages() {
            this.$auth.fetch()
            this.form.get("auth/packageusers?active=1&user_id=" + this.$auth.user().id)
                .then(response => {
                    this.$root.loader('hide')
                    this.userPackages = response.data.data.item
                })
                .catch(error => {
                    this.$root.loader('hide')
                    console.log(error.response)
                })
        },
        getDate(to) {
            return moment().to(moment(to))
        }
    }
}

</script>
<style type="text/css">
.table-responsive--md tr td.only {
    padding-left: 0% !important;
    text-align: center !important;
    white-space: normal !important;
    padding-right: 0% !important;
}

</style>
