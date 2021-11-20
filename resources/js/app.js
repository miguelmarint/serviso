require('./bootstrap');

// Import modules...
import { createApp, h } from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { asset } from '@codinglabs/laravel-asset';
import VueSweetalert2 from 'vue-sweetalert2';
import 'jquery/dist/jquery.min.js';
import "datatables.net-dt/js/dataTables.dataTables";
import "datatables.net-dt/css/jquery.dataTables.min.css";
import 'sweetalert2/dist/sweetalert2.min.css';
import $ from 'jquery';
import AOS from "aos";
import "aos/dist/aos.css";
AOS.init();

const el = document.getElementById('app');

const app = createApp({
    render: () =>
        h(InertiaApp, {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: (name) => require(`./Pages/${name}`).default,
        }),
})
    .mixin({ methods: { route, asset: asset } })
    .use(InertiaPlugin)
    .use(VueSweetalert2);
app.mixin(require('./base'));
app.mount('#app');

InertiaProgress.init({ color: '#4B5563' });
