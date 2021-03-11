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
import Deposits from './pages/admin/Deposits'
import Withdrawals from './pages/admin/Withdrawals'
import Subscriptions from './pages/admin/Subscriptions'
import AdminDashboard from './pages/admin/Dashboard'
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
            title: 'Home - Bitcoinary Mint',
        }
    },
    {
        path: '/404',
        name: 'NotFound',
        component: NotFound,
        meta: {
            auth: undefined,
            title: 'Not Found - Bitcoinary Mint',
        }
    },
    {
        path: '/terms',
        name: 'Terms',
        component: Terms,
        meta: {
            auth: undefined,
            title: 'Terms - Bitcoinary Mint',
        }
    },
    {
        path: '/about',
        name: 'about',
        component: About,
        meta: {
            auth: undefined,
            title: 'About - Bitcoinary Mint',
        }
    },
    {
        path: '/checkEmail',
        name: 'checkEmail',
        component: CheckEmail,
        meta: {
            auth: undefined,
            title: 'Check Email - Bitcoinary Mint',
        }
    },
    {
        path: '/confirm-registration',
        name: 'confirmRegistration',
        component: ConfirmRegistration,
        meta: {
            auth: true,
            title: 'Confirm Registration - Bitcoinary Mint',
        }
    },
    {
        path: '/news',
        name: 'news',
        component: News,
        meta: {
            auth: undefined,
            title: 'News - Bitcoinary Mint',
        }
    },
    {
        path: '/partners',
        name: 'partners',
        component: Partners,
        meta: {
            auth: undefined,
            title: 'Partners - Bitcoinary Mint',
        }
    },
    {
        path: '/investmentPlans',
        name: 'investmentPlans',
        component: InvestmentPlans,
        meta: {
            auth: undefined,
            title: 'Investment Plans - Bitcoinary Mint',
        }
    },
    {
        path: '/dataCenter',
        name: 'dataCenter',
        component: DataCenter,
        meta: {
            auth: undefined,
            title: 'Data Center - Bitcoinary Mint',
        }
    },
    {
        path: '/getStarted',
        name: 'getStarted',
        component: GetStarted,
        meta: {
            auth: undefined,
            title: 'Get Started - Bitcoinary Mint',
        }
    },
    {
        path: '/faq',
        name: 'faq',
        component: Faq,
        meta: {
            auth: undefined,
            title: 'Faq - Bitcoinary Mint',
        }
    },
    {
        path: '/support',
        name: 'support',
        component: Support,
        meta: {
            auth: true,
            title: 'Support - Bitcoinary Mint',
        }
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: {
            auth: false,
            title: 'Register - Bitcoinary Mint',
        }
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        meta: {
            auth: false,
            title: 'Login - Bitcoinary Mint',
        }
    },
    {
        path: '/reset_password',
        name: 'resetPassword',
        component: ResetPassword,
        meta: {
            auth: false,
            title: 'Reset Password - Bitcoinary Mint',
        }
    },
    {
        path: '/forgot_password',
        name: 'forgotPassword',
        component: ForgotPassword,
        meta: {
            auth: false,
            title: 'Forgot Password - Bitcoinary Mint',
        }
    },
    // USER ROUTES
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard,
        meta: {
            auth: true,
            title: 'User Dashboard - Bitcoinary Mint',
        }
    },
    {
        path: '/dashboard/deposit',
        name: 'deposit',
        component: Deposit,
        meta: {
            auth: true,
            title: 'User Deposit - Bitcoinary Mint',
        }
    },
    {
        path: '/dashboard/withdraw',
        name: 'withdraw',
        component: Withdraw,
        meta: {
            auth: true,
            title: 'User Withdraw - Bitcoinary Mint',
        }
    },
    {
        path: '/dashboard/settings',
        name: 'Setting',
        component: Setting,
        meta: {
            auth: true,
            title: 'User Setting - Bitcoinary Mint',
        }
    },
    {
        path: '/dashboard/security',
        name: 'security',
        component: Security,
        meta: {
            auth: true,
            title: 'User Security - Bitcoinary Mint',
        }
    },
    {
        path: '/dashboard/withdrawal-report',
        name: 'WithdrawReport',
        component: WithdrawReport,
        meta: {
            auth: true,
            title: 'User WithdrawReport - Bitcoinary Mint',
        }
    },
    {
        path: '/dashboard/report/deposit',
        name: 'depositReport',
        component: DepositReport,
        meta: {
            auth: true,
            title: 'User Plans - Bitcoinary Mint',
        }
    },
    {
        path: '/dashboard/plans',
        name: 'UserPlans',
        component: UserPlans,
        meta: {
            auth: true,
            title: 'User Plans - Bitcoinary Mint',
        }
    },
    {
        path: '/dashboard/report/transaction',
        name: 'transactionReport',
        component: TransactionReport,
        meta: {
            auth: true,
            title: 'User TransactionReport - Bitcoinary Mint',
        }
    },
    {
        path: '/dashboard/referral',
        name: 'ReferralReport',
        component: referralReport,
        meta: {
            auth: true,
            title: 'User ReferralReport - Bitcoinary Mint',
        }
    },
    // ADMIN ROUTES
    {
        path: '/admin/dashboard',
        name: 'adminDashboard',
        component: AdminDashboard,
        meta: {
            auth: true,
            AdminAuth: true,
            requiresAuth: true,
            title: 'AdminDashboard - Bitcoinary Mint',
        }
    },
    {
        path: '/admin/dashboard/users',
        name: 'users',
        component: Users,
        meta: {
            auth: true,
            AdminAuth: true,
            title: 'Admin Users - Bitcoinary Mint',
        }
    },
    {
        path: '/admin/dashboard/deposits',
        name: 'deposits',
        component: Deposits,
        meta: {
            auth: true,
            AdminAuth: true,
            title: 'Admin Deposits - Bitcoinary Mint',
        }
    },
    {
        path: '/admin/dashboard/subscriptions',
        name: 'subscriptions',
        component: Subscriptions,
        meta: {
            auth: true,
            AdminAuth: true,
            title: 'Admin Subscriptions - Bitcoinary Mint',
        }
    },
    {
        path: '/admin/dashboard/withdrawals',
        name: 'withdrawals',
        component: Withdrawals,
        meta: {
            auth: true,
            AdminAuth: true,
            title: 'Admin Withdrawals - Bitcoinary Mint',
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
    // beforeEach(to, from, next) {
    //     // const nearestWithTitle = to.matched.slice().reverse().find(r => r.meta && r.meta.title);
    //     // alert(nearestWithTitle)
    //     // if(nearestWithTitle) 
    //     window.document.title = 'to.meta.title';
    //     if (to.meta.AdminAuth) {
    //         const authUser = JSON.parse(window.localStorage.getItem('lbuser'))
    //         if (authUser.isAdmin == true) {
    //             next()
    //         } else {
    //             next({ name: 'dashboard' })
    //         }
    //     } else {
    //         next()
    //     }
    // },


    history: true,
    mode: 'history',
    routes,
})

router.beforeEach((to, from, next) => {
  const nearestWithTitle = to.matched.slice().reverse().find(r => r.meta && r.meta.title);
  if(nearestWithTitle) document.title = nearestWithTitle.meta.title;
  if (to.meta.AdminAuth) {
        const authUser = JSON.parse(window.localStorage.getItem('lbuser'))
        if (authUser.isAdmin == true) {
            next()
        } else {
            next({ name: 'dashboard' })
        }
    } 
  next();
});
export default router
