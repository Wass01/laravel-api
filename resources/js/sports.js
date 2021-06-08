let app = new Vue({
  el: '#root',
  data: {
    sports: []
  },
  created() {
    axios.get('http://localhost:8000/api/sports').then((response) => {
      this.sports = response.data.data;
    })
  }
});
