import { createApp } from 'vue';
import axios from 'axios';
import App from './App.vue';
import router from './router';
import store from './store';

const app = createApp(App).use(store).use(router);

app.config.globalProperties.$axios = axios;
axios.defaults.baseURL = 'https://jakarta-vaccinify.lksn-webtech-2021.zasdaym.my.id/api';

app.mount('#app');
