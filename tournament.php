
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Gallery | Diretorate of Physical Edu and Sports</title>
  <?php include('include/link.html');?>
  <style>
    body {
      font-family: Verdana, sans-serif;
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
      width: 90%;
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
          <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(1)">
            <img src="images/gallery/1.jpg" style="width: 100%; "  class="hover-shadow cursor">
            <p style="font-family:Arial, Helvetica, sans-serif; font-weight: 500; " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(2)">
            <img src="images/gallery/2.jpg" style="width:100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
            <img src="images/gallery/3.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
            <img src="images/gallery/4.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
            <img src="images/gallery/5.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
            <img src="images/gallery/6.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>  
        </div>
        <div class="row">
          <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(7)">
            <img src="images/gallery/7.jpg" style="width: 100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(8)">
            <img src="images/gallery/8.jpg" style="width:100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
            <img src="images/gallery/9.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
            <img src="images/gallery/10.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
            <img src="images/gallery/11.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
            <img src="images/gallery/12.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>  
        </div>

        <div class="row">
          <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(13)">
            <img src="images/gallery/13.jpg" style="width: 100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(14)">
            <img src="images/gallery/14.jpg" style="width:100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
            <img src="images/gallery/15.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
            <img src="images/gallery/16.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
            <img src="images/gallery/17.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
            <img src="images/gallery/18.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>  
        </div>


        <div class="row">
          <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(19)">
            <img src="images/gallery/19.jpg" style="width: 100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(20)">
            <img src="images/gallery/20.jpg" style="width:100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
            <img src="images/gallery/21.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
            <img src="images/gallery/22.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(23)" class="hover-shadow cursor">
            <img src="images/gallery/23.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
            <img src="images/gallery/24.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>  
        </div>

        <div class="row">
          <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(25)">
            <img src="images/gallery/25.jpg" style="width: 100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(26)">
            <img src="images/gallery/27.jpg" style="width:100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(27)" class="hover-shadow cursor">
            <img src="images/gallery/27.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(28)" class="hover-shadow cursor">
            <img src="images/gallery/28.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(29)" class="hover-shadow cursor">
            <img src="images/gallery/29.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(30)" class="hover-shadow cursor">
            <img src="images/gallery/30.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>  
        </div>


        <div class="row">
          <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(31)">
            <img src="images/gallery/31.jpg" style="width: 100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(32)">
            <img src="images/gallery/32.jpg" style="width:100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(33)" class="hover-shadow cursor">
            <img src="images/gallery/33.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(34)" class="hover-shadow cursor">
            <img src="images/gallery/34.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(35)" class="hover-shadow cursor">
            <img src="images/gallery/35.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(36)" class="hover-shadow cursor">
            <img src="images/gallery/36.jpg" style="width:100%" >
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>  
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
          
          <div class="mySlides">
            <div class="numbertext" >1/ 36</div>
            <div class="row">
              <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                <h1 style="color:whitesmoke">
                  DAVV 2013
                </h1>
                <br>
                <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                <br><br>
                <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
              </div>
              <div class="col-md-8 modal-grid"> <img src="images/gallery/1.jpg" style="width:100%"></div> 
            </div>
          </div>
          
          <div class="mySlides">
            <div class="numbertext" >2/ 36</div>
            <div class="row">
              <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                <h1 style="color:whitesmoke">
                  Honourable chief guest
                </h1>
                <br>
                <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                <br><br>
                <h2 style="color:whitesmoke; opacity: 0.4;">volley ball </h2>
                <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Mr Shri Rama</i></h6>
              </div>
              <div class="col-md-8 modal-grid"> <img src="images/gallery/2.jpg" style="width:100%"></div> 
            </div>
          </div>

          <div class="mySlides">
            <div class="numbertext" >3/ 36</div>
            <div class="row">
              <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                <h1 style="color:whitesmoke">
                  DAVV 2013
                </h1>
                <br>
                <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                <br><br>
                <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
              </div>
              <div class="col-md-8 modal-grid"> <img src="images/gallery/3.jpg" style="width:100%"></div> 
            </div>
          </div>


          <div class="mySlides">
            <div class="numbertext" >4/ 36</div>
            <div class="row">
              <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                <h1 style="color:whitesmoke">
                  Chief Guest
                </h1>
                <br>
                <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                <br><br>
                <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball </h2>
                <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
              </div>
              <div class="col-md-8 modal-grid"> <img src="images/gallery/4.jpg" style="width:100%"></div> 
            </div>
          </div>


          <div class="mySlides">
            <div class="numbertext" >5/ 36</div>
            <div class="row">
              <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                <h1 style="color:whitesmoke">
                  Smashed
                </h1>
                <br>
                <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                <br><br>
                <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball Player </h2>
                <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Kishan Mishera</i></h6>
              </div>
              <div class="col-md-8 modal-grid"> <img src="images/gallery/5.jpg" style="width:100%"></div> 
            </div>
          </div>


          <div class="mySlides">
            <div class="numbertext" >6/ 36</div>
            <div class="row">
              <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                <h1 style="color:whitesmoke">
                  Court
                </h1>
                <br>
                <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                <br><br>
                <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball </h2>
                <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Players</i></h6>
              </div>
              <div class="col-md-8 modal-grid"> <img src="images/gallery/6.jpg" style="width:100%"></div> 
            </div>
          </div>
          

          <div class="mySlides">
            <div class="numbertext" >7/ 36</div>
            <div class="row">
              <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                <h1 style="color:whitesmoke">
                  Ground
                </h1>
                <br>
                <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                <br><br>
                <h2 style="color:whitesmoke; opacity: 0.4;"> Players </h2>
                <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Davv</i></h6>
              </div>
              <div class="col-md-8 modal-grid"> <img src="images/gallery/7.jpg" style="width:100%"></div> 
            </div>
          </div>
          

          <div class="mySlides">
            <div class="numbertext" >8/ 36</div>
            <div class="row">
              <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                <h1 style="color:whitesmoke">
                  Court
                </h1>
                <br>
                <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                <br><br>
                <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball</h2>
                <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Players</i></h6>
              </div>
              <div class="col-md-8 modal-grid"> <img src="images/gallery/8.jpg" style="width:100%"></div> 
            </div>
          </div>


          <div class="mySlides">
            <div class="numbertext" >9/ 36</div>
            <div class="row">
              <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                <h1 style="color:whitesmoke">
                  Good Shot
                </h1>
                <br>
                <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                <br><br>
                <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball Player </h2>
                <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Samyak Jain</i></h6>
              </div>
              <div class="col-md-8 modal-grid"> <img src="images/gallery/9.jpg" style="width:100%"></div> 
            </div>
          </div>



          <div class="mySlides">
            <div class="numbertext" >10/ 36</div>
            <div class="row">
              <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                <h1 style="color:whitesmoke">
                 Guest
               </h1>
               <br>
               <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
               <br><br>
               <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball Player </h2>
               <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Players</i></h6>
             </div>
             <div class="col-md-8 modal-grid"> <img src="images/gallery/10.jpg" style="width:100%"></div> 
           </div>
         </div>



         <div class="mySlides">
          <div class="numbertext" >11/ 36</div>
          <div class="row">
            <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
              <h1 style="color:whitesmoke">
               Sports Commitie
             </h1>
             <br>
             <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
             <br><br>
             <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball Player </h2>
             <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Players</i></h6>
           </div>
           <div class="col-md-8 modal-grid"> <img src="images/gallery/11.jpg" style="width:100%"></div> 
         </div>
       </div>



       <div class="mySlides">
        <div class="numbertext" >12/ 36</div>
        <div class="row">
          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
            <h1 style="color:whitesmoke">
              Indian Army
            </h1>
            <br>
            <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
            <br><br>
            <h2 style="color:whitesmoke; opacity: 0.4;">Salute Sir </h2>
            <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Mr Anand Singh</i></h6>
          </div>
          <div class="col-md-8 modal-grid"> <img src="images/gallery/12.jpg" style="width:100%"></div> 
        </div>
      </div>




      <div class="mySlides">
        <div class="numbertext" >13/ 36</div>
        <div class="row">
          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
            <h1 style="color:whitesmoke">
              Felicitation
            </h1>
            <br>
            <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
            <br><br>
            <h2 style="color:whitesmoke; opacity: 0.4;">Warm Welcome </h2>
            <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Mr Anand Singh</i></h6>
          </div>
          <div class="col-md-8 modal-grid"> <img src="images/gallery/13.jpg" style="width:100%"></div> 
        </div>
      </div>




      <div class="mySlides">
        <div class="numbertext" >14/ 36</div>
        <div class="row">
          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
            <h1 style="color:whitesmoke">
              live FIRE~~
            </h1>
            <br>
            <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
            <br><br>
            <h2 style="color:whitesmoke; opacity: 0.4;"> Player </h2>
            <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Spirit</i></h6>
          </div>
          <div class="col-md-8 modal-grid"> <img src="images/gallery/14.jpg" style="width:100%"></div> 
        </div>
      </div>



      <div class="mySlides">
        <div class="numbertext" >15/ 36</div>
        <div class="row">
          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
            <h1 style="color:whitesmoke">
             Softball
           </h1>
           <br>
           <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
           <br><br>
           <h2 style="color:whitesmoke; opacity: 0.4;">Championship </h2>
           <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Warm Welcome</i></h6>
         </div>
         <div class="col-md-8 modal-grid"> <img src="images/gallery/15.jpg" style="width:100%"></div> 
       </div>
     </div>




     <div class="mySlides">
      <div class="numbertext" >16/ 36</div>
      <div class="row">
        <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
          <h1 style="color:whitesmoke">
           Honourable Sir
         </h1>
         <br>
         <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
         <br><br>
         <h2 style="color:whitesmoke; opacity: 0.4;">Speech </h2>
         <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Mr Anand Singh</i></h6>
       </div>
       <div class="col-md-8 modal-grid"> <img src="images/gallery/16.jpg" style="width:100%"></div> 
     </div>
   </div>
   
   
   <div class="mySlides">
    <div class="numbertext" >17/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          Softball
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Championship  </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/17.jpg" style="width:100%"></div> 
    </div>
  </div>


  <div class="mySlides">
    <div class="numbertext" >18/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Speech </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Mr Param Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/18.jpg" style="width:100%"></div> 
    </div>
  </div>


  <div class="mySlides">
    <div class="numbertext" >19/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/19.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >20/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/20.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >21/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/21.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >22/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/22.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >23/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/23.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >24/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/24.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >25/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/25.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >26/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/26.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >27/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/27.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >28/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/28.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >29/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/29.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >30/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/30.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >31/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/31.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >32/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/32.jpg" style="width:100%"></div> 
    </div>
  </div>




  <div class="mySlides">
    <div class="numbertext" >33/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/33.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >34/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/34.jpg" style="width:100%"></div> 
    </div>
  </div>




  <div class="mySlides">
    <div class="numbertext" >35/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/35.jpg" style="width:100%"></div> 
    </div>
  </div>



  <div class="mySlides">
    <div class="numbertext" >36/ 36</div>
    <div class="row">
      <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
        <h1 style="color:whitesmoke">
          DAVV 2013
        </h1>
        <br>
        <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
        <br><br>
        <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
        <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
      </div>
      <div class="col-md-8 modal-grid"> <img src="images/gallery/36.jpg" style="width:100%"></div> 
    </div>
  </div>
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