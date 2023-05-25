<script>
import axios from 'axios';

export default {
  props:['title','description','color','id','board_id'],
  data() {
    return {
      updatedBoardId:0
    }
  },
  computed:{
    style() {
      return 'background-color:' + this.color;
    },
    disableBackButton() {
      return (this.board_id==1) ? true : false;
    },
    disableNextButton() {
      return (this.board_id==6) ? true : false;
    }
  },
  methods: {
    handleDelete() {
      axios.delete(route('card.delete', {
          'id': this.id
        }), {headers: {Accept:'application/json'}})
        .then(data => {
          if (data.status == 200) {
            this.$emit('cardUpdated');
          }
        })
        .catch(err => console.log(err))
    },
    handleUpdate(updateType) {
      if (updateType == 'next') {
        this.updatedBoardId = this.board_id + 1;
      } else {
        this.updatedBoardId = this.board_id - 1;
      }
      console.log(this.updatedBoardId);
      axios.put(route('card.edit', {
          'id': this.id
        }),{
          title: this.title,
          description: this.description,
          color: this.color,
          board_id: this.updatedBoardId,
        }, {headers: {Accept:'application/json'}})
        .then(data => {
          if (data.status == 201) {
            this.$emit('cardUpdated');
          }
        })
        .catch(err => console.log(err))
    }
  },
  emits: ['cardUpdated']
}
</script>

<template>
  <div class="card col-md-5">
    <div class="card-header" :style="style"></div>
    <div class="card-body" >
      <h5 class="card-title">{{ title }}</h5>
      <p class="card-text">{{ description }}</p>
    </div>
    <div class="card-footer d-flex justify-content-around flex-wrap" :style="style">
      <button @click="handleUpdate('back')" class="btn col-md-4 col-sm-12 col-12 btn-primary" :disabled="disableBackButton">
          <span class="fa fa-arrow-left"></span>
      </button>
      <button @click="handleDelete" class="btn col-md-4 col-sm-12 col-12 btn-danger">
          <span class="fa fa-trash"></span>
      </button>
      <button @click="handleUpdate('next')" class="btn col-md-4 col-sm-12 col-12 btn-primary" :disabled="disableNextButton">
          <span class="fa fa-arrow-right"></span>
      </button>
    </div>
  </div>
</template>

<style scoped>
.card-title {
  font-weight: bolder;
}
</style>