<template>
    <a href=""><div class="proj">
        <!-- <img src="{{ project.img }}" alt=""> -->
        <h2>{{ project.title }}</h2>
    </div></a>
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
