<!DOCTYPE html>
<!-- 
  Van Gogh Camera HTML
  @author Teki Chan
  @since  13 May 2020
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/van_gogh_camera.css" rel="stylesheet">
  </head>
  
  <body>
    <div id='artpaintingContainer' style=" ">
      <canvas id='jeeFaceFilterCanvas' class='artPainting'></canvas>
    </div>
    <div id="buttonContainer" class="navbar">
      <a href="./" class="active"><img id="homeButtonImg" /><br/>Home</a>
      <a href="#change" id="changeButton"><img id="changeButtonImg" /><br/>Change</a>
      <a href="#camera" id="cameraButton"><img id="cameraButtonImg" /><br/>Camera</a>
    </div>   
  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="module" src="/assets/js/FaceChangeGame/van_gogh_camera.js"></script>
</html>
 
 