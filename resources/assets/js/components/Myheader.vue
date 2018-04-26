<template>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="#">
     PhoneBook
    </a>
    <div class="navbar-menu is-active">
      <router-link to="/home">Home</router-link>
      <router-link to="/about">about</router-link>
  
    </div>
      

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
</nav>
</template>

<script>
    export default {
        mounted() {
            console.log('hi i am mounted.')
        }
    }
</script>
