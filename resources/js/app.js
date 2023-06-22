import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import '../css/reset.scss'
import '../css/normalize.scss'
import '../css/app.scss'
import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore({
    state() {
        return {
            loggedIn: false
        }
    },
    mutations: {
        setLoggedIn(state, status) {
            state.loggedIn = status
        }
    },
    actions: {
        async getLoggedIn(context) {
            axios.get('/auth/status')
                .then(response => {
                    context.commit('setLoggedIn', response.data)
                }).catch(error => {
                    console.log(error)
                })
        }
    }
})

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(store)
            .mount(el)
    },
})