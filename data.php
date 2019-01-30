
<?php 
$conn=mysqli_connect("localhost","root","","ietstudents201819");
$search="SUMIT KUMAR SINGH";
$course="";
$x=0;
if( isset($_POST['courses']) && is_array($_POST['courses']) ) {
    foreach($_POST['courses'] as $courses) {
        if($x>0)
        {
            $course.=" OR ";
        }
        $course.="Course='".$courses."'";
        $x++;
        
        
    }
}
  $sql="SELECT sno, Name, Enrollno, Course FROM students WHERE ".$course;
$result=$conn->query($sql);
echo "<table>";
$x=0;
$y=0;
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        if($row["Name"]==$search)
        {
            echo"<tr><td>".$row["Enrollno"]."</td><td>".$row["Name"]."</td></tr>";
            $x++;
        }
        $y++;
    }
}
else{
    echo "no. of row=0";
}
if($x==0)
    {echo "Not found in database";}
echo "</table>";
echo "searched total ".$y." data";

?>
