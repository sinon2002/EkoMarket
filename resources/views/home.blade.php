<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    height: 100vh;
    display: grid;
    place-items: center;
    overflow: hidden;
  }
  
  main {
    position: relative;
    width: 100%;
    height: 100%;
    box-shadow: 0 3px 10px rgba(0,0,0,0.3);
    z-index: 1;
  }
  .tour-menu {
    background: rgba(0, 0, 0, 0.39);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5.1px);
    -webkit-backdrop-filter: blur(5.1px);
    padding: 10px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
  }

  .tour-menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-around;
  }

  .tour-menu li {
    display: inline;
  }

  .tour-menu a {
    text-decoration: none;
    color: #fff; /* Change the color to your preference */
  }
  .item {
    width: 200px;
    height: 300px;
    list-style-type: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
    background-position: center;
    background-size: cover;
    border-radius: 20px;
    box-shadow: 0 20px 30px rgba(255,255,255,0.3) inset;
    transition: transform 0.1s, left 0.75s, top 0.75s, width 0.75s, height 0.75s;
  
    &:nth-child(1), &:nth-child(2) {
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      transform: none;
      border-radius: 0;
      box-shadow: none;
      opacity: 1;
    }
  
    &:nth-child(3) { left: 50%; }
    &:nth-child(4) { left: calc(50% + 220px); }
    &:nth-child(5) { left: calc(50% + 440px); }
    &:nth-child(6) { left: calc(50% + 660px); opacity: 0; }
  }
  
  .content {
    width: min(30vw,400px);
    position: absolute;
    top: 50%;
    left: 3rem;
    transform: translateY(-50%);
    font: 400 0.85rem helvetica,sans-serif;
    color: white;
    text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    opacity: 0;
    display: none;
    background: rgba(0, 0, 0, 0.39);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5.1px);
    -webkit-backdrop-filter: blur(5.1px);
    border: 1px solid rgba(0, 0, 0, 0.09);
    padding: 20px;
  
    & .title {
      font-family: 'arial-black';
      text-transform: uppercase;
    }
  
    & .description {
      line-height: 1.7;
      margin: 1rem 0 1.5rem;
      font-size: 0.8rem;
    }
  
    & button {
      width: fit-content;
      background-color: rgba(0,0,0,0.1);
      color: white;
      border: 2px solid white;
      border-radius: 0.25rem;
      padding: 0.75rem;
      cursor: pointer;
    }
  }
  
  .item:nth-of-type(2) .content {
    display: block;
    animation: show 0.75s ease-in-out 0.3s forwards;
  }
  
  @keyframes show {
    0% {
      filter: blur(5px);
      transform: translateY(calc(-50% + 75px));
    }
    100% {
      opacity: 1;
      filter: blur(0);
    }
  }
  
  .nav {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    z-index: 5;
    user-select: none;
  
    & .btn {
      background-color: rgba(255,255,255,0.5);
      color: rgba(0,0,0,0.7);
      border: 2px solid rgba(0,0,0,0.6);
      margin: 0 0.25rem;
      padding: 0.75rem;
      border-radius: 50%;
      cursor: pointer;
  
      &:hover {
        background-color: rgba(255,255,255,0.3);
      }
    }
  }
  
  @media (width > 650px) and (width < 900px) {
    .content {
      & .title        { font-size: 1rem; }
      & .description  { font-size: 0.7rem; }
      & button        { font-size: 0.7rem; }
    }
    .item {
      width: 160px;
      height: 270px;
  
      &:nth-child(3) { left: 50%; }
      &:nth-child(4) { left: calc(50% + 170px); }
      &:nth-child(5) { left: calc(50% + 340px); }
      &:nth-child(6) { left: calc(50% + 510px); opacity: 0; }
    }
  }
  
  @media (width < 650px) {
    .content {
      & .title        { font-size: 0.9rem; }
      & .description  { font-size: 0.65rem; }
      & button        { font-size: 0.7rem; }
    }
    .item {
      width: 130px;
      height: 220px;
  
      &:nth-child(3) { left: 50%; }
      &:nth-child(4) { left: calc(50% + 140px); }
      &:nth-child(5) { left: calc(50% + 280px); }
      &:nth-child(6) { left: calc(50% + 420px); opacity: 0; }
    }
  }
  

  header{
    z-index: 999;
    position: relative;
  }
