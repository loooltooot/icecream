<script setup>
import Layout from '../../Shared/Layout.vue';
import Card from '../../Shared/product/Card.vue'

defineProps({ products: Array, allowDelete: Boolean })
</script>

<script>
export default {
    data() {
        return {
            searchQuery: '',
            desc: false,
            sortType: ''
        }
    },
    methods: {
        sortArray(array) {
            if (!this.sortType) {
                return this.searchQuery ? this.products.filter((product) =>
                    product.title.toLowerCase().includes(this.searchQuery.toLowerCase())
                )
                    : this.products
            }

            return this.desc
                ? array.sort((a, b) => +b[this.sortType] - +a[this.sortType])
                : array.sort((a, b) => +a[this.sortType] - +b[this.sortType]);
        }
    },
    computed: {
        searchedProducts() {
            return this.searchQuery ? this.products.filter((product) =>
                product.title.toLowerCase().includes(this.searchQuery.toLowerCase())
            )
                : this.products
        },
        sortedProducts() {
            return this.sortArray(this.searchedProducts)
        }
    }
}
</script>

<template>
    <Layout>
        <section>
            <div>
                <div class="wrapper">
                    <h2 class="hero__header">
                        морожка
                    </h2>
                    <input type="text" placeholder="Поиск" v-model="searchQuery">
                    <label for="price__sort">
                        по цене
                    </label>
                    <input id="price__sort" name="sort" value="price" type="radio" v-model="sortType" />
                    <label for="ccal_sort">
                        по ккал
                    </label>
                    <input id="ccal_sort" name="sort" value="ccal" type="radio" v-model="sortType" />
                    <label for="desc">
                        по убыванию
                    </label>
                    <input id="desc" type="checkbox" v-model="desc" />
                </div>
            </div>
            <ul>
                <li v-for="product of sortedProducts" :key="product.id">
                    <Card :product="product" :allow-delete="allowDelete" />
                </li>
            </ul>
        </section>
    </Layout>
</template>

<style lang="scss" scoped>
.wrapper {
    margin-bottom: 2vw;
    margin-top: -1vw;
    position: sticky;
    top: 2.8vw;
}

section {
    display: flex;
}

ul {
    padding-inline: var(--main-inline-padding);
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    column-gap: 1.04vw;
    row-gap: 1.04vw;
}
</style>