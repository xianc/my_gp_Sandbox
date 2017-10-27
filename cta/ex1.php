<html>

  <head>
    <meta charset="UTF-8">
    <title>Gap's CTA System</title>
    <link rel="stylesheet" type="text/css" href="wcd-CTAdropdowns3.css">
    </head>

    <?php include '../header.html';?>

    <style>
      .content,.testWrap{
        background: #ccc;
      }
      .CTAwrapper{
        display: inline-block;
        width: 100%;
      }
      .CTAwrapper a,
      .tableOfContents a{
        font-style: normal;
      }

      @media (min-width: 768px){
      }
      @media (max-width: 767px){
        xmp{
          display:none;
        }
      }

    </style>


<div class="wrapper">
  <p>
    <b><a href="http://sandbox.x7.org/xchen/cta/index.php"><-- Back to Main CTA Documentation</a></b>
  </p>

    <p>
      <h2 id="gfol">GFOL Styles</h2>
      <p>
      1. GFOL Light Blue<Br>
        
                <div class="CTAwrapper" data-font="90">
                  <ul class="CTAmenu" data-brand="gfol" data-brand="gfol">
                      <li class="CTAlist" data-color="gfol blue" data-border="gfol blue" data-hover="gfol blue inverse">
                          <a class="CTAbutton" href="javascript:void(0)">button</a>
                      </li>
                  </ul>
                </div>
                <br>

                <pre class="brush: js;">
                  <div class="CTAwrapper" data-font="90">
                    <ul class="CTAmenu" data-brand="gfol" data-brand="gfol">
                        <li class="CTAlist" data-color="gfol blue" data-border="gfol blue" data-hover="gfol blue inverse">
                            <a class="CTAbutton" href="javascript:void(0)">button</a>
                        </li>
                    </ul>
                  </div>
                </pre>


      </p>

      <p>
      2. GFOL Gap Blue<Br>
        
                <div class="CTAwrapper">
                  <ul class="CTAmenu" data-brand="gfol">
                      <li class="CTAlist" data-color="gap blue" data-border="gap blue" data-hover="gap blue">
                          <a class="CTAbutton" href="javascript:void(0)">button</a>
                      </li>
                  </ul>
                </div>

                <pre class="brush: js;">
                  <div class="CTAwrapper">
                    <ul class="CTAmenu" data-brand="gfol">
                        <li class="CTAlist" data-color="gap blue" data-border="gap blue" data-hover="gap blue">
                            <a class="CTAbutton" href="javascript:void(0)">button</a>
                        </li>
                    </ul>
                  </div>
                </pre>

                <br>
                <div class="CTAwrapper">
                  <ul class="CTAmenu" data-brand="gfol">
                      <li class="CTAlist" data-color="gap blue" data-border="gap blue" data-hover="gap blue">
                          <a class="CTAbutton" href="javascript:void(0)">dropdown <span class="plusMinus"></span></a>
                          <ul class="CTAdropdownList">
                              <li><a href="#link1">link 1</a></li>
                              <li><a href="#link2">link</a></li>
                              <li><a href="#link3">link</a></li>
                          </ul>
                      </li>
                  </ul>
                </div>

                <pre class="brush: js;">
                  <div class="CTAwrapper">
                    <ul class="CTAmenu" data-brand="gfol">
                        <li class="CTAlist" data-color="gap blue" data-border="gap blue" data-hover="gap blue">
                            <a class="CTAbutton" href="javascript:void(0)">dropdown <span class="plusMinus"></span></a>
                            <ul class="CTAdropdownList">
                                <li><a href="#link1">link 1</a></li>
                                <li><a href="#link2">link</a></li>
                                <li><a href="#link3">link</a></li>
                            </ul>
                        </li>
                    </ul>
                  </div>
                </pre>


      </p>

      <p>

      3. GFOL White<Br>

                <div class="CTAwrapper">
                  <ul class="CTAmenu" data-brand="gfol">
                      <li class="CTAlist" data-color="white" data-hover="gap blue inverse">
                          <a class="CTAbutton" href="javascript:void(0)">button w/ hover</a>
                      </li>
                  </ul>
                </div>

                <pre class="brush: js;">
                  <div class="CTAwrapper">
                    <ul class="CTAmenu" data-brand="gfol">
                        <li class="CTAlist" data-color="white" data-hover="gap blue inverse">
                            <a class="CTAbutton" href="javascript:void(0)">button w/ hover</a>
                        </li>
                    </ul>
                  </div>
                </pre>


                <br>
                <div class="CTAwrapper">
                  <ul class="CTAmenu" data-brand="gfol">
                      <li class="CTAlist" data-color="white" data-hover="gap blue inverse">
                          <a class="CTAbutton" href="javascript:void(0)">dropdown w/ hover <span class="plusMinus"></span></a>
                          <ul class="CTAdropdownList">
                              <li><a href="#link1">link 1</a></li>
                              <li><a href="#link2">link</a></li>
                              <li><a href="#link3">link</a></li>
                          </ul>
                      </li>
                  </ul>
                </div>

                <pre class="brush: js;">
                  <div class="CTAwrapper">
                      <ul class="CTAmenu" data-brand="gfol">
                          <li class="CTAlist" data-color="white" data-hover="gap blue inverse">
                              <a class="CTAbutton" href="javascript:void(0)">dropdown w/ hover <span class="plusMinus"></span></a>
                              <ul class="CTAdropdownList">
                                  <li><a href="#link1">link 1</a></li>
                                  <li><a href="#link2">link</a></li>
                                  <li><a href="#link3">link</a></li>
                              </ul>
                          </li>
                      </ul>
                    </div>
                </pre>
      </p>
    </p>


</div>


 <?php include '../footer.html';?>
  <script src="wcd-CTAdropdowns.js"></script>
</html>