<?php
session_start();
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Khand&family=Markazi+Text:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head><body bgcolor="tan">  
<center>
<img src="images/vote3.png" width="120px" height="120px" ><br><br>
<b><font class="name">Vote Plus</font></b>
</center>
<div id="page">
<div id="header">
<h1>Logged Out Successfully </h1>
<p align="center">&nbsp;</p>
</div>
<?php
session_destroy();
?>
<div id="container">
You have been successfully logged out.<br><br><br>
Return to <a href="index.php">Login</a>
</div>
<div id="footer">
<div class="bottom_addr">&copy; 2020 Vote Plus Polling System. All Rights Reserved</div>
</div>
</div>
</body></html>