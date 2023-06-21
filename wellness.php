<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> wellness</title>
  <link rel="stylesheet" href="./wellness.css">

</head>
<body>
<!-- ........................................... -->
<div class="container" id="app">


  <section>
    <h4>wellness > <span>Here are some wellness tips that can help improve your physical and mental health:</span></h4>
  </section>

  <section>
    <div class="card">
      <div class="card-info">
        <h1 id="card-info-title">{{ currentCard.title }}</h1>
        <p id="card-info-desc">{{ currentCard.desc }}</p>
          <svg viewBox="0 0 20 10">
            <line x1="0" y1="5" x2="20" y2="5" />
            <line x1="15" y1="0" x2="20" y2="5" />
            <line x1="15" y1="10" x2="20" y2="5" />
          </svg>
        </a>
      </div>
      <div class="card-photo">
        <div id="mask-1" class="mask"></div>
        <div id="mask-2" class="mask"></div>
        <a href="#" @click="nextCard">
          <p>Next</p>
          <svg viewBox="0 0 20 10">
            <line x1="0" y1="5" x2="20" y2="5" />
            <line x1="15" y1="0" x2="20" y2="5" />
            <line x1="15" y1="10" x2="20" y2="5" />
          </svg>
        </a>
        <img :src="currentCard.photo">
      </div>
    </div>
  </section>
</div>
<!-- partial -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js'></script><script  src="./wellness.js"></script>

</body>
</html>
