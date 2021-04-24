require('./bootstrap');

// Import modules...
import { createApp, h } from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { asset } from '@codinglabs/laravel-asset';
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
    .use(InertiaPlugin);
app.mount('#app');

InertiaProgress.init({ color: '#4B5563' });
