<template>
    <div class="content-view">
        <section class="section daftar-bintang">
            <swiper :options="swiperOption">
                <swiper-slide
                v-for="star in stars" :key="star.index">
                    <div class="box" :style="{ 'background-image': 'url(' + star.bg + ')' }">
                        <h1 class="title has-text-white">{{star.id}}</h1>

                        <div class="star">
                            <b-icon
                                icon="star"
                                size="mdi-24px"
                                type="is-warning">
                            </b-icon>
                            <span class="subtitle">{{star.jumlah}}</span>
                        </div>
                    </div>
                </swiper-slide>
                <div class="swiper-pagination" slot="pagination"></div>
                <div class="swiper-button-prev" slot="button-prev"></div>
                <div class="swiper-button-next" slot="button-next"></div>
            </swiper>
        </section>

        <section class="section">
            <div class="container">
                <div class="columns is-8">
                    <div class="column">
                        <b-button icon-left="plus-circle" type="is-primary" size="is-large "class="is-fullwidth">
                            Tambah Postingan
                        </b-button>
                        <br>
                        <div class="box">
                            <figure class="image is-64x64">
                                <img class="is-rounded" src="https://bulma.io/images/placeholders/64x64.png">
                            </figure>
                            <h2 class="title is-size-5">Ahmad Sofyan</h2>
                            <p class="subtitle is-size-6">Hari ini</p>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="box">
                            <h1 class="title is-size-4">Statistik</h1>
                        </div>
                        <div class="box has-background-dark">
                            <h1 class="title has-text-centered has-text-grey">Banner iklan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style lang="scss" scoped>
.content-view {
    background-color: #e9ebee;
}

.box {
    min-height: 200px;
    background-position: center;

    .star {
        position: relative;
        top: 120px;
        justify-content: center;
        display: flex;
        align-items: center;

        span {
            padding-left: 5px;
        }
    }
}

.page {
    background-color: #e9ebee !important;
}

.swiper-pagination-bullets {
    bottom: 0;
} 

@media screen and (max-width: 768px) {
    .section.daftar-bintang {
        padding: 3rem 1em;
    }
    
    .swiper-button-prev, .swiper-button-next {
        display: none;
    }
}
@media screen and (min-width: 1441px) {
    .section.daftar-bintang {
        padding-right: 5%;
        padding-left: 5%;
    }
    .swiper-pagination, .swiper-button-prev, .swiper-button-next {
        display: none;
    }
}

@media screen and (min-width: 2000px) {
    .section.daftar-bintang {
        padding-right: 10%;
        padding-left: 10%;
    }
}
</style>

<script>
export default {
    data() {
        return {
            stars: [
                { id: '1', bg: 'http://via.placeholder.com/130x200', path:'/forum', jumlah: '900'},
                { id: '2', bg: 'http://via.placeholder.com/130x200', path:'/forum', jumlah: '800'},
                { id: '3', bg: 'http://via.placeholder.com/130x200', path:'/forum', jumlah: '700'},
                { id: '4', bg: 'http://via.placeholder.com/130x200', path:'/forum', jumlah: '600'},
                { id: '5', bg: 'http://via.placeholder.com/130x200', path:'/forum', jumlah: '500'},
                { id: '6', bg: 'http://via.placeholder.com/130x200', path:'/forum', jumlah: '400'},
                { id: '7', bg: 'http://via.placeholder.com/130x200', path:'/forum', jumlah: '300'},
                { id: '8', bg: 'http://via.placeholder.com/130x200', path:'/forum', jumlah: '200'},
                { id: '9', bg: 'http://via.placeholder.com/130x200', path:'/forum', jumlah: '100'},
            ],

            swiperOption: {
            slidesPerView: 9,
            spaceBetween: 10,
            allowTouchMove: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                    1440: {
                    slidesPerView: 7,
                    },
                    1024: {
                    allowTouchMove: true,
                    slidesPerView: 5
                    },
                    640: {
                    slidesPerView: 2,
                    slidesOffsetBefore: 20,
                    grabCursor: true,
                    }
                }
            }
        }
    }
}
</script>

