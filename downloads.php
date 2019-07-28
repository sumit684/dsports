
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/link.html');?>
    <title>Downloads | Diretorate of Physical Edu and Sports</title>
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/panel.css">
</head>
<body>
    <?php include 'include/nav.html';?>
    <?php include 'include/header.html';?>
    
    <div class="container downloads">
        <br>
        <h1><center>DOWNLOADS</center></h1>
        <div class="panel">
            <ul>

                <?php

                $fo=opendir("downloads");
                $n = 1;
                while($file=readdir($fo))
                {
                    if($file!="." && $file!=".." && $file!="Thumbs.db")
                    {
                        $name=preg_replace('/.[^.]*$/', '', basename($file));
                        echo "<li><a href='downloads/$file' target='_blank' style=' color:black;'>";
                        // echo $n;
                        // echo "&nbsp;";
                        echo $name;
                        
                        $modif = date("Y-m-d", filemtime('downloads/' . $file));
                        // $mod_date=date("F d Y H:i:s.", filemtime($file));
                        // echo "<br>$file last modified on ". $modif;

                        $date1=date_create($modif);
                        $date2=date_create(date("Y-m-d"));
                        $diff=date_diff($date1,$date2);
                        $day_diff = $diff->format('%d');                  
                        if($day_diff<=2){
                            echo '<span class="badge badge-info blink_me" style="font-size:12px; font-family:monospace;margin-left:25px;">new</span>';
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
</body>
</html>