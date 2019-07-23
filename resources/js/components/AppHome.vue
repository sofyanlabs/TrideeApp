<template>
<div>
    <div v-if="home">
        <navbar></navbar>
        <div class="columns is-gapless">
            <div class="column is-2 menu-bar is-hidden-touch">
                <div class="menu">
                    <router-link 
                    v-for="menu in menus" :key="menu.name" 
                    :to="menu.path"
                    class="menu-item is-size-6" exact>
                        {{menu.name}}
                    </router-link>
                </div>
                <div class="menu">
                    <router-link 
                    v-for="icon in icons" :key="icon.name"
                    :to="icon.path" 
                    class="menu-item icons is-size-6">
                         <img :src="icon.img" :alt="icon.alt">
                         <span>{{icon.name}}</span>
                    </router-link>
                </div>
            </div>
            <div class="column contents">
                <router-view></router-view>
            </div>
        </div>
        <div class="footers has-background-primary">
            <div class="has-text-centered has-text-white has-text-weight-bold">
                2019 Tridee Corp
            </div>
        </div>
    </div>

    <login v-if="login"></login>
</div>
</template>

<script>
import Navbar from './Navbar'
import Login from './auth/Login'

export default {
    data() {
        return {
            login: !User.loggedIn(),
            home: User.loggedIn(),
            menus: [
                { name: 'Kelas', path: '/'},
                { name: 'Forum', path: '/forum'},
                { name: 'Coin', path: '/coin' }
            ],
            icons: [
                { name: 'Mentor', img: '/img/icon/mentor.svg', alt: 'icon mentor', path: '/mentor'},
                { name: 'Sayembara', img: '/img/icon/sayembara.svg', alt: 'icon sayembara', path: '/sayembara'},
                { name: 'Artikel', img: '/img/icon/artikel.svg', alt: 'icon artikel', path: '/artikel'},
                { name: 'Komponen', img: '/img/icon/komponen.svg', alt: 'icon komponen', path: '/komponen'},
                { name: 'Hadiah', img: '/img/icon/hadiah.svg', alt: 'icon hadiah', path: '/hadiah'}
            ]
        }
    },
    components:{
        Navbar,
        Login
    },
}
</script>

<style>

</style>
