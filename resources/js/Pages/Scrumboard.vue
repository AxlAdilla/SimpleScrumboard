<script>
import Navigator from '@/Layouts/Navigation.vue';
import Footer from '@/Layouts/Footer.vue';
import Board from '@/Components/Board.vue';
import axios from "axios";

export default {
  data() {
    return {
      boards: [],
    }
  },
  components:{
    Navigator,
    Footer,
    Board,
  },
  methods: {
    fetchData() {
      axios.get(route('board.index'), { headers: { Accept: 'application/json' }})
        .then(res => {
          this.boards = res.data.data
        })
        .then(() => {
          console.log(this.boards)
        })
        .catch(err => console.log(err))
    }
  },
  mounted() {
    this.fetchData()
  },
}

</script>

<template>
  <Navigator />
  <div id="board-container" class="d-flex pt-4">
    <Board v-for="board in boards" :key="board.id" v-bind="board" @cardUpdated="fetchData"/>
  </div>
  <Footer />
</template>
