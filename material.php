<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="dist/material-cards.css">
    <style type="text/css">

        html {
            position: relative;
            min-height: 100%;
        }

        body {
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

    </style>
    <script src="main.js"></script>
    <?php include('include/link.html');?>
    <style>
                a:not([href]):not([tabindex]) {
            color:white;
        }
        a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
            color:white;
        }
    </style>    
</head>
<body>
<?php include 'include/nav.html';?>
<?php include 'include/header.html';?>
            

<section class="container">
    <!-- <div class="page-header">
        <h1>Material cards<br>
            <small>material cards with a simple jquery script</small></h1>
    </div> -->
    <div class="row active-with-click">
        <div class="col-md-2 col-sm-3 col-xs-6">
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Blue">
                <h2>
                    <span>Sumit Singh</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        The Deer Hunter
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img  class="img-responsive" src="images/team/sumit.jpeg">
                    </div>
                    <div class="mc-description">
                        He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Blue">
                <h2>
                    <span>Pratik Mehta</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Mystic River
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="images/team/pratik.jpeg">
                    </div>
                    <div class="mc-description">
                        He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008). Penn began his acting career in television with a brief appearance in a 1974 episode of Little House on the Prairie ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
        </div>
    </div>
    <div class="row active-with-click">
            <div class="col-md-2 col-sm-3 col-xs-6">
            </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Blue">
                <h2>
                    <span>Christopher Walken</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        The Deer Hunter
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="images/team/niti.jpeg">
                    </div>
                    <div class="mc-description">
                        He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Blue">
                <h2>
                    <span>Sean Penn</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Mystic River
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="images/team/rudransh.jpeg">
                    </div>
                    <div class="mc-description">
                        He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008). Penn began his acting career in television with a brief appearance in a 1974 episode of Little House on the Prairie ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
        </div>
    </div>
</section>



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





