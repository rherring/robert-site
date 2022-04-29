require('./bootstrap');

import { createApp } from 'vue'
import Index from './components/index'
import Footer from './components/footer'
import Nav from './components/nav'

const app = createApp({})

app.component('index-page', Index)
app.component('footer-div', Footer)
app.component('nav-menu', Nav)

app.mount('#app')