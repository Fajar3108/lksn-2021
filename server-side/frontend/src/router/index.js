import { createRouter, createWebHistory } from 'vue-router';

// Page
import Login from '../views/Login.vue';
import Dashboard from '../views/Dashboard.vue';

// Layout
import AuthLayout from '../views/layouts/AuthLayout.vue';
import MainLayout from '../views/layouts/MainLayout.vue';

const routes = [
  {
    path: '/',
    component: AuthLayout,
    children: [
      {
        path: '',
        component: Login,
      },
    ],
  },
  {
    path: '/dashboard',
    component: MainLayout,
    children: [
      {
        path: '',
        component: Dashboard,
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
