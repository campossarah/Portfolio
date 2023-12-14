<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Sarah Campos">
	<title> Date Functions </title>
	
	<style>
	h1 {
		font-family: serif;
	}
	
	h3 {
		font-family: times-new-roman;
		
	}
	
	body {
		background: #000019;
		color: #fffff5;
		font-family: monospace;
	}
	
	a {
		color: red;
	}
	.container > div {
		border: 10px solid;
		padding: 25px;
		border-image-source: linear-gradient(68deg, orange, red, green);
		border-image-slice: 1;
		background: #000013;
		width: 550px;
		margin: auto;
	}
	
	</style>
	
</head>
<body>
	<div class = "container">
		<div class = "center">
		
		<?php
			echo ("<h1><center> DATE FUNCTIONS </center></h1>");
			
		/*	echo"<br>";
			echo ("<h3>1. date() function </h3>");
			echo date("l jS \of F Y h:i:s A");
		*/	
			echo ("<br><br><h3>1. checkdate() function </h3>");
			var_dump(checkdate(12,31,-400));
			var_dump(checkdate(2,29,2003));
			var_dump(checkdate(2,29,2004));
			
			echo ("<br><br><h3>2. date_add() function </h3>");
			$date=date_create("2018-12-10");
			date_add($date, date_interval_create_from_date_string("40 days"));
			echo date_format($date, "Y-m-d");
			
			echo ("<br><br><h3>3. date_create_from_format()function </h3>");
			$date=date_create_from_format("j-M-Y","15-Mar-2013");
			echo date_format($date,"Y/m/d");
			
			echo ("<br><br><h3>4. date_create() function </h3>");
			$date=date_create("2018-12-10");
			date_add($date, date_interval_create_from_date_string("1 year + 10 mins + 23 secs"));
			echo date_format($date, "Y-m-d H:i:s");
		
			echo ("<br><br><h3>5. date_default_timezone_get() function </h3>");
			date_default_timezone_set('Asia/Kolkata'); 
			$timezone_object = date_default_timezone_get(); 
				if (strcmp($timezone_object, ini_get('date.timezone'))){ 
					echo 'Script timezone differs from ini-set timezone.'; 
				} else { 
					echo 'Script timezone and ini-set timezone match.'; 
				} 
				
			echo ("<br><br><h3>6. date_diff() function </h3>");
			$date1=date_create("2013-03-15");
			$date2=date_create("2013-12-12");
			$diff=date_diff($date1,$date2);
			$interval = date_diff($date1, $date2); 
			echo $diff->format('%R%a days'); 
	 
			echo ("<br><br><h3>7. date_format() function </h3>");
			$date=date_create("2013-03-15");
			echo date_format($date, "Y/m/d H:i:s");
			
			echo ("<br><br><h3>8.	date() function </h3>"); 
			echo date("l") . "<br>";
			echo date("l jS \of F Y h:i:s A");
			
			echo ("<br><br><h3>9. getdate() function </h3>");
			print_r(getdate());
			
			echo ("<br><br><h3>10. idate() function </h3>");
			echo idate("B") . "<br>";	echo idate("d") . "<br>";
			echo idate("h") . "<br>";	echo idate("H") . "<br>";
			echo idate("i") . "<br>";	echo idate("I") . "<br>";
			echo idate("L") . "<br>";
			echo idate("m") . "<br>";
			echo idate("s") . "<br>";
			echo idate("t") . "<br>";
			echo idate("U") . "<br>";
			echo idate("w") . "<br>";	echo idate("W") . "<br>";
			echo idate("y") . "<br>";	echo idate("Y") . "<br>";
			echo idate("z") . "<br>";	echo idate("Z");
			
			echo ("<br><br><h3>11. localtime()	function </h3>");
			print_r(localtime());
			print_r(localtime(time(),true));
			
			echo ("<br><br><h3>12. mktime() function </h3>");
			echo "Oct 3, 1975 was on a ".date("l", mktime(0,0,0,10,3,1975));
			
			echo ("<br><br><h3>13. strftime() function </h3>");
			echo(strftime("%B %d %Y, %X %Z",mktime(20,0,0,12,31,98))."<br>");
			setlocale(LC_ALL,"hu_HU.UTF8");
			echo(strftime("%Y. %B %d. %A. %X %Z"));
			
			echo "<br><br><h3>14. strtotime() function </h3>";
			$date_string = "2023-10-08 14:30:00";
			$timestamp = strtotime($date_string);
			echo "Timestamp for $date_string: $timestamp";
			
		?>
		<br><br><br>
		<center><a href = "index.php"> Go back to Index </a>
		<center><a href = "stringfunction.php"> Go to String Function </a>
		</div>
	</div>
</body>
</html>