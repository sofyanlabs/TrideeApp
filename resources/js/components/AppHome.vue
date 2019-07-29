<template>
<div>
    <div v-if="home">
        <navbar></navbar>
        <div class="page">
            <router-view></router-view>
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
            home: User.loggedIn()
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
