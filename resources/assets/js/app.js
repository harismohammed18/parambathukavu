
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

//vue clip
import VueClip from 'vue-clip';

Vue.use(VueClip);
//vee validator
import VeeValidate from 'vee-validate';

Vue.use(VeeValidate);
//vmodel for model
import VModal from 'vue-js-modal';

Vue.use(VModal);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('gallery-component', require('./components/Gallery.vue'));
Vue.component('gallery', require('./components/Galleryopen.vue'));
Vue.component('vazhipadu', require('./components/Vazhipadu.vue'));
Vue.component('poojaas', require('./components/Poojaas.vue'));
const app = new Vue({
    el: '#app'
});
