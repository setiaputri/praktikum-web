<?php
setcookie('nama_cookie','nilai_cookie');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns ="http://www.w3.org/1999/xhtml" xml:lang="en" lang ="en">
<head>
	<title>Set Cookie</title>
</head>

<body>

<?php 
//mendapatkan nilai cookie
echo $_COOKIE['nama_cookie'];
?>

<p> Tekan Refresh (F5);

</body>
</html>