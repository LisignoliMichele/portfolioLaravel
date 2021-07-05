var app = new Vue({
  el: "#app",
  data: {
    time: '',
    burgerActive: '',
    pagesmobile: '',
    projects: [
      {
        webPage: 'img/ARTIST.png',
        name: 'Artist',
        tecnologies: 'SCSS | GASB | Flickity | HTML5 | Vue.js',
        url: 'artist',
      },
      {
        webPage: 'img/spotifyMichele.png',
        name: 'Spotify Web',
        tecnologies: 'HTML | CSS | Vue.js',
        url: 'spotify',
      },
      {
        webPage: 'img/digitaloceanMichele.png',
        name: 'Digital Ocean',
        tecnologies: 'HTML5 | CSS ',
        url: 'digitalocean',
      },
      {
        webPage: 'img/hubspot.png',
        name: 'Hubspot',
        tecnologies: 'HTML5 | CSS ',
        url: 'hubspot',
      },
      {
        webPage: 'img/BOLZAPP.png',
        name: 'Whatsapp',
        tecnologies: 'HTML5 | CSS | Vue.js',
        url: 'boolzapp',
      },
      {
        webPage: 'img/boolflix.png',
        name: 'Netflix',
        tecnologies: 'Axios | Vue.js | HTML5 | CSS',
        url: 'boolflix',
      },
      {
        webPage: 'img/HELBIZ.png',
        name: 'helbiz',
        tecnologies: 'HTML5 | CSS ',
        url: 'helbiz',
      }
    ],
  },
  methods: {
    activeMenu: function (){
      this.burgerActive = "burgeractive";
      this.pagesmobile = "pagelistActive"
    },
    hideMenu: function (){
      this.burgerActive = "";
      this.pagesmobile = ""
    },
    moment: function () {
      return moment();
    },
  },
  beforeMount () {
    setInterval(() => {
      this.time = moment().format('HH:mm:ss')
    }, 1000)
  },
  mounted (){
     gsap.registerPlugin(Draggable);

     var slideDelay = 5;
     var slideDuration = 0.3;
     var snapX;
     
     var slides = document.querySelectorAll(".slide");
     var prevButton = document.querySelector("#prevButton");
     var nextButton = document.querySelector("#nextButton");
     var progressWrap = gsap.utils.wrap(0, 1);
     
     var numSlides = slides.length;
     
     gsap.set(slides, {
       xPercent: i => i * 100
     });
     
     var wrap = gsap.utils.wrap(-100, (numSlides - 1) * 100);
     var timer = gsap.delayedCall(slideDelay, autoPlay);
     
     var animation = gsap.to(slides, {
       xPercent: "+=" + (numSlides * 100),
       duration: 1,
       ease: "none",
       paused: true,
       repeat: -1,
       modifiers: {
         xPercent: wrap
       }
     });
     
     var proxy = document.createElement("div");
     var slideAnimation = gsap.to({}, {});
     var slideWidth = 0;
     var wrapWidth = 0;
     resize();
     
     var draggable = new Draggable(proxy, {
       trigger: ".slides-container",
       inertia: true,
       onPress: updateDraggable,
       onDrag: updateProgress,
       onThrowUpdate: updateProgress,
       snap: {     
         x: snapX
       }
     });
     
     window.addEventListener("resize", resize);
     
     prevButton.addEventListener("click", function() {
       animateSlides(1);
     });
     
     nextButton.addEventListener("click", function() {
       animateSlides(-1);
     });
     
     function updateDraggable() {
       timer.restart(true);
       slideAnimation.kill();
       this.update();
     }
     
     function animateSlides(direction) {
         
       timer.restart(true);
       slideAnimation.kill();
       
       var x = snapX(gsap.getProperty(proxy, "x") + direction * slideWidth);
       
       slideAnimation = gsap.to(proxy, {
         x: x,
         duration: slideDuration,
         onUpdate: updateProgress
       });  
     }
     
     function autoPlay() {  
       if (draggable.isPressed || draggable.isDragging || draggable.isThrowing) {
         timer.restart(true);
       } else {
         animateSlides(-1);
       }
     }
     
     function updateProgress() { 
       animation.progress(progressWrap(gsap.getProperty(proxy, "x") / wrapWidth));
     }
     
     function resize() {
       
       var norm = (gsap.getProperty(proxy, "x") / wrapWidth) || 0;
       
       slideWidth = slides[0].offsetWidth;
       wrapWidth = slideWidth * numSlides;
       snapX = gsap.utils.snap(slideWidth);
       
       gsap.set(proxy, {
         x: norm * wrapWidth
       });
       
       animateSlides(0);
       slideAnimation.progress(1);
     }
  },
});
