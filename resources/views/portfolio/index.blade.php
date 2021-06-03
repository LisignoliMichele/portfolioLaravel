@extends('portfolio/layouts/main')
@section('PageFonts')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Englebert&family=Inter:wght@300&family=Peralta&display=swap" rel="stylesheet">
@endsection
@section('pageTitle')
    Michele Lisignoli Portfolio
@endsection

@section('content')
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
        <div><strong class="my">M</strong>portfolio</div>
      </div>
      <ul class="portfolioPages">
        <li><a href="#">Home</a></li>
        <li><a href="#">About me</a></li>
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
        <img src="img/infoImgBG.jpg" alt="My shape">
        <img class="myshape" src="img/infoImgShape.png" alt="My shape">
      </div>
      <div class="introright">
        <p>I am a very curious person, I love to test myself and never stop learning.<br>I take responsibilities and commitments very seriously.<br>Technology is my greatest passion and expressing my creativity is my lifeblood.<br>I want to commit to making a valuable contribution in to a company where i can work towards continuos improvement with the sharing of my skills and values.</p>
      </div>
    </div>
  </div>
  {{-- //INTRO --}}
</main>
@endsection