<template>
    <nav class="navbar-wrapper">
            <form class="navbar-search" onsubmit="return false;">
                <button type="submit" class="navbar-search__btn">
                    <i class="las la-search"></i>
                </button>
                <input
                    type="search"
                    name="navbar-search__field"
                    id="navbar-search__field"
                    placeholder="Search..."
                />
                <button type="button" class="navbar-search__close">
                    <i class="las la-times"></i>
                </button>

                <div id="navbar_search_result_area">
                    <ul class="navbar_search_result"></ul>
                </div>
            </form>

            <div class="navbar__left">
                <button class="res-sidebar-open-btn">
                    <i class="las la-bars"></i>
                </button>
                <button type="button" class="fullscreen-btn">
                    <i
                        class="fullscreen-open las la-compress"
                        onclick="openFullscreen();"
                    ></i>
                    <i
                        class="fullscreen-close las la-compress-arrows-alt"
                        onclick="closeFullscreen();"
                    ></i>
                </button>
            </div>

            <div class="navbar__right">
                <ul class="navbar__action-list">
                    <li>
                        <button type="button" class="navbar-search__btn-open">
                            <i class="las la-search"></i>
                        </button>
                    </li>

                    <li class="dropdown">
                        <button
                            type="button"
                            class="primary--layer"
                            data-toggle="dropdown"
                            data-display="static"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <i class="las la-bell text--primary"></i>
                            <span class="pulse--primary"></span>
                        </button>
                        <div
                            class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right"
                        >
                            <div class="dropdown-menu__header">
                                <span class="caption">Notification</span>
                                <p>You have 3 unread notification</p>
                            </div>
                            <div class="dropdown-menu__body">
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/notification/read/3755"
                                    class="dropdown-menu__item"
                                >
                                    <div class="navbar-notifi">
                                        <div
                                            class="navbar-notifi__left bg--green b-radius--rounded"
                                        >
                                            <img
                                                src="https://script.viserlab.com/hyiplab/demo/placeholder-image/350x300"
                                                alt="Profile Image"
                                            />
                                        </div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">
                                                New member registered
                                            </h6>
                                            <span class="time"
                                                ><i class="far fa-clock"></i> 1
                                                hour ago</span
                                            >
                                        </div>
                                    </div>
                                    <!-- navbar-notifi end -->
                                </a>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/notification/read/3754"
                                    class="dropdown-menu__item"
                                >
                                    <div class="navbar-notifi">
                                        <div
                                            class="navbar-notifi__left bg--green b-radius--rounded"
                                        >
                                            <img
                                                src="https://script.viserlab.com/hyiplab/demo/placeholder-image/350x300"
                                                alt="Profile Image"
                                            />
                                        </div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">
                                                New member registered
                                            </h6>
                                            <span class="time"
                                                ><i class="far fa-clock"></i> 1
                                                hour ago</span
                                            >
                                        </div>
                                    </div>
                                    <!-- navbar-notifi end -->
                                </a>
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/notification/read/3753"
                                    class="dropdown-menu__item"
                                >
                                    <div class="navbar-notifi">
                                        <div
                                            class="navbar-notifi__left bg--green b-radius--rounded"
                                        >
                                            <img
                                                src="https://script.viserlab.com/hyiplab/demo/placeholder-image/350x300"
                                                alt="Profile Image"
                                            />
                                        </div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">
                                                $100 invested to Platinum
                                            </h6>
                                            <span class="time"
                                                ><i class="far fa-clock"></i> 4
                                                hours ago</span
                                            >
                                        </div>
                                    </div>
                                    <!-- navbar-notifi end -->
                                </a>
                            </div>
                            <div class="dropdown-menu__footer">
                                <a
                                    href="https://script.viserlab.com/hyiplab/demo/admin/notifications"
                                    class="view-all-message"
                                    >View all notification</a
                                >
                            </div>
                        </div>
                    </li>

                    <li class="dropdown">
                        <button
                            type="button"
                            class=""
                            data-toggle="dropdown"
                            data-display="static"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <span class="navbar-user">
                                <span class="navbar-user__thumb"
                                    ><img
                                        src="https://script.viserlab.com/hyiplab/demo/assets/admin/images/profile/5eea09e65cefb1592396262.jpg"
                                        alt="image"
                                /></span>

                                <span class="navbar-user__info">
                                    <span class="navbar-user__name">admin</span>
                                </span>
                                <span class="icon"
                                    ><i class="las la-chevron-circle-down"></i
                                ></span>
                            </span>
                        </button>
                        <div
                            class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right"
                        >
                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/profile"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2"
                            >
                                <i
                                    class="dropdown-menu__icon las la-user-circle"
                                ></i>
                                <span class="dropdown-menu__caption"
                                    >Profile</span
                                >
                            </a>

                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/password"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2"
                            >
                                <i class="dropdown-menu__icon las la-key"></i>
                                <span class="dropdown-menu__caption"
                                    >Password</span
                                >
                            </a>

                            <a
                                href="https://script.viserlab.com/hyiplab/demo/admin/logout"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2"
                            >
                                <i
                                    class="dropdown-menu__icon las la-sign-out-alt"
                                ></i>
                                <span class="dropdown-menu__caption"
                                    >Logout</span
                                >
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
</template>
<script>
import moment from "moment";

export default {
    data() {
        return {};
    },
    computed: {
        getIp() {
            return this.$auth.user().ip != undefined
                ? this.$auth.user().ip
                : this.$root.ip;
        },
        time() {
            return moment(this.$auth.user().created_at).format("MMM Do YYYY");
        },
    },
   
    methods: {},
};
</script>
<style scoped="">

</style>
