<?php $pageTitle = "EBB w/ Tower Nav"; ?>

<link href="http://sandbox.x7.org/xchen/css/wcd-ebbCTA.css" rel="stylesheet">
<style type="text/css">
    .ebbWrapper{text-align: center;}
    img{ max-width:100%; }
    .moveMe{ display:block; }
    

    /* actual ebb styles */
    @media (min-width:768px){
      .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li{
        /*width: 30%;*/
        text-align: left;
      }
      .ebbCTA{
        position:absolute;
        top:30%;
        right:0;
      }
    }
    @media (max-width:767px){
        .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li:last-child{ width:100%; } /* expand last CTA on mobile to 100% since there are an odd # of CTAs */
    }
</style>

<div class="moveMe">
  <!--======== EBB ==========-->
    <div class="ebbWrapper relative">
         <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0012/968/692/assets/022817_KTB_New_Arrivals_EBB_US_EC_DESK_main12.jpg" alt="Shop Toddler Girl New Arrivals" />

         <!-- sticky nav -->
         <div class="wrapperCTA ebbCTA">
             <ul class="CTAmenu">
                <li class="CTAlist" data-color-at-lg="white" data-style-at-lg="list" data-border-at-lg="none">
                  <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1061825');wcd_addTracking('EBB_Uniform_G_1', '')">Tops <span class="caret"></span></a></li>
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1061826');wcd_addTracking('EBB_Uniform_G_2', '')">Pants & Shorts <span class="caret"></span></a></li>
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1061827');wcd_addTracking('EBB_Uniform_G_3', '')">Dresses <span class="caret"></span></a></li>
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1061828');wcd_addTracking('EBB_Uniform_G_4', '')">layers <span class="caret"></span></a></li>
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1061831');wcd_addTracking('EBB_Uniform_G_5', '')">Backpacks <span class="caret"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
    <br>
</div>


  <div class="wrapper">
  <!--   <p>
      <b><a href="http://www.gol.wip.gidapps.com/preview/launch.do?date=03/16/2017&targetURL=http://www.gol.wip.gidapps.com/browse/category.do?cid=1061822#pageId=0&department=48" target="_blank">Preview it on WIP</a></b>
    </p>

    <p>
      Features:<br>
      <ul>
        <li>Sticky Nav</li>
        <li>Hover active state</li>
        <li>When category is on screen, the respective link in the sticky nav will highlight</li>
      </ul>
    </p> -->


    <p>
      The HTML<br>
      <script src="https://gist.github.com/xianc/56f62c1279d89a38bed731d839e51430.js"></script>
    </p>


</div>

<script>
  $('.moveMe').insertAfter($('header'))
</script>

