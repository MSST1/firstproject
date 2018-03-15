import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import AdminExample from './components/AdminExample';
import SubExample from './components/SubExample';
const routes = [
  {
    path: '',
    component: SubExample,
    name: 'home',
  },
  {
    path: '/users',
    component: AdminExample,
    name: 'users'
  }
];
export const router = new VueRouter({
  mode: 'history',
  base: '/admin/',
  routes,
});
