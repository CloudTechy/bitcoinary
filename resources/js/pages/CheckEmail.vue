<template>
    <div class="page-wrapper">
        <Header></Header>

        <div class="row page-title m-3 p-2">
            <div class="col-12 col-lg-8 container">
                <h1>Email confirmation link sent</h1>
            </div>
        </div>
        <!--start main container-->
        <section class="main-container"  :style="'background:url('+ $root.basepath +'/img/home.png) no-repeat 0 0;'">
            <div class="main">
                <div class="container">
                    <div class="wrapper">
                        <div class="text-center">
                            <div class="success-group">
                                <h4 class="p-2 m-2">Verify your email address</h4>
                                <p class="w-note m-2 p-3">We thank you for showing interest in joining our platform, you are now an email away in becoming an official member of  <span>{{$root.appName}}</span> </p>
                                <span class="p-2">An email confirmation link has been sent to your email</span>
                            </div>
                            <div class="text-center">
                                <router-link to="/login" class="btn btn-default">Login</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <Footer></Footer>
    </div>
</template>
<script>
export default {
    data() {
        return {
           
        }
    },
    mounted() {
        // this.$router.push({ name: 'login', params: { successRegistrationRedirect: true } }) 
        if (this.$auth.check()) { 
            this.$auth.logout()
        }
    },
}

</script>
