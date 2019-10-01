import Vue from "vue";
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App from './components/App'
import Welcome from './components/Welcome'
import Page from './components/Page'

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/spa-home',
      name: 'welcome',
      component: Welcome,
      props: { title: 'SPA Home' }
    },
    {
        path: '/spa-page',
        name: 'page',
        component: Page,
        props: { 
            title: "This is the SPA Second Page",
            author : {
                name : "Fisayo Afolayan",
                role : "Software Engineer",
                code : "Always keep it clean"
            }
        }
    }, 
    
  ]
})

const app = new Vue({
  router,
  el: '#app',
  components: { App },
});