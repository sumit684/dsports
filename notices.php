<?php
define('BLINKER_INTERVAL', 5);
?>

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
            <div id="circulars">
                <h1><center>NOTICES</center></h1>

                <button class="accordion" ><i class="fas fa-scroll icon_style"></i>CIRCULARS</button>
                <div class="panel">
                    <ul>
                        <?php

                        $fo=opendir("notices/circulars");
                        $n = 1;
                        while($file=readdir($fo))
                        {
                            if($file!="." && $file!=".." && $file!="Thumbs.db")
                            {
                                $name=preg_replace('/.[^.]*$/', '', basename($file));
                                $fileurl=rawurlencode($file);
                                echo "<li><a href='notices/circulars/$fileurl' target='_blank' style=' color:black;'>";
                            // echo $n;
                            // echo "&nbsp;";
                                echo "<strong>";
                                echo $name;
                                echo blinker('notices/circulars',$file,BLINKER_INTERVAL);
                                echo "</strong>";
                                echo  " </a></li>";
                                $n=$n+1;
                            }
                        }
                        ?>
                    </ul>

                </div>
            </div>

            <div id="letters">
                <button class="accordion" ><i class="far fa-envelope icon_style"></i>LETTERS</button>
                <div class="panel">
                    <ul>

                        <?php

                        $fo=opendir("notices/letters");
                        $n = 1;
                        while($file=readdir($fo))
                        {
                           if($file!="." && $file!=".." && $file!="Thumbs.db")
                           {  
                               $name=preg_replace('/.[^.]*$/', '', basename($file));
                               $fileurl=rawurlencode($file);
                               echo "<li><a href='notices/letters/$fileurl' target='_blank' style=' color:black;'>";
                 // echo $n;
                 // echo "&nbsp;";
                               echo "<strong>";
                               echo $name;
                               echo blinker('notices/letters',$file,BLINKER_INTERVAL);
                               echo "</strong>";
                               echo  " </a></li>";
                               $n=$n+1;
                           }
                       }
                       ?>


                   </ul>
               </div>
           </div>
           <div id="fixtures">
            <button class="accordion" ><i class="fas fa-calendar-alt icon_style"></i>FIXTURES</button>
            <div class="panel">
                <ul>
                    <?php

                    $fo=opendir("notices/fixtures");
                    $n = 1;
                    while($file=readdir($fo))
                    {
                       if($file!="." && $file!=".." && $file!="Thumbs.db")
                       {
                           $name=preg_replace('/.[^.]*$/', '', basename($file));
                           $fileurl=rawurlencode($file);
                           echo "<li><a href='notices/fixtures/$fileurl' target='_blank' style=' color:black;'>";
                 
                           echo "<strong>";
                           echo $name;
                           echo blinker('notices/fixtures',$file,BLINKER_INTERVAL);
                           echo "</strong>";
                           echo  " </a></li>";
                           $n=$n+1;
                       }
                   }
                   ?>

               </ul>
           </div>
       </div>
       <div id="tendures">
        <button class="accordion" id="tendures"><i class="fas fa-file-invoice-dollar icon_style"></i>TENDERS</button>
        <div class="panel">
            <ul>
                <?php

                $fo=opendir("notices/tenders");
                $n = 1;
                while($file=readdir($fo))
                {
                   if($file!="." && $file!=".." && $file!="Thumbs.db")
                   {
                       $name=preg_replace('/.[^.]*$/', '', basename($file));
                       $fileurl=rawurlencode($file);
                       echo "<li><a href='notices/tenders/$fileurl' target='_blank' style=' color:black;'>";
                
                       echo "<strong>";
                       echo $name;
                       echo blinker('notices/tenders',$file,BLINKER_INTERVAL);
                       echo "</strong>";
                       echo  " </a></li>";
                       $n=$n+1;
                   }
               }
               ?>

           </ul>
       </div>
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

<?php
function blinker($dir,$file,$interval){
   $modif = date("Y-m-d", filemtime($dir.'/' . $file));
   $date1=date_create($modif);
   $date2=date_create(date("Y-m-d"));
   $diff=date_diff($date1,$date2);
   $day_diff = $diff->format('%d');                  
   if($day_diff<=$interval){
    return '<span class="badge badge-info blink_me" style="font-size:12px; font-family:monospace;margin-left:25px;">NEW</span>';
}         

}

?>