
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
                    echo $n;
                    echo "&nbsp;";
                    echo $name;
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