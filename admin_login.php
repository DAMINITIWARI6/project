<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>


	<style>
		body
	{
		width: 100%;
		height: 100%;
		
        background-image: url("image/reg.png") ;


	}

	div.container
{
	
	
	width: 300px;
	height: 280px;
	background-color: rgba(0,0,0,0.65);
	margin: 0 auto;
	margin-top: 80px;
	padding-top: 10px;
	padding-left: 50px;
	border-radius: 15px;
	border-top-style: 
	color: white;
	font-weight: bolder;
	


}

div.container input[type="text"]
{
	width: 210px;
	height: 30px;
	border: 0;
	border-radius: 5px;
	padding-left: 5px;


}
div.container input[type="password"]
{
	width: 210px;
	height: 30px;
	border: 0;
	border-radius: 5px;
	padding-left: 5px;

}
div.container input[type="submit"]
{
	width: 100px;
	height: 30px;
	border: 0;
	border-radius: 5px;
	font-weight: bolder;
	font-size: "50";



}
p{
	color: white;
}

	</style>
</head>
<body>
   
			<div class="background_wallpaper">
				
			<div class="header-content">
				<header>
				<h1 style="text-align:center">SAFAR TOURS AND TRAVELS</h1><br><br>
			</header>
			</div>
			<div class="container">

				<P>(ADMIN LOGIN)</P>
				<div class="hello">
			<FORM method="POST" action="adminvalid.php">
				<div class="user"><p>
				USERNAME:</p>
				</div>
				<input type="text" placeholder="admin ID......" name="username" required><br><br><p>
				PASSWORD:</p>
				<input type="PASSWORD" placeholder="password...." name="pass" required><br><br>
				<input type="submit" name="login" value="login"><br><br>
				
				
			</FORM>
				</div>
				

			</div>
			</div>





</body>
</html>