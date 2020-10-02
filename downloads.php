
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/link.html');?>
    <title>Downloads | Diretorate of Physical Edu and Sports</title>
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/panel.css">
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

        .downloads div.panel {
            padding: 0 18px;
            background-color: #eee;
            display: block;
            overflow: hidden;
            font-size: 16px;

        }
        .downloads div.panel li{
            list-style-type: none;
            line-height: 2.0;
        }
        .downloads div.panel li:before{
            content: "\f138";
            font-family: "FontAwesome";
            width: 10px;
            height: 10px;
            margin-right: 5px;
            color: #147efb;
        }
        .downloads{
            box-shadow: 5px 5px 30px grey;
            /*                margin-top: 10px;*/
            padding-bottom:30px;
        }
        .downloads h1{
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

            .downloads div.panel {
                padding: 0 18px;
                background-color: #eee;
                display: block;
                overflow: hidden;
                font-size: 16px;

            }
            .downloads div.panel li{
                list-style-type: none;
                line-height: 2.0;
            }
            .downloads div.panel li:before{
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
            .downloads h1{
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
            .downloads a{
                color:black;
            }

        </style>

    </head>
    <body>
        <?php include 'include/nav.html';?>
        <?php include 'include/header.html';?>
        
        <div class="container downloads">
            <br>
            <h1><center>DOWNLOADS</center></h1>

            <div class="panel">
                <ul style="font-weight:700;">

                    <?php

                    $fo=opendir("downloads");
                    $n = 1;
                    while($file=readdir($fo))
                    {
                        if($file!="." && $file!=".." && $file!="Thumbs.db")
                        {
                            $name=preg_replace('/.[^.]*$/', '', basename($file));
                            $fileurl= rawurlencode($file);
                            echo "<li><a href='downloads/$fileurl' target='_blank' style=' color:black;'>";
                            echo $name;
                            
                            $modif = date("Y-m-d", filemtime('downloads/' . $file));
                            $date1=date_create($modif);
                            $date2=date_create(date("Y-m-d"));
                            $diff=date_diff($date1,$date2);
                            $day_diff = $diff->format('%d');                  
                            if($day_diff<=4){
                                echo '<span class="badge badge-info blink_me" style="font-size:12px; font-family:monospace;margin-left:25px;">NEW</span>';
                            }         
                            echo  " </a></li>";
                            $n=$n+1;
                        }
                    }
                    ?>
                </ul>
            </div>
            
        </div>
        <?php include 'include/footer.html';?>
<!--    Viewd Code      -->
    </body>
    </html>
