<html>
	<head>
		<meta charset = "UTF-8">
		<meta name="author" content="Sarah Campos">
		<title>Contact Info</title>
	<style>
		div {
			background-color:  #75767B;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 500px;
			height: 550px;
            margin: auto;
		}	
		em {
			color: white;
		}
		
		button {
			width: 120px;
			height: 60px;
			padding: 15px 0;
			font-size: 12px;
			text-align: center;
			margin: 20px 10px;
			border-radius: 25px;
			font-weight: bold;
			border: 2px solid #009688;
			color: #fff;
			cursor: pointer;	
			position: relative;
			overflow: hidden;
		}
		
		
		button:hover span {
			width: 100%;
		}
		
		button:hover {
			border: none;
		}
	
	</style>
	</head>
	<body>
	<div>
		<h1><center> CONTACT FORM </center></h1>
		<form method = "GET">
			<table>
				<tr>
					<td><label for="name">Name: </td>
					<td><input type="text" id="name" name="name" required></label></td>
				</tr><tr>	
					<td><label for="email">E-mail: </td>
					<td><input type="email" id="email" name="email" required></label></td>
				</tr><tr>	
					<td><label for="lname">Website </td>
					<td><input type="website" id="website" name="website" required></label></td>
				</tr><tr>	
					<td><label for="comment">Comment: </td>
					<td><textarea name="comment" id="comment"  rows="5" cols="40" required></textarea></label></td>
				</tr><tr>	
				<td><label for="gender">Gender: </td>
				</tr>
				
				<tr><td>
					<label for="male"><input type="radio" name="gender" value="Male">
					 Male </label>
					
				</td></tr>
				<tr><td>
					<label for="female"><input type="radio" name="gender" value="Female">
					 Female </label>
					
				</td></tr>
				<tr><td>
					<label for="others"><input type="radio" name="gender" value="Others"></label>
					Others </label>
					
				</td></tr>	
				
				<tr>
					<td><input type ="submit" value="Submit"></td>
					<td><input type="reset" value="Clear"></td>
				</tr>
				
			</table>
		
		<?php
	
		if($_SERVER["REQUEST_METHOD"] == "GET") {}
		
		echo "<hr>";
			
			if(isset ($_GET['name'])) {
				$name = $_GET ['name'];
				echo "Hi <em> " . $name . "</em>! ";
			} 
					
	
			if(isset ($_GET['email'])) {
				$email = $_GET ['email'];
				echo "Your e-mail is <em> " . $email . "</em>. ";
			}
			
			
			if(isset ($_GET['website'])) {
				$website = $_GET ['website'];
				echo "Your website is <em> " . $website . "</em>. ";
			}
			
			
			if(isset ($_GET['comment'])) {
				$comment = $_GET ['comment'];
				echo 'You said <em>" ' . $comment . '"</em>. ';
			}
				
			
			if (isset ($_GET ['gender'])) {
				$gender = $_GET ['gender'];
				echo "And your gender is <em> " . $gender . "</em>. ";	
			}
		
		
		?>
	<br><br>
	<center>
			<button type="button"><a href="index.php">Index</a></button>
			<button type="button"><a href="simpcal.php">Simple Calculator</a></button>
			<button type="button"><a href="buttoncal.php">Button Calculator</a></button>
	</center>
	<br>

	</div>	
	</body>
</html>