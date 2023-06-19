<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Layout from '../../Shared/Layout.vue';
import List from '../../Shared/product/LandingList.vue';

defineProps({ products: Array })
</script>

<template>
    <Head title="Мороженое" />
    <Layout>
        <List :products="products" />
    </Layout>
</template>