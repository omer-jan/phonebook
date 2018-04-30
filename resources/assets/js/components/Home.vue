<template>
<div>
  <nav class="panel column is-offset-2 is-8">
  <p class="panel-heading">
    
   Phone Book
   <br>
   <br>
     
   
      <button class="button is-link " @click="openAdd">Add new </button>
    
    
      <i class="fa fa-spinner fa-spin fa-fw is-pulled-right " v-if="loading" style="color:#3273dc; font-size:35px"></i>
    
    

  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" v-model="searchQuery" placeholder="search">
      <span class="icon is-small is-left">
        <i class="fa fa-search fa-fw has-text-info" aria-hidden="true"></i>
      </span>
    </p>
  </div>
  <div class="panel-block">
    <span class="column is-3">Name</span>
    <span class="column is-3">Phone</span>
    <span class="column is-3">E-mail</span>
    <span class="column is-3">Action</span>

  </div>
  
  <a class="panel-block is-active" style="color:black;" v-for="item,key in templist">
    <span class="column is-3">{{item.name}}</span>
    <span class="column is-2">{{item.phone}}</span>
    <span class="column is-4">{{item.email}}</span>
           
      <span class="column is-2   panel-icon" >
      
        <i class="fa fa-edit fa-fw has-text-info"  @click="openEdit(key)"  ></i>
        <i class="fa fa-trash fa-fw has-text-danger" @click="del(key,item.id)"></i>   
        <i class="fa fa-eye fa-fw has-text-primary" @click="openShow(key)"></i>   
       
    </span>      
      <span class="column is-1 panel-icon" style="color:red;">   
    </span>      
  </a>
   
  
</nav>
<Add :openmodal='addActive' @closeRequest="closeme"></Add> <!-- it is mean when closeRequest is fired so closeme method is should called  -->
<show :openmodal='showActive' @closeRequest="closeme"></show> <!-- it is mean when closeRequest is fired so closeme method is should called --> 
<update :openmodal='updateActive' @closeRequest="closeme"></update> <!-- it is mean when closeRequest is fired so closeme method is should called  -->
</div> 
 
</template>
<script>
  window.Vue = require('vue');
  import Vue from 'vue'
  Vue.component('Add', require('./Add.vue'));
  Vue.component('show', require('./show.vue'));
  Vue.component('update', require('./update.vue'));
  let Add=require('./Add.vue');  
  let show=require('./show.vue');
  let update=require('./update.vue');
    export default {
      components:{Add,show,update},
      data () {
        return {
          addActive:'',
          showActive:'',
          updateActive:'',
          lists:{},// for list data
          errors:{},// to show errors
          loading:false,
          searchQuery:'',
          templist:''
        }

      },
      watch:
      {
        searchQuery(){
          if (this.searchQuery.length>0) {
           this.templist= this.lists.filter((item) =>{             
             return  Object.keys(item).some((key)=>{
                let string=String(item[key]);
                return string.toLowerCase().indexOf(this.searchQuery.toLowerCase())>-1;
              // body...

              });
            });
            //console.log(result);
          }
          else
          {
            this.templist= this.lists;
          }
         
        }
      },
      mounted(){
         axios.post('/getdata'). // we call getdata  method for that we need to create route web.php
         then((response)=>this.lists=this.templist=response.data)//to show fetched data in lists so we need to reate a list in data parts
      .catch((error)=>this.errors=error.response.data.errors)  // show errors we need to create errors in data parts
      },
      methods:{
        openAdd() {
          this.addActive="is-active";
        },
         openShow(key) {
          this.$children[1].list=this.templist[key];// take the second compnent that is show and initialized its list component with the list that has key
          this.showActive="is-active";
        },
        openEdit(key){
        this.$children[2].list=this.templist[key];// take the second compnent that is show and initialized its list component with the list that has key
          this.updateActive="is-active";

        },
         refereshdata(){
         axios.post('/getdata'). // we call getdata  method for that we need to create route web.php
         then((response)=>this.templist=response.data)//to show fetched data in lists so we need to reate a list in data parts
      .catch((error)=>this.errors=error.response.data.errors)  // show errors we need to create errors in data parts
      },
      del(key,id)
      {

        if(confirm("Are you sure?"))
        {
          this.loading=!this.loading;


         axios.delete(`/phonebook/${id}`). // we call getdata  method for that we need to create route web.php
         then((response)=>{this.templist.splice(key,1);this.loading=!this.loading;})//to show fetched data in lists so we need to reate a list in data parts
      .catch((error)=>this.errors=error.response.data.errors) 
      }


      },

      closeme(){
            this.addActive='';
          this.showActive='';
          this.updateActive='';
      //       axios.post('/getdata'). // we call getdata  method for that we need to create route web.php
      //    then((response)=>this.lists=response.data)//to show fetched data in lists so we need to reate a list in data parts
      // .catch((error)=>this.errors=error.response.data.errors) 
         
           
        }
      }
    }
        
</script>
 
