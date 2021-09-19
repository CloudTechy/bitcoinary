import VueRouter from 'vue-router'

// Pages
import Home from './pages/Home'
import NotFound from './pages/Error404.vue'
import Terms from './pages/terms.vue'
import About from './pages/About'
import GetStarted from './pages/getStarted'
import Faq from './pages/faq'
import InvestmentPlans from './pages/investmentPlans'
import Partners from './pages/partners'
import News from './pages/news'
import DataCenter from './pages/DataCenter'
import Support from './pages/Support'
import ConfirmRegistration from './pages/ConfirmRegistration'
import Register from './pages/Register'
import Login from './pages/Login'
import CheckEmail from './pages/CheckEmail'
import ResetPassword from './pages/ResetPasswordForm'
import ForgotPassword from './pages/ForgotPassword'
import Dashboard from './pages/user/Dashboard'
import Deposit from './pages/user/Deposit'
import Withdraw from './pages/user/Withdraw'
import Users from './pages/admin/Users'
import UserView from './pages/admin/UserView'
import UserEdit from './pages/admin/Edit'
import Deposits from './pages/admin/Deposits'
import Withdrawals from './pages/admin/Withdrawals'
import Subscriptions from './pages/admin/Subscriptions'
import AdminDashboard from './pages/admin/Dashboard'
import Settings from './pages/admin/AdminSettings'
import WithdrawReport from './pages/user/reports/WithdrawalReport'
import DepositReport from './pages/user/reports/DepositReport'
import UserPlans from './pages/user/reports/DepositReport'
import referralReport from './pages/user/reports/ReferralReport'
import TransactionReport from './pages/user/reports/TransactionReport'
import Setting from './pages/user/Setting'
import Security from './pages/user/Security'

