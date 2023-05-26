import './bootstrap';

import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import app from './components/app.vue';
import NavMenu from './components/layouts/nav.vue';
import routes from './router';

const router = createRouter({
    history: createWebHistory(),
    routes,
});

const site = createApp(app)
site.use(NavMenu)
site.use(router)
site.mount('#app')
// const app = createApp({});
// app.component('welcome-home', Home);
// app.mount('#app');

export default {
    router,
    NavMenu
};