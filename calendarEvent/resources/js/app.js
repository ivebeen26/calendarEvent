import Vue from 'vue'
import axios from './config/axios.js'
import App from './views/App'

Vue.component('AlertBox', require('./components/calendarAlert.vue').default)
Vue.prototype.$http = axios

const app = new Vue({
    el: '#app',
    components: { App }
})