// Routes
const routes = [{
        path: '/',
        name: 'home',
        component: Home,
        meta: {
            auth: undefined,
            title: 'Home',
        }
    },
    {
        path: '/404',
        name: 'NotFound',
        component: Home,
        meta: {
            auth: undefined,
            title: 'Not Found',
        }
    },
    {
        path: '/terms',
        name: 'Terms',
        component: Terms,
        meta: {
            auth: undefined,
            title: 'Terms',
        }
    },
    {
        path: '/about',
        name: 'about',
        component: About,
        meta: {
            auth: undefined,
            title: 'About',
        }
    },
    {
        path: '/checkEmail',
        name: 'checkEmail',
        component: CheckEmail,
        meta: {
            auth: undefined,
            title: 'Check Email',
        }
    },
    {
        path: '/confirm-registration',
        name: 'confirmRegistration',
        component: ConfirmRegistration,
        meta: {
            auth: true,
            title: 'Confirm Registration',
        }
    },
    {
        path: '/news',
        name: 'news',
        component: News,
        meta: {
            auth: undefined,
            title: 'News',
        }
    },
    {
        path: '/partners',
        name: 'partners',
        component: Partners,
        meta: {
            auth: undefined,
            title: 'Partners',
        }
    },
    {
        path: '/investmentPlans',
        name: 'investmentPlans',
        component: InvestmentPlans,
        meta: {
            auth: undefined,
            title: 'Investment Plans',
        }
    },
    {
        path: '/dataCenter',
        name: 'dataCenter',
        component: DataCenter,
        meta: {
            auth: undefined,
            title: 'Data Center',
        }
    },
    {
        path: '/getStarted',
        name: 'getStarted',
        component: GetStarted,
        meta: {
            auth: undefined,
            title: 'Get Started',
        }
    },
    {
        path: '/faq',
        name: 'faq',
        component: Faq,
        meta: {
            auth: undefined,
            title: 'Faq',
        }
    },
    {
        path: '/support',
        name: 'support',
        component: Support,
        meta: {
            auth: true,
            title: 'Support',
        }
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: {
            auth: false,
            title: 'Register',
        }
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        meta: {
            auth: false,
            title: 'Login',
        }
    },
    {
        path: '/reset_password',
        name: 'resetPassword',
        component: ResetPassword,
        meta: {
            auth: false,
            title: 'Reset Password',
        }
    },
    {
        path: '/forgot_password',
        name: 'forgotPassword',
        component: ForgotPassword,
        meta: {
            auth: false,
            title: 'Forgot Password',
        }
    },
    // USER ROUTES
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard,
        meta: {
            auth: true,
            adminAuth: false,
            requiresAuth: false,
            title: 'User Dashboard',
        }
    },
    {
        path: '/dashboard/deposit',
        name: 'deposit',
        component: Deposit,
        meta: {
            auth: true,
            adminAuth: false,
            title: 'User Deposit',
        }
    },
    {
        path: '/dashboard/withdraw',
        name: 'withdraw',
        component: Withdraw,
        meta: {
            auth: true,
            adminAuth: false,
            title: 'User Withdraw',
        }
    },
    {
        path: '/dashboard/settings',
        name: 'Setting',
        component: Setting,
        meta: {
            auth: true,
            adminAuth: false,
            title: 'User Setting',
        }
    },
    {
        path: '/dashboard/security',
        name: 'security',
        component: Security,
        meta: {
            auth: true,
            adminAuth: false,
            title: 'User Security',
        }
    },
    {
        path: '/dashboard/withdrawal-report',
        name: 'WithdrawReport',
        component: WithdrawReport,
        meta: {
            auth: true,
            adminAuth: false,
            title: 'User WithdrawReport',
        }
    },
    {
        path: '/dashboard/report/deposit',
        name: 'depositReport',
        component: DepositReport,
        meta: {
            auth: true,
            adminAuth: false,
            title: 'User Plans',
        }
    },
    {
        path: '/dashboard/plans',
        name: 'UserPlans',
        component: UserPlans,
        meta: {
            auth: true,
            adminAuth: false,
            title: 'User Plans',
        }
    },
    {
        path: '/dashboard/report/transaction',
        name: 'transactionReport',
        component: TransactionReport,
        meta: {
            auth: true,
            adminAuth: false,
            title: 'User TransactionReport',
        }
    },
    {
        path: '/dashboard/referral',
        name: 'ReferralReport',
        component: referralReport,
        meta: {
            auth: true,
            adminAuth: false,
            title: 'User ReferralReport',
        }
    },
    // ADMIN ROUTES
    {
        path: '/admin/dashboard',
        name: 'adminDashboard',
        component: AdminDashboard,
        meta: {
            auth: true,
            adminAuth: true,
            // requiresAuth: false,
            title: 'Admin Dashboard',
        }
    },
    {
        path: '/admin/dashboard/users',
        name: 'users',
        component: Users,
        meta: {
            auth: true,
            adminAuth: true,
            title: 'Admin Users',
        }
    },
    {
        path: '/admin/dashboard/settings',
        name: 'adminSetting',
        component: Settings,
        meta: {
            auth: true,
            adminAuth: true,
            title: 'Admin Settings',
        }
    },
    {
        path: '/admin/dashboard/user-view',
        name: 'user-view',
        component: UserView,
        meta: {
            auth: true,
            adminAuth: true,
            title: 'Admin user preview',
        }
    },
    {
        path: '/admin/dashboard/user-edit',
        name: 'user-edit',
        component: UserEdit,
        meta: {
            auth: true,
            adminAuth: true,
            title: 'Admin Edit user',
        }
    },
    {
        path: '/admin/dashboard/deposits',
        name: 'deposits',
        component: Deposits,
        meta: {
            auth: true,
            adminAuth: true,
            title: 'Admin Deposits',
        }
    },
    {
        path: '/admin/dashboard/subscriptions',
        name: 'subscriptions',
        component: Subscriptions,
        meta: {
            auth: true,
            adminAuth: true,
            title: 'Admin Subscriptions',
        }
    },
    {
        path: '/admin/dashboard/withdrawals',
        name: 'withdrawals',
        component: Withdrawals,
        meta: {
            auth: true,
            adminAuth: true,
            title: 'Admin Withdrawals',
        }
    },

]
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
