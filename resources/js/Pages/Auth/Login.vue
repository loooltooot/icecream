<script setup>
import Layout from '../../Shared/Layout.vue'

defineProps({ message: String })
</script>

<template>
    <Layout>
        <section>
            <div>
                <div class="wrapper">
                    <h2 class="hero__header">авторизация</h2>
                </div>
            </div>
            <form class="add__update__form" action="/login">
                <input type="email" name="email" required placeholder="Email">
                <input type="password" name="password" required placeholder="Пароль">
                <input type="submit" value="Войти" class="focus__button">
                <span class="message" v-if="message">{{ message }}</span>
            </form>
        </section>
    </Layout>
</template>

