<?php $pageTitle = "EBB w/ Simple Nav"; ?>

<link href="http://sandbox.x7.org/xchen/css/wcd-ebbCTA.css" rel="stylesheet">
<style type="text/css">
    .ebbWrapper{text-align: center;}
    img{ max-width:100%; }
    .moveMe{ display:block; }
    

    /* actual ebb styles */
    @media (min-width:768px){
      .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li{
        width: 20%; /* edit size here */
      }
      .wrapperCTA[data-page="category"]  ul.CTAmenu[data-type="simple-at-lg"]{
        border-top:0;
      }
    }
    @media (max-width:767px){
        .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li:last-child{ width:100%; } /* expand last CTA on mobile to 100% since there are an odd # of CTAs */
    }
</style>

<div class="moveMe">
  <!--======== EBB ==========-->
    <div class="ebbWrapper">
         <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0013/004/696/assets/012417_WOM_ACCESSORIES_EBB_C_US_EC_DESK_main1.jpg" alt="Shop kids uniforms" />

         <!-- sticky nav -->
         <div class="wrapperCTA wcdStickyCatNav" data-page="category">
             <ul class="CTAmenu" data-size-at-md="half" data-type="simple-at-lg">
                <li class="CTAlist" data-color="black" data-style="inline list" data-border-at-lg="none">
                  <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1061825');wcd_addTracking('EBB_Uniform_G_1', '')">Tops</a></li>
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1061826');wcd_addTracking('EBB_Uniform_G_2', '')">Pants & Shorts</a></li>
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1061827');wcd_addTracking('EBB_Uniform_G_3', '')">Dresses</a></li>
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1061828');wcd_addTracking('EBB_Uniform_G_4', '')">layers</a></li>
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1061831');wcd_addTracking('EBB_Uniform_G_5', '')">Backpacks</a></li>
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

