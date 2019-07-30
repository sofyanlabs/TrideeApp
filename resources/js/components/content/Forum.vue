<template>
    <div class="content-view bg-white">
        <section class="section">
            <div class="container is-widescreen">
                <swiper :options="swiperOption">
                    <swiper-slide
                    v-for="star in stars" :key="star.index">
                    <a :href="star.path">
                        <div class="box slider" :style="{ 'background': 'linear-gradient(0deg,rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)), url(' + star.bg + ') no-repeat center' }">
                            <h1 class="title has-text-white">{{star.id}}</h1>

                            <div class="star">
                                <b-icon
                                    icon="star"
                                    size="mdi-24px"
                                    type="is-warning">
                                </b-icon>
                                <span class="subtitle has-text-white">{{star.jumlah}}</span>
                            </div>
                        </div>
                    </a>
                    </swiper-slide>
                    <div class="swiper-pagination" slot="pagination"></div>
                    <div class="swiper-button-prev" slot="button-prev"></div>
                    <div class="swiper-button-next" slot="button-next"></div>
                </swiper>
            </div>
        </section>
        
        <section class="section">
            <div class="container is-widescreen">
                <div class="columns flip-column">
                    <div class="column is-8">
                        <div class="box post">
                            <div class="post-header">
                                <div class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <figure class="image is-64x64">
                                                <img class="is-rounded" src="https://i.pravatar.cc/64?img=49">
                                            </figure>
                                        </div>
                                        <div class="level-item">
                                            <div>
                                                <h2 class="title is-spaced is-size-6 has-text-primary">Ahmad Sofyan
                                                <b-tag type="is-primary" class="is-rounded">Arsitek</b-tag>
                                                </h2>
                                                <p class="subtitle is-size-6 has-text-grey">Hari ini</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="level-right">
                                        <div class="level-item">
                                            <b-dropdown aria-role="list" position="is-bottom-left">
                                                    <b-icon
                                                        icon="dots-horizontal"
                                                        size="is-medium"
                                                        slot="trigger"
                                                        role="button"
                                                        class="dots">
                                                    </b-icon>

                                                <b-dropdown-item aria-role="listitem">Action</b-dropdown-item>
                                                <b-dropdown-item aria-role="listitem">Another action</b-dropdown-item>
                                                <b-dropdown-item aria-role="listitem">Something else</b-dropdown-item>
                                            </b-dropdown>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="post-title">
                                    <h1 class="title is-size-5">
                                        Cara Membuat Video Unik
                                    </h1>
                                </div>
                                <div class="post-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque commodi minima voluptates, quae, eos aliquam tempore quisquam aspernatur sequi.
                                </div>
                            </a>
                        </div>
                        <div class="box post">
                            <div class="post-header">
                                <div class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <figure class="image is-64x64">
                                                <img class="is-rounded" src="https://i.pravatar.cc/64?img=50">
                                            </figure>
                                        </div>
                                        <div class="level-item">
                                            <div>
                                                <h2 class="title is-spaced is-size-6 has-text-primary">Ahmad Sofyan
                                                    <b-tag type="is-danger" class="is-rounded">Visual</b-tag>
                                                </h2>
                                                <p class="subtitle is-size-6 has-text-grey">Hari ini</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="level-right">
                                        <div class="level-item">
                                            <b-dropdown aria-role="list" position="is-bottom-left">
                                                    <b-icon
                                                        icon="dots-horizontal"
                                                        size="is-medium"
                                                        slot="trigger"
                                                        role="button"
                                                        class="dots">
                                                    </b-icon>

                                                <b-dropdown-item aria-role="listitem">Action</b-dropdown-item>
                                                <b-dropdown-item aria-role="listitem">Another action</b-dropdown-item>
                                                <b-dropdown-item aria-role="listitem">Something else</b-dropdown-item>
                                            </b-dropdown>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="post-title">
                                    <h1 class="title is-size-5">
                                        Cara Membuat Video Travelling
                                    </h1>
                                </div>
                                <div class="post-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque commodi minima voluptates, quae, eos aliquam tempore quisquam aspernatur sequi.
                                </div>
                            </a>
                        </div>
                        <div class="box post">
                            <div class="post-header">
                                <div class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <figure class="image is-64x64">
                                                <img class="is-rounded" src="https://i.pravatar.cc/64?img=51">
                                            </figure>
                                        </div>
                                        <div class="level-item">
                                            <div>
                                                <h2 class="title is-spaced is-size-6 has-text-primary">Ahmad Sofyan 
                                                <b-tag type="is-warning" class="is-rounded">Desain</b-tag>
                                                </h2>
                                                <p class="subtitle is-size-6 has-text-grey">Hari ini</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="level-right">
                                        <div class="level-item">
                                            <b-dropdown aria-role="list" position="is-bottom-left">
                                                    <b-icon
                                                        icon="dots-horizontal"
                                                        size="is-medium"
                                                        slot="trigger"
                                                        role="button"
                                                        class="dots">
                                                    </b-icon>

                                                <b-dropdown-item aria-role="listitem" has-link>Action</b-dropdown-item>
                                                <b-dropdown-item aria-role="listitem">Another action</b-dropdown-item>
                                                <b-dropdown-item aria-role="listitem">Something else</b-dropdown-item>
                                            </b-dropdown>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="post-title">
                                    <h1 class="title is-size-5">
                                        Cara Membuat Video Iklan
                                    </h1>
                                </div>
                                <div class="post-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque commodi minima voluptates, quae, eos aliquam tempore quisquam aspernatur sequi.
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="column is-4">
                        <b-button type="is-primary"
                            size="is-medium"
                            class="is-fullwidth mb-2">
                            Tambah Diskusi Baru
                        </b-button>
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

