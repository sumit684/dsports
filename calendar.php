<?php
$calendarname= $_GET['name'];

$sportsname = preg_replace('/(\w+)([A-Z])/U', '\\1 \\2', $calendarname);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php include('include/link.html');?>
	<script>
		$(document).ready(function(){
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable tbody tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
	<style type="text/css">
		/*table,td,th{
			border: 1px solid black;
		}
		table {
			border-collapse: collapse;
			}*/
			.calendar th,.calendar td{
				padding:7px;
				border: 1px solid #000000;
				font-family: 'Times New Roman';
				vertical-align: center;
				text-align: center;
			}
			.calendar tr:hover{
				background-color: rgba(192, 193, 193, 0.38)!important;
			}
			.calendar th{
				background-color: #aad5f1;
			}

			.calendar tbody td{
				border-bottom: 1px solid #000000;
				border-left: 1px solid #000000;
				border-right: 1px solid #000000;
				padding: 8px;
			} 
			.calendar thead td{
				padding:0px;
				border: 1px solid #000000;
				vertical-align: center;
				font-family: serif;
			}
			.calendar table{
				margin-top: 10px;
			}
		</style>
	</head>
	<body>
		<?php include 'include/nav.html';?>
		<?php include 'include/header.html';?>
		<div class="container-fluid">
			<div style="margin-top:10px;" align="center">
				<font face="Belleza" size=7 color="#000000">UTD SPORTS ASSOCIATION</font><br>

				<font face="sans-serif" size=6 color="#000000">SPORTS CALENDAR 2018 &ndash; 2019 </font><br>
				<font face="serif" size=5 color="#000000">
					<u><?php echo strtoupper(preg_replace('/[^a-z ]/i','',$sportsname))?></u></font><br>

			</div>
			
			<input class="form-control"  style="width:280px; margin-bottom: 10px;" id="myInput" type="text" placeholder="Search by Sports | Department">

			<?php

			$row = 1;
			if (($myfile = fopen("calendar/$calendarname.csv", "r")) !== FALSE) {

				echo '<table class="calendar table" id="myTable">';

				while (($data = fgetcsv($myfile, 1000, ",")) !== FALSE) {
					$num = count($data);
					if ($row == 1) {
						echo '
						<thead>
						<tr>';
					}else{
						echo '
						<tr>';
					}

					for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
						if(empty($data[$c])) {
							$value = "&nbsp;";
						}else{
							$value = $data[$c];
						}
						if ($row == 1) {
							echo '<th valign="top">'.$value.'</th>
							';
						}else{
							echo '<td>
							'.$value.'
							</td>';
						}
					}

					if ($row == 1) {
						echo '</tr>
						</thead>
						<tbody>';
					}else{
						echo '</tr>';
					}
					$row++;
				}

				echo '</tbody></table></div>';
				fclose($myfile);
			}
			
			if(isset($_GET['pdf'])){
				$pdf = $_GET['name'];
				?>

				<div align="center" style="margin-bottom: 20px;">
					<button id="mybtn" class="btn btn-primary" style="display: block;" onclick="window.open('calendar/<?php echo $pdf;?>.pdf')">Download Offical PDF</a></button>
				</div>
				<?php		
			}
			
			?>
			<div align="center" style="margin-bottom: 20px;">
				<button id="mybtn" class="btn btn-primary" style="display: block;"onclick="hideme();window.print();">Print As PDF</button>
			</div>
			
			<?php include 'include/footer.html'?>
			<script>
				function hideme()
				{
					document.getElementById('mybtn').style.display ='none'; 
					document.getElementById('footer').style.display ='none';
					document.getElementById('header').style.display ='none';
			      setTimeout(function(){ //using setTimeout function
			      	document.getElementById('mybtn').style.display ='block'; 
			      	document.getElementById('footer').style.display ='block';
			      	document.getElementById('header').style.display ='block';
			      }
			      ,10);//Button reappear time in ms
			  }
			</script>
		</body>
		</html>
