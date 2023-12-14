<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Sarah Campos">
	<title> String Functions</title>
	
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
		border-image-source: linear-gradient(90deg, red, blue);
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
			echo ("<h1> <center> STRING FUNCTIONS </center></h1>");
			
			echo ("<br><h3> 1. addcslashes() </h3>");
			$str = "Hello, my name is Sarah.";
			echo $str . "<br>";
			echo addcslashes($str,'m') . "<br>";
			echo addcslashes($str,'e') . "<br>";
			
			
			echo ("<br><h3> 2. addslashes() </h3>");
			$str = "Who's Taehyun.";
			echo addslashes($str) . "This is safe in a database query.";
			
			echo ("<br><br><h3> 3. bin2hex() </h3>");
			$str = "a";
			echo bin2hex($str) . "<br>";
			echo pack("H*", '61') . "<br>";
			
			echo ("<br><h3> 4. chr() </h3>");
			echo chr(52) . "<br>";
			echo chr(052) . "<br>";
			echo chr(0x52) . "<br>";
			
			echo ("<br><h3> 5. chunk_split() </h3>");
			$str = "Hello World";
			echo chunk_split($str,1,":");
			
			echo ("<br><br><h3> 6. convert_cyr_string() </h3>");
			$str = "Hello world! وّه";
			echo $str . "<br>";
			
			echo ("<br><h3> 7. convert_uudecode() </h3>");
			$str = "+2&5L;\@5V]R;&0' '";
			echo convert_uudecode($str);
			
			echo ("<br><br><h3> 8. convert_uundecode() </h3>");
			$str = "Hello World";
			echo convert_uuencode($str);
			
			echo ("<br><br><h3> 9. crc32() </h3>");
			$str = crc32("Hello World!");
			echo "without %u:";
			printf("%u", $str);
						
			echo ("<br><br><h3>10. echo() function</h3>");
			$str="Who's Jai Kim?";
			echo $str;
			echo "<br />";
			echo $str . "<br/> I don't know!";			
						
			echo ("<br><br><h3> 11. fprintf() </h3>");
			$str = "Hello";
			$number = 123;
			$file = fopen("test.txt", "w");
			echo fprintf($file, "%s world. Day number %u",$str, $number);

			echo ("<br><br><h3> 12. get_html_translation_table() </h3>");
			print_r(get_html_translation_table());
			echo "<br>";
			print_r(get_html_translation_table(HTML_ENTITIES));
			
			echo ("<br><br><h3>13. hebrevc() function </h3>");
			echo hebrev("החככפּאגנפקששׂתםד");
			
			echo ("<br><br><h3> 14. html_entity_decode() </h3>");
			$str= "Jane &amp; &#039; Tarzan&#039;";
			echo html_entity_decode($str);
			echo "<br>";
			echo html_entity_decode($str, ENT_QUOTES);
			echo "<br>";
			echo html_entity_decode($str, ENT_NOQUOTES);
			
			echo ("<br><br><h3> 15. htmlentities() </h3>");
			$str = "Jane &'Tarzan'";
			echo htmlentities($str, ENT_COMPAT);
			echo "<br>";
			echo htmlentities($str, ENT_QUOTES);
			echo "<br>";
			echo htmlentities($str, ENT_NOQUOTES);
			echo "<br>";
			
			echo ("<br><h3> 16. htmlspecialchars() </h3>");
			$str = "Jane &'Tarzan'";
			echo htmlspecialchars($str, ENT_NOQUOTES);
			
			echo ("<br><br><h3> 17. implode() </h3>");
			$arr = array ('Hello', 'World!','Beautiful','Day!');
			echo implode(" ",$arr);
			
			echo ("<br><br><h3> 18. levenshtein() </h3>");
			echo levenshtein("Hello World","ello World");
			echo "<br>";
			echo levenshtein("Hello World","ello World", 10,20,30);
			
			echo ("<br><br><h3> 19. localeconv() </h3>");
			setlocale(LC_ALL, "US");
			$locale_info = localeconv();
			print_r($locale_info);
			
			echo ("<br><br><h3> 20. ltrim() </h3>");
			$str = " Hello World!";
			echo "Without ltrim: " . $str;
			echo "<br />";
			echo "With ltrim: ".ltrim($str);
			
			echo ("<br><br><h3> 21. md5() </h3>");
			$str = "Hello";
			echo md5($str);
		
			echo ("<br><br><h3> 22. md5_file() </h3>");
			$filename = "test.txt";
			$md5file = md5_file($filename);
			echo $md5file;
			
			echo ("<br><br><h3> 23. metaphone() </h3>");
			echo metaphone("world");
			
			echo ("<br><br><h3>24. money_format() function </h3>");
			$number = 1234.56;
		/*	setlocale(LC_MONETARY, "en_US");
			echo money_format("The price is %i", $number);
		*/
			echo "The price is " . number_format ($number);
	
			echo ("<br><br><h3> 25. number_format() </h3>");
			echo number_format("1000000");
			echo "<br/>";
			echo number_format("1000000",2);
			echo "<br/>";
			echo number_format("1000000",2,",",".");
			
			echo ("<br><br><h3> 26. ord() </h3>");
			echo ord("h")."<br />";
			echo ord("hello")."<br />";
			
			echo ("<br><h3> 27.	print() </h3>");
			$str = "Who's Kai Jim?";
			print $str;
			print "<br />";
			print $str."<br />I don't know!";
			
			echo ("<br><br><h3> 28.	printf() </h3>");
			$str = "Hello";
			$number = 123;
			printf("%s world. Day number %u",$str,$number);
			
			echo ("<br><br><h3> 29.	setlocale() </h3>");
			echo setlocale(LC_ALL,"En-Us");
			echo "<br />";
			echo setlocale(LC_ALL,NULL);
			
			echo ("<br><br><h3> 30.	sha1() </h3>");
			$str = "Hello";
			echo sha1($str);
			
			echo ("<br><br><h3> 31.	sha1_file() </h3>");
			$filename = "test.txt";
			$sha1file = sha1_file($filename);
			echo $sha1file;
			
			echo ("<br><br><h3> 32.	soundex() </h3>");
			$str = "hello";
			echo soundex($str);
			
			echo ("<br><br><h3> 33.	sprintf() </h3>");
			$str = "Hello";
			$number = 123;
			$txt = sprintf("%s world. Day number %u",$str,$number);
			echo $txt;

			echo ("<br><br><h3> 34.	sscanf() </h3>");
			$string = "age:30 weight:60kg";
			sscanf($string,"age:%d weight:%dkg",$age,$weight);
			var_dump($age,$weight);
			
			echo "<br><br><h3>35.strlen()</h3>";
			$str = "Hello, World!";
			$length = strlen($str);
			echo "The length of the string is: $length";
			
			echo "<br><br><h3>36. strtoupper()</h3>";
			$str = "hello, world!";
			$uppercase_str = strtoupper($str);
			echo "Uppercase string: $uppercase_str";
			
			echo "<br><br><h3>37. strtolower()</h3>";
			$str = "Hello, World!";
			$lowercase_str = strtolower($str);
			echo "Lowercase string: $lowercase_str";
			
			echo "<br><br><h3>38. strrev</h3>";
			$str = "hello";
			$reversed_str = strrev($str);
			echo "Reversed string: $reversed_str";
			
			echo "<br><br><h3>39. str_word_count()</h3>";
			$text = "This is a simple example";
			$wordCount = str_word_count($text);
			echo "Number of words: $wordCount";
			
			echo "<br><br><h3>40. substr</h3>";
			$str = "Hello, world!";
			$extracted_str = substr($str, 0, 5);
			echo "Extracted string: $extracted_str";
		
		?>
		<br><br><br>
		<center><a href = "index.php"> Go back to Index </a>
		<center><a href = "datefunction.php"> Go to Date Function </a>
		</div>	
	</div>
</body>
</html>