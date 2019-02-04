
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Notices | Diretorate of Physical Edu and Sports</title>

        <?php include('include/link.html');?>

        <style>
            .accordion {
                background-color: #ccc;
                color: #444;
                cursor: pointer;
                padding: 10px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 18px;
                font-family: sans-serif;
                font-weight: 550;
                transition: 0.4s;
                font-family: 'Merriweather';
                border-radius: 4px;
                padding-left: 10px;
            }

            .active, {
                background-color: #eee;
            }

            .accordion:after {
                content: '\f0aa'; /*upper arrow*/ 
                font-family: "FontAwesome";
                color: #777;
                font-weight: bold;
                float: right;

            }

            .active:after {
                content: "\f0ab"; /*lower arrow*/ 
                font-family: "FontAwesome";
                color:#0074fc;
            }

            .notices div.panel {
                padding: 0 18px;
                background-color: #eee;
                display: block;
                overflow: hidden;
                font-size: 16px;

            }
            .notices div.panel li{
                list-style-type: none;
                line-height: 2.0;
            }
            .notices div.panel li:before{
                content: "\f138";
                font-family: "FontAwesome";
                width: 10px;
                height: 10px;
                margin-right: 5px;
                color: #147efb;
            }
            .container{
                box-shadow: 5px 5px 30px grey;
                /*                margin-top: 10px;*/
                padding-bottom:30px;
            }
            .notices h1{
                font-family: 'Merriweather';
                color: #100e33d6;
            }
            .icon_style{
                padding-right:8px;
            }


            .blink_me {
                animation: blinker 1s linear infinite;
            }

            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }
            .notices a{
                color:black;
            }

        </style>
    </head>
    <body>
        <?php include('include/nav.html');?>
        <?php include('include/header.html');?>
        <div class="container notices">
            <br>
            <h1><center>NOTICES</center></h1>

            <button class="accordion"><i class="fas fa-scroll icon_style"></i>CIRCULARS</button>
            <div class="panel">
                <ul>
                    <li>
                        <a href="http://www.dauniv.ac.in/sports/Inter Collegiate Boxing (M&W) Championship 2018-2019.pdf">				
                            <strong>
                                Inter Collegiate Boxing (M&W) Championship 2018-2019
                            </strong>
                            <span class="badge badge-info blink_me" style="font-size:12px; font-family:monospace;">new</span>								
                        </a>
                    </li>
                    <li>
                        <a href="http://www.dauniv.ac.in/sports/State Level Athletics Meet 2018-2019.pdf">				
                            <strong>
                                State Level Athletics Meet 2018-2019	 </strong></a>
                     <span class="badge badge-info blink_me" style="font-size:12px; font-family:monospace;">new</span></li>

                    <li>
                        <a href="http://www.dauniv.ac.in/sports/New Inter Collegiate Athletics Meet 2018-2019.pdf">				
                            <strong>New Inter Collegiate Athletics Meet 2018-2019</strong>
                         <span class="badge badge-info blink_me" style="font-size:12px; font-family:monospace;">new</span></a>	</li> 

                    <li>
                        <a href="http://www.dauniv.ac.in/sports/EntryFormAthleticsMeetMenSection.pdf">				
                            <strong>Entry Form Athletics Meet Men Section</strong></a>	</li> 
                    <li>
                        <a href="http://www.dauniv.ac.in/sports/EntryFormAthleticsMeetWomen Section.pdf">				
                            <strong>Entry Form Athletics Meet Women Section</strong></a>	</li> 

                    <li>
                        <a href="http://www.dauniv.ac.in/sports/InterCollegiateAthletics(M&W)Meet201819.pdf">				
                            Inter Collegiate Athletics (M&W) Meet 2018-2019		</a>	</li> 	

                    <li>
                        <a href="http://www.dauniv.ac.in/sports/Sports Officer.pdf">				
                            Sports Officer's		</a>	</li> 		

                    <li>
                        <a href="http://www.dauniv.ac.in/sports/Inter Collegiate Proforma & Circulars 2018-2019.pdf">				
                            Inter Collegiate Proforma & Circulars 2018-2019		</a>	</li> 			   



                    <li>
                        <a href="http://www.dauniv.ac.in/sports/Details regarding new eligibility rules.pdf">				
                            Details Regarding New Eligibility Rules
                        </a>
                    </li> 

                    <li>
                        <a href="http://www.dauniv.ac.in/sports/Agelimit19072017.pdf">				
                            Revised Eligibility Rules for 2017-2018				 	</a>				  </li> 
                </ul>

            </div>



            <button class="accordion"><i class="far fa-envelope icon_style"></i>LETTERS</button>
            <div class="panel">
                <ul>
                    <li>
                        <a href="http://www.dauniv.ac.in/sports/Detail Entry Proforma Boxing (Men) Championship 2018-2019.pdf">				
                            <strong>
                                Detail Entry Proforma Boxing (Men) Championship 2018-2019	 </strong>
                         <span class="badge badge-info blink_me" style="font-size:12px; font-family:monospace;">new</span></a>		</li>
                    <li>
                        <a href="http://www.dauniv.ac.in/sports/Detail Entry Proforma Boxing (Women) Championship 2018-2019.pdf">				
                            <strong>
                                Detail Entry Proforma Boxing (Women) Championship 2018-2019	 </strong>
                         <span class="badge badge-info blink_me" style="font-size:12px; font-family:monospace;">new</span></a>		</li>

                </ul>
            </div>
            <button class="accordion"><i class="fas fa-calendar-alt icon_style"></i>FIXTURES</button>
            <div class="panel">
                <ul>
                    <li><a href="#"><strong>Fixture 2018-19</strong>
                            <span class="badge badge-info blink_me" style="font-size:12px; font-family:monospace;">new</span></a></li>
                    <li><a href="#">Fixture 2017-18</a></li>
                    <li><a href="#">Fixture 2016-17</a></li>

                </ul>
            </div>
            <button class="accordion"><i class="fas fa-file-invoice-dollar icon_style"></i>TENDERS</button>
            <div class="panel">
                <ul>
                    <li><a href="#">
                        <strong>
                        Tendure 2018-19
                        </strong>
                            <span class="badge badge-info blink_me" style="font-size:12px; font-family:monospace;">new</span></a></li>
                    <li><a href="#">Tendure 2017-18</a></li>
                    <li><a href="#">Tendure 2016-17</a></li>

                </ul>
            </div>
        </div>

        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display==="none"){
                        panel.style.display = "block";
                    } else {
                        panel.style.display ="none";
                    } 
                });
            }
        </script>
        <?php include('include/footer.html');?>
    </body>
</html>