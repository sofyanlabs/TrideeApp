import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

//auth 
import Logout from '../components/auth/Logout'

//content 
import Kelas from '../components/content/Kelas'
import Forum from '../components/content/Forum'
import Coin from '../components/content/Coin'

var router = new VueRouter({
  routes: [ 
    {path: '/', component: Kelas},
    {path: '/forum', component: Forum },
    {path: '/coin', component: Coin },
    {path: '/logout', component: Logout }
  ],
  linkActiveClass: 'is-active',
  hashbang: false,
  mode: 'history'
})

export default router