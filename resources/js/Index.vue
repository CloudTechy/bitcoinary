<template>
    <div class="" style="">
        
        <DashboardHeader v-if  = "$route.name == 'dashboard'"></DashboardHeader>
        <DashboardHeader v-else-if = "$route.name == 'withdraw'"></DashboardHeader>
        <DashboardHeader v-else-if = "$route.name == 'deposit'"></DashboardHeader>
        <DashboardHeader v-else-if = "$route.name == 'UserPlans'"></DashboardHeader>
        <DashboardHeader v-else-if = "$route.name == 'withdrawReport'"></DashboardHeader>
        <AdminDashboardHeader v-else-if = "$route.name == 'adminDashboard'"></AdminDashboardHeader>
        <Header v-else class="p-0 m-0"></Header>
        <div style="min-height: 370px;  position: relative;">
            <router-view></router-view>
        </div>
        <Footer></Footer>
    </div>
</template>
<script>
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
export default {
    data() {
        return {
            //
        }
    },
    components: {
        Header,
        Footer,
    },
    created() {
        
    }

}

</script>
