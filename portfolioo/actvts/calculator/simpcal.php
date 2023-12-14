<html>
	<head>
		<meta charset = "UTF-8">
		<meta name="author" content="Sarah Campos">
		 <title>Simple Calculator</title>
    <style>
		
        body {
           
        }

        form {
            background-color: 75767B;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 500px;
			height: 300px;
            margin: auto;
        }
		
		
		
    </style>
	</head>
	<body>
	<div>
		<form method = "POST">
		<h1><center>SIMPLE CALCULATOR<center></h1>
		
		<table>
			<tr>
				<td> <label for = "num1"> Enter first number: </label></td>
				<br><td> <input type = "number" name = "num1" id = "num1" required ></td>
			</tr>

			<tr>
				<td> <label for = "num2"> Enter second number: </label></td>
				<td> <input type = "number" name = "num2" id = "num2" required ></td>
			</tr>

			
		</table>
			<select id="operation" name="operation">
				  <option value="sum"> + </option>
				  <option value="sub"> - </option>
				  <option value="multiply"> * </option>
				  <option value="div"> / </option>
				</select>
				<button>Calculate</button><input type="reset" value="Clear"> <br>

		<?php
		
		echo "<br><hr>";
			function add ( $num1 , $num2) {
				return $num1 + $num2;
			}
			
			function subtract ( $a , $b) {
				return $a - $b;
			}
			function multiply ( $a , $b) {
				return $a * $b;
			}
			function divide ( $a , $b) {
				return $a / $b;
			}
			
			if ($_SERVER ["REQUEST_METHOD"] == "POST") {
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				
			
			if ($_POST['operation'] == "sum" )
			{
				$result = add($num1,$num2);
				
				echo "<b>RESULT</b>:   "  . $result;
				
			}
			elseif($_POST['operation'] == "sub" )
			{
				$result = subtract($num1,$num2);
				echo "<b>RESULT</b>: "  . $result;
				
			}
			
			elseif($_POST['operation'] == "multiply" ) {
				$result = multiply($num1,$num2);
				echo "<b>RESULT</b>: "  . $result;	
			}
			
			elseif($_POST['operation'] == "div" ) {
				$result = divide($num1,$num2);
				echo "<b>RESULT</b>: "  . $result;
				}
			}
			
		?>

<br><br>
	<center>
			<button type="button"><a href="index.php">Index</a></button>
			<button type="button"><a href="contact.php">Go to Contact Info</a></button>
			<button type="button"><a href="buttoncal.php">Go to Button Calculator</a></a></button>
	</center>
	<br>

</form>
</div>
</body>
</html>