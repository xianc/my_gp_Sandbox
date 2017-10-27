<html>

  <head>
    <meta charset="UTF-8">
    <title>Xian's Sandbox - CSS Animation</title>
  </head>
  <?php include '../header.html';?>

  <style type="text/css">
    .carouselWrapper{
      position:relative;
      display: inline-block;
    }

    .carouselSlide {
      display: none;
      position:relative;
    }

    .active-slide{
      display: inline-block;
    }

    .navDots ul{
      display:inline-block;
      padding:0;
      z-index: 200;
    }

    .navDots ul li{
      display: inline-block;
      border-radius: 10px;
      width: 10px;
      height: 10px;
      border: 1px solid #000;
      background-color: #fff;
      cursor: pointer;
      margin: 0px 4px;
      margin:0px 5px;
    }

    .active-slide{
      display:block;
    }

    .active-dot{
      border: 1px solid #000 !important;
      background-color: #000 !important;
    }

    .navDots{
      position: absolute;
      top: 0;
      right: 1%;
      z-index: 200;
    }
/*    .leftArrow{
      position:absolute;
      font-weight: bold;
      left:-3%;
      top:48%;
    }
    .rightArrow{
      position:absolute;
      font-weight: bold;
      right:-3%;
      top:48%;
    }*/
  </style>






  <div class="wrapper">
    <div class="carouselWrapper">
      <a class="carouselSlide active-slide" href="/browse/category.do?cid=8792" onclick="return wcdLib.contentItemLinkWithFacet(this,'','HP_Main_All_W');">
        <img src="assets/PopFrame_Margaret1.jpg" alt="P.A.C.E">
      </a>

      <a class="carouselSlide" href="/browse/category.do?cid=63896" onclick="return wcdLib.contentItemLinkWithFacet(this,'','HP_Main_All_B');">
        <img src="assets/PopFrame_Margaret2.jpg" alt="P.A.C.E">
      </a>

      <a class="carouselSlide" href="/browse/category.do?cid=63895" onclick="return wcdLib.contentItemLinkWithFacet(this,'','HP_Main_All_G');">
        <img src="assets/PopFrame_Margaret3.jpg" alt="P.A.C.E">
      </a>

      <div class="navDots"> <!--start nav dots-->
        <ul>
        <li class="carouselDot active-dot"></li>
        <li class="carouselDot"></li>
        <li class="carouselDot"></li>
        </ul>
      </div>
    </div>

        <p>
          The CSS:
          <script src="https://gist.github.com/xianc/2dc60c55910cd8c4979c887ac6d03651.js"></script>
        </p>
        <p>
          The HTML
          <script src="https://gist.github.com/xianc/c8b9918f89d562de41e6bc684b48bce6.js"></script>
        </p>

  </div>




  <?php include '../footer.html';?>
  <script>

      var carouselId='.carouselSlide';
      var dotID='.carouselDot';

      function next() {
        var currentSlide=$(carouselId+'.active-slide');
        var currentDot=$(dotID+'.active-dot');
        var nextSlide=currentSlide.next();
        var nextDot=currentDot.next();

        if(nextDot.length === 0){
          nextSlide=$(carouselId).first();
          nextDot=$(dotID).first();
        }

        currentSlide.removeClass('active-slide');
        nextSlide.addClass('active-slide');
        currentDot.removeClass('active-dot');
        nextDot.addClass('active-dot');
      }

      $('.navDots ul li').click(function(){
        clearInterval(carouselInterval);
        var index=$(this).index();
        $(dotID+'.active-dot').removeClass('active-dot');
        $(carouselId+'.active-slide').removeClass('active-slide');
        $(this).addClass('active-dot');
        $(carouselId+':eq('+index+')').addClass('active-slide');
      })


      carouselInterval = setInterval(function(){
         next();
       },3500);
    

  </script>
</html>
