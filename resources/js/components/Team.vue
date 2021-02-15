<template>
	<section class="pt-120 pb-120 bg_img"  :style="'background:url('+  $root.basepath + '/images/bg/bg-5.jpg )'" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">Our Expert</span> <b class="base--color">Team Members</b></h2>
                            <p>We have team of experts whose sole duty is to initiate profitable and well strategized plans that will accrue massive profit. </p>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <div class="row justify-content-center mb-none-30">
                    <div :key = "team.id" v-for = "team in data" class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="team-card">
                            <div class="team-card__thumb">
                                <img :src="$root.basepath + '/images/investor/'+ team.image" alt="image">
                            </div>
                            <div class="team-card__content">
                                <h4 class="name mb-1">{{team.name}}</h4>
                                <span class="designation">{{team.designation}}</span>
                            </div>
                        </div>
                        <!-- team-card end -->
                    </div>
                    
                </div>
            </div>
        </section>
</template>
<script>
export default {
    data() {
        return {
        	
        }
           
    },
    computed: {},
    created(){
    	
    },
    props: ['data'],
    // components: { Menu },
    methods: {
    },

}

</script>
<style>
.slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
</style>