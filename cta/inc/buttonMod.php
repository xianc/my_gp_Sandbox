
  <section class="sub buttonModifyers">

    <h1>4a. Button Modifyers</h1>

    <!--- 1a.i.  half Buttons -->
    <div class="innerSub halfButtons" id="halfButtons">
      <h3 id="halfButtons">4a.i. Half Buttons</h3>
      Half buttons are often times used on mobile, though it can be used on desktop as well. Half buttons have a width of 50%.<br><br>

      Use: <b>"data-size="half"</b> to create half buttons. <br>
      Also available: <b>data-size-at-lg="half"</b> and <b>data-size-at-md="half"</b><br>
      Append the <i>data-</i> modifyers to <i>class="CTAlist"</i><br>

    
      <!-- dropdown list half buttons -->
      <p>
        <div class="CTAwrapper">
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
      </p>

      <!-- <br><br><br> OR <br><br><br>


      button
      <p>
        <div class="CTAwrapper">
          <ul class="CTAmenu" data-size="half">
              <li class="CTAlist">
                  <a class="CTAbutton" href="linkhere">half item 1</a>
              </li>
              <li class="CTAlist">
                  <a class="CTAbutton" href="linkhere">half item 2</a>
              </li>
          </ul>
        </div>

        <script src="https://gist.github.com/anonymous/10a1c091d2cd72ca5ada608a51eaf3dd.js"></script>
      </p> -->
    </div>



    <!--- 1a.i.  inline block -->
    <div class="innerSub inlineBlockButtons">
      <h4 id="inlineBlockButtons">4a.ii. Mobile Inline Block Buttons</h4>
      Buttons are by default, full width on mobile. If you wish for the button to display only as wide as the copy it contains, then use the data attribute: <b>"data-style="inline-block"</b>
      <br><br>
      Use: <b>data-size="inline-block"</b> <br>
      Also available: <b>data-list-style-at-md="inline-block"</b>, <b>data-list-style-at-lg="inline-block"</b><br>
      Append the <i>data-</i> modifyers to <i>class="CTAlist"</i><br>


      <p><i>view on mobile:</i>
        <div class="CTAwrapper">
          <ul class="CTAmenu">
              <li class="CTAlist" data-list-style="inline-block">
                  <a class="CTAbutton" href="linkhere">button</a>
              </li>
          </ul>
        </div>

        <script src="https://gist.github.com/anonymous/0ecc8a9f5ed908541e30cb4e3b1d4b50.js"></script>
      </p>


    </div>




  </section>