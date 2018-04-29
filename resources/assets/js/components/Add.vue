<template>
	<div class="modal  " :class="openmodal">
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
          <input class="input" type="text" :class="{ 'is-danger':errors.name}" v-model="list.name" placeholder="Enter Name">
        </div>
        <small v-if="errors.name" class="has-text-danger"  >{{errors.name[0]}}</small>
      </div>
      <div class="field">
        <label class="label">Phone</label>
        <div class="control">
          <input class="input" type="Number" :class="{ 'is-danger':errors.phone}" v-model="list.phone"  placeholder="Enter Phone Number">
        </div>
          <small v-if="errors.phone" class="has-text-danger"  >{{errors.phone[0]}}</small>
      </div>
      <div class="field">
        <label class="label">E-mail</label>
        <div class="control">
          <input class="input" type="emit" :class="{ 'is-danger':errors.email}" v-model="list.email" placeholder="Enter E-mail">
        </div>
          <small v-if="errors.email" class="has-text-danger"  >{{errors.email[0]}}</small>
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
        phone:'',
        email :''
      },
      errors:{}
    }

  },
  methods:{
    close(){
      //fire event  and name that event closeRequest
      this.$emit('closeRequest');
    },
    saveme()
    {
      axios.post('/phonebook',this.$data.list).then((response)=>this.close())
      .catch((error)=>this.errors=error.response.data.errors)

    }

  }
}
</script>
 