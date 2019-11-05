<?php
  session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HomePage</title>
		<style>
			* {
				margin: 0;
				padding: 0;
				font-family: cursive;
			}
			body{
				background-color: pink;
			}
			.button {
				position: relative;
			  border-radius: 4px;
			  /*background-color: #f4511e;*/
			  background-color: darkviolet;
			  border: none;
			  color: #FFFFFF;
			  text-align: center;
			  font-size: 28px;
			  padding: 20px;
			  width: 100%;
			  height:200px;
			  transition: all 0.5s;
			  cursor: pointer;
			  margin-top: 50px;
			}
			.button span {
			  cursor: pointer;
			  display: inline-block;
			  position: relative;
			  transition: 0.5s;
			}

			.button span:after {
			  content: '\00bb';
			  position: absolute;
			  opacity: 0;
			  top: 0;
			  right: -50px;
			  transition: 0.5s;
			}

			.button:hover span {
			  padding-right: 25px;
			}

			.button:hover span:after {
			  opacity: 1;
			  right: 0;
			}
			.nav-bar {
					height: 10vh;
					width: 100%;
					background-color: red;
					color: navy;
					text-align: center;
					font-size: 40px;
					display: flex;
					justify-content: center;
					align-items: center;
					text-shadow: 0px 0px 1px cyan;
				}
			.welcome{
				left: 1%;
				font-size: 30px;
				padding: 10px;
				border: 3px solid red;
				top: 69px;
				text-align: center;
				color: navy;
				text-shadow: 0px 0px 1px pink;
			}
		</style>
	</head>
	<body>
		<nav class="nav-bar">
			<span style="color:navy;">
				Guest Saga!
			</span>
		</nav>
		<div class="welcome">
			<a>Welcome <?php echo $_SESSION['username'] ?></a>
		</div>
		<form action="find_destination.php" method="POST">
			<button class="button"><span>Find Your Destination Here!</span></button>
		</form>
		<form action="register_home.php" method="POST">
			<button class="button"><span>Register Your Home Now!</span></button>
		</form>
	</body>
</html>