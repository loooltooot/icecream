<script setup>
import Footer from './Footer.vue';
import Header from './Header.vue';
</script>

<script>
export default {
    mounted() {
        this.$store.dispatch('getLoggedIn')
    }
}
</script>

<template>
    <Header />
    <main>
        <slot />
    </main>
    <Footer />
</template>