</style>
</head>
<body>
  
    <main> 
      <nav class="tour-menu">
        <ul>
          <li><a href="{{'/'}}">Home</a></li>
          <li><a href="{{ route('about') }}">About me</a></li>
          <li><a href="{{ route('calculator') }}">Calculator</a></li>
          
        </ul>
      </nav>
        <ul class='slider'>
          <li id="tour1" class='item' style="background-image: url('https://images.unsplash.com/photo-1532602482641-8cede66ede47?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <div class='content'>
              <h2 class='title'>"Boom Gorge"</h2>
              <p class='description'> The Boom Gorge is located in the north of Kyrgyzstan, in the provinces of Issyk-Kul and Chuy. It is on the only road that joins the Eastern and Western parts of Kyrgyzstan. The gorge, which stretches for about 30 km (18.6 miles) in length, is home to a road and a railway from the capital Bishkek to the jewel of Kyrgyzstan, Issyk Kul Lake. On the way to the lake, make sure to go for a hike in the fabulous arid scenery of the Boom gorge, for example up to Konorchek Canyon.  </p>
              <a href="tour1.html">
                <button>Read More</button>
              </a>
            </div>
          </li>
          <li class='item' style="background-image: url('https://images.unsplash.com/photo-1498564699634-717dce3862f8?q=80&w=1952&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <div class='content'>
              <h2 class='title'>"Barskoon waterfall"</h2>
              <p class='description'> The Barskoon Waterfalls in the Barskoon Valley are a nice trip to experience the wonderful valley. 
                It makes a perfect Family Day and can also be some perfect  warmup-hike for further adventures. 
                You can follow the path up the mountains to 3400 and more meters
                 or stay at the wild waterfalls, it is up to you! </p>
                 <a href="{{ route('tour') }}">
                  <button>Read More</button>
                </a>
            </div>
          </li>
          <li class='item' style="background-image: url('https://images.unsplash.com/photo-1604877249407-f4dce6f21d02?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <div class='content'>
              <h2 class='title'>"Song kul"</h2>
              <p class='description'> Song-Kol (also known as Sonkol, Song-Köl, and Son-Kul) is a large alpine lake, sandwiched in a hollow between the inner spurs of the Tien Shan in the Naryn region (Kyrgyzstan). Sitting at 3016 meters above sea level, the lake is surrounded by virgin pastures, a conservation area, and the ridges of Sonköltoo and Moldotoo, making it the perfect site for ecological tourism.

                The shores of the lake are low, swamped, and in some places overgrown with reeds. The lake is glacier-fed and drains into the Son-Kul river and eventually the Naryn river. Ice on the lake is common from late September to late May.  </p>
                <a href="{{ route('tour') }}">
                  <button>Read More</button>
                </a>
            </div>
          </li>
          <li class='item' style="background-image: url('https://images.unsplash.com/photo-1510313420591-f06c361d1397?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <div class='content'>
              <h2 class='title'>"Köl suu"</h2>
              <p class='description'>
                Lake Kel-Suu is considered one of the most beautiful mountain lakes in Kyrgyzstan. It was not well known only a few years ago, but it now attracts tourists from all over the world.

                The lake is located in the Naryn region, in the Ak-Sai Valley on the Chinese border. It sits on the headwaters of the Kurumduk River at an altitude of about 3600 meters above sea level. Acclimatizing to this altitude is important before embarking on a strenuous trekking adventure. The lake was formed by a strong earthquake, and to see all of it, you need to sail on a boat.
              </p>
              <a href="{{ route('tour') }}">
                <button>Read More</button>
              </a>
            </div>
          </li>
          <li class='item' style="background-image: url('https://images.unsplash.com/photo-1629340038197-191832a53546?q=80&w=2094&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <div class='content'>
              <h2 class='title'>"Bishkek city"</h2>
              <p class='description'>
                Bishkek is the capital of the Kyrgyz Republic. Its political, economic and cultural center. The city located at Chuy region, at the slopes of the Kyrgyz Range, at about 700-900 meters above sea level, 25 km near to the Kazakh Border. From Bishkek to Almaty takes 250 km, 3 hours of driving. The total territory of the town is 127 km2, the territory with nearby villages and areas is about 200 km2.  The total population of the town is about 1,000,000 people.
              </p>
              <a href="{{ route('tour') }}">
                <button>Read More</button>
              </a>
            </div>
          </li>
          <li class='item' style="background-image: url('https://kompastour.com/useruploads/regions/region_8fdff7ad53.jpg')">
            <div class='content'>
              <h2 class='title'>"Issyk-kyl region"</h2>
              <p class='description'> Issyk-Kul region is located in the north-east of the country. It borders with Kazakhstan on northeast, with China on southeast, with Naryn region on southwest and with Chuy region on the northwest. </p>
              <a href="{{ route('tour') }}">
                <button>Read More</button>
              </a>
            </div>
          </li>
        </ul>
        <nav class='nav'>
          <ion-icon class='btn prev' name="arrow-back-outline"></ion-icon>
          <ion-icon class='btn next' name="arrow-forward-outline"></ion-icon>
        </nav>
        
      </main>
     
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script>
    const slider = document.querySelector('.slider');

function activate(e) {
  const items = document.querySelectorAll('.item');
  e.target.matches('.next') && slider.append(items[0])
  e.target.matches('.prev') && slider.prepend(items[items.length-1]);
}

document.addEventListener('click',activate,false);
</script>
</body>
</html>