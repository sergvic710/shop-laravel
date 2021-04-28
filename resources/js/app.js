//require('./bootstrap');
window.Vue = require('vue');

import App from './App.vue';
// import VueAxios from 'vue-axios';
// import axios from 'axios';
//import {routes} from './routes';

const app = new Vue({
    el: '#app',
    render: h => h(App),
});
