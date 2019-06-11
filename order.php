<?php
// define variables and set to empty values
	$large = ($_POST["largepizza"]);
  	$small = ($_POST["smallpizza"]);
  	$medium = ($_POST["mediumpizza"]);
  	 $toppings = "";

function totals(){
	#$GLOBALS['large','small','medium','toppings'];
	$large = ($_POST["largepizza"]);
  	$small = ($_POST["smallpizza"]);
  	$medium = ($_POST["mediumpizza"]);
	$sum = $large*1100+$small*800+$medium*550;
	return $sum;
}

$Totalcost = totals();

/*
function totals($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/
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
	</style>
	
	<body>
		<div id='checkout'>
			<a style="text-decoration: none">Here is your order <?php
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
			echo "Ksh";
			echo $Totalcost;						
			?>
		</div>
	</body>
</html>