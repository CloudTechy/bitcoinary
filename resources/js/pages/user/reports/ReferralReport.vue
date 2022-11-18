<template>
    <div>
        <Header></Header>
        <div id="appCapsule">
            <div class="section">
                <div class="row mt-2">
                    <div class="stat-box">
                        <h4 class="text-primary font-weight-bold">Referral Link</h4>
                        <div class="title">
                            Get Bonus when someone register on West Exchange with your referral link
                            <hr>
                            <small class="text-primary">
                                {{$root.referralLink}} </small>
            
                            <div class="d-flex pt-1">
                                <button @click="
                                            $root.alert(
                                                'success',
                                                ' ',
                                                'copied'
                                            )" class="clip btn btn-sm btn-secondary shadowed" v-clipboard="$root.referralLink"><i
                                        class="fas fa-copy"></i>&nbsp;Copy Link</button>
                                <span>&nbsp;</span>
                            </div>
                            <hr>
                            <a :href="'whatsapp://send?text=' + $root.referralLink "><i class="fab fa-whatsapp"
                                    style="color: #35a406; font-size: 30px"></i></a>&nbsp;
                            <a :href="'https://t.me/share/url?url='+ $root.referralLink + '&text=' + $auth.user().names">
                                <i class="fab fa-telegram" style="color: #0088CC; font-size: 27px"></i></a>&nbsp;
                            <a :href="'https://twitter.com/intent/tweet?url=' + $root.referralLink "><i class="fab fa-twitter"
                                    style="color: #1DA1F2; font-size: 30px"></i></a>&nbsp;
                            <a :href="'https://www.facebook.com/sharer/sharer.php?u='+ $root.referralLink"><i
                                    class="fab fa-facebook-square" style="color: #3b5998; font-size: 30px"></i></a><br><span>Share
                                Link</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section">
                <div class="row mt-2">
                    <div v-if="referrals.length > 0" class="card p-2">
                        <small class="text-center mobile">Click the <span class="text-white"
                                style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span> icon for
                            details</small>
                        <hr>
                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="example_length"><label>Show <select
                                                v-model="entries" @change="getReferrals(1)" name="example_length"
                                                aria-controls="example" class="form-select form-select-sm">
                                                <option value="10">8</option>
                                                <option value="25">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> Entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="example_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" v-model="search" class="form-control form-control-sm"
                                                placeholder="" @change="getReferrals(1)"
                                                aria-controls="example"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">

                                    <table id="example"
                                        class="table table-striped table-bordered dt-responsive nowrap table-condensed">
                                        <thead class="text-primary">
                                            <small class="text-center mobile">Click the <span class="text-white"
                                                    style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span>
                                                icon for details</small>
                                            <hr>
                                            <tr>
                                                <th class="text-primary">Date Registered</th>
                                                <th class="text-primary">Name</th>
                                                <th class="text-primary">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody v-if = "loading == false" >

                                            <tr v-for="data in referrals">
                                                <td>{{data.created_at}}</td>
                                                <td class="text-capitalize">{{data.names}}</td>
                                                <td class="text-lowercase">{{data.email}}</td>
                                            </tr>
                                        </tbody>
                                        <list-loader v-else></list-loader>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite">
                                        {{'Showing ' + ((paging.current_page-1) + paging.current_page) + ' to ' + paging.count * paging.current_page + ' of ' + paging.total +
                                        ' entries'}}</div>
                                </div>
                                <div class="col-sm-12 col-md-7"  v-if="entries < paging.total">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                        <ul class="pagination">
                                            <li  v-if="paging.current_page > 1" @click.prevent="
                                            getReferrals(
                                            --paging.current_page
                                            )
                                            " class="paginate_button page-item previous"
                                                id="example_previous"><a href="#" aria-controls="example"
                                                    data-dt-idx="0" tabindex="0"
                                                    class="page-link">Previous</a></li>
                                            <li v-if="paging" v-for="num in paging.total_pages" :class="{
                                                'page-item': true,
                                                'paginate_button': true,
                                                active:
                                                    num == paging.current_page,
                                            }">
                                            <a href="#"  @click.prevent="getReferrals(num)"
                                                    aria-controls="example" data-dt-idx="1" tabindex="0"
                                                    class="page-link">{{ num }}</a></li>
                                            <li v-if="
                                            paging.total_pages !=
                                            paging.current_page " class="paginate_button page-item next" id="example_next"><a
                                                    href="#"  @click.prevent="
                                                        getReferrals(
                                                            ++paging.current_page
                                                        )
                                                    " aria-controls="example" data-dt-idx="2" tabindex="0"
                                                    class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-else-if="referrals.length == 0 && loading == false" class="card p-2">
                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-body" align="center">
                                        <i class="fa fa-exclamation-triangle text-primary fa-2x"></i> <br>
                                        <strong>No Records Found!</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <list-loader v-else></list-loader>
                </div>
            </div>
           
        </div>


        <br><br>

        <Footer  @popUploaded="displayMessage"></Footer>


    </div>


</template>
<script>
import { ContentLoader, ListLoader } from "vue-content-loader";
export default {
    data() {
        return {
            key: 0, error: undefined,
            referrals: [],
            entries: 8,
            search: undefined,
            loading: false,
            paging: undefined,
            current_page: 1,
        }
    },
    watch: {
        error() {
            setTimeout(() => { this.error = '' }, 15000);
        }
    },
    mounted() {
        this.$root.dashboard_header_page_title = "Downlines"
        window.scrollTo(0, 0);
        this.getReferrals(this.current_page)
    },
    created() {
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
            this.$root.basepath + "/assets/js/home/dashboard/jquery-3.2.1.slim.min.js"
        );
        js.setAttribute("async", true);
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/bootstrap.min.js"
        );
        document.body.appendChild(js);

        js = document.createElement("script");
        js.setAttribute(
            "src",
            this.$root.basepath + "/assets/js/home/bootstrap.bundle.min.js"
        );
        document.body.appendChild(js);
    },
    beforeRouteEnter(to, from, next) {
        next(vm => {
            vm.$root.loader('show')

            setTimeout(() => { vm.$root.loader('hide') }, 2000);
        })
    },
    components: {
        ContentLoader,
        ListLoader,
    },
    methods: {
        getReferrals(page) {
            this.loading = true
            this.current_page = page;
            var searchQuery = this.search ? "&email=" + this.search : "";
            var form = new Form()
            form.get("auth/users?referral=" + this.$auth.user().username + '&page=' + page + searchQuery + "&pageSize=" +
                this.entries)
                .then(response => {
                    this.$root.loader('hide')
                    this.loading = false
                    this.referrals = response.data.data.item
                    this.paging = response.data.data.pagination
                })
                .catch(error => {
                    this.$root.loader('hide')
                    this.loading = false
                    this.error = error.response
                    console.log(error.response)
                })
        },
        displayMessage(msg) {
            this.$root.alert('success', ' ', msg.message)
            setTimeout(() => { this.$root.scrollUp() }, 1000);
        },

    }
}

</script>
<style scoped>
</style>
