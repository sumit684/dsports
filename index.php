
<!DOCTYPE html>
<html lang="en">
<head>

    <title>HOME | Diretorate of Physical Edu and Sports</title>
    <?php include('include/link.html');?>

    <style>

        .dd{
            background-image: url(images/blue.jpg);
            background-size: cover;

            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .news:hover{
            text-shadow: 3px 3px 20px #f4ebeb;
            transition: 2s;
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

        }


    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

    

</head>
<body>


    <?php include 'include/nav.html';?>
    <?php include 'include/header.html';?>
    
    <!-- **********************CARAUSEL STARTS**************************   -->


    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1.jpg" alt="image 1" >
            </div>
            <div class="carousel-item">
                <img src="images/2.jpg" alt="image 2" >
            </div>
            <div class="carousel-item">
                <img src="images/3.jpg" alt="image 3" >
            </div>
            <div class="carousel-item">
                <img src="images/4.jpg" alt="image 4" >
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    <!-- **********************CARAUSEL ENDS**************************   -->   


    <!--**************************************NEWS and Events START*******************************************-->
    <style>
        .dates{
            position: relative; 
            top: -24px; left: 18px;
            background-color: #2f2424;
            height: 50px; 
            width: 50px; 
            text-align: center;
            color: white;
            border-radius:6px;
            padding-top: 12px;
        }
    </style>

    <!-- <*****NITI news start****> -->
    
    <div class="container-fluid" style="/*background-color:white;*/ padding: 0px;">
        <div class="container-fluid" style="background-color: #2f2424; padding: 27px; width:100%; padding-top: 5px;">
            <h1 class="display-4 news" style="text-align: center; color: white; padding-bottom: 5px; ">News and Events</h1>
            <div class="card-deck">
                <div class="card" >
                    <img class="card-img-top img-fluid" src="images/basket.jpeg" alt="Card image" style="width:100%; height:170px; ">
                    <div class="dates">
                        <!-- <span>Feb<br></span>
                            <span>25</span> -->
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="card-body" style="padding-top: 0px;">
                            <h4 class="card-title">Inter University Sports Calendar</h4>
                            <!-- <h5>Inter College Tournament</h5> -->

                            <a href="#" class="btn btn-primary">View Calendar</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/hockey.jpg" alt="Card image" style="width:100%; ; height:170px;">
                        <div class="dates">
                         <i class="fa fa-calendar" aria-hidden="true"></i>
                     </div>
                     <div class="card-body" style="padding-top: 0px;">
                        <h4 class="card-title" >Inter Collegiate Sports Calendar</h4>
                        <!-- <h5>Inter University Tournament</h5> -->
                        <a href="#" class="btn btn-primary">View Calendar</a>
                    </div>
                </div>
                <div class="card" >
                    <img class="card-img-top img-fluid" src="images/kho-kho.jpg" alt="Card image" style="width:100% ; height:170px;">
                    <div class="dates">
                     <i class="fa fa-calendar" aria-hidden="true"></i>
                 </div>
                 <div class="card-body" style="padding-top: 0px;">
                    <h4 class="card-title">Inter Collegiate Sports Calendar</h4>
                    <!-- <h5>Inter College Tournament</h5> -->
                    <a href="#" class="btn btn-primary">View Calendar</a>
                </div>
            </div>
            <div class="card" >
                <img class="card-img-top img-fluid" src="images/volleyball.jpeg" alt="Card image" style="width:100%;; height:170px;">
                <div class="dates">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="card-body" style="padding-top: 0px;">
                    <h4 class="card-title">Inter Collegiate Sports Calendar</h4>
                   <!--  <h5>Inter College Tournament</h5> -->
                    <a href="#" class="btn btn-primary">View Calendar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ************ -->
        <!-- <div class="container-fluid dd" id="aboutdavv" style="" align="center">

            <a href="vision-mission.php"> <img class="img-fluid" src="images/vision-mission/vision-mission.png" alt=""  ></a>


        </div>
    -->
</div>
<!--**************************************NEWS and Events ENDS*******************************************-->
<!-------------------------------------SUMIT NEWS & EVENTS----------------------------------------------------------->

<!------------------------------------------SUMIT NEW & EVENTS ENDS------------------------------------------------------>




        <!-- *****************just after first cover page welcome wala /start/ ***********

        -->    
        <div id="aboutdavv" class="aboutus row"  style="padding-top: 40px; padding-bottom:40px;  margin-right: 0px; margin-left: 0px;">
            <!--            <div class="col-md-1"></div>-->
            <div class="col-md-5" >
                <div style="background-color:white; padding:0px 30px 0px 30px;">

                    <div style="box-shadow: 6px 8px 6px #0a394fbf; ">
                        <img class="img-fluid" src="images/office2.jpg" alt="directorate-office">
                    </div>
                </div>
            </div>
            <div class="col-md-7" style="color:#3b2f2f;  padding: 20px; padding-left: 50px;">
                <h1 style="font-family: 'Asul', cursive;"><center>About Directorate</center></h1>
                <hr>
                <div style="font-family: 'Brawler',sans-serif; text-align:justify;font-size: 20px;">
                    The Directorate of Physical Education & Sports is one of the core and important departments of Devi Ahilya Vishwavidyalaya. The core mission of the department is to provide a broad spectrum of the Sports, Recreation, Wellness and Leisure activities to our students as well as faculties and staff also.<br>
                    From the last 2-3 years we are conducting regular coaching cum combined practice activities in Basketball, Football, Volleyball and rack & Filed. Very soon we will launch Indian round Archery activity also.  
                </div>  
                <div align="center">
                <a href="aboutus.php"><button class="btn btn-primary">Read More</button></a>  
                </div>    
            </div>
        </div>

        <!-- *****************just after first cover page welcome wala /over/ *********** -->   


        
        <?php include 'include/footer.html';?>
    </body>
    </html>
