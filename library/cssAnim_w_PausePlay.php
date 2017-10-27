<?php $pageTitle = "CSS Animation w/ Pause Play"; ?>
<link href="../pausePlay/style.css" rel="stylesheet">
<style type="text/css">
.play {
  display: inline-block;
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 11px solid rgba(0, 0, 0, 0.5);
  margin: 20px;
  position: relative;
  z-index: 1;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  font-size:0;
}
.play:before {
  content: '';
  position: absolute;
  top: -20px;
  left: -28px;
  bottom: -20px;
  right: -13px;
  border-radius: 50%;
  border: 3px solid rgba(0, 0, 0, 0.5);
  z-index: 2;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
}
.play:after {
  content: '';
  opacity: 0;
  transition: opacity 0.6s;
  -webkit-transition: opacity 0.6s;
  -moz-transition: opacity 0.6s;
}
.play.active {
  border-color: transparent;
}
.play.active:after {
  content: '';
  opacity: 1;
  width: 5px;
  height: 16px;
  position: absolute;
  right: 0px;
  top: -8px;
  border-left: 5px solid rgba(0, 0, 0, .5);
  border-right: 5px solid rgba(0, 0, 0, .5);
  
}

/*CSS ANIMATION */

#carouselAnimation {
  position:relative;
  margin:0 auto;
}

.placeholderImg{
  visibility: hidden;
}

#carouselAnimation a.animSlide{
  position:absolute;
  left:0;
  top:0;

  -webkit-transition: all .1s ease-in-out;
  -moz-transition: all .1s ease-in-out;
  -o-transition: all .1s ease-in-out;
  transition: all .1s ease-in-out;
}

#carouselAnimation .animSlide{
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-duration: 8s;

  animation-timing-function: linear;
  animation-iteration-count: infinite;
  animation-duration: 8s;
}
  #carouselAnimation .firstImg{
    -webkit-animation-name: fadeFirstImg;
    animation-name: fadeFirstImg;
  }
  #carouselAnimation .secondImg{
    -webkit-animation-name: fadeSecondImg;
    animation-name: fadeSecondImg;
  }
  #carouselAnimation .thirdImg{
    -webkit-animation-name: fadeThirdImg;
    animation-name: fadeThirdImg;
  }
 

@keyframes fadeFirstImg {
  0% { 
    left:0;
    z-index:100;
  }
  33.33% { 
    left:0;
    z-index:100;
  }
  33.34% { 
    left:-9000;
    z-index:1;
  }
  100% {
    left:-9000;
    z-index:1;
  }
}


@keyframes fadeSecondImg {
  0% { 
    left:-9000;
    z-index:1;
  }
  33.33% { 
    left:-9000;
    z-index:1;
  }
  33.34% { 
    left:0;
    z-index:100;
  }
  66.66% { 
    left:0;
    z-index:100;
  }
  66.67% { 
    left:-9000;
    z-index:1;
  }
  100% {
    left:-9000;
  }
}

@keyframes fadeThirdImg {
  0% { 
    left:-9000;
    z-index:1;
  }
  66.66% { 
    left:-9000;
    z-index:1;
  }
  66.67% { 
    left:0;
    z-index:100;
  }
  100% {
    left:0;
    z-index:100;
  }
}

.pausePlayState{
  -webkit-animation-play-state: paused; /* Chrome, Safari, Opera */
  animation-play-state: paused;
}
.relative{
  position:relative;
  display:inline-block;
}
.play{
  position:absolute;
  right: 0;
  bottom: 0;
  z-index: 200;
}
</style>



<div class="wrapper">
  CSS Animation with 3+ slides:
  <div id="carouselAnimation">
    <div class="relative">
      <img class="placeholderImg" src="http://www.gap.com/Asset_Archive/GPWeb/content/0012/437/389/assets/desktop/102516_ALL_HP_XL_US_EC_icon_a.jpg" alt="gap icons">
      <a href="#" title="Play video" class="play active"></a>
    </div>

    <a class="animSlide firstImg" href="http://www.gap.com" target="_blank">
      <img src="http://www.gap.com/Asset_Archive/GPWeb/content/0012/437/389/assets/desktop/102516_ALL_HP_XL_US_EC_icon_a.jpg" alt="gap icons">

      </a>
      <a class="animSlide secondImg" href="http://www.google.com" target="_blank">
          <img src="http://www.gap.com/Asset_Archive/GPWeb/content/0012/437/389/assets/desktop/102516_ALL_HP_XL_US_EC_icon_b.jpg" alt="gap icons">
      </a>
      <a class="animSlide thirdImg" href="http://www.yahoo.com" target="_blank">
          <img src="http://www.gap.com/Asset_Archive/GPWeb/content/0012/437/389/assets/desktop/102516_ALL_HP_XL_US_EC_icon_c.jpg" alt="gap icons">
      </a>
  </div>

  <p>
    The CSS: 
    <script src="https://gist.github.com/xianc/356f5c343381c60e8949cad988933bf3.js"></script>
  </p>
  <p>
    The HTML:
    <script src="https://gist.github.com/xianc/798e20bf56f4706487a5128ac29535e8.js"></script>
  </p>
  <p>
    The JS:
    <script src="https://gist.github.com/xianc/d19d5d1316e52e95e1d964a901ae14b4.js"></script>
  </p>
</div>


<script>
  $(document).ready(function() {
    var icon = $('.play');
    icon.click(function() {
      icon.toggleClass('active');
      $('#carouselAnimation .animSlide').toggleClass("pausePlayState");
      return false;
    });
  });
</script>