<script>
import Card from '@/Components/Card.vue';

export default {
  props:['name', 'cards', 'id'],
  components:{
    Card,    
  },
  emits:[
    'cardUpdated'
  ]
}

</script>

<template>
  <div class="col-md-8 col-sm-12 col-12 board-box-side">
    <div class="board-box-title">
      <div class="title-board">{{ name }} </div>
    </div>
    <div class="d-flex justify-content-end pt-4 px-5">
      <a :href="route('scrumboard.create', {id : id})" class="btn col-md-4 col-sm-4 col-12 btn-primary">
          <span class="fa fa-plus"></span> Card
      </a>
    </div>
    <div class="card-holder">
      <div class="d-flex flex-wrap justify-content-between">
        <Card v-for="card in cards" :key="card.id" v-bind="card" @cardUpdated="this.$emit('cardUpdated')"/>
      </div>
    </div>
  </div>
</template>