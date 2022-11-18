<template>
    <div>
        <Header></Header>
        <div id="appCapsule">
            <div class="section" id="dashboard" style="display: block">
                <div class="row mt-2">
                    <div class="col-6 mt-1">
                        <div class="stat-box">
                            <div class="title">Total Earnings</div>
                            <div class="h6 text-primary">
                                ${{$root.normalNumeral($auth.user().totalEarned)}} </div>
                        </div>
                    </div>
                    <div class="col-6 mt-1">
                        <div class="stat-box " v-if="loading == false">
                            <div class="title">Total Profit</div>
                            <div class="h6 text-primary">
                                ${{$root.normalNumeral(totalProfit)}} </div>
                        </div>
                        <list-loader v-else></list-loader>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="row mt-2">
                    <div v-if="transactions.length > 0" class="card p-2">
                        <small class="text-center mobile">Click the <span class="text-white"
                                style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span> icon for
                            details</small>
                        <hr>
                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="example_length"><label>Show <select
                                                v-model="entries" @change="getTransactions(1)" name="example_length"
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
                                                placeholder="" @change="getTransactions(1)"
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
                                                <th class="text-primary">Date</th>
                                                <th class="text-primary">Amount</th>
                                                <th class="text-primary">Reference</th>
                                                <th class="text-primary">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody v-if="loading == false">

                                            <tr v-for="data in transactions">
                                                <td>{{data.date}}</td>
                                                <td>${{data.amount}}</td>
                                                <td class="text-capitalize">{{data.reference == 'BM' ? 'ROI' : data.reference}}</td>
                                                <td class="pb-0">
                                                    <div :class="{'progress-bar' : true, 'progress-bar-striped' : true, 'progress-bar-animated' : true, 
                                                    'bg-primary' : !data.confirmed, 'bg-success' : data.confirmed}"
                                                        style="width: 100%">
                                                        {{data.confirmed ? 'APPROVED' : 'PENDING'}}
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <list-loader v-else></list-loader>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite">
                                        {{'Showing ' + ((paging.current_page-1) + paging.current_page) + ' to ' +
                                        paging.count * paging.current_page + ' of ' + paging.total +
                                        ' entries'}}</div>
                                </div>
                                <div class="col-sm-12 col-md-7" v-if="entries < paging.total">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                        <ul class="pagination">
                                            <li v-if="paging.current_page > 1" @click.prevent="
                                            getTransactions(
                                            --paging.current_page
                                            )
                                            " class="paginate_button page-item previous" id="example_previous"><a
                                                    href="#" aria-controls="example" data-dt-idx="0" tabindex="0"
                                                    class="page-link">Previous</a></li>
                                            <li v-if="paging" v-for="num in paging.total_pages" :class="{
                                                'page-item': true,
                                                'paginate_button': true,
                                                active:
                                                    num == paging.current_page,
                                            }">
                                                <a href="#" @click.prevent="getTransactions(num)"
                                                    aria-controls="example" data-dt-idx="1" tabindex="0"
                                                    class="page-link">{{ num }}</a>
                                            </li>
                                            <li v-if="
                                            paging.total_pages !=
                                            paging.current_page " class="paginate_button page-item next"
                                                id="example_next"><a href="#" @click.prevent="
                                                    getTransactions(
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
                    <div v-else-if="transactions.length == 0 && loading == false" class="card p-2">
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

        <Footer @popUploaded="displayMessage"></Footer>


    </div>


</template>
<script>
import { ContentLoader, ListLoader } from "vue-content-loader";
export default {
    data() {
        return {
            key: 0, error: undefined,
            transactions: [],
            entries: 8,
            search: undefined,
            loading: false,
            paging: undefined,
            current_page: 1,
            totalProfit:0
        }
    },
    watch: {
        error() {
            setTimeout(() => { this.error = '' }, 15000);
        }
    },
    mounted() {
        this.$root.dashboard_header_page_title = "Profit History"
        setTimeout(() => { window.scrollTo(0, 0); }, 1000);
        this.getTransactions(this.current_page)
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
        getTransactions(page) {
            this.$root.loader('show')
            this.loading = true
            this.current_page = page;
            var searchQuery = this.search ? "&email=" + this.search : "";
            let form = new Form()
            form.get("auth/transactions?user_id=" + this.$auth.user().id + '&page=' + page + searchQuery + "&pageSize=" +
                this.entries + "&type=profit")
                .then(response => {
                    this.$root.loader('hide')
                    this.transactions = response.data.data.item
                    this.totalProfit = this.transactions.sum('amount')
                    this.loading = false
                    this.paging = response.data.data.pagination

                })
                .catch(error => {
                    this.loading = false
                    this.$root.loader('hide')
                    this.error = error.response
                    console.log(error.response)
                })
        },
        displayMessage(msg) {
            this.$root.alert('success', ' ', msg.message)
            setTimeout(() => { this.$root.scrollUp() }, 1000);
        },
        createDate(createDate) {
            return moment(createDate).format("MMM Do YYYY")
        },
        myFilter(list, fromDate, toDate) {
            var data = [];

            if (fromDate) {
                data = list.filter((item) => {
                    var keys = []
                    keys.push(item.created_at)
                    var boolean = false
                    if (item == undefined) {
                        return false
                    }
                    var bool = keys.forEach((item) => {
                        var created_at = new moment(item)
                        var fromDate = this.from != '' ? new moment(this.from.toString()) : new moment().subtract(1, 'd')
                        var toDate = this.to != '' ? new moment(this.to.toString()).add(1, 'd') : new moment().add(1, 'd')
                        if (created_at != null && fromDate <= created_at && toDate >= created_at) {
                            boolean = true
                        }

                    })
                    return boolean

                })
            } else {
                data = list;
            }
            return data;
        },

    }
}

</script>
<style scoped>

</style>
