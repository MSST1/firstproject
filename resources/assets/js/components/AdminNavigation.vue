<template lang="html">
  <div class="">
    <div class="menu">
        <div class="logo">
          <router-link
          :to="{ name: 'home', params: {} }">
            <img src="/public/img/adminLogo.png" alt="">
          </router-link>
        </div>
      <div class="sidebarMenu">
          <router-link :to="{ name: 'users', params: {} }">
            <div class="menuItem">
              <span class="fa fa-user fa-2x"></span><br>
              <span class="menuHref" style="text-decoration:none;">users</span>
            </div>
          </router-link>
        <div class="menuItem">
          <span class="fa fa-trash fa-2x"></span><br>
          posts
        </div>
      </div>
    </div>
    <div class="topMenu">
      topmenu
    </div>
  </div>
</template>

<script>
export default {
}
</script>

<style lang="css">
a{
  text-decoration: none;
  color: #000;
}
a:hover{
  text-decoration: none;
  color: #000;
}
.logo{
  min-height: 80px;
  background-color: #1d1d20;
}
.topMenu{
  background-color: #343336;
  width: 100%;
  min-height: 80px;
}
.menu {
  background-color: #8cc665;
  min-width: 150px;
  float: left;
  min-height: 100%;
}
.menu .menuItem{
  padding-top: 20px;
  padding-left: 0px;
  text-align: center;
  min-height: 40px;
}
.menu .menuItem:hover{
  background-color: white;
}
.sidebarMenu .menuHref{
  text-decoration: none;
}
</style>
