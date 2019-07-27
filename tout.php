
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Gallery | Diretorate of Physical Edu and Sports</title>
  <?php include('include/link.html');?>
  <style>
    body {
      /* font-family: Verdana, sans-serif; */
      margin: 0;
    }

    * {
      box-sizing: border-box;
    }

    .row > .column {
      padding: 0 8px;
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .column {
      float: left;
      width: 25%;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      padding-top: 10px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: #000000e6;
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      width: 55%;
      max-width: 1200px;
    }

    /* The Close Button */
    .close {
      color: white;
      position: absolute;
      top: 10px;
      right: 25px;
      font-size: 35px;
      font-weight: bold;
      transition: 0.5s;
      opacity: 1;
    }

    .close:hover,
    .close:focus {
      color: white;
      opacity: 1;
      background-color:black;
      text-decoration: none;
      cursor: pointer;
    }

    .mySlides {
      display: none;
    }

    .cursor {
      cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(70, 68, 68, 0.8);
    }
    .prev:hover, .next:hover{
      background-color: black;
    }
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    .close:not(:disabled):not(.disabled):focus, .close:not(:disabled):not(.disabled):hover{
      color:white;
      font-size: 45px;
    }
    a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover{
      font-size:30px;
    }

    img {
      margin-bottom: 0px;

    }

    .caption-container {
      text-align: center;
      background-color: black;
      padding: 2px 16px;
      color: white;
    }

    .demo {
      opacity: 0.6;
    }

    .active,
    .demo:hover {
      opacity: 1;
    }

    img.hover-shadow {
      transition: 0.3s;
    }

    .hover-shadow:hover {
      box-shadow: 0 4px 8px 0 gba(70, 68, 68, 0.8), 0 6px 20px 0 gba(70, 68, 68, 0.8);
    }
    a:not([href]):not([tabindex]) {
      color: white;
    }
    a:not([href]):not([tabindex]):hover{
      color: white
    }
    body{
      background-color:white;
    }
    .gallery-grid{
      padding-left: 0px;
      padding-right: 0px;
      border: 3px solid white;
      filter: brightness(100%); 
      transition: 0.4s ease-in-out;
    }
    .gallery-grid img{
      position: relative;
    }
    .gallery-grid:hover img{
      filter: brightness(50%);


    }
    .gallery-grid p{
      display: none;
      position: absolute;
      top:40%;
      left: 40%;
      color:whitesmoke;
    }
    .gallery-grid:hover p{
      display: block;
      filter: brightness(100%);
    }
    .modal-grid{
      padding-left: 0px;
      padding-right: 0px;
    }
    .fa-play{
      font-size: 30px;
    }
    body{
      font-family: 'Times New Roman', Times, serif;
    }
    hr{
      box-shadow: 0px 10px 20px grey;
    }
    
    
    
    
    

    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      display: flex;
      background: url(images/loader.gif) center no-repeat #fff;
    </style>
  </head>
  <body>


    <?php include 'include/nav.html';?>
    <?php include 'include/header.html';?>
    
    <!-- ***************************OUTLOOK OF ALBUM START*************** -->
    <h2 style="text-align:center ; font-family: 'Times New Roman', Times, serif; padding: 2%;">GALLERY</h2>
    <hr>
    <br>
    <!-- <div class="row"> -->
      <div class="container">
        <div class="row">
        <?php
        include('galleryy.php');
         ?>
           
        </div>
      </div>
      <br>
      <hr>
      <br>
      <!-- ***************************OUTLOOK OF ALBUM END*************** -->

      <!-- *************************MODALLLLL************************* -->
      
      <div id="myModal" class="modal" style="padding-top: 80px;">
        
        <span class="close cursor" style="z-index:6;     position: relative;
        top: -29px;" onclick="closeModal()">&times;</span>
        
        
        <div class="modal-content" style="" >
          <?php
          include('galleryyy.php');
          ?>
          
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
  <div class="caption-container">
    <p id="caption"></p>
  </div>
  
  
  <script>
    function openModal() {
      document.getElementById('myModal').style.display = "block";
    }
    
    function closeModal() {
      document.getElementById('myModal').style.display = "none";
    }
    
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
      </script>
    </div>
    
    <!-- *****************writing work start**************** -->

    <!-- *****************writing work end**************** -->

  </div>

  <!-- *************************MODALLLLL************************* -->   
  
  <!-- *****************ONE FULL ALBUM  End*************** -->
  
  
  <?php include 'include/footer.html';?>
</body>
</html>