<html>
	 <title>Button Calculator</title>
		<meta charset = "UTF-8">
		<meta name="author" content="Sarah Campos">
    <style>
        body {
        }

        form {
            background-color: #75767B;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 500px;
			height: 300px;
            margin: auto;
    </style>
	</head>
	<body>
	<div>
		<form method = "POST">
			<h1><center>BUTTON CALCULATOR<center></h1>
		
			<table>
				<tr>
					<td><label for="num1">Enter first number:</label></td>
					<td><input type="number" id="num1" name="num1" required></td>
				</tr>
				<tr>
					<td><label for="number">Enter second number:</label></td>
					<td><input type="number" id="num2" name="num2" required></td>
				</tr><tr>
					<td><input type="submit" name="operation" value = " + ">
						<input type="submit" name="operation" value = " - ">
						<input type="submit" name="operation" value = " x ">
						<input type="submit" name="operation" value = " / "></td>
				</tr>
				<tr>
					<td><input type="reset" value="Clear"> </td>
				</tr>
			</table>
		
		
		<?php
		echo "<hr>";
		function add ($a, $b){
			return $a + $b;
		}
		
		function sub ($a, $b){
			return $a - $b;
		}
		
		function mul ($a, $b){
			return $a * $b;
		}
		
		function div ($a, $b){
			return $a / $b;
		}
		
		
		
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
				
				if($_POST['operation'] == ' + ') {
				$result = add($num1, $num2);
				echo "Result: " . $result;
				}
				
				if($_POST['operation'] == ' - ') {
				$result = sub($num1, $num2);
				echo "Result: " . $result;
				}
			
				if($_POST['operation'] == ' x ') {
				$result = mul($num1, $num2);
				echo "Result: " . $result;
				}	
			
				if($_POST['operation'] == ' / ') {
				$result = div($num1, $num2);
				echo "Result: " . $result;
				}
		}
		
		?>
		
		
<br><br>
	<center>
			<button type="button"><a href="index.php">Index</a></button>
			<button type="button"><a href="contact.php">Go to Contact Info</a></button>
			<button type="button"><a href="simpcal.php">Go to Simple Calculator</a></a></button>
	</center>
	<br>

</form>
</div>
		
		
	</body>
</html>