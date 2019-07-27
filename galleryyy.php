<?php
$dir= $_GET['option'];
$fo=opendir("images/gallery/$dir");
//$ns = 1;
while($file=readdir($fo) )
{
    if($file!="." && $file!=".." && $file!="Thumbs.db")
    {
      // echo "<img src='images/gallery/$file'" ;
       //echo" width='150' height='150'/> &nbsp; &nbsp; &nbsp; &nbsp;";
        
       //$name=preg_replace('/.[^.]*$/', '', basename($file)); 
      //echo $name;
       
       //echo basename($file);
        //   echo "<a href='images/gallery/$file'>";
        //   echo $name + "</a>" ; 
        //   echo "</a>";
        //   echo "yoo";
        //   echo $n;   
        //   echo "<br>";
    //       echo "<div class=' col-md-2 gallery-grid ' onclick='openModal();currentSlide(";
    //      echo $n;
    //      echo ")'>
    //      <img src='images/gallery/$file' style='width: 100%; '  class='hover-shadow cursor'>
    //      <p style='font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  ' align='center'>view</p>
    //    </div>";

    echo "<div class='mySlides'>
    <div class='numbertext' >1/ 36</div>
    <div class='row'>

      <div class='col-md-12 modal-grid'> <img src='images/gallery/$dir/$file' style='width:100%'></div> 
    </div>
    </div>";

   // $ns=$ns+1;
    }

}
?>