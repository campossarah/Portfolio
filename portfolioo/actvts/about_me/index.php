<html>
<head>
    <title>Login</title>
	<meta charset= "UTF-8">
	<meta name="author" content = "Sarah Campos">
        <style>
       * {
		   margin: 0;
		   padding: 0;
		   box-sizing: border-box;
	   }
	   
	   body {
		   display: flex;
		   justify-content: center;
		   align-items: center;
		   min-height: 100vh;
		   background: #23242a;
	   }
	   
	   .box {
		   position: relative;
		   width: 400px;
		   height: 420px;
		   background: #1c1c1c;
		   border-radius: 8px;
		   overflow: hidden;
	   }
	   
	   .box::before {
		   content: '';
		   position: absolute;
		   top: -50%;
		   left: -50%;
		   width: 380px;
		   height: 420px;
		   background: linear-gradient(0deg, transparent, transparent, #45f3ff, #45F3FF, #45f3ff);
		   z-index: 1;
		   transform-origin: bottom right;
		   animation: animate 6s linear infinite;
		   animation-delay: -3s;
	   }
	   
	   @keyframes animate {
		   0% {
			   transform: rotate(0deg);
		   }
		   100% {
			   transform: rotate(360deg);
		   }
	   }
	   
	   .box form{
		   position: absolute;
		   inset: 4px;
		   background: #222;
		   padding: 50px 40px;
		   border-radius: 8px;
		   z-index: 2;
		   display: flex;
		   flex-direction: column;
		  
	   }
	   
	   .box form h1{
			color: #FF2770;
			font-family: 'Poppins'
			font-weight: 500;
			text-align: center;
			letter-spacing: 0.1em;
	   }
	   
	   .box form .inputBox {
		   font-family: sans-serif;
		   position: relative;
		   width: 300px;
		   margin-top: 35px;
	   }
	   
	   .box form .inputBox input {
		   position: relative;
		   width: 300;
		   padding: 20px 10px 10px;
		   background: transparent;
		   outline: none;
		   border: none;
		   box-shadow: none;
		   color: #2324a;
		   font-size: 1em;
		   letter-spacing: 0.05em;
		   transition: 0.5s;
		   z-index: 10;
	   }
	   
	    .box form .inputBox span {
			position: absolute;
			left: 0;
			padding: 20px 10px 10px;
			pointer-events: none;
			color: #8f8f8f;
			font-size: 1em;
			letter-spacing: 0.05em;
			transition: 0.5s;
		}
	   
	   .box form .inputBox input:valid ~ span,
	   .box form .inputBox input:focus ~ span {
		   color: #fff;
		   font-size: 0.75em;
		   transform: translateY(-34px);
	   }
	   
	   .box form .inputBox i {
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 2px;
			background: #fff;
			border-radius: 4px;
			overflow: hidden;
			transition: 0.5s;
			pointer-events: none;
	   }
	   
	   .box form .inputBox input:valid ~ i,
	   .box form .inputBox input:focus ~ i {
			height: 44px;
	   }
	   
	   .box form input[type="submit"] {
			border: none;
			outline: none;
			padding: 9px 25px;
			background: #fff;
			cursor: pointer;
			font-size: 0.9em;
			border-radius: 4px;
			font-weight:600;
			width: 100px;
			margin-top: 10px;
	   }
	   
    </style>
</head>
<body>
	<div class="box">
		<form action="process_login.php" method="post">
			<h1>Welcome to Index</h1>
			<div class="inputBox">
				<input type = "text" id="username" name="username" required>
				<span>Username</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" id="password" name="password" required>
				<span>Password</span>
				<i></i>
				</div>
				<input type = "submit" value="Login">
			
				
				
				
				
				
		</form>

	
	
	
	
	
	
	</div>
</body>
</html>
