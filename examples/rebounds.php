<?php

require_once('../src/dribbble.php');

$dribbble = new Dribbble();

# find a shot (must come before comments/rebounds call
$shot = $dribbble->shot->find(65147);

# Get rebounds
$rebounds = $shot->rebounds(array('per_page' => 4));

?>
<!DOCTYPE html>
<html>

	<head>
		<title>Rebound Examples | Dribbble PHP</title>
		<link rel="stylesheet" href="css/style.css" />
		
	</head>
	
	<body>
	
		<header>
			<h1>Dribbble API (PHP) / <span>Rebounds</span></h1>
		</header>
		
		<section>
		
			<h1>Original Shot</h1>
			
			<ul class="shots">
				<li>
					<h2><a href="<?php echo $shot->url;?>"><?php echo $shot->title; ?></a></h2> 
					<a href="<?php echo $shot->url;?>"><img src="<?php echo $shot->image_url; ?>" alt="<?php echo $shot->title; ?>"/></a>
					<p>from <a href="<?php echo $shot->player->url; ?>"><?php echo $shot->player->name; ?></a>
				</li>
			</ul>
			
		</section>
		
		<section>
			<h1>Rebounds</h1>
			<?php if ($rebounds) : ?>
	
				<ul class="shots">
				
				<?php foreach ($rebounds as $rebound) { ?>
					
					<li>
						<h2><a href="<?php echo $rebound->url;?>"><?php echo $rebound->title; ?></a></h2> 
						<a href="<?php echo $rebound->url;?>"><img src="<?php echo $rebound->image_url; ?>" alt="<?php echo $rebound->title; ?>"/></a>
						<p>from <a href="<?php echo $rebound->player->url; ?>"><?php echo $rebound->player->name; ?></a>
					</li>
					
				<?php } ?>
				
				</ul>
			
			<?php else : ?>
			
				<p>No rebounds on this shot yet</p>
			
			<?php endif; ?>
		</section>
		
		<footer>
			<p>This page uses the <a href="http://github.com/martinbean/dribbble-php" title="Dribbble PHP Wrapper on GitHub" target="_blank">Dribbble PHP Wrapper</a> built for <a href="http://dribbble.com/api">Dribbble's API</a>.</p>
		</footer>
		
	</body>

</html>

