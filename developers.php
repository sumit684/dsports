<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Developers</title>
    <?php include 'include/link.html';?>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="dist/material-cards.css">
    <style type="text/css">

        html {
            position: relative;
            min-height: 100%;
        }

        .developer {
            background-color: #ECEFF1;
            color: #37474F;
            font-family: 'Raleway', sans-serif;
            font-weight: 300;
            font-size: 16px;
        }

        h1, h2, h3 {
            font-weight: 200;
        }
        .img-container img{
            width:100%;
        }

        /* .special{
            padding: 20px 24px 26px 90px;
            } */

        </style>
        <script src="main.js"></script>
        <style>
            a:not([href]):not([tabindex]) {
                color:white;
            }
            a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
                color:white;
            }
            @media screen and (min-width: 650px) {  
                .special .mc-active h2{

                    padding: 20px 24px 26px 90px;
                }
            }
            .mc-description{
              font-weight:600;
          }

      </style>    
  </head>
  <body>
    <?php include 'include/nav.html';?>
    <?php include 'include/header.html';?>


    <section class="container developer">
    <!-- <div class="page-header">
        <h1>Material cards<br>
            <small>material cards with a simple jquery script</small></h1>
        </div> -->

        <h1  style="color:black;text-align: center;font-family: 'Azul';font-size:50px;">Meet the Team...</h1><br>
        <div class="row active-with-click">
            <!-- <div class="col-md-2 col-sm-3 col-xs-6">
            </div> -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="material-card Blue">
                    <h2>
                        <!-- <strong> -->

                            <!-- Computer Engineering IET-DAVV  -->
                            <!-- </strong> -->
                            <span><i class=""></i>Sumit Kr Singh</span>

                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img  class="img-responsive" src="images/team/sumit.jpeg">
                            </div>
                            <div class="mc-description">
                                Computer Engineering<br>
                                IET-DAVV 
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Social
                            </h4>
                            <!-- <a class="fa fa-fw fa-facebook"></a> -->
                            <a class="fa fa-fw fa-github" target="_blank" href="https://github.com/sumit684"></a>
                            <a class="fa fa-fw fa-linkedin" target="_blank" href="https://www.linkedin.com/in/sumit-singh-56b531159"></a>
                            <a class="fa fa-fw fa-envelope" href="mailto:singh.sumit684@gmail.com"></a>
                        </div>
                    </article>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 special">
                    <article class="material-card Blue">
                        <h2 class="">
                            <!-- <strong> -->

                                <!-- Computer Engineering IET-DAVV  -->
                                <!-- </strong> -->
                                <span><i class=""></i>Pratik Mehta</span>

                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="images/team/pratik6.jpg">
                                </div>
                                <div class="mc-description">
                                  Computer Engineering<br>
                                  IET-DAVV 
                              </div>
                          </div>
                          <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Social
                            </h4>
                            <!-- <a class="fa fa-fw fa-facebook"></a> -->
                            <a class="fa fa-fw fa-github" target="_blank" href="https://github.com/Pratikmehta1729"></a>
                            <a class="fa fa-fw fa-linkedin" target="_blank" href="https://www.linkedin.com/in/pratik-mehta-983211166"></a>
                            <a class="fa fa-fw fa-envelope" href="mailto:pratikjain17291729@gmail.com"></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <article class="material-card Blue">
                        <h2>

                            <span><i class=""></i>Niti Mangwani</span>

                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="images/team/niti.jpeg">
                            </div>
                            <div class="mc-description">
                                Computer Engineering<br>
                                IET-DAVV                         
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Social
                            </h4>
                            <!-- <a class="fa fa-fw fa-facebook"></a> -->
                            <a class="fa fa-fw fa-github" target="_blank" href="https://github.com/Nitss10"></a>
                            <a class="fa fa-fw fa-linkedin" target="_blank" href="https://www.linkedin.com/in/niti-mangwani-03b1a5179/"></a>
                            <a class="fa fa-fw fa-envelope" href="mailto:nitimangwani@gmail.com"></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <article class="material-card Blue">
                        <h2>
                            <!-- <strong> -->

                                <!-- Computer Engineering IET-DAVV  -->
                                <!-- </strong> -->
                                <span><i class=""></i>Rudransh Choudhary</span>

                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="images/team/rudransh.jpeg">
                                </div>
                                <div class="mc-description">
                                    Computer Engineering<br>
                                    IET-DAVV 
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <!-- <a class="fa fa-fw fa-facebook"></a> -->
                                <a class="fa fa-fw fa-github" href="#"></a>
                                <a class="fa fa-fw fa-linkedin" href="#"></a>
                                <a class="fa fa-fw fa-envelope" href="mailto:rudranshchoudharyjbp@gmail.com"></a>
                            </div>
                        </article>
                    </div>
            <!-- <div class="col-md-2 col-sm-3 col-xs-6">
            </div> -->
        </div>

    </section>

    <div class="container text-center" id="mentors" style="margin-top: 30px; margin-bottom: 30px;">
        <a href="#mentors-dropdown" class="btn btn-primary" data-toggle="collapse">Mentors</a>
        <div id="mentors-dropdown" class="collapse">
            <p>
                <b><br>Dr. Vrinda Tokekar<br>
                Dr. Maya Ingle<br>
                Dr. Sunil Dudhale<br>
                Mr. Sachin Mandwariya<br>
                Mr. Javed Khan <br>
                Miss Anshika Jain</b><br><br><br>
                <span style="font-family: cursive;">Special Thanks to Deepam Gupta, Samyak Jain, Kishan Joshi & Rajat Karahe </span>
            </p>
        </div>
    </div>
    <link href="http://fonts.googleapis.com/css?family=Dancing+Script:700|EB+Garamond" rel="stylesheet" type="text/css" />

    <div class="container" align="center" style="font-family: Dancing Script, cursive;font-size: 24px; margin-bottom: 30px;" >
        Thanks for your visit, We would like to know about your experience on this website.<br>

        <a href="feedback.php"><button class="btn btn-success">Send FeedBack</button></a>
    </div>

    <?php include 'include/footer.html'?>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        $(function() {
            $('.material-card > .mc-btn-action').click(function () {
                var card = $(this).parent('.material-card');
                var icon = $(this).children('i');
                icon.addClass('fa-spin-fast');

                if (card.hasClass('mc-active')) {
                    card.removeClass('mc-active');

                    window.setTimeout(function() {
                        icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');

                    }, 800);
                } else {
                    card.addClass('mc-active');

                    window.setTimeout(function() {
                        icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');

                    }, 800);
                }
            });
        });
    </script>
</body>
</html>





