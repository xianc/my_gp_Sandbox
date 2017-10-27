<?php $pageTitle = "YouTube Video Popup"; ?>
<style>
  .blackOut {
    position: fixed;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 0;
    top: 0;
    bottom: 0;
    display: none;
  }

  .blackOut .popupAlignCenter {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .blackOut .popupAlignCenter .popUpWrapper {
    width: 80%;
    max-width: 1280px;
    max-height: 640px;
    background-color: #fff;
    z-index: 100;
  }

  .blackOut .popupAlignCenter .popUpWrapper button.videoClose {
    color: #999999;
    font-weight: 600;
    font-size: 22px;
    padding: 4px 10px;
    float: right;
    background: none;
    border: 0;
    cursor: pointer;
  }
</style>


<div class="wrapper">
  Youtube video popup:<br>
  <a href="javascript:void(0)" onclick="videoPopupItem.launchPopUp();">
    <img src="http://www.gap.com/Asset_Archive/GPWeb/content/0012/492/753/assets/110816_HP_DESK_RESPONSIVE_EU_1280_Video.jpg" alt="watch video">
  </a>

  <p>
    The CSS:<br>
    <script src="https://gist.github.com/xianc/a50276455605a02e09aa65acea5b49ea.js"></script>
  </p>

  <p>
    The HTML 1: Put in highest level container.<br>
    <script src="https://gist.github.com/xianc/f25bb191ff62af68476320223dd24a48.js"></script>
    <br>
    If you are not working on a Landing Page, please include the following JS:<br>
      <pre class="brush: js;">
        jQuery('.blackOut').insertAfter('#mainContent');
      </pre>

    <br><br>

    The HTML 2: Put this in your content container<br>
    <script src="https://gist.github.com/xianc/d0509056bfb593bbe42b4ea810c1a8ad.js"></script>
  </p>

  <p>
    The JS:<br>
    <script src="https://gist.github.com/xianc/2208ab722e8ba61b8b2891c2ab1eceb6.js"></script>

    <!-- br><br>
    JS to add tracking (should be availble in sitewide):<br>
    <script src="https://gist.github.com/xianc/1b37723e2abc14c2596c6358b90a58be.js"></script> -->
  </p>
</div>


<script>
  function videoPopup(objectName, videoUrl){
    this.videoUrl= videoUrl;
    this.screenSize= $(window).width();
    this.heightOfVideo= this.screenSize * .4;
    this.videoPop= '<div class="popUpWrapper">'+
                      '<div id="videoWrap"">'+
                      '<button type="button" class="videoClose" onclick="'+objectName+'.closeVideo()">X</button>'+
                      '<iframe width="100%" height="'+this.heightOfVideo+'" src="'+this.videoUrl+'" frameborder="0" allowfullscreen></iframe></div>'+
                    '</div>', 
    this.closeVideo= function(){
      $('.blackOut').fadeOut('slow');
      $('.popupAlignCenter').html("");
    },
    this.launchPopUp= function(){
      $(window).scroll(function() { return false; });
      if($('.blackOut').css('display')=="none"){
          $('.blackOut').fadeIn('slow');
      }
      $('.blackOut').css('z-index','1000');
      $('.popupAlignCenter').html(this.videoPop);
      $('.popUpWrapper').fadeIn('slow'); 
    }
  };

  $(document).mouseup(function (e) {
    var container = $(".popUpWrapper");
    if($('.blackOut').css('z-index')!="0"){
      if (!container.is(e.target) && container.has(e.target).length === 0){
        $('.blackOut').fadeOut('slow');
       }
    }
  });

  var videoPopupItem= new videoPopup('videoPopupItem', 'https://www.youtube.com/embed/c__AD5FsjlE');

</script>