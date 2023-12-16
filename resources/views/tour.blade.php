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
            background-image: url('https://images.unsplash.com/photo-1532602482641-8cede66ede47?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover; /* Adjust the background size as needed */
            background-position: center;
            height: 100vh;
            display: grid;
            place-items: center;
            overflow: hidden;
        }
     
    .content {
    width: auto;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font: 400 0.85rem helvetica, sans-serif;
    color: white;
    text-shadow: 0 3px 8px rgba(0, 0, 0, 0.5);
    background: rgba(0, 0, 0, 0.39);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5.1px);
    -webkit-backdrop-filter: blur(5.1px);
    border: 1px solid rgba(0, 0, 0, 0.09);
    padding: 20px;
    text-align:center;
  
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
    </style>
</head>
<body>
    <main>
    <div class='content'>
        <h2 class='title'>"Boom Gorge"</h2>
        <p class='description'>The Boom Gorge is located in the north of Kyrgyzstan, in the provinces of Issyk-Kul and Chuy. It is on the only road that joins the Eastern and Western parts of Kyrgyzstan. The gorge, which stretches for about 30 km (18.6 miles) in length, is home to a road and a railway from the capital Bishkek to the jewel of Kyrgyzstan, Issyk Kul Lake. On the way to the lake, make sure to go for a hike in the fabulous arid scenery of the Boom gorge, for example up to Konorchek Canyon. </p>
        <h2 class='title'>Back in history</h2>
        <p class="description">The canyons were formed between 1.5 and 2 million years ago.

            The name "Boom" means "evil spirit". The gorge was given this name due to the misadventures that it presented to anyone who tried to pass through. In 1850, a Russian explorer named Pyotr Semyenov was the first who tried to cross it. It took him 21 days to cross the gorge and it was deadly for some members of the expedition.
            
            It took 22 years before a road could finally be built in the tracks of the explorer in 1871-73. Then, a path was cut following the contours and the sinuous course of the river Chuy.
            
            A monument was erected in memory of exodus victims in 1916 near the entrance of the Boom Gorge. That year, tens of thousands of Kyrgyz people perished in the gorge, fleeing the deadly revolution against the Russian Empire.
            
            The road is now secured but regular falling rocks may close it for a couple of hours. </p>
            <a href="{{ url()->previous() }}">
                <button>Back</button>
            </a>
      </div>
      </main>
</body>
</html>