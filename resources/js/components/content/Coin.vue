<template>
    <div class="content-view bg-dark pt-0">
        <section class="section is-medium coin-header">
            <div class="container">
                <div class="has-text-centered">
                    <h1 class="title is-size-2 has-text-white">Jumlah Koin</h1>

                    <div class="level">
                        <div class="level-item">
                            <figure class="image is-96x96 mr-2">
                                <img src="/img/component/coin/coin-tridee.png">
                            </figure>
                            <div class="title big has-text-white">500</div>
                        </div>
                    </div>

                    <b-tag type="is-warning" size="is-large" class="is-rounded has-text-weight-bold">1 CT = Rp.10.000,-</b-tag>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="has-text-centered pb-4">
                    <h2 class="title is-size-4 has-text-white">Beli Koin</h2>
                </div>

                <div class="columns is-centered">
                    <div class="column is-one-third-widescreen">
                        <a href="">
                            <div class="level is-center beli-coin">
                                <div class="level-left">
                                    <div class="level-item">
                                        <figure class="image is-64x64 mr-2">
                                            <img src="/img/component/coin/coin-5.png">
                                        </figure>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="is-size-6 has-text-white">
                                        <b>Rp.50.000</b> <br>
                                        Tidak ada bonus koin
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column is-one-third-widescreen">
                        <a href="">
                            <div class="level is-center beli-coin">
                                <div class="level-left">
                                    <div class="level-item">
                                        <figure class="image is-64x64 mr-2">
                                            <img src="/img/component/coin/coin-10.png">
                                        </figure>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="is-size-6 has-text-white">
                                        <b>Rp.100.000</b> <br>
                                        Tidak ada bonus koin
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="columns is-centered">
                    <div class="column is-one-third-widescreen">
                        <a href="">
                            <div class="level is-center beli-coin">
                                <div class="level-left">
                                    <div class="level-item">
                                        <figure class="image is-64x64 mr-2">
                                            <img src="/img/component/coin/coin-20.png">
                                        </figure>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="is-size-6 has-text-white">
                                        <b>Rp.200.000</b> <br>
                                        Tidak ada bonus koin
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column is-one-third-widescreen">
                        <a href="">
                            <div class="level is-center beli-coin">
                                <div class="level-left">
                                    <div class="level-item">
                                        <figure class="image is-64x64 mr-2">
                                            <img src="/img/component/coin/coin-30.png">
                                        </figure>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="is-size-6 has-text-white">
                                        <b>Rp.300.000</b> <br>
                                        Tidak ada bonus koin
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="columns is-centered">
                    <div class="column is-one-third-widescreen">
                        <a href="">
                            <div class="level is-center beli-coin">
                                <div class="level-left">
                                    <div class="level-item">
                                        <figure class="image is-64x64 mr-2">
                                            <img src="/img/component/coin/coin-55.png">
                                        </figure>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="is-size-6 has-text-white">
                                        <b>Rp.500.000</b> <br>
                                        50 Koin + Bonus 5 Koin
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column is-one-third-widescreen">
                        <a href="">
                            <div class="level is-center beli-coin">
                                <div class="level-left">
                                    <div class="level-item">
                                        <figure class="image is-64x64 mr-2">
                                            <img src="/img/component/coin/coin-110.png">
                                        </figure>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="is-size-6 has-text-white">
                                        <b>Rp.1.000.000</b> <br>
                                        100 Koin + Bonus 10 Koin
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
.coin-header {
    background: linear-gradient(0deg, rgba(34, 150, 243, 0.5),rgba(34, 150, 243, 0.5)), url("/img/component/coin/bg-coin.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    .big {
        font-size: 5rem;
    }
}

.beli-coin {
    padding: 1em;
    &:hover {
        background-color: #555555;
        border-radius: 5px;
    }
}
</style>
