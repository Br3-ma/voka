import Home from './components/frontend/pages/welcome.vue';
import About from './components/frontend/pages/welcome.vue';
import Contact from './components/frontend/pages/welcome.vue';

const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
  { path: '/contact', component: Contact },
];

export default routes;