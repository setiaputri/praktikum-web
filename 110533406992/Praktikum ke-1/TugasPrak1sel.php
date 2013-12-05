<html>
	<head>
		<title>TugasPrak1Tabel</title>
	</head>
	
	<body>
		<?php
			function matriks($sel,$kolom){
				$i=1;
				echo "<table border=1>";
				
				$baris = ($sel/$kolom);
				for($b=0;$b<$baris;$b++){
					echo "<tr>";
					for($k=0;$k<$kolom;$k++){
						if($i<=$sel){
							echo "<td>".$i."</td>";
							$i++;
						}
					}
					echo "</tr>";
				}
				
				echo "</table>";
			}
			
			matriks(10,4);
		?>
	</body>
</html>