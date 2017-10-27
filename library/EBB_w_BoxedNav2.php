<?php $pageTitle = "EBB w/ Slider Box Nav"; ?>

<link href="http://sandbox.x7.org/xchen/css/wcd-ebbCTA.css" rel="stylesheet">
<style type="text/css">
    .ebbWrapper{text-align: center;}
    img{ max-width:100%; }
    .moveMe{
      display:block;
    }


    /* actual ebb styles */
    .g-1-7{
      width:14.2857142857%
    }
    .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li{ 
      width:14.2857142857%; margin:0 !important;
    }
</style>

<div class="moveMe">
  <!--======== EBB ==========-->
  <div class="ebbWrapper ebbSliderWrapper">
    <div class="ebbSlider grid-root">
      <div class="g-1-7">
        <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0013/008/552/assets/012417_MEN_DenimCategoryExperience_EBB_A__CAR_US_EC_DESK_MOB_Main_1.jpg" onclick="$($('.jeansSubcat > li').children()[0]).trigger('click');" alt="Skinny">
      </div>
      <div class="g-1-7">
        <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0013/008/552/assets/012417_MEN_DenimCategoryExperience_EBB_A__CAR_US_EC_DESK_MOB_Main_1_02.jpg" onclick="$($('.jeansSubcat > li').children()[1]).trigger('click');" alt="Slim">
      </div>
      <div class="g-1-7">
        <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0013/008/552/assets/012417_MEN_DenimCategoryExperience_EBB_A__CAR_US_EC_DESK_MOB_Main_1_03.jpg" onclick="$($('.jeansSubcat > li').children()[2]).trigger('click');" alt="Straight">
      </div>
      <div class="g-1-7">
        <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0013/008/552/assets/012417_MEN_DenimCategoryExperience_EBB_A__CAR_US_EC_DESK_MOB_Main_1_04.jpg" onclick="$($('.jeansSubcat > li').children()[3]).trigger('click');" alt="Athletic">
      </div>
      <div class="g-1-7">
        <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0013/008/552/assets/012417_MEN_DenimCategoryExperience_EBB_A__CAR_US_EC_DESK_MOB_Main_1_05.jpg" onclick="$($('.jeansSubcat > li').children()[4]).trigger('click');" alt="Standard">
      </div>
      <div class="g-1-7">
        <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0013/008/552/assets/012417_MEN_DenimCategoryExperience_EBB_A__CAR_US_EC_DESK_MOB_Main_1_06.jpg"onclick="$($('.jeansSubcat > li').children()[5]).trigger('click');" alt="Boot">
      </div>
      <div class="g-1-7">
        <img class="trendOF" src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0013/008/552/assets/012417_MEN_DenimCategoryExperience_EBB_A__CAR_US_EC_DESK_MOB_Main_1_07.jpg"onclick="$($('.jeansSubcat > li').children()[6]).trigger('click');" alt="relaxed">
      </div>


      <!-- sticky nav -->
      <div class="wrapperCTA wcdStickyCatNav" data-page="category">
        <ul class="CTAmenu" data-type="boxed">
          <li class="CTAlist" data-style="inline list" data-border="0">
            <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
              <ul class="CTAdropdownList">
                <li><a href="javascript:void(0)" onclick="wcdCategoryMarketing.scrollToCid('1061825');wcd_addTracking('EBB_Uniform_G_1', '')">Jeans</a></li>
                <li><a href="javascript:void(0)" onclick="wcdCategoryMarketing.scrollToCid('1061825');wcd_addTracking('EBB_Uniform_G_1', '')">Skinny</a></li>
                <li><a href="javascript:void(0)" onclick="wcdCategoryMarketing.scrollToCid('1061825');wcd_addTracking('EBB_Uniform_G_1', '')">Relaxed</a></li>
                <li><a href="javascript:void(0)" onclick="wcdCategoryMarketing.scrollToCid('1061825');wcd_addTracking('EBB_Uniform_G_1', '')">Destructed</a></li>
                <li><a href="javascript:void(0)" onclick="wcdCategoryMarketing.scrollToCid('1061825');wcd_addTracking('EBB_Uniform_G_1', '')">Slim</a></li>
                <li><a href="javascript:void(0)" onclick="wcdCategoryMarketing.scrollToCid('1061825');wcd_addTracking('EBB_Uniform_G_1', '')">Boot</a></li>
                <li><a href="javascript:void(0)" onclick="wcdCategoryMarketing.scrollToCid('1061825');wcd_addTracking('EBB_Uniform_G_1', '')">Jeans</a></li>
          </li>
        </ul>
      </div>

    </div>

  </div> <!-- end ebbWrapper-->

  <br>

</div>


  <div class="wrapper">
    <p>
      <b><a href="http://www.gol.app.gidapps.com/preview/launch.do?date=04/18/2017&targetURL=http://www.gol.app.gidapps.com/browse/category.do?cid=6998&departmentRedirect=true#department=75" target="_blank">Preview it on WIP</a></b>
    </p>

    <p>
      Features:<br>
      <ul>
        <li>Sticky Nav</li>
        <li>Hover active state</li>
        <li>When category is on screen, the respective link in the sticky nav will highlight</li>
      </ul>
    </p>

    <p>
      Link this stylesheet: 
      <pre class="brush: js;">
        <link rel="stylesheet" type="text/css" href="/Asset_Archive/GPWeb/content/0011/027/523/wcd-ebbCTA.css">
      </pre>
      Add this style rules:
      <pre class="brush: js;">
        .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li{ 
          width:14.2857142857%; margin:0 !important;
        }
      </pre>
    </p>

    <p>
      The HTML<br>
      <script src="https://gist.github.com/xianc/3691a2a7d684c848c75e5bf417647361.js"></script>
    </p>

    <p>
      If Sticky, add this JS:<br>
      <script src="https://gist.github.com/xianc/0ebff598d25a9d27c41713b9b0d5064b.js"></script>
    </p>

</div>

<script>
  $('.moveMe').insertAfter($('header'))

  var stickyNavObj = {
    breakpoint: (window.innerWidth > 0) ? window.innerWidth : screen.width,
    userHasScrolled: false,
    stickyNav: null,
    ebbWrapper: null,
    stickyHeight: 35,
    stickyFromTop: 850,
    init: function(){
        this.stickyNav= $(".ebbWrapper .wcdStickyCatNav");
        this.ebbWrapper= $(".ebbWrapper");
        this.stickyHeight= this.stickyNav.height();
        this.stickyFromTop= this.stickyNav.offset().top + this.stickyHeight;

        $(window).scroll( function() { this.userHasScrolled = true; });
        
        var that = this;
        var userScrollInterval = setInterval( function() {
            if(this.userHasScrolled){
                that.userScrollCheck(); 
            }
        }, 250 ); 
    },
    userScrollCheck: function(){
        if($(window).scrollTop()>=this.stickyFromTop && this.breakpoint>=767){
            this.stickyNav.addClass("sticky");
            this.ebbWrapper.css('margin-bottom',this.stickyHeight);
        }
        else if($(window).scrollTop()<this.stickyFromTop && this.stickyNav.hasClass('sticky')){
            this.stickyNav.removeClass('sticky');
            this.ebbWrapper.css('margin-bottom',0);
        }
        this.userHasScrolled = false;
    }
}

$( window ).on('load',function() {
    stickyNavObj.init();
});
</script>

