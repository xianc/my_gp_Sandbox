<?php $pageTitle = "Pause Play"; ?>
<style>
.mkt_play {
  display: inline-block;
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 11px solid rgba(0, 0, 0, 0.5);
  margin: 20px;
  position: relative;
  z-index: 1;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  font-size:0;
  cursor:pointer;
}
.mkt_play:before {
  content: '';
  position: absolute;
  top: -20px;
  left: -28px;
  bottom: -20px;
  right: -13px;
  border-radius: 50%;
  border: 3px solid rgba(0, 0, 0, 0.5);
  z-index: 2;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
}
.mkt_play:after {
  content: '';
  opacity: 0;
  transition: opacity 0.6s;
  -webkit-transition: opacity 0.6s;
  -moz-transition: opacity 0.6s;
}
.mkt_play.active {
  border-color: transparent;
}
.mkt_play.active:after {
  content: '';
  opacity: 1;
  width: 5px;
  height: 16px;
  position: absolute;
  right: 0px;
  top: -8px;
  border-left: 5px solid rgba(0, 0, 0, .5);
  border-right: 5px solid rgba(0, 0, 0, .5);
}
</style>


<div class="wrapper">
  Click me!<br>
  <a class="mkt_play" title="Play video">pause play</a>

  <P>
    The HTML:<br>
    <i>If you want to start with play: </i>
    <pre class="brush: js;">
      <a class="mkt_play" title="Play video">pause play</a>
    </pre>
    <i>If you want to start with pause: </i>
    <pre class="brush: js;">
      <a  class="mkt_play active" title="Play video">pause play</a>
    </pre>
  </P>
  <p>
    The CSS:<br>
    <script src="https://gist.github.com/xianc/65e000ebe79553464ad9159d00eea842.js"></script>
  </p>

  <p>
    The JS:<br>
    <script src="https://gist.github.com/xianc/4163190f6e5fa9a9ae19d69edf663138.js"></script>
  </p>
</div><!-- end content div -->

<script>
  $(document).ready(function() {
    var icon = $('.play');
    icon.click(function() {
      console.log('toggle');
       icon.toggleClass('active');
       return false;
    });
  });
</script>
