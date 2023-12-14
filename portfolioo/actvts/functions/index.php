<html>
<head>
	<title> Index </title>
	<style>
	
	container {
		position: absolute;
			top: 50%;	
			left: 25%;
			transform: translateY(-50%);
			text-align: center;
	}

	body {
		background: #000019;
		color: #fffff5;
		text-align: center;
		padding:100px 0;
		}
	
	a {
		color: pink;
	}
	
	.container > div {
		border: 10px solid;
		border-image-source: linear-gradient(90deg, red, blue);
		border-image-slice: 1;
		width: 550px;
		margin: auto;
		
	}
	
		button {
			width: 200px;
			padding: 15px 0;
			text-align: center;
			margin: 20px 10px;
			border-radius: 25px;
			font-weight: bold;
			border: 2px solid #3b3683;
			background: transparent;
			color: #fff;
			cursor: pointer;	
			position: relative;
			overflow: hidden;
		}
		
		span{
			background: #3b3683;
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
	<div class = "container">
		<div class = "center">
			<h1> WELCOME TO INDEX!</h1>
			<button type="button"><a href ="stringfunction.php"><span></span>STRING FUNCTION </a></button>
			<button type="button"><a href ="datefunction.php"><span></span>DATE FUNCTION </a></button>
		</div>
	</div>
</body>
</html>







