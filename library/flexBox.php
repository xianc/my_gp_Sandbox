<html>

  <head>
    <meta charset="UTF-8">
    <title>Xian's Sandbox - CSS Animation</title>
  </head>


    
  <?php include '../header.html';?>


<style type="text/css">
.wrapper{
  width:95%;
}
.displayFlex{
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -moz-flex;
  display: -webkit-flex;
  display: flex;
}
.flexCenter{
  -webkit-align-items: center;
  align-items:center;
   -webkit-justify-content:center;
  justify-content: center;
}
.space-around{ -webkit-justify-content: space-around; justify-content: space-around; }
.space-between{ -webkit-justify-content: space-between; justify-content: space-between; }

/*.g-1-1{
  width:100%;
}*/
@media (min-width:768px){
  .flexOrder1{ -webkit-order: 1; order: 1; }
  .flexOrder2{ -webkit-order: 2; order: 2; }
  .flexOrder3{ -webkit-order: 3; order: 3; }
}

.example{
  display: block;
}
.example div{
  width:100%;
  min-height: 100px
}
.example1{
  width:400px;
  height:200px;
}
.red{
  background: red;
}
.grey{
  background:#ccc;
}
.green{
  background:green;
}
.pink{
  background: pink;
}
</style>



  <div class="wrapper">

    Horizontal and vertical center:<br>
    <div class="flexExample">
      <div class="example1 red displayFlex flexCenter">
        <div class="flexCenter">
          hello world
        </div>
      </div>
    </div>

    Using Flex Order:<br>
    <div class="flexExample">
      <div class="displayFlex">
        <div class="example grey flexOrder2">
          <div class="flexCenter">
            Mobile Order 1. Desktop Order 2. 
          </div>
        </div>
        <div class="example green displayFlex flexOrder3 ">
          <div class="flexCenter">
            Mobile Order 2. Desktop Order 3. 
          </div>
        </div>
        <div class="example pink displayFlex flexOrder1">
          <div class="flexCenter">
            Mobile order 3. Desktop order 1. 
          </div>
        </div>
      </div>
    </div><!-- end flex example -->



  </div>



  <?php include '../footer.html';?>

</html>
