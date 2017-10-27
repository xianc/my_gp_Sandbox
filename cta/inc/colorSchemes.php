<section class="sub colorSchemes">
    <h1 id="colorSchemes">3. Color Schemes</h1>
    For flexibility, we have separate data varialbles for font&border color, background color, border style, and hover effects.
    <br><br>
    To customize a CTA, pick one attribute from each category. <br>
    If you leave a category blank, the default styling (marked as <i><strong>default</strong></i>) will be used. <br>

    <br><br>

    <section class="innerSub fontBorder" id="fontBorder">
        <h3>3a. Font & Border Color:</h3>
        <ul>
          <li>data-color="gap blue"</li>
          <li>data-color="black" <i><strong>default</strong></i>
            <ul>
              <li>data-color-at-lg="black"*</li>
              <li>data-color-at-md="black"*</li>
            </ul></li>
          <li>data-color="white"
            <ul>
              <li>data-color-at-lg="white"*</li>
              <li>data-color-at-md="white"*</li>
            </ul>
          </li>
          <li>data-color="gfol blue" (#a6bccf)</li>
          <li>Seasonal: data-color="spring blue" (#0d4ca7)</li>
        </ul>



          <div class="CTAwrapper">
            <ul class="CTAmenu">
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
                <li class="CTAlist" data-color="white">
                    <a class="CTAbutton" href="javascript:void(0)">white <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">here is link 2</a></li>
                        <li><a href="#link3">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="spring blue">
                    <a class="CTAbutton" href="javascript:void(0)">spring blue <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">here is link 2</a></li>
                        <li><a href="#link3">and link 3</a></li>
                    </ul>
                </li>
            </ul>
          </div>

          Append the <i>data-</i> modifyers to <i>class="CTAlist"</i>.
          <pre class="brush: js;">
            class="CTAlist" data-color="gap blue"
          </pre>

          * The black and white font/border color have their own mobile and desktop data attributes that can be used together like:
        <pre class="brush: js;">
          class="CTAlist" data-color-at-lg="black" data-color-at-md="white" data-background="translucent black"
        </pre>
    </section>


        <br><br>

    <section class="innerSub backgroundColor" id="backgroundColor">
        <h3>3b. Background color: </h3>
        <ul>
          <li>data-background="gap blue"</li>
          <li>data-background="black"</li>
          <li>data-background="white"</li>
          <li>data-background="translucent black" (40% opacity)</li>
          <li>data-background="translucent white" (50% opacity)</li>
          <li>(transparent) <i><strong>default</strong></i></li>
          <li>data-background="gfol blue" (#a6bccf)</li>
          <li>Seasonal: data-background="spring blue" (#0d4ca7)</li>
        </ul>

        <div class="CTAwrapper">
            <ul class="CTAmenu">
              <li class="CTAlist" data-color="white" data-background="gap blue">
                  <a class="CTAbutton" href="javascript:void(0)">white/gap blue bg <span class="plusMinus"></span></a>
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
              <li class="CTAlist" data-color="gap blue" data-background="white">
                  <a class="CTAbutton" href="javascript:void(0)">gap blue/white bg <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
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
              </li><br>
              <li class="CTAlist">
                  <a class="CTAbutton" href="javascript:void(0)">transparent <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="spring blue">
                  <a class="CTAbutton" href="javascript:void(0)">spring blue <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
            </ul>
          </div>

          Append the <i>data-</i> modifyers to <i>class="CTAlist"</i>.
          <pre class="brush: js;">
            class="CTAlist" data-color="white" data-background="gap blue"
          </pre>
      </section>



        <br><br>


      <section class="innerSub borderStyle" id="borderStyle">
        <h3>3c. Border Style: </h3>
        <ul>
          <li>(with border) <i><strong>default</strong></i></li>
          <li>data-border="none" (no border) </li>
        </ul>

        <div class="CTAwrapper">
            <ul class="CTAmenu">
              <li class="CTAlist">
                  <a class="CTAbutton" href="javascript:void(0)">with border <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-border="none">
                  <a class="CTAbutton" href="javascript:void(0)">without border <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
              </li>
            </ul>
        </div>

        Append the <i>data-</i> modifyers to <i>class="CTAlist"</i>.
        <pre class="brush: js;">
            class="CTAlist" data-border="none"
          </pre>
      </section>

        <br><br>

      <section class="innerSub hoverEffects" id="hoverEffects">
        <h3>3d. Hover Effects: </h3>
        <ul>
          <li>(none) <i><strong>default</strong></i></li>
          <li>data-hover="gap blue inverse" (gap blue text, white background & border)</li>
          <li>data-hover="black inverse" (black text, white background & border)</li>
          <li>data-hover="white inverse" (white text, black background & border)</li>
          <li>data-hover="translucent black" (40% opacity)</li>
          <li>data-hover="translucent white" (50% opacity)</li>
          <li>data-hover="gfol blue" (gfol blue #a6bccf text, white background)</li>
          <li>data-hover="gfol blue inverse" (white text, gfol blue #a6bccf background)</li>
          <li>Seasonal: data-hover="spring blue"</li>
        </ul>


         <div class="CTAwrapper">
              <ul class="CTAmenu">
                <li class="CTAlist">
                    <a class="CTAbutton" href="javascript:void(0)">none <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">here is link 2</a></li>
                        <li><a href="#link3">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="white" data-background="gap blue" data-hover="gap blue inverse">
                    <a class="CTAbutton" href="javascript:void(0)">gap blue inverse<span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">here is link 2</a></li>
                        <li><a href="#link3">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="white" data-background="black" data-hover="black inverse">
                    <a class="CTAbutton" href="javascript:void(0)">black inverse <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">here is link 2</a></li>
                        <li><a href="#link3">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="gap blue" data-background="white" data-hover="white inverse">
                    <a class="CTAbutton" href="javascript:void(0)">white inverse <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">here is link 2</a></li>
                        <li><a href="#link3">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="white" data-hover="translucent black">
                  <a class="CTAbutton" href="javascript:void(0)">translucent black <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">here is link 2</a></li>
                      <li><a href="#link3">and link 3</a></li>
                  </ul>
                </li>
                <li class="CTAlist" data-color="black" data-hover="translucent white">
                    <a class="CTAbutton" href="javascript:void(0)">translucent white <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">here is link 2</a></li>
                        <li><a href="#link3">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="white" data-hover="spring blue inverse">
                    <a class="CTAbutton" href="javascript:void(0)">spring blue inverse <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">here is link 2</a></li>
                        <li><a href="#link3">and link 3</a></li>
                    </ul>
                </li>
              </ul>
            </div>

            Append the <i>data-</i> modifyers to <i>class="CTAlist"</i>.
            <pre class="brush: js;">
            class="CTAlist" data-color="white" data-background="gap blue" data-hover="gap blue inverse"
           </pre>

        </section>



        <br><br>

       <section class="innerSub fontSizes">
        <h3>3e. Font Sizes: </h3>
        <ul>
          <li>data-font="80" (roughly 11.2px)</li>
          <li>data-font="90" (roughly 12.5px)</li>
          <li>data-font="100" (roughly 14px) <i><strong>default</strong></i></li>
          <li>data-font="110" (roughly 16px)</li>
          <li>data-font="120" (roughly 18px)</li>
        </ul>

             <!--buttons-->
            <div class="CTAwrapper" data-font="80">
                <ul class="CTAmenu">
                    <li class="CTAlist" data-color="black">
                        <a class="CTAbutton" href="javascript:void(0)">80%</a>
                    </li>
                </ul>
            </div>

            <div class="CTAwrapper" data-font="90">
                <ul class="CTAmenu">
                    <li class="CTAlist" data-color="black" >
                        <a class="CTAbutton" href="javascript:void(0)">90%</a>
                    </li>
                </ul>
            </div>

            <div class="CTAwrapper" data-font="100">
                <ul class="CTAmenu">
                    <li class="CTAlist" data-color="black">
                        <a class="CTAbutton" href="javascript:void(0)">100%</a>
                    </li>
                </ul>
            </div>

            <div class="CTAwrapper" data-font="110">
                <ul class="CTAmenu">
                    <li class="CTAlist" data-color="black">
                        <a class="CTAbutton" href="javascript:void(0)">110%</a>
                    </li>
                </ul>
            </div>

            <div class="CTAwrapper" data-font="120">
                <ul class="CTAmenu">
                    <li class="CTAlist" data-color="black">
                        <a class="CTAbutton" href="javascript:void(0)">120%</a>
                    </li>
                </ul>
            </div>

            Append the <i>data-</i> modifyers to <i>class="CTAwrapper"</i>.
            <pre class="brush: js;">
            class="CTAwrapper" data-font="120"
           </pre>

    </section>

</section>
