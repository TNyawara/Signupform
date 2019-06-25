<?php
// define variables and set to empty values
	$large = ($_POST["largepizza"]);
  	$small = ($_POST["smallpizza"]);
  	$medium = ($_POST["mediumpizza"]);
  	$toppings = ($_POST["tops"]);
function totals(){
	#$GLOBALS['large','small','medium','toppings'];
	$large = ($_POST["largepizza"]);
  	$small = ($_POST["smallpizza"]);
  	$medium = ($_POST["mediumpizza"]);
	$sum = $large*1100+$small*800+$medium*550;
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

/*
function totals($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/
?>

<?php

#function to connect to the database
function connect(){
		$dbserver = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "pizza_system";
		$link  = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("Could not connect");
		return $link;
	}


#function to fetch data from sql
function getData($sql){

		$link = connect();
		$result = mysqli_query($link,$sql);
		$rows = array();
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$rows[] = $row;
		}
		return $rows;
	}

	
#function to fetch last id entered to database
	function setData($sql){
		
		$link = connect();

		if(mysqli_query($link,$sql)){
			$last_id = mysqli_insert_id($link);
			return $last_id;
		}else{
			return false;
		}


	}

?>

<!DOCTYPE html>
<html>
	<head>
	</head>
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
			<a style="text-decoration: none">Here is your order <?php
			if($large<0 ||$small<0||$medium<0){
				echo "<br>";
				$Totalcost="Invalid entry. Order cannot be negative. Re-order";
				echo $Totalcost;
				}
			else if($large>=0 ||$small>=0||$medium>=0){
				echo "<br>";
				echo $large; 
				echo "Large Pizza";
				echo "<br>";
				echo $small;
				echo "Small Pizza";
				echo "<br>";
				echo $medium;
				echo "Medium Pizza";
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