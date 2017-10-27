<p>
    <h2 id="symbols">5. Symbols</h2>
    Caret: <span class="caret"></span><br>
    <pre class="brush: js;">
      <span class="caret"></span>
    </pre>
    Plus Minus: <a><span class="plusMinus"></span></a><br>
    <pre class="brush: js;">
      <span class="plusMinus"></span>
    </pre>
    Pipe: <span class="pipe"></span><br>
    <pre class="brush: js;">
      <span class="pipe"></span>
    </pre>
</p>


<section class="sub pipes">
    <br><br>
    <!--ii. Horitzontal Text with Pipe Separators-->
    <p>
      <h3 id="inlinePipeList">Pipe Separators</h3>
       Add <b>data-pipes="true"</b><br>
      Also available: <b>data-pipes-at-lg="true"</b>, <b>data-pipes-at-md="true"</b><br><br>


      <!--dropdown-->
      <div class="CTAwrapper">
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
      <h3>Manually added pipe separators</h3>
      <xmp><span class="pipe"></span></xmp>
      Also avaialble: <b>class="pipe-at-md"</b> and <b>class="pipe-at-lg"</b>

      <br><br>
      <!--dropdown-->
      <div class="CTAwrapper">
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
</section>