<html>
<body>
  <table width="744" border="1">
 <tr><th height="41" scope="row">
 <?php

$fo=opendir("images/gallery");
//$ns = 1;
while($file=readdir($fo) )
{  //$dir_name=preg_replace('/.[^.]*$/', '', basename($file)); 
  //$dir_name = "event1"; 
  if($file!="." && $file!=".." && $file!="Thumbs.db"){
  echo "<a href ='test.php?option=";
  echo basename($file);
  echo "' style='margin-left:10px'>";
  echo basename($file);
  echo " </a>"; 
  echo "<br>";
  
  }
}
  ?>
 </th>
</tr>
<tr> 
   <th height="401" scope="row"> 
    <?php
    @$gall=$_GET['option'];
    if($gall){include('galleryy.php');}
    // switch($gall)
    // {
      // case 'upload':
    //   // include('upload.php');
    //   // break;
    //  case 'gallery':
    //   include('galleryy.php');
    //   break;
    //   case 'event1':
    //   include('galleryy.php');
    //   break;
    // }
//    include('galleryy.php');
    ?>
    </th>
  </tr>
  </table>
  </html>       