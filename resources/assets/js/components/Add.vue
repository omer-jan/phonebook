<template>
	<div class="modal " :class="openmodal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head  " style="">
        <p class="modal-card-title">Modal title</p>
        <button class="delete" aria-label="close" @click="close"></button>
      </header>
      <section class="modal-card-body">
         
         <div class="field">
        <label class="label">Name</label>
        <div class="control">
          <input class="input" type="text" v-modal="list.name" placeholder="Enter Name">
        </div>
      </div>
       <div class="field">
        <label class="label">Number</label>
        <div class="control">
          <input class="input" type="Number" v-modal="list.number"  placeholder="Enter Number">
        </div>
      </div>
      <div class="field">
        <label class="label">E-mail</label>
        <div class="control">
          <input class="input" type="emit" v-modal="list.email" placeholder="Enter E-mail">
        </div>
      </div>

    </section>
    <footer class="modal-card-foot">
      <button class="button is-link" @click="saveme">Save changes</button>
      <button class="button" @click="close">Cancel</button>
    </footer>
  </div>
</div>
</template>
<script>
 export default{
  props:['openmodal'],
  data()
  {
    return {
      list:{
        name:'',
        number:'',
        email :'',
      }
    }

  },
  methods:{
    close(){
      //fire event  and name that event closeRequest
      this.$emit('closeRequest');
    },
    saveme()
    {

    }

  }
}
</script>