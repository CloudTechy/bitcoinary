<script>
export default {
    data() {
        return {
            company: this.domain,
            domain: this.$root.appDomain,
            team: undefined,
        };
    },
    beforeMount() {
        var js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/jquery.min.js"
        );
        js.setAttribute("async", true);
        document.body.appendChild(js);
        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/bootstrap.min.js"
        );
        document.body.appendChild(js);
    },
    created() {
        this.getTeam();
    },
    methods: {
        getTeam() {
            this.$http
                .get("/auth/teamss")
                .then((response) => {
                    this.team = response.data.data.item;
                })
                .catch((error) => {
                    console.log(error.response);
                });
        },
    },
};
</script>
<template>
    <div class="page-wraper">
        <HomeHeader :domain="domain"></HomeHeader>
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->

            <section
                aria-label="section"
                data-bgimage="url(assets/images/home/bg2.jpg) top"
                class="text-light"
                id="subheader"
            >
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="spacer-single"></div>
                                <h1 style="color: #ffcc29">
                                    Our business-building experience <br />
                                    is as wide as it is deep.
                                </h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            <section aria-label="section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="theme-row-zero">
                                <center>
                                    <h2
                                        style="
                                            text-align: center;
                                            color: #377dff;
                                        "
                                    >
                                        Executive Leadership
                                    </h2>
                                </center>
                                <p style="text-align: center">
                                    <span
                                        style="color: #1ca94b; font-weight: 600"
                                    >
                                        <span
                                            style="
                                                font-size: 24px;
                                                line-height: 1.2;
                                            "
                                            >Our leadership team is comprised of
                                            experienced business builders who
                                            carry deep industry expertise across
                                            construction, infrastructure,
                                            finance, data centres, digital
                                            assets, technology and global energy
                                            markets.</span
                                        >
                                    </span>
                                </p>
                            </div>

                            <div
                                :key="person.id"
                                v-for="person in team"
                                v-if="person.intro != null"
                                class="row"
                            >
                                <hr />
                                <div class="col-md-3">
                                    <img
                                        :src="$root.basepath +  '/images/team/' +person.image "
                                        class="rounded-circle"
                                        alt="Juan"
                                        width="180px"
                                        height="180px"
                                    />
                                </div>
                                <div class="col-md-9">
                                    <h3 style="color: #377dff">
                                        {{ person.name }} <br /><small>{{
                                            person.designation
                                        }}</small>
                                    </h3>
                                    <p>{{ person.intro }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- content close -->
        <HomeFooter :company="company" :domain="domain"></HomeFooter>
    </div>
</template>

<style scoped>
.whited {
    color: #fff;
}
.orange {
    color: #ffcc29;
}
</style>
