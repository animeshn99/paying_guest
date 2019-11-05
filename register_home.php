<?php
  session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Register!</title>
		<style>
			* {
				margin: 0;
				padding: 0;
				font-family: cursive;
				color: navy;
			}
			body{
				background-color: pink;
			}
			.button {
			  border-radius: 4px;
			  background-color: #f4511e;
			  border: none;
			  color: #FFFFFF;
			  text-align: center;
			  font-size: 28px;
			  padding: 15px;
			  width: 250px;
			  transition: all 0.5s;
			  cursor: pointer;
			  margin: 5px;
			  margin-left: 38%;
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
			  right: -20px;
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
					font-size: 38px;
					text-shadow: 0px 0px 1px cyan;
					padding-top: 4px;
				}
			.form-div {
				min-height: 90vh;
				display: flex;
				justify-content: center;
				align-items: center;
				font-size: 20px;
				margin-top: 25px;
			}
			.mydesign{
				border: 3px solid red;
				width: 80%;
				height: 100%;
				box-shadow: 5px 5px 20px grey;
				padding: 30px;
				padding-top: 30px;
				margin-top: 50px;
			}
			.text_design{
				margin-left: 15%;
				margin-right: 14%;
			}
			.input_design{
				margin-left: 1%;
			}
			.linky{
				font-size: 21px;
				padding: 6px;
				border: 3px solid black;
				width: 200px;
				float: right;
				margin: 7px;
				}
			.welcome{
				width: 200px;
				text-align: left;
				font-size: 21px;
				padding: 6px;
				border: 3px solid black;
				float: left;
				margin: 7px;
			}
		</style>
	</head>
	<body>
		<nav class="nav-bar">
			<a class="welcome">Welcome <?php echo $_SESSION['username'] ?></a>
			<span style="color:navy;">
				Register Your Home!
			</span>
			<a class="linky" href="homepage.php">Return to Home</a>
		</nav>
		<hr style="border: 3px solid black;">
		<section class="form-div">
			<form class="mydesign" action="insert_home.php" method="POST">
				<span class="text_design">Your House Address :</span><input type="text" class="input_design" name="address" /><br><br>
				<span class="text_design">Your City Name  :    </span><input type="text" style="margin-left: 48px;" class="input_design" name="city" /><br><br>
				<span class="text_design">Your State Name :</span><input type="text" style="margin-left: 37px;"class="input_design" name="state" /><br><br>
				<span class="text_design">Type of People Allowed : </span><input type="checkbox" class="input_design" style="margin-left: -25px;" name="type_of_people[]" value="boys"> Boys
	  						 <input type="checkbox" class="input_design" name="type_of_people[]" value="girls"> Girls
	  						 <input type="checkbox" class="input_design" name="type_of_people[]" value="family"> Family<br><br>
	  			<span class="text_design">Number of rooms : </span><input type="text" style="margin-left: 30px;"class="input_design" name="rooms" /><br><br>
	  			<span class="text_design">Price Per room : </span><input type="text" style="margin-left: 57px;"class="input_design" name="price" /><br><br>
				<span class="text_design">Provide AC service : </span><input type="radio" style="margin-left: 15px;"class="input_design" name="ac" value="1"> Yes
	  						 <input type="radio" class="input_design" name="ac" value="0"> No<br><br>
	  			<span class="text_design">Provide Food service : </span><input type="radio" style="margin-left: -1px;"class="input_design" name="food" value="1"> Yes
	  						 <input type="radio" class="input_design" name="food" value="0"> No<br><br>
	  			<button class="button"><span>Register </span></button>
			</form>
		</section>
	</body>
</html>