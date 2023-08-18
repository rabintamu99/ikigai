import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import like from "./components/like.vue"
const app = createApp({
    components:{
        like,

    }
})
app.mount('#app');