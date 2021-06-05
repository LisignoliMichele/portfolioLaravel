
var app = new Vue(
   {
      el: "#app",
      data:{
         currentTime: '',
      },
      methods: {
         moment: function () {
           return moment();
         }
       },
      watch: {
         moment: function (date) {
           this.currentTime = moment(date).format('MMMM Do YYYY, h:mm:ss a');
         }
       }
   });