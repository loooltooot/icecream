<script setup>
import Layout from '../../Shared/Layout.vue';
import Card from '../../Shared/user/Card.vue';

defineProps({ extendedAccess: Boolean, users: Array })
</script>

<template>
    <Layout>
        <section>
            <div>
                <div class="wrapper">
                    <h2 class="hero__header">
                        пользователи
                    </h2>
                </div>
            </div>
            <ul>
                <li v-for="user of users">
                    <Card :user="user" />
                </li>
            </ul>
        </section>
    </Layout>
</template>

<style lang="scss" scoped>
ul {
    flex-wrap: wrap;
    padding-inline: var(--main-inline-padding);
    column-gap: 1.04vw;
    margin-top: 2.6vw;
}
</style>