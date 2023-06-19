<script setup>
import Card from './Card.vue';
import { register } from 'swiper/element/bundle';

defineProps({ products: Array })

register()
</script>

<template>
    <section id="topproducts__slider">
        <swiper-container slides-per-view="3" loop="true" speed="3000" autoplay-delay="5000" allow-touch-move="false"
            space-between="30">
            <swiper-slide v-for="product of products" :key="product.id">
                <Card :product="product" />
            </swiper-slide>
        </swiper-container>
    </section>
</template>

<style lang="scss" scoped>
#topproducts__slider {
    margin-top: 2vw;
}

swiper-container {
    padding-inline: var(--main-inline-padding);
    padding-top: .11vw;
    padding-bottom: .11vw;

    swiper-slide {
        height: auto;
    }
}
</style>