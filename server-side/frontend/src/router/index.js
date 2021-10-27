import { createRouter, createWebHistory } from 'vue-router';

// Page
import Login from '../views/Login.vue';

// Layout
import AuthLayout from '../views/layouts/AuthLayout.vue';

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
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
