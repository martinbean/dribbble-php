<?php

require_once('../src/dribbble.php');

$dribbble = new Dribbble();

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Preset Feeds | Dribbble PHP</title>
		<link rel="stylesheet" href="css/style.css" />
		
	</head>
	
	<body>
	
		<header>
			<h1>dribbble API (PHP) / <span>Preset Feeds</span></h1>
		</header>
		
		<section>
		
			<h1>Popular Shots</h1>
			
			<ul class="shots">
			
			<?php
			
				//If we're using the same dribbble object, this will overwrite previous calls
				$popular_shots = $dribbble->shot->popular(array('page' => 1, 'per_page' => 3));
				foreach ($popular_shots->shots as $shot) { ?>
				
				<li>
					<h2><a href="<?php echo $shot->url;?>"><?php echo $shot->title; ?></a></h2> 
					<a href="<?php echo $shot->url;?>"><img src="<?php echo $shot->image_url; ?>" alt="<?php echo $shot->title; ?>"/></a>
					<p>from <a href="<?php echo $shot->player->url; ?>"><?php echo $shot->player->name; ?></a>
				</li>
				
			<?php } ?>
			
			</ul>
			
		</section>
		
		<section>
		
			<h1>Everyone Shots</h1>
			
			<ul class="shots">
			
			<?php
				
				//If we're using the same dribbble object, this will overwrite previous calls
				$everyone_shots = $dribbble->shot->everyone(array('page' => 1, 'per_page' => 3));
				
				foreach ($everyone_shots->shots as $shot) { ?>
				
				<li>
					<h2><a href="<?php echo $shot->url;?>"><?php echo $shot->title; ?></a></h2> 
					<a href="<?php echo $shot->url;?>"><img src="<?php echo $shot->image_url; ?>" alt="<?php echo $shot->title; ?>"/></a>
					<p>from <a href="<?php echo $shot->player->url; ?>"><?php echo $shot->player->name; ?></a>
				</li>
				
			<?php } ?>
			
			</ul>
			
		</section>
		
		<section>
		
			<h1>Debut Shots</h1>
			
			<ul class="shots">
			
			<?php
				
				//If we're using the same dribbble object, this will overwrite previous calls
				$debut_shots = $dribbble->shot->debuts(array('page' => 1, 'per_page' => 3));
				foreach ($debut_shots->shots as $shot) { ?>
				
				<li>
					<h2><a href="<?php echo $shot->url;?>"><?php echo $shot->title; ?></a></h2> 
					<a href="<?php echo $shot->url;?>"><img src="<?php echo $shot->image_url; ?>" alt="<?php echo $shot->title; ?>"/></a>
					<p>from <a href="<?php echo $shot->player->url; ?>"><?php echo $shot->player->name; ?></a>
				</li>
				
			<?php } ?>
			
			</ul>
			
		</section>
		
		<footer>
			<p>This page uses the <a href="http://github.com/martinbean/dribbble-php" title="Dribbble PHP Wrapper on GitHub" target="_blank">Dribbble PHP Wrapper</a> built for <a href="http://dribbble.com/api">Dribbble's API</a>.</p>
		</footer>
		
	</body>

</html>