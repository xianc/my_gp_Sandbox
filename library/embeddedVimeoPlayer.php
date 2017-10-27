<?php $pageTitle = "Embedded Vimeo Player"; ?>
<style>
  a.CTAbutton{
    font-style: initial;
  }
  
  .videoCopy{
    text-align: right;
    position:absolute;
    top:25%;
    left:9;
  }

  /* video CSS */
  .videoWrapper {
    position:relative;
    margin-left:18%;
    display: inline-block;
  }
  .videoContainer {
    position:absolute;
    height:100%;
    width:100%;
    top:0;
    left:0;
  }
  .videoContainer iframe {
    width: 100%;
    height: 100%;
  }

  .holidayCommercial{
    position: relative;
  }

  @media (max-width:767px){
    .holidayCommercial{
        display:none;
    }
  }

</style>


<div class="wrapper">
  Vimeo Embeded Player. Plays when on screen. Pauses off screen.<br><br>
  <div class="holidayCommercial">
    <div class="videoWrapper">
      <!-- placeholder asset -->
      <img id="loadImg" src="http://www.gap.com/Asset_Archive/GPWeb/content/0012/492/753/assets/110816_HP_DESK_RESPONSIVE_EU_1280_Video.jpg" alt="share your gift video" style="visibility:hidden;">
      
      <!-- VIDEO CONTAINER -->
      <div class="videoContainer">
      </div>
    </div>


    <div class="videoCopy">
      <picture>
          <source media="(min-width: 768px)" srcset="http://www.gap.com/Asset_Archive/GPWeb/content/0012/492/753/assets/desktop/110816_Outerwear_HP_video_US_FOHC.png">
          <img src="/assets/common/clear.gif" alt="featuring our holiday commercial" style="display:block;">
        </picture>

        <div class="wrapperCTA shopTheVideoCTA">
          <ul class="CTAmenu">
              <li class="CTAlist" data-color="holiday red" data-background="white" data-hover="none">
                  <a class="CTAbutton"  href="/browse/category.do?cid=1070899" onclick="return wcdLib.contentItemLinkWithFacet(this,'','HP_ShopVideo');">Shop the Video</a>
              </li>
          </ul>
        </div>
    </div>
  </div>

  <p>
    The CSS:<br>
    <script src="https://gist.github.com/xianc/c62b4288b20a8ac7878a6a6600b778a3.js"></script>
  </p>

  <p>
    The HTML:<br>
    <script src="https://gist.github.com/xianc/e84593bddb24c9220cc588530ca76ff3.js"></script>
    <!-- <br> -->
    *note: The placeholder assetin line 4 should have the same aspect ratio as the vimeo video.
  </p>

  <p>
    The JS:<br>
    <script src="https://gist.github.com/xianc/ee683d3b86ce945e88f737ef032eaf8c.js"></script>
    <!-- <br> -->
    *Note: Put your vimeo URL in the varible defined in line 2. 
  </p>
</div>


<script src="http://www.gap.com/Asset_Archive/GPWeb/content/0012/492/753/assets/player.min.js"></script>
<script>
$(window).on('load', function(){
    var vimeoUrl='https://player.vimeo.com/video/190293032';
    var iframe;
    var player;
    var doesVideoExist=false;
    var videoIsPaused=false;

    /* IF VIDEO CONTAINER SCROLLS INTO VIEW, AUTOPLAY */
    function checkVisible( elm, eval ) {
      eval = eval || "visible";
      if(!$(elm).length){
          return 0;
      }
      var vpH = $(window).height(),
          st = $(window).scrollTop(), 
          y = $(elm).offset().top,
          elementHeight = $(elm).height();
      if (eval == "visible") return ((y < (vpH + st)) && (y > (st - elementHeight)));
      if (eval == "above") return ((y < (vpH + st)));
    }
    function pausePlayVideo(){
      if( $(window).width() >= 768 ) {
          var hpVideoInView = checkVisible($('.videoContainer'));

        if (hpVideoInView) {
          if (!doesVideoExist) {
              doesVideoExist=true;
              $('.videoContainer').html('<iframe id = "vimeo_player" src="'+vimeoUrl+'"?autoplay=1&amp;loop=1&portrait=0&byline=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
              iframe = document.getElementById('vimeo_player');
              player = new Vimeo.Player(iframe);
              player.ready().then(function() {
                player.setVolume(0);
              });
              player.play();
              videoIsPaused=false;
            }
            else if(doesVideoExist && videoIsPaused){
              player.getPaused().then(function(paused) {
                if(paused){
                  player.play();
                }
              }).catch(function(error) {
                    // an error occurred
              });
            }
          }
        else if(doesVideoExist && !hpVideoInView){
          player.getPaused().then(function(paused) {
            if(!paused){
              player.pause();
              videoIsPaused=true;
            }
          }).catch(function(error) {
              // an error occurred
          });
        }
      }//end outer if
    }

    $( window ).scroll(function() {
      pausePlayVideo();
    });

    pausePlayVideo();
});
</script>
