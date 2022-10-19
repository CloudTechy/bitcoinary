import VueRouter from 'vue-router'

// Pages
// import Home from './pages/Home'
// import NotFound from './pages/Error404.vue'
// import Terms from './pages/terms.vue'
// import About from './pages/About'
// import GetStarted from './pages/getStarted'
// import Faq from './pages/faq'
// import InvestmentPlans from './pages/investmentPlans'
// import Partners from './pages/partners'
// import News from './pages/news'
// import DataCenter from './pages/DataCenter'
// import Support from './pages/Support'
// import ConfirmRegistration from './pages/ConfirmRegistration'
// import Register from './pages/Register'
// import Login from './pages/Login'
// import CheckEmail from './pages/CheckEmail'
// import ResetPassword from './pages/ResetPasswordForm'
// import ForgotPassword from './pages/ForgotPassword'

// import Dashboard from './pages/user/Dashboard'
// import Deposit from './pages/user/Deposit'
// import Withdraw from './pages/user/Withdraw'
// import WithdrawReport from './pages/user/reports/WithdrawalReport'
// import DepositReport from './pages/user/reports/DepositReport'
// import UserPlans from './pages/user/reports/DepositReport'
// import referralReport from './pages/user/reports/ReferralReport'
// import TransactionReport from './pages/user/reports/TransactionReport'
// import Setting from './pages/user/Setting'
// import Security from './pages/user/Security'

// import Users from "./pages/admin/Users";
// import UserView from "./pages/admin/Users";
// import UserEdit from "./pages/admin/Edit";
// import Deposits from "./pages/admin/Deposits";
// import Withdrawals from "./pages/admin/Withdrawals";
// import Subscriptions from "./pages/admin/Subscriptions";
// import AdminDashboard from "./pages/admin/Dashboard";
// import Settings from "./pages/admin/AdminSettings";

