@extends('portfolio/layouts/main')
@section('favicon')
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
@endsection
@section('cdns')
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('pageTitle')
    Michele Lisignoli Portfolio
@endsection

@section('content')
{{-- VEU.JS --}}
<div id="app">
  {{-- PRELOADER --}}
  <div class="preloader">
    <div class="welcome">
      <div class="image_preloader">
        <img src="img/pz_1.png" alt="pz_1">
        <img src="img/pz_2.png" alt="pz_2">
        <img src="img/pz_3.png" alt="pz_3">
        <img src="img/pz_4.png" alt="pz_4">
        <img src="img/pz_5.png" alt="pz_5">
        <img src="img/pz_6.png" alt="pz_6">
      </div>
      <i>Welcome to my portfolio</i>
    </div>
  </div>
  {{-- //PRELOADER --}}

  <header>
    {{-- NAVBAR --}}
    <nav class="navbar">
      <div class="container">
        <div class="logo">
          <a href="#home"> <strong class="my">My</strong>portfolio</a>
        </div>
        <ul :class="pagesmobile" class="portfolioPages" @click="hideMenu">
          <li><a href="#home">Home</a></li>
          <li><a href="#aboutMe">About me</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contacts">Contacts</a></li>
        </ul>
        <div :class="burgerActive" class="burger">
          <i class="bars fas fa-bars" @click="activeMenu"></i>
          <i class="x far fa-times-circle" @click="hideMenu"></i>
        </div>
    </nav>
    {{-- //NAVBAR --}}
  </header>
  <main>
    {{-- HOME --}}
    <div id="home">
      {{-- home Lyrics --}}
      <div class="helloworld">
        <div class="hello">
            <div>H</div><div>e</div><div>l</div><div>l</div><div>o</div><div>w</div><div>o</div><div>r</div><div>l</div><div>d</div><div>,</div><div>I</div><div>a</div><div>m</div>
        </div>
          <div class='michele'>
              <div>M</div><div>i</div><div>c</div><div>h</div><div>e</div><div>l</div><div>e</div>
          </div>
          <div class='lisignoli'>
              <div>L</div><div>i</div><div>s</div><div>i</div><div>g</div><div>n</div><div>o</div><div>l</div><div>i</div>
        </div>
          <div class="webDeveloper">
            <div>I</div><div>'</div><div>m</div><div>w</div><div>e</div><div>b</div><div>d</div><div>e</div><div>v</div><div>e</div><div>l</div><div>o</div><div>p</div><div>e</div><div>r</div>
          </div>
      </div>
      {{-- //home Lyrics --}}
      {{-- home background --}}
      <video id="keyboardsBG" poster="img/poster.png" autoplay muted loop><source src="img/keyboards.mp4" type="video/mp4"></video>
        {{-- //home background --}}
    </div>
    {{-- //HOME --}}
    {{-- INTRO --}}
    <div id="intro">
      <div class="smallContainer">
        <div class="introleft">
          <p><span class="date">@{{moment().format("Do-MMM-YY")}}</span> @{{ time }}</p>
        </div>
        <div class="introright">
          <p><strong>Thank you for being here.</strong><br>This is a little demonstration of what I can do. Afterwards there will be some links to other projects done by me.<br><br><small>Realized with: Laravel, Sass, Vue.js, Photoshop</small></p>
        </div>
      </div>
    </div>
    {{-- //INTRO --}}
    {{-- ABOUT ME --}}
    <section id="aboutMe">
      <div class="container">
        <h2>About me</h2>
        <div class="bells">
          <img src="img/bells_web.png" alt="bells">
        </div>
        <div class="aboutMain">
          <div class="cheeseHoles">
          <div class="intro">
            <div class="content">
              <p>I am a junior full stack web developer,<br> 
                enthusiastic to get involved, test myself and expand my knowledge of this amazing profession.<br>
                Technology is my greatest passion and expressing my creativity is my lifeblood<br>
                I approached the code by acquiring technical skills both on the FRONTEND and BACKEND side.<br></p>
            </div>
          </div>
          <div class="tecnologies">
            <div class="content">
              <p>I started my journey in this environment by learning the following tecnologies:
              HTML5, CSS3, SASS, JavaScript, MySQL, PHP, SWIFT, Bootstrap 3/4, jQuery, Vue.js, Laravel, Moment.js, Axios, GSAP</p>
            </div>
          </div>
          <div class="prevLive">
            <div class="content">
              <p>I've lived for more than 5 years in Thailand, where i leaded as executive chef 4 restaurants, in Bangkok, Chiang Mai and Koh Samui. 
                I've developed great skills to take on many responsibilities, form and motivate a team, relate to clients and colleagues, find solutions quickly and under pressure, managing deadlines and bugets, be organized and integrate into other cultures.</p>
            </div>
          </div>
          <div class="australia">
            <div class="content">
              <p>1 year and a half in Sydney, Australia, where I could improve my English</p>
            </div>
          </div>
       </div>
       <div class="allLyric">
        <p>I am a junior full stack web developer,<br> 
          enthusiastic to get involved, test myself and expand my knowledge of this amazing profession.<br>
          Technology is my greatest passion and expressing my creativity is my lifeblood<br>
          I approached the code by acquiring technical skills both on the FRONTEND and BACKEND side.</p>
        <p>I started my journey in this environment by learning the following tecnologies:
              HTML5, CSS3, SASS, JavaScript, MySQL, PHP, SWIFT, Bootstrap 3/4, jQuery, Vue.js, Laravel, Moment.js, Axios, GSAP</p>
        <p>I've lived for more than 5 years in Thailand, where i leaded as executive chef 4 restaurants, in Bangkok, Chiang Mai and Koh Samui. I've developed great skills to take on many responsibilities, form and motivate a team, relate to clients and colleagues, find solutions quickly and under pressure, managing deadlines and bugets, be organized and integrate into other cultures.</p>
        <p>1 year and a half in Sydney, Australia, where I could improve my English</p>
       </div>
        <div class="circle_1"></div>
        <div class="circle_2"></div>
        <div class="circle_3"></div>
        <div class="circle_4"></div>
        <div class="meElephant">
          <div class="content">
            <img src="img/meElephantWeb.png" alt="me on Elephant">
          </div>
        </div>
      </div>
    </section>
    {{-- //ABOUT ME --}}
    {{-- MY PROJECTS --}}
    <section id="projects">
      <h2>My projects</h2>
      <!-- CAROUSEL -->
      <div class="slider">
        <div class="slides-container">
            <div v-for="proj in projects" class="slide">
                <div class="content">
                  
                  <div class="webPage">
                      <img :src="proj.webPage" alt="webPage">
                  </div>
                  <div class="lyrics">
                      <h3>@{{proj.name}}</h3>
                      <h5>Realized with</h5>
                      <small>@{{proj.tecnologies}}</small>
                      <div class="btn">
                        <a :href="proj.url">View</a>
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="controls">
          <div id="prevButton"><i class="fas fa-caret-square-left"></i></div>
          <div id="nextButton"><i class="fas fa-caret-square-right"></i></div>
        </div>
      </div>
        
        
     <!-- /CAROUSEL -->
    </section>
    {{-- //MY PROJECTS --}}
     {{-- CONTACTS --}}
     <section id="contacts">
      <div class="container">
        <h2>Contacts</h2>
        <div class="content">
          <div class="part fistpart">
            <ul class="contact_list">
              <li><i class="fas fa-phone"></i> +39 324 0813121</li>
              <li><i class="far fa-envelope"></i> michele@lisignoli.com</li>
              <li><i class="fas fa-map-marker-alt"></i> Piuro, Italy</li>
            </ul>
          </div>
          <div class="contactMe">
            <form class="" action="">
              <textarea name="" id="" rows="10"></textarea>
            </form>
          </div>
          <div class="part lastpart">
            <div class="dowload_cv">
              <div class="label"><label for="cv">See my CV:</label></div>
              <a id="cv" href="img/Michele-Lisignoli_CV.pdf" download>Dowload pdf</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- //CONTACTS --}}
  </main>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js'></script>
<script src="js/portfolio.js"></script>
@endsection
