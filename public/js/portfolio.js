var app = new Vue({
  el: "#app",
  data: {
    
    time: '',
  },
  methods: {
    moment: function () {
      return moment();
    }
  },
  beforeMount () {
    setInterval(() => {
      this.time = moment().format('HH:mm:ss')
    }, 1000)
  }
});