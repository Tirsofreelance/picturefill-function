# PHP PictureFill Function
[PictureFill](https://github.com/scottjehl/picturefill) by [@scottjehl](https://twitter.com/scottjehl) it’s a “Responsive Images approach that you can use today that mimics the [proposed picture element](http://www.w3.org/TR/2013/WD-html-picture-element-20130226/) using `span`s, for safety sake.”

This PHP function helps to implement it in sites with a huge amount of images so you don’t have to repeat the pictureFill markup every time (it can be tireless).

## How to use:
You have to include the `pictureFillFunction.php` in your document header:

```html
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Function for PictureFill</title>
	<!-- 
	You have to include pictureFillFunction.php in your document header
	This will include picturefill.js too.
	 -->
	<?php include "../pictureFillFunction.php" ?>
</head>
```
This inclusion will add picture fill.js. Right now we have a problem with that: you either have to define an absolute path or remove the line 2 in `pictureFillFunction.php` it and include `pincturefill.js` yourself in the document you want to use it.

## Define images and breakpoints
Whenever you want to include your images with picture fill you only have to set up the images you want to include and its respective breakpoints:
```php
		$picture = array(
			 'img/small.jpg' => '',
			 'img/medium.jpg' => ‘(min-width:400px)’,
			 'img/big.jpg' => ‘(min-width:1024px)’
		 );
```

As you can see, you can define as many images as you want with its breakpoints. It will print the correct picturefill markup ready to work. 

Remember to insert the breakpoint into parenthesis `()` because they may not be the only variable:
```php
		'img/medium.jpg' => ‘(min-width:400px) and (orientation:portrait)’
```

If the breakpoint variable is left blank it won’t print any breakpoint, recomendable for base images or “the first image” if we go mobile first.

Also, remember to declare every vendor-prefixed breakpoint, like the density ones:

```php
		$picture = array(
			'img/retina_medium.jpg' => '(min-width: 400px) and (-webkit-device-pixel-ratio: 2.0)',
			'img/retina_medium.jpg' => '(min-width: 400px) and (min--moz-device-pixel-ratio: 2.0)',
			 'img/retina_medium.jpg' => '(min-width: 400px) and (min-device-pixel-ratio: 2.0)',
		 );
```

Declare de `$alt` variable to define the alternative text of the image (_alt_ property) and the `$def` variable to define the image for browsers with no JS.

The whole declaration would be like:

```php
$picture = array(
			 'img/small.jpg' => '',
			 'img/medium.jpg' => '(min-width:400px)',
			 'img/big.jpg' => '(min-width:1024px)'
		 );

		$alt = "Alt Text";

		$def = "img/small.jpg";

		PictureFill($picture, $alt);
```