<script setup>
import Layout from '../../Shared/Layout.vue';
</script>

<script>
export default {
    data() {
        return {
            img: '',
            imgURL: ''
        }
    },
    methods: {
        fileInputHandler(event) {
            this.img = event.target.files[0]
            this.imgURL = URL.createObjectURL(this.img)
        }
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
            <form action="/admin/products/add" method="POST" enctype="multipart/form-data" accept="image/*">
                <input required type="text" name="title" placeholder="Название">
                <input required type="text" name="description" id="description" placeholder="Описание" />
                <label for="file">
                    <div class="focus__button">Выбрать картинку</div>
                    <div class="img__wrapper">
                        <img :src="imgURL" alt="" />
                    </div>
                </label>
                <input required @change="fileInputHandler" type="file" name="img" id="file" style="display: none;">
                <input required min="0" type="number" name="price" placeholder="Цена">
                <input required min="0" type="number" name="ccal" placeholder="Калорийность">

                <input class="focus__button" type="submit" value="Создать">
            </form>
        </section>
    </Layout>
</template>