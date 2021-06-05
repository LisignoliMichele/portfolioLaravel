@extends('portfolio/layouts/main')
@section('PageFonts')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oxygen&family=Ranchers&display=swap" rel="stylesheet">
@endsection
@section('cdns')
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
          <div><strong class="my">My</strong>portfolio</div>
        </div>
        <ul class="portfolioPages">
          <li><a href="#">Home</a></li>
          <li><a href="#aboutMe">About me</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Contacts</a></li>
        </ul>
    </nav>
    {{-- //NAVBAR --}}
  </header>
  <main>
    {{-- HOME --}}
    <div class="home">
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
    <div class="intro">
      <div class="smallContainer">
        <div class="introleft">
          <p><span class="date">@{{moment().format("Do-MMM-YY")}}</span> @{{ time }}</p>
        </div>
        <div class="introright">
          <p>Thank you for being here.<br>
          This is a small demonstration of what I can do. Afterwards there will be some links to other projects done by me.<br><br>
          <small>Realized with: Laravel, Sass, Vue.js, Photoshop</small></p>
        </div>
      </div>
    </div>
    {{-- //INTRO --}}
    {{-- ABOUT ME --}}
      <section id="aboutMe">
        <div class="mediumContainer">
          <h2>About me</h2>
          <div class="bells">
            <img src="img/bells_web.png" alt="bells">
          </div>
            <div class="aboutMain aboutsc">
              <div class="aboutleft">
                <img src="img/abouthead.jpg" alt="Me young">
                <img class="myshape" src="img/myshirt.png" alt="My shirt">
              </div>
              <div class="aboutright">
                <p>I am a junior full stack web developer,<br> 
                  enthusiastic to get involved, test myself and expand my knowledge of this amazing profession.<br>
                  Technology is my greatest passion and expressing my creativity is my lifeblood<br>
                  I approached the code by acquiring technical skills both on the FRONTEND and BACKEND side.<br>
                  I started my journey in this environment by learning the following tecnologies:</p>
                <ul>
                  <li> HTML5| CSS3 | SASS | JavaScript | MySQL | PHP</li>
                  <li>Bootstrap 3/4 | jQuery | Vue.js | Laravel</li>
                  <li>Moment.js | Axios | GSAP | flickity</li>
                </ul>
              </div>
            </div>
        </div>
        

      </section>
    {{-- //ABOUT ME --}}
  </main>
</div>
@endsection
@section('js')
<script src="{{secure_asset("js/portfolio.js")}}"></script>
@endsection
