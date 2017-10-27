<?php $pageTitle = "Pause Play w/ Gifs"; ?>
<style>
  body{
    background:#ccc;
    margin:0;
    padding:0;
    width:100%;
    height:100%;
  }

  .play {
    display: inline-block;
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 11px solid rgba(255, 255, 255, 1);
    margin: 20px;
    position: relative;
    z-index: 1;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
  }
  .play:before {
    content: '';
    position: absolute;
    top: -20px;
    left: -28px;
    bottom: -20px;
    right: -13px;
    border-radius: 50%;
    border: 3px solid rgba(255, 255, 255, 1);
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
    border-left: 5px solid rgba(255, 255, 255, 1);
    border-right: 5px solid rgba(255, 255, 255, 1);
    
  }

  .relative{
    position:relative;
    display:inline-block;
  }

  @media (min-width:768px){
    .play{
      position: absolute;
      top: .5%;
      right: 1%;
    }
  }
  @media (max-width:767px){
    .play{
      position: absolute;
      bottom: 1%;
      left: 1%;
    }
  }


</style>
<div class="wrapper">
Plause/Play with Gif animtions:<br><br>
  <div class="giftShop relative">
      <a href="/browse/category.do?cid=1069933&scrollToCid=1069936" onclick="return wcdLib.contentItemLinkWithFacet(this,'','HP_GiftGuide_W');">
          <picture>
              <source media="(min-width: 768px)" srcset="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0012/653/374/assets/desktop/122016_HP_US_EC_GIFTS_ANIM_top_frame.gif">
              <img class="giftShopImg" src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0012/653/374/assets/mobile/122016_HP_US_EC_MOB_GIFTS_ANIM_TOP_FRAME.gif" alt="holiday gift shop">
          </picture>
      </a>

        <a href="#" title="play/pause animation" class="play active"></a>

    </div>

    <p>
      The CSS:
      <script src="https://gist.github.com/xianc/7b03f90b257bd23baa45159c16ddc5e1.js"></script>
    </p>

    <p>
      The HTML:
      <script src="https://gist.github.com/anonymous/c4149381e326cbd755f4e21918f11068.js"></script>
    </p>

    <p>
      The JS:
      <script src="https://gist.github.com/anonymous/408a98aa048cc9cb2296cb66fdd0b0a7.js"></script>
    </p>
</div>

<script>
/* add tracking */
  function wcd_addTracking(tid, url) {
    s.linkTrackVars = 'eVar6';
    s.eVar6 = tid; //tid here
    s.tl($('body'), 'o', s.eVar6);
    if(url.length>0)
      window.open(url);
  }

  $(document).ready(function() {
    var icon = $('.play');
    icon.click(function() {
      icon.toggleClass('active');
      if($(window ).width()>=768){ //desktop
        if(icon.hasClass('active')){
          $('.giftShop picture source').remove();
          $('.giftShopImg').attr('src', 'http://www.gap.com/Asset_Archive/GPWeb/content/0012/653/374/assets/desktop/122016_HP_US_EC_GIFTS_ANIM_top_frame.gif');
        }
        else{
          $('.giftShop picture source').remove();
          $('.giftShopImg').attr('src', 'http://www.gap.com/Asset_Archive/GPWeb/content/0012/653/374/assets/desktop/122016_HP_US_EC_GIFTS.jpg');
        }
      }
      else if($(window).width()<768){ //mobile
        if(icon.hasClass('active')){
          $('.giftShop picture source').remove();
          $('.giftShopImg').attr('src', 'http://www.gap.com/Asset_Archive/GPWeb/content/0012/653/374/assets/mobile/122016_HP_US_EC_MOB_GIFTS_ANIM_TOP_FRAME.gif');
        }
        else{
          $('.giftShop picture source').remove();
          $('.giftShopImg').attr('src', 'http://www.gap.com/Asset_Archive/GPWeb/content/0012/653/374/assets/mobile/122016_HP_US_EC_MOB_GIFTS.jpg');
        }
      }

      return false;
    });
  });
</script>