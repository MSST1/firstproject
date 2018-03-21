<template>
  <div class="">
    <p>SubComponent ready</p>
    <router-view></router-view>
    <router-link :to="{ name: 'users', params: {} }">To Users</router-link>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('SubComponent mounted.')
        }
    }
</script>
