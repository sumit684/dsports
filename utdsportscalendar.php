<!DOCTYPE html>
<html lang="en">
    <head>

        <title>CALENDAR| Diretorate of Physical Edu and Sports</title>

        <?php include('include/link.html');?>
        <style>
            .calendar th,.calendar td{
                padding:7px;
                border: 1px solid #000000;
                font-family: 'Times New Roman';
            }
            .calendar tr:hover{
                background-color: rgba(192, 193, 193, 0.38)!important;
            }
            .calendar th{
                background-color: #aad5f1;
                
            }
            /*
            .calendar{
            margin-left: 10px;
            margin-right: 10px;
            }
            */

        </style>
    </head>
    <body>
        <?php include 'include/nav.html';?>
        <?php include 'include/header.html';?>

        <?php
        $host="localhost";
        $username="root";
        $password="";
        $dbname="sopedu";
        $conn=mysqli_connect($host,$username,$password,$dbname);
        ?>
        <div style="margin-top:10px;" align="center">
        <font face="Belleza" size=7 color="#000000">UTD SPORTS ASSOCIATION</font><br>
        
        <font face="sans-serif" size=6 color="#000000">SPORTS CALENDAR 2018 &ndash; 2019 </font><br>
        </div>
        <table class="container calendar">
            <tr>
                <th>S.No.</th>	
                <th>Game</th>	
                <th>Date of Selection Trails	</th>
                <th>Proposed Date I/C Tournament</th>
                <th>Status</th>
                <th>Organizing College</th>
                <th>Faculty Incharge</th>
                <th>Cell No.</th>
                <th>Department</th>
            </tr>
            <?php
            $sql="SELECT * FROM `utdsportscalendar` WHERE 1";
            $result=$conn->query($sql);

            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
            <td>".$row["S.No."]."</td>
            <td>".$row["Game"]."</td>
            <td>".$row["Date of Selection Trails"]."</td>
            <td>".$row["Proposed Date I/C Tournament"]."</td>
            <td>".$row["Status"]."</td>
            <td>".$row["Organizing College"]."</td>
            <td>".$row["Faculty Incharge"]."</td>
            <td>".$row["Cell No."]."</td>
            <td>".$row["Department"]."</td>
            </tr>";
                }
            }
            else{
                echo "no. of row=0";
            }
            ?>
        </table>
        <br>
        <center><a href="http://www.dauniv.ac.in/sports/UTD%20Sports%20CALENDAR%202018-2019.pdf" class="btn btn-primary" >Download Calendar</a></center><br>
        <?php include('include/footer.html');?>
    </body>
</html>