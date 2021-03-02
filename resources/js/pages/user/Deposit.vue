<template>
    <div class="page-wrapper">
        <section class="inner-hero bg_img" :style="'background:url('+ $root.basepath +'/images/bg/bg-1.jpg)'">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Deposit</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/dashboard">Dashoard</a></li>
                            <li>Deposit</li>
                        </ul>
                        <h2 class="page-title pt-4"><span class="base--color">Welcome, </span> {{$auth.user().username}}</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="pt-60 pb-60">
            <div class="container">
                <component @success = 'success' :success = "message" :plan = "selectedPlan" @changeComponent = "changeComponent"  class = "m-0 p-0" :is="componentName"></component>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            componentName : 'DepositPlan',
            selectedPlan : '',
            message : ''
        }
    },
    mounted() {
        window.scrollTo(0,200)

    },
    watch : {
        message(){
            setTimeout(() => {this.message = ''}, 3000);
        },
    },
    computed: {
    },
    methods: {
        changeComponent(component,plan='') {
            this.componentName = component
            this.selectedPlan = plan
        },
        success(msg) {
            this.message = msg
            this.componentName = 'DepositPlan'
        }
    }
}

</script>
<style>
    /*table.stat tbody td {
    font-size: 15px;
    line-height: 24px;
    padding: 12px 8px;
     border-top: 1px solid rgba(255,255,255,0.10); 
}*/
</style>
