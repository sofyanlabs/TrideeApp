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
                    <div class="columns login">
                        <h1 class="title pl-1">Login</h1>
                        <div class="column is-4 is-offset-2">
                            <b-field>
                                <b-input placeholder="Email" v-model="form.email"  required ></b-input>
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
                    
                    <div class="daftar">
                        <h1 class="title has-text-centered-mobile">Buat Akun Baru</h1>
                        <form action="#" >
                            <b-field>
                                <b-input placeholder="Nama Lengkap" required></b-input>
                            </b-field>
                            <b-field>
                                <b-input placeholder="Email" type="email" required></b-input>
                            </b-field>
                            <b-field>
                                <b-input placeholder="Nomor Telepon" required></b-input>
                            </b-field>
                            <b-field>
                                <b-input placeholder="Password" type="password" password-reveal required></b-input>
                            </b-field>
                            <b-field grouped>
                                <b-field label="Kota Asal">
                                    <b-select placeholder="Kota Asal" required>
                                        <option>Jakarta</option>
                                        <option>Depok</option>
                                    </b-select>
                                </b-field>
                                <b-field label="Jenis Kelamin">
                                    <b-select placeholder="Jenis Kelamin" required>
                                        <option>Laki - Laki</option>
                                        <option>Perempuan</option>
                                    </b-select>
                                </b-field>
                            </b-field>
                            <p class="control">
                                <button class="button is-primary is-fullwidth-mobile">Daftar</button>
                            </p>
                        </form>

                        <button class="button is-primary is-outlined is-fullwidth login-modal"
                            @click="isComponentModalActive = true">
                            Login
                        </button>

                        <b-modal :active.sync="isComponentModalActive" has-modal-card>
                            <modal-form></modal-form>
                        </b-modal>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
const ModalForm = {
    template: `
            <form action="">
                <div class="modal-card" style="width: auto; padding: 0 2em;">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Login</p>
                    </header>
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
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="$parent.close()">Close</button>
                        <button class="button is-primary">Login</button>
                    </footer>
                </div>
            </form>
        `
}
export default {
    components: {
            ModalForm
        },
    data() {
        return {
            isComponentModalActive: false,
            form: {
                email: null,
                password: null
            }
        }
    }
}
</script>

<style>

</style>
