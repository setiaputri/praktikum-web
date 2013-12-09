<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Login</title>
</head>

<style type="text/css">

*{font-family: Segoe UI, Tahoma;
margin: auto;
padding:0;

}

#bigbody{
	margin:  20px auto;
	width: 25%;
	height: auto;
	padding: 10px;
	border: 1px solid red
}
body {
    background-color: #55ffCC;
}
.textinput{
width: 100%;
height: 40px;
margin: 5px auto;
}

.btn{
	width: 50%;
	padding:5px;
	background-color: #00ccff;
	border: none;
	color:white;
	font-weight: 800;

}

.btn:hover{
	cursor: pointer;

}

a{
	font-size: 13px;
	color: purple;
}

.textinput{
	background-color: #fafafa;
	border: inset 2px #efefef;
}
</style>

<body>
<div id="bigbody">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myForm" onsubmit="return validateForm()">
		<div align="left"><strong><br>User Name </strong>  
		<input type="text" name="username" class="textinput" id="username" />
		<br>
		<strong>Password </strong> 
		<br>
		<input type="password" name="pass" class="textinput" id="pass"/>
		<input type="submit" name="submit" value="login" class="btn"/>
		<br>
		<input type="checkbox" name="remember" class="checkbox"/>&nbsp;<small>Always Login</small>
	</form>
</div>

<?php 
if (isset($_POST['submit'])) {
	if ((isset($_POST['username'])&&$_POST['username']=='aulia')&&(isset($_POST['pass'])&&$_POST['pass']=='uli')) {
		echo "<center>Welcome, ". $_POST['username']."</center>";
	}
	else{
		echo "<script>alert('Username dan/atau password yang Anda masukkan salah')</script>";
	}
}
 ?>


<script type="text/javascript">

function cek(huruf){
				cek = /^[A-Za-z]{1,}$/;
				return cek.test(huruf);
			}

function validateForm()
{
var username=document.forms["myForm"]["username"].value;
var pass=document.forms["myForm"]["pass"].value;

if ((username==null || username=="")||(pass==null|| pass==""))
  {
  alert("Username dan Password harus diisi");
   document.getElementById("username").focus();
  return false;
  }
  
  if(cekhuruf(username)=== false ||cekhuruf(pass)===false)
  {
  	alert("Username dan password harus berupa huruf");
  	 document.getElementById("username").focus();
  	return false;
  }


 
  return true;
}
</script>
</body>
</html>