<?php include("database.php")?>
<?php 

	if(isset($_SESSION['username'])){
		$_SESSION['msg'] ="You must log in first to view in this page";
		
	}
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header("location:login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="style1.css">
	
</head>
<body>
	
	<div class="wrapper">
		<nav>
			<label class="logo">Car Rental</label>
			<ul>
				<li><a class="active" href="home.php"><i class="">Home</i></a></li>
				<li><a href="#"><i class=""></i>About</a></li>
				<li><a href="#"><i class=""></i>Cars</a></li>
				<li><a href="#"><i class=""></i>Rent</a></li>
				<li><a href="#"><i class=""></i>Contact Us</a></li>
			 	<li><a href="login.php?Logout='1'">Logout</a></li>
			</ul>
		</nav>
		<div class="sec1"></div>
		<h2>System</h2>
		<p>
		The Car Rental System is the online facility to book cars online within few clicks only. Some people can not afford to have a car, for those people this system becomes very helpful. This system includes various cars, as per the customer order and comfort, it place the order and deliver the car as per the location within the area. For travelling a long distance, booking can be done via internet service only.This project is give cars on rent. After entering into the platform, user have several option to register on application. User can view all available cars. The User can choose or book a car as per his/her comforts. The rent totally depends upon on the kilometers run by the car during the rent period. The car will be given on rent for long term and long distance.</p>
	</div>
	
	<?php
	if(isset($_SESSION['success'])): ?>
	<div>
		<h4>
			<?php
			echo $_SESSION['success'];
			unset($_SESSION['success']);
			?>
		</h4>
	</div>
<?php endif ?>
<?php if(isset($_SESSION['username'])):?>
	
<?php endif ?>

</body>
</html>

