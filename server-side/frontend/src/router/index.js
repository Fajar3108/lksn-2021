import { createRouter, createWebHistory } from 'vue-router';

// Page
import Dashboard from '../views/Dashboard.vue';
import CreateConsultation from '../views/consultations/CreateConsultation.vue';
import VaccinationsSpotList from '../views/vaccinations-spot/VaccinationsSpotList.vue';

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
      {
        path: 'consultations/create',
        component: CreateConsultation,
      },
      {
        path: '/vaccinations',
        component: VaccinationsSpotList,
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
