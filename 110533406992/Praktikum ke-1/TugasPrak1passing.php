<html>
	<head>
		<title>Tugas2Tabel</title>
	</head>
	
	<body>
		<?php
			function swap(&$a,&$b){				
				$c=$a;
				$a=$b;
				$b=$c;
				echo $a." dan ".$b;
			}
			
			$p=5;
			$q=10;
			swap($p,$q);
			
			echo"<br>".$p." dan ".$q;
		?>
	</body>
</html>