// Routes
const routes = [
    {
        path: "/",
        name: "home",
        component: () => import("./pages/Home"),
        meta: {
            auth: undefined,
            title: "Home",
        },
    },
    {
        path: "/404",
        name: "NotFound",
        component: () => import("./pages/Error404"),
        meta: {
            auth: undefined,
            title: "Not Found",
        },
    },
    {
        path: "/terms",
        name: "Terms",
        component: () => import("./pages/Error404"),
        meta: {
            auth: undefined,
            title: "Terms",
        },
    },
    {
        path: "/about",
        name: "about",
        component: () => import("./pages/About"),
        meta: {
            auth: undefined,
            title: "About",
        },
    },
    // {
    //     path: "/checkEmail",
    //     name: "checkEmail",
    //     component: CheckEmail,
    //     meta: {
    //         auth: undefined,
    //         title: "Check Email",
    //     },
    // },
    {
        path: "/confirm-registration",
        name: "confirmRegistration",
        component: () => import("./pages/ConfirmRegistration"),
        meta: {
            auth: true,
            title: "Confirm Registration",
        },
    },
    // {
    //     path: "/news",
    //     name: "news",
    //     component: News,
    //     meta: {
    //         auth: undefined,
    //         title: "News",
    //     },
    // },
    // {
    //     path: "/partners",
    //     name: "partners",
    //     component: Partners,
    //     meta: {
    //         auth: undefined,
    //         title: "Partners",
    //     },
    // },
    {
        path: "/plan",
        name: "investmentPlans",
        component: () => import("./pages/investmentPlans"),
        meta: {
            auth: undefined,
            title: "Investment Plans",
        },
    },
    // {
    //     path: "/dataCenter",
    //     name: "dataCenter",
    //     component: DataCenter,
    //     meta: {
    //         auth: undefined,
    //         title: "Data Center",
    //     },
    // },
    // {
    //     path: "/getStarted",
    //     name: "getStarted",
    //     component: GetStarted,
    //     meta: {
    //         auth: undefined,
    //         title: "Get Started",
    //     },
    // },
    {
        path: "/faq",
        name: "faq",
        // component: () => import("./pages/faq"),
        component: () => import("./pages/Error404"),
        meta: {
            auth: undefined,
            title: "Faq",
        },
    },
    {
        path: "/contact",
        name: "support",
        component: () => import("./pages/Support"),
        meta: {
            auth: undefined,
            title: "Support",
        },
    },
    {
        path: "/register",
        name: "register",
        component: () => import("./pages/Register"),
        meta: {
            auth: false,
            title: "Register",
        },
    },
    {
        path: "/login",
        name: "login",
        component: () => import("./pages/Login"),
        meta: {
            auth: false,
            title: "Login",
        },
    },
    {
        path: "/reset_password",
        name: "resetPassword",
        component: () => import("./pages/ResetPasswordForm"),
        meta: {
            auth: false,
            title: "Reset Password",
        },
    },
    {
        path: "/forgot_password",
        name: "forgotPassword",
        component: () => import("./pages/ForgotPassword"),
        meta: {
            auth: false,
            title: "Forgot Password",
        },
    },
    // USER ROUTES
    {
        path: "/dashboard",
        name: "dashboard",
        component: () => import("./pages/user/Dashboard"),
        meta: {
            auth: true,
            adminAuth: false,
            requiresAuth: false,
            title: "User Dashboard",
        },
    },
    {
        path: "/dashboard/deposit",
        name: "deposit",
        component: () => import("./pages/user/Deposit"),
        meta: {
            auth: true,
            adminAuth: false,
            title: "Dashboard | Deposit",
        },
    },
    {
        path: "/dashboard/plans",
        name: "userPlans",
        component: () => import("./pages/user/Plans"),
        meta: {
            auth: true,
            adminAuth: false,
            title: "Dashboard | Plans",
        },
    },
    {
        path: "/dashboard/withdraw",
        name: "withdraw",
        component: () => import("./pages/user/Withdraw"),
        meta: {
            auth: true,
            adminAuth: false,
            title: "User Withdraw",
        },
    },
    {
        path: "/dashboard/settings",
        name: "Setting",
        component: () => import("./pages/user/Setting"),
        meta: {
            auth: true,
            adminAuth: false,
            title: "User Setting",
        },
    },
    {
        path: "/dashboard/security",
        name: "security",
        component: () => import("./pages/user/Security"),
        meta: {
            auth: true,
            adminAuth: false,
            title: "User Security",
        },
    },
    {
        path: "/dashboard/withdrawal-report",
        name: "WithdrawReport",
        component: () => import("./pages/user/reports/WithdrawalReport"),
        meta: {
            auth: true,
            adminAuth: false,
            title: "User WithdrawReport",
        },
    },
    {
        path: "/dashboard/report/deposit",
        name: "depositReport",
        component: () => import("./pages/user/reports/DepositReport"),
        meta: {
            auth: true,
            adminAuth: false,
            title: "User Plans",
        },
    },
    {
        path: "/dashboard/plans",
        name: "UserPlans",
        component: () => import("./pages/user/reports/DepositReport"),
        meta: {
            auth: true,
            adminAuth: false,
            title: "User Plans",
        },
    },
    {
        path: "/dashboard/report/transaction",
        name: "transactionReport",
        component: () => import("./pages/user/reports/TransactionReport"),
        meta: {
            auth: true,
            adminAuth: false,
            title: "User TransactionReport",
        },
    },
    {
        path: "/dashboard/referral",
        name: "ReferralReport",
        component: () => import("./pages/user/reports/ReferralReport"),
        meta: {
            auth: true,
            adminAuth: false,
            title: "User ReferralReport",
        },
    },
    // ADMIN ROUTES
    {
        path: "/admin/dashboard",
        name: "adminDashboard",
        component: () => import("./pages/admin/Dashboard"),
        meta: {
            auth: true,
            adminAuth: true,
            // requiresAuth: false,
            title: "Admin Dashboard",
        },
    },
    {
        path: "/admin/users",
        name: "users",
        component: () => import("./pages/admin/Users"),
        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin user manager",
        },
    },
    {
        path: "/admin/send-email/:id",
        name: "send-email",
        component: () => import("./pages/admin/SendEmail"),
        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin mailer",
        },
    },
    {
        path: "/admin/payment/manual",
        name: "manual_payment",
        component: () => import("./pages/admin/ManualPaymentSetup"),
        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin payment setup",
        },
    },
    {
        path: "/admin/payment/manual/add",
        name: "add_payment",
        component: () => import("./pages/admin/AddManualPayment"),
        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin add new payment method",
        },
    },

    // {
    //     path: "/admin/dashboard/settings",
    //     name: "adminSetting",
    //     component: Settings,
    //     meta: {
    //         auth: true,
    //         adminAuth: true,
    //         title: "Admin Settings",
    //     },
    // },
    {
        path: "/admin/users/:id",
        name: "user-view",
        component: () => import("./pages/admin/UserView"),
        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin user preview",
        },
    },
    // {
    //     path: "/admin/dashboard/user-edit",
    //     name: "user-edit",
    //     component: UserEdit,
    //     meta: {
    //         auth: true,
    //         adminAuth: true,
    //         title: "Admin Edit user",
    //     },
    // },
    {
        path: "/admin/deposits",
        name: "deposits",
        component: () => import("./pages/admin/Deposits"),

        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin Deposits Manager",
        },
    },
    {
        path: "/admin/packages/edit/:id",
        name: "edit_oackage",
        component: () => import("./pages/admin/PackageEdit"),

        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin | Edit Plan",
        },
    },
    {
        path: "/admin/packages/add",
        name: "add_package",
        component: () => import("./pages/admin/PackageAdd"),

        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin | Add Plan",
        },
    },
    {
        path: "/admin/packages",
        name: "packages",
        component: () => import("./pages/admin/Packages"),

        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin Package Manager",
        },
    },
    {
        path: "/admin/deposit/details/:id",
        name: "deposit-details",
        component: () => import("./pages/admin/DepositDetails"),
        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin user preview",
        },
    },

    {
        path: "/admin/withdrawals/details/:id",
        name: "withdrawal-details",
        component: () => import("./pages/admin/WithdrawalDetails"),
        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin user preview",
        },
    },
    // {
    //     path: "/admin/dashboard/subscriptions",
    //     name: "subscriptions",
    //     component: Subscriptions,
    //     meta: {
    //         auth: true,
    //         adminAuth: true,
    //         title: "Admin Subscriptions",
    //     },
    // },
    {
        path: "/admin/withdrawals",
        name: "withdrawals",
        component: () => import("./pages/admin/Withdrawals"),
        meta: {
            auth: true,
            adminAuth: true,
            title: "Admin Withdrawals",
        },
    },
];
const router = new VueRouter({
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    },
    history: true,
    mode: 'history',
    routes,
})

router.beforeEach((to, from, next) => {
    const nearestWithTitle = to.matched.slice().reverse().find(r => r.meta && r.meta.title);

    if (nearestWithTitle) document.title = nearestWithTitle.meta.title;
    const authUser = JSON.parse(window.localStorage.getItem('lbUser'))
    // if (to.meta.auth === true && to.meta.adminAuth && to.meta.adminAuth == true) {
    //     if (authUser && authUser.isAdmin == true) {
    //         next()
    //     } else {
    //         next({ name: 'dashboard' })
    //     }
    // } else if (to.meta.auth === true && to.meta.adminAuth && to.meta.adminAuth == false) {
    //     if (authUser && authUser.isAdmin == true) {
    //         next({ name: 'adminDashboard' })

    //     } else {
    //         next()
    //     }
    // }

    if (to.meta.adminAuth == true) {
        if (authUser && authUser.isAdmin == true) {
            next()
        } else {
            next({ name: 'dashboard' })
        }
    } else if (to.meta.adminAuth == false) {
        if (authUser && authUser.isAdmin == true) {
            next({ name: 'adminDashboard' })

        } else {
            next()
        }
    }
    // next({ name: 'dashboard' })
    else next()
});
export default router
