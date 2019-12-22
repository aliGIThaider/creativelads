<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Creativelads<?php wp_title('', true,''); ?></title>


		<?php wp_head();?>


</head>
<body>


	<header>
			<div class="container">


				<h2 style="color: white; font-size: 24px; font-weight: 700;">CREATIVE LADS</h2>
				
				<?php 
				wp_nav_menu(

						array(

							'theme_location' => 'top-bar',
							'menu_class' => 'top-bar'

						)


				);?>

			</div>


	</header>

