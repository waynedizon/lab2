<!DOCTYPE HTML>
<html>
    <head>
        <title>Portfolio</title>
		  <link rel="stylesheet" href="style.css">
		  <link rel="icon" type="image/x-icon" href="resources/images/favicon.ico">
		  <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>	
		<?php
		$txt = "W3Schools.com";
		echo "I love " . $txt . "!";
		$txt1 = "Guess my Age";
		$txt2 = "my birth year is 2004";
		$x = 2024;
		$y = 2004;

		echo "<p>" . $txt1 . "</p>";
		echo "Study PHP at " . $txt2 . "<br>";
		echo $x - $y;
		?>
		
		
		
		<button id="btn">Click Me!</button>
		<p id="demo"></p>
		<p id="demo"></p>
		<p>Wait 3 seconds (3000 milliseconds) for this page to change.</p>
		<h1 id="demo"></h1>
		
		<p><button onclick="moveSquare()">Move Me</button></p> 

		<div id="container">
		<div id="animate"></div>
		</div>

		<h2>JavaScript Prompt</h2>

		<button onclick="myFunction()">Like my website?</button>

		<p id="demo"></p>
		
	<script src="script.js">
	</script>
	
	</body>
</html>
