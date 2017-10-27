<html>

  <head>
    <meta charset="UTF-8">
    <title>Gap's CTA System</title>
    <link rel="stylesheet" type="text/css" href="wcd-CTAdropdowns2.css">
    </head>

    <?php include '../header.html';?>
    <style>
      .content,.testWrap{
        background: #ccc;
      }
      .wrapperCTA{
        display: inline-block;
        width: 100%;
      }
      .wrapperCTA a{
        font-style: normal;
      }
      .tableOfContents a{
        font-style: normal;
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



      /* back to top 8 */
      #return-to-top {
          position: fixed;
          bottom: 20px;
          right: 20px;
/*          background: rgb(0, 0, 0);
          background: rgba(0, 0, 0, 0.7);
          width: 50px;
          height: 50px;
          display: block;
          text-decoration: none;
          -webkit-border-radius: 35px;
          -moz-border-radius: 35px;
          border-radius: 35px;
          display: none;
          -webkit-transition: all 0.3s linear;
          -moz-transition: all 0.3s ease;
          -ms-transition: all 0.3s ease;
          -o-transition: all 0.3s ease;
          transition: all 0.3s ease;*/
      }
      #return-to-top i {
          color: #fff;
          margin: 0;
          position: relative;
          left: 16px;
          top: 13px;
          font-size: 19px;
          -webkit-transition: all 0.3s ease;
          -moz-transition: all 0.3s ease;
          -ms-transition: all 0.3s ease;
          -o-transition: all 0.3s ease;
          transition: all 0.3s ease;
      }
      #return-to-top:hover {
          /*background: rgba(0, 0, 0, 0.9);*/
      }
      #return-to-top:hover i {
          text-decoration: none;
          color: #fff;
          top: 5px;
      }
      a#return-to-top:hover{
        text-decoration: none;
      }

    </style>


  <a href="javascript:" id="return-to-top"><i class="icon-chevron-up">^top</i></a>
  <div class="wrapper">

    <!-- intro -->
    <p>
      <h1>Gap's CTA/Dropdown System v2</h1>
      Updates + additions: Table of contents added to this page and CSS, Remove hover states, spacing updates<br>
      <strong><a href="http://www.gol.wip.gidapps.com/preview/launch.do?date=06/02/2018&targetURL=http://www.gol.wip.gidapps.com/browse/info.do?cid=1055472" target="_blank">View on WIP</a></strong>

      <br><br>

      For live content: Link directly. Pls do not edit: 
      <pre class="brush: js;">
        <link rel="stylesheet" type="text/css" href="/Asset_Archive/GPWeb/content/0011/027/523/wcd-CTAdropdowns-Spring.css">
        <script src="/Asset_Archive/GPWeb/content/0011/027/523/wcd-CTAdropdowns.js"></script>
      </pre>
    </p>

    <br><br>

    <!-- table of contents -->
    <p>
      <h2>Table of Contents</h2>
      <ul class="tableOfContents">
        <li>1. <a href="#dropdowns">Dropdowns</a>
          <ul>
            <li>1a. <a href="#dropdowns">Default Dropdowns</a></li>
            <li>1b. <a href="#halfDropdowns">Half Dropdowns</a></li>
          </ul>
        </li>
        <li>2. <a href="#buttons">Buttons</a>
          <ul>
            <li>2a. <a href="#buttons">Default Buttons</a></li>
            <li>2b. <a href="#halfButtons">Half Buttons</a></li>
          </ul>
        </li>
        <li>3. <a href="#colorSchemes">Color Schemes</a></li>
        <li>4. <a href="#fontSizes">Font Sizes</a></li>
        <li>5. <a href="#listStyles">List Styles</a>
          <ul>
            <li>5a. <a href="#vertList">Vertical Lists</a>
              <ul>
                <li>i. <a href="#vertList">Vertical List of Equal Widths</a></li>
                <li>ii. <a href="#vertInlineBlockList">Verticle List of Varying Widths</a></li>
                <li>iii. <a href="#vertTextList">Vertical Text List (no borders)</a></li>
              </ul>
            </li>
            <li><a href="#halfWidthLists">5b. Half Width Lists
              <ul>
                <li>i. <a href="#halfWidthLists">Half Width Lists</a></li>
                <li>ii. <a href="#halfWidthTextList">Half Width Text Lists (no borders)</a></li>
                <li>iii. <a href="#halfWidthDividerList">Half Width Lists with Top & Bottom Border Separators</a></li>
              </ul>
            </li>
            <li><a href="#inlineList">5c. Horitzontal Lists</a>
              <ul>
                <li>i. <a href="#inlineList">Horitzontal Lists</a></li>
                <li>ii. <a href="#inlineTextList">Horitzontal Text Lists (no borders)</a></li>
                <li>iii. <a href="#inlinePipeList">Horitzontal Text with Pipe Separators</a></li>
                <!-- <li><a href="#inlinePipeList">iv. Horitzontal Text with Pipe Separators</a></li> -->
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#examples">6. Complex Examples</a></li>
      </ul>
    </p>

  <hr>



  <!--- 1.  dropdowns -->
  <p>
    <h2 id="dropdowns">1. Dropdowns</h2>
    Mobile: Dropdowns are stand alone horizontal bars. <br>
    Desktop: Dropdowns are inline elements whose width is determined by the longest word in the dropdown.<br>
    <br>
    *note: To absolute position the CTA, please add a new class to the wrapperCTA like: class="warpperCTA absPosClass". And use CSS to add rules to position that new class.
    <br><br>



      <!-- dropdown -->
      <div class="wrapperCTA">
          <ul class="CTAmenu">
              <li class="CTAlist">
                  <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#linkhere">link 1</a></li>
                      <li><a href="#linkhere">here is link 2</a></li>
                      <li><a href="#linkhere">and link 3</a></li>
                  </ul>
              </li>
          </ul>
      </div>
      <script src="https://gist.github.com/anonymous/47bd1a4aa83fade2f46b464d0a3c7cf6.js"></script>
  </p>

  <br><br>

  <!--- 1.  half dropdowns -->
  <p>
    <h2 id="halfDropdowns">1a. Mobile Double Dropdowns</h2> 
    Use data-size="half dropdown"

      <!-- dropdown -->
      <div class="wrapperCTA">
          <ul class="CTAmenu" data-size="half dropdown">
              <li class="CTAlist">
                  <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#linkhere">link 1</a></li>
                      <li><a href="#linkhere">here is link 2</a></li>
                      <li><a href="#linkhere">and link 3</a></li>
                  </ul>
              </li>

              <li class="CTAlist">
                  <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#linkhere">link 1</a></li>
                      <li><a href="#linkhere">here is link 2</a></li>
                      <li><a href="#linkhere">and link 3</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/1fea0981a4bd932d0655f051b54d15c8.js"></script>

  </p>



  <hr>



  <!--- 2.  Buttons -->
  <p>
    <h2 id="buttons">Buttons</h2>
    Mobile: buttons are full width horizontal bars or half width buttons.<br>
    Desktop: Buttons are inline elemnts whose width is determined by the button copy.<br>

    <h3>1. Default button</h3>
    Mobile: stand alone horizontal bars<br>
    Desktop: inline block buttons. The text defines the size ofbutton.<br>



    <!-- button -->
    <div class="wrapperCTA">
      <ul class="CTAmenu">
          <li class="CTAlist">
              <a class="CTAbutton" href="#linkhere">button 1</a>
          </li>
      </ul>
    </div>

    <!-- one button-->
    <script src="https://gist.github.com/anonymous/676302a0984a9fbdf25c8aab78261dd9.js"></script>


    <!-- button -->
    <div class="wrapperCTA">
      <ul class="CTAmenu">
          <li class="CTAlist">
              <a class="CTAbutton" href="#linkhere">button 1a</a>
          </li>
          <li class="CTAlist">
              <a class="CTAbutton" href="#linkhere">button 2a</a>
          </li>
      </ul>
    </div>

    <!-- multiple buttons in a row -->
    <script src="https://gist.github.com/anonymous/d0376802ad04aff6751340566e041ec2.js"></script>
  </p>

  <br><br>

  <!--- 2a.  half Buttons -->
  <p>
    <h3 id="halfButtons">2a. Half width buttons</h3>
    Use the "data-size="half" attribute. <br>
    Also available: <b>data-size-at-lg="half"</b> and <b>data-size-at-md="half"</b><br>

    <!-- dropdown list half buttons -->

    <div class="wrapperCTA">
        <ul class="CTAmenu" data-size="half">
            <li class="CTAlist" data-style="list">
                <ul class="CTAdropdownList">
                    <li><a href="#link1">half item 1</a></li>
                    <li><a href="#link2">half item 2</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <script src="https://gist.github.com/anonymous/6b7e1f0e3b4a686160a3cdf63669555b.js"></script>


    <br><br><br>

    OR 

    <br><br><br>


    <!--button-->
    <div class="wrapperCTA">
      <ul class="CTAmenu" data-size="half">
          <li class="CTAlist">
              <a class="CTAbutton" href="linkhere">half item</a>
          </li>
          <li class="CTAlist">
              <a class="CTAbutton" href="linkhere">half item 2</a>
          </li>
      </ul>
    </div>

    <script src="https://gist.github.com/anonymous/10a1c091d2cd72ca5ada608a51eaf3dd.js"></script>


  </p>


  <hr>

  <!-- Colour Schemes -->
  <p>
    <h2 id="colorSchemes">3. Color Schemes</h2>
    For flexibility, we have separate data varialbles for Font&Border color and for background color. They can be used in combination.
    <br><br>
    Font&Border Color: There are currently 3 color options: white, gap blue, and black<br>
    Background Color: here are 5 background color options: white, gap blue, black, translucent black, and translucent white. 
    <br><br>


        Font & Border Color: 
        <ul>
          <li>data-color="white"</li>
          <li>data-color="gap blue"</li>
          <li>data-color="black"</li>
          <li>data-color-at-lg="white", data-color-at-md="white" *</li>
          <li>data-color-at-lg="black", data-color-at-md="black" *</li>
        </ul>

        <br><br>
        Background color: 
        <ul>
          <li>data-background="white"</li>
          <li>data-background="gap blue"</li>
          <li>data-background="black"</li>
          <li>data-background="translucent black"</li>
          <li>data-background="translucent white"</li>
        </ul>

        * The black and white font/border color have their own mobile and desktop data attributes that can be used together like:
        <pre class="brush: js;">
          <li class="CTAlist" data-color-at-lg="black" data-color-at-md="white" data-background="translucent black"></li>
        </pre>

        <br><br>



          <div class="wrapperCTA">
            <ul class="CTAmenu">
                <li class="CTAlist" data-color="white">
                    <a class="CTAbutton" href="javascript:void(0)">white <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">here is link 2</a></li>
                        <li><a href="#link3">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="gap blue">
                    <a class="CTAbutton" href="javascript:void(0)">gap blue <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">here is link 2</a></li>
                        <li><a href="#link3">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="black">
                    <a class="CTAbutton" href="javascript:void(0)">black <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">here is link 2</a></li>
                        <li><a href="#link3">and link 3</a></li>
                    </ul>
                </li>
              <li class="CTAlist" data-color="white" data-background="black">
                  <a class="CTAbutton" href="javascript:void(0)">white/black bg <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="white" data-background="gap blue">
                  <a class="CTAbutton" href="javascript:void(0)">white/gap blue bg <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="gap blue" data-background="white">
                  <a class="CTAbutton" href="javascript:void(0)">gap blue/white bg <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
              <br>
              <li class="CTAlist" data-color="white" data-background="translucent black">
                <a class="CTAbutton" href="javascript:void(0)">white/40% black bg <span class="plusMinus"></span></a>
                <ul class="CTAdropdownList">
                    <li><a href="#link1">link 1</a></li>
                    <li><a href="#link2">here is link 2</a></li>
                    <li><a href="#link3">and link 3</a></li>
                </ul>
              </li>
              <li class="CTAlist" data-color="black" data-background="translucent white">
                  <a class="CTAbutton" href="javascript:void(0)">black/50% white bg <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
            </ul>
          </div>

          <br><br>

         ex: (resize browser/use emulator)<br>
        <div class="wrapperCTA">
          <ul class="CTAmenu">
            <li class="CTAlist" data-color-at-lg="black" data-color-at-md="white" data-background="translucent black">
                <a class="CTAbutton" href="javascript:void(0)">button <span class="plusMinus"></span></a>
                <ul class="CTAdropdownList">
                    <li><a href="#link">link 1</a></li>
                    <li><a href="#link">link 2</a></li>
                </ul>
            </li>
          </ul>
        </div>

        <script src="https://gist.github.com/anonymous/97a6073fc29d0958a97d18ed33323b09.js"></script>

    </p>
      
     
  <hr>

  <!-- 4. Font Sizes -->
  <p>
      <h2 id="fontSizes">4. Font Sizes</h2><br>
      Append the data-font attribute on the wrapping div: data-font="80" - data-font="120" by increments of 10. 


      <br><br>

      <b>100% aka data-font="100"  =  14px (roughly)</b>

      <br>



        <!--buttons-->
        <div class="wrapperCTA" data-font="80">
            <ul class="CTAmenu">
                <li class="CTAlist" data-color="black">
                    <a class="CTAbutton" href="javascript:void(0)">80%</a>
                </li>
            </ul>
        </div>

        <div class="wrapperCTA" data-font="90">
            <ul class="CTAmenu">
                <li class="CTAlist" data-color="black" >
                    <a class="CTAbutton" href="javascript:void(0)">90%</a>
                </li>
            </ul>
        </div>

        <div class="wrapperCTA" data-font="100">
            <ul class="CTAmenu">
                <li class="CTAlist" data-color="black">
                    <a class="CTAbutton" href="javascript:void(0)">100%</a>
                </li>
            </ul>
        </div>

        <div class="wrapperCTA" data-font="110">
            <ul class="CTAmenu">
                <li class="CTAlist" data-color="black">
                    <a class="CTAbutton" href="javascript:void(0)">110%</a>
                </li>
            </ul>
        </div>

        <div class="wrapperCTA" data-font="120">
            <ul class="CTAmenu">
                <li class="CTAlist" data-color="black">
                    <a class="CTAbutton" href="javascript:void(0)">120%</a>
                </li>
            </ul>
        </div>


      <script src="https://gist.github.com/anonymous/b83aa020fdc235c432ffa03a1465ee3c.js"></script>
  </p>

  <hr>


  <!-- 5a. list styles -->
  <p>
    <h2 id="listStyles">5a. Verticle List styles</h2>

    <!-- 5a.i vertiable block list -->
    <p>
      <h3 id="vertList">5a.i. Vertical List of Equal Widths</h3><br>
      Also available: <b>data-style-at-lg="list"</b> and <b>data-style-at-md="list"</b><br>

      <div class="wrapperCTA">
          <ul class="CTAmenu">
              <li class="CTAlist" data-color="white" data-style="list">
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">link 2</a></li>
                      <li><a href="#link3">link 3</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/7af4cb4ff2ec1f1af0da6894f4006ce6.js"></script>
    </p>

  <br><br>

    <!-- 5a.ii Verticle List of Varying Widths -->
  <p>
    <h3 id="vertInlineBlockList">5a.ii. Verticle List of Varying Widths </h3><br>
    Also available: <b>data-list-style="inline-block"</b> <br>



    <div class="wrapperCTA">
        <ul class="CTAmenu">
            <li class="CTAlist" data-color="black" data-style="list" data-list-style="inline-block">
                <ul class="CTAdropdownList">
                    <li><a href="#link1">link 1</a></li>
                    <li><a href="#link2">link 2 here</a></li>
                    <li><a href="#link3">and this is link 3</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <script src="https://gist.github.com/anonymous/c7b200c3bd4ed250e0de478ef2307773.js"></script>
  </p>

  <br><br>

  <!--5a.iii. Vertical Text List (no borders)-->
  <p>
    <h3 id="vertTextList">5a.iii. Vertical Text List (no borders) </h3>
    Also available: <b>data-border-at-lg="none"</b>, <b>data-border-at-md="none"</b><br>


    <div class="wrapperCTA">
          <ul class="CTAmenu">
              <li class="CTAlist" data-color="black" data-style="list" data-border="none">
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">link 2</a></li>
                      <li><a href="#link3">link 3</a></li>
                  </ul>
              </li>
          </ul>
      </div>

    <script src="https://gist.github.com/anonymous/64fd42f360e9d27f6bab71dff69244fe.js"></script>
  </p>
  <br><br>

  <!-- 5b. Half Width Lists -->
  <p>
    <h3 id="halfWidthLists">5b. Half Width Lists</h3>
    Pair <b>data-size="half"</b> with <b>data-style="list"</b>. <br>
    Also available: <b>data-size-at-lg="half"</b>, <b>data-size-at-md="half"</b>, <b>data-style-at-lg="list"</b>, <b>data-style-at-md="list"</b><br>


    <!--dropdown -->
    <div class="wrapperCTA">
        <ul class="CTAmenu" data-size="half">
            <li class="CTAlist" data-color="white" data-style="list">
                <ul class="CTAdropdownList">
                    <li><a href="#link1">link 1</a></li>
                    <li><a href="#link2">link 2</a></li>
                    <li><a href="#link3">link 3</a></li>
                    <li><a href="#link3">link 4</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <script src="https://gist.github.com/anonymous/982f080a632ced8347d6eb2869d89aec.js"></script>
  </p>



  <!-- 5b.ii Half Width Text Lists (no borders) -->
  <p>
    <h3 id="halfWidthTextList">5b.ii. Half Width Text Lists (no borders)</h3>
    Pair <b>data-size="half"</b> with <b>data-style="list"</b> and <b>data-border="none"</b>. <br>
    Also available: <b>data-size-at-lg="half"</b>, <b>data-size-at-md="half"</b>, <b>data-style-at-lg="list"</b>, <b>data-style-at-md="list"</b>, <b>data-border-at-lg="none"</b>, <b>data-border-at-md="none"</b><br>


    <div class="wrapperCTA">
        <ul class="CTAmenu" data-size="half">
            <li class="CTAlist" data-color="black" data-style="list" data-border="none" data-hover="none">
                <ul class="CTAdropdownList">
                    <li><a href="#link1">link 1</a></li>
                    <li><a href="#link2">link 2</a></li>
                    <li><a href="#link3">link 3</a></li>
                    <li><a href="#link4">link 4</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <script src="https://gist.github.com/anonymous/0128dff76d5c57a0789786491994a1ec.js"></script>
  </p>


  <br><br>


  <!--5b.iii Half Width Lists with Top & Bottom Border Separators-->
  <p>
    <h3 id="halfWidthDividerList">5b.ii. Half Width Lists with Top & Bottom Border Separators</h3>
    Pair <b>data-style="list"</b> with <b>data-border="dividers"</b><br>
    Also Available: <b>data-border-at-lg="dividers"</b>, <b>data-border-at-md="dividers"</b>

    <!--dropdown-->
    <div class="wrapperCTA">
      <ul class="CTAmenu" data-size="half">
          <li class="CTAlist" data-color="black" data-style="list" data-border="dividers" data-hover="none">
            <ul class="CTAdropdownList">
                <li><a href="#link1">link 1</a></li>
                <li><a href="#link2">link 2</a></li>
                <li><a href="#link3">link 3</a></li>
                <li><a href="#link4">link 4</a></li>
            </ul>
          </li>
      </ul>
    </div>

    <script src="https://gist.github.com/anonymous/e3031a3f222d9648804c77003895e998.js"></script>
  </p>



  <br><hr><br>

  <!-- 5c. 5a. Horitzontal Lists -->
  <p>
    <h2 id="inlineList">5c. Horitzontal Lists</h2>


    <!-- 5c.i. Horitzontal Lists -->
    <p>

      <h3>5c.i. Block Inline list</h3> 
      Use <b>data-style="inline list"</b><br>
      Also available: <b>data-style-at-lg="inline list"</b>, <b>data-style-at-md="inline list"</b><br>

      <div class="wrapperCTA">
          <ul class="CTAmenu">
              <li class="CTAlist" data-color="black" data-style="inline list">
                  <ul class="CTAdropdownList">
                  <li><a href="#link1">link1</a></li>
                  <li><a href="#link2">link2</a></li>
                  <li><a href="#link3">link4</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/015136546692b1a13c87f7bee6046036.js"></script>
    </p>

    <br><br>
    <!-- ii. Horitzontal Text Lists (no borders) -->
    <p>
      <h3 id="inlineTextList">5c.ii. Horitzontal Text Lists (no borders) </h3>
      Pair <b>data-style="inline list"</b> with <b>data-border="none"</b><br>
      Also available: <b>data-style-at-lg="inline list"</b>, <b>data-style-at-md="inline list"</b>, <b>data-border-at-lg="none"</b>, <b>data-border-at-md="none"</b><br>

      <div class="wrapperCTA">
        <ul class="CTAmenu">
          <li class="CTAlist" data-color="gap blue" data-style="inline list" data-border="none" data-hover="none">
              <ul class="CTAdropdownList">
                  <li><a href="#link1">link1</a></li>
                  <li><a href="#link2">link2</a></li>
                  <li><a href="#link3">link4</a></li>
              </ul>
          </li>
        </ul>
      </div>

      <script src="https://gist.github.com/anonymous/d1c5bb5434f8cab488f90720adbd0501.js"></script>
    </p>


    <br><br>
    <!--ii. Horitzontal Text with Pipe Separators-->
    <p>
      <h3 id="inlinePipeList">5c.iii. Horitzontal Text with Pipe Separators</h3>
       Add <b>data-pipes="true"</b><br>
      Also available: <b>data-pipes-at-lg="true"</b>, <b>data-pipes-at-md="true"</b><br>


      <!--dropdown-->
      <div class="wrapperCTA">
          <ul class="CTAmenu">
              <li class="CTAlist" data-color="black" data-pipes="true" data-style="inline list" data-border="none" data-hover="none">
                  <ul class="CTAdropdownList">
                  <li><a href="#link1">link1</a></li>
                  <li><a href="#link2">link2</a></li>
                  <li><a href="#link3">link4</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/f26b851ef54ea325ca4b98bce3408f37.js"></script>
    </p>


    <br><br>
    <p>
      <h3>Inline text list with manually added pipelines. </h3>
      <xmp><span class="pipe"></span></xmp>
      Also avaialble: <b>class="pipe-at-md"</b> and <b>class="pipe-at-lg"</b>

      <!--dropdown-->
      <div class="wrapperCTA">
          <ul class="CTAmenu">
              <li class="CTAlist" data-color="black" data-style="inline list" data-border="none" data-hover="none">
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link1</a></li>
                      <li><span class="pipe"></span><a href="#link2">link2</a></li>
                      <li><span class="pipe"></span><a href="#link3">link4</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/530242465ff00c5f2821febcceca8213.js"></script>
    </p>
  </p>



  <br>
  <hr>

  <h2 style="color:red" id="examples">Examples</h2>
    <p>
      <h3><u>example 1</u>: 2 column boxed list on mobile, inline-list with pipes on desktop</h3>

      <div class="wrapperCTA">
          <ul class="CTAmenu" data-size-at-md="half">
              <li class="CTAlist" data-color="black" data-pipes-at-lg="true" data-style-at-md="list" data-style-at-lg="inline list"  data-border-at-lg="none">
                  <ul class="CTAdropdownList">
                    <li><a href="#link1">link1</a></li>
                    <li><a href="#link2">link2</a></li>
                    <li><a href="#link2">link3</a></li>
                    <li><a href="#link3">link4</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/a59b81c3c3f1bafda70e36ceca55a254.js"></script>


      <h3 id="examples"><u>example 2</u>: 2 column stylized list on mobile, dropdown on desktop</h3>

      <div class="wrapperCTA">
          <ul class="CTAmenu" data-size-at-md="half">
              <li class="CTAlist" data-color="black" data-style-at-md="list" data-border-at-md="dividers">
                <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                    <li><a href="#link1">link1</a></li>
                    <li><a href="#link2">link2</a></li>
                    <li><a href="#link2">link3</a></li>
                    <li><a href="#link3">link4</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/ef7ba0074b49a387d1f200346c37fd76.js"></script>

  </p>

  </div>


 <?php include '../footer.html';?>
  <script src="wcd-CTAdropdowns.js"></script>
</html>
<script>
// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>
