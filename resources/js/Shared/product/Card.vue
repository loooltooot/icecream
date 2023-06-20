<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({ product: Object })
</script>

<template>
    <div class="card product__card">
        <div class="img-wrapper">
            <img :src="'/images/products/' + product.img" :alt="product.title" loading="lazy">
        </div>
        <div class="content">
            <h3>{{ product.title }}</h3>
            <div class="additional__info">
                <p>{{ product.description }}</p>
                <div class="price__ccal">
                    <span class="price">{{ product.price }}₽</span>
                    <span class="ccal">{{ product.ccal }}ккал</span>
                </div>
                <Link class="focus__button" :href="/products/ + product.id">
                Узнать больше
                </Link>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.card {
    border: var(--unfocus-text-color) .05vw solid;
    height: 100%;
    position: relative;
    min-height: 35vw;

    &:hover {
        div.additional__info {
            opacity: 1;
        }

        .img-wrapper {
            opacity: 0;
            z-index: -1;
        }
    }

    .img-wrapper {
        position: absolute;
        right: 0;
        bottom: 0;
        transition: opacity .5s ease;
    }

    h3 {
        font-size: var(--h3-font-size);
    }

    div.additional__info {
        transition: opacity .5s ease;
        opacity: 0;
        display: flex;
        flex-direction: column;
        row-gap: 1.04vw;
        margin-top: 1.56vw;

        p {
            line-height: 1.25;
        }

        .price__ccal {
            display: flex;
            column-gap: 1vw;

            span {
                font-weight: 700;
                font-size: var(--focus-font-size);
            }
        }
    }
}
</style>