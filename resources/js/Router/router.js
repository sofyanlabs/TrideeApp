import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// import AuthMember from '../components/Member/AuthMember'

var router = new VueRouter({
  // routes: [
  //   {path: '/member', component: AuthMember} 
  // ],
  hashbang: false,
  mode: 'history'
})

export default router