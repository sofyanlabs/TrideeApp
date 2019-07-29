<template>
<div>
    <nav class="navbar">
        <div class="container is-fluid">
            <div class="navbar-brand">
                <router-link to="/" class="navbar-item">
                    <img src="/img/logo.svg" alt="Tridee Logo" width="120">
                </router-link>

                <div class="navbar-icon is-hidden-desktop">
                    <b-icon
                        icon="magnify"
                        size="mdi-24px">
                    </b-icon>
                    <b-icon
                        icon="menu"
                        size="mdi-24px">
                    </b-icon>
                </div>
            </div>

            <div class="navbar-menu">
                <div class="navbar-center">
                    <b-field>
                        <b-input placeholder="Cari kelasmu..." type="search" icon="magnify" rounded></b-input>
                    </b-field>
                </div>
                <div class="navbar-end">
                    <b-dropdown position="is-bottom-left" aria-role="menu">
                        <a
                            class="navbar-item"
                            slot="trigger"
                            role="button">
                            <b-icon icon="bell"></b-icon>
                        </a>

                        <b-dropdown-item aria-role="menu-item" custom paddingless>
                            <form action="">
                                <div class="modal-card" style="width:300px;">
                                    <section class="modal-card-body">
                                        <b-field label="Email">
                                            <b-input
                                                type="email"
                                                placeholder="Your email"
                                                required>
                                            </b-input>
                                        </b-field>

                                        <b-field label="Password">
                                            <b-input
                                                type="password"
                                                password-reveal
                                                placeholder="Your password"
                                                required>
                                            </b-input>
                                        </b-field>

                                        <b-checkbox>Remember me</b-checkbox>
                                    </section>
                                    <footer class="modal-card-foot">
                                        <button class="button is-primary">Login</button>
                                    </footer>
                                </div>
                            </form>
                        </b-dropdown-item>
                    </b-dropdown>

                    <b-dropdown aria-role="list" class="navbar-item" position="is-bottom-left">
                        <a class="button" slot="trigger">
                            <div class="image is-32x32" style="margin-right: 10px;">
                                <img class="is-rounded" src="https://bulma.io/images/placeholders/32x32.png">
                            </div>
                            <span>Ahmad Sofyan</span>
                            <b-icon icon="menu-down"></b-icon>
                        </a>

                        <b-dropdown-item aria-role="listitem">Profile</b-dropdown-item>
                        <b-dropdown-item has-link aria-role="listitem">
                            <router-link to="/logout">Logout</router-link>
                        </b-dropdown-item> 
                    </b-dropdown>
                </div>
            </div>
        </div>
    </nav>

    <div class="level is-mobile is-hidden-desktop mobile-nav">
        <div class="level-item has-text-centered">
            <router-link to="/" exact>
                <b-icon
                    icon="home"
                    size="mdi-36px">
                </b-icon>
            </router-link>
        </div>
        <div class="level-item has-text-centered">
            <router-link to="/forum">
                <b-icon
                    icon="forum"
                    size="mdi-36px">
                </b-icon>
            </router-link>
        </div>
        <div class="level-item has-text-centered">
            <router-link to="/coin">
                <b-icon
                    icon="coin"
                    size="mdi-36px">
                </b-icon>
            </router-link>
        </div>
        <div class="level-item has-text-centered">
            <router-link to="/notifications">
                <b-icon
                    icon="bell"
                    size="mdi-36px">
                </b-icon>
            </router-link>
        </div>
    </div>

    <div class="menu-bar is-hidden-touch">
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
    
    
    <div class="footers has-background-primary">
        <div class="has-text-centered has-text-white has-text-weight-bold">
            2019 Tridee Corp
        </div>
    </div>
</div>
</template>

<script>
    export default {
        data() {
        return {
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
        created(){
            EventBus.$on('logout', ()=> {
                User.logout()
            })
        }
    }
</script>