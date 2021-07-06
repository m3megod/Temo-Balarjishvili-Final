

require('./bootstrap');

window.Vue = require('vue');


import SingleItem from './components/SingleItem'
import Product from './components/Product'
import ProductFilter from './components/ProductFilter'
import NavCart from './components/NavCart'
import Cart from './components/Cart'
import NavSearch from './components/NavSearch'
import ModalWrapper from './components/ModalWrapper'
import OrderInfo from './components/OrderInfo'
import * as Sentry from "@sentry/vue";
import { Integrations } from "@sentry/tracing";

Sentry.init({
    Vue,
    dsn: "https://27ba377838bc4f22ab5971c86e99642a@o536436.ingest.sentry.io/5655026",
    integrations: [new Integrations.BrowserTracing()],

  
    tracesSampleRate: 1.0,
});

import moment from 'moment'


import * as uiv from 'uiv'
Vue.use(uiv)
Vue.filter('formatDate', (value, format = false) => {
    console.table(value)
    if (value) {
        return moment(String(value)).format(format || 'MMMM/DD/YYYY hh:mm');
    }
    return value;
});
const app = new Vue({
    el: '#app',
    components: {SingleItem, Product, ProductFilter, NavCart, Cart, OrderInfo, NavSearch, ModalWrapper},
});
