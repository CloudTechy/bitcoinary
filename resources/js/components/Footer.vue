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
    <!-- footer section start -->
    <!-- <footer class="footer bg_img" :data-background="$root.basepath + '/assets/images/bg/bg-7.jpg'">
        <div class="footer__top">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <a style="max-height: 200px;" href="#" class="footer-logo"><img :src="$root.basepath + '/assets/images/logo2.png'" alt="image"></a>
                        <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-4">
                            <li><a href="/">Home</a></li>
                            <li><a href="/terms#privacy">Privacy & Policy</a></li>
                            <li><a href="/terms">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-lg-right text-center">
                        <p> © {{fullYear}} <a class="base--color" href="/">  <span>{{company}}</span>. </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="facebook"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="twitter"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-p"></i></a></li>
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->

 <footer>
    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="Profile.php" class="item">
            <div class="col">
                <i class="fas fa-user-cog fa-2x"></i>
                <strong>Settings</strong>
            </div>
        </a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#deposit" class="item">
            <div class="col">
                <i class="fas fa-credit-card fa-2x"></i>
                <strong>Add Funds</strong>
            </div>
        </a>
    
        <a href="index.php" class="item active">
            <div class="col">
                <i class="fas fa-house-user fa-2x"></i>
                <strong>Dashboard</strong>
            </div>
        </a>
        <a data-bs-toggle="modal" data-bs-target="#withdraw" class="item">
            <div class="col">
                <i class="fas fa-wallet fa-2x"></i>
                <strong>Withdraw</strong>
            </div>
        </a>
        <a href="Support.php" class="item">
            <div class="col">
                <i class="fas fa-comment-dots fa-2x"></i>
                <strong>Support</strong>
            </div>
        </a>
    </div>
   
    <!-- * App Bottom Menu -->
 </footer>

</template>

<style scoped="">

</style>
