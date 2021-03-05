require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', require('./components/header.vue').default);
Vue.component('footer-component', require('./components/footer.vue').default);

import IndexComponent from './profile/index.vue';
import tampilkan from './profile/show.vue';
import CreateComponent from './profile/create.vue';
import EditComponent from './profile/edit.vue';
import dashboard from './dashboard.vue';
import notfound from './pages/notfound.vue';

const routes = [
    {
        name: 'dashboard',
        path: '/dashboard',
        component: dashboard
    },
    {
        name: 'show',
        path: '/profile/:id',
        component: tampilkan
    },
    {
        name: 'profile',
        path: '/profile',
        component: IndexComponent
    },
    {
        name: 'create',
        path: '/create',
        component: CreateComponent
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditComponent
    },
    {
        path: '*',
        component: notfound
    }
];

const router = new VueRouter({
    linkActiveClass: 'active',
    mode: 'history',
    routes: routes
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');