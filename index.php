<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Khand&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script language="JavaScript" src="js/user.js">
</script>
</head>
<body class="bg">
<center>
<img src="images/vote3.png" width="120px" height="120px" ><br><br>
<b><font class="name">Vote Plus</font></b>
</center>
<div id="page">
<div id="header">
<h1>Voter Login </h1>
<div class="news"><marquee behavior="alternate">New polls are up and running. But they will not be up forever! Just Login and then go to Current Polls to vote for your favourate candidates.</marquee></div>
</div>
<div id="container">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" >
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" >
<tr>
<td >Username/Email</td>
<td >:</td>
<td ><input name="myusername" placeholder="Your email" style='background-color:#EA80FC;' class="form-control form-control-sm" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword"  placeholder="Your Password" style='background-color:#B388FF; ' class="form-control form-control-sm" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" class="btn btn-primary active btn-sm btn-block" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<center>
<br>Not yet registered? <a href="registeracc.php"><b>Register Here</b></a>
</center>
</div>
<div id="footer">
<div class="bottom_addr">&copy; 2020 Vote Plus Polling System. All Rights Reserved</div>
</div>
</div>
	

</body></html>

<!--  




<div class="mainBox">
	<div class=""><h1>Voter Login </h1></div>
	<div class=""><marquee behavior="right">New polls are up and running. But they will not be up forever! Just Login and then go to Current Polls to vote for your favourate candidates. </marquee></div>
	<div id="container">
		
		<form name="form1" method="post" action="checklogin.php" onSubmit="return loginValidate(this)">
		
		<table class="logTable"  cellpadding="3" cellspacing="1">
		<tr>
		<td width="78">Username/Email</td>
		<td width="6">:</td>
		<td width="294"><input name="myusername" type="text" id="myusername"></td>
		</tr>
		<tr>
		<td>Password</td>
		<td>:</td>
		<td><input name="mypassword" type="password" id="mypassword"></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" name="Submit" value="Login"></td>
		</tr>
		</table>
		</td>
		</form>
		
		<center>
		<br>Not yet registered? <a href="registeracc.php"><b>Register Here</b></a>
		</center>
	</div>

	<div>
	<div class="bottom_addr">&copy; 2020 Vote Plus Polling System. All Rights Reserved</div>
	</div>
</div>
	-->