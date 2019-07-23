<template>
<div>
    <div class="bg-color">
        <div class="container brand is-fluid">
            <div class="logo">
                <router-link to="/">
                    <img src="/img/logo.svg" alt="Tridee Logo" width="120">
                </router-link>
            </div>
        </div>
        <div class="container is-fluid">
            <div class="columns is-gapless">
                <div class="column  owl-full is-6">
                    <section class="hero is-fullheight owl-image"></section>
                </div>
                <div class="column is-6">
                    <form @submit.prevent="login">
                        <div class="columns login">
                            <div class="column is-4 is-offset-2">
                                <b-field>
                                    <b-input placeholder="Email" type="email" v-model="form.email"  required ></b-input>
                                </b-field>
                            </div>
                            <div class="column is-4">
                                <b-field>
                                    <b-input placeholder="Password" type="password" v-model="form.password" required password-reveal></b-input>
                                </b-field>
                                <a href="#">Lupa Password?</a>
                            </div>
                            <div class="column is-2">
                                <b-field>
                                    <button class="button is-primary is-rounded is-outlined">Login</button>
                                </b-field>
                            </div>
                        </div>
                    </form>
                    
                    <div class="daftar">
                        <h1 class="title has-text-centered-mobile">Buat Akun Baru</h1>
                        <form @submit.prevent="register" >
                            <b-field>
                                <b-input placeholder="Nama Lengkap" required v-model="regis.name"></b-input>
                            </b-field>
                            <b-field>
                                <b-input placeholder="Email" type="email" required v-model="regis.email"></b-input>
                            </b-field>
                            <b-field>
                                <b-input placeholder="Nomor Telepon" required v-model="regis.phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></b-input>
                            </b-field>
                            <b-field>
                                <b-input placeholder="Password" type="password" password-reveal required v-model="regis.password"></b-input>
                            </b-field>
                            <b-field grouped>
                                <b-field label="Kota Asal">
                                    <b-select placeholder="Kota Asal" required v-model="regis.city">
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Depok">Depok</option>
                                    </b-select>
                                </b-field>
                                <b-field label="Jenis Kelamin">
                                    <b-select placeholder="Jenis Kelamin" required v-model="regis.gender">
                                        <option value="Laki - Laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </b-select>
                                </b-field>
                            </b-field>
                            <p class="control">
                                <button class="button is-primary is-fullwidth-mobile">Daftar</button>
                            </p>
                        </form>
                        
                        <div class="login-modal">
                            <p class="has-text-centered pt-1 pb-1">atau</p>
                            <button class="button is-primary is-outlined is-fullwidth"
                                @click="isComponentModalActive = true">
                                Sudah Punya Akun
                            </button>
                        </div>

                        <b-modal :active.sync="isComponentModalActive" has-modal-card>
                            <form  @submit.prevent="login">
                                <div class="modal-card" style="width: auto; padding: 0 2em;">
                                    <header class="modal-card-head">
                                        <p class="modal-card-title">Login</p>
                                    </header>
                                    <section class="modal-card-body">
                                        <b-field label="Email">
                                            <b-input
                                                type="email"
                                                placeholder="Email"
                                                v-model="form.email"
                                                required>
                                            </b-input>
                                        </b-field>

                                        <b-field label="Password">
                                            <b-input
                                                type="password"
                                                password-reveal
                                                placeholder="Password"
                                                v-model="form.password"
                                                required>
                                            </b-input>
                                        </b-field>
                                    </section>
                                    <footer class="modal-card-foot">
                                        <button class="button is-primary">Login</button>
                                    </footer>
                                </div>
                            </form>
                        </b-modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            isComponentModalActive: false,
            form: {
                email: null,
                password: null
            },
            regis: {
                name: null,
                email: null,
                phone: null,
                password: null,
                city: null,
                gender: null
            },
            errors:{}
        }
    }, 
    methods: {
        login() {
            User.login(this.form)
        },

        register(){
            axios.post('/api/auth/signup', this.regis)
            .then(res => {User.responseAfterLogin(res)
            })
            .catch(error => this.errors = error.response.data.errors)
        }
    }
}
</script>

<style>

</style>
