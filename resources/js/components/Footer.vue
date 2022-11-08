<script>
import moment from "moment";


export default {
    data() {
        return {
            company: this.$root.appName,
        }
    },
    computed: {
        fullYear() {
            return moment().get('year')
        }
    },
    methods: {
        collapse() {
            // this.$refs.collapsibleNavbar.classList.add('in')
        }
    }
}

</script>
<template>
 <footer>
    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <router-link to="/dashboard/profile" class="item">
            <div class="col">
                <i class="fas fa-user-cog fa-2x"></i>
                <strong>Settings</strong>
            </div>
        </router-link>
        <a href="#" data-bs-toggle="modal" data-bs-target="#deposit" class="item">
            <div class="col">
                <i class="fas fa-credit-card fa-2x"></i>
                <strong>Add Funds</strong>
            </div>
        </a>
        <router-link to="/dashboard" class="item">
            <div class="col">
                <i class="fas fa-house-user fa-2x"></i>
                <strong>Dashboard</strong>
            </div>
        </router-link>
        <a href="#" data-bs-toggle="modal" data-bs-target="#withdraw" class="item">
            <div class="col">
                <i class="fas fa-credit-card fa-2x"></i>
                <strong>Withdraw</strong>
            </div>
        </a>
      
        <router-link to="/dashboard/support" class="item">
            <div class="col">
                <i class="fas fa-comment-dots fa-2x"></i>
                <strong>Support</strong>
            </div>         
        </router-link>
    </div>
   
    <!-- * App Bottom Menu -->
 </footer>

</template>

<style scoped="">

</style>
