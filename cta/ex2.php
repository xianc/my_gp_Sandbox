<html>

  <head>
    <meta charset="UTF-8">
    <title>Gap's CTA System</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="wcd-CTAdropdowns3.css">
    </head>


    <style>
      body{
        background-color: #ccc;
      }
      .ebbWrapper{
        width:100%;
        max-width: 1280px;
        margin:0 auto;
        text-align: center;
      }

      @media (min-width:768px){
        .ebbWrapper{
          border-bottom:2px solid #000;
        }
        .ebbWrapper  ul.CTAmenu{
          width: 100%;
          margin:0;
          background: #fff;
        }
        .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li{
          width:19%;
          margin:0;
        }
        .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li a{
          padding-bottom:5px; /* how much space you want between copy and bottom border when hovered*/
          margin: 0;
          border-bottom:2px solid transparent !important;
        }
        .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li a:hover{
          border-bottom:2px solid #000 !important;
        }
      }
      @media (max-width:767px){
         .ebbWrapper  ul.CTAmenu > li.CTAlist > ul.CTAdropdownList li:last-child{
            width:100%;
         }
      }
    </style>

<body>
  <div class="ebbWrapper">

    <div class="wrapperCTA">
        <ul class="CTAmenu" data-size-at-md="half">
            <li class="CTAlist" data-color="black" data-style="inline list" data-border-at-lg="none">
              <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                <ul class="CTAdropdownList">
                  <li><a href="#link1">link1</a></li>
                  <li><a href="#link2">link2</a></li>
                  <li><a href="#link2">link3</a></li>
                  <li><a href="#link3">link4</a></li>
                  <li><a href="#link3">link4</a></li>
                </ul>
            </li>
        </ul>
    </div>

  </div>
</body>


  <script src="wcd-CTAdropdowns.js"></script>
</html>