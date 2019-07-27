<!DOCTYPE html>
<html>
<head>
	<title>News | Directorate of Physical Education & Sports</title>
	<?php include 'include/link.html';?>
	<link rel="stylesheet" type="text/css" media="screen" href="stylesheets/panel.css">
</head>
<body>
	<?php include 'include/nav.html'?>
	<?php include 'include/header.html'?>
	<div class="container downloads">
        <br>
        <h1><center>NEWS</center></h1>
        <div class="panel">
            <ul>

             <?php
             
             $fo=opendir("news");
             $n = 1;
             while($file=readdir($fo))
            {
                if($file!="." && $file!=".." && $file!="Thumbs.db")
                {
                    $name=preg_replace('/.[^.]*$/', '', basename($file));
                    echo "<li><a href='news/$file' target='_blank' style=' color:black;'>";
                    echo $n;
                    echo "&nbsp;";
                    echo $name;
                    echo  " </a></li>";
                    $n=$n+1;
                }
            }
            ?>             
                <!-- <li>1<span class="badge badge-info blink_me" style="font-size:10px; font-family:monospace;">new</span></li>
                <li>2</li>
                <li>3</li>
                <li>4</li> -->


            </ul>
        </div>
        
    </div>
	<?php include 'include/footer.html';?>

</body>
</html>