<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="green">
	<h1 align="center">FASE 3</h1>
	<div align="center">
		<?php  
			$numero= rand(3,6);
			$victoria= rand(0,$numero-1);
			$retroceder= rand(0,$numero-1);

			if ($retroceder==$victoria) {
				$retroceder=$retroceder-1;
			} elseif ($retroceder<0) {
				$retroceder=$retroceder+2;
			}

			for ($i=0; $i < $numero; $i++) {
				if($victoria==$i) {
					echo "<a href='./9.php'><img src='./img/puerta.jpg' width='250' height='250'></a>-";
				} elseif($retroceder==$i){
					echo "<a href='./7.php'><img src='./img/puerta.jpg' width='250' height='250'></a>-";
				} else{
					echo "<a href='./monstruo.php'><img src='./img/puerta.jpg' width='250' height='250'></a>-";
				}
			 }

			 echo "$retroceder";
			 echo "-$victoria";
		?>
	</div>
</body>
</html>