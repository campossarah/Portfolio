<html>
<head>
    <title>About Me</title>
	<meta charset= "UTF-8">
	<meta name="author" content = "Sarah Campos">
        <style>
       * {
		   margin: 0;
		   padding: 0;
		   box-sizing: border-box;
	   }
	   
	   body {
		  background: #0c192c;
		  position: relative;
	   }
	     
	  .bubbles {
		  position: relative;
		  display: flex;
	  }
	  
	  .bubbles span {
		  position: relative;
		  width: 30px;
		  height: 30px;
		  background: #4fc3dc;
		  margin: 0 20px;
		  border-radius: 50%;
		  box-shadow: 0 0 0 10px #4fc3dc44,
		  0 0 50px #4fc3dc,
		  0 0 100px #4fc3dc;
		  animation: animate 15s linear infinite;
		  animation-duration: calc(125s / var(--i));
	  }
		
	  @keyframes animate {
		  0% {
			  transform: translateY(100vh) scale(0);
		  }
		  100% {
			  transform: translateY(-10vh) scale(1);
		  }
	  }
	  .container {
		  position: relative;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  flex-wrap: wrap;
		  z-index: 1;
		  overflow: hidden;
	  } 
	  .container .card {
		  color: white;
		  padding:40px;
		  width: 450px;
		  height: 200px
		  box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
		  border-radius: 15px;
		  background: rgba(255, 255, 255, 0.1);
		  justify-content: center;
		  align-items: center;
		  border-top: 1px solid rgba(255, 255, 255, 0.5);
		  border-left: 1px solid rgba(255, 255, 255, 0.5);
		  backdrop-filter: blur(5px);
		  font-family: sans-serif;
		  font-size: 1em;
		  font-weight: bold;
		  letter-spacing: 0.05em;
	  }
	  
	  h1{
		  font-family: 'Poppins';
		  color: #FF2770;
		  text-align: center;
	  }
	  
	  p {
		  font-weight: normal;
		  overflow-wrap: break-word;
	  }
	  .container .card form input[type="submit"],
	  .container .card form button[type="button"] {
			border: none;
			outline: none;
			padding: 10px 10px;
			background: #fff;
			cursor: pointer;
			font-size: 0.9em;
			border-radius: 4px;
			font-weight:600;
			width: 100px;
			margin-top: 10px;
	   }
	   
	   input[type=text], textarea {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
	   }
	   
	   
    </style>
</head>
	<body>
		
			<div class="bubbles">
				<span style="--i:11;"></span><span style="--i:24;"></span><span style="--i:15;"></span><span style="--i:21;"></span>
				<span style="--i:12;"></span><span style="--i:10;"></span><span style="--i:19;"></span><span style="--i:28;"></span>
				<span style="--i:14;"></span><span style="--i:23;"></span><span style="--i:22;"></span><span style="--i:17;"></span>
				<span style="--i:18;"></span><span style="--i:16;"></span><span style="--i:15;"></span><span style="--i:18;"></span>
				<span style="--i:19;"></span><span style="--i:20;"></span><span style="--i:11;"></span><span style="--i:12;"></span>
			</div>
			
		<div class="container">
			<div class="card">
			
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
					<h1>About Me</h1>
					<br>
					<label for="name">Enter your name:</label><br>
					<input type="text" name="name" required>
					<br><br>

					<label for="about_me">Tell something about yourself:</label>
					<textarea name="about_me" required></textarea>
					<br><br>

					<label for="dob">Enter your date of birth:</label><br>
					<input type="date" name="dob" required>
					<br><br>

					<input type = "submit" value = "Submit">
					<a href="index.php"><button type="button">Return</button></a>
				</form>

				<?php
					function getDayOfWeek($date) {
						return date('l', strtotime($date));
					}

					function getZodiacSign($date) {
						list($year, $month, $day) = explode('-', $date);
						
						if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
							return 'Aries';
						} elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
							return 'Taurus';
						} elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
							return 'Gemini';
						} elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
							return 'Cancer';
						} elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
							return 'Leo';
						} elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
							return 'Virgo';
						} elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
							return 'Libra';
						} elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
							return 'Scorpio';
						} elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
							return 'Sagittarius';
						} elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
							return 'Capricorn';
						} elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
							return 'Aquarius';
						} else {
							return 'Pisces';
						}
					}

					

					if ($_SERVER["REQUEST_METHOD"] == "POST") {

						echo'<br><br><hr>';
						
						if(isset ($_POST['name'])) {
							$name = $_POST ['name'];
							echo "<h1>User Information</h1>";
							echo "<p><br>Your name in Capital Letters: " . strtoupper($name) . "</p>";
						} 
						
						if(isset ($_POST['about_me'])) {
							$about_me = $_POST ['about_me'];
							$wordCount = str_word_count($about_me);  
							echo "<p>You said: $about_me</p>";
							echo "<p>Number of Words: $wordCount</p>";		
						} 
						
					   if(isset ($_POST['about_me'])) {
							$dob = $_POST ['dob'];
							echo "<p>Date of Birth: $dob</p>";
						} 
					
						if(isset ($_POST['about_me'])) {
							$dob = $_POST ['dob'];
							$dayOfWeek = getDayOfWeek($dob);
							echo "<p>Day of the Week for Date of Birth: $dayOfWeek</p>";
						} 
						
						if(isset ($_POST['about_me'])) {
							$dob = $_POST ['dob'];
							$zodiacSign = getZodiacSign($dob);
							echo "<p>Your Zodiac Sign: $zodiacSign</p>";
						} 	
					}
				?>
			</div>
		</div>
	</body>
</html>
