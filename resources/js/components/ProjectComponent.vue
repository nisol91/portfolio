<template>
    <div class="proj">
        <h2>{{ project.title }}</h2>
    </div>
</template>

<script>
    export default {
        props: ['project'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style lang="scss">
</style>
