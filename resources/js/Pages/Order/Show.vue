<script setup>
import Layout from '../../Shared/Layout.vue';

defineProps({ orders: Array })
</script>

<template>
    <Layout>
        <section>
            <div>
                <div class="wrapper">
                    <h2 class="hero__header">
                        заказы
                    </h2>
                </div>
            </div>
            <ul></ul>
        </section>
    </Layout>
</template>