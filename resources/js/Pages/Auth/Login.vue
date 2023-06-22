<script setup>
import Layout from '../../Shared/Layout.vue'
</script>

<template>
    <Layout>
        <section>
            <form action="/login">
                <input type="email" name="email" required placeholder="Email">
                <input type="password" name="password" required placeholder="Пароль">
                <input type="submit" value="Войти" class="focus__button">
            </form>
        </section>
    </Layout>
</template>