<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header>
        <div id="logo__nav__wrapper">
            <div class="img__wrapper">
                <img src="/images/logo.svg" alt="Мороженое">
            </div>
            <nav>
                <ul>
                    <li>
                        <div class="fold__menu__wrapper">
                            <div class="fold__menu">
                                <ul>
                                    <li>
                                        <Link href="/products">Вся морожка</Link>
                                    </li>
                                    <li>
                                        <Link href="/products/add">Добавить морожку</Link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <span class="nav__link__element fold__menu__title">Морожка
                            <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.0215 1.70313L7.07031 6.6543C6.76648 6.95812 6.27388 6.95812 5.97005 6.6543L1.01889 1.70313C0.715059 1.3993 0.715059 0.906699 1.01889 0.602871C1.32272 0.299043 1.81532 0.299043 2.11915 0.602871L6.52018 5.00391L10.9212 0.602871C11.225 0.299043 11.7177 0.299043 12.0215 0.602871C12.3253 0.906699 12.3253 1.3993 12.0215 1.70313Z">
                                </path>
                            </svg>
                        </span>
                    </li>
                    <li>
                        <Link class="nav__link__element" href="/orders">Заказы</Link>
                    </li>
                    <li>
                        <Link class="nav__link__element" href="/users">Пользователи</Link>
                    </li>
                </ul>
            </nav>
        </div>
        <Link class="focus__button" href="https://loooltooot.github.io">Узнать о нас</Link>
    </header>
</template>

<style lang="scss" scoped>
header,
#logo__nav__wrapper {
    display: flex;
    align-items: center;
}

header {
    padding-top: .8vw;
    padding-bottom: .8vw;
    padding-inline: var(--header-inline-padding);
    justify-content: space-between;
    position: sticky;
    top: 0;
    background-color: white;
    z-index: 10;
}

#logo__nav__wrapper {
    column-gap: 2vw;
}

.fold__menu {
    width: 17vw;
}
</style>

<style lang="scss">
nav ul {
    column-gap: .78vw;

    li {
        position: relative;

        &:hover {
            .nav__link__element {
                color: #797979;
            }

            .fold__menu__title svg {
                transform: rotate(180deg);
            }

            .fold__menu__title path {
                fill: #797979;
            }
        }
    }

    li:hover .fold__menu__wrapper {
        display: block;
        top: calc(1.8vw - 5.21vw);
        padding-top: 5.21vw;
    }
}
</style>