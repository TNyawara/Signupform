<?php
include('session.php'); 
if(!isset($_SESSION['login_user']) || !isset($_SESSION['login_password'])){
  echo "Error Invalid password or username";	
  header("location: Loginform.html"); // Redirecting To Home Page 
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Your Home Page</title>
 <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="profile">
 <h3></h3>
 <b id="welcome">Here are your details : <br/><i><?php echo $login_session; ?></i></b>
 <br/><br/>
 <b id="logout"><a href="logout.php">Log Out</a></b>
 </div>
</body>
</html>