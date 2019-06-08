<?php
include('session.php'); 
if(!isset($_SESSION['login_user']) || !isset($_SESSION['login_password'])){
  echo "Error Invalid password or username";
  header("location: Loginform.html"); // Redirecting To Home Page 
}

 Sponsor a hungry child Today?<br>
			    
			    <input type="checkbox" name="donation" value="donation">
			    <label for="donate" id="label">Give</label><br> 
			    Ksh<input type="Number" name="Damount" placeholder="Enter Amount" ><br><br>