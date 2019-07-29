
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
                        <span>Feb<br></span>
                        <span>25</span>
                    </div>
                    <div class="card-body" style="padding-top: 0px;">
                        <h4 class="card-title">BasketBall</h4>
                        <h5>Inter College Tournament</h5>
<!--
                            <h6>- Govt. PG College, Khargone</h6>
                            <b>Faculty Incharge:</b> Dr.V,F.Peter<br>
                            <b>Contact :</b> 9131354861<br>
                            <b>Department :</b> SOPE<br>
                        -->
                        <a href="#" class="btn btn-primary">View PDF</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-fluid" src="images/hockey.jpg" alt="Card image" style="width:100%; ; height:170px;">
                    <div class="dates">
                        <span>Nov</span>
                        <span>29</span>
                    </div>
                    <div class="card-body" style="padding-top: 0px;">
                        <h4 class="card-title" >Hockey</h4>
                        <h5>Inter University Tournament</h5>
                        <a href="#" class="btn btn-primary">View PDF</a>
                    </div>
                </div>
                <div class="card" >
                    <img class="card-img-top img-fluid" src="images/kho-kho.jpg" alt="Card image" style="width:100% ; height:170px;">
                    <div class="dates">
                        <span>Nov</span>
                        <span>29</span>
                    </div>
                    <div class="card-body" style="padding-top: 0px;">
                        <h4 class="card-title">Kho-Kho</h4>
                        <h5>Inter College Tournament</h5>
                        <a href="#" class="btn btn-primary">View PDF</a>
                    </div>
                </div>
                <div class="card" >
                    <img class="card-img-top img-fluid" src="images/volleyball.jpeg" alt="Card image" style="width:100%;; height:170px;">
                    <div class="dates">
                        <span>Nov</span>
                        <span>29</span>
                    </div>
                    <div class="card-body" style="padding-top: 0px;">
                        <h4 class="card-title">VolleyBall</h4>
                        <h5>Inter College Tournament</h5>
                        <a href="#" class="btn btn-primary">View PDF</a>
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
                <h1 style="font-family: 'Asul', cursive;"><center>About DAVV</center></h1>
                <hr>
                <div style="font-family: 'Brawler',sans-serif; text-align:justify;font-size: 20px;">Devi Ahilya Vishwavidyalaya (DAVV),
                    formerly University of Indore, is a premier University in Central India, has completed 54th years 
                    of establishment, educational commitment and services. It is the First State University of Madhya
                    Pradesh which has been accredited with “A” grade by NAAC. It was established in 1964, by an
                Act of Legislature of Madhya Pradesh. </div>        
            </div>
        </div>

        <!-- *****************just after first cover page welcome wala /over/ *********** -->   


        
        <?php include 'include/footer.html';?>
    </body>
    </html>
