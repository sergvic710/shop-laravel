//require('./bootstrap');
window.Vue = require('vue');

import App from './App.vue';
import store from './store';
// import VueAxios from 'vue-axios';
// import axios from 'axios';
//import {routes} from './routes';

new Vue({
    store: store,
    render: h => h(App),
}).$mount('#app');
