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
	
<style>

body
{
    font-family: Tahoma, Geneva, sans-serif;
    color: #fff;
    background: url(profile.jpg);
    background-size: cover;
}
.signup
{
	
    color: yellow;
    background:rgba(44, 62, 80, 0.7);
	width:100%;
	height:auto;
	
	
}
form
{
    width: 100%;
    text-align: center;
}
input
{
    
    
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-family: 'Play', sans-serif;
    font-size: 16px;
    font-weight: 200px;
    padding: 10px 0;
    transition: border 0.5s;
    outline: none;
    color: #fff;
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
h2
{
    color: #000;
    
}
::placeholder {
    color:aliceblue;
    opacity: 0.8; /* Firefox */
}
footer{
	height: auto;
	min-height: 100px;
}

</style>

	 <title>Home</title>
	 <!--<link href="profile.css" rel="stylesheet" type="text/css" />-->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-	  ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		 <div class="congs">
		 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">Dashboard</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">

				      <li class="nav-item active">
				        <a class="nav-link" href="#">Order  <span class="sr-only">(current)</span></a>
				      </li>

				      <li class="nav-item active">
				        <a class="nav-link" href="#">Welcome <?php echo $login_sessions;?></a>
				      </li>

				      <li class="nav-item active">
				        <a class="nav-link" href="logout.php">Logout  <span class="sr-only">(current)</span></a>
				      </li>
				     
				      </li>
				      
				    </ul>
				  </div>
			</nav>
		 </div>

		 <div class="signup">
				<form action="order.php" method="POST">
			    <h3 style="color: #fff;">SELECT YOUR PREFERRED ITEMS</h3>
			    <label for="largepizza" id="label">Large Pizza	</label><br>
			    <input type="Number" name="largepizza" placeholder="Enter Number of Pizza" ><br><br>
			    <label for="mediumpizza" id="label">Medium Pizza	</label><br>
			    <input type="Number" name="mediumpizza" placeholder="Enter Number of Pizza" ><br><br>
			    <label for="smallpizza" id="label">Small Pizza	</label><br>
			    <input type="Number" name="smallpizza" placeholder="Enter Number of Pizza" ><br><br>

			    <h3 style="color: #fff;">EXTRA TOPPINGS</h3>
				<input type="radio" class="data" name="gender" value="Meat" />Meat</br><br>
				<input type="radio" class="data" name="gender" value="Vegetables" />Vegetables</br><br>


			    <input type="submit" id="accept" value="Order" /><!--onclick=""--><br><br>
			        
			   
			    </form>

    	</div>
    <footer>
		<p>Copyrights reserved</p>
		<p>Contact information: <a href="mailto:lester.abiniza@strathmore.edu">lester.abiniza@strathmore.edu</a>.</p>
	</footer>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>