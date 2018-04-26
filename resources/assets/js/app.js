
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)



Vue.component('Myheader', require('./components/Myheader.vue'));
Vue.component('Myfooter', require('./components/Myfooter.vue'));
//Vue.component('Home', require('./components/Home.vue'));
//Vue.component('about', require('./components/about.vue'));
// Vue.component('Add', require('./components/Add.vue'));
// let add=require('./components/Add.vue');



let Myheader=require('./components/Myheader.vue');
let Myfooter=require('./components/Myfooter.vue');
let Home=require('./components/Home.vue');
let about=require('./components/about.vue');

 
const routes=[
{ path:'/Home',component:Home},
{ path:'/about',component:about},

]
const router=new VueRouter({
	mode:'history',
	routes
})

const app = new Vue({
    el: '#app',
    router,
    Components:{Myheader,Myfooter} 
});
