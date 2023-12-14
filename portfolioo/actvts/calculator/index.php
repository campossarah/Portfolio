<html>
	<head>
		<meta charset = "UTF-8">
		<meta name="author" content="Sarah Campos">
		<title>Index</title>
	<style>
		
		.lnk {
			position: absolute;
			top: 50%;	
			left: 25%;
			transform: translateY(-50%);
			text-align: center;
		}
		
		button {
			width: 200px;
			padding: 15px 0;
			text-align: center;
			margin: 20px 10px;
			border-radius: 25px;
			font-weight: bold;
			border: 2px solid #009688;
			background: transparent;
			color: #fff;
			cursor: pointer;	
			position: relative;
			overflow: hidden;
		}
		
		span{
			background: #009688;
			height: 100%;
			width: 0%;
			border-radius: 25px;
			position: absolute;
			left: 0;
			bottom: 0;
			z-index: -1;
			transition: 0.5s;
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
	
	
	
	<div class = "lnk">
	<h1> <center>WELCOME TO INDEX!</center></h1>
			<button type="button"><a href="contact.php"><span></span>Contact Info</a></button>
			
			<button type="button"><a href="simpcal.php"><span></span>Simple Calculator</a></button>
			
			<button type="button"><a href="buttoncal.php"><span></span>Button Calculator</a></button>
	</div>
	</body>
</html>