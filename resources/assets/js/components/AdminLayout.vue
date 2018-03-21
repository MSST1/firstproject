<template lang="html">
  <div class="">
    <admin-navigation></admin-navigation>
    <div class="content">
      <router-view
        :route_testuser = "route_testuser"
      ></router-view>
    </div>
  </div>
</template>

<script>
  import AdminNavigation from './AdminNavigation.vue';
export default {
  props:[
    'route_testuser',
    'asset'
  ],
  components: {
    AdminNavigation
  },
  beforeMoun(){
    comsole.log(this.props.asset);
  }
}
</script>

<style lang="css">
</style>
