/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/portfolio.js ***!
  \***********************************/
var app = new Vue({
  el: "#app",
  data: {
    time: '',
    burgerActive: '',
    pagesmobile: '',
    projects: [{
      webPage: 'img/ARTIST.png',
      name: 'Artist',
      tecnologies: 'SCSS | GASB | Flickity | HTML5 | Vue.js',
      url: 'artist'
    }, {
      webPage: 'img/spotifyMichele.png',
      name: 'Spotify Web',
      tecnologies: 'HTML | CSS | Vue.js',
      url: 'spotify'
    }, {
      webPage: 'img/digitaloceanMichele.png',
      name: 'Digital Ocean',
      tecnologies: 'HTML5 | CSS ',
      url: 'digitalocean'
    }, {
      webPage: 'img/hubspot.png',
      name: 'Hubspot',
      tecnologies: 'HTML5 | CSS ',
      url: 'hubspot'
    }, {
      webPage: 'img/BOLZAPP.png',
      name: 'Whatsapp',
      tecnologies: 'HTML5 | CSS | Vue.js',
      url: 'boolzapp'
    }, {
      webPage: 'img/boolflix.png',
      name: 'Netflix',
      tecnologies: 'Axios | Vue.js | HTML5 | CSS',
      url: 'boolflix'
    }, {
      webPage: 'img/HELBIZ.png',
      name: 'helbiz',
      tecnologies: 'HTML5 | CSS ',
      url: 'helbiz'
    }]
  },
  methods: {
    activeMenu: function activeMenu() {
      this.burgerActive = "burgeractive";
      this.pagesmobile = "pagelistActive";
    },
    hideMenu: function hideMenu() {
      this.burgerActive = "";
      this.pagesmobile = "";
    },
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
TweenLite.defaultEase = Linear.easeNone;
var picker = document.querySelector(".picker");
var cells = document.querySelectorAll(".cell");
var proxy = document.createElement("div");
var cellWidth = 450; //var rotationX = 90;

var numCells = cells.length;
var cellStep = 1 / numCells;
var wrapWidth = cellWidth * numCells;
var baseTl = new TimelineMax({
  paused: true
});
TweenLite.set(picker, {
  //perspective: 1100,
  width: wrapWidth - cellWidth
});

for (var i = 0; i < cells.length; i++) {
  initCell(cells[i], i);
}

var animation = new TimelineMax({
  repeat: -1,
  paused: true
}).add(baseTl.tweenFromTo(1, 2));
var draggable = new Draggable(proxy, {
  // allowContextMenu: true,  
  type: "x",
  trigger: picker,
  throwProps: true,
  onDrag: updateProgress,
  onThrowUpdate: updateProgress,
  snap: {
    x: snapX
  },
  onThrowComplete: function onThrowComplete() {
    console.log("onThrowComplete"); //TODO: animation that inject selected card title
  }
});

function snapX(x) {
  return Math.round(x / cellWidth) * cellWidth;
}

function updateProgress() {
  animation.progress(this.x / wrapWidth);
}

function initCell(element, index) {
  TweenLite.set(element, {
    width: cellWidth,
    scale: 0.6,
    //rotationX: rotationX,
    x: -cellWidth
  });
  var tl = new TimelineMax({
    repeat: 1
  }).to(element, 1, {
    x: "+=" + wrapWidth
    /*, rotationX: -rotationX*/

  }, 0).to(element, cellStep, {
    color: "#009688",
    scale: 1,
    repeat: 1,
    yoyo: true
  }, 0.5 - cellStep);
  baseTl.add(tl, i * -cellStep);
}
/******/ })()
;