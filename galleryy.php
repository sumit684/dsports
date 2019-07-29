<?php
$dir= $_GET['option'];
$fo=opendir("images/gallery/$dir");
$n = 1;
while($file=readdir($fo))
{
  if($file!="." && $file!=".." && $file!="Thumbs.db")
  {
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