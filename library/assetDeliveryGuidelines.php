<?php $pageTitle = "Pause Play"; ?>
<style>
  li{
    margin:5px 0;
  }

</style>


<div class="wrapper">

  <p>
    <h1>GOL Asset Delivery Guidelines</h1>

    <h2>PNG & JPGs</h2>
    <p>
      <h2>US:</h2>
      US is the <strong><u>only</u></strong> market that has runs Akamai image compression. To deal with the compression issues, we deliver JPGs & PNGs at 2x. 
      <p>
        <ul>
          <li>(US HP) Deliver Mobile @ 640px --> WCD will code assets for screen sizes up to 480px<br/>

          <!--Please name the assets with the suffix "_sm" (ex: 032817_US_EC_HP_MON_main1_sm.jpg) -->
          </li>
          <li>Deliver Mobile @ 1280px --> WCD will code assets for mobile/ (US HP) screen sizes from 481-767px <br/>
          <!--Please name the assets with the suffix "_md" (ex: 032817_US_EC_HP_MON_main1_md.jpg)-->
          </li>
          <li>Deliver Desktop @ 2x --> WCD will code assets for screen sizes 768px+</li>
          <!-- <li>When delivering gifs, make sure ONLY the moving part of the image is a gif. Static parts should be deliver as a jpg.</li> -->
        </ul>
      </p>
      <p>
        <pre class="brush: js;">
          <picture>
            <source media="(max-width: 480px)" srcset="640 MOBILE IMAGE URL"> //HP 
            <source media="(max-width: 767px)" srcset="1280 MOBILE IMAGE URL">
            <img src="DESKTOP 2X IMAGE URL" alt="IMAGE DESCRIPTION">
          </picture>
        </pre>
      </p>
    </p>
    <p>
      <h2>CDA:</h2>
      <ul>
        <li>No Akamai compression</li>
        <li>EC can leverage US assets</li>
        <li>FC assets are to be delivered at 1x</li>
      </ul>
    </p>
    <p>
      <h2>EU/UK/JP</h2>
      <ul>
        <li>No Akamai compression</li>
        <li>Deliver assets at 1x</li>
      </ul>
    </p>
  </p>

  <hr class="keyline" data-color="grey"/>

    <p>
      <h2>SVGs</h2>
      <ul>
        <li>Deliver SVGs for Homepage, Promo & Templetized Adult DP Page.</li>
        <li>Make sure the svg is the <i>same size</i> as the homepage main asset</li>
        <li>Make sure to structure your Photoshop file like this: <img src="assets/psdStructureForSVG.png">
      </ul>
    </p>
  <hr class="keyline" data-color="grey"/>
  <p>
    <h2>GIFs</h2>
    <ul>
      <li>We should not be deliverying any gif files</li>
    </ul>
  </p>

  <hr class="keyline" data-color="grey"/>

  <p>
    <h2>Video TBD</h2>
    <ul>
      <li>Video File size: the longer the video, the bigger the file size. This isn’t as big an issue for large breakpoints. Refrain from an video embed or autoplay for mobile breakpoints unless it is click to pop up.</li>
      <li>Width/Height of video: If this is a main message, be mindful of the entire message fitting above the fold. This is in relation to the users Desktop resolution. The current video is very tall, the CTA and video controls are below the fold causing some ambiguity on what the message and video relates too.</li>
      <li>Accessibility: Close Caption on video, ability to pause and play.</li>
    </ul>
  </p>
  
</div><!-- end content div -->

