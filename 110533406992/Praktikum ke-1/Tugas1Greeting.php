<html>
	<head>
		<title>Tugas1Greeting</title>
	</head>
	
	<body>
		<?php
			function greeting($jam){
				if($jam>4 && $jam<12){
					return "Selamat Pagi";
				}else if($jam>11 && $jam<14){
					return "Selamat Siang";
				}else if($jam>13 && $jam<19){
					return "Selamat Sore";
				}else if($jam>18 && $jam<24){
					return "Selamat Malam";
				}else{
					return "";
				}
			}
			echo greeting(10);
		?>
	</body>
</html>