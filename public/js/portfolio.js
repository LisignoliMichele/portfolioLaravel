/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/portfolio.js ***!
  \***********************************/
var app = new Vue({
  el: "#app",
  data: {
    time: ''
  },
  methods: {
    moment: function (_moment) {
      function moment() {
        return _moment.apply(this, arguments);
      }

      moment.toString = function () {
        return _moment.toString();
      };

      return moment;
    }(function () {
      return moment();
    })
  },
  beforeMount: function beforeMount() {
    var _this = this;

    setInterval(function () {
      _this.time = moment().format('HH:mm:ss');
    }, 1000);
  }
});
/******/ })()
;