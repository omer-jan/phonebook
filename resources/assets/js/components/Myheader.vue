<template>
<div>
<nav class="navbar is-link" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="#">      
          PhoneBook     
    </a>
    <div class="navbar-burger burger" data-target="navMenuColorlink-example">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div  class="navbar-menu">
    <div class="navbar-start">
      <router-link to="/home" class="navbar-item">Home</router-link>
      <router-link to="/about" class="navbar-item">about</router-link>
      
    </div>

    
  </div>
</nav>

</div>
<!-- /////////////////////////// -->


</template>

<script>
    export default {
        mounted() {
            console.log('hi i am mounted.')
        }
    }
</script>
