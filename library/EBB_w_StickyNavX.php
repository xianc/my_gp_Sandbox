<?php $pageTitle = "EBB w/ Simple Nav"; ?>

<link href="http://sandbox.x7.org/xchen/css/wcd-ebbCTA.css" rel="stylesheet">
<style type="text/css">
    .ebbWrapper{text-align: center;}
    img{ max-width:100%; }
    .moveMe{ display:block; }
    
    /*.g-lg-1, .g-lg-1-1, .g-lg-1-2, .g-lg-1-3, .g-lg-2-3, .g-lg-1-4, .g-lg-3-4, .g-lg-1-5, .g-lg-2-5, .g-lg-3-5, .g-lg-4-5, .g-lg-5-5, .g-lg-1-6, .g-lg-5-6, .g-lg-1-8, .g-lg-3-8, .g-lg-5-8, .g-lg-7-8, .g-lg-1-12, .g-lg-5-12, .g-lg-7-12, .g-lg-11-12, .g-lg-1-24, .g-lg-2-24, .g-lg-3-24, .g-lg-4-24, .g-lg-5-24, .g-lg-6-24, .g-lg-7-24, .g-lg-8-24, .g-lg-9-24, .g-lg-10-24, .g-lg-11-24, .g-lg-12-24, .g-lg-13-24, .g-lg-14-24, .g-lg-15-24, .g-lg-16-24, .g-lg-17-24, .g-lg-18-24, .g-lg-19-24, .g-lg-20-24, .g-lg-21-24, .g-lg-22-24, .g-lg-23-24, .g-lg-24-24{
      float:left;
    }*/
</style>

<div class="moveMe">
  <!--======== EBB ==========-->
    <div class="ebbWrapper">
         <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0013/004/696/assets/012417_WOM_ACCESSORIES_EBB_C_US_EC_DESK_main1.jpg" alt="Shop kids uniforms" />

         <!-- sticky nav -->
         <div class="wrapperCTA wcdStickyCatNav" data-page="category">
             <ul class="CTAmenu" data-type="simple-at-lg">
                <li class="CTAlist" data-color="black" data-style="list" data-border-at-lg="none">
                  <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList grid-root">
                      <li class="g-1-2 g-lg-1-5"><a onclick="wcdCategoryMarketing.scrollToCid('1061825');wcd_addTracking('EBB_Uniform_G_1', '')">Tops</a></li>
                      <li class="g-1-2 g-lg-1-5"><a onclick="wcdCategoryMarketing.scrollToCid('1061826');wcd_addTracking('EBB_Uniform_G_2', '')">Pants & Shorts</a></li>
                      <li class="g-1-2 g-lg-1-5"><a onclick="wcdCategoryMarketing.scrollToCid('1061827');wcd_addTracking('EBB_Uniform_G_3', '')">Dresses</a></li>
                      <li class="g-1-2 g-lg-1-5"><a onclick="wcdCategoryMarketing.scrollToCid('1061828');wcd_addTracking('EBB_Uniform_G_4', '')">layers</a></li>
                      <li class="g-1-1 g-lg-1-5"><a onclick="wcdCategoryMarketing.scrollToCid('1061831');wcd_addTracking('EBB_Uniform_G_5', '')">Backpacks</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <br>
</div>


  <div class="wrapper">
    <p>
      <b><a href="http://www.gol.wip.gidapps.com/preview/launch.do?date=03/16/2017&targetURL=http://www.gol.wip.gidapps.com/browse/category.do?cid=1061822#pageId=0&department=48" target="_blank">Preview it on WIP</a></b>
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
      The CSS<br>
      Link this stylesheet: 
      <pre class="brush: js;">
        <link rel="stylesheet" type="text/css" href="/Asset_Archive/GPWeb/content/0011/027/523/wcd-ebbCTA.css">
      </pre>
      Add these style rules:
      <script src="https://gist.github.com/xianc/f212d199859cd5879d81f1af7b373071.js"></script>
    </p>

    <p>
      The HTML<br>
      <script src="https://gist.github.com/xianc/eb77813f7bf6c88d02e01e8703db538c.js"></script>
    </p>

    <p>
      If Sticky, add this JS:<br>
      <script src="https://gist.github.com/xianc/84abd9fa3735001d634330ca637bbd39.js"></script>
    </p>

</div>

<script>
  $('.moveMe').insertAfter($('header'))
</script>

