<template>
    <div class="content-view">
        <swiper :options="swiperOption">
            <swiper-slide>
                <img src="/img/slider/1.jpg" alt="Gambar 1">
            </swiper-slide>
            <swiper-slide>
                <img src="/img/slider/2.jpg" alt="Gambar 2">
            </swiper-slide>
            <swiper-slide>
                <img src="/img/slider/3.jpg" alt="Gambar 3">
            </swiper-slide>
            <swiper-slide>
                <img src="/img/slider/4.jpg" alt="Gambar 4">
            </swiper-slide>
            <div class="swiper-pagination" slot="pagination"></div>
            <div class="swiper-button-prev" slot="button-prev"></div>
            <div class="swiper-button-next" slot="button-next"></div>
        </swiper>

        <section class="section daftar-kelas">
            <h2 class="title has-text-white has-text-centered">Kelas Sedang Berjalan</h2>
            <div class="level is-centers has-text-centered">
                <div class="level-item is-narrow">
                    <figure class="image is-128x128">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                </div>
                <div class="level-item is-narrow">
                    <figure class="image is-128x128">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                </div>
                <div class="level-item is-narrow">
                    <figure class="image is-128x128">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                </div>
                <div class="level-item is-narrow">
                    <figure class="image is-128x128">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                </div>
                <div class="level-item is-narrow">
                    <figure class="image is-128x128">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                </div>
            </div>
        </section>

        <!-- animasi -->
        <section class="section has-background-grey-dark daftar-kelas">
            <div class="container">
                <h2 class="title has-text-white has-text-centered">Animasi</h2>
                <div class="columns is-paddingless">
                    <div class="column has-text-centered">
                        <img src="/img/component/kelas/gambar-animasi.png" alt="Gambar Kelas Animasi Tridee" width="300">
                    </div>
                    <div class="column">
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>1</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas 1</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>2</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>3</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>4</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>5</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>6</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas 1</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>7</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>8</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>9</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>10</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <section class="section has-background-grey-dark daftar-kelas">
            <div class="container">
                <h2 class="title has-text-white has-text-centered">Animasi</h2>
                <div class="columns is-paddingless">
                    <div class="column has-text-centered">
                        <img src="/img/component/kelas/gambar-animasi.png" alt="Gambar Kelas Animasi Tridee" width="300">
                    </div>
                    <div class="column">
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>1</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas 1</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>2</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>3</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>4</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>5</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>6</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas 1</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>7</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>8</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>9</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                        <div class="level is-mobile is-start has-text-white">
                            <div class="level-item is-narrow">
                                <p>10</p>
                            </div>
                            <div class="level-item is-narrow">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/48x48.png">
                                </figure>
                            </div>
                            <div class="level-item is-narrow">
                                <div>
                                    <b>Judul Kelas</b>
                                    <p>Deskripsi Kelas</p>
                                </div>
                            </div>
                            <div class="level-item is-narrow ml-auto">
                                <b-icon
                                    icon="play-circle"
                                    size="is-medium">
                                </b-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        swiperOption: {
          slidesPerView: '3',
          centeredSlides: true,
          spaceBetween: 30,
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          },
          breakpoints: {
            1024: {
              slidesPerView: 1,
              spaceBetween: 10
            }
          }
        }
      }
    }
  }
</script>
