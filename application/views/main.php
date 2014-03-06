<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>random word generator</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<div id="container">
	<h3>random word (attempt #<?php 
		if(isset($count)){
			echo $count;
		}
		else{
			echo "0";
		}
		?>)</h3>
	<h1><?php
	if (isset($word)) {
		echo $word;
	}
	else {
		echo "ABCDEFGHIJKLMN";
	}
	?></h1>
	<form action="/words/generate" method="post">
		<input type="submit" value="Generate">
	</form>
	<form action="/words/reset" method="post">
		<input type="submit" value="Reset">
	</form>
</div>
</body>
</html>