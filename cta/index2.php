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
        .tab{
          padding-left:20px;
        }
        .sub{
          padding-left:1%;
          /*border-left:2px solid #000;*/
        }
        .innerSub{
          padding-left:2%;
          border-left:2px solid #000; 
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
      }
      #return-to-top i {
          color: #000;
          margin: 0;
          position: relative;
          top: 13px;
          font-size: 19px;
          -webkit-transition: all 0.3s ease;
          -moz-transition: all 0.3s ease;
          -ms-transition: all 0.3s ease;
          -o-transition: all 0.3s ease;
          transition: all 0.3s ease;
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


  <a href="javascript:" id="return-to-top"><i class="icon-chevron-up">^ top</i></a>
  <div class="wrapper">

    <!-- intro -->
    <p>
      <h1>Gap's CTA/Dropdown System v3</h1>
      CHANGE LOG: <br>
      - Font size & spacing adjustments <br>
      - Added evergreen hover states <br>
      - Added GapFactory Styles
      <!-- <strong><a href="http://www.gol.wip.gidapps.com/preview/launch.do?date=06/02/2018&targetURL=http://www.gol.wip.gidapps.com/browse/info.do?cid=1055472" target="_blank">View on WIP</a></strong> -->

      <br><br>

      For live content: Link directly. Pls do not edit: 
      <pre class="brush: js;">
        <link rel="stylesheet" type="text/css" href="/Asset_Archive/GPWeb/content/0011/027/523/wcd-CTAdropdowns-v3.css">
        <script src="/Asset_Archive/GPWeb/content/0011/027/523/wcd-CTAdropdowns.js"></script>
      </pre>
    </p>

    <br><br>

      <!-- table of contents -->
      <?php include 'inc/tableOfContents.php';?>

      <hr>

      <!--- 1.  Buttons -->
      <?php include 'inc/button.php';?>


      <hr>
 

      <!--- 1.  dropdowns -->
      <?php include 'inc/dropdown.php';?>
      

      <hr>



      <!-- Colour Schemes -->
      <?php include 'inc/colorSchemes.php';?>
          
     
      <hr>


      <h1 id="modifyers">4. Modifyers</h1>
      <!-- 5a. list styles -->
      <?php include 'inc/buttonMod.php';?>

      <hr>


      <!-- 5a. list styles -->
      <?php include 'inc/dropdownMod.php';?>


      <!-- 5a. list styles -->
      <?php include 'inc/lists.php';?>

      <hr>

      <!--6. Symols -->
      <?php include 'inc/symbols.php';?>

      <hr>

      <?php include 'inc/gfol.php';?>
  

    <hr>

    <?php include 'inc/examples.php';?>

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
