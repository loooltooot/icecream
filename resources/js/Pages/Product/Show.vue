<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Layout from '../../Shared/Layout.vue';

defineProps({ products: Array })
</script>

<template>
    <Head title="Продукты" />
    <Layout>
        <ul>
            <li v-for="product in products" :key="product.id">
                <div class="card">
                    <h1>{{ product.title }}</h1>
                </div>
            </li>
        </ul>
    </Layout>
</template>