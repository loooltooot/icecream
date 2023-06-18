<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header>
        <div class="img__wrapper">
            <img src="/images/logo.svg" alt="Мороженое">
        </div>
        <nav>
            <ul>
                <li>
                    <span class="nav__link__element">Морожка</span>
                </li>
                <li>
                    <Link class="nav__link__element" href="/orders">Заказы</Link>
                </li>
                <li>
                    <Link class="nav__link__element" href="/users">Пользователи</Link>
                </li>
            </ul>
        </nav>
    </header>
</template>

<style lang="scss" scoped>
header {
    padding-top: .8vw;
    display: flex;
    align-items: center;
    column-gap: 2vw;
    padding-inline: var(--header-inline-padding);
}
</style>

<style lang="scss">
nav ul {
    column-gap: .78vw;
}
</style>