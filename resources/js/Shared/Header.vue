<script setup>
import { Link } from '@inertiajs/vue3';
import axios from 'axios';
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
                                        <svg width="14" height="21" viewBox="0 0 14 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.68884 20.0038L6.41718 20.3697L2.01417 11.3381C-0.977158 9.592 -0.533825 4.85389 2.66284 3.64968C2.94284 1.73453 4.40584 0 6.88851 0C9.49251 0 10.9228 1.83642 11.1795 3.81642C14.3085 5.22442 14.3902 10.1269 11.4688 11.5789L7.68884 20.0038ZM9.03517 4.34211C8.90888 4.34193 8.78267 4.34889 8.65718 4.36295L8.47751 3.55705C8.74127 3.47632 9.01583 3.43572 9.29184 3.43663C9.48985 3.43665 9.6877 3.44748 9.88451 3.46905C9.72502 2.80853 9.34027 2.22309 8.79549 1.81199C8.25071 1.40088 7.57944 1.18943 6.89551 1.21347C6.23133 1.19316 5.57973 1.39622 5.04646 1.78969C4.5132 2.18317 4.12957 2.74396 3.95784 3.38105C4.06284 3.38105 4.16784 3.38105 4.27751 3.38105C6.80917 3.38105 8.23017 5.11558 8.54517 7.03074L7.66084 7.26232C7.40884 5.9261 6.26084 4.71495 4.27518 4.71495C1.22551 4.71495 0.406508 8.54063 2.45284 10.0783L3.40251 10.1061C3.40251 10.5693 3.42117 11.0787 3.42117 11.352C3.42117 12.4891 5.04051 12.5632 5.05451 11.352C5.04795 11.2801 5.05627 11.2076 5.07893 11.139C5.1016 11.0704 5.13815 11.0071 5.18633 10.953C5.23451 10.8989 5.29332 10.8551 5.35914 10.8244C5.42497 10.7937 5.49643 10.7766 5.56914 10.7742C5.64185 10.7718 5.71429 10.7842 5.782 10.8106C5.84972 10.837 5.91129 10.8769 5.96294 10.9277C6.0146 10.9785 6.05524 11.0393 6.08239 11.1063C6.10955 11.1733 6.12263 11.2451 6.12084 11.3173C6.12084 11.5488 6.12084 12.9754 6.12084 13.1352C6.12084 14.7122 8.61284 14.7215 8.61518 13.1097C8.61518 13.0055 8.61518 11.8823 8.61518 11.5836C8.61518 10.7985 8.97684 10.34 9.83551 10.2983L11.0022 10.3331C13.2842 8.98063 12.4605 4.34211 9.03517 4.34211Z"
                                                fill="black" />
                                        </svg>
                                        <Link href="/admin/products">Вся морожка</Link>
                                    </li>
                                    <li>
                                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.74832 19.6404L5.53767 20L1.67026 9.55958C-0.249004 9.22954 -0.500019 6.53693 0.843912 5.28508C0.846133 2.64937 2.60102 0 5.9664 0C9.21626 0 10.869 2.47866 10.96 5.0074C12.5283 6.07716 12.3284 9.01104 10.3225 9.44577L6.74832 19.6404ZM5.95307 1.21998C3.04751 1.21998 1.70803 3.78741 2.08566 6.01343C0.837248 6.50506 0.866126 8.22806 2.24116 8.42836H2.82538C2.82538 8.81757 2.8387 9.21134 2.8387 9.43667C2.8387 10.5565 4.38256 10.6293 4.39366 9.43667C4.38743 9.36599 4.39534 9.29475 4.41692 9.22732C4.4385 9.15989 4.47329 9.09768 4.51916 9.04451C4.56503 8.99134 4.62102 8.94833 4.68368 8.91811C4.74635 8.88789 4.81438 8.8711 4.8836 8.86878C4.95283 8.86645 5.02178 8.87863 5.08625 8.90457C5.15072 8.93051 5.20933 8.96967 5.25851 9.01964C5.30768 9.06962 5.34638 9.12935 5.37223 9.19519C5.39808 9.26103 5.41053 9.33158 5.40883 9.40253C5.40883 9.63014 5.40883 11.0322 5.40883 11.1893C5.40883 12.737 7.78126 12.7484 7.78348 11.1665C7.78348 11.0641 7.78348 9.95789 7.78348 9.66428C7.78348 8.89951 8.11891 8.45112 8.92082 8.40105H9.58723C11.2688 8.3009 11.3088 6.21828 9.74939 5.91783C10.0559 3.71458 8.80531 1.21998 5.95307 1.21998Z"
                                                fill="black" />
                                        </svg>
                                        <Link href="/admin/products/add">Добавить морожку</Link>
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
                        <Link class="nav__link__element" href="/admin/orders">Заказы</Link>
                    </li>
                    <li>
                        <Link class="nav__link__element" href="/admin/users">Пользователи</Link>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="extra__div">
            <Link v-if="$store.state.loggedIn" href="/logout" id="logout">
            Выйти
            </Link>
            <Link class="focus__button" href="https://loooltooot.github.io">Узнать о нас</Link>
        </div>
    </header>
</template>

<style lang="scss" scoped>
#extra__div {
    display: flex;
    align-items: center;
    column-gap: 1.04vw;

    a#logout:hover {
        color: red;
    }
}

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
                color: var(--unfocus-text-color);
            }

            .fold__menu__title svg {
                transform: rotate(180deg);
            }

            .fold__menu__title path {
                fill: var(--unfocus-text-color);
            }
        }
    }

    li:hover .fold__menu__wrapper {
        display: block;
        top: -3.41vw;
        padding-top: 5.21vw;
    }
}
</style>