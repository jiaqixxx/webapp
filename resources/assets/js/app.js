
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
Vue.use(require('vuetify'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('login-form', require('./components/LoginForm.vue'));
const app = new Vue({
    el: '#app'
});
/*
// This is for set new element
new Vue({
    components: {
        'login-form': require('./components/LoginForm.vue')
    }
});
*/