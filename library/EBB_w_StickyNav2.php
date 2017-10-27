<?php $pageTitle = "EBB w/ Slider Simple Nav"; ?>

<link href="http://sandbox.x7.org/xchen/css/wcd-ebbCTA.css" rel="stylesheet">
<style type="text/css">
    .ebbWrapper{text-align: center;}
    img{ max-width:100%; }
    .moveMe{ display:block; }
    
    /* actual ebb styles */
    .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li{
      width: 20%; /* edit size here */
    }
    .ebbWrapper  ul.CTAmenu{
      border-bottom:1px solid #28998B !important;
      border-top: 1px solid #28998B !important;
    }
    .wrapperCTA[data-page="category"]  ul.CTAmenu[data-type="simple"] > li.CTAlist > ul.CTAdropdownList li a.active,
    .wrapperCTA[data-page="category"]  ul.CTAmenu[data-type="simple"] > li.CTAlist > ul.CTAdropdownList li a:hover{ border-bottom:2px solid #28998B !important; }
    
    @media (max-width:767px){
        .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li{
          width:20%;
        }
    }
</style>

<div class="moveMe">
  <!--======== EBB ==========-->
    <div class="ebbWrapper">
      <picture>
        <source media="(max-width: 767px)" srcset="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0013/160/140/assets/mobile/02142017_WOM_DRESSES_EBB_B_US_EC_MOB_main1.png">
        <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0013/160/140/assets/desktop/02142017_WOM_DRESSES_EBB_B_US_EC_DESK_main1.jpg" alt="shop dresses" />
      </picture>

      <div class="ebbSliderWrapper">
        <div class="ebbSlider">
          <img src="http://www.gol.wip.gidapps.com/Asset_Archive/GPWeb/content/0012/964/058/assets/desktop/02142017_WOM_DRESSES_EBB_B_US_EC_DESK_2.jpg" alt="shop dresses" />
          <!-- sticky nav -->
         <div class="wrapperCTA wcdStickyCatNav" data-page="category">
             <ul class="CTAmenu" data-type="simple">
                <li class="CTAlist" data-style="inline list" data-border="none">
                  <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1008444'); wcd_addTracking('EBB_Dresses_W_Shirtdress', '');">Shirtdress</a></li>
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1077120'); wcd_addTracking('EBB_Dresses_W_TShirt', '');">T-Shirt</a></li>
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1077121'; wcd_addTracking('EBB_Dresses_W_TieWaist', '');">Tie-Waist</a></li>
                      <li><a onclick="wcdCategoryMarketing.scrollToCid('1077122'; wcd_addTracking('EBB_Dresses_W_MidiMaxi', '');">Midi & Maxi</a></li>
                      <li><a href="javascript:void(0)" onclick="wcdCategoryMarketing.scrollToCid('1013399'; wcd_addTracking('EBB_Dresses_W_Jumpsuit', '');">Jumpsuit & Romper</a></li>
                    </ul>
                </li>
            </ul>
          </div>
        </div><!-- end ebbSlider -->
      </div><!-- end ebbSliderWrapper -->
    </div>
    <br>
</div>


  <div class="wrapper">
    <p>
      <b><a href="http://www.gol.wip.gidapps.com/preview/launch.do?date=08/10/2017&targetURL=http://www.gol.wip.gidapps.com/browse/category.do?cid=13658&departmentRedirect=true#pageId=0&department=136" target="_blank">Preview it on WIP</a></b>
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
      <script src="https://gist.github.com/xianc/33555ae05a3de3566fed86168d9e0b00.js"></script>
    </p>

    <p>
      The HTML<br>
      <script src="https://gist.github.com/xianc/2befb122bf8c53b5e33826f58df04707.js"></script>
    </p>

    <p>
      If Sticky, add this JS:<br>
      <script src="https://gist.github.com/xianc/84abd9fa3735001d634330ca637bbd39.js"></script>
    </p>

</div>

<script>
  $('.moveMe').insertAfter($('header'))
</script>

