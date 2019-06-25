
<?php

// define variables and set to empty values
	$large = ($_POST["largepizza"]);
  	$small = ($_POST["smallpizza"]);
  	$medium = ($_POST["mediumpizza"]);
  	$toppings = ($_POST["tops"]);
  	$donation = ($_POST["donations"]);

  	if (empty($_POST["largepizza"])){
	$large=0;
	}

  	if (empty($_POST["smallpizza"])){
	$small=0;
	}

  	if (empty($_POST["mediumpizza"])){
	$medium=0;
	}

	if (empty($_POST["tops"])){
	$toppings=0;
	}

	if (empty($_POST["donations"])){
	$donation=0;
	}

function totals(){
	#$GLOBALS['large','small','medium','toppings'];
	$large = ($_POST["largepizza"]);
  	$small = ($_POST["smallpizza"]);
  	$medium = ($_POST["mediumpizza"]);
  	$donation = ($_POST["donations"]);
  	$sum=0;
	$sum = $sum+$large*1100+$small*800+$medium*550+$donation;
	return $sum;
}


if ($toppings == "Meat"){

$Totalcost = totals()+200;
}
else if($toppings == "Vegetables"){
$Totalcost = totals()+100;	
}
else if($toppings == "Notops"){
$Totalcost = totals()+0;	
}
else{
$Totalcost = totals();	
}

if($large<0 ||$small<0||$medium<0){
	$Totalcost="Invalid entry";
}
?>
<!--<div id="msg" name="message">Congratulations You Sign Up successfully!!</div>-->

<?php
function connect(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webregistration";
	$link=
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    return $link;
}}
session_start();

function setData($sql_registerform){ 
	$link = connect();
	if(mysqli_query($link,$sql)){
		 $last_id = mysqli_insert_id($link);
		  return $last_id;
	 }
	else{ return false; }}
$date_created=date('Y-m-d h:i:s');

#$sql = "INSERT INTO trial1 (Name, Email) VALUES ('".$yourFirstName."', '".$yourEmail."')";
$yourstatus = 0;
$sql = "INSERT INTO `orders`(`user_id`,`date_created`, `amount`, `status`,`donation`) VALUES ('".$last_id."','".$date_created."', '".$Totalcost."','".$yourstatus."')";

if ($conn->query($sql) === TRUE) {
    #echo "Registration Complete";
	header("Location: message.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>






<!DOCTYPE html>
<html>
	<head> </head>
	<style type="text/css">
		body
{
    background: url(profile.jpg);
    background-size: cover;
}
a
{
    color: yellow;
    font-family:Tahoma, Geneva, sans-serif;
    margin-left: 30px;
}
#checkout
{
    background: rgba(44,62,80,0.7);
    padding: 40px;
    
    height: 200px;
    margin-left: 180px;
    margin: 0 auto;
    margin-top: 120px;
    width: 240px;
}
h2
{
    margin-top: 50px;
    margin-left: 10px;
}
#accept
{
    border: none;
    width: 190px;
    background: white;
    color: #000;
    font-size: 16px;
    line-height: 25px;
    padding: 10px 0;
    border-radius: 15px;
    cursor: pointer;
}
#accept:hover
{
    color: #fff;
    background-color: black;
}
	</style>
	
	<body>
		<div id='checkout'>
			<a style="text-decoration: none">Here is your order<br> 
			<?php
			if($large<0 ||$small<0||$medium<0){
				echo "<br>";
				$Totalcost="Invalid entry. Order cannot be negative. Re-order";
				echo $Totalcost;
				}

			else if ($Totalcost<201){
				$err="Invalid entry.Please select an Item";
				echo $err;
			}

			else if($large>0 ||$small>0||$medium>0){
				echo "<br>";
				echo $large; 
				echo " Large Pizza";
				echo "<br>";
				echo $small;
				echo " Small Pizza";
				echo "<br>";
				echo $medium;
				echo " Medium Pizza";
				echo "<br>";
				echo "Donation ";
				echo $donation;
				echo "<br>";
				echo "Your total is";
				echo " Ksh ";
				echo $Totalcost;
				}						
			?>
			<form action="profile.php" method="POST">
				<input type="submit" id="accept" value="Done" /><!--onclick=""--><br><br>
			</form>
		</div>
	</body>
</html>