<script>
export default {
    data() {
        return {
            stars: [
                { id: '1', bg: 'https://i.pravatar.cc/300?img=1', path:'/forum', jumlah: '900'},
                { id: '2', bg: 'https://i.pravatar.cc/300?img=2', path:'/forum', jumlah: '800'},
                { id: '3', bg: 'https://i.pravatar.cc/300?img=4', path:'/forum', jumlah: '700'},
                { id: '4', bg: 'https://i.pravatar.cc/300?img=8', path:'/forum', jumlah: '600'},
                { id: '5', bg: 'https://i.pravatar.cc/300?img=9', path:'/forum', jumlah: '500'},
                { id: '6', bg: 'https://i.pravatar.cc/300?img=10', path:'/forum', jumlah: '400'},
                { id: '7', bg: 'https://i.pravatar.cc/300?img=11', path:'/forum', jumlah: '300'},
                { id: '8', bg: 'https://i.pravatar.cc/300?img=12', path:'/forum', jumlah: '200'},
                { id: '9', bg: 'https://i.pravatar.cc/300?img=13', path:'/forum', jumlah: '100'},
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
                    1100: {
                    allowTouchMove: true,
                    slidesPerView: 5
                    },
                    640: {
                    slidesPerView: 2,
                    grabCursor: true,
                    allowTouchMove: true,
                    }
                }
            }
        }
    }
}
</script>

<style lang="scss" scoped>
.section {
    padding: 1em 1.5em;
}

.box {
    
    &.slider {
    min-height: 200px;
    max-width: 150px;
    margin-left: auto;
    margin-right: auto;
    transition: all .2s ease-in-out;
    
        &:hover{
            transform: scale(1.05);
        }
    }

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

.post {
    .post-title {
        padding-top: 1em;
    }

    .dots {
        cursor: pointer;
    }

    .post-body {
        padding-top: 0.5em;
        line-height: 1.7;
        position: relative;
        overflow: auto;
        overflow-wrap: break-word;
    }
}


.swiper-pagination-bullets {
    bottom: 0;
}

@media screen and (max-width: 768px) {
    
    .swiper-button-prev, .swiper-button-next {
        display: none;
    }
}
@media screen and (min-width: 1441px) {
    .daftar-bintang {
        padding-right: 5%;
        padding-left: 5%;
    }
    .swiper-pagination, .swiper-button-prev, .swiper-button-next {
        display: none;
    }
}

@media screen and (min-width: 2000px) {
    .daftar-bintang {
        padding-right: 10%;
        padding-left: 10%;
    }
}
</style>