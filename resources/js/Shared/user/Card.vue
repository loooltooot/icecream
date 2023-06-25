<script setup>
defineProps({ user: Object })
</script>

<template>
    <div class="card user__card">
        <h3>{{ user.email }}</h3>
        <span class="name">{{ user.name }}</span>
        <span class="role">{{ user.title }}</span>
    </div>
</template>

<style lang="scss" scoped>
.user__card {
    border: black .055vw solid;
}

h3 {
    font-weight: 700;
    font-size: var(--h3-font-size);
}

span {
    display: block;
}
</style>