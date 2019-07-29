
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Gallery | Diretorate of Physical Edu and Sports</title>
    <?php include('include/link.html');?>
    <style>
        body{
            /* font-family:'Times New Roman', Times, serif; */
        }
        /* html {
            box-sizing: border-box;
        } */

        /* *, *:before, *:after {
            box-sizing: inherit;
        } */

        .column {
            float: left;
            width: 30%;
            margin-bottom: 50px;
            padding: 0 30px;
            margin-left: 20px;
        }

        @media screen and (max-width: 650px) {
            .column {
                 width: 100%; 
                display: block;
                padding:0px 0px;
                margin-left: 0px;
            }
            body{
            
            overflow-x:hidden;
             }
            /* iframe{
                position:relative;
                left:-15%;
            }  */
        }
        .card:hover{
            box-shadow: 2px 2px 5px 2px #bdc3c7;
        }

        .card {
            box-shadow: 2px 2px 20px 8px #bdc3c7 ;    /*#8395a7*/
            border-radius: 0px;
            transition: 0.3s ease-in;
        }

        .container {
            padding: 0 20px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }
        body{
            background-color:#ecf0f1;
            overflow-x:hidden;
        }
        .button {
            border: none;
            border-radius: 20px;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #1E90FF; 
            /* #e67e22; */
            text-align: center;
            cursor: pointer;
            width: 100%;
        }
        .card img{
            padding:7px;
        }
        .button:hover {
            background-color: #0c579f;
        }
        .ok {
            padding-left: 80px;
            padding-right: 80px;
        }
        /*.container h2{
            font-size:1.5rem;
        } */
    </style>
</head>
<body>

   
    <?php include 'include/nav.html';?>
    <?php include 'include/header.html';?>
    <!--    ***********************************GALLERY************************-->
    <div >
    <div style="text-align: center; padding-top: 20px; padding-bottom: 20px; font-family: none;"  > 
        <h1 style="color:black;"> SPORTS GALLERY </h1>
        <hr> 
    </div>
    <div class="row ok">


        <?php

        $fo=opendir("images/gallery");
        //$ns = 1;
        while($file=readdir($fo) )
        {  //$dir_name=preg_replace('/.[^.]*$/', '', basename($file)); 


    if($file!="." && $file!=".." && $file!="Thumbs.db"){

        $dir_name = basename($file);

        $fofo=opendir("images/gallery/$dir_name");
        while($filefile=readdir($fofo)){
            if($filefile!="." && $filefile!=".." && $filefile!="Thumbs.db"){ $photo=$filefile; break;}
        }


        echo "<div class='column'>";
        echo "<a href ='tout.php?option=";
        echo basename($file);
        echo "' style='margin-left:10px ; color:black; text-decoration:none; '>";

        echo  "   <div class='card'>
        <img src='images/gallery/$dir_name/$photo' alt='Jane' style='width:100%;  '> 
        <div class='container'>
        <h2>";
        echo basename($file);
        echo "</h2><p><button class='button' >View more</button></p> </div></div>";
        
        echo "</a></div>";
    }
}
?>
</div>
<?php include 'include/footer.html';?>
</div>

<!--***********************************GALLERY***************************-->


</body>
</html>
