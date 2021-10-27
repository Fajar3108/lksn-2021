import { createRouter, createWebHistory } from 'vue-router';

// Page
import Dashboard from '../views/Dashboard.vue';

// Layout
import AuthLayout from '../views/layouts/AuthLayout.vue';
import MainLayout from '../views/layouts/MainLayout.vue';

const routes = [
  {
    path: '/login',
    component: AuthLayout,
  },
  {
    path: '/',
    component: MainLayout,
    children: [
      {
        path: 'dashboard',
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
