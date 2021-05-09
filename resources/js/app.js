//require('./bootstrap');
window.Vue = require('vue');

import App from './App.vue';
import store from './store';
// import VueAxios from 'vue-axios';
// import axios from 'axios';
//import {routes} from './routes';
Vue.component('tags',require('./components/tags'));
Vue.component('cart',require('./components/cart'));
Vue.component('catalog',require('./components/catalog'));
Vue.component('cartitems',require('./components/cartItems'));

new Vue({
    el: '#app',
    store: store,
//    render: h => h(App),
})
    //.$mount('#app');
