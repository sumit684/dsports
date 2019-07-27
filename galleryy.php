<?php
$dir= $_GET['option'];
$fo=opendir("images/gallery/$dir");
$n = 1;
while($file=readdir($fo))
{
    if($file!="." && $file!=".." && $file!="Thumbs.db")
    {
      // echo "<img src='images/gallery/$file'" ;
       //echo" width='150' height='150'/> &nbsp; &nbsp; &nbsp; &nbsp;";
        
     //  $name=preg_replace('/.[^.]*$/', '', basename($file)); 
      //echo $name;
       
       //echo basename($file);
        //   echo "<a href='images/gallery/$file'>";
        //   echo $name + "</a>" ; 
        //   echo "</a>";
        //   echo "yoo";
        //   echo $n;   
        //   echo "<br>";
          echo "<div class=' col-md-3 gallery-grid ' onclick='openModal();currentSlide(";
         echo $n;
         echo ")'>
         <img src='images/gallery/$dir/$file' style='width: 100%; '  class='hover-shadow cursor'>
         <p style='font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  ' align='center'>view</p>
       </div>";
    $n=$n+1;
    }

}
?>

          <!-- <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(7)">
            <img src="images/gallery/7.jpg" style="width: 100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div> -->