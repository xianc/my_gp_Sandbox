<?php $pageTitle = "Basic Behaviors"; ?>
<style type="text/css">
  .wrapper{
    width:100%;
  }
  .padding20{
    padding:20px;
  }
  .pink{
    background: pink;
  }
  .grey{
    background: grey;
  }
  .green{
    background: green;
  }

  .msg1{
    height:500px;
    float:left;
  }
  .msg2, .msg3{
    height:250px;
    float:right;
  }
  .wrapperClass::after{
    content: '';
    display: block;
    clear: both;
  }
</style>

<div class="wrapper">
    <p>
      Stack:<br>
      <div class="grid-root">
        <div class="g-1-1 g-lg-1-2 pink">
          <p class="padding20">CONTENT 1</p>
        </div>
        <div class="g-1-1 g-lg-1-2 grey">
          <p class="padding20">CONTENT 2</p>
        </div>
      </div>
      <!-- code -->
      <pre class="brush: js;">
        <div class="grid-root">
          <div class="g-1-1 g-lg-1-2">
            ...
          </div>
          <div class="g-1-1 g-lg-1-2">
            ...
          </div>
        </div>
      </pre>
    </p>
    <p>
      Reverse Stack:<br>
      <div class="grid-root">
        <div class="g-1-1 g-lg-1-2 pink flexOrder2">
          <p class="padding20">CONTENT 1</p>
        </div>
        <div class="g-1-1 g-lg-1-2 grey flexOrder1">
          <p class="padding20">CONTENT 2</p>
        </div>
      </div>
      <!-- code -->
      <pre class="brush: js;">
        <div class="grid-root">
          <div class="g-1-1 g-lg-1-2 flexOrder2">
            ...
          </div>
          <div class="g-1-1 g-lg-1-2 flexOrder1">
            ...
          </div>
        </div>
      </pre>
    </p>

    <p>
      Sandwich:<br>
      <div class="wrapperClass">
        <div class="g-1-1 g-lg-1-2 msg2 pink">
          <p class="padding20">CONTENT 1</p>
        </div>
        <div class="g-1-1 g-lg-1-2 msg1 green">
          <p class="padding20">CONTENT 2</p>
        </div>
        <div class="g-1-1 g-lg-1-2 msg3 grey">
          <p class="padding20">CONTENT 3</p>
        </div>
      </div>
      <!-- code -->
      <pre class="brush: js;">
        <style>
          @media (min-width: 768px) {
            .msg1{
              float:left;
            }
            .msg2, .msg3{
              float:right;
            }
            .wrapperClass::after{
              content: '';
              display: block;
              clear: both;
            }
          }
        </style>
        <div class="wrapperClass">
          <div class="g-1-1 g-lg-1-2 msg2">
            ...
          </div>
          <div class="g-1-1 g-lg-1-2 msg1">
            ...
          </div>
          <div class="g-1-1 g-lg-1-2 msg3">
            ...
          </div>
        </div>
      </pre>

    </p>
</div>
