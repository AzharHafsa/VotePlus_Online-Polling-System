<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Khand&family=Markazi+Text:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script language="JavaScript" src="js/user.js">
</script>
</head><body>
   
<center>
<img src="images/vote3.png" width="120px" height="120px" ><br><br>
<b><font class="name">Vote Plus</font></b>
</center>
<div id="page">
<div id="header">
<h1>Voter Registration </h1>
<div class="news"><marquee behavior="alternate">New polls are up and running. But they will not be up forever! Just Login and then go to Current Polls to vote for your favourate candidates. </marquee></div>
</div>

<div id="container">
<?php
require('connection.php');
//Process
if (isset($_POST['submit']))
{

$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
$myEmail = $_POST['email'];
$myPassword = $_POST['password'];

$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

$sql = mysqli_query($con, "INSERT INTO tbMembers(first_name, last_name, email,password) 
VALUES ('$myFirstName','$myLastName', '$myEmail', '$newpass') ");

die( "You have registered for an account.<br><br>Go to <a href=\"index.php\">Login</a>" );
}

echo "<center><h3>Register an account by filling in the needed information below:</h3></center><br>";
echo '<form action="registeracc.php" method="post" onsubmit="return registerValidate(this)">';
echo '<table align="center"><tr><td>';
echo "<tr><td>First Name:</td><td><input type='text' class='form-control form-control-sm' style='background-color:#EA80FC; font-weight:bold;' name='firstname' maxlength='15' value=''></td></tr>";
echo "<tr><td>Last Name:</td><td><input type='text' class='form-control form-control-sm' style='background-color:#B388FF; font-weight:bold;' name='lastname' maxlength='15' value=''></td></tr>";
echo "<tr><td>Email Address:</td><td><input type='email' class='form-control form-control-sm' style='background-color:#EA80FC; font-weight:bold;' name='email' maxlength='100' id='email'value=''></td><td><span id='result' style='color:red;'></span></td></tr>";
echo "<tr><td>Password:</td><td><input type='password' class='form-control form-control-sm' style='background-color:#B388FF; font-weight:bold;' name='password' maxlength='15' value=''></td></tr>";
echo "<tr><td>Confirm Password:</td><td><input type='password' class='form-control form-control-sm' style='background-color:#EA80FC; font-weight:bold;' name='ConfirmPassword' maxlength='15' value=''></td></tr>";
echo "<tr><td>&nbsp;</td><td><input type='submit' class='btn btn-primary active btn-sm btn-block' name='submit' value='Register Account'/></td></tr>";
echo "<tr><td colspan = '2'><p>Already have an account? <a href='index.php'><b>Login Here</b></a></td></tr>";
echo "</tr></td></table>";
echo "</form>";
?>
</div> 



<div id="footer">
<div class="bottom_addr">&copy; 2020 Vote Plus Polling System. All Rights Reserved</div>
</div>
</div>
</body>
<script src="js/jquery-1.2.6.min.js"></script>
    <script>
    $(document).ready(function(){
      
        $('#email').blur(function(event){
         
            event.preventDefault();
            var emailId=$('#email').val();
                                $.ajax({                     
                            url:'checkuser.php',
                            method:'post',
                            data:{email:emailId},  
                            dataType:'html',
                            success:function(message)
                            {
                            $('#result').html(message);
                            }
                      });
                    
           

        });

    });
   
    </script>
</html>