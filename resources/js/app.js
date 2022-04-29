require('./bootstrap');

import { createApp } from 'vue'
import Index from './components/index'
import Footer from './components/footer'

const app = createApp({})

app.component('index-page', Index)
app.component('footer-div', Footer)

app.mount('#app')