

require('./bootstrap');

window.Vue = require('vue');


const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('postcards-component', require('./components/postcardsComponent.vue').default);

document.addEventListener('DOMContentLoaded', function () {

    token = $('meta[name="csrf-token"').attr('content');
    // window.axios.default.headers.common['X-CSRF-TOKEN'] = token;

    const app = new Vue({
        el: '#app',
    });
});

