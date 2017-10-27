<html>

  <head>
    <meta charset="UTF-8">
    <title>Gap's CTA System</title>
    <link rel="stylesheet" type="text/css" href="wcd-CTAdropdowns.css">
    <link rel="stylesheet" type="text/css" href="wcd-CTAholiday.css">
    </head>
    <?php include '../header.html';?>
    <style>
      .content,.testWrap{
        background: #fff;
      }
      @media (min-width: 768px){
        .tab{
          padding-left:20px;
        }
      }
      @media (max-width: 767px){
        xmp{
          display:none;
        }
      }
      .wrapperCTA{
        display: inline-block;
        width: 100%;
      }

      .wrapperCTA a{
        font-style: normal;
      }
      li.CTAlist{
        padding-bottom:20px;
      }

      hr{
        margin:80px 0;
      }
    </style>

  <div class="wrapper">
  <h1>Gap's Holiday Styles </h1>
  Stylesheet:
  <pre class="brush: js;">
    <link rel="stylesheet" type="text/css" href="/Asset_Archive/GPWeb/content/0011/027/523/wcd-CTAholiday.css">
  </pre>
  <div class="wrapperCTA">
  <ul class="CTAmenu">
      <!-- holiday red -->
      <li class="CTAlist" data-color="holiday red" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday red</a>
      </li>
      <li class="CTAlist" data-color="holiday red inverse" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday red inverse</a>
      </li>
      <!-- holiday red2 -->
      <li class="CTAlist" data-color="holiday red2" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday red2</a>
      </li>
      <li class="CTAlist" data-color="holiday red2 inverse" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday red2 inverse</a>
      </li>
      <!-- holiday green -->
      <li class="CTAlist" data-color="holiday green" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday green</a>
      </li>
      <li class="CTAlist" data-color="holiday green inverse" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday green inverse</a>
      </li>
      <!-- holiday blue -->
      <li class="CTAlist" data-color="holiday blue" data-hover="none">
          <a class="CTAbutton" href="#linkhere">blue</a>
      </li>
      <li class="CTAlist" data-color="holiday blue inverse" data-hover="none">
          <a class="CTAbutton" href="#linkhere">blue inverse</a>
      </li>
      <!-- holiday yellow -->
      <li class="CTAlist" data-color="holiday yellow" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday yellow</a>
      </li>
      <li class="CTAlist" data-color="holiday yellow inverse" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday yellow inverse</a>
      </li>
  </ul>
</div>

  <u>Available styles</u>:<br>
  data-color="holiday red", data-color="holiday red inverse"<br>
  data-color="holiday red2", data-color="holiday red2 inverse"<br>
  data-color="holiday green", data-color="holiday green inverse"<br>
  data-color="holiday blue", data-color="holiday blue inverse"<br>
  data-color="holiday yellow", data-color="holiday yellow inverse"<br>
  <br><br>

  <b><u>Use:</u></b><br><br>
    <div class="wrapperCTA">
      <ul class="CTAmenu">
          <li class="CTAlist" data-color="holiday red inverse">
              <a class="CTAbutton" href="#linkhere">holiday red inverse</a>
          </li>
      </ul>
    </div>

  <pre class="brush: js;">
    <div class="wrapperCTA">
      <ul class="CTAmenu">
          <li class="CTAlist" data-color="holiday red inverse">
              <a class="CTAbutton" href="#linkhere">holiday red inverse</a>
              ....
          </li>
      </ul>
    </div>
  </pre>

    <br><br>

    pair with <b>data-hover="none"</b> to remove any hover stylings. <br>
    Note: mobile devices, by defualt has no hover, so the hover modifyer only affects the desktop styles. <br>
    Note2: don't use data-hover="none" on dropdowns. For usability sake, dropdowns by default has hover states. 
    <br><br>
    <u>Also available</u>:<br>
    data-color-at-lg="holiday red", data-color-at-lg="holiday red inverse"<br>
    data-color-at-lg="holiday red2", data-color-at-lg="holiday red2 inverse"<br>
    data-color-at-lg="holiday green", data-color-at-lg="holiday green inverse"<br>
    data-color-at-lg="holiday blue", data-color-at-lg="holiday blue inverse"<br>
    data-color-at-lg="holiday yellow", data-color-at-lg="holiday yellow inverse"<br>

    <br><br>

    <b><u>Use:</u></b> ORDER MATTERS! Remember, <b>MOBILE FIRST</b>. Therefore, data-color-at-lg data should be listed AFTER the default data-color value. Any additional modifyers, like data-hover="none" follows at the end. (resize browser to view mobile). 
    <br><br>
    <div class="wrapperCTA">
      <ul class="CTAmenu">
          <li class="CTAlist" data-color="holiday red" data-color-at-lg="holiday red inverse" data-hover="none">
              <a class="CTAbutton" href="#linkhere">holiday red</a>
          </li>
      </ul>
    </div>

    <pre class="brush: js;">
      <div class="wrapperCTA">
        <ul class="CTAmenu">
            <li class="CTAlist" data-color="holiday red" data-color-at-lg="holiday red inverse" data-hover="none">
                <a class="CTAbutton" href="#linkhere">holiday red</a>
                ....
            </li>
        </ul>
      </div>
    </pre>


<hr>

