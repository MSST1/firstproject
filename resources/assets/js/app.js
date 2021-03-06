
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import VueResource from 'vue-resource';
import {router} from './routes.js';

import AdminLayout from './components/AdminLayout.vue';
import AdminExample from './components/AdminExample.vue';
import AdminNavigation from './components/AdminNavigation.vue';

require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueResource);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
    el: '#app',
    components:{AdminLayout, AdminExample, AdminNavigation},
    router

});
