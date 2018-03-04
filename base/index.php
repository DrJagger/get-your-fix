 <?php
  include("header.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
   
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"></link>
   <!-- GOOGLE styling-->
    <style>
      .gsc-control-cse .gsc-table-result {
        font-family : inherit;
      }

      .gsc-control-cse .gsc-input-box {
        height : inherit;
      }

      input.gsc-input,
      .gsc-input-box,
      .gsc-input-box-hover,
      .gsc-input-box-focus,
      .gsc-search-button, input.gsc-search-button-v2 {
        box-sizing  : content-box;
        line-height : normal;
        margin-top  : 0px;
    </style>
    <!-- NAVBAR styling-->
    <style>
      .navbar
      {
        margin-bottom: 0;
      }
    </style>
    <!-- CAROUSEL styling-->
    <style>
      .carousel-inner >.item > img,
      .carousel-inner >.item > a > img
      {
        width: auto;
        height: 500px;
        margin: auto;
        padding: 0px;
      }
    </style>

    <!-- BACKGROUND styling-->
    <style>
      body
      {
        background-color: black;
        background: url(imgs/cloud-computing-2001090.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
    </style>
    <!--JUMBOTRON styling-->
    <style>
      .jumbotron
      {
        padding-top: 15px; 
        padding-bottom: 20px;
        background: rgba(0, 0, 0, .9);
      }

      #Intro {
        color: white;
        font-size: 3em;
      }

      #subIntro {
        color: white;
      }

    </style>
    
    <!-- INFO styling-->
    <style>
      .thumbnail > .img-responsive
      {

        height: 100%;
        width: 100%;
      }
      .thumbnail
      {
        background-color: #e6e6e6;
        border-color: #e6e6e6;
      }
      #services
      {
        margin-right: 90px;
        margin-left: 90px;
        background-color: #e6e6e6;
        background: rgba(0, 0, 0, .6);
      }
    </style>
   
   </head>

  <body>

    <!-- CAROUSEL  //////////////////////////////////////////////////////-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>          
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="imgs/imac.jpg" alt="cracked">
        </div>
        <div class="item">
          <img src="imgs/dell.jpg" alt="cracked">
       </div>
        <div class="item">
          <img src="imgs/apple3.jpg" alt="cracked">
        </div>
        <div class="item">
          <img src="imgs/macbook.jpg" alt="cracked">
        </div>
        <div class="item">
          <img src="imgs/ipad.jpg" alt="cracked">
        </div>
        <div class="item">
          <img src="imgs/iphone.jpg" alt="cracked">
       </div>
        <div class="item">
          <img src="imgs/surface.jpg" alt="cracked">
        </div>
        <div class="item">
          <img src="imgs/apple2.jpg" alt="cracked">
        </div>
      </div>
      <!-- Carousel Control -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="jumbotron">
      <h1 id="Intro" align="center">WELCOME</h1> 
      <h2 id="subIntro" align="center"><small>We offer detailed repairs for all your modern technology, specializing in phone and tablet repair.<small></h2>
    </div>
    
  <!--
      <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <div class="btn-group" role="group">
          <a class="btn btn-default btn-lg" href="#services">Services</a>
        </div>
        <div class="btn-group" role="group">
          <a class="btn btn-default btn-lg" href="#diagnostics">Diagnostics</a>
        </div>
        <div class="btn-group" role="group">
          <a class="btn btn-default btn-lg" href="#experience">Experience</a>
        </div>
      </div>
  -->
    <div class="contianer" id="services">
        <div class="row">
          <!-- iPHONE iPAD /////////////////////////////////////////////////-->
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <a href="iphone-ipad.php" class="thumbnail">
              <img class="img-responsive" src="imgs/iphone-ipad.jpg">
              <div class="caption">
                <h2 align="center">iPhones & iPads</h2>
              </div>
            </a>
          </div>
          <!-- ANDROID /////////////////////////////////////////////////-->
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <a href="#" class="thumbnail">
              <img class="img-responsive" src="imgs/android1.jpg">
              <div class="caption">
                <h2 align="center">Android Devices</h2>
                <p></p>
              </div>
            </a>
          </div>
          <!-- DIAGNOSTICS /////////////////////////////////////////////////-->
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <a href="#" class="thumbnail">
              <img class="img-responsive" src="imgs/diagnostics1.jpg">
              <div class="caption">
                <h2 align="center">Free Diagnostics</h2>
                <p></p>
              </div>
            </a>
          </div>
          <!-- APPLE COPMUTERS /////////////////////////////////////////////////-->
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <a href="#" class="thumbnail">
              <img class="img-responsive" src="imgs/apple-imac.jpg">
              <div class="caption">
                <h2 align="center">Apple Computers</h2>
                <p></p>
              </div>
            </a>
          </div>
          <!-- PERSONAL COMPUTERS PC //////////////////////////////////////////-->
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <a href="#" class="thumbnail">
              <img class="img-responsive" src="imgs/pc.jpg">
              <div class="caption">
                <h2 align="center">PC</h2>
                <p></p>
              </div>
            </a>
          </div>
          <!-- MISC /////////////////////////////////////////////////-->
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <a href="#" class="thumbnail">
              <img class="img-responsive" src="imgs/audio.jpg">
              <div class="caption">
                <h2 align="center">Miscellaneous</h2>
                <p></p>
              </div>
            </a>
          </div>
      </div>  
    </div>



<!--  google search    
    <script>
  (function() {
    var cx = '017743962481746708173:nw8olgnripy';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

<gcse:search></gcse:search>
-->
  </body>  
 <?php
  include("footer.php");
?>
</html>