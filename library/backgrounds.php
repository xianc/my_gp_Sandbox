<?php $pageTitle = "Tile Backgrounds"; ?>
<style>
      .bgDefault {
        background: url(http://sandbox.x7.org/xchen/_test/patternBG/bg.gif);
      }
      .bgScale{
        background: url(http://sandbox.x7.org/xchen/_test/patternBG//bg.gif);
        background-size:6%;
      }
      .bgGradient{ 
        background: #00ac8f; /* For browsers that do not support gradients */
        background: -webkit-linear-gradient(left,#00ac8f,#00b3dc);
      }
      .bgGradient2{ 
        background: #ff2d3b; /* For browsers that do not support gradients */
        background: -webkit-linear-gradient(left,#fea4ba, #ff2d3b,#99298b);
      }
    </style>


<div class="wrapper">
  <h1>Tile Backgrounds </h1>
  <p>
    <strong>1. Default:</strong> as image scales, the background pattern clips away
    <br>
    <div class="bgDefault">
      <img src="http://sandbox.x7.org/xchen/_test/patternBG/svg.svg" alt="svg"/>
    </div>
  </p>
  <p>
    <strong>2. Scale:</strong> as image scales, the bg also scales
    <br>
    <div class="bgScale">
      <img src="http://sandbox.x7.org/xchen/_test/patternBG/svg.svg" alt="svg"/>
    </div>
  </p>
  <h1>Gradients </h1>
  <p>
    <strong>Two Color Fade:</strong> left bg colors fades into right bg color
    <br>
    <div class="bgGradient">
      <img src="http://sandbox.x7.org/xchen/_test/patternBG/svg.svg" alt="svg" style="visibility: hidden"/>
    </div>
  </p>
  <p>
    <strong>Three Color Fade:</strong>
    <br>
    <div class="bgGradient2">
      <img src="http://sandbox.x7.org/xchen/_test/patternBG/svg.svg" alt="svg" style="visibility: hidden"/>
    </div>
  </p>
</div><!-- end content div -->

