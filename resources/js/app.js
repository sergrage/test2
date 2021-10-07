require('./bootstrap');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


window.Vue = require('vue').default;

import store from './store'


const app = new Vue({
    store,
    el: '#app',
});
