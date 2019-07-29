<!DOCTYPE html>
<html lang="en">
<head>

    <title>Sitemap | Diretorate of Physical Edu and Sports</title>
    <?php include('include/link.html');?>
    <style>

       .sitemap thead{
        color:goldenrod;
        font-size:23px;
        font-family:sans-serif;
        text-decoration: underline;
    }
    .sitemap td{

        text-align: left;
        font-weight: 500;
        font-size: 18px;
    }
    .sitemap thead, .sitemap td{
        text-align: left;
    }
            /*
            td:hover{
            background-color: rgba(218, 165, 32, 0.81);
            }
            */
            .sitemap td:before{


                align-content: center;
            }
            .sitemap h1{
                color: #003262;
                font-family:monospace;
                font-weight: 700;
                font-size: 50px;
            }
            .sitemap a{
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

        
        <div class="container sitemap" style="padding-left: 20px; padding-right: 20px;">

            <center><h1>SITEMAP</h1></center>

            <div class="row">
                <table class="col-md-3 table table-hover table-borderless">
                    <thead>
                        <th>About Us</th>
                    </thead>
                    <tr>
                        <td><a href="vision-mission.php">Vision-Mission-Objectives</a></td>
                    </tr>
                    <tr>
                        <td><a href="aboutus.php">About Directorate</a></td>
                    </tr>
                    <tr>
                        <td><a href="index.php#aboudavv">About DAVV</a></td>
                    </tr>
                    <tr>
                        <td><a href="directormsg.php">Director's Message</a></td>
                    </tr>
                    <tr>
                        <td><a href="infrastructure.php">Infrastructure/Facilities</a></td>
                    </tr>
                </table>

                <table class="col-md-3 table table-hover table-borderless">
                    <thead>
                        <th>Administration</th>
                    </thead>
                    <tr>
                        <td><a href="officestaff.php">Office staff</a></td>
                    </tr>
                    <tr>
                        <td><a href="sportscommittee.php">Sports committee</a></td>
                    </tr>
                    <tr>
                        <td><a href="executivesportsboard.php">Excecutive Board Sports</a></td>
                    </tr>
                </table> 

                <table class="col-md-3 table table-hover table-borderless">
                    <thead>
                        <th>Calendar</th>
                    </thead>
                    <tr>
                        <td><a href="calendar.php?name=InterUniversitySportsCalendar2019-2020">Inter University Sports Calendar</a></td>
                    </tr>
                    <tr>
                        <td><a href="calendar.php?name=InterCollegiateSportsCalendar2019-2020">Inter Collegiate  Sports Calendar</a></td>
                    </tr>  
                    <tr>
                        <td><a href="calendar.php?name=InterCollegiateSportsCalendar2019-2020">M.P. State Sports Calendar</a></td>
                    </tr>                   
                </table>

                <table class="col-md-3 table table-hover table-borderless"><thead><th>Notices</th></thead>
                    <tr><td><a href="notices.php#circulars">Circulars</a></td></tr>
                    <tr><td><a href="notices.php#letters">Letters</a></td></tr>
                    <tr><td><a href="notices.php#fixtures">Fixtures</a></td></tr>
                    <tr><td><a href="notices.php#tenders">Tenders</a></td></tr>
                </table>
                <table class="col-md-3 table table-hover table-borderless">
                    <thead>
                        <th>UTD</th>
                    </thead>
                    <tr>
                        <td><a href="calendar.php?name=UtdSportsCalendar2018-2019">UTD Sports Calendar</a></td>
                    </tr>
                    <tr>
                        <td><a href="utdsportscommittee.php">UTD Sports Committee</a></td>
                    </tr>
                </table>
                <table class="col-md-3 table table-hover table-borderless">
                    <thead>
                        <th>Updates</th>
                    </thead>
                    <tr>
                        <td><a href="downloads.php">Downloads</a></td>
                    </tr>
                    <tr>
                        <td><a href="news.php">News</a></td>
                    </tr>
                    <tr>
                        <td><a href="gallery.php">Gallery</a></td>
                    </tr>
                    <tr>
                        <td><a href="achivement.php">Achivements</a></td>
                    </tr>
                </table>
                <table class="col-md-3 table table-hover table-borderless">
                    <thead>
                        <th>Others</th>
                    </thead>
                    <tr>
                        <td><a href="developers.php">Developers</a></td>
                    </tr>
                    <tr>
                        <td><a href="feedback.php">Feedback</a></td>
                    </tr>
                    <tr>
                        <td><a href="contactus.php">Contact Us</a></td>
                    </tr>        
                </table>
            </div>
        </div>         

        <?php include 'include/footer.html';?>
    </body>
    </html>