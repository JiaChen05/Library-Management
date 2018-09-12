<html>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<head>
<title>Login</title>
<script language="javascript">
function check(form){
	if (form.name.value==""){
		alert("ÇëÊäÈë¹ÜÀíÔ±Ãû³Æ!");form.name.focus();return false;
	}
	if (form.pwd.value==""){
		alert("ÇëÊäÈëÃÜÂë!");form.pwd.focus();return false;
	}	
}
</script>

</head>
<body>

<form name="form1" method="post" action="chklogin1.php">

<p>Login</p>
<p>User:<input type="text" name="username"></p>
<p>Password:<input type="password" name="userkey"></p>
<p><input type="submit" value="submit" onClick="window.close();">
<input type="reset" value="reset"></p>
</form>
</body>
</html>