<h1 id="holidayButtons">Buttons</h1>
<div class="wrapperCTA">
  <ul class="CTAmenu">
      <!-- holiday red -->
      <li class="CTAlist" data-color="holiday red" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday red</a>
      </li>
      <li class="CTAlist" data-color="holiday red inverse" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday red inverse</a>
      </li>
      <!-- holiday red2 -->
      <li class="CTAlist" data-color="holiday red2" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday red2</a>
      </li>
      <li class="CTAlist" data-color="holiday red2 inverse" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday red2 inverse</a>
      </li>
      <!-- holiday green -->
      <li class="CTAlist" data-color="holiday green" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday green</a>
      </li>
      <li class="CTAlist" data-color="holiday green inverse" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday green inverse</a>
      </li>
      <!-- holiday blue -->
      <li class="CTAlist" data-color="holiday blue" data-hover="none">
          <a class="CTAbutton" href="#linkhere">blue</a>
      </li>
      <li class="CTAlist" data-color="holiday blue inverse" data-hover="none">
          <a class="CTAbutton" href="#linkhere">blue inverse</a>
      </li>
      <!-- holiday yellow -->
      <li class="CTAlist" data-color="holiday yellow" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday yellow</a>
      </li>
      <li class="CTAlist" data-color="holiday yellow inverse" data-hover="none">
          <a class="CTAbutton" href="#linkhere">holiday yellow inverse</a>
      </li>
  </ul>
</div>



<h2 id="holidayDropdowns">Dropdowns</h2>

        <div class="wrapperCTA">
          <ul class="CTAmenu">
            <!-- holiday red -->
              <li class="CTAlist" data-color="holiday red">
                  <a class="CTAbutton" href="javascript:void(0)">holiday red <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="holiday red inverse">
                  <a class="CTAbutton" href="javascript:void(0)">holiday red inverse <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>

              <!-- holiday red 2-->
              <li class="CTAlist" data-color="holiday red2">
                  <a class="CTAbutton" href="javascript:void(0)">holiday red2 <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="holiday red2 inverse">
                  <a class="CTAbutton" href="javascript:void(0)">holiday red2 inverse <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>

              <!-- holiday green-->
              <li class="CTAlist" data-color="holiday green">
                  <a class="CTAbutton" href="javascript:void(0)">holiday green <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="holiday green inverse">
                <a class="CTAbutton" href="javascript:void(0)">holiday green inverse <span class="plusMinus"></span></a>
                <ul class="CTAdropdownList">
                    <li><a href="#link1">link 1</a></li>
                    <li><a href="#link2">here is link 2</a></li>
                    <li><a href="#link3">and link 3</a></li>
                </ul>
            </li>


            <!-- holiday blue-->
              <li class="CTAlist" data-color="holiday blue">
                  <a class="CTAbutton" href="javascript:void(0)">holiday blue <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="holiday blue inverse">
                <a class="CTAbutton" href="javascript:void(0)">holiday blue inverse <span class="plusMinus"></span></a>
                <ul class="CTAdropdownList">
                    <li><a href="#link1">link 1</a></li>
                    <li><a href="#link2">here is link 2</a></li>
                    <li><a href="#link3">and link 3</a></li>
                </ul>
            </li>

            <!-- holiday yellow-->
              <li class="CTAlist" data-color="holiday yellow">
                  <a class="CTAbutton" href="javascript:void(0)">holiday blue <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="holiday yellow inverse">
                <a class="CTAbutton" href="javascript:void(0)">holiday blue inverse <span class="plusMinus"></span></a>
                <ul class="CTAdropdownList">
                    <li><a href="#link1">link 1</a></li>
                    <li><a href="#link2">here is link 2</a></li>
                    <li><a href="#link3">and link 3</a></li>
                </ul>
            </li>
          </ul>
        </div>

        <br><br>


    <h1>Examples</h1>
    Holiday Red Inverse on desktop, Holiday Red on mobile
    <div class="wrapperCTA">
      <ul class="CTAmenu">
          <li class="CTAlist" data-color="holiday red" data-color-at-lg="holiday red inverse" data-hover="none" >
              <a class="CTAbutton" href="#linkhere">holiday red</a>
          </li>
      </ul>
    </div>
    <pre class="brush: js;">
      <div class="wrapperCTA">
        <ul class="CTAmenu">
            <li class="CTAlist" data-color="holiday red" data-color-at-lg="holiday red inverse" data-hover="none" >
                <a class="CTAbutton" href="#linkhere">holiday red</a>
            </li>
        </ul>
      </div>
    </pre>

    <HR>
    <H1>In Progress: Mobile Div Nav Dropdown</H1>

  <div class="wrapperCTA">
      <ul class="CTAmenu">
        <!-- holiday red -->
          <li class="CTAlist" data-color="divNav">
              <a class="CTAbutton" href="javascript:void(0)">DivNav DropDown <span class="plusMinus"></span></a>
              <ul class="CTAdropdownList">
                  <li><a href="#link1">link 1</a></li>
                  <li><a href="#link2">here is link 2</a></li>
                  <li><a href="#link3">and link 3</a></li>
              </ul>
          </li>
      </ul>
      <ul class="CTAmenu">
        <!-- holiday red -->
          <li class="CTAlist" data-color="divNav" data-style-at-lg="list">
              <a class="CTAbutton" href="javascript:void(0)">DivNav DropDown <span class="plusMinus"></span></a>
              <ul class="CTAdropdownList">
                  <li><a href="#link1">link 1</a></li>
                  <li><a href="#link2">here is link 2</a></li>
                  <li><a href="#link3">and link 3</a></li>
              </ul>
          </li>
      </ul>
  </div>
</div><!-- end wrapper -->

  <?php include '../footer.html';?>
  <script src="wcd-CTAdropdowns.js"></script>
</html>
