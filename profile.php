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
 <link href="profile.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="cong">
 <h2 style="color: white">Welcome</h2>
 <b id="welcome">Here are your details : <br/><i><?php echo $login_sessions; ?></i></b>
 <br/><br/>
 <b id="logout"><a href="logout.php">Log Out</a></b>
 </div>
</body>
</html>