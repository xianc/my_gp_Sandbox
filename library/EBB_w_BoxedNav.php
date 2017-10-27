<?php $pageTitle = "EBB w/ Box Nav"; ?>
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
    @media (min-width:768px){
      .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li{ 
        width:14.2857142857%; margin:0 !important;
      }
    }
    @media (max-width:767px){
        .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li:last-child{ width:100%; } /* expand last CTA on mobile to 100% since there are an odd # of CTAs */
    }
</style>

<div class="moveMe">
  <!--======== EBB ==========-->
  <div class="ebbWrapper ebbSliderWrapper">
    <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0012/964/058/assets/desktop/02142017_WOM_DRESSES_EBB_B_US_EC_DESK_2.jpg" alt="shop dresses" />
      <!-- sticky nav -->
      <div class="wrapperCTA wcdStickyCatNav" data-page="category">
        <ul class="CTAmenu" data-type="boxed-at-lg" data-size-at-md="half">
          <li class="CTAlist" data-color="black" data-style="inline list" data-list-style="boxedEbb" data-border="0">
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


  </div> <!-- end ebbWrapper-->

  <br>

</div>


  <div class="wrapper">
    <p>
      <!-- <b><a href="http://www.gol.wip.gidapps.com/preview/launch.do?date=03/16/2017&targetURL=http://www.gol.wip.gidapps.com/browse/category.do?cid=1061822#pageId=0&department=48" target="_blank">Preview it on WIP</a></b> -->
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
      Add these style rules:
      <script src="https://gist.github.com/xianc/42f683062d5b85c9861895dcbd24f4fe.js"></script>
    </p>

    <p>
      The HTML<br>
      <script src="https://gist.github.com/xianc/584b34f2e07c22b9141c7622cbe9b350.js"></script>
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

