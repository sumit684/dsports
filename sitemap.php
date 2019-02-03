<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Sitemap | Diretorate of Physical Edu and Sports</title>
        <?php include('include/link.html');?>
        <style>

            thead{
                color:goldenrod;
                font-size:23px;
                font-family:sans-serif;
                text-decoration: underline;
            }
            td{

                text-align: left;
                font-weight: 500;
                font-size: 18px;
            }
            thead,td{
                text-align: left;
            }
            /*
            td:hover{
            background-color: rgba(218, 165, 32, 0.81);
            }
            */
            td:before{


                align-content: center;
            }
            h1{
                color: #003262;
                font-family:monospace;
                font-weight: 700;
                font-size: 50px;
            }
            a{
                text-decoration: none;
                color:Black;
            }
            @media screen and (max-width:786px)
            {
                .sitemap table thead{
                    text-align: center!important;
                } 
                .sitemap table td{
                    text-align: center!important;
                } 
            }

        </style>
    </head>
    <body>

        <?php include 'include/nav.html';?>
        <?php include 'include/header.html';?>



        <!--        *******************************SITEMAP STARTS***************************************************-->

        <center><h1>SITEMAP</h1></center>
        <div class="container sitemap" style="padding-left: 0px; padding-right: 0px;">



            <div class="row">
                <table class="col-md-3 table table-hover table-borderless"><thead><th>About Us</th></thead>
                    <tr><td><a href="vision-mission.html">Vision-Mission-Objectives</a></td></tr>
                    <tr><td><a href="#">About Directorate</a></td></tr>
                    <tr><td><a href="directormsg.html">Director's Message</a></td></tr>
                </table>

                <table class="col-md-3 table table-hover table-borderless"><thead><th>Student Corner</th></thead>
                    <tr><td><a href="#">Qualifying Standards</a></td></tr>
                </table>

                <table class="col-md-3 table table-hover table-borderless"><thead><th>Downloads</th></thead>

                    <tr><td><a href="utdsportscalendar.html">UTD Sports Calender</a></td></tr>
                    <tr><td><a href="interuniversitysportscalendar.html">Inter University Sports Calender</a></td></tr>
                    <tr><td><a href="intercollegiatesportscalendar.html">Inter Collegiate  Sports Calender</a></td></tr>
                    <tr><td><a href="#">Eligibility/Incentives</a></td></tr>
                    <tr><td><a href="#">Proformas/Forms/Formats</a></td></tr>
                    <tr><td><a href="#">Qualifying Standards</a></td></tr>
                    <tr><td><a href="#">Others</a></td></tr></table>

                <table class="col-md-3 table table-hover table-borderless"><thead><th>Administration</th></thead>
                    <tr><td><a href="#">Director</a></td></tr>
                    <tr><td><a href="#">Assistant Director</a></td></tr>
                    <tr><td><a href="#">Office staff</a></td></tr>
                    <tr><td><a href="#">Sports committee</a></td></tr>
                    <tr><td><a href="#">Excecutive Board Sports</a></td></tr>
                </table> 

            </div>
            <div class="row">
                <table class="col-md-3 table table-hover table-borderless"><thead><th>Tournaments</th></thead>
                    <tr><td><a href="#">Inter University</a></td></tr>
                    <tr><td><a href="#">M.P. State</a></td></tr>
                    <tr><td><a href="#">Inter Collgiate</a></td></tr></table>

                <table class="col-md-3 table table-hover table-borderless"><thead><th>Notices</th></thead>
                    <tr><td><a href="http://www.dauniv.ac.in/sports.php">Circulars</a></td></tr>
                    <tr><td><a href="http://www.dauniv.ac.in/sports.php">Letters</a></td></tr>
                    <tr><td><a href="http://www.dauniv.ac.in/sports.php">Fixtures</a></td></tr>
                    <tr><td><a href="http://www.dauniv.ac.in/sports.php">Tenders</a></td></tr></table>
                <!--

<table class="col-md-3 table table-hover table-borderless"><thead><th>Gallery</th></thead>
<tr><td><a href="#">Photo Gallery</a></td></tr></table>
-->

                <table class="col-md-3 table table-hover table-borderless"><thead><th>Achievements</th></thead>
                    <tr><td><a href="#">Individual</a></td></tr>
                    <tr><td><a href="#">Team </a></td></tr>
                    <tr><td><a href="#">Infrastructure/Facilities</a></td></tr></table>

                <!--        <table class="col-md-3 table table-hover table-borderless"><thead><th>Contact Us</th></thead></table>-->
            </div>
        </div>         


        <!--        *******************************SITEMAP ENDS***************************************************-->


        <?php include 'include/footer.html';?>
    </body>
</html>