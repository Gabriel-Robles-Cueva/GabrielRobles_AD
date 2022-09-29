<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="green">
	<h1 align="center">FASE 1</h1>
	<br><br>
	<div align="center">
	<?php 
		$ale= rand(0,1);
		if ($ale==0) {
			echo "<a href='./7.php'><img src='./img/puerta.jpg' width='250' height='250'></a> -";
		} else {
			echo "<a href='./monstruo.php'><img src='./img/puerta.jpg' width='250' height='250'></a> ' '";
		}
			
		if ($ale==1) {
			echo "<a href='./7.php'><img src='./img/puerta.jpg' width='250' height='250'></a>";
		} else {
			echo "<a href='./monstruo.php'><img src='./img/puerta.jpg' width='250' height='250'></a>";
		}
	?>
	</div>
</body>
</html>