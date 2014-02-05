<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Function for PictureFill</title>
	<!-- A Few Styles -->
	<style>
		body {
			font-family: Helvetica, Arial, Verdana, sans-serif;
			background-color: AliceBlue;
		}
		h1 {
			text-align: center;
		}

		h1 small {
			display: block;
			font-size: 14px;
		}
		.wrapper {
			max-width: 1024px;
			margin: 0 auto;
			background-color: white;
			padding: 1em;
		}

		pre {
			background-color: grey;
			color: white;
			padding: 2em;
			font-size: courier, monospace;
		}
		

	</style>
	<!-- 
	You have to include pictureFillFunction.php in your document header
	This will include picturefill.js too.
	 -->
	<?php include "../pictureFillFunction.php" ?>
</head>
<body>
<div class="wrapper">
	<h1>PHP PictureFill Function <small><a href="https://github.com/scottjehl/picturefill">PictureFill</a> by <a href="https://twitter.com/scottjehl">@scottjehl</a></small></h1>

	<h2>Usage:</h2>
	<pre>
	&lt?php 
		$picture = array(
			 'img/small.jpg' => '',
			 'img/medium.jpg' => '(min-width:400px)',
			 'img/big.jpg' => '(min-width:1024px)'
		 );

		$alt = "Alt Text";

		$def = "img/small.jpg";

		PictureFill($picture, $alt);
	 ?>
	</pre>

	<?php 
		$picture = array(
			 'img/small.jpg' => '',
			 'img/medium.jpg' => '(min-width:400px)',
			 'img/big.jpg' => '(min-width:1024px)'
		 );

		$alt = "Alt Text";

		$def = "img/small.jpg";

		PictureFill($picture, $alt);
	 ?>
</div>
</body>
</html>