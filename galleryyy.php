<?php
$dir= $_GET['option'];
$fo=opendir("images/gallery/$dir");
//$ns = 1;
while($file=readdir($fo) )
{
	if($file!="." && $file!=".." && $file!="Thumbs.db")
	{
		echo "<div class='mySlides'>
		<div class='numbertext' >1/ 36</div>
		<div class='row'>

		<div class='col-md-12 modal-grid'> <img src='images/gallery/$dir/$file' style='width:100%'></div> 
		</div>
		</div>";
	}

}
?>