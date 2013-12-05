<html>
	<head>
		<title>Tugas2Tabel</title>
	</head>
	
	<body>
		<?php
			function matriks($baris,$kolom){
				echo "<table border=1>";
				
				for($b=0;$b<$baris;$b++){
					echo "<tr>";
					for($k=0;$k<$kolom;$k++){
						echo "<td>&nbsp</td>";
					}
					echo "</tr>";
				}
				
				echo "</table>";
			}
			
			matriks(3,4);
		?>
	</body>
</html>