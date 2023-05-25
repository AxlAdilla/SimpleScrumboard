<script>
import Navigator from '@/Layouts/Navigation.vue';
import Footer from '@/Layouts/Footer.vue';
import axios from 'axios';
export default {
  props:['board_id'],
  data() {
    return {
      title:'',
      description:'',
      color:'#0d6efd',

      errors: {
        title: [
          // 'Title Error',
          // 'Title Error',
        ]
      },
      alertSuccess: false,
    }
  },
  methods: {
    showError(assocKey) {
      if (assocKey in this.errors && this.errors[assocKey].length > 0) {
        return true
      } else {
        return false
      }
    },
    handlePost() {
      axios.post(route('card.store'),{
          title: this.title,
          description: this.description,
          color: this.color,
          board_id: this.board_id,
        }, {headers: {Accept:'application/json'}})
        .then(data => {
          if (data.status == 201) {
            this.alertSuccess = true
            this.title = '',
            this.description='',
            this.color='#0d6efd'
          }
        })
        .catch(err => console.log(err))
    }
  },
  components:{
    Navigator,
    Footer
  },
}
</script>

<template>
  <Navigator />
  <main class="create-card mt-5 py-3">
    <div class="container ">
      <div class="row">
        <form @submit.prevent="handlePost">
          <div class="mb-12">
            <label for="title" class="form-label">Title</label>
            <input required type="text" class="form-control" id="title" name="title" v-model="title">
            <div v-if="showError('title')">
              <div v-for="error in this.errors['title']" :key="error" class="alert alert-danger" role="alert">
                {{ error }}
              </div>
            </div>
          </div>
          <div class="mb-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" v-model="description" rows="3"></textarea>
            <div v-if="showError('description')">
              <div v-for="error in this.errors['description']" :key="error" class="alert alert-danger" role="alert">
                {{ error }}
              </div>
            </div>
          </div>
          <div class="mb-12">
            <label for="cardColor" class="form-label">Choose your card color</label>
            <input type="color" class="cardColor d-block" id="cardColor" v-model="color" title="Choose your card color">
          </div>
          <div v-if="alertSuccess" class="alert alert-success mt-3" role="alert">
            Card Successfully Added
          </div>
          <div class="mt-3 mb-12 d-flex justify-content-between">
            <a :href="route('scrumboard.index')" class="btn btn-primary" >Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </main>
  <Footer />
</template>