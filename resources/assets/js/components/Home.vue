<template>
<div>
  <nav class="panel column is-offset-2 is-8">
  <p class="panel-heading">
    View Js Phone Book
    <br> <br>
    <button class="button is-link " @click="openAdd">Add new </button>

  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" placeholder="search">
      <span class="icon is-small is-left">
        <i class="fas fa-search" aria-hidden="true"></i>
      </span>
    </p>
  </div>
  
  <a class="panel-block is-active" style="color:red;">
    <span class="column is-9">my name</span>
           
      <span class="column is-2   panel-icon" >
      
        <i class="fa fa-edit fa-fw" style="color:blue;"></i>
        <i class="fa fa-trash fa-fw" style="color:red;"></i>      
        <i class="fa fa-eye fa-fw" style="color:green;"></i>
    </span>      
      <span class="column is-1 panel-icon" style="color:red;">   
    </span>      
  </a>
   
  <div class="panel-block">
    <button class="button is-link is-outlined is-fullwidth">
      reset all filters
    </button>
  </div>
</nav>
<Add :openmodal='addActive'></Add>
</div> 
 
</template>
<script>
  window.Vue = require('vue');
  import Vue from 'vue'
  Vue.component('Add', require('./Add.vue'));
  let Add=require('./Add.vue');
    export default {
      components:{Add},
      data () {
        return {
          addActive:'',
        }

      },
      methods:{
        openAdd() {
          this.addActive="is-active";
        }
      }
    }
        
</script>
 
