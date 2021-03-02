<template>
    <div class="" style="">
       <!--  <DashboardHeader v-if="$route.name == 'dashboard'"></DashboardHeader>
        <DashboardHeader v-else-if="$route.name == 'withdraw'"></DashboardHeader>
        <DashboardHeader v-else-if="$route.name == 'deposit'"></DashboardHeader>
        <DashboardHeader v-else-if="$route.name == 'UserPlans'"></DashboardHeader>
        <DashboardHeader v-else-if="$route.name == 'WithdrawReport'"></DashboardHeader>
        <DashboardHeader v-else-if="$route.name == 'ReferralReport'"></DashboardHeader>
        <DashboardHeader v-else-if="$route.name == 'Setting'"></DashboardHeader>
        <AdminDashboardHeader v-else-if="$route.name == 'adminDashboard'"></AdminDashboardHeader>
        <Header v-else class="p-0 m-0"></Header> -->
        <!-- <div style="min-height: 370px;  position: relative;"> -->
            <router-view></router-view>
        <!-- </div> -->
        <!-- <Footer></Footer> -->
    </div>
</template>
<script>
//     import Header from './components/Header.vue'
// import Footer from './components/Footer.vue'
export default {
    data() {
        return {
            //
        }
    },
    // components: {
    //     Header,
    //     Footer,
    // },
    created() {
        
    }

}

</script>
<style type="text/css">
.btn-warning {
    color: #4f4f4f;
    background-color: #cca354;
    border-color: #facd8a;
}

</style>
