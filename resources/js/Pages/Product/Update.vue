<script setup>
import Layout from '../../Shared/Layout.vue';

defineProps({ product: Object })
</script>

<script>
export default {
    data() {
        return {
            img: '',
            imgURL: '/images/products/' + this.product.img,
            title: '',
            description: '',
            price: 0,
            ccal: 0
        }
    },
    methods: {
        fileInputHandler(event) {
            this.img = event.target.files[0]
            this.imgURL = URL.createObjectURL(this.img)
        }
    },
    mounted() {
        this.title = this.product.title
        this.description = this.product.description
        this.price = this.product.price
        this.ccal = this.product.ccal
    }
}
</script>

<template>
    <Layout>
        <section>
            <div>
                <div class="wrapper">
                    <h2 class="hero__header">+ морожка</h2>
                </div>
            </div>
            <form :action="'/admin/products/' + product.id" method="POST" enctype="multipart/form-data" accept="image/*">
                <input v-model="title" required type="text" name="title" placeholder="Название">
                <input v-model="description" required type="text" name="description" id="description"
                    placeholder="Описание" />
                <label for="file">
                    <div class="focus__button">Выбрать картинку</div>
                    <div class="img__wrapper">
                        <img :src="imgURL" :alt="title" />
                    </div>
                </label>
                <input required @change="fileInputHandler" type="file" name="img" id="file" style="display: none;">
                <input v-model="price" required min="0" type="number" name="price" placeholder="Цена">
                <input v-model="ccal" required min="0" type="number" name="ccal" placeholder="Калорийность">

                <input class="focus__button" type="submit" value="Обновить">
            </form>
        </section>
    </Layout>
</template>