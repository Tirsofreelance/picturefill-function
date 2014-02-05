<?php 
echo "<script src=\"http://localhost:8888/proyectos/picturefill%20function/js/picturefill.js\"></script>";

function PictureFill($picture, $alt, $def) { ?>
	<span data-picture data-alt="<?php echo $alt ?> ">

		<?php
		foreach($picture as $image=>$breakpoint) {
		 echo "<span data-src=\"". $image ."\""; 
			 if ($breakpoint !="") {
			 	echo "data-media=\"". $breakpoint ."\"";
			 }
		echo "></span>";

        ?>
		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
		<noscript>
            <img src="<?php echo $def; ?>" alt="<?php echo $alt; ?>">
        </noscript>
        <?php 
		}
		?>
        
    </span>

    <?php



}


 ?>